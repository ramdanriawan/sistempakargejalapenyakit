<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- jquery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- angular -->
    <script src="{{ asset('js/angular/angular.min.js') }}"></script>
    <script src="{{ asset('js/angular-route/angular-route.min.js') }}"></script>

    <!-- sweetalert -->
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>

    <!-- form serialize -->
    <script src="{{ asset('js/form-serialize/index.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" ng-app='myApp'>
            <ng-view></ng-view>
        </main>
    </div>

    <script>
        //inisialisasi module
        var app = angular.module('myApp', ['ngRoute']);
        
        app.config(function($routeProvider){
            $routeProvider.when('/', {
                templateUrl: '/views/welcome.blade.php',
                controller: 'RegisterTesterController'
            })
            .when('/pilihPenyakit', {
                templateUrl: '/views/pilihPenyakit.blade.php',
                controller: 'PilihPenyakitController'
            })
            .when('/penyakit/:penyakit_id/gejala', {
                templateUrl: '/views/gejala.blade.php',
                controller: 'GejalaController'
            })
            .when('/penyakit/gejala/:penyakit_id/result', {
                templateUrl: '/views/gejalaResult.blade.php',
                controller: 'GejalaResultController'
            });
        });

        app.run(function($rootScope, $http){
            $rootScope.refreshPenyakit = function() {
                $rootScope.penyakits = null;

                $http({
                    url: '{{ route("refreshPenyakit") }}',
                }).then((response) => {
                    $rootScope.penyakits = response.data.penyakits;
                })
            }

            $rootScope.getPenyakit = function(penyakit) {
                $rootScope.penyakit = null;

                $http({
                    url: '/getPenyakit/' + penyakit,
                }).then((response) => {
                    $rootScope.penyakit = response.data.penyakit;
                });
            }

            // event ketika tombol reset diclick untuk halaman yang hanya ada 1 form
            $(document).on('click', '.reset', function(e){
                e.preventDefault();

                swal({
                    title: "Reset data ini?",
                    text: "Data yang direset harus diinput ulang!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((ok) => {
                    if (ok)
                        $('form')[0].reset();

                });
            });
        });

        app.controller('RegisterTesterController', function($rootScope, $http){
            $rootScope.testersCreateErrors = null;
            $(document).on('submit', 'form[name=testerCreate]', function(e){
                e.preventDefault();

                $rootScope.tester = null;
                $rootScope.tester = serialize(document.getElementById($(this).attr('id')), { hash: true });

                $http({
                    url: '{{ route("testerCheckValidate") }}',
                    method: 'post',
                    data: $rootScope.tester
                }).then((response) => {
                    location.href = $(this).attr('action');

                }, (response) => {
                    swal({
                        type: 'error',
                        timer: 1000,
                        icon: 'error',
                        showConfirmButton: false,
                        text: 'Invalid Input!'
                    });

                    $rootScope.testersCreateErrors = {
                        errors: response.data.errors
                    }
                });
                
            });
        });

        app.controller('PilihPenyakitController', function($rootScope){
            $rootScope.refreshPenyakit();

            $(document).on('submit', 'form[name=pilihPenyakit]', function(e){
                e.preventDefault();

                location.href = '#!/penyakit/' + $(this).find('#penyakit_id').val() + "/gejala";
            });
        });

        app.controller('GejalaController', function($routeParams, $rootScope, $http){
            $rootScope.penyakit_id = null;
            $rootScope.gejalas = null;
            $rootScope.tester.id = null;
            $rootScope.gejalaResultCreate = null;
            $rootScope.penyakit_id = $routeParams.penyakit_id;

            $http({
                url: '/refreshGejala/' + $rootScope.penyakit_id,
            }).then((response) => {
                $rootScope.gejalas = response.data.gejalas;
            })

            $(document).on('submit', 'form[name=gejalaResult]', function(e){
                e.preventDefault();

                swal({  
                    title: "Gejala sudah benar?",
                    text: "Yakin gejala yang diinput sudah benar?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((ok) => {
                    if (ok) {
                        $rootScope.gejalaResultCreate = serialize(document.getElementById($(this).attr('id')), { hash: true });

                        $rootScope.tester.range = localStorage.range;
                        $rootScope.tester.keterangan = localStorage.tingkat;

                        $http({
                            url: '/tested/store',
                            method: 'post',
                            data: $rootScope.tester
                        }).then((response) => {
                            $rootScope.tester.id = response.data.id;
                        });

                        $('form')[0].reset();
                        location.href = $(this).find('input[name=action]').val();
                    }

                });
            });
        });

        app.controller('GejalaResultController', function($routeParams, $rootScope, $http){
            $rootScope.getPenyakit($rootScope.penyakit_id);

            var gejalaResultCreate = Object.values($rootScope.gejalaResultCreate);

            range = 0;
            for(let a = 0; a < gejalaResultCreate.length; a++){
                if ( gejalaResultCreate[a] == 'tidak' )
                    range += 0;
                else if ( gejalaResultCreate[a] == 'tidak lagi' )
                    range += .25;
                else if ( gejalaResultCreate[a] == 'sedikit' )
                    range += .50;
                else if ( gejalaResultCreate[a] == 'sedang' )
                    range += .75;
                else if ( gejalaResultCreate[a] == 'parah' )
                    range += 1;
            }

            $rootScope.range = null;
            $rootScope.range = ((range / gejalaResultCreate.length) * 100).toPrecision(4); 

            $rootScope.tingkat = 'Sehat';
            var range_min = 0;
            if ( $rootScope.range <= 0)
            {
                $rootScope.tingkat = 'Normal';
            }
            else if ( $rootScope.range <= 25)
            {
                $rootScope.tingkat = 'Awal';
                range_min = 0;
            }
            else if ( $rootScope.range <= 50 )
            {
                $rootScope.tingkat = 'Kecil';
                range_min = 25;
            }
            else if ( $rootScope.range <= 75 )
            {
                $rootScope.tingkat = 'Sedang';
                range_min = 50;
            }
            else if ( $rootScope.range <= 100 )
            {
                $rootScope.tingkat = 'Parah';
                range_min = 75;
            }

            localStorage.range = $rootScope.range;
            localStorage.tingkat = $rootScope.tingkat;

            $rootScope.obats = null;
            $http({
                url: '/getObats/' + $rootScope.penyakit_id + '/' + $rootScope.range + "/" + range_min
            }).then((response) => {
                $rootScope.obats = response.data.obats;
            });

            $rootScope.gejalaResultCreate.tester_id = $rootScope.tester.id;
            $rootScope.gejalaResultCreate._token = '{{ csrf_token() }}'
            $http({
                url: '/result',
                method: 'post',
                data: $rootScope.gejalaResultCreate
            }).then((response) => {
                
            })
            
        });
    </script>
</body>
</html>

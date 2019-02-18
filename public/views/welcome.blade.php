<div class="container" ng-controller='RegisterTesterController'>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">Register Tester</div>

                <div class="card-body">
                    <form action='#!pilihPenyakit' name='testerCreate' id='testerCreate'>
                        <div class='form-group'>
                            <label for='nama'>Nama</label>
                            <input ng-model='nama' id='nama' class='form-control' name='nama' required/>

                            <ul ng-if='testersCreateErrors.errors !== null'>
                                <li ng-repeat='error in testersCreateErrors.errors.nama' ng-bind-html-unsafe='error'>
                                    <span class='text-danger'>{{ error }}</span>
                                </li>
                            </ul>
                        </div>
                        <div class='form-group'>
                            <label for='umur'>Umur</label>
                            <input type='number' min='1' max='100' ng-model='umur' id='umur'  class='form-control' name='umur'  required/>
                            
                            <ul ng-if='testersCreateErrors.errors !== null'>
                                <li ng-repeat='error in testersCreateErrors.errors.umur' ng-bind-html-unsafe='error'>
                                    <span class='text-danger'>{{ error }}</span>
                                </li>
                            </ul>
                        </div>
                        <div class='form-group'>
                            <label for='jenis_kelamin'>Jenis Kelamin</label>
                            <select ng-model='jenis_kelamin'  id='jenis_kelamin' class='form-control' name='jenis_kelamin' required>
                                <option value=''>-- Pilih Jenis Kelamin --</option>
                                <option value='l'>Laki - Laki</option>
                                <option value='p'>Perempuan</option>
                            </select>
                            
                            <ul ng-if='testersCreateErrors.errors !== null'>
                                <li ng-repeat='error in testersCreateErrors.errors.jenis_kelamin' ng-bind-html-unsafe='error'>
                                    <span class='text-danger'>{{ error }}</span>
                                </li>
                            </ul>
                        </div>

                        <div class="form-group">
                            <span class='float-right'>
                                <button type='reset' class="reset btn btn-warning">
                                    Reset
                                </button>
                                <button type='submit' class="btn btn-info">
                                    Selanjutnya
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
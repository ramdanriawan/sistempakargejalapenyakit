<div class="container" ng-controller='GejalaResultController'>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Hasil Cek Gejala</h2>
                    <h4>Penyakit {{ penyakit.nama }}</h4>

                    <p>
                        <h2>{{ range }}%</h2>
                        <h4>
                            <span ng-if='tingkat == "Normal"'>
                                <span class='text-success'>{{ tingkat }}</span>
                            </span>
                            <span ng-if='tingkat == "Awal"'>
                                <span class='text-secondary'>{{ tingkat }}</span>
                            </span>
                            <span  ng-if='tingkat == "Kecil"'>
                                <span class='text-info'>{{ tingkat }}</span>
                            </span>
                            <span  ng-if='tingkat == "Sedang"'>
                                <span class='text-warning'>{{ tingkat }}</span>
                            </span>
                            <span  ng-if='tingkat == "Parah"'>
                                <span class='text-danger'>{{ tingkat }}</span>
                            </span>
                        </h4>
                </div>

                <div class="card-body container">
                    <div class='row'>
                        <div class='col-6'>
                            <h4>Data tester</h4>
                            <p>
                            <table>
                                <tr>
                                    <th>#ID</th>
                                    <td>:</td>
                                    <td>{{ tester.id }}</td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>:</td>
                                    <td>{{ tester.nama }}</td>
                                </tr>
                                <tr>
                                    <th>Umur</th>
                                    <td>:</td>
                                    <td>{{ tester.umur }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>:</td>
                                    <td>{{ tester.jenis_kelamin }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class='col-6'>
                            <h4>Obat yang diperlukan</h4>
                            <p>
                            <ul style='border: 1px dotted black; padding: 0 5px;'>
                                <li ng-repeat='obat in obats'>{{ obat.nama }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-12'>
                            <span class='float-right'>
                                <button class='btn btn-primary' onclick=' this.style.display = "none"; print(); this.style.display = "inline-block";'> Print</button>
                                <a class='btn btn-success' href='#!/'> Start</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
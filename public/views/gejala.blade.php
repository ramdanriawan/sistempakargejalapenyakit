<div class="container" ng-controller='GejalaController'>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">Test Gejala Penyakitnya</div>

                <div class="card-body">
                    <form name='gejalaResult' id='gejalaResult'>
                        <input type='hidden' name='action' value='#!/penyakit/gejala/{{ penyakit_id }}/result' />
                        <div class='form-group'>
                            <div ng-repeat = 'gejala in gejalas'>
                                <label for='penyakit_id'>{{ gejala.keterangan }}</label>
                                <div class='d-flex justify-content-between mr-5'>
                                    <label>
                                        <input value='tidak' type='radio' name='{{ gejala.id }}' required> Tidak
                                    </label>
                                    <label>
                                        <input value='tidak lagi'  type='radio' name='{{ gejala.id }}'> Tidak Lagi
                                    </label>
                                    <label>
                                        <input  value='sedikit' type='radio' name='{{ gejala.id }}'> Sedikit
                                    </label>
                                    <label>
                                        <input  value='sedang' type='radio' name='{{ gejala.id }}'> Sedang
                                    </label>
                                    <label>
                                        <input  value='parah' type='radio' name='{{ gejala.id }}'> Parah
                                    </label>
                                </div>

                                <hr>
                            </div>
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
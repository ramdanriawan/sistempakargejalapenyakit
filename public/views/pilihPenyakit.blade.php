<div class="container" ng-controller='PilihPenyakitController'>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">Pilih Penyakit</div>

                <div class="card-body">
                    <form name='pilihPenyakit' id='pilihPenyakit'>
                        <div class='form-group'>
                            <label for='penyakit_id'>Pilih Penyakit</label>
                            <select id='penyakit_id' class='form-control' name='penyakit_id'>
                                <option value=''>-- Pilih Penyakit --</option>
                                <option ng-repeat='penyakit in penyakits' value='{{ penyakit.id }}'>{{ penyakit.nama }}</option>
                            </select>
                            
                            <ul ng-if='testersCreateErrors !== null'>
                                <li ng-repeat='error in pilihPenyakitErrors.errors.penyakit_id' ng-bind-html-unsafe='error'>{{ error }}</li>
                            </ul>
                        </div>

                        <div class="form-group">
                            <span class='float-right'>
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
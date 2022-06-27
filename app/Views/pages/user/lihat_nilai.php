<?= $this->extend('layout/template_table'); ?>

<?= $this->section('content'); ?>
<div class="card">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Nilai Siswa</h6>
    </div>
    <div class="card-body shadow">
        <div class="note note-default mb-2">
            <h1 class="h4">Keterangan :</h1>
            Halaman nilai siswa ini berisi informasi mengenai nilai siswa.
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Masukan Kelas</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Masukan Semester</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Semester Ganjil</option>
                        <option>Semester Genap</option>
                    </select>
                </div>
            </div>
            <div class="form-group mt-2 text-center">
                <input class="btn btn-primary" type="button" value="Lihat Data">
            </div>
        </div>

        <!--Data Siswa-->
        <table class="table table-hover mt-2" width="100%" cellspacing="0">
            <tr>
                <td style="width: 25%;">Nama</td>
                <td style="width: 3%;">:</td>
                <td>Reka Rachmadi</td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>5</td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>:</td>
                <td>Ganjil</td>
            </tr>
            <tr>
                <td>Wali Kelas</td>
                <td>:</td>
                <td>Nur Hayati S.Pd,</td>
            </tr>
        </table>

        <!--Tabel Nilai Siswa-->
        <div class="table-responsive">
            <table class="table table-bordered table-hover text-center" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th rowspan="2">MATA PELAJARAN</th>
                        <th colspan="4">TEMA 1</th>
                        <th colspan="4">TEMA 2</th>
                        <th colspan="4">TEMA 3</th>
                        <th colspan="4">TEMA 4</th>
                        <th rowspan="2">RERATA SUB TEMA</th>
                        <th rowspan="2">NILAI PT</th>
                        <th rowspan="2">NILAI PAS</th>
                        <th rowspan="2">NILAI RERATA</th>
                    </tr>
                    <tr>
                        <th>SUB TEMA-1.1</th>
                        <th>SUB TEMA-1.2</th>
                        <th>SUB TEMA-1.3</th>
                        <th>SUB TEMA-1.4</th>
                        <th>SUB TEMA-2.1</th>
                        <th>SUB TEMA-2.2</th>
                        <th>SUB TEMA-2.3</th>
                        <th>SUB TEMA-2.4</th>
                        <th>SUB TEMA-3.1</th>
                        <th>SUB TEMA-3.2</th>
                        <th>SUB TEMA-3.3</th>
                        <th>SUB TEMA-3.4</th>
                        <th>SUB TEMA-4.1</th>
                        <th>SUB TEMA-4.2</th>
                        <th>SUB TEMA-4.3</th>
                        <th>SUB TEMA-4.4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>MATEMATIKA</td>
                        <td>70</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(''); ?>
<legend><?php echo $title;?></legend>
<?php echo validation_errors();?>
<?php echo $message;?>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <h4>A. LOKASI</h4><br>
    <div class="form-group">
        <label class="col-lg-2 control-label">Nama Desa</label>
        <div class="col-lg-5">
            <input type="text" name="nama_desa" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Kecamatan</label>
        <div class="col-lg-5">
            <input type="text" name="kecamatan" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Kota / Kabupaten</label>
        <div class="col-lg-5">
            <input type="text" name="kota" class="form-control">
        </div>
    </div>

    <br><h4>B. DATA UMUM</h4><br>
    <div class="form-group">
        <label class="col-sm-3 control-label">Jumlah dusun di desa</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_dusun" class="form-control">
        </div>
        <label class="col-sm-1 control-label">Dusun</label>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Jumlah penduduk desa</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">Jiwa</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_kk" class="form-control">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Jumlah penduduk perempuan</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_p" class="form-control">
        </div>
        <label class="col-sm-1 control-label">Jiwa</label>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Jumlah penduduk yg mendapat layanan air minum layak</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">KK</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_kk" class="form-control">
        </div>
        <label class="col-sm-1 control-label">Dusun</label>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Jumlah penduduk yg mendapat layanan air minum sistem perpipaan</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Jumlah sambungan rumah (SR)</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">SR</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_kk" class="form-control">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Program Pamsimas</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">Dusun</label>
    </div>

     <div class="form-group">
        <label class="col-sm-4 control-label">Program Dana Alokasi Khusus (DAK)</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">Dusun</label>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">PNPM Perkotaan</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">Dusun</label>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">PNPM Perdesaan</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">Dusun</label>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Swadaya / Perorangan</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">Dusun</label>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Lainnya (sebutkan)</label>
        <div class="col-sm-3">
            <input type="text" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">Dusun</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg sudah akses Jamban Sehat Permanen</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg sudah akses Jamban Sehat Semi Permanen</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg sudah akses Jamban Sehat Sharing</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg mendapat pelayanan pengelolaan sampah (diangkut petugas)</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg menngelola sampahnya sendiri</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg sudah menerapkan prinsip 3R</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg membakar sampah</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg membuang sampah ke badan air (sungai, selokan, kolam)</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg membuang sampah ke lahan kosong</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg membuang sampah di kebun/lahan kosong</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah wirausaha STBM yg dilatih</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">Orang</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah wirausaha STBM yg dilatih - Perempuan</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah wirausaha STBM yg aktif</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">Orang</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah wirausaha STBM yg aktif - Perempuan</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah sekolah yg pernah menerima program STBM atau Cuci tangan pakai sabun</label>
        <div class="col-sm-2">
            <input type="number" name="jumlah_penduduk_jw" class="form-control">
        </div>
        <label class="col-sm-1 control-label">Sekolah</label>
    </div>

    <br><h4>C. KONDISI SOSIAL EKONOMI DAN GEOGRAFIS</h4><br>



    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
        <a href="<?php echo site_url('desa');?>" class="btn btn-default">Kembali</a>
    </div>
</form>
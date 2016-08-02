<legend><?php echo $title;?></legend>
<?php echo validation_errors();?>
<?php echo $message;?>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <h4>A. LOKASI</h4><br>
    <div class="form-group">
        <label class="col-lg-2 control-label">Nama Desa</label>
        <div class="col-lg-5">
            <input type="text" name="nama_desa" class="form-control" value="<?php echo $desa['nama_desa'];?>" readonly="readonly">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Kecamatan</label>
        <div class="col-lg-5">
            <input type="text" name="kecamatan" class="form-control" value="<?php echo $desa['kecamatan'];?>">
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-2 control-label">Kota / Kabupaten</label>
        <div class="col-lg-5">
            <input type="text" name="kota" class="form-control" value="<?php echo $desa['kota'];?>">
        </div>
    </div>

    <br><h4>B. DATA UMUM</h4><br>
    <div class="form-group">
        <label class="col-sm-3 control-label">Jumlah dusun di desa</label>
        <div class="col-sm-2">
            <input type="number" name="jml_dusun" class="form-control" value="<?php echo $desa['jml_dusun'];?>">
        </div>
        <label class="col-sm-1 control-label">Dusun</label>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Jumlah penduduk desa</label>
        <div class="col-sm-2">
            <input type="number" name="jml_penduduk_jw" class="form-control" value="<?php echo $desa['jml_penduduk_jw'];?>">
        </div>
        <label class="col-sm-1 control-label">Jiwa</label>
        <div class="col-sm-2">
            <input type="number" name="jml_penduduk_kk" class="form-control" value="<?php echo $desa['jml_penduduk_kk'];?>">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Jumlah penduduk perempuan</label>
        <div class="col-sm-2">
            <input type="number" name="jml_penduduk_p" class="form-control" value="<?php echo $desa['jml_penduduk_p'];?>">
        </div>
        <label class="col-sm-1 control-label">Jiwa</label>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Jumlah penduduk yg mendapat layanan air minum layak</label>
        <div class="col-sm-2">
            <input type="number" name="jmlp_amlayak_kk" class="form-control" value="<?php echo $desa['jmlp_amlayak_kk'];?>">
        </div>
        <label class="col-sm-1 control-label">KK</label>
        <div class="col-sm-2">
            <input type="number" name="jmlp_amlayak_ds" class="form-control" value="<?php echo $desa['jmlp_amlayak_ds'];?>">
        </div>
        <label class="col-sm-1 control-label">Dusun</label>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Jumlah penduduk yg mendapat layanan air minum sistem perpipaan</label>
        <div class="col-sm-2">
            <input type="number" name="jmlp_amsp" class="form-control" value="<?php echo $desa['jmlp_amsp'];?>">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Jumlah sambungan rumah (SR)</label>
        <div class="col-sm-2">
            <input type="number" name="jml_sr_sr" class="form-control" value="<?php echo $desa['jml_sr_sr'];?>">
        </div>
        <label class="col-sm-1 control-label">SR</label>
        <div class="col-sm-2">
            <input type="number" name="jml_sr_kk" class="form-control" value="<?php echo $desa['jml_sr_kk'];?>">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Program Pamsimas</label>
        <div class="col-sm-2">
            <input type="number" name="p_pasimas" class="form-control" value="<?php echo $desa['p_pasimas'];?>">
        </div>
        <label class="col-sm-1 control-label">Dusun</label>
        <div class="col-sm-2">
            <input type="radio" name="p_pasimas_st" value="Ada"> Ada
            <input type="radio" name="p_pasimas_st" value="Tidak"> Tidak
        </div>
    </div>

     <div class="form-group">
        <label class="col-sm-4 control-label">Program Dana Alokasi Khusus (DAK)</label>
        <div class="col-sm-2">
            <input type="number" name="p_dak" class="form-control" value="<?php echo $desa['p_dak'];?>">
        </div>
        <label class="col-sm-1 control-label">Dusun</label>
        <div class="col-sm-2">
            <input type="radio" name="p_dak_st" value="Ada"> Ada
            <input type="radio" name="p_dak_st" value="Tidak"> Tidak
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">PNPM Perkotaan</label>
        <div class="col-sm-2">
            <input type="number" name="pnpm_kota" class="form-control" value="<?php echo $desa['pnpm_kota'];?>">
        </div>
        <label class="col-sm-1 control-label">Dusun</label>
        <div class="col-sm-2">
            <input type="radio" name="pnpm_kota_st" value="ada"> Ada
            <input type="radio" name="pnpm_kota_st" value="tidak"> Tidak
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">PNPM Perdesaan</label>
        <div class="col-sm-2">
            <input type="number" name="pnpm_desa" class="form-control" value="<?php echo $desa['pnpm_desa'];?>">
        </div>
        <label class="col-sm-1 control-label">Dusun</label>
        <div class="col-sm-2">
            <input type="radio" name="pnpm_desa_st" value="ada"> Ada
            <input type="radio" name="pnpm_desa_st" value="tidak"> Tidak
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Swadaya / Perorangan</label>
        <div class="col-sm-2">
            <input type="number" name="swadaya" class="form-control" value="<?php echo $desa['swadaya'];?>">
        </div>
        <label class="col-sm-1 control-label">Dusun</label>
        <div class="col-sm-2">
            <input type="radio" name="swadaya_st" value="ada"> Ada
            <input type="radio" name="swadaya_st" value="tidak"> Tidak
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">Lainnya (sebutkan)</label>
        <div class="col-sm-3">
            <input type="text" name="lainnya" class="form-control" value="<?php echo $desa['lainnya'];?>">
        </div>
        <div class="col-sm-2">
            <input type="number" name="lainnya_ds" class="form-control" value="<?php echo $desa['lainnya_ds'];?>">
        </div>
        <label class="col-sm-1 control-label">Dusun</label>
        <div class="col-sm-2">
            <input type="radio" name="lainnya_st" value="ada"> Ada
            <input type="radio" name="lainnya_st" value="tidak"> Tidak
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg sudah akses Jamban Sehat Permanen</label>
        <div class="col-sm-2">
            <input type="number" name="jmlp_jsp" class="form-control" value="<?php echo $desa['jmlp_jsp'];?>">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg sudah akses Jamban Sehat Semi Permanen</label>
        <div class="col-sm-2">
            <input type="number" name="jmlp_jssp" class="form-control" value="<?php echo $desa['jmlp_jssp'];?>">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg sudah akses Jamban Sehat Sharing</label>
        <div class="col-sm-2">
            <input type="number" name="jmlp_jss" class="form-control" value="<?php echo $desa['jmlp_jss'];?>">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg mendapat pelayanan pengelolaan sampah (diangkut petugas)</label>
        <div class="col-sm-2">
            <input type="number" name="jmlp_pps" class="form-control" value="<?php echo $desa['jmlp_pps'];?>">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg menngelola sampahnya sendiri</label>
        <div class="col-sm-2">
            <input type="number" name="jmlp_mss" class="form-control" value="<?php echo $desa['jmlp_mss'];?>">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg sudah menerapkan prinsip 3R</label>
        <div class="col-sm-2">
            <input type="number" name="jmlp_p3r" class="form-control" value="<?php echo $desa['jmlp_p3r'];?>">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg membakar sampah</label>
        <div class="col-sm-2">
            <input type="number" name="jmlp_ms" class="form-control" value="<?php echo $desa['jmlp_ms'];?>">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg membuang sampah ke badan air (sungai, selokan, kolam)</label>
        <div class="col-sm-2">
            <input type="number" name="jmlp_mskba" class="form-control" value="<?php echo $desa['jmlp_mskba'];?>">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg membuang sampah ke lahan kosong</label>
        <div class="col-sm-2">
            <input type="number" name="jmlp_msklk" class="form-control" value="<?php echo $desa['jmlp_msklk'];?>">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah penduduk yg membuang sampah di kebun/lahan kosong</label>
        <div class="col-sm-2">
            <input type="number" name="jmlp_msdklk" class="form-control" value="<?php echo $desa['jmlp_msdklk'];?>">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah wirausaha STBM yg dilatih</label>
        <div class="col-sm-2">
            <input type="number" name="jml_wirastbm" class="form-control" value="<?php echo $desa['jml_wirastbm'];?>">
        </div>
        <label class="col-sm-1 control-label">Orang</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah wirausaha STBM yg dilatih - Perempuan</label>
        <div class="col-sm-2">
            <input type="number" name="jml_wirastbm_p" class="form-control" value="<?php echo $desa['jml_wirastbm_p'];?>">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah wirausaha STBM yg aktif</label>
        <div class="col-sm-2">
            <input type="number" name="jml_wirastbm_a" class="form-control" value="<?php echo $desa['jml_wirastbm_a'];?>">
        </div>
        <label class="col-sm-1 control-label">Orang</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah wirausaha STBM yg aktif - Perempuan</label>
        <div class="col-sm-2">
            <input type="number" name="jml_wirastbm_ap" class="form-control" value="<?php echo $desa['jml_wirastbm_ap'];?>">
        </div>
        <label class="col-sm-1 control-label">KK</label>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Jumlah sekolah yg pernah menerima program STBM atau Cuci tangan pakai sabun</label>
        <div class="col-sm-2">
            <input type="number" name="jmls_pstbm" class="form-control" value="<?php echo $desa['jmls_pstbm'];?>">
        </div>
        <label class="col-sm-1 control-label">Sekolah</label>
    </div>

    <br><h4>C. KONDISI SOSIAL EKONOMI DAN GEOGRAFIS</h4><br>

    <div class="form-group">
        <label class="col-sm-5 control-label">Mata pencaharian utama penduduk</label>
        <div class="col-sm-3">
            <select name="matapencaharian" class="form-control" value="<?php echo $desa['matapencaharian'];?>">
                <option></option>
                <option value="Bertani">Bertani</option>
                <option value="Berdagang">Berdagang</option>
                <option value="Nelayan">Nelayan</option>
                <option value="Pegawai Negeri">Pegawai Negeri</option>
                <option value="Pegawai Swasta">Pegawai Swasta</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Lainnya</label>
        <div class="col-sm-3">
            <input type="text" name="matapencaharian_dll" class="form-control" value="<?php echo $desa['matapencaharian_dll'];?>">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Rata-rata penghasilan penduduk per bulan</label>
        <div class="col-sm-3">
            <select name="rr_penghasilan" class="form-control" value="<?php echo $desa['rr_penghasilan'];?>">
                <option></option>
                <option value="< Rp 2 Juta">&lt; Rp 2 Juta</option>
                <option value="Rp 2 Juta">Rp 2 Juta</option>
                <option value="Rp 3 - 5 Juta">Rp 3 - 5 Juta</option>
                <option value="Rp 5 - 10 Juta">Rp 5 - 10 Juta</option>
                <option value="Diatas Rp 10 Juta">Diatas Rp 10 Juta</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Besar biaya rata-rata yg dikeluarkan penduduk utk air minum per bulan</label>
        <div class="col-sm-3">
            <select name="rr_airminum" class="form-control" value="<?php echo $desa['rr_airminum'];?>">
                <option></option>
                <option value="< Rp 25.000">&lt; Rp 25.000</option>
                <option value="Rp 25.000 - 50.000">Rp 25.000 - 50.000</option>
                <option value="Diatas Rp 50.000">Diatas Rp 50.000</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-5 control-label">Tipe wilayah</label>
        <div class="col-sm-3">
            <select name="tipe_wil" class="form-control" value="<?php echo $desa['tipe_wil'];?>">
                <option></option>
                <option value="Dataran rendah/datar">Dataran rendah/datar</option>
                <option value="Dataran tinggi/pegunungan">Dataran tinggi/pegunungan</option>
                <option value="Perairan sungai">Perairan sungai</option>
                <option value="Perairan laut">Perairan laut</option>
            </select>
        </div>
    </div>


    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Update</button>
        <a href="<?php echo site_url('desa');?>" class="btn btn-default">Kembali</a>
    </div>
</form>

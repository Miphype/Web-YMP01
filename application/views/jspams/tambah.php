<legend><?php echo $title;?></legend>
<?php echo validation_errors();?>
<?php echo $message;?>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-lg-2 control-label">Nama Desa</label>
        <div class="col-lg-5">
            <input type="text" name="nama_desa" class="form-control">
        </div>
    </div>
    <hr>
    <h4>A. SISTEM PELAYANAN AIR MINUM</h4>
    <label style="margin-left:20px;">Jenis pilihan (opsi) yg digunakan</label><br>
    <table cellpadding="0" style="margin:0 0 10px 40px;">
        <tr>
            <td width="350px"><input type="radio" name="jenis_opsi" value="Penangkap mata air gravitasi"> Penangkap mata air gravitasi</td>
            <td width="350px"><input type="radio" name="jenis_opsi" value="Pengolahan air permukaan gravitasi"> Pengolahan air permukaan gravitasi</td>
        </tr>
        <tr>
            <td width="350px"><input type="radio" name="jenis_opsi" value="Penangkap mata air dgn sistem pompa"> Penangkap mata air dgn sistem pompa</td>
            <td width="350px"><input type="radio" name="jenis_opsi" value="Pengolahan air permukaan dgn sistem pompa"> Pengolahan air permukaan dgn sistem pompa</td>
        </tr>
        <tr>
            <td width="350px"><input type="radio" name="jenis_opsi" value="Sumur bor dalam dgn pompa"> Sumur bor dalam dgn pompa</td>
            <td width="350px"><input type="radio" name="jenis_opsi" value="Tapping (sambungan) PDAM"> Tapping (sambungan) PDAM</td>
        </tr>
        <tr>
            <td width="350px"><input type="radio" name="jenis_opsi" value="Sumur gali dgn sistem pompa"> Sumur gali dgn sistem pompa</td>
            <td width="350px"><input type="radio" name="jenis_opsi" value="Lainnya"> Lainnya <input style="width:120px;" type="text"></td>
        </tr>
    </table>

    <label style="margin-left:20px;">Sumber energi untuk operasi</label><br>
    <table cellpadding="0" style="margin:0 0 10px 40px;">
        <tr>
            <td width="350px"><input type="radio" name="sumber_energi" value="Gravitasi"> Gravitasi</td>
            <td width="350px"><input type="radio" name="sumber_energi" value="Solar (sinar matahari)"> Solar (sinar matahari)</td>
        </tr>
        <tr>
            <td width="350px"><input type="radio" name="sumber_energi" value="Listrik"> Listrik</td>
            <td width="350px"><input type="radio" name="sumber_energi" value="PLN Air (pompa hidran)"> PLN Air (pompa hidran)</td>
        </tr>
        <tr>
            <td width="350px"><input type="radio" name="sumber_energi" value="Genset"> Genset</td>
            <td width="350px"><input type="radio" name="sumber_energi" value="Lainnya"> Lainnya <input style="width:120px;" type="text"></td>
        </tr>
    </table>

    <br><h4>B. JENIS SARANA AIR MINUM &amp; SANITASI TERBANGUN</h4>
    <label style="margin-left:20px;">Jenis pilihan (opsi) yg digunakan</label><br>
    
    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Penangkap mata air (borncaptuing)</td>
            <td width="100px"><input type="number" name="pma_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="pma_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="pma_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="pma_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Sumur gali (dangkal)</td>
            <td width="100px"><input type="number" name="sgdkl_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="sgdkl_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="sgdkl_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="sgdkl_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Sumur bor (dalam)</td>
            <td width="100px"><input type="number" name="sbdlm_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="sbdlm_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="sbdlm_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="sbdlm_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Sumur bor (dangkal)</td>
            <td width="100px"><input type="number" name="sbdkl_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="sbdkl_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="sbdkl_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="sbdkl_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Tapping PDAM</td>
            <td width="100px"><input type="number" name="tappdam_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="tappdam_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="tappdam_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="tappdam_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Bangunan penangkap air permukaan (intake)</td>
            <td width="100px"><input type="number" name="intake_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="intake_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="intake_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="intake_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Saringan pasir lambat</td>
            <td width="100px"><input type="number" name="spl_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="spl_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="spl_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="spl_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Galeri infiltrasi</td>
            <td width="100px"><input type="number" name="gi_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="gi_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="gi_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="gi_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Bak penampungan air hujan</td>
            <td width="100px"><input type="number" name="bpah_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="bpah_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="bpah_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="bpah_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <br><label style="margin-left:20px;">Bangunan Pelayanan</label><br>
    
    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Menara air</td>
            <td width="100px"><input type="number" name="ma_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="ma_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="ma_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="ma_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Hidran Umum</td>
            <td width="100px"><input type="number" name="hu_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="hu_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="hu_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="hu_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Sambungan Rumah (SR)</td>
            <td width="100px"><input type="number" name="sr_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="sr_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="sr_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="sr_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Bak Penampung</td>
            <td width="100px"><input type="number" name="bp_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="bp_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="bp_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="bp_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Kran Umum</td>
            <td width="100px"><input type="number" name="ku_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="ku_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="ku_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="ku_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <br><label style="margin-left:20px;">Bangunan Distribusi</label><br>
    
    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Pipa Transmisi</td>
            <td width="100px"><input type="number" name="pt_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="pt_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="pt_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="pt_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Pipa Distribusi</td>
            <td width="100px"><input type="number" name="pd_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="pd_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="pd_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="pd_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <br><label style="margin-left:20px;">Bak Pelengkap/Penunjang</label><br>
    
    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Bak Pelepas Tekan (BPT)</td>
            <td width="100px"><input type="number" name="bpt_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="bpt_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="bpt_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="bpt_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Katup (valve) dan rumah katup</td>
            <td width="100px"><input type="number" name="kvrk_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="kvrk_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="kvrk_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="kvrk_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Katup pelepas</td>
            <td width="100px"><input type="number" name="kap_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="kap_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="kap_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="kap_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Pompa dan rumah pompa</td>
            <td width="100px"><input type="number" name="prp_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="prp_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="prp_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="prp_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Perlintasan jalan</td>
            <td width="100px"><input type="number" name="perja_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="perja_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="perja_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="perja_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Gorong-gorong pipa</td>
            <td width="100px"><input type="number" name="ggp_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="ggp_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="ggp_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="ggp_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Beton penguat (thrust block)</td>
            <td width="100px"><input type="number" name="bptb_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="bptb_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="bptb_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="bptb_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <br><label style="margin-left:20px;">Sarana Sanitasi</label><br>
    
    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Sarana Cuci Tangan Pakai sabun (CTPS)</td>
            <td width="100px"><input type="number" name="ctps_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="ctps_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="ctps_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="ctps_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Sarana Pembuangan Air Limbah (SPAL)</td>
            <td width="100px"><input type="number" name="spal_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="spal_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="spal_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="spal_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Jamban Sekolah</td>
            <td width="100px"><input type="number" name="jamse_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="jamse_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="jamse_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="jamse_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Jamban Keluarga</td>
            <td width="100px"><input type="number" name="jamke_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="jamke_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="jamke_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="jamke_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">MCK</td>
            <td width="100px"><input type="number" name="mck_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="mck_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="mck_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="mck_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 45px;">
        <tr>
            <td width="270px">Tempat Sampah Terpilah</td>
            <td width="100px"><input type="number" name="tst_unit" style="width:50px;"> Unit</td>
            <td width="400px"><input type="radio" name="tst_stat" value="Berfungsi"> Berfungsi
            <input type="radio" name="tst_stat" value="Berfungsi sebagian"> Berfungsi sebagian
            <input type="radio" name="tst_stat" value="Tidak berfungsi"> Tidak berfungsi</td>
        </tr>
    </table><br>

    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
        <a href="<?php echo site_url('sab');?>" class="btn btn-default">Kembali</a>
    </div>
</form>
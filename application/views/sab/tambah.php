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
    <label style="margin-left:20px;">Sumber Air Baku yg digunakan untuk IPAM yg dikelola</label><br>
    <table cellpadding="0" style="margin:0 0 10px 35px;">
        <tr>
            <td width="200px"><input type="radio" name="sab_ipam" value="Mata air"> Mata air</td>
            <td width="200px"><input type="radio" name="sab_ipam" value="Air tanah dangkal"> Air tanah dangkal</td>
            <td width="200px"><input type="radio" name="sab_ipam" value="Air tanah dalam (sumur bor)"> Air tanah dalam (sumur bor)</td>
        </tr>
        <tr>
            <td width="200px"><input type="radio" name="sab_ipam" value="Embung/Situ"> Embung/Situ</td>
            <td width="200px"><input type="radio" name="sab_ipam" value="Waduk/Bendungan"> Waduk/Bendungan</td>
            <td width="200px"><input type="radio" name="sab_ipam" value="Danau"> Danau</td>
        </tr>
        <tr>
            <td width="200px"><input type="radio" name="sab_ipam" value="Air hujan"> Air hujan</td>
            <td width="200px"><input type="radio" name="sab_ipam" value="Sungai"> Air tanah dangkal</td>
            <td width="200px"><input type="radio" name="sab_ipam" value="Lainnya"> Lainnya <input style="width:120px;" type="text"></td>
        </tr>
    </table>

    <label style="margin-left:20px;">Status kepemilikan lahan sumber air baku</label><br>
    <table cellpadding="0" style="margin:0 0 10px 35px;">
        <tr>
            <td width="200px"><input type="radio" name="stat_klsab" value="Milik Perseorangan"> Milik Perseorangan</td>
            <td width="200px"><input type="radio" name="stat_klsab" value="Air tanah dangkal"> Milik Negara</td>
            <td width="200px"><input type="radio" name="stat_klsab" value="Air tanah dalam (sumur bor)"> Milik Desa</td>
        </tr>
        <tr>
            <td width="200px"><input type="radio" name="stat_klsab" value="Air hujan"> Tanah Wakaf</td>
            <td width="200px"><input type="radio" name="stat_klsab" value="Lainnya"> Lainnya <input style="width:120px;" type="text"></td>
            <td colspan="1"></td>
        </tr>
    </table>

    <label style="margin-left:20px;">Jarak air baku dari pemukiman</label><br>
    <table cellpadding="0" style="margin:0 0 10px 35px;">
        <tr>
            <td width="200px"><input type="radio" name="jarak_abdp" value="< 100 m"> &lt; 100 m</td>
            <td width="200px"><input type="radio" name="jarak_abdp" value="100 - 500 m"> 100 - 500 m</td>
            <td width="200px"><input type="radio" name="jarak_abdp" value="500 - 1.000 m"> 500 - 1.000 m</td>
        </tr>
        <tr>
            <td width="200px"><input type="radio" name="jarak_abdp" value="1.000 - 1.500 m"> 1.000 - 1.500 m</td>
            <td width="200px"><input type="radio" name="jarak_abdp" value="1.500 - 2.000 m"> 1.500 - 2.000 m</td>
            <td width="200px"><input type="radio" name="jarak_abdp" value="> 2.000 m"> &gt; 2.000 m</td>
        </tr>
    </table>

     <table cellpadding="0" style="margin:0 0 10px 20px;">
        <tr>
            <td width="400px"><label>Kapasitas sumber air total (sebelum dipakai utk IPAM)</label></td>
            <td width="200px"><input type="text" name="kapsat_sipam" style="width:120px;"> L/det</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 20px;">
        <tr>
            <td width="400px"><label>Kapasitas sumber air yg dipakai untuk IPAM</label></td>
            <td width="200px"><input type="text" name="kapsat_ipam" style="width:120px;"> L/det</td>
        </tr>
    </table>

    <label style="margin-left:20px;">Kualitas</label><br>
    <table cellpadding="0" style="margin:0 0 10px 35px;">
        <tr>
            <td width="200px"><input type="radio" name="kualitas" value="Jernih"> Jernih</td>
            <td width="200px"><input type="radio" name="kualitas" value="Tidak berwarna"> Tidak berwarna</td>
            <td width="300px"><input type="radio" name="kualitas" value="Tidak bau"> Tidak bau</td>
        </tr>
        <tr>
            <td width="200px"><input type="radio" name="kualitas" value="Tidak ada rasa"> Tidak ada rasa</td>
            <td width="200px"><input type="radio" name="kualitas" value="Suhu normal"> Suhu normal</td>
            <td width="300px"><input type="radio" name="kualitas" value="Tidak mengandung zat padat terlarut"> Tidak mengandung zat padat terlarut</td>
        </tr>
    </table>

    <label style="margin-left:20px;">Kontinuitas</label><br>
    <table cellpadding="0" style="margin:0 0 10px 35px;">
        <tr>
            <td width="300px"><input type="radio" name="kontinu" value="Mengalir stabil sepanjang tahun"> Mengalir stabil sepanjang tahun</td>
            <td width="300px"><input type="radio" name="kontinu" value="Mengalir tidak stabil"> Mengalir tidak stabil</td>
        </tr>
        <tr>
            <td width="300px"><input type="radio" name="kontinu" value="Mengalir stabil hanya musim hujan"> Mengalir stabil hanya musim hujan</td>
            <td width="300px"><input type="radio" name="kontinu" value="Sumber hilang"> Sumber hilang</td>
        </tr>
    </table>

    <label style="margin-left:20px;">Kuantitas curah hujan (khusus yg bersumber air hujan)</label><br>
    <table cellpadding="0" style="margin:0 0 10px 35px;">
        <tr>
            <td width="300px"><input type="radio" name="kuantitas" value="Curah hujan tinggi sepanjang tahun"> Curah hujan tinggi sepanjang tahun</td>
            <td width="300px"><input type="radio" name="kuantitas" value="Curah hujan sedang"> Curah hujan sedang</td>
        </tr>
        <tr>
            <td width="300px"><input type="radio" name="kuantitas" value="Curah hujan rendah"> Curah hujan rendah</td>
            <td colspan="1"></td>
        </tr>
    </table>

    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
        <a href="<?php echo site_url('sab');?>" class="btn btn-default">Kembali</a>
    </div>
</form>
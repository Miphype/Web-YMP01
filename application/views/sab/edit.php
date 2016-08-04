<legend><?php echo $title;?></legend>
<?php echo validation_errors();?>
<?php echo $message;?>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-lg-2 control-label">Nama Desa</label>
        <div class="col-lg-5">
            <input type="text" name="nama_desa" class="form-control" value="<?php echo $sab['nama_desa'];?>" readonly="readonly">
        </div>
    </div>
    <hr>
    <label style="margin-left:20px;">Sumber Air Baku yg digunakan untuk IPAM yg dikelola</label><br>
    <table cellpadding="0" style="margin:0 0 10px 35px;">
        <tr>
            <td width="200px"><input type="radio" name="sab_ipam" value="Mata air" <?php if($sab['sab_ipam']=='Mata air'){echo 'checked';};?>/> Mata air</td>
            <td width="200px"><input type="radio" name="sab_ipam" value="Air tanah dangkal" <?php if($sab['sab_ipam']=='Air tanah dangkal'){echo 'checked';};?>/> Air tanah dangkal</td>
            <td width="200px"><input type="radio" name="sab_ipam" value="Air tanah dalam (sumur bor)" <?php if($sab['sab_ipam']=='Air tanah dalam (sumur bor)'){echo 'checked';};?>/> Air tanah dalam (sumur bor)</td>
        </tr>
        <tr>
            <td width="200px"><input type="radio" name="sab_ipam" value="Embung/Situ" <?php if($sab['sab_ipam']=='Embung/Situ'){echo 'checked';};?>/> Embung/Situ</td>
            <td width="200px"><input type="radio" name="sab_ipam" value="Waduk/Bendungan" <?php if($sab['sab_ipam']=='Waduk/Bendungan'){echo 'checked';};?>/> Waduk/Bendungan</td>
            <td width="200px"><input type="radio" name="sab_ipam" value="Danau" <?php if($sab['sab_ipam']=='Danau'){echo 'checked';};?>/> Danau</td>
        </tr>
        <tr>
            <td width="200px"><input type="radio" name="sab_ipam" value="Air hujan" <?php if($sab['sab_ipam']=='Air hujan'){echo 'checked';};?>/> Air hujan</td>
            <td width="200px"><input type="radio" name="sab_ipam" value="Sungai" <?php if($sab['sab_ipam']=='Sungai'){echo 'checked';};?>/> Air tanah dangkal</td>
            <td width="200px"><input type="radio" name="sab_ipam" value="Lainnya" <?php if($sab['sab_ipam']=='Lainnya'){echo 'checked';};?>/> Lainnya <input style="width:120px;" type="text"></td>
        </tr>
    </table>

    <label style="margin-left:20px;">Status kepemilikan lahan sumber air baku</label><br>
    <table cellpadding="0" style="margin:0 0 10px 35px;">
        <tr>
            <td width="200px"><input type="radio" name="stat_klsab" value="Milik Perseorangan" <?php if($sab['stat_klsab']=='Milik Perseorangan'){echo 'checked';};?>/> Milik Perseorangan</td>
            <td width="200px"><input type="radio" name="stat_klsab" value="Air tanah dangkal" <?php if($sab['stat_klsab']=='Air tanah dangkal'){echo 'checked';};?>/> Milik Negara</td>
            <td width="200px"><input type="radio" name="stat_klsab" value="Air tanah dalam (sumur bor)" <?php if($sab['stat_klsab']=='Air tanah dalam (sumur bor)'){echo 'checked';};?>/> Milik Desa</td>
        </tr>
        <tr>
            <td width="200px"><input type="radio" name="stat_klsab" value="Air hujan" <?php if($sab['stat_klsab']=='Air hujan'){echo 'checked';};?>/> Tanah Wakaf</td>
            <td width="200px"><input type="radio" name="stat_klsab" value="Lainnya" <?php if($sab['stat_klsab']=='Lainnya'){echo 'checked';};?>/> Lainnya <input style="width:120px;" type="text"></td>
            <td colspan="1"></td>
        </tr>
    </table>

    <label style="margin-left:20px;">Jarak air baku dari pemukiman</label><br>
    <table cellpadding="0" style="margin:0 0 10px 35px;">
        <tr>
            <td width="200px"><input type="radio" name="jarak_abdp" value="< 100 m" <?php if($sab['jarak_abdp']=='< 100 m'){echo 'checked';};?>/> &lt; 100 m</td>
            <td width="200px"><input type="radio" name="jarak_abdp" value="100 - 500 m" <?php if($sab['jarak_abdp']=='100 - 500 m'){echo 'checked';};?>/> 100 - 500 m</td>
            <td width="200px"><input type="radio" name="jarak_abdp" value="500 - 1.000 m" <?php if($sab['jarak_abdp']=='500 - 1.000 m'){echo 'checked';};?>/> 500 - 1.000 m</td>
        </tr>
        <tr>
            <td width="200px"><input type="radio" name="jarak_abdp" value="1.000 - 1.500 m" <?php if($sab['jarak_abdp']=='1.000 - 1.500 m'){echo 'checked';};?>/> 1.000 - 1.500 m</td>
            <td width="200px"><input type="radio" name="jarak_abdp" value="1.500 - 2.000 m" <?php if($sab['jarak_abdp']=='1.500 - 2.000 m'){echo 'checked';};?>/> 1.500 - 2.000 m</td>
            <td width="200px"><input type="radio" name="jarak_abdp" value="> 2.000 m" <?php if($sab['jarak_abdp']=='> 2.000 m'){echo 'checked';};?>/> &gt; 2.000 m</td>
        </tr>
    </table>

     <table cellpadding="0" style="margin:0 0 10px 20px;">
        <tr>
            <td width="400px"><label>Kapasitas sumber air total (sebelum dipakai utk IPAM)</label></td>
            <td width="200px"><input type="text" name="kapsat_sipam" style="width:120px;" value="<?php echo $sab['kapsat_sipam'];?>"> L/det</td>
        </tr>
    </table>

    <table cellpadding="0" style="margin:0 0 10px 20px;">
        <tr>
            <td width="400px"><label>Kapasitas sumber air yg dipakai untuk IPAM</label></td>
            <td width="200px"><input type="text" name="kapsat_ipam" style="width:120px;" value="<?php echo $sab['kapsat_ipam'];?>"> L/det</td>
        </tr>
    </table>

    <label style="margin-left:20px;">Kualitas</label><br>
    <table cellpadding="0" style="margin:0 0 10px 35px;">
        <tr>
            <td width="200px"><input type="radio" name="kualitas" value="Jernih" <?php if($sab['kualitas']=='Jernih'){echo 'checked';};?>/> Jernih</td>
            <td width="200px"><input type="radio" name="kualitas" value="Tidak berwarna" <?php if($sab['kualitas']=='Tidak berwarna'){echo 'checked';};?>/> Tidak berwarna</td>
            <td width="300px"><input type="radio" name="kualitas" value="Tidak bau" <?php if($sab['kualitas']=='Tidak bau'){echo 'checked';};?>/> Tidak bau</td>
        </tr>
        <tr>
            <td width="200px"><input type="radio" name="kualitas" value="Tidak ada rasa" <?php if($sab['kualitas']=='Tidak ada rasa'){echo 'checked';};?>/> Tidak ada rasa</td>
            <td width="200px"><input type="radio" name="kualitas" value="Suhu normal" <?php if($sab['kualitas']=='Suhu normal'){echo 'checked';};?>/> Suhu normal</td>
            <td width="300px"><input type="radio" name="kualitas" value="Tidak mengandung zat padat terlarut" <?php if($sab['kualitas']=='Tidak mengandung zat padat terlarut'){echo 'checked';};?>/> Tidak mengandung zat padat terlarut</td>
        </tr>
    </table>

    <label style="margin-left:20px;">Kontinuitas</label><br>
    <table cellpadding="0" style="margin:0 0 10px 35px;">
        <tr>
            <td width="300px"><input type="radio" name="kontinu" value="Mengalir stabil sepanjang tahun" <?php if($sab['kontinu']=='Mengalir stabil sepanjang tahun'){echo 'checked';};?>/> Mengalir stabil sepanjang tahun</td>
            <td width="300px"><input type="radio" name="kontinu" value="Mengalir tidak stabil" <?php if($sab['kontinu']=='Mengalir tidak stabil'){echo 'checked';};?>/> Mengalir tidak stabil</td>
        </tr>
        <tr>
            <td width="300px"><input type="radio" name="kontinu" value="Mengalir stabil hanya musim hujan" <?php if($sab['kontinu']=='Mengalir stabil hanya musim hujan'){echo 'checked';};?>/> Mengalir stabil hanya musim hujan</td>
            <td width="300px"><input type="radio" name="kontinu" value="Sumber hilang" <?php if($sab['kontinu']=='Sumber hilang'){echo 'checked';};?>/> Sumber hilang</td>
        </tr>
    </table>

    <label style="margin-left:20px;">Kuantitas curah hujan (khusus yg bersumber air hujan)</label><br>
    <table cellpadding="0" style="margin:0 0 10px 35px;">
        <tr>
            <td width="300px"><input type="radio" name="kuantitas" value="Curah hujan tinggi sepanjang tahun" <?php if($sab['kuantitas']=='Curah hujan tinggi sepanjang tahun'){echo 'checked';};?>/> Curah hujan tinggi sepanjang tahun</td>
            <td width="300px"><input type="radio" name="kuantitas" value="Curah hujan sedang" <?php if($sab['kuantitas']=='Curah hujan sedang'){echo 'checked';};?>/> Curah hujan sedang</td>
        </tr>
        <tr>
            <td width="300px"><input type="radio" name="kuantitas" value="Curah hujan rendah" <?php if($sab['kuantitas']=='Curah hujan rendah'){echo 'checked';};?>/> Curah hujan rendah</td>
            <td colspan="1"></td>
        </tr>
    </table>


    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Update</button>
        <a href="<?php echo site_url('desa');?>" class="btn btn-default">Kembali</a>
    </div>
</form>

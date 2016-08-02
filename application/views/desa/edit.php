<legend><?php echo $title;?></legend>
<?php echo validation_errors();?>
<?php echo $message;?>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
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
            <input type="text" name="kecamatan" class="form-control" value="<?php echo $desa['kecamatan'];?>">
        </div>
    </div>
    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Update</button>
        <a href="<?php echo site_url('desa');?>" class="btn btn-default">Kembali</a>
    </div>
</form>

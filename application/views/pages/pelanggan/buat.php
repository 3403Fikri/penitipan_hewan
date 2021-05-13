<div class="col-md-6 mx-auto">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 mx-auto font-weight-bold text-primary">Registrasi pelanggan</h6>
        </div>
        <div class="card-body">
        <?php if($this->session->flashdata('error')) {?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error')?></div>
        <?php } ?>
        <form action="<?php echo site_url('ruangan/ruangan_buat')?>" method="POST">
            <div class="form-group">
                <label for="">Nama Pelanggan</label>
                <input type="text" class="form-control" name="room_number">
            </div>
            <div class="form-group">
                <label for="">No HP</label>
                <input type="text" class="form-control" name="hp">
            </div>
            <input type="submit" class="btn btn-primary" value="Buat">
        </form>
    </div>
    </div>
</div>


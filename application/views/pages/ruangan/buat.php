<div class="col-md-6 mx-auto">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 mx-auto font-weight-bold text-primary">Buat ruangan baru</h6>
        </div>
        <div class="card-body">
        <?php if($this->session->flashdata('error')) {?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error')?></div>
        <?php } ?>
        <form action="<?php echo site_url('ruangan/ruangan_buat')?>" method="POST">
            <div class="form-group">
                <label for="">Nomor Ruangan</label>
                <input type="text" class="form-control" name="room_number">
            </div>
            <input type="submit" class="btn btn-primary" value="Buat">
        </form>
    </div>
    </div>
</div>


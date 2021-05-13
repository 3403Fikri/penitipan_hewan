<div class="col-md-6 mx-auto">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 mx-auto font-weight-bold text-primary">Edit Ruangan <?php echo $room_id?></h6>
        </div>
        <div class="card-body">
        <form action="<?php echo site_url('ruangan/ruangan_update')?>" method="POST">
            <input type="hidden" name="room_id" value="<?php echo $room_id; ?>">
            <div class="form-group">
                <label for="">Nomor Ruangan</label>
                <input type="text" class="form-control" value="<?php echo $data->room_number?>" name="room_number">
                <small class="form-text text-muted">Anda tidak bisa mengubah id ruangan</small>
            </div>
            <input type="submit" class="btn btn-primary" value="Edit">
        </form>
    </div>
    </div>
</div>


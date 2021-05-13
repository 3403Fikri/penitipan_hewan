<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<h1 class="h3 mb-0 text-gray-800">Ruangan</h1>
    </div>

    <div class="col-md-12">
    	<div class="card shadow mb-4">
    		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    			<h6 class="m-0 font-weight-bold text-primary">Daftar Semua Ruangan</h6>
    		</div>
    		<div class="card-body">
			<div class="d-flex flex-row-reverse mb-4">
				<a href="<?php echo site_url('ruangan/buat')?>" class="btn btn-primary">Buat</a>
			</div>
			<?php

			if($this->session->flashdata('success')) {
				?>
				<div class="alert alert-success">
					<?php echo $this->session->flashdata('success')?>
					<?php echo $this->session->flashdata('error')?>

				</div>
				<?php
			}
			
			?>
    			<div class="table-responsive">
    				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    					<thead>
    						<tr>
    							<th>ID Ruangan</th>
    							<th>Nomor Ruangan</th>
    							<th>Option</th>
    						</tr>
    					</thead>
    					<tfoot>
    						<tr>
    							<th>ID Ruangan</th>
    							<th>Nomor Ruangan</th>
    							<th>Option</th>
    						</tr>
    					</tfoot>
    					<tbody>
    						<?php foreach ($data as $key => $value): ?>
    							<tr>
    								<td><?php echo $value->room_id?></td>
    								<td><?php echo $value->room_number?></td>
    								<td>
    									<a class="btn btn-success" href="<?php echo site_url('ruangan/edit/'.$value->room_id)?>">Edit</a>
    									<a class="btn btn-danger" href="<?php echo site_url('ruangan/hapus/'.$value->room_id)?>">Hapus</a>
    								</td>
    							</tr>
    						<?php endforeach ?>
    					</tbody>
    				</table>
    			</div>
    		</div>
    	</div>
    </div>


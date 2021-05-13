<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<h1 class="h3 mb-0 text-gray-800">Pelanggan</h1>
    </div>

    <div class="col-md-12">
    	<div class="card shadow mb-4">
    		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    			<h6 class="m-0 font-weight-bold text-primary">Daftar Semua Pelanggan</h6>
    		</div>
    		<div class="card-body">
			<div class="d-flex flex-row-reverse mb-4">
				<a href="<?php echo site_url('pelanggan/buat')?>" class="btn btn-primary">Buat</a>
			</div>
			<?php

			if($this->session->flashdata('success')) {
				?>
				<div class="alert alert-success">
					<?php echo $this->session->flashdata('success')?>
				</div>
                
				<?php
			}
            if($this->session->flashdata('error')) {
				?>
				<div class="alert alert-danger">
					<?php echo $this->session->flashdata('error')?>
				</div>
                
				<?php
			}
			
			?>
    			<div class="table-responsive">
    				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    					<thead>
    						<tr>
    							<th>ID Pelanggan</th>
    							<th>Nama</th>
                                <th>No Hp</th>
    							<th>Option</th>
    						</tr>
    					</thead>
    					<tfoot>
    						<tr>
                                <th>ID Pelanggan</th>
    							<th>Nama</th>
                                <th>No Hp</th>
    							<th>Option</th>
    						</tr>
    					</tfoot>
    					<tbody>
    						<?php foreach ($data as $key => $value): ?>
    							<tr>
    								<td><?php echo $value->customer_id?></td>
    								<td><?php echo $value->customer_name?></td>
    								<td><?php echo $value->customer_phone?></td>
    								<td>
    									<a class="btn btn-success" href="<?php echo site_url('ruangan/edit/'.$value->customer_id)?>">Edit</a>
    									<a class="btn btn-danger" href="<?php echo site_url('ruangan/hapus/'.$value->customer_id)?>">Hapus</a>
    								</td>
    							</tr>
    						<?php endforeach ?>
    					</tbody>
    				</table>
    			</div>
    		</div>
    	</div>
    </div>


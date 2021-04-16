<!--CRUD START-->

	<div id="main">		
		<section id="tableControlSection" class="d-flex">
			<div class="container d-row">
				<button type="button" class="btn d-cell" id="insertData" data-toggle="modal" data-target="#tambahData" >Tambah (+)</button>
			</div>
		</section>
		<section id="tableDataSection">
			<table class="loginbox tableSPP table-bordered">
				<thead>
			  	  	<th>No. </th>
			  	  <?php  
			  	  	foreach($names as $name){?>
			  	  	<th><?php echo $name;?></th>
			  	  	<?php } ?>
			  	  	<th>Edit</th>
			  	  	<th>Delete</th>
			    </thead>
			    <?php 
	  	  		$no = 1;
			  	foreach($table as $cell){?>
			    <tbody>
			  	  	<td><?php echo $no++?></td>
			  	  	<?php foreach($names as $name){?>
			  	  	<td ><?php echo $cell->$name; }?></td>	
			  	  	<td><a class="fa fa-edit"></a></td>		  	  	
			  	  	<td><a class="fa fa-trash"></a></td>		  	  	
			    </tbody>
			    <?php } ?>
			</table>
		</section>
	</div>
	<!--CRUD END-->
	<!--Insert Modal START-->
	<div class="modal" id="tambahData">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
       				<h4 class="modal-title">Tambah Data</h4>
       				<button type="button" class="close" data-dismiss="modal">&times;</button>
     			</div>
     				<form class="modal-body" method="POST" action="<?php echo site_url('pageCRUD/insertData')?>">

						<?php foreach($metas as $meta){
								if (isset($kelas) && isset($spp) && $meta->name == "id_kelas"){ ?>

									<div class="form-group">
										<label for="<?php echo $meta->name;?>">kelas</label>
										<select class="form-control" id="<?php echo $meta->name;?>" name="<?php echo $meta->name;?>">
											<?php 
											foreach($kelas as $nameKelas) {?>
												<option value="<?php echo $nameKelas->id_kelas; ?>"><?php echo $nameKelas->nama_kelas; ?></option>
											<?php }?>
										</select>
									</div>

								<?php } else if ($meta->name == "id_spp"){?>

									<div class="form-group">
										<label for="<?php echo $meta->name;?>">tahun_pembelajaran</label>
										<select class="form-control" id="<?php echo $meta->name;?>" name="<?php echo $meta->name;?>">
											<?php 
											foreach($spp as $nameSPP) {?>
												<option value="<?php echo $nameSPP->id_spp; ?>"><?php echo $nameSPP->tahun; ?></option>
											<?php }?>
										</select>
									</div>
								<?php } else {
										if($meta->name == "nisn"){
											$nisn = $this->modelSPP->genNisn();
											?>
											<div class="form-group">
												<label for="<?php echo $meta->name;?>"><?php echo $meta->name;?></label>
												<input class="form-control" value="<?php echo $nisn ?>" type="<?php echo $this->modelSPP->convertTyping($meta->type);?>" id="<?php echo $meta->name;?>" name="<?php echo $meta->name;?>" readonly/>
											</div>
										<?php }else if($meta->name == "nis"){ 
											$nis = $this->modelSPP->genNis();
											?>
											<div class="form-group">
												<label for="<?php echo $meta->name;?>"><?php echo $meta->name;?></label>
												<input class="form-control" value="<?php echo $nis ?>" type="<?php echo $this->modelSPP->convertTyping($meta->type);?>" id="<?php echo $meta->name;?>" name="<?php echo $meta->name;?>" readonly/>
											</div>
										<?php } else {?>
											<div class="form-group">
												<label for="<?php echo $meta->name;?>"><?php echo $meta->name;?></label>
												<input class="form-control" type="<?php echo $this->modelSPP->convertTyping($meta->type);?>" id="<?php echo $meta->name;?>" name="<?php echo $meta->name;?>"/>
											</div>
									<?php }?>
								<?php }?>
						<?php }?>
						<?php 
						$tableIdentifier = NULL;
							if(in_array('nisn', $names)){
								$tableIdentifier = "siswa";
							} else if(in_array('id_kelas', $names)){
								$tableIdentifier = "kelas";
							} else if(in_array('id_petugas', $names)){
								$tableIdentifier = "petugas";
							}
						?>
						<input type="text" class="form-control" name="tableIdentifier" value="<?php echo $tableIdentifier ?>" readonly/>
					
     			<div class="modal-footer">
        			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        			<button type="submit" class="btn btn-primary">Save</button>
      			</div>
      			</form>
			</div>
		</div>
	</div>
	<!--Insert Modal END-->
</body>
	
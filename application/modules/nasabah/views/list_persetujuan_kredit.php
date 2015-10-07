<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Daftar Pemohon</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> Pemohon</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Nama Debitur</th>
								  <th>Key Person</th>
								  <th>Nilai Kredit</th>
								  <th>Jangka Waktu</th>
								  <th>Aksi</th>
							  </tr>
						  </thead>   
						  <tbody>
							<?php
							if ($hasil) {
									
								foreach ($hasil as $t) {
							?>
							<tr>
								<td><?=$t->nama_debitur?></td>
								<td class="center"><?=$t->key_person?></td>
								<td class="center"><?=$t->maksimum_kredit?></td>
								<td class="center"><?=$t->jangka_waktu_kredit?></td>								
								<td class="center">									
									<a class="btn btn-success" href="<?=base_url()?>nasabah/persetujuan_<?=$this->uri->segment(2)?>/<?=$t->id?>">
										<i class="icon-zoom-in icon-white"></i>  
										Detail                                            
									</a>								
								</td>
							</tr>
							<?php
								}
							}
							?>							
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->		
    
					<!-- content ends -->
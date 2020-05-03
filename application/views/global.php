    <!--app-content open-->
				<div class="container app-content">
					<div class="">

						<!-- PAGE-HEADER END -->

						<!-- ROW-1 OPEN -->
						<div class="row mb-5 mt-5">
							<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
								<div class="card bg-secondary img-card box-primary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL POSITIF</p>
												<h2 class="mb-0 number-font"><?php echo $positif_global->value; ?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="<?php echo base_url('assets/'); ?>img/sad-u6e.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
								<div class="card bg-success img-card box-secondary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL SEMBUH</p>
												<h2 class="mb-0 number-font"><?php echo $sembuh_global->value; ?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="<?php echo base_url('assets/'); ?>img/happy-ipM.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
								<div class="card  bg-danger img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL MENINGGAL</p>
												<h2 class="mb-0 number-font"><?php echo $meninggal_global->value; ?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="<?php echo base_url('assets/'); ?>img/emoji-LWx.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-1 CLOSED -->

						<!-- ROW-3 OPEN -->
						<div class="row row-cards">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
								<div class="card">
									<div class="card-header ">
										<h3 class="card-title">Data Kasus Corona Virus Secara Global</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive service">
											<table class="table table-bordered table-hover mb-0 text-nowrap css-serial">
												<thead>
													<tr>
														<th class="atasbro">No.</th>
														<th class="atasbro">Negara</th>
														<th class="atasbro">Positif</th>
														<th class="atasbro">Sembuh</th>
														<th class="atasbro">Meninggal</th>
														
													</tr>
												</thead>
												<tbody>
													     
													<?php
													$i = 0;
													foreach($data_global as $q){
														$i++;
														?>
													<tr>
														<td><?= $i; ?>.</td>
														<td><?php echo $q->attributes->Country_Region; ?></td>
														<td><?php echo $q->attributes->Confirmed; ?></td>
														<td><?php echo $q->attributes->Recovered; ?></td>
														<td><?php echo $q->attributes->Deaths; ?></td>
													</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-3 CLOSED -->
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
			</div>

	
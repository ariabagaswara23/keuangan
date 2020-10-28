<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="../img/icon/stm.png"/>
	<title>Sistem Informasi Keuangan</title>
</head>
<body  style="background-image: url(../img/bg/bg3.jpg);">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 border-right">
				<header class="border-bottom">
					<img src="../img/icon/stm.png">
					<span class="h6">&nbsp;Sistem Informasi Keuangan</span>
				</header>
				<ul class="">
					<li class="list-inline h4"><a href="index-kepsek.php" class="nav-link listtype">Dashboard</a></li><br>
					<li class="list-inline h4"><a href="" class="nav-link disabled listtype">Submission</a></li><br>
					<li class="list-inline h4"><a href="report.php" class="nav-link listtype">Report</a></li><br>
					<li class="list-inline h4"><a href="" class="nav-link listtype">Add Account</a></li><br>
					<li class="list-inline h5 bawah"><a href="login.php" class="listtype">Sign Out <i class="fa fa-sign-out-alt"></i></a></li>
				</ul>
			</div>
			<div class="col-md-9 text-center">
				<header class="">
					<h4>Daftar Pengajuan</h4>
				</header>
				<div class="right">
					<form class="form-inline" method="post">
						<div class="form-group">
							<input type="text" name="" placeholder="Search" class="form-control">
							<button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</div>
				<br>
				<br>
				<div>
					<table class="table">
						<tr>
						<th>Pengajuan</th>
						<th>Pengaju</th>
						<th>Tanggal</th>
						<th>Status</th>
						<th>Detail Pengajuan</th>
						</tr>
						<tr>
							<td>Judul Pengajuan</td>
							<td>Nama Jurusan</td>
							<td>20-10-20</td>
							<td>-</td>
							<td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#detail">Lihat Detail</button></td>

							<!----- Modal ----->
							<div class="modal" id="detail">
								<div class="modal-dialog">
									<div class="modal-content">
										
										<!-- Header --->
										<div class="modal-header">
											<h4 class="modal-title">Judul Pengajuan</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>

										<!-- Body -->
										<div class="modal-body top">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

											<div class="modal-body bottom">
												<label><b>File Lampiran<b></label>
													<!-- NANTI DI SINI TERCANTUM FILE LAMPIRAN -->
											</div>
										</div>

										<!-- Footer -->
										<div class="modal-footer">
											<button type="button" class="btn btn-success" data-toggle="modal" data-target="#izinkan">Izinkan</button>

											<!-- Modal Izinkan -->

											<div class="modal fade bs-example-modal-sm" id="izinkan">
												<div class="modal-dialog modal-sm">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">Izinkan</h5>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>
														<div class="modal-body">
															<div class="form-group">
																<select class="form-control">
																	<option>Dana BOS</option>
																	<option>Dana APBD</option>
																</select>
																<br><br>
																<input type="number" name="danabos" class="form-control" placeholder="Masukkan Jumlah Dana BOS">
																<br>
																<input type="number" name="danaapbd" class="form-control" placeholder="Masukkan Jumlah Dana APBD">
															</div>
														</div>
														<div class="modal-footer">
															<input type="submit" name="submit" class="btn btn-primary" value="Submit">
														</div>
													</div>
												</div>
											</div>

											<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#tidakizinkan">Tidak Izinkan</button>

											<!-- Modal Tidak Izinkan -->

											<div class="modal fade bs-example-modal-sm" id="tidakizinkan">
												<div class="modal-dialog modal-sm">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">Tidak Izinkan</h5>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>
														<div class="modal-body">
															<label>Berikan Alasan</label>
															<textarea></textarea>
														</div>
														<div class="modal-footer">
															<input type="submit" name="submit" class="btn btn-primary" value="Submit">
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
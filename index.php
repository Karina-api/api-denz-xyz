<?php
$url = file_get_contents('https://api.kawalcorona.com/indonesia');
$data = json_decode($url, true);
?>
	
	<!DOCTYPE html>
		<html lang="en">
			
			<head>
				<meta charset="UTF-8">
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
						<title>Update Data Covid-19 ID</title>
						<link rel="shortcut icon" href="indonesia.svg" type="image/x-icon">
						<!-- bootstrapt -->
							<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
							<!-- font cdn -->
							<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
							</head>
							<body>
								
								<nav class="navbar navbar-expand navbar-dark bg-dark">
									<div class="nav navbar-nav">
										<a class="nav-item nav-link active" href="#"><i class="fa fa-fw fa-home"></i> Home <span class="sr-only">(current)</span></a>
										</div>
										</nav>
								
								<div class="container">
									<div class="row mt-4">
										<!-- alert -->
										<div class="col-md-12">
										<div class="alert alert-primary" role="alert">
											<strong>Update</strong> Data Virus Corona Di Indonesia!
											</div>
											</div>
											
											<!-- ke 1 -->
											<div class="col-md-3">
												<div class="card badge-primary p-3 mb-5 shadow rounded">
													<div class="card body">
														<h4 class="card-title text-center"><i class="fa fa-frown-open"></i> Positif</h4>
														<p class="card-text text-center"> <?= $data[0]['positif']; ?> </p>
														</div>
														</div>
														</div>
														
														<!-- ke 2 -->
														<div class="col-md-3">
												<div class="card badge-warning p-3 mb-5 shadow rounded">
													<div class="card body">
														<h4 class="card-title text-white text-center"><i class="fa fa-grin"></i> Dirawat</h4>
														<p class="card-text text-white text-center"> <?= $data[0]['dirawat']; ?> </p>
														</div>
														</div>
														</div>
														
														<!-- ke 3 -->
														<div class="col-md-3">
												<div class="card badge-success p-3 mb-5 shadow rounded">
													<div class="card body">
														<h4 class="card-title text-center"><i class="fa fa-frown-open"></i> Sembuh</h4>
														<p class="card-text text-center"> <?= $data[0]['sembuh']; ?> </p>
														</div>
														</div>
														</div>
														
														<!-- ke 4 -->
														<div class="col-md-3">
												<div class="card badge-danger p-3 mb-5 shadow rounded">
													<div class="card body">
														<h4 class="card-title text-center"><i class="fa fa-frown-open"></i> Meninggal</h4>
														<p class="card-text text-center"> <?= $data[0]['meninggal']; ?> </p>
														</div>
														</div>
														</div>
														
														</div>
														
														<div class="row justify-content-center">
															<div class="col-4">
																<div class="text-center">
																<a href="https://kawalcovid19.id/" target="_blank" class="btn btn-primary">Selengkapnya &raquo;</a>
																</div>
																</div>
																</div>
																
																</div>
																
																<!-- footer -->
																	<footer>
																		<div class="card-footer bg-dark text-light fixed-button">
																			<div class="container my-auto">
																				<span>Made with &hearts; by <a href="" target="_blank">Iqbalzz</a> </span>
																				</div>
																				</div>
																				</footer>
											
								
								</body>
									</html>
<?PHP
include "../core/SolutionC.php";
$solC=new SolutionC();
$liste=$solC->afficherSolutionss();

?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.spruko.com/demo/splite/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:13 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Splite-Admin Dashboard</title>

		<!--favicon -->
		<link rel="icon" href="favicon.html" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

		<!--Icons css-->
		<link rel="stylesheet" href="assets/css/icons.css">

		<!--Style css-->
		<link rel="stylesheet" href="assets/css/style.css">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">

		<!--Morris css-->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

	</head>

	<body class="app ">

		<div id="spinner"></div>
		<div class="wave -three"></div>

		<!--app open-->
		<div id="app" class="page">
			<div class="main-wrapper" >

			    <!--nav open-->
				<nav class="navbar navbar-expand-lg main-navbar">
					<a class="header-brand" href="index-2.html">
						<img src="assets/img/brand/logo-white.png" class="header-brand-img" alt="Splite-Admin  logo">
					</a>
					<form class="form-inline mr-auto">
						<ul class="navbar-nav mr-2">
							<li><a href="#" data-toggle="sidebar" class="nav-link nav-link toggle"><i class="fa fa-reorder"></i></a></li>
							<li><a href="#" data-toggle="search" class="nav-link nav-link d-md-none navsearch"><i class="fa fa-search"></i></a></li>
						</ul>
						<div class="search-element mr-3">
							<input class="form-control" type="search" placeholder="Search" aria-label="Search">
							<span class="Search-icon"><i class="fa fa-search"></i></span>
						</div>
					</form>
					<ul class="navbar-nav navbar-right">
					    <li class="dropdown dropdown-list-toggle d-none d-lg-block "><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><i class=" fa fa-flag-o "></i></a>
							<div class="dropdown-menu dropdown-menu-lg  dropdown-menu-right">
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="assets/img/flags/french_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>French</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="assets/img/flags/germany_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>Germany</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="assets/img/flags/italy_flag.jpg" alt="flag-img" class=" flag-sm  mr-3 align-self-center">
									<div>
										<strong>Italy</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="assets/img/flags/russia_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>Russia</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="assets/img/flags/spain_flag.jpg" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>Spain</strong>
									</div>
								</a>
							</div>
						</li>
						<li class="dropdown dropdown-list-toggle "><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><span class="badge badge-danger nav-link-badge">5</span><i class="hvr-buzz fa fa-envelope-o"></i></a>
							<div class="dropdown-menu dropdown-list dropdown-menu-right">
								<div class="dropdown-header">Messages
									<div class="float-right">
										<a href="#" class="text-white">View All</a>
									</div>
								</div>
								<div class="dropdown-list-content">
									<a href="#" class="dropdown-item dropdown-item-unread">
										<img alt="image" src="assets/img/avatar/avatar-3.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Stewart Ball</b>
													<p>Your template awesome</p>
												</div>
												<div class="time">6 hours ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item dropdown-item-unread">
										<img alt="image" src="assets/img/avatar/avatar-2.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Jonathan North</b>
													<p>Your Order Shipped.....</p>
												</div>
												<div class="time">45 mins ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<img alt="image" src="assets/img/avatar/avatar-4.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Victor Taylor</b>
													<p>Hi!, I' am web developer</p>
												</div>
												<div class="time"> 8 hours ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<img alt="image" src="assets/img/avatar/avatar-3.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Ruth	Arnold</b>
													<p>Hi!, I' am web designer</p>
												</div>
												<div class="time"> 3 hours ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<img alt="image" src="assets/img/avatar/avatar-5.jpg" class="rounded-circle dropdown-item-img">
										<div class="dropdown-item-desc">
											<div class="dropdownmsg d-flex">
												<div class="">
													<b>Sam	Lyman</b>
													<p>Hi!, I' am java developer</p>
												</div>
												<div class="time"> 15 mintues ago</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</li>
						<li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><span class="badge badge-secondary nav-link-badge">6</span><i class="fa fa-bell-o"></i></a>
							<div class="dropdown-menu dropdown-list dropdown-menu-right">
								<div class="dropdown-header">Notifications
									<div class="float-right">
										<a href="#" class="text-white">View All</a>
									</div>
								</div>
								<div class="dropdown-list-content">
									<a href="#" class="dropdown-item">
										<i class="fa fa-users text-primary"></i>
										<div class="dropdown-item-desc">
											<b>So many Users Visit your template</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-exclamation-triangle text-danger"></i>
										<div class="dropdown-item-desc">
											<b>Error message occurred....</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-users text-warning"></i>
										<div class="dropdown-item-desc">
											<b> Adding new people</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-shopping-cart text-success"></i>
										<div class="dropdown-item-desc">
											<b>Your items Arrived</b>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-comment text-primary"></i>
										<div class="dropdown-item-desc">
											<b>New Message received</b> <div class="float-right"><span class="badge badge-pill badge-danger badge-sm">67</span></div>
										</div>
									</a>
									<a href="#" class="dropdown-item">
										<i class="fa fa-users text-primary"></i>
										<div class="dropdown-item-desc">
											<b>So many Users Visit your template</b>
										</div>
									</a>
								</div>
							</div>
						</li>
						<li class="dropdown dropdown-list-toggle d-none d-lg-block">
							<a href="#" class="nav-link nav-link-lg full-screen-link">
								<i class="fa fa-expand " id="fullscreen-button"></i>
							</a>
						</li>
						<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg d-flex">
								<span class="mr-3 mt-2 d-none d-lg-block ">
									<span class="text-white">Hello,<span class="ml-1"> Alica Nestle</span></span>
								</span>
							<span><img src="assets/img/avatar/avatar-3.jpg" alt="profile-user" class="rounded-circle w-32 mr-2"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class=" dropdown-header noti-title text-center border-bottom pb-3">
									<h5 class="text-capitalize text-dark mb-1">Alica Nestle</h5>
									<small class="text-overflow m-0"> Web-Designer</small>
								</div>
								<a class="dropdown-item" href="profile.html"><i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span></a>
								<a class="dropdown-item" href="#"><i class="mdi mdi-settings mr-2"></i> <span>Settings</span></a>
								<a class="dropdown-item" href="#"><i class=" mdi mdi-message-outline mr-2"></i> <span>Mails</span></a>
								<a class="dropdown-item" href="#"><i class=" mdi mdi-account-multiple-outline mr-2"></i> <span>Friends</span></a>
								<a class="dropdown-item" href="#"><i class="fe fe-calendar mr-2"></i> <span>Activity</span></a>
								<a class="dropdown-item" href="#"><i class="mdi mdi-compass-outline mr-2"></i> <span>Support</span></a>
								<div class="dropdown-divider"></div><a class="dropdown-item" href="login.html"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span></a>
							</div>
						</li>
					</ul>
				</nav>
				<!--nav closed-->

                <!--aside open-->
				<aside class="app-sidebar">
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">
							<div class="nav-link pl-1 pr-1 leading-none ">
								<img src="assets/img/avatar/avatar-3.jpg" alt="user-img" class="avatar-xl rounded-circle mb-1">
								<span class="pulse bg-success" aria-hidden="true"></span>
							</div>
							<div class="user-info">
								<h6 class=" mb-1 text-dark">Alica Nestle</h6>
								<span class="text-muted app-sidebar__user-name text-sm"> Web-Designer</span>
							</div>
						</div>
					</div>
					
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">gestion compte</span></a>
							<ul class="slide-menu">
								<li><a class="slide-item"  href="indexcompte.php"><span>les comptes </span></a></li>
								<li><a class="slide-item" href="indexhistorique.php"><span>historique</span></a></li>
							
								
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Gestion produit</span></a>
							<ul class="slide-menu">
							<li><a class="slide-item"  href="backbassem/index-2.php"><span>gestion produit </span></a></li>
								<li><a class="slide-item" href="backbassem/index2.php"><span>gestion catalogue</span></a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Gestion Livraison</span></a>
							<ul class="slide-menu">
								<li><a href="backbassem/backend/livreur.php" class="slide-item"> Gestion livreur</a></li>
								<li><a href="backbassem/backend/livraison.php" class="slide-item"> Gestion livraison</a></li>
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="afficherProblemeAdmin.php" class="slide-item">Liste des problemes</a></li>
								<li><a href="afficherSolutionAdmin.php" class="slide-item">Liste des solutions</a></li>
								<li><a href="ajoutProbleme.php" class="slide-item"> Ajouter un probleme</a></li>
								<li><a href="ajoutSolution.php" class="slide-item">Ajouter une solution</a></li>
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="afficherRecAdmin.php"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Liste reclamations</span><span class="badge badge-secondary nav-badge1"><?php echo $recnontraite; ?></span></a>
							<ul class="slide-menu">
								<li><a href="afficherRecAdmin.php" class="slide-item">Traiter les reclamations</a></li>
							</ul>
						</li>

						<li>
							<a class="side-menu__item" href="adminPanier.php"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Liste paniers</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-edit"></i><span class="side-menu__label">Comments</span><span class="badge badge-pink nav-badge">6</span></a>
							<ul class="slide-menu">
								<li><a href="listeComments.php" class="slide-item">Liste des comentaires</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-line-chart"></i><span class="side-menu__label">Stats</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="index-2.php" class="slide-item">Stats</a></li>
							</ul>
						</li>
						
					
					
					
					</ul>
				</aside>
				<!--aside closed-->

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Dashboard 01</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
							</ol>
						</div>
						<!--page-header closed-->

                        <!--row open-->
						<div class="row">
							<div class="col-lg-6 col-xl-3 col-md-6 col-12">
								<div class="card">
									<div class="card-body text-center">
										<p class="text-muted mb-1">
											Today sales
										</p>
										<div class="">
											<h4 class="mt-2 mb-3">$2,345</h4>
											<div class="">
												<span class="sparkline_bar-1"></span>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="float-left">
											<p class="mb-0"><span class=""><i class="fa fa-arrow-circle-o-up ml-1 text-success"></i> 2.5%</span>  last month</p>
										</div>
										<div class="float-right">
											<i class="fa fa-line-chart"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-md-6 col-12">
								<div class="card">
									<div class="card-body text-center">
										<p class="text-muted mb-1">
											Today Orders
										</p>
										<div class="">
											<h4 class="mt-2 mb-3">$568</h4>
											<div class="">
												<span class="sparkline_pie"></span>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="float-left">
											<p class="mb-0"><span class=""><i class="fa fa-arrow-circle-o-down ml-1 text-danger"></i> 4%</span>  last month</p>
										</div>
										<div class="float-right">
											<i class="fa fa-shopping-cart "></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-md-6 col-12">
								<div class="card">
									<div class="card-body text-center">
										<p class="text-muted mb-1">
											Sales Revenue
										</p>
										<div class="">
											<h4 class="mt-2 mb-3">$135</h4>
											<div class="">
												<span class="sparkline_line1"></span>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="float-left">
											<p class="mb-0"><span class=""><i class="fa fa-arrow-circle-o-up ml-1 text-success"></i> 12%</span>  last month</p>
										</div>
										<div class="float-right">
											<i class="fa fa-signal"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-md-6 col-12">
								<div class="card">
									<div class="card-body text-center">
										<p class="text-muted mb-1">
											Today Profit
										</p>
										<div class="">
											<h4 class="mt-2 mb-3">15%</h4>
											<div class="">
												<span class="sparkline_discreet"></span>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="float-left">
											<p class="mb-0"><span class=""><i class="fa fa-arrow-circle-o-down ml-1 text-danger"></i> 5%</span>  last month</p>
										</div>
										<div class="float-right">
											<i class="fa fa-dollar"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

                        <!--row open-->
						<div class="row row-deck">
						    <div class="col-lg-6 col-xl-5 col-md-12 col-12">
							    <div class="card">
									<div class="card-header"><h4>Revenue</h4></div>
									<div class="card-body">
										<div class="mb-3">
											<div class="text-center">
												<div class="mb-2">
													<h6 class=" mb-1">Total Revenue</h6>
													<h3 class=" mb-2">15,730</h3>
													<span class="text-success"><i class="zmdi zmdi-long-arrow-up zmdi-hc-lg mr-2"></i><span>+24%</span></span><span class="text-muted ml-2">From Last Month</span>
												</div>
											</div>
										</div>
										<canvas id="barChart" class="chartjs-render-monitor  h-250"></canvas>
									</div>
								</div>
							</div>
						    <div class="col-lg-6 col-xl-7 col-md-12 col-12">
							    <div class="card overflow-hidden">
									<div class="card-header"><h4>Statistics</h4></div>
									<div class="card-body">
										<canvas id="sales-chart" class="chartjs-render-monitor chart-dropshadow h-350"></canvas>
						            </div>
						        </div>
							</div>
						</div>
						<!--row closed-->

						<!--row open-->
						<div class="row">
							<div class="col-lg-6 col-xl-3 col-sm-12 col-md-6">
								<div class="card p-3">
									<div class="d-flex align-items-center">
										<span class="stamp stamp-md bg-primary mr-3">
											<i class="fa fa-users"></i>
										</span>
										<div>
											<h4 class="m-0"><strong>765</strong></h4>
											<h6 class="mb-0">Customers</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-sm-12 col-md-6">
								<div class="card p-3">
									<div class="d-flex align-items-center">
										<span class="stamp stamp-md bg-orange mr-3">
											<i class="fa fa-cart-arrow-down"></i>
										</span>
										<div>
											<h4 class="m-0"><strong>92</strong></h4>
											<h6 class="mb-0">Selling</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-sm-12 col-md-6">
								<div class="card p-3">
									<div class="d-flex align-items-center">
										<span class="stamp stamp-md bg-warning mr-3">
											<i class="fa fa-eye"></i>
										</span>
										<div>
											<h4 class="m-0"><strong>2,456 </strong></h4>
											<h6 class="mb-0">Visitors</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-sm-12 col-md-6">
								<div class="card p-3">
									<div class="d-flex align-items-center">
										<span class="stamp stamp-md bg-success mr-3">
											<i class="fa fa-file-text"></i>
										</span>
										<div>
											<h4 class="m-0"><strong>125 </strong></h4>
											<h6 class="mb-0">FeedBack</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

                        <!--row open-->
						<div class="row row-deck">
							<div class="col-xl-4 col-lg-6 col-sm-12 col-sm-12">
								<div class="card ">
									<div class="card-header ">
										<h4>Sales Status</h4>
									</div>
									<div class="card-body">
										<canvas id="pieChart" class="chartjs-render-monitor chart-dropshadow"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-sm-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Browsing Status</h4>
									</div>
									<div class="card-body">
										<div class="mb-4">
											<p class="mb-2">Chrome<span class="float-right text-muted">80%</span></p>
											<div class="progress h-6">
											    <div class="progress-bar bg-primary w-80 " role="progressbar"></div>
											</div>
										</div>
										<div class="mb-4">
											<p class="mb-2">Firefox<span class="float-right text-muted">70%</span></p>
											<div class="progress h-6">
											    <div class="progress-bar bg-secondary w-70" role="progressbar"></div>
											</div>
										</div>
										<div class="mb-4">
											<p class="mb-2">Safari<span class="float-right text-muted">70%</span></p>
											<div class="progress h-6">
											    <div class="progress-bar bg-warning w-70" role="progressbar"></div>
											</div>
										</div>
										<div class="mb-4">
											<p class="mb-2">Opera<span class="float-right text-muted">60%</span></p>
											<div class="progress h-6">
											    <div class="progress-bar bg-success w-60" role="progressbar"></div>
											</div>
										</div>

										<div class="mb-3">
											<p class="mb-2">Internet Explore<span class="float-right text-muted">60%</span></p>
											<div class="progress h-6">
											    <div class="progress-bar bg-info w-60" role="progressbar"></div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4 col-lg-12 col-sm-12 col-sm-12">
								<div class="card ">
									<div class="card-header ">
										<h4>Order Status</h4>
									</div>
									<div class="card-body">
										<div id="bar-chart2" class="overflow-hidden h-280 chart-dropshadow"></div>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

                        <!--row open-->
						<div class="row">
							<div class="col-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h4>Product Summary</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap mb-0">
												<thead>
													<tr>
														
														<th>Solutions</th>
														<th>Supprimer</th>
														<th>Modifier</th>
														
													</tr>
												</thead>
												<tbody>
													<?php
													  foreach($liste as $row)
														{		
													?>
 <tr>
<td ><?php echo $row[2]; ?></td>
<td>
    <form method="POST" action="supprimerSolution.php">
    <input class="btn btn-danger" type="submit" name="supprimer" value="supprimer">
    <input type="hidden" value="<?PHP echo $row['0']; ?>" name="id_sol">
    </form>
</td>
<td><a href="modifierSolution.php?id_sol=<?PHP echo $row['0']; ?>">
    Modifier</a>
</td>


</tr>
												<?php }  ?>
													</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->
					</section>
				</div>
				<!--app-content closed-->

				<footer class="main-footer">
					<div class="text-center">
						Copyright &copy;Splite 2019. Design By<a href="https://spruko.com/"> Spruko</a>
					</div>
				</footer>

				<!-- Popupchat open-->
				<div class="popup-box chat-popup" id="qnimate">
					<div class="popup-head">
						<div class="popup-head-left pull-left"><img src="assets/img/avatar/avatar-3.jpg" alt="iamgurdeeposahan" class="mr-2"> Alica Nestle</div>
						<div class="popup-head-right pull-right">
							<div class="btn-group">
								<button class="chat-header-button" data-toggle="dropdown" type="button" aria-expanded="false">
								<i class="glyphicon glyphicon-cog"></i> </button>
								<ul role="menu" class="dropdown-menu dropdown-menu-right">
									<li><a href="#">Media</a></li>
									<li><a href="#">Block</a></li>
									<li><a href="#">Clear Chat</a></li>
									<li><a href="#">Email Chat</a></li>
								</ul>
							</div>
							<button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button"><i class="glyphicon glyphicon-off"></i></button>
						</div>
					</div>
					<div class="popup-messages">
						<div class="direct-chat-messages">
							<div class="chat-box-single-line">
								<abbr class="timestamp">December 15th, 2018</abbr>
							</div>
							<div class="direct-chat-msg">
								<div class="direct-chat-info clearfix">
									<span class="direct-chat-name float-left">Alica Nestle</span>
									<span class="direct-chat-timestamp float-right">7:40 Am</span>
								</div>
								<img class="direct-chat-img" src="assets/img/avatar/avatar-3.jpg" alt="message user image">
								<div class="direct-chat-text">
									Hello. How are you today?
								</div>
							</div>
							<div class="direct-chat-msg right">
								<div class="direct-chat-info clearfix">
									<span class="direct-chat-name float-right">Roberts</span>
									<span class="direct-chat-timestamp float-left">8:05 Am</span>
								</div>
								<img class="direct-chat-img" src="assets/img/avatar/avatar-2.jpg" alt="message user image">
								<div class="direct-chat-text">
									I'm fine. Thanks for asking!
								</div>
							</div>
							<div class="chat-box-single-line  mb-3">
								<abbr class="timestamp">December 14th, 2018</abbr>
							</div>
							<div class="direct-chat-msg doted-border">
								<div class="direct-chat-info clearfix">
									<span class="direct-chat-name float-left">Alica Nestle</span>
									<span class="direct-chat-timestamp float-right">6:20 Am</span>
								</div>
								<img alt="iamgurdeeposahan" src="assets/img/avatar/avatar-3.jpg" class="direct-chat-img"><!-- /.direct-chat-img -->
								<div class="direct-chat-text">
									Hey bro, how???s everything going ?
								</div>
								<div class="direct-chat-msg right">
									<div class="direct-chat-info clearfix">
										<span class="direct-chat-name float-right">Roberts</span>
										<span class="direct-chat-timestamp float-left">7:05 Am</span>
									</div>
									<img class="direct-chat-img" src="assets/img/avatar/avatar-2.jpg" alt="message user image">
									<div class="direct-chat-text">
										Nothing Much!
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="popup-messages-footer">
						<textarea id="status_message" placeholder="Type a message..." rows="10" cols="40" name="message"></textarea>
						<div class="btn-footer">
							<button class="bg_none"><i class="glyphicon glyphicon-film"></i> </button>
							<button class="bg_none"><i class="glyphicon glyphicon-camera"></i> </button>
							<button class="bg_none"><i class="glyphicon glyphicon-paperclip"></i> </button>
							<button class="bg_none pull-right"><i class="glyphicon glyphicon-thumbs-up"></i> </button>
						</div>
					</div>
				</div>
				<!-- Popupchat closed -->

			</div>
		</div>
		<!--app closed-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-angle-up"></i></a>

		<!-- Popup-chat -->
		<a href="#" id="addClass"><i class="ti-comment"></i></a>

		<!--Jquery.min js-->
		<script src="assets/js/jquery.min.js"></script>

		<!--popper js-->
		<script src="assets/js/popper.js"></script>

		<!--Tooltip js-->
		<script src="assets/js/tooltip.js"></script>

		<!--Bootstrap.min js-->
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Jquery star rating-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

		<!--Scroll-up-bar.min js-->
		<script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

		<!--Sidemenu js-->
		<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--Othercharts js-->
		<script src="assets/plugins/othercharts/jquery.knob.js"></script>
		<script src="assets/plugins/othercharts/jquery.sparkline.min.js"></script>
		<script src="assets/plugins/Chart.js/dist/Chart.min.js"></script>
		<script src="assets/plugins/Chart.js/dist/Chart.extension.js"></script>

		<!--Morris js-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/morris/raphael.min.js"></script>

		<!--mCustomScrollbar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Scripts js-->
		<script src="assets/js/dashboard2.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>
		<script src="assets/js/sparkline.js"></script>

		<!--OtherCharts js-->
		<script src="assets/js/othercharts.js"></script>
		
		<!--Custom js-->
		<script src="assets/js/scripts.js"></script>


	</body>

<!-- Mirrored from www.spruko.com/demo/splite/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:50 GMT -->
</html>
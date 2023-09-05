<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Admin Tasty Food</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset ('admin_template/img/icon.ico" type="image/x-icon') }}"/>

	<!-- Fonts and icons -->
	<script src="{{ asset ('admin_template/js/plugin/webfont/webfont.min.js') }}"></script>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset ('admin_template/css/fonts.min.css') }}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset ('admin_template/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset ('admin_template/css/atlantis.min.css') }}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ asset ('admin_template/css/demo.css') }}">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				<a href="index.html" class="logo">
					{{-- <img src="{{ asset ('admin_template/img/logo.svg') }}" alt="navbar brand" class="navbar-brand"> --}}
                    <span class="brand-text font-weight-dark" style="color: white">Tasty Food </span>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>

						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="{{ asset ('admin_template/img/rafi.jpeg') }}" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="{{ asset ('admin_template/img/rafi.jpeg') }}" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Muhammad Rafi</h4>
												<p class="text-muted">Mrafi@gmail.com</p><a href="profile.html"></a>
											</div>
										</div>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{ asset ('admin_template/img/rafi.jpeg') }}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Muhammad Rafi
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									{{-- <li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li> --}}
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="{{ route ('dashboard') }}" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Crud Data</h4>
						</li>
                        <li class="nav-item">
							<a href="{{ route ('kategori.index') }}">
								<i class="fa-solid fa-tags"></i>
								<p>Kategori</p>
							</a>
						</li>
                        <li class="nav-item">
							<a href="widgets.html">
								<i class="fa-solid fa-tag"></i>
								<p>Tags</p>
							</a>
						</li>
                        <li class="nav-item">
							<a href="#">
								<i class="fa-brands fa-readme"></i>
								<p>Artikel</p>
							</a>
						</li>
                        <li class="nav-item">
							<a href="widgets.html">
								<i class="fa-solid fa-users"></i>
								<p>User</p>
							</a>
						</li>
                        {{-- video --}}
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Data Video</h4>
						</li>
                        <li class="nav-item">
							<a href="widgets.html">
								<i class="fa-brands fa-youtube"></i>
								<p>Video</p>
							</a>
						</li>
                        <li class="nav-item">
							<a href="widgets.html">
								<i class="fa-solid fa-list"></i>
								<p>Playlist Video</p>
							</a>
						</li>
                        {{-- banner & iklan --}}
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Banner & Iklan</h4>
						</li>
                        <li class="nav-item">
							<a href="widgets.html">
								<i class="fa-solid fa-computer"></i>
								<p>Slide Banner</p>
							</a>
						</li>
                        <li class="nav-item">
							<a href="widgets.html">
								<i class="fas fa-desktop"></i>
								<p>Banner Iklan</p>
							</a>
						</li>
						{{-- <li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Base</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="components/avatars.html">
											<span class="sub-item">Avatars</span>
										</a>
									</li>
									<li>
										<a href="components/buttons.html">
											<span class="sub-item">Buttons</span>
										</a>
									</li>
									<li>
										<a href="components/gridsystem.html">
											<span class="sub-item">Grid System</span>
										</a>
									</li>
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Panels</span>
										</a>
									</li>
									<li>
										<a href="components/notifications.html">
											<span class="sub-item">Notifications</span>
										</a>
									</li>
									<li>
										<a href="components/sweetalert.html">
											<span class="sub-item">Sweet Alert</span>
										</a>
									</li>
									<li>
										<a href="components/font-awesome-icons.html">
											<span class="sub-item">Font Awesome Icons</span>
										</a>
									</li>
									<li>
										<a href="components/simple-line-icons.html">
											<span class="sub-item">Simple Line Icons</span>
										</a>
									</li>
									<li>
										<a href="components/flaticons.html">
											<span class="sub-item">Flaticons</span>
										</a>
									</li>
									<li>
										<a href="components/typography.html">
											<span class="sub-item">Typography</span>
										</a>
									</li>
								</ul>
							</div>
						</li> --}}
                        <li class="mx-4 mt-2">
                            <a href="http://themekita.com/atlantis-bootstrap-dashboard.html" class="btn btn-primary btn-block"><span class="btn-label mr-2"> <i class="ri-logout-circle-line"></i> </span>Logout</a>
                        </li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
            @yield('content')
		</div>
		<!-- End Sidebar -->
        <!--   Core JS Files   -->
<script src="{{ asset ('admin_template/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset ('admin_template/js/core/popper.min.js') }}"></script>
<script src="{{ asset ('admin_template/js/core/bootstrap.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ asset ('admin_template/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset ('admin_template/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

<!-- jQuery Scrollbar -->
<script src="{{ asset ('admin_template/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>


<!-- Chart JS -->
<script src="{{ asset ('admin_template/js/plugin/chart.js/chart.min.js') }}"></script>

<!-- jQuery Sparkline -->
<script src="{{ asset ('admin_template/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Chart Circle -->
<script src="{{ asset ('admin_template/js/plugin/chart-circle/circles.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset ('admin_template/js/plugin/datatables/datatables.min.js') }}"></script>

<!-- Bootstrap Notify -->
<script src="{{ asset ('admin_template/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

<!-- jQuery Vector Maps -->
<script src="{{ asset ('admin_template/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset ('admin_template/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

<!-- Sweet Alert -->
<script src="{{ asset ('admin_template/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

<!-- Atlantis JS -->
<script src="{{ asset ('admin_template/js/atlantis.min.js') }}"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="{{ asset ('admin_template/js/setting-demo.js') }}"></script>
<script src="{{ asset ('admin_template/js/demo.js') }}"></script>
<script>
Circles.create({
    id:'circles-1',
    radius:45,
    value:60,
    maxValue:100,
    width:7,
    text: 5,
    colors:['#f1f1f1', '#FF9E27'],
    duration:400,
    wrpClass:'circles-wrp',
    textClass:'circles-text',
    styleWrapper:true,
    styleText:true
})

Circles.create({
    id:'circles-2',
    radius:45,
    value:70,
    maxValue:100,
    width:7,
    text: 36,
    colors:['#f1f1f1', '#2BB930'],
    duration:400,
    wrpClass:'circles-wrp',
    textClass:'circles-text',
    styleWrapper:true,
    styleText:true
})

Circles.create({
    id:'circles-3',
    radius:45,
    value:40,
    maxValue:100,
    width:7,
    text: 12,
    colors:['#f1f1f1', '#F25961'],
    duration:400,
    wrpClass:'circles-wrp',
    textClass:'circles-text',
    styleWrapper:true,
    styleText:true
})

var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

var mytotalIncomeChart = new Chart(totalIncomeChart, {
    type: 'bar',
    data: {
        labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
        datasets : [{
            label: "Total Income",
            backgroundColor: '#ff9e27',
            borderColor: 'rgb(23, 125, 255)',
            data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
        }],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: false,
        },
        scales: {
            yAxes: [{
                ticks: {
                    display: false //this will remove only the label
                },
                gridLines : {
                    drawBorder: false,
                    display : false
                }
            }],
            xAxes : [ {
                gridLines : {
                    drawBorder: false,
                    display : false
                }
            }]
        },
    }
});

$('#lineChart').sparkline([105,103,123,100,95,105,115], {
    type: 'line',
    height: '70',
    width: '100%',
    lineWidth: '2',
    lineColor: '#ffa534',
    fillColor: 'rgba(255, 165, 52, .14)'
});
</script>
</body>
</html>

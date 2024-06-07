<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Atlantis Lite Bootstrap Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('Atlantis-Lite-master')}}/assets/img/icon.ico" type="image/x-icon"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('Atlantis-Lite-master')}}/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<link rel="stylesheet" href="{{ asset('Atlantis-Lite-master')}}/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('Atlantis-Lite-master')}}/assets/css/atlantis.min.css">
	<link href="assets/styles.css" rel="stylesheet" />
	<link href="assets/prism.css" rel="stylesheet" />
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header" data-background-color="light-blue2">
				<a href="index.html" class="logo">
					<img src="{{ asset('Atlantis-Lite-master')}}/assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
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
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="light-blue2">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item">
							<a href="{{ asset('Atlantis-Lite-master')}}/examples/demo1" class="nav-link">
								Live Preview
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-info">
						<li class="nav-item active">
							<a href="index.html">
								<i class="fas fa-home"></i>
								<p>Introduction</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
							<a href="components/alerts.html">
								<span class="letter-icon">A</span>
								<p>Alerts</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/avatars.html">
								<span class="letter-icon">Av</span>
								<p>Avatars</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/badge.html">
								<span class="letter-icon">Ba</span>
								<p>Badge</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/breadcrumb.html">
								<span class="letter-icon">Bc</span>
								<p>Breadcrumb</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/buttons.html">
								<span class="letter-icon">Bt</span>
								<p>Buttons</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/card.html">
								<span class="letter-icon">C</span>
								<p>Card</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/collapse.html">
								<span class="letter-icon">Co</span>
								<p>Collapse</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/colors.html">
								<span class="letter-icon">Cl</span>
								<p>Colors</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/dropdowns.html">
								<span class="letter-icon">D</span>
								<p>Dropdowns</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/forms.html">
								<span class="letter-icon">F</span>
								<p>Forms</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/layoutsbackground.html">
								<span class="letter-icon">L</span>
								<p>Layouts Background</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/loaders.html">
								<span class="letter-icon">Lo</span>
								<p>Loaders</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/modal.html">
								<span class="letter-icon">M</span>
								<p>Modal</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/navs.html">
								<span class="letter-icon">N</span>
								<p>Navs</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/navbar.html">
								<span class="letter-icon">Nb</span>
								<p>Navbar</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/pagination.html">
								<span class="letter-icon">Pa</span>
								<p>Pagination</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/popovers.html">
								<span class="letter-icon">Po</span>
								<p>Popovers</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/progress.html">
								<span class="letter-icon">Pr</span>
								<p>Progress</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/tables.html">
								<span class="letter-icon">T</span>
								<p>Tables</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/tooltips.html">
								<span class="letter-icon">To</span>
								<p>Tooltips</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="components/typography.html">
								<span class="letter-icon">Ty</span>
								<p>Typography</p>
							</a>
						</li>

						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Plugins</h4>
						</li>
						<li class="nav-item">
							<a href="plugins/chart.html">
								<span class="letter-icon">C</span>
								<p>Chart.js</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="plugins/chartcircle.html">
								<span class="letter-icon">Cc</span>
								<p>Chart Circle</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="plugins/animate.html">
								<span class="letter-icon">Cs</span>
								<p>CSS Animate</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="plugins/datatables.html">
								<span class="letter-icon">Da</span>
								<p>Datatables</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="plugins/jqvmap.html">
								<span class="letter-icon">Jm</span>
								<p>JQVmap</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="plugins/scrollbar.html">
								<span class="letter-icon">Js</span>
								<p>Jquery Scrollbar</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="plugins/notify.html">
								<span class="letter-icon">N</span>
								<p>Notify</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="plugins/slider.html">
								<span class="letter-icon">Sl</span>
								<p>Slider</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="plugins/sweetalert.html">
								<span class="letter-icon">Sa</span>
								<p>Sweet Alert</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="plugins/sparkline.html">
								<span class="letter-icon">Sp</span>
								<p>Sparkline</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content content-documentation">
				<div class="container-fluid">
					<div class="card card-documentation">
						<div class="card-header bg-info-gradient text-white bubble-shadow">
							<h4>Introduction</h4>
							<p class="mb-0 op-7">Atlantis Lite is a free Bootstrap 4 Admin Template.</p>
						</div>
						<div class="card-body">
							<div class="table-content">
								<span class="title">Table of Content</span>
								<ul>
									<li>
										<a href="#quickstart">Quick Start</a>
										<ol>
											<li>
												<a href="#css">CSS</a>
											</li>
											<li>
												<a href="#js">JS</a>
											</li>
											<li>
												<a href="#fonts">Fonts and Icons</a>
											</li>
										</ol>
									</li>
									<li>
										<a href="#layoutconfigurations">Layout Configurations</a>
									</li>
									<li>
										<a href="#starter">Starter Template</a>
									</li>
								</ul>
							</div>
							<h4 class="subcontent-title" id="quickstart"><span>Quick Start</span></h4>
							<p>To start using the UI Kit you will need to import some files in your current project or start from scratch using our template (scroll down in this page to view it).</p>
							<h5 id="css">CSS</h5>
							<p>Copy-paste the stylesheet <code class="highlighter-rouge">&lt;link&gt;</code> into your <code class="highlighter-rouge">&lt;head&gt;</code> before all other stylesheets to load our CSS.</p>
							<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"/assets/css/atlantis.css"</span><span class="nt">&gt;</span></code></pre></figure>
							<p>Or can also use the minimized version</p>
							<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"/assets/css/atlantis.min.css"</span><span class="nt">&gt;</span></code></pre></figure>
							<h5 id="js">JS</h5>
							<p>Many of our components require the use of JavaScript to function. Specifically, they require <a href="https://jquery.com">jQuery</a>, <a href="https://popper.js.org/">Popper.js</a>, and our own JavaScript plugins. Place the following <code class="highlighter-rouge">&lt;script&gt;</code>s near the end of your pages, right before the closing <code class="highlighter-rouge">&lt;/body&gt;</code> tag, to enable them. jQuery must come first, then Popper.js, and then our JavaScript plugins.</p>
							<pre class="language-markup">
								<code class="language-markup">
									&lt;!--   Core JS Files   --&gt;
&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/core/jquery.3.2.1.min.js"&gt;&lt;/script&gt;
&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/core/popper.min.js"&gt;&lt;/script&gt;
&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/core/bootstrap.min.js"&gt;&lt;/script&gt;

&lt;!-- jQuery UI --&gt;
&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"&gt;&lt;/script&gt;
&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"&gt;&lt;/script&gt;

&lt;!-- jQuery Scrollbar --&gt;
&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"&gt;&lt;/script&gt;


&lt;!-- Chart JS --&gt;
&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/chart.js/chart.min.js"&gt;&lt;/script&gt;

&lt;!-- jQuery Sparkline --&gt;
&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"&gt;&lt;/script&gt;

&lt;!-- Chart Circle --&gt;
&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/chart-circle/circles.min.js"&gt;&lt;/script&gt;

&lt;!-- Datatables --&gt;
&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/datatables/datatables.min.js"&gt;&lt;/script&gt;

&lt;!-- Bootstrap Notify --&gt;
&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"&gt;&lt;/script&gt;

&lt;!-- jQuery Vector Maps --&gt;
&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/jqvmap/jquery.vmap.min.js"&gt;&lt;/script&gt;
&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"&gt;&lt;/script&gt;

&lt;!-- Sweet Alert --&gt;
&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/sweetalert/sweetalert.min.js"&gt;&lt;/script&gt;

&lt;!-- Atlantis JS --&gt;
&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/atlantis.min.js"&gt;&lt;/script&gt;
								</code>
							</pre>
							<h5 id="fonts">Fonts and Icons</h5>
							<p>We use webfont.js for load fonts and icons</p>
							<figure class="highlight">
								<pre class="language-markup">
									<code class="language-markup">
										&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/webfont/webfont.min.js"&gt;&lt;/script&gt;
										&lt;script&gt;
											WebFont.load({
												google: {"families":["Lato:300,400,700,900"]},
												custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('Atlantis-Lite-master')}}/assets/css/fonts.min.css']},
												active: function() {
													sessionStorage.fonts = true;
												}
											});
										&lt;/script&gt;
							</code>
						</pre>
					</figure>
					
					<h4 class="subcontent-title" id="layoutconfigurations"><span>Layout Configurations</span></h4>
					<p>We have provided a bunch of layout options for you with a single class change! You can use the following classes for each layout.</p>
					<table class="table table-striped table-bordered mt-4">
						<thead>
							<tr>
								<th>Layout</th>
								<th>Class to be added on the div <code>.wrapper</code> tag</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Overlay sidebar</td>
								<td><code>overlay-sidebar</code></td>
							</tr>
							<tr>
								<td>Compact menu</td>
								<td><code>compact-wrapper</code></td>
							</tr>
							<tr>
								<td>Static Sidebar</td>
								<td><code>static-sidebar</code></td>
							</tr>
							<tr>
								<td>Icon menu / Sidebar minimize</td>
								<td><code>sidebar_minimize</code></td>
							</tr>
						</tbody>
					</table>

					<h4 class="subcontent-title" id="starter"><span>Starter Template</span></h4>
					<p>Be sure to have your pages set up with the latest design and development standards. That means using an HTML5 doctype and including a viewport meta tag for proper responsive behaviors. Put it all together and your pages should look like this:</p>
					<pre class="language-markup">
						<code class="language-markup">
							&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
	&lt;meta http-equiv="X-UA-Compatible" content="IE=edge" /&gt;
	&lt;title&gt;Atlantis Lite - Bootstrap 4 Admin Dashboard&lt;/title&gt;
	&lt;meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' /&gt;
	&lt;link rel="icon" href="{{ asset('Atlantis-Lite-master')}}/assets/img/icon.ico" type="image/x-icon"/&gt;

	&lt;!-- Fonts and icons --&gt;
	&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/webfont/webfont.min.js"&gt;&lt;/script&gt;
	&lt;script&gt;
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('Atlantis-Lite-master')}}/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	&lt;/script&gt;

	&lt;!-- CSS Files --&gt;
	&lt;link rel="stylesheet" href="{{ asset('Atlantis-Lite-master')}}/assets/css/bootstrap.min.css"&gt;
	&lt;link rel="stylesheet" href="{{ asset('Atlantis-Lite-master')}}/assets/css/atlantis.min.css"&gt;

	&lt;!-- CSS Just for demo purpose, don't include it in your project --&gt;
	&lt;link rel="stylesheet" href="{{ asset('Atlantis-Lite-master')}}/assets/css/demo.css"&gt;
&lt;/head&gt;
&lt;body&gt;
	&lt;div class="wrapper"&gt;
		&lt;div class="main-header"&gt;
			&lt;!-- Logo Header --&gt;
			&lt;div class="logo-header" data-background-color="blue"&gt;
				
				&lt;a href="index.html" class="logo"&gt;
					&lt;img src="{{ asset('Atlantis-Lite-master')}}/assets/img/logo.svg" alt="navbar brand" class="navbar-brand"&gt;
				&lt;/a&gt;
				&lt;button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation"&gt;
					&lt;span class="navbar-toggler-icon"&gt;
						&lt;i class="icon-menu"&gt;&lt;/i&gt;
					&lt;/span&gt;
				&lt;/button&gt;
				&lt;button class="topbar-toggler more"&gt;&lt;i class="icon-options-vertical"&gt;&lt;/i&gt;&lt;/button&gt;
				&lt;div class="nav-toggle"&gt;
					&lt;button class="btn btn-toggle toggle-sidebar"&gt;
						&lt;i class="icon-menu"&gt;&lt;/i&gt;
					&lt;/button&gt;
				&lt;/div&gt;
			&lt;/div&gt;
			&lt;!-- End Logo Header --&gt;

			&lt;!-- Navbar Header --&gt;
			&lt;nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2"&gt;
				
				&lt;div class="container-fluid"&gt;
					&lt;div class="collapse" id="search-nav"&gt;
						&lt;form class="navbar-left navbar-form nav-search mr-md-3"&gt;
							&lt;div class="input-group"&gt;
								&lt;div class="input-group-prepend"&gt;
									&lt;button type="submit" class="btn btn-search pr-1"&gt;
										&lt;i class="fa fa-search search-icon"&gt;&lt;/i&gt;
									&lt;/button&gt;
								&lt;/div&gt;
								&lt;input type="text" placeholder="Search ..." class="form-control"&gt;
							&lt;/div&gt;
						&lt;/form&gt;
					&lt;/div&gt;
					&lt;ul class="navbar-nav topbar-nav ml-md-auto align-items-center"&gt;
						&lt;li class="nav-item toggle-nav-search hidden-caret"&gt;
							&lt;a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav"&gt;
								&lt;i class="fa fa-search"&gt;&lt;/i&gt;
							&lt;/a&gt;
						&lt;/li&gt;
						&lt;li class="nav-item dropdown hidden-caret"&gt;
							&lt;a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
								&lt;i class="fa fa-envelope"&gt;&lt;/i&gt;
							&lt;/a&gt;
							&lt;ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown"&gt;
								&lt;li&gt;
									&lt;div class="dropdown-title d-flex justify-content-between align-items-center"&gt;
										Messages 									
										&lt;a href="#" class="small"&gt;Mark all as read&lt;/a&gt;
									&lt;/div&gt;
								&lt;/li&gt;
								&lt;li&gt;
									&lt;div class="message-notif-scroll scrollbar-outer"&gt;
										&lt;div class="notif-center"&gt;
											&lt;a href="#"&gt;
												&lt;div class="notif-img"&gt; 
													&lt;img src="{{ asset('Atlantis-Lite-master')}}/assets/img/jm_denis.jpg" alt="Img Profile"&gt;
												&lt;/div&gt;
												&lt;div class="notif-content"&gt;
													&lt;span class="subject"&gt;Jimmy Denis&lt;/span&gt;
													&lt;span class="block"&gt;
														How are you ?
													&lt;/span&gt;
													&lt;span class="time"&gt;5 minutes ago&lt;/span&gt; 
												&lt;/div&gt;
											&lt;/a&gt;
											&lt;a href="#"&gt;
												&lt;div class="notif-img"&gt; 
													&lt;img src="{{ asset('Atlantis-Lite-master')}}/assets/img/chadengle.jpg" alt="Img Profile"&gt;
												&lt;/div&gt;
												&lt;div class="notif-content"&gt;
													&lt;span class="subject"&gt;Chad&lt;/span&gt;
													&lt;span class="block"&gt;
														Ok, Thanks !
													&lt;/span&gt;
													&lt;span class="time"&gt;12 minutes ago&lt;/span&gt; 
												&lt;/div&gt;
											&lt;/a&gt;
											&lt;a href="#"&gt;
												&lt;div class="notif-img"&gt; 
													&lt;img src="{{ asset('Atlantis-Lite-master')}}/assets/img/mlane.jpg" alt="Img Profile"&gt;
												&lt;/div&gt;
												&lt;div class="notif-content"&gt;
													&lt;span class="subject"&gt;Jhon Doe&lt;/span&gt;
													&lt;span class="block"&gt;
														Ready for the meeting today...
													&lt;/span&gt;
													&lt;span class="time"&gt;12 minutes ago&lt;/span&gt; 
												&lt;/div&gt;
											&lt;/a&gt;
											&lt;a href="#"&gt;
												&lt;div class="notif-img"&gt; 
													&lt;img src="{{ asset('Atlantis-Lite-master')}}/assets/img/talha.jpg" alt="Img Profile"&gt;
												&lt;/div&gt;
												&lt;div class="notif-content"&gt;
													&lt;span class="subject"&gt;Talha&lt;/span&gt;
													&lt;span class="block"&gt;
														Hi, Apa Kabar ?
													&lt;/span&gt;
													&lt;span class="time"&gt;17 minutes ago&lt;/span&gt; 
												&lt;/div&gt;
											&lt;/a&gt;
										&lt;/div&gt;
									&lt;/div&gt;
								&lt;/li&gt;
								&lt;li&gt;
									&lt;a class="see-all" href="javascript:void(0);"&gt;See all messages&lt;i class="fa fa-angle-right"&gt;&lt;/i&gt; &lt;/a&gt;
								&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
						&lt;li class="nav-item dropdown hidden-caret"&gt;
							&lt;a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
								&lt;i class="fa fa-bell"&gt;&lt;/i&gt;
								&lt;span class="notification"&gt;4&lt;/span&gt;
							&lt;/a&gt;
							&lt;ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown"&gt;
								&lt;li&gt;
									&lt;div class="dropdown-title"&gt;You have 4 new notification&lt;/div&gt;
								&lt;/li&gt;
								&lt;li&gt;
									&lt;div class="notif-scroll scrollbar-outer"&gt;
										&lt;div class="notif-center"&gt;
											&lt;a href="#"&gt;
												&lt;div class="notif-icon notif-primary"&gt; &lt;i class="fa fa-user-plus"&gt;&lt;/i&gt; &lt;/div&gt;
												&lt;div class="notif-content"&gt;
													&lt;span class="block"&gt;
														New user registered
													&lt;/span&gt;
													&lt;span class="time"&gt;5 minutes ago&lt;/span&gt; 
												&lt;/div&gt;
											&lt;/a&gt;
											&lt;a href="#"&gt;
												&lt;div class="notif-icon notif-success"&gt; &lt;i class="fa fa-comment"&gt;&lt;/i&gt; &lt;/div&gt;
												&lt;div class="notif-content"&gt;
													&lt;span class="block"&gt;
														Rahmad commented on Admin
													&lt;/span&gt;
													&lt;span class="time"&gt;12 minutes ago&lt;/span&gt; 
												&lt;/div&gt;
											&lt;/a&gt;
											&lt;a href="#"&gt;
												&lt;div class="notif-img"&gt; 
													&lt;img src="{{ asset('Atlantis-Lite-master')}}/assets/img/profile2.jpg" alt="Img Profile"&gt;
												&lt;/div&gt;
												&lt;div class="notif-content"&gt;
													&lt;span class="block"&gt;
														Reza send messages to you
													&lt;/span&gt;
													&lt;span class="time"&gt;12 minutes ago&lt;/span&gt; 
												&lt;/div&gt;
											&lt;/a&gt;
											&lt;a href="#"&gt;
												&lt;div class="notif-icon notif-danger"&gt; &lt;i class="fa fa-heart"&gt;&lt;/i&gt; &lt;/div&gt;
												&lt;div class="notif-content"&gt;
													&lt;span class="block"&gt;
														Farrah liked Admin
													&lt;/span&gt;
													&lt;span class="time"&gt;17 minutes ago&lt;/span&gt; 
												&lt;/div&gt;
											&lt;/a&gt;
										&lt;/div&gt;
									&lt;/div&gt;
								&lt;/li&gt;
								&lt;li&gt;
									&lt;a class="see-all" href="javascript:void(0);"&gt;See all notifications&lt;i class="fa fa-angle-right"&gt;&lt;/i&gt; &lt;/a&gt;
								&lt;/li&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
						&lt;li class="nav-item dropdown hidden-caret"&gt;
							&lt;a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false"&gt;
								&lt;i class="fas fa-layer-group"&gt;&lt;/i&gt;
							&lt;/a&gt;
							&lt;div class="dropdown-menu quick-actions quick-actions-info animated fadeIn"&gt;
								&lt;div class="quick-actions-header"&gt;
									&lt;span class="title mb-1"&gt;Quick Actions&lt;/span&gt;
									&lt;span class="subtitle op-8"&gt;Shortcuts&lt;/span&gt;
								&lt;/div&gt;
								&lt;div class="quick-actions-scroll scrollbar-outer"&gt;
									&lt;div class="quick-actions-items"&gt;
										&lt;div class="row m-0"&gt;
											&lt;a class="col-6 col-md-4 p-0" href="#"&gt;
												&lt;div class="quick-actions-item"&gt;
													&lt;i class="flaticon-file-1"&gt;&lt;/i&gt;
													&lt;span class="text"&gt;Generated Report&lt;/span&gt;
												&lt;/div&gt;
											&lt;/a&gt;
											&lt;a class="col-6 col-md-4 p-0" href="#"&gt;
												&lt;div class="quick-actions-item"&gt;
													&lt;i class="flaticon-database"&gt;&lt;/i&gt;
													&lt;span class="text"&gt;Create New Database&lt;/span&gt;
												&lt;/div&gt;
											&lt;/a&gt;
											&lt;a class="col-6 col-md-4 p-0" href="#"&gt;
												&lt;div class="quick-actions-item"&gt;
													&lt;i class="flaticon-pen"&gt;&lt;/i&gt;
													&lt;span class="text"&gt;Create New Post&lt;/span&gt;
												&lt;/div&gt;
											&lt;/a&gt;
											&lt;a class="col-6 col-md-4 p-0" href="#"&gt;
												&lt;div class="quick-actions-item"&gt;
													&lt;i class="flaticon-interface-1"&gt;&lt;/i&gt;
													&lt;span class="text"&gt;Create New Task&lt;/span&gt;
												&lt;/div&gt;
											&lt;/a&gt;
											&lt;a class="col-6 col-md-4 p-0" href="#"&gt;
												&lt;div class="quick-actions-item"&gt;
													&lt;i class="flaticon-list"&gt;&lt;/i&gt;
													&lt;span class="text"&gt;Completed Tasks&lt;/span&gt;
												&lt;/div&gt;
											&lt;/a&gt;
											&lt;a class="col-6 col-md-4 p-0" href="#"&gt;
												&lt;div class="quick-actions-item"&gt;
													&lt;i class="flaticon-file"&gt;&lt;/i&gt;
													&lt;span class="text"&gt;Create New Invoice&lt;/span&gt;
												&lt;/div&gt;
											&lt;/a&gt;
										&lt;/div&gt;
									&lt;/div&gt;
								&lt;/div&gt;
							&lt;/div&gt;
						&lt;/li&gt;
						&lt;li class="nav-item dropdown hidden-caret"&gt;
							&lt;a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"&gt;
								&lt;div class="avatar-sm"&gt;
									&lt;img src="{{ asset('Atlantis-Lite-master')}}/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle"&gt;
								&lt;/div&gt;
							&lt;/a&gt;
							&lt;ul class="dropdown-menu dropdown-user animated fadeIn"&gt;
								&lt;div class="dropdown-user-scroll scrollbar-outer"&gt;
									&lt;li&gt;
										&lt;div class="user-box"&gt;
											&lt;div class="avatar-lg"&gt;&lt;img src="{{ asset('Atlantis-Lite-master')}}/assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"&gt;&lt;/div&gt;
											&lt;div class="u-text"&gt;
												&lt;h4&gt;Hizrian&lt;/h4&gt;
												&lt;p class="text-muted"&gt;hello@example.com&lt;/p&gt;&lt;a href="profile.html" class="btn btn-xs btn-secondary btn-sm"&gt;View Profile&lt;/a&gt;
											&lt;/div&gt;
										&lt;/div&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;div class="dropdown-divider"&gt;&lt;/div&gt;
										&lt;a class="dropdown-item" href="#"&gt;My Profile&lt;/a&gt;
										&lt;a class="dropdown-item" href="#"&gt;My Balance&lt;/a&gt;
										&lt;a class="dropdown-item" href="#"&gt;Inbox&lt;/a&gt;
										&lt;div class="dropdown-divider"&gt;&lt;/div&gt;
										&lt;a class="dropdown-item" href="#"&gt;Account Setting&lt;/a&gt;
										&lt;div class="dropdown-divider"&gt;&lt;/div&gt;
										&lt;a class="dropdown-item" href="#"&gt;Logout&lt;/a&gt;
									&lt;/li&gt;
								&lt;/div&gt;
							&lt;/ul&gt;
						&lt;/li&gt;
					&lt;/ul&gt;
				&lt;/div&gt;
			&lt;/nav&gt;
			&lt;!-- End Navbar --&gt;
		&lt;/div&gt;

		&lt;!-- Sidebar --&gt;
		&lt;div class="sidebar sidebar-style-2"&gt;			
			&lt;div class="sidebar-wrapper scrollbar scrollbar-inner"&gt;
				&lt;div class="sidebar-content"&gt;
					&lt;div class="user"&gt;
						&lt;div class="avatar-sm float-left mr-2"&gt;
							&lt;img src="{{ asset('Atlantis-Lite-master')}}/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle"&gt;
						&lt;/div&gt;
						&lt;div class="info"&gt;
							&lt;a data-toggle="collapse" href="#collapseExample" aria-expanded="true"&gt;
								&lt;span&gt;
									Hizrian
									&lt;span class="user-level"&gt;Administrator&lt;/span&gt;
									&lt;span class="caret"&gt;&lt;/span&gt;
								&lt;/span&gt;
							&lt;/a&gt;
							&lt;div class="clearfix"&gt;&lt;/div&gt;

							&lt;div class="collapse in" id="collapseExample"&gt;
								&lt;ul class="nav"&gt;
									&lt;li&gt;
										&lt;a href="#profile"&gt;
											&lt;span class="link-collapse"&gt;My Profile&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="#edit"&gt;
											&lt;span class="link-collapse"&gt;Edit Profile&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="#settings"&gt;
											&lt;span class="link-collapse"&gt;Settings&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
								&lt;/ul&gt;
							&lt;/div&gt;
						&lt;/div&gt;
					&lt;/div&gt;
					&lt;ul class="nav nav-primary"&gt;
						&lt;li class="nav-item active"&gt;
							&lt;a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false"&gt;
								&lt;i class="fas fa-home"&gt;&lt;/i&gt;
								&lt;p&gt;Dashboard&lt;/p&gt;
								&lt;span class="caret"&gt;&lt;/span&gt;
							&lt;/a&gt;
							&lt;div class="collapse" id="dashboard"&gt;
								&lt;ul class="nav nav-collapse"&gt;
									&lt;li&gt;
										&lt;a href="{{ asset('Atlantis-Lite-master')}}/demo1/index.html"&gt;
											&lt;span class="sub-item"&gt;Dashboard 1&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="{{ asset('Atlantis-Lite-master')}}/demo2/index.html"&gt;
											&lt;span class="sub-item"&gt;Dashboard 2&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
								&lt;/ul&gt;
							&lt;/div&gt;
						&lt;/li&gt;
						&lt;li class="nav-section"&gt;
							&lt;span class="sidebar-mini-icon"&gt;
								&lt;i class="fa fa-ellipsis-h"&gt;&lt;/i&gt;
							&lt;/span&gt;
							&lt;h4 class="text-section"&gt;Components&lt;/h4&gt;
						&lt;/li&gt;
						&lt;li class="nav-item"&gt;
							&lt;a data-toggle="collapse" href="#base"&gt;
								&lt;i class="fas fa-layer-group"&gt;&lt;/i&gt;
								&lt;p&gt;Base&lt;/p&gt;
								&lt;span class="caret"&gt;&lt;/span&gt;
							&lt;/a&gt;
							&lt;div class="collapse" id="base"&gt;
								&lt;ul class="nav nav-collapse"&gt;
									&lt;li&gt;
										&lt;a href="components/avatars.html"&gt;
											&lt;span class="sub-item"&gt;Avatars&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="components/buttons.html"&gt;
											&lt;span class="sub-item"&gt;Buttons&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="components/gridsystem.html"&gt;
											&lt;span class="sub-item"&gt;Grid System&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="components/panels.html"&gt;
											&lt;span class="sub-item"&gt;Panels&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="components/notifications.html"&gt;
											&lt;span class="sub-item"&gt;Notifications&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="components/sweetalert.html"&gt;
											&lt;span class="sub-item"&gt;Sweet Alert&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="components/font-awesome-icons.html"&gt;
											&lt;span class="sub-item"&gt;Font Awesome Icons&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="components/simple-line-icons.html"&gt;
											&lt;span class="sub-item"&gt;Simple Line Icons&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="components/flaticons.html"&gt;
											&lt;span class="sub-item"&gt;Flaticons&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="components/typography.html"&gt;
											&lt;span class="sub-item"&gt;Typography&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
								&lt;/ul&gt;
							&lt;/div&gt;
						&lt;/li&gt;
						&lt;li class="nav-item"&gt;
							&lt;a data-toggle="collapse" href="#sidebarLayouts"&gt;
								&lt;i class="fas fa-th-list"&gt;&lt;/i&gt;
								&lt;p&gt;Sidebar Layouts&lt;/p&gt;
								&lt;span class="caret"&gt;&lt;/span&gt;
							&lt;/a&gt;
							&lt;div class="collapse" id="sidebarLayouts"&gt;
								&lt;ul class="nav nav-collapse"&gt;
									&lt;li&gt;
										&lt;a href="sidebar-style-1.html"&gt;
											&lt;span class="sub-item"&gt;Sidebar Style 1&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="overlay-sidebar.html"&gt;
											&lt;span class="sub-item"&gt;Overlay Sidebar&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="compact-sidebar.html"&gt;
											&lt;span class="sub-item"&gt;Compact Sidebar&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="static-sidebar.html"&gt;
											&lt;span class="sub-item"&gt;Static Sidebar&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="icon-menu.html"&gt;
											&lt;span class="sub-item"&gt;Icon Menu&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
								&lt;/ul&gt;
							&lt;/div&gt;
						&lt;/li&gt;
						&lt;li class="nav-item"&gt;
							&lt;a data-toggle="collapse" href="#forms"&gt;
								&lt;i class="fas fa-pen-square"&gt;&lt;/i&gt;
								&lt;p&gt;Forms&lt;/p&gt;
								&lt;span class="caret"&gt;&lt;/span&gt;
							&lt;/a&gt;
							&lt;div class="collapse" id="forms"&gt;
								&lt;ul class="nav nav-collapse"&gt;
									&lt;li&gt;
										&lt;a href="forms/forms.html"&gt;
											&lt;span class="sub-item"&gt;Basic Form&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
								&lt;/ul&gt;
							&lt;/div&gt;
						&lt;/li&gt;
						&lt;li class="nav-item"&gt;
							&lt;a data-toggle="collapse" href="#tables"&gt;
								&lt;i class="fas fa-table"&gt;&lt;/i&gt;
								&lt;p&gt;Tables&lt;/p&gt;
								&lt;span class="caret"&gt;&lt;/span&gt;
							&lt;/a&gt;
							&lt;div class="collapse" id="tables"&gt;
								&lt;ul class="nav nav-collapse"&gt;
									&lt;li&gt;
										&lt;a href="tables/tables.html"&gt;
											&lt;span class="sub-item"&gt;Basic Table&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="tables/datatables.html"&gt;
											&lt;span class="sub-item"&gt;Datatables&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
								&lt;/ul&gt;
							&lt;/div&gt;
						&lt;/li&gt;
						&lt;li class="nav-item"&gt;
							&lt;a data-toggle="collapse" href="#maps"&gt;
								&lt;i class="fas fa-map-marker-alt"&gt;&lt;/i&gt;
								&lt;p&gt;Maps&lt;/p&gt;
								&lt;span class="caret"&gt;&lt;/span&gt;
							&lt;/a&gt;
							&lt;div class="collapse" id="maps"&gt;
								&lt;ul class="nav nav-collapse"&gt;
									&lt;li&gt;
										&lt;a href="maps/jqvmap.html"&gt;
											&lt;span class="sub-item"&gt;JQVMap&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
								&lt;/ul&gt;
							&lt;/div&gt;
						&lt;/li&gt;
						&lt;li class="nav-item"&gt;
							&lt;a data-toggle="collapse" href="#charts"&gt;
								&lt;i class="far fa-chart-bar"&gt;&lt;/i&gt;
								&lt;p&gt;Charts&lt;/p&gt;
								&lt;span class="caret"&gt;&lt;/span&gt;
							&lt;/a&gt;
							&lt;div class="collapse" id="charts"&gt;
								&lt;ul class="nav nav-collapse"&gt;
									&lt;li&gt;
										&lt;a href="charts/charts.html"&gt;
											&lt;span class="sub-item"&gt;Chart Js&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="charts/sparkline.html"&gt;
											&lt;span class="sub-item"&gt;Sparkline&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
								&lt;/ul&gt;
							&lt;/div&gt;
						&lt;/li&gt;
						&lt;li class="nav-item"&gt;
							&lt;a href="widgets.html"&gt;
								&lt;i class="fas fa-desktop"&gt;&lt;/i&gt;
								&lt;p&gt;Widgets&lt;/p&gt;
								&lt;span class="badge badge-success"&gt;4&lt;/span&gt;
							&lt;/a&gt;
						&lt;/li&gt;
						&lt;li class="nav-item"&gt;
							&lt;a data-toggle="collapse" href="#submenu"&gt;
								&lt;i class="fas fa-bars"&gt;&lt;/i&gt;
								&lt;p&gt;Menu Levels&lt;/p&gt;
								&lt;span class="caret"&gt;&lt;/span&gt;
							&lt;/a&gt;
							&lt;div class="collapse" id="submenu"&gt;
								&lt;ul class="nav nav-collapse"&gt;
									&lt;li&gt;
										&lt;a data-toggle="collapse" href="#subnav1"&gt;
											&lt;span class="sub-item"&gt;Level 1&lt;/span&gt;
											&lt;span class="caret"&gt;&lt;/span&gt;
										&lt;/a&gt;
										&lt;div class="collapse" id="subnav1"&gt;
											&lt;ul class="nav nav-collapse subnav"&gt;
												&lt;li&gt;
													&lt;a href="#"&gt;
														&lt;span class="sub-item"&gt;Level 2&lt;/span&gt;
													&lt;/a&gt;
												&lt;/li&gt;
												&lt;li&gt;
													&lt;a href="#"&gt;
														&lt;span class="sub-item"&gt;Level 2&lt;/span&gt;
													&lt;/a&gt;
												&lt;/li&gt;
					&lt;/ul&gt;
										&lt;/div&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a data-toggle="collapse" href="#subnav2"&gt;
											&lt;span class="sub-item"&gt;Level 1&lt;/span&gt;
											&lt;span class="caret"&gt;&lt;/span&gt;
										&lt;/a&gt;
										&lt;div class="collapse" id="subnav2"&gt;
											&lt;ul class="nav nav-collapse subnav"&gt;
												&lt;li&gt;
													&lt;a href="#"&gt;
														&lt;span class="sub-item"&gt;Level 2&lt;/span&gt;
													&lt;/a&gt;
												&lt;/li&gt;
					&lt;/ul&gt;
										&lt;/div&gt;
									&lt;/li&gt;
									&lt;li&gt;
										&lt;a href="#"&gt;
											&lt;span class="sub-item"&gt;Level 1&lt;/span&gt;
										&lt;/a&gt;
									&lt;/li&gt;
								&lt;/ul&gt;
							&lt;/div&gt;
						&lt;/li&gt;
					&lt;/ul&gt;
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;
		&lt;!-- End Sidebar --&gt;

		&lt;div class="main-panel"&gt;
			&lt;div class="content"&gt;
				&lt;div class="page-inner"&gt;
					&lt;div class="page-header"&gt;
						&lt;h4 class="page-title"&gt;Dashboard&lt;/h4&gt;
						&lt;ul class="breadcrumbs"&gt;
							&lt;li class="nav-home"&gt;
								&lt;a href="#"&gt;
									&lt;i class="flaticon-home"&gt;&lt;/i&gt;
								&lt;/a&gt;
							&lt;/li&gt;
							&lt;li class="separator"&gt;
								&lt;i class="flaticon-right-arrow"&gt;&lt;/i&gt;
							&lt;/li&gt;
							&lt;li class="nav-item"&gt;
								&lt;a href="#"&gt;Pages&lt;/a&gt;
							&lt;/li&gt;
							&lt;li class="separator"&gt;
								&lt;i class="flaticon-right-arrow"&gt;&lt;/i&gt;
							&lt;/li&gt;
							&lt;li class="nav-item"&gt;
								&lt;a href="#"&gt;Starter Page&lt;/a&gt;
							&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/div&gt;
					&lt;div class="page-category"&gt;Inner page content goes here&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;
			&lt;footer class="footer"&gt;
				&lt;div class="container-fluid"&gt;
					&lt;nav class="pull-left"&gt;
						&lt;ul class="nav"&gt;
							&lt;li class="nav-item"&gt;
								&lt;a class="nav-link" href="https://www.themekita.com"&gt;
									ThemeKita
								&lt;/a&gt;
							&lt;/li&gt;
							&lt;li class="nav-item"&gt;
								&lt;a class="nav-link" href="#"&gt;
									Help
								&lt;/a&gt;
							&lt;/li&gt;
							&lt;li class="nav-item"&gt;
								&lt;a class="nav-link" href="#"&gt;
									Licenses
								&lt;/a&gt;
							&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/nav&gt;
					&lt;div class="copyright ml-auto"&gt;
						2018, made with &lt;i class="fa fa-heart heart text-danger"&gt;&lt;/i&gt; by &lt;a href="https://www.themekita.com"&gt;ThemeKita&lt;/a&gt;
					&lt;/div&gt;				
				&lt;/div&gt;
			&lt;/footer&gt;
		&lt;/div&gt;
		
	&lt;/div&gt;
	&lt;!--   Core JS Files   --&gt;
	&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/core/jquery.3.2.1.min.js"&gt;&lt;/script&gt;
	&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/core/popper.min.js"&gt;&lt;/script&gt;
	&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/core/bootstrap.min.js"&gt;&lt;/script&gt;

	&lt;!-- jQuery UI --&gt;
	&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"&gt;&lt;/script&gt;
	&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"&gt;&lt;/script&gt;

	&lt;!-- jQuery Scrollbar --&gt;
	&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"&gt;&lt;/script&gt;


	&lt;!-- Chart JS --&gt;
	&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/chart.js/chart.min.js"&gt;&lt;/script&gt;

	&lt;!-- jQuery Sparkline --&gt;
	&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"&gt;&lt;/script&gt;

	&lt;!-- Chart Circle --&gt;
	&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/chart-circle/circles.min.js"&gt;&lt;/script&gt;

	&lt;!-- Datatables --&gt;
	&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/datatables/datatables.min.js"&gt;&lt;/script&gt;

	&lt;!-- Bootstrap Notify --&gt;
	&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"&gt;&lt;/script&gt;

	&lt;!-- jQuery Vector Maps --&gt;
	&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/jqvmap/jquery.vmap.min.js"&gt;&lt;/script&gt;
	&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"&gt;&lt;/script&gt;

	&lt;!-- Sweet Alert --&gt;
	&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/sweetalert/sweetalert.min.js"&gt;&lt;/script&gt;

	&lt;!-- Atlantis JS --&gt;
	&lt;script src="{{ asset('Atlantis-Lite-master')}}/assets/js/atlantis.min.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
						</code>
					</pre>
				</div>
			</div>
		</div>
	</div>

</div>
</div>
</div>
</body>
<script src="{{ asset('Atlantis-Lite-master')}}/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="{{ asset('Atlantis-Lite-master')}}/assets/js/core/popper.min.js"></script>
<script src="{{ asset('Atlantis-Lite-master')}}/assets/js/core/bootstrap.min.js"></script>
<script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/chart.js/chart.min.js"></script>
<script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script type="text/javascript" src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js" charset="utf-8"></script>
<script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="{{ asset('Atlantis-Lite-master')}}/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="{{ asset('Atlantis-Lite-master')}}/assets/js/atlantis.min.js"></script>
<script src="assets/prism.js"></script>
<script src="assets/prism-normalize-whitespace.min.js"></script>
<script type="text/javascript">
	// Optional
	Prism.plugins.NormalizeWhitespace.setDefaults({
		'remove-trailing': true,
		'remove-indent': true,
		'left-trim': true,
		'right-trim': true,
	});
	
	// handle links with @href started with '#' only
	$(document).on('click', 'a[href^="#"]', function(e) {
		// target element id
		var id = $(this).attr('href');

		// target element
		var $id = $(id);
		if ($id.length === 0) {
			return;
		}

		// prevent standard hash navigation (avoid blinking in IE)
		e.preventDefault();

		// top position relative to the document
		var pos = $id.offset().top - 80;

		// animated top scrolling
		$('body, html').animate({scrollTop: pos});
	});
</script>
</html>
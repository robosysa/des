<?php
    session_start();
	if (!isset($_SESSION['user_admin'])) {
		$url = "login.php";
		header('Location: '.$url.'');
		exit;
	} else {
		require_once(realpath(dirname(__FILE__) . '/../includes/sqldb.inc.php'));
		require_once(realpath(dirname(__FILE__) . '/../admin-configuration.php'));
		if ($password_admin == "123456") {
			$url = "c-psw.php";
			header('Location: '.$url.'');
		}
	}
?>
<!-- 

Website Designed by CounterMind on Marketing-Rhino.com
https://www.marketing-rhino.com/
It is forbidden to re-sell this landing page without Author Permission.

 -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>Admin Dashboard - AppRocket</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="description" content="Admin Dashboard - AppRocket" />    
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="icon" type="image/ico" href="assets/img/favicon.ico" />
		<!-- Open Graph Meta Tags-->
		<meta property="og:title" content="Admin Dashboard - AppRocket" />
		<meta property="og:description" content="Admin Dashboard - AppRocket" />
		<meta property="og:type" content="website" />
		<!-- Icons -->
		<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Two+Tone|" rel="stylesheet">
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
		<!-- CSS -->
		<link href="assets/css/animate.css" rel="stylesheet" />
		<link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/style.css" rel="stylesheet" />
	</head>
	<body>
		<section class="mr-admin-wrapper">
			<span class="toggle-button">
				 <div class="menu-bar menu-bar-top"></div>
				 <div class="menu-bar menu-bar-middle"></div>
				 <div class="menu-bar menu-bar-bottom"></div>
			</span>
			<div class="mr-side-nav-wrapper">
				<div class="mr-side-nav">
					<div class="mr-side-nav-ha">
						<div class="mr-side-nav-header">
							<div class="lp-logo-wrapper">
								<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="24.242px" viewBox="0 0 32 24.242" enable-background="new 0 0 32 24.242" xml:space="preserve">
									<path d="M11.018,8.065c-0.124-0.055-0.358-0.056-0.612-0.05c-0.24-0.549-0.662-1.004-1.232-1.259C9.151,6.747,9.128,6.74,9.106,6.73
										C9.025,6.322,8.93,5.939,8.784,5.819c-0.331-0.272-1.63-0.067-1.911,0.145c-0.137,0.104-0.126,0.562-0.106,1.03
										C6.332,7.282,5.965,7.702,5.731,8.227C5.719,8.254,5.709,8.282,5.698,8.31C5.262,8.358,4.833,8.415,4.747,8.563
										c-0.172,0.296,0.044,1.864,0.248,2.024c0.089,0.07,0.43,0.097,0.801,0.115c0.25,0.463,0.636,0.845,1.139,1.069
										c0.091,0.041,0.185,0.073,0.279,0.102c0.083,0.343,0.182,0.657,0.316,0.75c0.32,0.223,1.411,0.113,1.643-0.111
										c0.115-0.111,0.142-0.543,0.157-0.972c0.424-0.278,0.783-0.683,1.02-1.186c0.355-0.071,0.702-0.161,0.816-0.301
										C11.411,9.751,11.334,8.204,11.018,8.065z"/>
									<ellipse transform="matrix(-0.5563 0.831 -0.831 -0.5563 33.1823 -0.8483)" cx="16.818" cy="8.435" rx="2.38" ry="2.121"/>
									<ellipse transform="matrix(-0.0433 0.9991 -0.9991 -0.0433 36.867 -6.6726)" cx="21.628" cy="14.316" rx="1.952" ry="1.78"/>
									<ellipse transform="matrix(0.702 0.7122 -0.7122 0.702 14.658 -4.4884)" cx="12.692" cy="15.271" rx="1.78" ry="1.952"/>
									<path d="M27.461,0.499c-1.148-0.857-4.577-0.443-5.314,0c-0.737,0.442-0.737,1.402-1.106,2.141
										c-0.369,0.739-7.382,1.624-8.121,1.477c-0.738-0.148-1.403-1.477-1.846-1.993C10.63,1.605,6.132,1.767,5.093,2.64
										c-6.299,5.291-5.192,19.439-4.675,20.474c0.517,1.032,3.942,1.752,6.152,0.344c1.31-0.834,2.807-3.69,3.949-5.948
										c1.073,1.076,2.9,1.002,4.088-0.17c1.015-1,1.234-2.475,0.618-3.562c1.225-0.211,2.616-0.389,3.796-0.459
										c-0.012,0.024-0.024,0.049-0.035,0.072c-0.664,1.537-0.064,3.274,1.338,3.879c1.007,0.437,2.152,0.164,2.965-0.592
										c0.754,1.82,1.547,3.778,2.326,4.024c1.402,0.442,2.902,0.677,4.675-0.935C33.54,16.812,31.916,3.82,27.461,0.499z M24.287,4.467
										c0.145-0.831,0.814-1.408,1.498-1.289c0.683,0.118,1.117,0.889,0.973,1.72c-0.145,0.83-0.814,1.408-1.498,1.289
										C24.577,6.067,24.143,5.298,24.287,4.467z M6.347,12.961c-1.892-0.845-2.686-3.185-1.773-5.226c0.912-2.042,3.184-3.013,5.075-2.168
										c1.891,0.845,2.685,3.185,1.772,5.227C10.51,12.835,8.238,13.807,6.347,12.961z M14.235,16.884c-0.971,0.957-2.466,1.015-3.338,0.13
										c-0.873-0.886-0.792-2.379,0.179-3.336c0.971-0.957,2.466-1.015,3.338-0.13C15.287,14.434,15.207,15.927,14.235,16.884z
										M15.028,11.17c-1.292-0.865-1.554-2.742-0.583-4.192c0.97-1.449,2.805-1.924,4.098-1.059c1.293,0.866,1.555,2.742,0.583,4.192
										C18.154,11.561,16.321,12.036,15.028,11.17z M21.407,16.861c-1.242-0.055-2.201-1.202-2.142-2.564
										c0.06-1.361,1.113-2.423,2.355-2.368c1.242,0.054,2.201,1.201,2.143,2.563C23.704,15.854,22.648,16.915,21.407,16.861z
										M24.395,8.146c-0.145,0.83-0.813,1.408-1.498,1.289c-0.682-0.119-1.117-0.889-0.973-1.72s0.814-1.408,1.498-1.289
										C24.104,6.545,24.54,7.314,24.395,8.146z M27.053,10.804c-0.145,0.83-0.814,1.407-1.498,1.288c-0.682-0.118-1.117-0.889-0.973-1.72
										c0.146-0.83,0.814-1.408,1.498-1.289C26.762,9.202,27.197,9.972,27.053,10.804z M29.12,7.555c-0.146,0.831-0.815,1.408-1.498,1.289
										c-0.683-0.118-1.118-0.889-0.974-1.72c0.146-0.831,0.814-1.408,1.498-1.289S29.264,6.724,29.12,7.555z"/>
									</svg>
							</div>
							<div class="mr-side-nav-header-content">
								<h1>GenRocket</h1>
								<h2>The ultimate single-resource CPA marketing landing page.</h2>
							</div>
						</div>
						<div class="mr-side-nav-group">
							<div class="mr-side-nav-section-title-wrapper">
								<div class="mr-side-nav-section-title">Dashboards</div>
								<div class="mr-side-nav-section-subtitle">Select a category below to configure.</div>
							</div>
							<ul>
								<li class="nav-item <?php if (htmlspecialchars(!isset($_GET['step-one'])) && htmlspecialchars(!isset($_GET['step-two'])) && htmlspecialchars(!isset($_GET['step-three'])) && htmlspecialchars(!isset($_GET['step-four'])) && htmlspecialchars(!isset($_GET['header-settings'])) && htmlspecialchars(!isset($_GET['general-settings'])) && htmlspecialchars(!isset($_GET['design-colors'])) && htmlspecialchars(!isset($_GET['edit-admin'])) && htmlspecialchars(!isset($_GET['system-check'])) ) { echo 'active'; } ?>">
									<a class="nav-link" href="index.php"><i class="material-icons-two-tone">home</i>Home</a>
								</li>
								<li class="nav-item <?php if (htmlspecialchars(isset($_GET['step-one']))) { echo 'active'; } ?>">
									<a class="nav-link" href="index.php?step-one"><i class="material-icons-two-tone">gamepad</i>S1 - Username & Platform</a>
								</li>
								<li class="nav-item <?php if (htmlspecialchars(isset($_GET['step-two']))) { echo 'active'; } ?>">
									<a class="nav-link" href="index.php?step-two"><i class="material-icons-two-tone">gamepad</i>S2 - Resource Selection</a>
								</li>
								<li class="nav-item <?php if (htmlspecialchars(isset($_GET['step-three']))) { echo 'active'; } ?>">
									<a class="nav-link" href="index.php?step-three"><i class="material-icons-two-tone">gamepad</i>S3 - Proccessing</a>
								</li>
								<li class="nav-item <?php if (htmlspecialchars(isset($_GET['step-four']))) { echo 'active'; } ?>">
									<a class="nav-link" href="index.php?step-four"><i class="material-icons-two-tone">gamepad</i>S4 - Last Step</a>
								</li>
								<li class="nav-item <?php if (htmlspecialchars(isset($_GET['header-settings']))) { echo 'active'; } ?>">
									<a class="nav-link" href="index.php?header-settings"><i class="material-icons-two-tone">view_day</i>Header Settings</a>
								</li>
								<li class="nav-item <?php if (htmlspecialchars(isset($_GET['general-settings']))) { echo 'active'; } ?>">
									<a class="nav-link" href="index.php?general-settings"><i class="material-icons-two-tone">settings</i>General Settings</a>
								</li>
								<li class="nav-item <?php if (htmlspecialchars(isset($_GET['design-colors']))) { echo 'active'; } ?>">
									<a class="nav-link" href="index.php?design-colors"><i class="material-icons-two-tone">color_lens</i>Background & Colors</a>
								</li>
								<li class="nav-item <?php if (htmlspecialchars(isset($_GET['edit-admin']))) { echo 'active'; } ?>">
									<a class="nav-link" href="index.php?edit-admin"><i class="material-icons-two-tone">edit</i>Edit Admin</a>
								</li>
								<li class="nav-item <?php if (htmlspecialchars(isset($_GET['system-check']))) { echo 'active'; } ?>">
									<a class="nav-link" href="index.php?system-check"><i class="material-icons-two-tone">build_circle</i>System Check</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="db_action/logout.php"><i class="material-icons-two-tone">exit_to_app</i>Logout</a>
								</li>
							</ul>
						</div>
						<div class="mr-side-nav-group">
							<div class="mr-side-nav-section-title-wrapper">
								<div class="mr-side-nav-section-title">Support</div>
								<div class="mr-side-nav-section-subtitle">Get in touch with us to receive support.</div>
							</div>
							<ul>
								<li class="nav-item">
									<div class="nav-link nav-link-st"><a href="https://www.marketing-rhino.com/log-a-support-ticket/" target="_blank"><i class="material-icons-two-tone">support</i><div><span>Request Support:</span> Open a support ticket</div></a></div>
								</li>
								<li class="nav-item">
									<div class="nav-link"><i class="fab fa-skype"></i><div><span>Skype Username:</span> counter.mind</div></div>
								</li>
								<li class="nav-item">
									<div class="nav-link"><i class="material-icons-two-tone">alternate_email</i><div><span>Email:</span> info@marketing-rhino.com</div></div>
								</li>
							</ul>						
						</div>
					</div>
					<div class="ac-wrapper">
						<div class="ac-inner-wrapper">
							<a href="https://www.marketing-rhino.com/" target="_blank">
								<img src="assets/img/mr-logo.png" class="ac-logo img-fluid" />
								www.marketing-rhino.com
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mr-admin-content-wrapper">	  
				<?php				
				if (htmlspecialchars(!isset($_GET['step-one'])) && htmlspecialchars(!isset($_GET['step-two'])) && htmlspecialchars(!isset($_GET['step-three'])) && htmlspecialchars(!isset($_GET['step-four'])) && htmlspecialchars(!isset($_GET['header-settings'])) && htmlspecialchars(!isset($_GET['general-settings'])) && htmlspecialchars(!isset($_GET['design-colors'])) && htmlspecialchars(!isset($_GET['edit-admin'])) && htmlspecialchars(!isset($_GET['system-check'])))
				{
				require_once(realpath(dirname(__FILE__) . '/db_action/m_s_k.php'));
				?>
				<div class="dashboard-wrapper">
					<div class="dashboard-header-wrapper animated fadeInDown">
						<span class="dashboard-header-subtitle">Admin Dashboard</span>
						<h1 class="dashboard-header-title">Home</h1>
						<?php if (htmlspecialchars(isset($_GET['rmsg'])) && htmlspecialchars($_GET['rmsg']) == 's') {?>
							<div class="dashboard-save-notification">Settings Saved</div>
						<?php } ?>						
					</div>
					<div class="dashboard-content-wrapper">
						<div class="dashboard-content-container">								
							<div class="dashboard-content-panel-wrapper">
								<div class="dashboard-content-panel-header">
									<h2>License Key</h2>
									<p>In order to gain full access to all functionalities, please enter your license key below. The license key was sent to your e-mail address which was entered during the checkout.</p>
									<div class="input-instructions input-instructions-m-t">
										<i class="material-icons-two-tone">info</i>
										<div>
											You need to connect your domain name with your license key inside <a href="https://www.marketing-rhino.com/customer-profile/" target="_blank">customer profile</a> on our website, as the landing page will function properly only on connected domains.
										</div>
									</div>
								</div>
								<form action="db_action/s_l_k.php" method="POST">
									<div class="dashboard-content-panel-content">
										<div class="mr-field-wrapper">
											<label for="l_key" class="mr-dashboard-label">License Key</label>
											<div class="mr-input-wrapper">
												<span class="material-icons-two-tone">vpn_key</span>
												<input type="text" name="l_key" id="l_key" class="mr-input-style mr-input-style-icon" placeholder="License Key..." value="<?php echo $lI; ?>" required>
											</div>	
										</div>										
									</div>										
									<div class="dashboard-content-panel-footer">
										<div class="form-group submit-form-group">
											<input type="submit" class="mr-btn-submit float-right" value="Save License Key">
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>														
						</div>						
					</div>						
				</div>				
				<?php
				}
				if (htmlspecialchars(isset($_GET['step-one'])))
				{
				$query_s1_ts=$file_db->prepare("SELECT * FROM s1_ts");
				$query_s1_ts->execute();
				$data_s1_ts=$query_s1_ts->fetch();
				$query_s1_ps=$file_db->prepare("SELECT * FROM s1_ps");
				$query_s1_ps->execute();
				$data_s1_ps=$query_s1_ps->fetch();
				$query_s1_sts=$file_db->prepare("SELECT * FROM s1_sts");
				$query_s1_sts->execute();
				$data_s1_sts=$query_s1_sts->fetch();
				?>
				<div class="dashboard-wrapper">
					<div class="dashboard-header-wrapper animated fadeInDown">
						<span class="dashboard-header-subtitle">Admin Dashboard</span>
						<h1 class="dashboard-header-title">Step 1 - Username & Platform</h1>
						<?php if (htmlspecialchars(isset($_GET['rmsg'])) && htmlspecialchars($_GET['rmsg']) == 's') {?>
							<div class="dashboard-save-notification">Settings Saved</div>
						<?php } ?>
					</div>
					<div class="dashboard-content-wrapper">
						<div class="dashboard-content-container cwide">								
							<div class="dashboard-content-panel-wrapper">
								<div class="dashboard-content-panel-header">
									<h2>Step 1 - Text Strings</h2>
									<p>You can manage all the text strings displayed inside Step 1 - Username & Platform by editing the appropriate fields below.</p>
								</div>
								<form action="db_action/usots.php" method="POST">
									<div class="dashboard-content-panel-content">
										<div class="form-group">
											<label for="s1_i_t" class="mr-dashboard-label">Intro Text</label>
											<textarea name="s1_i_t" id="s1_i_t" class="mr-textarea-style" placeholder="Please enter your username and select your platform to proceed."><?php echo $data_s1_ts['s1_i_t']; ?></textarea>
											<div class="input-instructions"><i class="material-icons-two-tone">info</i>Intro text which is displayed above the username field and platform selection.</div>
										</div>
										<div class="row">
											<div class="col-md-7 mmfwot">
												<div class="form-group">
													<label for="s1_u_ph" class="mr-dashboard-label">Username Input Placeholder</label>
													<input type="text" name="s1_u_ph" id="s1_u_ph" class="mr-input-style" placeholder="Your Username..." value="<?php echo htmlspecialchars($data_s1_ts['s1_u_ph']); ?>"/>
													<div class="input-instructions"><i class="material-icons-two-tone">info</i>Placeholder text displayed inside username input field.</div>
												</div>
											</div>
											<div class="col-md-5 mmfwot">
												<div class="form-group">
													<label for="s1_bt" class="mr-dashboard-label">Button Text*</label>
													<input type="text" name="s1_bt" id="s1_bt" class="mr-input-style" placeholder="Proceed" value="<?php echo htmlspecialchars($data_s1_ts['s1_bt']); ?>" required />
													<div class="input-instructions"><i class="material-icons-two-tone">info</i>Text which is displayed inside button on step one.</div>
												</div>
											</div>											
										</div>
										<div class="row">
											<div class="col-md-6 mmfwot">
												<div class="form-group">
													<label for="s1_u_e" class="mr-dashboard-label">Username Input Error</label>
													<input type="text" name="s1_u_e" id="s1_u_e" class="mr-input-style" placeholder="Please enter your username." value="<?php echo htmlspecialchars($data_s1_ts['s1_u_e']); ?>" required />
													<div class="input-instructions"><i class="material-icons-two-tone">info</i>Error message which is displayed if username is not entered.</div>
												</div>
											</div>
											<div class="col-md-6 mmfwot">
												<div class="form-group">
													<label for="s1_p_e" class="mr-dashboard-label">Platform Select Error</label>
													<input type="text" name="s1_p_e" id="s1_p_e" class="mr-input-style" placeholder="Please select your platform." value="<?php echo htmlspecialchars($data_s1_ts['s1_p_e']); ?>" required />
													<div class="input-instructions"><i class="material-icons-two-tone">info</i>Error message which is displayed if platform is not selected.</div>
												</div>
											</div>											
										</div>
									</div>										
									<div class="dashboard-content-panel-footer">
										<div class="form-group submit-form-group">
											<input type="submit" class="mr-btn-submit float-right" value="Save">
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
							<div class="dashboard-content-panel-wrapper dfgw-mt">
								<div class="dashboard-content-panel-header">
									<h2>Step 1 - Available Platforms</h2>
									<p>Manage which platforms are displayed on step one.</p>
								</div>
								<form action="db_action/usops.php" method="POST">
									<div class="dashboard-content-panel-content">
										<div class="m-a-p-w">
											<div class="m-a-p-i">
												<div class="form-group">
													<label class="mr-dashboard-label text-center" for="ap_wi"><i class="fab fa-windows"></i>Windows</label>
													<div class="mr-switch-style">
														<input type="checkbox" name="ap_wi" class="mr-switch-style-checkbox pscb" id="ap_wi" tabindex="0" value="1" <?php if(htmlspecialchars($data_s1_ps['ap_wi']) == '1') { echo 'checked'; } ?>>
														<label class="mr-switch-style-label" for="ap_wi">
															<span class="mr-switch-style-inner"></span>
															<span class="mr-switch-style-switch"></span>
														</label>
													</div>
												</div>
											</div>
											<div class="m-a-p-i">
												<div class="form-group">
													<label class="mr-dashboard-label text-center" for="ap_xb"><i class="fab fa-xbox"></i>Xbox</label>
													<div class="mr-switch-style">
														<input type="checkbox" name="ap_xb" class="mr-switch-style-checkbox pscb" id="ap_xb" tabindex="0" value="1" <?php if(htmlspecialchars($data_s1_ps['ap_xb']) == '1') { echo 'checked'; } ?>>
														<label class="mr-switch-style-label" for="ap_xb">
															<span class="mr-switch-style-inner"></span>
															<span class="mr-switch-style-switch"></span>
														</label>
													</div>
												</div>
											</div>
											<div class="m-a-p-i">
												<div class="form-group">
													<label class="mr-dashboard-label text-center" for="ap_ps"><i class="fab fa-playstation"></i>Playstation</label>
													<div class="mr-switch-style">
														<input type="checkbox" name="ap_ps" class="mr-switch-style-checkbox pscb" id="ap_ps" tabindex="0" value="1" <?php if(htmlspecialchars($data_s1_ps['ap_ps']) == '1') { echo 'checked'; } ?>>
														<label class="mr-switch-style-label" for="ap_ps">
															<span class="mr-switch-style-inner"></span>
															<span class="mr-switch-style-switch"></span>
														</label>
													</div>
												</div>
											</div>
											<div class="m-a-p-i">
												<div class="form-group">
													<label class="mr-dashboard-label text-center" for="ap_an"><i class="fab fa-android"></i>Android</label>
													<div class="mr-switch-style">
														<input type="checkbox" name="ap_an" class="mr-switch-style-checkbox pscb" id="ap_an" tabindex="0" value="1" <?php if(htmlspecialchars($data_s1_ps['ap_an']) == '1') { echo 'checked'; } ?>>
														<label class="mr-switch-style-label" for="ap_an">
															<span class="mr-switch-style-inner"></span>
															<span class="mr-switch-style-switch"></span>
														</label>
													</div>
												</div>
											</div>
											<div class="m-a-p-i">
												<div class="form-group">
													<label class="mr-dashboard-label text-center" for="ap_io"><i class="fab fa-apple"></i>iOS</label>
													<div class="mr-switch-style">
														<input type="checkbox" name="ap_io" class="mr-switch-style-checkbox pscb" id="ap_io" tabindex="0" value="1" <?php if(htmlspecialchars($data_s1_ps['ap_io']) == '1') { echo 'checked'; } ?>>
														<label class="mr-switch-style-label" for="ap_io">
															<span class="mr-switch-style-inner"></span>
															<span class="mr-switch-style-switch"></span>
														</label>
													</div>
												</div>
											</div>											
										</div>
										<div class="m-a-p-e-w">
											<span>You must enable atleast one platform before saving.</span>
										</div>
									</div>
									<div class="dashboard-content-panel-footer">
										<div class="form-group submit-form-group">
											<input type="submit" class="mr-btn-submit float-right" value="Save">
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
							<div class="dashboard-content-panel-wrapper dfgw-mt">
								<div class="dashboard-content-panel-header">
									<h2>Step 1 - Searching</h2>
									<p>You can manage text strings displayed inside Step 1 - Searching by editing the appropriate fields below.</p>
								</div>
								<form action="db_action/usosts.php" method="POST">
									<div class="dashboard-content-panel-content">
										<div class="row">
											<div class="col-md-6 mmfwot">
												<div class="form-group">
													<label for="s1_s_t1" class="mr-dashboard-label">Searching Text</label>
													<input type="text" name="s1_s_t1" id="s1_s_t1" class="mr-input-style" placeholder="Searching..." value="<?php echo htmlspecialchars($data_s1_sts['s1_s_t1']); ?>" required />
													<div class="input-instructions"><i class="material-icons-two-tone">info</i>Text message displayed while searching.</div>
												</div>
											</div>
											<div class="col-md-6 mmfwot">
												<div class="form-group">
													<label for="s1_s_t2" class="mr-dashboard-label">Search Success Text</label>
													<input type="text" name="s1_s_t2" id="s1_s_t2" class="mr-input-style" placeholder="Success!" value="<?php echo htmlspecialchars($data_s1_sts['s1_s_t2']); ?>" required />
													<div class="input-instructions"><i class="material-icons-two-tone">info</i>Success text message which is displayed when searching ends.</div>
												</div>
											</div>											
										</div>
									</div>										
									<div class="dashboard-content-panel-footer">
										<div class="form-group submit-form-group">
											<input type="submit" class="mr-btn-submit float-right" value="Save">
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
						</div>						
					</div>						
				</div>
				<?php
				}
				if (htmlspecialchars(isset($_GET['step-two'])))
				{
				$query_s2_ts=$file_db->prepare("SELECT * FROM s2_ts");
				$query_s2_ts->execute();
				$data_s2_ts=$query_s2_ts->fetch();
				$query_s2_rso=$file_db->prepare("SELECT * FROM s2_rso WHERE id = 1");
				$query_s2_rso->execute();
				$data_s2_rso=$query_s2_rso->fetch();
				$query_s2_rst=$file_db->prepare("SELECT * FROM s2_rso WHERE id = 2");
				$query_s2_rst->execute();
				$data_s2_rst=$query_s2_rst->fetch();
				$query_s2_rsth=$file_db->prepare("SELECT * FROM s2_rso WHERE id = 3");
				$query_s2_rsth->execute();
				$data_s2_rsth=$query_s2_rsth->fetch();
				$query_s2_rsf=$file_db->prepare("SELECT * FROM s2_rso WHERE id = 4");
				$query_s2_rsf->execute();
				$data_s2_rsf=$query_s2_rsf->fetch();
				?>
				<div class="dashboard-wrapper">
					<div class="dashboard-header-wrapper animated fadeInDown">
						<span class="dashboard-header-subtitle">Admin Dashboard</span>
						<h1 class="dashboard-header-title">Step 2 - Resource Selection</h1>
						<?php if (htmlspecialchars(isset($_GET['rmsg'])) && htmlspecialchars($_GET['rmsg']) == 's') {?>
							<div class="dashboard-save-notification">Settings Saved</div>
						<?php } ?>
					</div>
					<div class="dashboard-content-wrapper">
						<div class="dashboard-content-container cwide">								
							<div class="dashboard-content-panel-wrapper">
								<div class="dashboard-content-panel-header">
									<h2>Step 2 - Text Strings</h2>
									<p>You can manage all the text strings displayed inside Step 2 - Resource Selection by editing the appropriate fields below.</p>
								</div>
								<form action="db_action/ustts.php" method="POST">
									<div class="dashboard-content-panel-content">
										<div class="form-group">
											<label for="s2_i_t" class="mr-dashboard-label">Intro Text</label>
											<textarea name="s2_i_t" id="s1_i_t" class="mr-textarea-style" placeholder="Resource selection intro text..."><?php echo $data_s2_ts['s2_i_t']; ?></textarea>
											<div class="input-instructions"><i class="material-icons-two-tone">info</i>Intro text which is displayed above the resource selection.</div>
										</div>
										<div class="row">
											<div class="col-md-7 mmfwot">
												<div class="form-group">
													<label for="s2_rb_t" class="mr-dashboard-label">Selected Resource Box Title</label>
													<input type="text" name="s2_rb_t" id="s2_rb_t" class="mr-input-style" placeholder="Selected amount" value="<?php echo htmlspecialchars($data_s2_ts['s2_rb_t']); ?>"/>
													<div class="input-instructions"><i class="material-icons-two-tone">info</i>Title of the currently selected resource amount box.</div>
												</div>
											</div>
											<div class="col-md-5 mmfwot">
												<div class="form-group">
													<label for="s2_bt" class="mr-dashboard-label">Button Text*</label>
													<input type="text" name="s2_bt" id="s2_bt" class="mr-input-style" placeholder="Proceed" value="<?php echo htmlspecialchars($data_s2_ts['s2_bt']); ?>" required />
													<div class="input-instructions"><i class="material-icons-two-tone">info</i>Text which is displayed inside button on step two.</div>
												</div>
											</div>											
										</div>
									</div>										
									<div class="dashboard-content-panel-footer">
										<div class="form-group submit-form-group">
											<input type="submit" class="mr-btn-submit float-right" value="Save">
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
							<div class="dashboard-content-panel-wrapper dfgw-mt">
								<div class="dashboard-content-panel-header">
									<h2>Step 2 - Resource Settings</h2>
									<p>Manage resource name, values and images by editing the appropriate fields below.</p>
								</div>
								<form action="db_action/ustrso.php" method="POST" enctype="multipart/form-data">
									<div class="dashboard-content-panel-content">										
										<div class="m-a-r-w">
											<div class="m-a-r-r-w">
												<h3>Resource Option 1</h3>
												<div class="m-a-r-i">
													<div class="row">
														<div class="col-md-2 mmfwot">
															<div class="form-group">
																<label class="mr-dashboard-label">Current Image</label>
																<div class="current-logo-img-wrapper">
																	<img src="../<?php echo $data_s2_rso['s2_rs_o_i']; ?>" class="img-fluid current-logo-img" />
																</div>
															</div>
														</div>
														<div class="col-md-4 mmfwot">
															<div class="form-group">
																<label for="s2_rs_o_i" class="mr-dashboard-label">Resource Option 1 Image</label>
																<input type="file" name="s2_rs_o_i" class="mr-input-style mr-file-input-style" />
																<div class="input-instructions"><i class="material-icons-two-tone">info</i>Recommended Size: 120x120px <br/>Accepted Extensions: .png, .jpg, .jpeg</div>
															</div>
														</div>
														<div class="col-md-3 mmfwot">
															<div class="form-group">
																<label for="s2_rs_o_v" class="mr-dashboard-label">Resource Option 1 Value*</label>
																<input type="text" name="s2_rs_o_v" id="s2_rs_o_v" class="mr-input-style mricn" placeholder="Value..." value="<?php echo $data_s2_rso['s2_rs_o_v']; ?>" required />
																<div class="input-instructions"><i class="material-icons-two-tone">info</i>Value for resource option 1 in numeric format.</div>
															</div>
														</div>
														<div class="col-md-3 mmfwot">
															<div class="form-group">
																<label for="s2_rs_o_l" class="mr-dashboard-label">Resource Option 1 Label*</label>
																<input type="text" name="s2_rs_o_l" id="s2_rs_o_l" class="mr-input-style" placeholder="Label..." value="<?php echo $data_s2_rso['s2_rs_o_l']; ?>" required />
																<div class="input-instructions"><i class="material-icons-two-tone">info</i>Label for resource option 1 in text format.</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="m-a-r-r-w">
												<h3>Resource Option 2</h3>
												<div class="m-a-r-i">
													<div class="row">
														<div class="col-md-2 mmfwot">
															<div class="form-group">
																<label class="mr-dashboard-label">Current Image</label>
																<div class="current-logo-img-wrapper">
																	<img src="../<?php echo $data_s2_rst['s2_rs_t_i']; ?>" class="img-fluid current-logo-img" />
																</div>
															</div>
														</div>
														<div class="col-md-4 mmfwot">
															<div class="form-group">
																<label for="s2_rs_t_i" class="mr-dashboard-label">Resource Option 2 Image</label>
																<input type="file" name="s2_rs_t_i" class="mr-input-style mr-file-input-style" />
																<div class="input-instructions"><i class="material-icons-two-tone">info</i>Recommended Size: 120x120px <br/>Accepted Extensions: .png, .jpg, .jpeg</div>
															</div>
														</div>
														<div class="col-md-3 mmfwot">
															<div class="form-group">
																<label for="s2_rs_t_v" class="mr-dashboard-label">Resource Option 2 Value*</label>
																<input type="text" name="s2_rs_t_v" id="s2_rs_t_v" class="mr-input-style mricn" placeholder="Value..." value="<?php echo $data_s2_rst['s2_rs_t_v']; ?>" required />
																<div class="input-instructions"><i class="material-icons-two-tone">info</i>Value for resource option 2 in numeric format.</div>
															</div>
														</div>
														<div class="col-md-3 mmfwot">
															<div class="form-group">
																<label for="s2_rs_t_l" class="mr-dashboard-label">Resource Option 2 Label*</label>
																<input type="text" name="s2_rs_t_l" id="s2_rs_t_l" class="mr-input-style" placeholder="Label..." value="<?php echo $data_s2_rst['s2_rs_t_l']; ?>" required />
																<div class="input-instructions"><i class="material-icons-two-tone">info</i>Label for resource option 2 in text format.</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="m-a-r-r-w">
												<h3>Resource Option 3</h3>
												<div class="m-a-r-i">
													<div class="row">
														<div class="col-md-2 mmfwot">
															<div class="form-group">
																<label class="mr-dashboard-label">Current Image</label>
																<div class="current-logo-img-wrapper">
																	<img src="../<?php echo $data_s2_rsth['s2_rs_th_i']; ?>" class="img-fluid current-logo-img" />
																</div>
															</div>
														</div>
														<div class="col-md-4 mmfwot">
															<div class="form-group">
																<label for="s2_rs_th_i" class="mr-dashboard-label">Resource Option 3 Image</label>
																<input type="file" name="s2_rs_th_i" class="mr-input-style mr-file-input-style" />
																<div class="input-instructions"><i class="material-icons-two-tone">info</i>Recommended Size: 120x120px <br/>Accepted Extensions: .png, .jpg, .jpeg</div>
															</div>
														</div>
														<div class="col-md-3 mmfwot">
															<div class="form-group">
																<label for="s2_rs_th_v" class="mr-dashboard-label">Resource Option 3 Value*</label>
																<input type="text" name="s2_rs_th_v" id="s2_rs_th_v" class="mr-input-style mricn" placeholder="Value..." value="<?php echo $data_s2_rsth['s2_rs_th_v']; ?>" required />
																<div class="input-instructions"><i class="material-icons-two-tone">info</i>Value for resource option 3 in numeric format.</div>
															</div>
														</div>
														<div class="col-md-3 mmfwot">
															<div class="form-group">
																<label for="s2_rs_th_l" class="mr-dashboard-label">Resource Option 3 Label*</label>
																<input type="text" name="s2_rs_th_l" id="s2_rs_th_l" class="mr-input-style" placeholder="Label..." value="<?php echo $data_s2_rsth['s2_rs_th_l']; ?>" required />
																<div class="input-instructions"><i class="material-icons-two-tone">info</i>Label for resource option 3 in text format.</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="m-a-r-r-w">
												<h3>Resource Option 4</h3>
												<div class="m-a-r-i">
													<div class="row">
														<div class="col-md-2 mmfwot">
															<div class="form-group">
																<label class="mr-dashboard-label">Current Image</label>
																<div class="current-logo-img-wrapper">
																	<img src="../<?php echo $data_s2_rsf['s2_rs_f_i']; ?>" class="img-fluid current-logo-img" />
																</div>
															</div>
														</div>
														<div class="col-md-4 mmfwot">
															<div class="form-group">
																<label for="s2_rs_f_i" class="mr-dashboard-label">Resource Option 4 Image</label>
																<input type="file" name="s2_rs_f_i" class="mr-input-style mr-file-input-style" />
																<div class="input-instructions"><i class="material-icons-two-tone">info</i>Recommended Size: 120x120px <br/>Accepted Extensions: .png, .jpg, .jpeg</div>
															</div>
														</div>
														<div class="col-md-3 mmfwot">
															<div class="form-group">
																<label for="s2_rs_f_v" class="mr-dashboard-label">Resource Option 4 Value*</label>
																<input type="text" name="s2_rs_f_v" id="s2_rs_f_v" class="mr-input-style mricn" placeholder="Value..." value="<?php echo $data_s2_rsf['s2_rs_f_v']; ?>" required />
																<div class="input-instructions"><i class="material-icons-two-tone">info</i>Value for resource option 4 in numeric format.</div>
															</div>
														</div>
														<div class="col-md-3 mmfwot">
															<div class="form-group">
																<label for="s2_rs_f_l" class="mr-dashboard-label">Resource Option 4 Label*</label>
																<input type="text" name="s2_rs_f_l" id="s2_rs_f_l" class="mr-input-style" placeholder="Label..." value="<?php echo $data_s2_rsf['s2_rs_f_l']; ?>" required />
																<div class="input-instructions"><i class="material-icons-two-tone">info</i>Label for resource option 4 in text format.</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="dashboard-content-panel-footer">
										<div class="form-group submit-form-group">
											<input type="submit" class="mr-btn-submit float-right" value="Save">
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>														
						</div>						
					</div>						
				</div>
				<?php					
				}
				if (htmlspecialchars(isset($_GET['step-three'])))
				{
				$query=$file_db->prepare("SELECT * FROM s3_ps");
				$query->execute();
				$data=$query->fetch();
				?>
				<div class="dashboard-wrapper">
					<div class="dashboard-header-wrapper animated fadeInDown">
						<span class="dashboard-header-subtitle">Admin Dashboard</span>
						<h1 class="dashboard-header-title">Step 3 - Proccessing</h1>
						<?php if (htmlspecialchars(isset($_GET['rmsg'])) && htmlspecialchars($_GET['rmsg']) == 's') {?>
							<div class="dashboard-save-notification">Settings Saved</div>
						<?php } ?>
					</div>
					<div class="dashboard-content-wrapper">
						<div class="dashboard-content-container">
							<div class="dashboard-content-panel-wrapper dfgw-mt">
								<div class="dashboard-content-panel-header">
									<h2>Step 3 - Manage Proccessing Strings</h2>
									<p>You can manage content of proccessing strings by editing individual row messages below. The "resource creation" animation will be displayed on Proccessing string 3.</p>
									<br>
									<p>You can insert the following shortcodes into any of proccessing strings:</p>
									<div class="shrtc-w">
										<div onclick="copyToClipboard('#cshtt1')">
											<strong id="cshtt1">[selected_amount]</strong> <span class="shrtc-e">- Displays the visitor-selected amount in numeric format.</span>
										</div>
										<div  onclick="copyToClipboard('#cshtt2')">
											<strong id="cshtt2">[resource_name]</strong> <span class="shrtc-e">- Displays the visitor-selected resource name in text format.</span>
										</div>
										<div onclick="copyToClipboard('#cshtt3')">
											<strong id="cshtt3">[username]</strong> <span class="shrtc-e">- Displays the visitor-entered username value in text format.</span>
										</div>
										<div onclick="copyToClipboard('#cshtt4')">
											<strong id="cshtt4">[platform]</strong> <span class="shrtc-e">- Displays the visitor-selected platform value in text format.</span>									
										</div>
									</div>
									<div class="shrtc-cm-w">
										<span>Shortcode copied</span>
									</div>
								</div>
								<form action="db_action/u_p_s.php" method="POST">
									<div class="dashboard-content-panel-content">
										<div class="form-group">
											<label for="proc_str_1" class="mr-dashboard-label">Proccessing String 1</label>
											<div class="mr-input-wrapper">
												<span class="material-icons-two-tone">format_quote</span>
												<input type="text" name="proc_str_1" class="mr-input-style mr-input-style-icon" placeholder="Proccessing String 1..." value="<?php echo htmlspecialchars($data['proc_str_1']); ?>" required />
											</div>												
										</div>
										<div class="form-group">
											<label for="proc_str_2" class="mr-dashboard-label">Proccessing String 2</label>
											<div class="mr-input-wrapper">
												<span class="material-icons-two-tone">format_quote</span>
												<input type="text" name="proc_str_2" class="mr-input-style mr-input-style-icon" placeholder="Proccessing String 2..." value="<?php echo htmlspecialchars($data['proc_str_2']); ?>" required />
											</div>												
										</div>
										<div class="form-group">
											<label for="proc_str_3" class="mr-dashboard-label">Proccessing String 3<span class="rscrs-l-w">Resource Animation Step</span></label>
											<div class="mr-input-wrapper">
												<span class="material-icons-two-tone">format_quote</span>
												<input type="text" name="proc_str_3" class="mr-input-style mr-input-style-icon" placeholder="Proccessing String 3..." value="<?php echo htmlspecialchars($data['proc_str_3']); ?>" required />
											</div>												
										</div>
										<div class="form-group">
											<label for="proc_str_4" class="mr-dashboard-label">Proccessing String 4</label>
											<div class="mr-input-wrapper">
												<span class="material-icons-two-tone">format_quote</span>
												<input type="text" name="proc_str_4" class="mr-input-style mr-input-style-icon" placeholder="Proccessing String 4..." value="<?php echo htmlspecialchars($data['proc_str_4']); ?>" required />
											</div>												
										</div>
										<div class="form-group">
											<label for="proc_str_5" class="mr-dashboard-label">Proccessing String 5</label>
											<div class="mr-input-wrapper">
												<span class="material-icons-two-tone">format_quote</span>
												<input type="text" name="proc_str_5" class="mr-input-style mr-input-style-icon" placeholder="Proccessing String 5..." value="<?php echo htmlspecialchars($data['proc_str_5']); ?>" required />
											</div>												
										</div>
										<div class="input-instructions"><i class="material-icons-two-tone">info</i>Shortcodes will be automatically replaced with an actual value depending on their type.</div>
									</div>										
									<div class="dashboard-content-panel-footer">
										<div class="form-group submit-form-group">
											<input type="submit" class="mr-btn-submit float-right" value="Save">
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>							
						</div>						
					</div>	
				</div>	
				<?php					
				}
				if (htmlspecialchars(isset($_GET['step-four'])))
				{
				$query=$file_db->prepare("SELECT * FROM s4_s");
				$query->execute();
				$data=$query->fetch();
				$query2=$file_db->prepare("SELECT * FROM s4_bs");
				$query2->execute();
				$data2=$query2->fetch();
				?>
				<div class="dashboard-wrapper">
					<div class="dashboard-header-wrapper animated fadeInDown">
						<span class="dashboard-header-subtitle">Admin Dashboard</span>
						<h1 class="dashboard-header-title">Step 4 - Last Step</h1>
						<?php if (htmlspecialchars(isset($_GET['rmsg'])) && htmlspecialchars($_GET['rmsg']) == 's') {?>
							<div class="dashboard-save-notification">Settings Saved</div>
						<?php } ?>
					</div>
					<div class="dashboard-content-wrapper">
						<div class="dashboard-content-container">
							<div class="dashboard-content-panel-wrapper dfgw-mt">
								<div class="dashboard-content-panel-header">
									<h2>Step 4 - Manage Last Step Content</h2>
									<p>You can manage text content which is displayed inside last step by editing appropriate fields below.</p>
									<br>
									<p>You can insert the following shortcodes into any of the text fields:</p>
									<div class="shrtc-w">
										<div onclick="copyToClipboard('#cshtt1')">
											<strong id="cshtt1">[selected_amount]</strong> <span class="shrtc-e">- Displays the visitor-selected amount in numeric format.</span>
										</div>
										<div  onclick="copyToClipboard('#cshtt2')">
											<strong id="cshtt2">[resource_name]</strong> <span class="shrtc-e">- Displays the visitor-selected resource name in text format.</span>
										</div>
										<div onclick="copyToClipboard('#cshtt3')">
											<strong id="cshtt3">[username]</strong> <span class="shrtc-e">- Displays the visitor-entered username value in text format.</span>
										</div>
										<div onclick="copyToClipboard('#cshtt4')">
											<strong id="cshtt4">[platform]</strong> <span class="shrtc-e">- Displays the visitor-selected platform value in text format.</span>									
										</div>
									</div>
									<div class="shrtc-cm-w">
										<span>Shortcode copied</span>
									</div>
								</div>
								<form action="db_action/usfs.php" method="POST">
									<div class="dashboard-content-panel-content">
										<div class="form-group">
											<label for="s4_stt" class="mr-dashboard-label">Last Step Title</label>
											<div class="mr-input-wrapper">
												<span class="material-icons-two-tone">format_quote</span>
												<input type="text" name="s4_stt" class="mr-input-style mr-input-style-icon" placeholder="Last Step..." value="<?php echo $data['s4_stt']; ?>" required />
											</div>												
										</div>
										<div class="form-group">
											<label for="s4_stp" class="mr-dashboard-label">Last Step Text</label>
											<textarea id="s4_stp" name="s4_stp" class="mr-textarea-style" placeholder="Last step text content..." rows="5" required><?php echo $data['s4_stp']; ?></textarea>	
											<div class="input-instructions"><i class="material-icons-two-tone">info</i>Shortcodes will be automatically replaced with an actual value depending on their type.</div>	
										</div>										
									</div>										
									<div class="dashboard-content-panel-footer">
										<div class="form-group submit-form-group">
											<input type="submit" class="mr-btn-submit float-right" value="Save">
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
							<div class="dashboard-content-panel-wrapper dfgw-mt">
								<div class="dashboard-content-panel-header">
									<h2>Step 4 - Manage Last Step Button</h2>
									<p>You can manage last step button settings below. By selecting the "Direct URL Redirect" option you can enter an URL address to which your visitors are redirected after clicking on the button. Alternatively you can select "onClick Event" option, where can enter onClick code and script which get triggered after clicking the button.</p>
								</div>
								<form action="db_action/usfbs.php" method="POST">
									<div class="dashboard-content-panel-content">
										<div class="form-group radio-form-group">
											<div class="radio-select-wrapper">
												<div class="radio-select-inner-wrapper">
													<input type="radio" id="direct" name="s4_bst" value="direct" <?php if ($data2['s4_bst'] == 'direct'){ echo 'checked'; } ?>>														
													<label for="direct"><span class="material-icons-two-tone">link</span> Direct URL Redirect</label>
												</div>	
											</div>	
											<div class="radio-select-wrapper rswlc">
												<div class="radio-select-inner-wrapper">
													<input type="radio" id="onclick" name="s4_bst" value="onclick" <?php if ($data2['s4_bst'] == 'onclick'){ echo 'checked'; } ?>>														
													<label for="onclick"><span class="material-icons-two-tone">code</span> onClick Event</label>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="s-l-s-b-t-w s-l-s-b-t-w-direct">
											<div class="form-group">
												<label for="s4_bsduu" class="mr-dashboard-label">Direct URL Address</label>
												<div class="mr-input-wrapper">
													<span class="material-icons-two-tone">label</span>
													<input type="text" id="s4_bsduu" name="s4_bsduu" class="mr-input-style mr-input-style-icon" placeholder="https://www.yourdirecturl.com/" value="<?php echo $data2['s4_bsduu']; ?>" />
												</div>												
											</div>
										</div>
										<div class="s-l-s-b-t-w s-l-s-b-t-w-onclick">
											<div class="form-group">
												<label for="s4_bsdocc" class="mr-dashboard-label">onClick Code</label>
												<div class="mr-input-wrapper">
													<span class="material-icons-two-tone">label</span>
													<input id="s4_bsdocc" type="text" name="s4_bsdocc" class="mr-input-style mr-input-style-icon" placeholder="call_locker();" value="<?php echo $data2['s4_bsdocc']; ?>" />
												</div>												
											</div>
											<div class="form-group">
												<label for="s4_bsdocs" class="mr-dashboard-label">onClick Script Code</label>
												<textarea id="s4_bsdocs" name="s4_bsdocs" class="mr-textarea-style" placeholder="<script type='text/javascript' id='ogjs' src='https://www.yourscriptdomain.net/cl/load.php?id=000000000'></script>" rows="5"><?php echo $data2['s4_bsdocs']; ?></textarea>													
											</div>
										</div>	
									</div>										
									<div class="dashboard-content-panel-footer">
										<div class="form-group submit-form-group">
											<input type="submit" class="mr-btn-submit float-right" value="Save">
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>	
						</div>						
					</div>	
				</div>	
				<?php					
				}
				if (htmlspecialchars(isset($_GET['header-settings'])))
				{
				$query=$file_db->prepare("SELECT * FROM header_settings");
				$query->execute();
				$data=$query->fetch();	
				?>
				<div class="dashboard-wrapper">
					<div class="dashboard-header-wrapper animated fadeInDown">
						<span class="dashboard-header-subtitle">Admin Dashboard</span>
						<h1 class="dashboard-header-title">Header Settings</h1>
						<?php if (htmlspecialchars(isset($_GET['rmsg'])) && htmlspecialchars($_GET['rmsg']) == 's') {?>
							<div class="dashboard-save-notification">Settings Saved</div>
						<?php } ?>
					</div>
					<div class="dashboard-content-wrapper">
						<div class="dashboard-content-container">								
							<div class="dashboard-content-panel-wrapper">
								<div class="dashboard-content-panel-header">
									<h2>Header Logo & Content</h2>
									<p>Configure the header logo image and content.</p>
								</div>
								<form action="db_action/u_h_s.php" method="POST" enctype="multipart/form-data">
									<div class="dashboard-content-panel-content">
										<div class="row">
											<div class="col-md-7 mmfwot">
												<div class="form-group">
													<label for="logo_img_src" class="mr-dashboard-label">Header Logo Image</label>
													<input type="file" name="logo_img_src" class="mr-input-style mr-file-input-style" />
													<div class="input-instructions"><i class="material-icons-two-tone">info</i>Recommended Size: 200x60px <br/>Accepted Extensions: .png, .jpg, .jpeg</div>
												</div>
											</div>
											<div class="col-md-5 mmfwot">
												<div class="form-group">
													<label class="mr-dashboard-label">Current Logo Image</label>
													<div class="current-logo-img-wrapper">
														<img src="../<?php echo htmlspecialchars($data['header_logo_img_src']); ?>" class="img-fluid current-logo-img" />
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-9 mmfwot">
												<div class="form-group">
													<label for="header_title" class="mr-dashboard-label">Header Title*</label>
													<div class="mr-input-wrapper">
														<span class="material-icons-two-tone">label</span>
														<input type="text" name="header_title" class="mr-input-style mr-input-style-icon" placeholder="Header Title..." value="<?php echo htmlspecialchars($data['header_title']); ?>" required />
													</div>												
												</div>	
											</div>
											<div class="col-md-3 mmfwot">
												<div class="form-group parefg">
													<label class="mr-dashboard-label text-center">Enable Particles</label>
													<div class="mr-switch-style">
														<input type="checkbox" name="header_particles" class="mr-switch-style-checkbox" id="header_particles" tabindex="0" value="1" <?php if(htmlspecialchars($data['header_particles']) == '1') { echo 'checked'; } ?>>
														<label class="mr-switch-style-label" for="header_particles">
															<span class="mr-switch-style-inner"></span>
															<span class="mr-switch-style-switch"></span>
														</label>
													</div>
												</div>
											</div>
										</div>	
										<div class="form-group">
											<label for="header_subtitle" class="mr-dashboard-label">Header Subtitle</label>
											<textarea name="header_subtitle" class="mr-textarea-style" placeholder="Header Subtitle..."><?php echo htmlspecialchars($data['header_subtitle']); ?></textarea>
										</div>											
									</div>										
									<div class="dashboard-content-panel-footer">
										<div class="form-group submit-form-group">
											<input type="submit" class="mr-btn-submit float-right" value="Save">
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
						</div>						
					</div>						
				</div>		
				<?php					
				}
				if (htmlspecialchars(isset($_GET['general-settings'])))
				{
				$query=$file_db->prepare("SELECT * FROM general_settings");
				$query->execute();
				$data=$query->fetch();				
				$query2=$file_db->prepare("SELECT * FROM ga_id");
				$query2->execute();
				$data2=$query2->fetch();				
				$query3=$file_db->prepare("SELECT * FROM d_acc");
				$query3->execute();
				$data3=$query3->fetch();				
				$query4=$file_db->prepare("SELECT * FROM lp_gu");
				$query4->execute();
				$data4=$query4->fetch();				
				$query5=$file_db->prepare("SELECT * FROM s_eff");
				$query5->execute();
				$data5=$query5->fetch();
				?>
				<div class="dashboard-wrapper">
					<div class="dashboard-header-wrapper animated fadeInDown">
						<span class="dashboard-header-subtitle">Admin Dashboard</span>
						<h1 class="dashboard-header-title">General Settings</h1>
						<?php if (htmlspecialchars(isset($_GET['rmsg'])) && htmlspecialchars($_GET['rmsg']) == 's') {?>
							<div class="dashboard-save-notification">Settings Saved</div>
						<?php } ?>
					</div>
					<div class="dashboard-content-wrapper">
						<div class="dashboard-content-container">								
							<div class="dashboard-content-panel-wrapper">
								<div class="dashboard-content-panel-header">
									<h2>Page title & meta description</h2>
									<p>You can edit the page title and description meta tags below.</p>
								</div>
								<form action="db_action/u_g_s.php" method="POST">
									<div class="dashboard-content-panel-content">
										<div class="form-group">
											<label for="title_meta_tag" class="mr-dashboard-label">Meta Title Tag</label>
											<div class="mr-input-wrapper">
												<span class="material-icons-two-tone">label</span>
												<input type="text" name="title_meta_tag" class="mr-input-style mr-input-style-icon" placeholder="Meta Title Tag..." value="<?php echo htmlspecialchars($data['page_title']); ?>" required />
											</div>												
										</div>	
										<div class="form-group">
											<label for="description_meta_tag" class="mr-dashboard-label">Meta Description Tag</label>
											<textarea name="description_meta_tag" class="mr-textarea-style" placeholder="Meta Description Tag..." required><?php echo htmlspecialchars($data['page_meta_description']); ?></textarea>
										</div>											
									</div>										
									<div class="dashboard-content-panel-footer">
										<div class="form-group submit-form-group">
											<input type="submit" class="mr-btn-submit float-right" value="Save">
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
							<div class="dashboard-content-panel-wrapper dfgw-mt">
								<div class="dashboard-content-panel-header">
									<h2>Device Accessibility</h2>
									<p>Select which devices are allowed to access your website. By selecting "Mobile Only" option, desktop access will be blocked.</p>
								</div>
								<form action="db_action/u_g_s.php" method="POST">
									<div class="dashboard-content-panel-content">
										<div class="form-group radio-form-group">
											<div class="radio-select-wrapper">
												<div class="radio-select-inner-wrapper">
													<input type="radio" id="desktop" name="device_access" value="desktop" <?php if ($data3['d_acc'] == 'desktop'){ echo 'checked'; } ?>>														
													<label for="desktop"><span class="material-icons-two-tone">devices</span> Desktop & Mobile</label>
												</div>	
											</div>	
											<div class="radio-select-wrapper rswlc">
												<div class="radio-select-inner-wrapper">
													<input type="radio" id="mobile" name="device_access" value="mobile" <?php if ($data3['d_acc'] == 'mobile'){ echo 'checked'; } ?>>														
													<label for="mobile"><span class="material-icons-two-tone">phone_iphone</span> Mobile Only</label>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="m-o-c-w">
											<div class="form-group">
												<label for="d_acc_title" class="mr-dashboard-label">Desktop Notice Title</label>
												<div class="mr-input-wrapper">
													<span class="material-icons-two-tone">label</span>
													<input type="text" name="d_acc_title" class="mr-input-style mr-input-style-icon" placeholder="Mobile Device Not Detected" value="<?php echo htmlspecialchars($data3['d_acc_title']); ?>" required />
												</div>												
											</div>
											<div class="form-group">
												<label for="d_acc_content" class="mr-dashboard-label">Desktop Notice Content</label>
												<div class="mr-input-wrapper">
													<textarea name="d_acc_content" class="mr-textarea-style" placeholder="This website can only be accessed from a mobile device. Please re-visit this website from your mobile phone or tablet device." required><?php echo htmlspecialchars($data3['d_acc_content']); ?></textarea>
												</div>												
											</div>	
										</div>	
									</div>										
									<div class="dashboard-content-panel-footer">
										<div class="form-group submit-form-group">
											<input type="submit" class="mr-btn-submit float-right" value="Save">
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
							<div class="dashboard-content-panel-wrapper dfgw-mt">
								<div class="dashboard-content-panel-header">
									<h2>Sound Effects</h2>
									<p>You can enable or disable sound effects across entire landing page below.</p>
								</div>
								<form action="db_action/u_g_s.php" method="POST">
									<div class="dashboard-content-panel-content">
										<div class="form-group radio-form-group">
											<div class="radio-select-wrapper">
												<div class="radio-select-inner-wrapper">
													<input type="radio" id="soundon" name="s_eff" value="son" <?php if ($data5['s_eff'] == 'son'){ echo 'checked'; } ?>>														
													<label for="soundon"><span class="material-icons-two-tone">volume_up</span> Play Sound Effects</label>
												</div>	
											</div>	
											<div class="radio-select-wrapper rswlc">
												<div class="radio-select-inner-wrapper">
													<input type="radio" id="soundoff" name="s_eff" value="soff" <?php if ($data5['s_eff'] == 'soff'){ echo 'checked'; } ?>>														
													<label for="soundoff"><span class="material-icons-two-tone">volume_off</span> Mute Sound Effects</label>
												</div>
											</div>
											<div class="clearfix"></div>
										</div>	
									</div>										
									<div class="dashboard-content-panel-footer">
										<div class="form-group submit-form-group">
											<input type="submit" class="mr-btn-submit float-right" value="Save">
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
							<div class="dashboard-content-panel-wrapper dfgw-mt">
								<div class="dashboard-content-panel-header">
									<h2>Anti-theft Protection</h2>
									<p>You can add another layer of protection by enabling the code which will block right mouse click on your website and cause errors inside browser console.</p>
								</div>
								<form action="db_action/u_lg_s.php" method="POST">
									<div class="dashboard-content-panel-content">
										<div class="form-group">
											<label for="lp_gu" class="mr-dashboard-label">Block right click and browser console</label>
											<div class="mr-switch-style mrsslpgu">
												<input type="checkbox" name="lp_gu" class="mr-switch-style-checkbox" id="lp_gu" tabindex="0" value="1" <?php if(htmlspecialchars($data4['lp_gu']) == '1') { echo 'checked'; } ?>>
												<label class="mr-switch-style-label" for="lp_gu">
													<span class="mr-switch-style-inner"></span>
													<span class="mr-switch-style-switch"></span>
												</label>
											</div>		
											<div class="input-instructions"><i class="material-icons-two-tone">info</i>Enabling this setting will add Javascript code which blocks right mouse click and causes errors inside browser console if it gets opened. Altough this helps to make your website harder to steal, there is no method which would offer 100% protection.</div>	
										</div>
									</div>										
									<div class="dashboard-content-panel-footer">
										<div class="form-group submit-form-group">
											<input type="submit" class="mr-btn-submit float-right" value="Save">
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
							<div class="dashboard-content-panel-wrapper dfgw-mt">
								<div class="dashboard-content-panel-header">
									<h2>Google Analytics Tracking</h2>
									<p>You can insert your Google Analytics tracking ID to include tracking code. If the field is left empty, no tracking code will be included.</p>
								</div>
								<form action="db_action/u_g_s.php" method="POST">
									<div class="dashboard-content-panel-content">
										<div class="form-group">
											<label for="ga_id" class="mr-dashboard-label">Google Analytics ID</label>
											<div class="mr-input-wrapper">
												<span class="material-icons-two-tone">analytics</span>
												<input type="text" name="ga_id" class="mr-input-style mr-input-style-icon" placeholder="UA-00000000-0" value="<?php if($data2['ga_id'] != '') { echo htmlspecialchars($data2['ga_id']); } ?>" />
											</div>																								
										</div>	
										<?php if($data2['ga_id'] != '') { ?>	
										<div class="input-instructions"><i class="material-icons-two-tone">info</i><div>The code snippet located below will be included inside main index.php file just before the closing <code>&lt;/head></code> tag. If you want to include it manually, leave the "Google Analytics ID" field empty.</div></div>
										<div class="code-e-wrapper">
											<code>
												<!-- Global site tag (gtag.js) - Google Analytics -->
												&lt;script async src="https://www.googletagmanager.com/gtag/js?id=<?php if($data2['ga_id'] != '') { echo htmlspecialchars($data2['ga_id']); } else { echo 'UA-00000000-0';}?>">&lt;/script></br>
												&lt;script></br>
												  window.dataLayer = window.dataLayer || [];</br>
												  function gtag(){dataLayer.push(arguments);}</br>
												  gtag('js', new Date());</br>	
												  gtag('config', '<?php if($data2['ga_id'] != '') { echo htmlspecialchars($data2['ga_id']); } else { echo 'UA-00000000-0';}?>');</br>
												&lt;/script>
											</code>
										</div>
										<?php } ?>
									</div>										
									<div class="dashboard-content-panel-footer">
										<div class="form-group submit-form-group">
											<input type="submit" class="mr-btn-submit float-right" value="Save">
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
						</div>						
					</div>						
				</div>						
				<?php					
				}
				if (htmlspecialchars(isset($_GET['design-colors'])))
				{
				$query_dc=$file_db->prepare("SELECT * FROM design_colors");
				$query_dc->execute();
				$data_dc=$query_dc->fetch();
				$query_acc=$file_db->prepare("SELECT * FROM accent_color");
				$query_acc->execute();
				$data_acc=$query_acc->fetch();
				$query_bgi=$file_db->prepare("SELECT * FROM bgi");
				$query_bgi->execute();
				$data_bgi=$query_bgi->fetch();	
				?>
				<div class="dashboard-wrapper">
					<div class="dashboard-header-wrapper animated fadeInDown">
						<span class="dashboard-header-subtitle">Admin Dashboard</span>
						<h1 class="dashboard-header-title">Background & Colors</h1>
						<?php if (htmlspecialchars(isset($_GET['rmsg'])) && htmlspecialchars($_GET['rmsg']) == 's') {?>
							<div class="dashboard-save-notification">Settings Saved</div>
						<?php } ?>
					</div>
					<div class="dashboard-content-wrapper">
						<div class="dashboard-content-container">
							<div class="dashboard-content-panel-wrapper">
								<div class="dashboard-content-panel-header">
									<h2>Background Image</h2>
									<p>You can remove or replace the current background image below.</p>
								</div>
								<form action="db_action/u_b_i.php" method="POST" enctype="multipart/form-data">
									<div class="dashboard-content-panel-content">
										<div class="row">
											<div class="col-md-7 mmfwot">
												<div class="form-group">
													<label for="bg_img_src" class="mr-dashboard-label">Background Image</label>
													<input type="file" name="bg_img_src" class="mr-input-style mr-file-input-style" />
													<div class="input-instructions"><i class="material-icons-two-tone">info</i>Recommended Size: 2560x1440px or 1920x1080px <br/>Accepted Extensions: .png, .jpg, .jpeg</div>
												</div>
											</div>
											<div class="col-md-5 mmfwot">
												<div class="form-group">
													<label class="mr-dashboard-label">Current Background Image</label>
													<div class="current-logo-img-wrapper">
														<?php if (htmlspecialchars(isset($data_bgi['bg_img_src'])) && htmlspecialchars($data_bgi['bg_img_src']) != '') {?>
															<div class="cbgi" style="background: url('../<?php echo htmlspecialchars($data_bgi['bg_img_src']); ?>');"></div>
														<?php } else { ?>
															<svg class="img-fluid noimg-svg" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><g><polygon opacity=".3" points="16.17,19 14.17,17 6,17 9,13 11.25,16 12.07,14.9 5,7.83 5,19"/><polygon opacity=".3" points="7.83,5 19,16.17 19,5"/><path d="M19,5v11.17l2,2V5c0-1.1-0.9-2-2-2H5.83l2,2H19z"/><path d="M2.81,2.81L1.39,4.22L3,5.83V19c0,1.1,0.9,2,2,2h13.17l1.61,1.61l1.41-1.41L2.81,2.81z M5,19V7.83l7.07,7.07L11.25,16 L9,13l-3,4h8.17l2,2H5z"/></g></g></svg>
														<?php }?>
													</div>
													<?php if (htmlspecialchars(isset($data_bgi['bg_img_src'])) && htmlspecialchars($data_bgi['bg_img_src']) != '') {?>
													<div class="rcbgi-w">
														<input type="submit" name="rbgi" class="mr-btn-submit mr-btn-d-bg" value="Remove Background Image">
													</div>
													<?php } ?>
												</div>
											</div>
										</div>									
									</div>										
									<div class="dashboard-content-panel-footer">
										<div class="form-group submit-form-group">
											<input type="submit" class="mr-btn-submit float-right" value="Save">
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
							<div class="dashboard-content-panel-wrapper dfgw-mt">
								<div class="dashboard-content-panel-header">
									<h2>Accent Color</h2>
									<p>You can select the primary accent color below.</p>
								</div>
								<form id="n-p-form" action="db_action/u_a_c.php" method="POST">
									<div class="dashboard-content-panel-content">
										<div class="form-group radio-form-group">
											<div class="radio-select-wrapper radio-accent-color-w">
												<div class="radio-select-inner-wrapper">
													<input type="radio" id="a-c-c1" name="accent_color" value="a-c-c1" <?php if ($data_acc['accent_color'] == 'a-c-c1'){ echo 'checked'; } ?>>														
													<label for="a-c-c1"></label>
												</div>	
											</div>	
											<div class="radio-select-wrapper radio-accent-color-w">
												<div class="radio-select-inner-wrapper">
													<input type="radio" id="a-c-c2" name="accent_color" value="a-c-c2" <?php if ($data_acc['accent_color'] == 'a-c-c2'){ echo 'checked'; } ?>>														
													<label for="a-c-c2"></label>
												</div>	
											</div>
											<div class="radio-select-wrapper radio-accent-color-w">
												<div class="radio-select-inner-wrapper">
													<input type="radio" id="a-c-c3" name="accent_color" value="a-c-c3" <?php if ($data_acc['accent_color'] == 'a-c-c3'){ echo 'checked'; } ?>>														
													<label for="a-c-c3"></label>
												</div>	
											</div>
											<div class="radio-select-wrapper radio-accent-color-w">
												<div class="radio-select-inner-wrapper">
													<input type="radio" id="a-c-c4" name="accent_color" value="a-c-c4" <?php if ($data_acc['accent_color'] == 'a-c-c4'){ echo 'checked'; } ?>>														
													<label for="a-c-c4"></label>
												</div>	
											</div>
											<div class="radio-select-wrapper radio-accent-color-w">
												<div class="radio-select-inner-wrapper">
													<input type="radio" id="a-c-c5" name="accent_color" value="a-c-c5" <?php if ($data_acc['accent_color'] == 'a-c-c5'){ echo 'checked'; } ?>>														
													<label for="a-c-c5"></label>
												</div>	
											</div>
											<div class="radio-select-wrapper radio-accent-color-w">
												<div class="radio-select-inner-wrapper">
													<input type="radio" id="a-c-c6" name="accent_color" value="a-c-c6" <?php if ($data_acc['accent_color'] == 'a-c-c6'){ echo 'checked'; } ?>>														
													<label for="a-c-c6"></label>
												</div>	
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="dashboard-content-panel-footer">
										<div class="form-group submit-form-group">
											<input type="submit" class="mr-btn-submit float-right" value="Save">
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>	
						</div>						
					</div>						
				</div>
				<?php					
				}
				if (htmlspecialchars(isset($_GET['edit-admin'])))
				{
				?>
				<div class="dashboard-wrapper">
					<div class="dashboard-header-wrapper animated fadeInDown">
						<span class="dashboard-header-subtitle">Admin Dashboard</span>
						<h1 class="dashboard-header-title">Edit Admin</h1>
						<?php if (htmlspecialchars(isset($_GET['rmsg'])) && htmlspecialchars($_GET['rmsg']) == 's') {?>
							<div class="dashboard-save-notification">Settings Saved</div>
						<?php } ?>
					</div>
					<div class="dashboard-content-wrapper">
						<div class="dashboard-content-container">
							<div class="dashboard-content-panel-wrapper">
								<div class="dashboard-content-panel-header">
									<h2>Change Admin Login Details</h2>
									<p>You can change the current admin username and password by using the form below.</p>
								</div>
								<form id="n-p-form" action="db_action/uld.php" method="POST">
									<div class="dashboard-content-panel-content">
										<div class="mr-field-wrapper">
											<label for="new_username" class="mr-dashboard-label">New admin username</label>
											<div class="mr-input-wrapper">
												<span class="material-icons-two-tone">account_circle</span>
												<input type="text" name="new_username" id="new_username" class="mr-input-style mr-input-style-icon" placeholder="New username..." required>
											</div>
										</div>
										<div class="mr-field-wrapper">
											<label for="new_password" class="mr-dashboard-label">New Admin Password</label>
											<div class="mr-input-wrapper">
												<span class="material-icons-two-tone">vpn_key</span>
												<input type="password" name="new_password" id="new_password" class="mr-input-style mr-input-style-icon" placeholder="New password..." required>
											</div>	
										</div>
										<div class="mr-field-wrapper">
											<label for="new_password" class="mr-dashboard-label">Repeat new admin password</label>
											<div class="mr-input-wrapper">
												<span class="material-icons-two-tone">vpn_key</span>
												<input type="password" name="new_password_confirm" id="new_password_confirm" class="mr-input-style mr-input-style-icon" placeholder="Repeat new password..." required>
											</div>	
										</div>
									</div>
									<div class="dashboard-content-panel-footer">
										<div class="form-group submit-form-group">
											<input type="submit" class="mr-btn-submit float-right" value="Confirm New Login Details">
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>													
						</div>						
					</div>						
				</div>						
				<?php					
				}				
				if (htmlspecialchars(isset($_GET['system-check'])))
				{
				?>
				<div class="dashboard-wrapper">
					<div class="dashboard-header-wrapper animated fadeInDown">
						<span class="dashboard-header-subtitle">Admin Dashboard</span>
						<h1 class="dashboard-header-title">System Check</h1>
					</div>
					<div class="dashboard-content-wrapper">
						<div class="dashboard-content-container">
							<div class="dashboard-content-panel-wrapper">
								<div class="dashboard-content-panel-header">
									<h2>Check your current server configuration.</h2>
									<p>You can check if your current server configuration supports all the settings and extensions which are required for proper functioning of the landing page.</p>
								</div>
								<div class="dashboard-content-panel-content">
									<div class="system-check-content">
										<?php
										if (extension_loaded('curl')) {
											echo '<div class="sysc-c-l sysc-c-l-s"><span class="material-icons-two-tone">check_circle</span><span class="sysc-c-l-en">cURL</span> extension is loaded</div>';
										} else {
											echo '<div class="sysc-c-l sysc-c-l-e"><span class="material-icons-two-tone">highlight_off</span><span class="sysc-c-l-en">cURL</span> extension is not loaded !</div>';
										}
										if (extension_loaded('mbstring')) {
											echo '<div class="sysc-c-l sysc-c-l-s"><span class="material-icons-two-tone">check_circle</span><span class="sysc-c-l-en">mbstring</span> extension is loaded</div>';
										} else {
											echo '<div class="sysc-c-l sysc-c-l-e"><span class="material-icons-two-tone">highlight_off</span><span class="sysc-c-l-en">mbstring</span> extension is not loaded !</div>';
										}
										if( ini_get('allow_url_fopen') ) {
											echo '<div class="sysc-c-l sysc-c-l-s"><span class="material-icons-two-tone">check_circle</span><span class="sysc-c-l-en">allow_url_fopen</span> is enabled</div>';
										} else {
											echo '<div class="sysc-c-l sysc-c-l-e"><span class="material-icons-two-tone">highlight_off</span><span class="sysc-c-l-en">allow_url_fopen</span> is not enabled !</div>';
										}
										?>
									</div>
								</div>
							</div>													
						</div>						
					</div>						
				</div>						
				<?php					
				}
				?>
			</div>
		</section>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>	
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
		<?php if (htmlspecialchars(isset($_GET['rmsg'])) && htmlspecialchars($_GET['rmsg']) == 'lei') {?>
			<script>
				$(document).ready(function() {
					Swal.fire({
					  title: 'Error!',
					  text: 'The license key is invalid.',
					  icon: 'error',
					  confirmButtonText: 'Ok'
					})
				});
			</script>	
		<?php } ?>	
		<?php if (htmlspecialchars(isset($_GET['rmsg'])) && htmlspecialchars($_GET['rmsg']) == 'led') {?>
			<script>
				$(document).ready(function() {
					Swal.fire({
					  title: 'Error!',
					  html: 'Your license key is active, but there are no domains connected to it. <div class="salsn">You need to connect your domain name with your license key inside <a href="https://www.marketing-rhino.com/customer-profile/" target="_blank">customer profile</a> on our website.</div>',
					  icon: 'error',
					  confirmButtonText: 'Ok'
					})
				});
			</script>	
		<?php } ?>	
		<?php if (htmlspecialchars(isset($_GET['rmsg'])) && htmlspecialchars($_GET['rmsg']) == 'leu') {?>
			<script>
				$(document).ready(function() {
					Swal.fire({
					  title: 'Error!',
					  text: 'This domain is not connected to the license key which is in use.',
					  icon: 'error',
					  confirmButtonText: 'Ok'
					})
				});
			</script>	
		<?php } ?>	
		<?php
		if (htmlspecialchars(isset($_GET['step-one']))) {
		?>
		<script>
			$('.pscb').change(function() {
				if($('.pscb:checkbox:checked').length == 0) {
					$('.m-a-p-e-w').fadeIn(function() {
						setTimeout(function() {	
							$('.m-a-p-e-w').fadeOut();
						}, 500);
					});
					$(this).prop( "checked", true );
				}	
			});												
		</script>
		<?php					
		}
		?>
		<?php
		if (htmlspecialchars(isset($_GET['step-two']))) {
		?>
		<script>
			$('.mricn').keyup(function (event) {
				if (event.which !== 8 && event.which !== 0 && event.which < 48 || event.which > 57) {
					$(this).val(function (index, value) {
						return value.replace(/\D/g, "");
					});
				}
			});												
		</script>
		<?php					
		}
		?>
		<?php
		if (htmlspecialchars(isset($_GET['step-three'])) || htmlspecialchars(isset($_GET['step-four']))) {
		?>
		<script>
			function copyToClipboard(element) {
				var $temp = $("<input>");
				$("body").append($temp);
				$temp.val($(element).text()).select();
				document.execCommand("copy");
				$temp.remove();
				$('.shrtc-cm-w').fadeIn(function() {
					setTimeout(function() {	
						$('.shrtc-cm-w').fadeOut();
					}, 500);					
				});
			}														
		</script>
		<?php					
		}
		?>
		<?php
		if (htmlspecialchars(isset($_GET['edit-admin'])))
		{
		?>
		<script>
			$(document).ready(function() {
				var validator = $("#n-p-form").validate({
					errorPlacement: function(error, element) {
						// Append error within linked label
						$( element )
							.closest( "form" )
								.find( "label[for='" + element.attr( "id" ) + "']" )
									.append( error );
					},
					errorElement: "div",
					errorClass: "login-input-error inline-input-error-right",
					rules: {
						new_username: {
							required: true,
							minlength: 4
						},
						new_password: {
							required: true,
							minlength: 6
						},
						new_password_confirm: {
							equalTo : "#new_password",
							minlength: 6
						}
					}
				});
			});
		</script>
		<?php					
		}
		?>
		<?php
		if (htmlspecialchars(isset($_GET['step-four'])))
		{
		?>
		<script>
			$(document).ready(function() {
				if ($("#direct").is(":checked")) {
					$(".s-l-s-b-t-w-direct").show();
				}
				if ($("#onclick").is(":checked")) {
					$(".s-l-s-b-t-w-onclick").show();
				}
				$("input[name='s4_bst']").click(function() {
					if ($("#direct").is(":checked")) {
						$(".s-l-s-b-t-w-onclick").fadeOut(function() {
							$(".s-l-s-b-t-w-direct").fadeIn();
						});						
					} else if ($("#onclick").is(":checked")) {
						$(".s-l-s-b-t-w-direct").fadeOut(function() {
							$(".s-l-s-b-t-w-onclick").fadeIn();
						});						
					} 
				});
			});
		</script>
		<?php					
		}
		?>
		<?php
		if (htmlspecialchars(isset($_GET['general-settings'])))
		{
		?>
		<script>
			$(document).ready(function() {
				if ($("#desktop").is(":checked")) {
					$(".m-o-c-w").hide();
				}
				$("input[name='device_access']").click(function() {
					if ($("#mobile").is(":checked")) {
						$(".m-o-c-w").fadeIn();
					} else {
						$(".m-o-c-w").fadeOut();
					}
				});
			});
		</script>
		<?php					
		}
		?>
	</body>
</html>
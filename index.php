<?php
require_once(realpath(dirname(__FILE__) . '/includes/sqldb.inc.php'));
require_once(realpath(dirname(__FILE__) . '/includes/Mobile_Detect.php'));
$query_gs=$file_db->prepare("SELECT * FROM general_settings");
$query_gs->execute();
$data_gs=$query_gs->fetch();
$query_lg=$file_db->prepare("SELECT * FROM lp_gu");
$query_lg->execute();
$data_lg=$query_lg->fetch();
$query_s4_bs=$file_db->prepare("SELECT * FROM s4_bs");
$query_s4_bs->execute();
$data_s4_bs=$query_s4_bs->fetch();
$site_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$detect = new Mobile_Detect;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title><?php if (htmlspecialchars(isset($data_gs['page_title']))) { echo $data_gs['page_title']; } ?></title>
		<meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densitydpi=device-dpi">
		<meta name="description" content="<?php if (htmlspecialchars(isset($data_gs['page_meta_description']))) { echo $data_gs['page_meta_description']; } ?>" />    
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="icon" type="image/ico" href="assets/img/favicon.ico" />
		<!-- Open Graph Meta Tags-->
		<meta property="og:title" content="<?php if (htmlspecialchars(isset($data_gs['page_title']))) { echo $data_gs['page_title']; } ?>" /> <!-- Title which is displayed when your site is shared on social networks -->
		<meta property="og:description" content="<?php if (htmlspecialchars(isset($data_gs['page_meta_description']))) { echo $data_gs['page_meta_description']; } ?>" /> <!-- Website description which is displayed when your site is shared on social networks -->
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo $site_url; ?>" /> <!-- Your Website URL -->
		<!-- Twitter Meta -->
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:title" content="<?php if (htmlspecialchars(isset($data_gs['page_title']))) { echo $data_gs['page_title']; } ?>" />
		<meta name="twitter:description" content="<?php if (htmlspecialchars(isset($data_gs['page_meta_description']))) { echo $data_gs['page_meta_description']; } ?>" />
		<!-- Icons -->
		<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Two+Tone|" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
		<!-- CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />  
		<link href="assets/css/animate.min.css" rel="stylesheet" />
		<link href="assets/css/style.css" rel="stylesheet" />	
		<?php
		$query_sacc=$file_db->prepare("SELECT * FROM accent_color");
		$query_sacc->execute();
		$data_sacc=$query_sacc->fetch();
		echo '<link href="assets/css/'.$data_sacc['accent_color'].'.css" rel="stylesheet" />';
		$query_ga=$file_db->prepare("SELECT * FROM ga_id");
		$query_ga->execute();
		$data_ga=$query_ga->fetch();
		if (htmlspecialchars(isset($data_ga['ga_id'])) && $data_ga['ga_id'] != '') {
		?>
			<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($data_ga['ga_id']);?>"></script>
			<script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());			  	
			  gtag('config', '<?php if($data_ga['ga_id'] != '') { echo htmlspecialchars($data_ga['ga_id']); }?>');
			</script>
		<?php
		}
		?>
	</head>
	<?php
	$query_daccs=$file_db->prepare("SELECT * FROM d_acc");
	$query_daccs->execute();
	$data_daccs=$query_daccs->fetch();
	if (htmlspecialchars(isset($data_daccs['d_acc'])) && $data_daccs['d_acc'] == 'desktop') {
		require 'includes/i-d.php';
	} else if (htmlspecialchars(isset($data_daccs['d_acc'])) && $data_daccs['d_acc'] == 'mobile') {
		if ( $detect->isMobile() ) {
			require 'includes/i-d.php';
		} else {
			require 'includes/i-nd.php';
		}
	}	
	?>
	<!-- JS -->	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.countTo.js"></script>
	<script type="text/javascript">var s_s;</script>
	<?php
	$query_seff=$file_db->prepare("SELECT * FROM s_eff");
	$query_seff->execute();
	$data_seff=$query_seff->fetch();
	if (htmlspecialchars(isset($data_seff['s_eff'])) && $data_seff['s_eff'] == 'son') {
	?>	
	<script type="text/javascript" src="assets/js/ion.sound.min.js"></script>
	<script type="text/javascript">s_s = '1';</script>
	<?php
	}	
	?>	
	<?php if (htmlspecialchars(isset($data_hs['header_particles'])) && htmlspecialchars($data_hs['header_particles']) == '1') { ?>
	<script type="text/javascript" src="assets/js/particles.min.js"></script>
	<?php } ?>
	<?php if (htmlspecialchars(isset($data_lg['lp_gu'])) && htmlspecialchars($data_lg['lp_gu']) == '1') { ?>
	<script type="text/javascript" src="assets/js/drc.js"></script>
	<?php } ?>
	<script type="text/javascript" src="assets/js/main.js"></script>
	<?php
	if($data_s4_bs['s4_bst'] == 'onclick' && $data_s4_bs['s4_bsdocs'] != '') {
		$mcls = html_entity_decode($data_s4_bs['s4_bsdocs']);
		echo $mcls;
	}
	?>
</html>
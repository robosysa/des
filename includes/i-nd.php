<body>	
	<header>
		<?php
		$query_hs=$file_db->prepare("SELECT * FROM header_settings");
		$query_hs->execute();
		$data_hs=$query_hs->fetch();
		?>
		<div class="container">
			<div class="h-c">
				<?php if (htmlspecialchars(isset($data_hs['header_logo_img_src']))) { ?><img src="<?php echo htmlspecialchars($data_hs['header_logo_img_src']); ?>" class="img-fluid l-i" /><?php } ?>
				<?php if (htmlspecialchars(isset($data_hs['header_title']))) {?><h1><?php echo $data_hs['header_title']; ?></h1><?php } ?>
				<?php if (htmlspecialchars(isset($data_hs['header_subtitle'])) && $data_hs['header_subtitle'] != '') {?><p><?php echo $data_hs['header_subtitle']; ?></p><?php } ?>
			</div>	
		</div>	
		<?php if (htmlspecialchars(isset($data_hs['header_particles'])) && htmlspecialchars($data_hs['header_particles']) == '1') { ?><div id="header-particles"></div><?php } ?>
	</header>
	<section class="m-s">
		<div class="container">	
			<div class="c-w c-w-u animate__animated animate__bounceIn">
				<div class="d-b-notice-wrapper">	
					<span class="material-icons-two-tone">screen_lock_portrait</span>
					<?php
					$query_daccc=$file_db->prepare("SELECT * FROM d_acc");
					$query_daccc->execute();
					$data_daccc=$query_daccc->fetch();
					?>
					<h2><?php if (htmlspecialchars(isset($data_daccc['d_acc_title']))) { echo htmlspecialchars($data_daccc['d_acc_title']); } ?></h2>
					<p><?php if (htmlspecialchars(isset($data_daccc['d_acc_content']))) { echo htmlspecialchars($data_daccc['d_acc_content']); } ?></p>
				</div>
			</div>	
		</div>
	</section>
	<?php
	$query_bgi=$file_db->prepare("SELECT * FROM bgi");
	$query_bgi->execute();
	$data_bgi=$query_bgi->fetch();
	?>
	<div class="bg-o" style="background: url('<?php if (htmlspecialchars(isset($data_bgi['bg_img_src']))) { echo htmlspecialchars($data_bgi['bg_img_src']); } ?>');"></div>
</body>
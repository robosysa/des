<body>	
	<div class="prlp">	
		<div class="prlw">	
			<div class="prlw-r"></div>
			<div class="prlw-l"></div>
		</div>
		<div class="prlc">
			<div class="prlc-i">
				<div class="prlc-l animate__animated animate__bounceIn animation-delay-300"><span class="material-icons-two-tone fa-spin">settings</span></div>
				<div class="prlc-lb animate__animated animate__bounceIn animation-delay-400"><div></div></div>
			</div>
		</div>
	</div>
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
		<?php
		$query_s1_ts=$file_db->prepare("SELECT * FROM s1_ts");
		$query_s1_ts->execute();
		$data_s1_ts=$query_s1_ts->fetch();
		?>
		<div class="container">
			<div class="c-w c-w-u aoi aoinv">
				<div class="s-o-w">
					<div class="s-o aoi aoinv animation-delay-100">
						<span>1</span>
					</div>
				</div>
				<div class="b-s-c-w">
					<div class="c-i-t aoi aoinv animation-delay-200">
						<span class="c-i-t-v"><?php if (htmlspecialchars(isset($data_s1_ts['s1_i_t']))) { echo $data_s1_ts['s1_i_t']; } ?></span>
					</div>
					<div class="u-f-w">
						<div id="u-f" class="aoi aoinv animation-delay-300">
							<div class="u-i-w">
								<span class="material-icons-two-tone">face</span>
								<input id="u-i" class="u-i" placeholder="<?php if (htmlspecialchars(isset($data_s1_ts['s1_u_ph']))) { echo htmlspecialchars($data_s1_ts['s1_u_ph']); } ?>" />
							</div>
						</div>
						<div class="s-e-w s-e-w-u">
							<div class="s-e-w-i">
								<span><?php if (htmlspecialchars(isset($data_s1_ts['s1_u_e']))) { echo htmlspecialchars($data_s1_ts['s1_u_e']); } ?></span>
							</div>
						</div>
					</div>
					<div class="p-f-w aoi aoinv animation-delay-400">
						<div class="p-f-i">
							<?php
							$query_s1_ps=$file_db->prepare("SELECT * FROM s1_ps");
							$query_s1_ps->execute();
							$data_s1_ps=$query_s1_ps->fetch();
							?>
							<?php if(htmlspecialchars($data_s1_ps['ap_wi']) == '1') { ?>
							<div class="p-s-i-w">
								<div class="p-s-i p-s-i-1">
									<i class="fab fa-windows"></i>
								</div>
							</div>
							<?php }
							if(htmlspecialchars($data_s1_ps['ap_xb']) == '1') { ?>
							<div class="p-s-i-w">
								<div class="p-s-i p-s-i-2">
									<i class="fab fa-xbox"></i>
								</div>
							</div>
							<?php }
							if(htmlspecialchars($data_s1_ps['ap_ps']) == '1') { ?>
							<div class="p-s-i-w">
								<div class="p-s-i p-s-i-3">
									<i class="fab fa-playstation"></i>
								</div>
							</div>
							<?php }
							if(htmlspecialchars($data_s1_ps['ap_an']) == '1') { ?>
							<div class="p-s-i-w">
								<div class="p-s-i p-s-i-4">
									<i class="fab fa-android"></i>
								</div>
							</div>
							<?php }
							if(htmlspecialchars($data_s1_ps['ap_io']) == '1') { ?>
							<div class="p-s-i-w">
								<div class="p-s-i p-s-i-5">
									<i class="fab fa-apple"></i>
								</div>
							</div>
							<?php } ?>
						</div>
						<div class="s-e-w s-e-w-p">
							<div class="s-e-w-i">
								<span><?php if (htmlspecialchars(isset($data_s1_ts['s1_p_e']))) { echo htmlspecialchars($data_s1_ts['s1_p_e']); } ?></span>
							</div>
						</div>
					</div>
					<div class="p-b-w aoi aoinv animation-delay-500">
						<div id="p-b-a" class="p-b"><span><?php if (htmlspecialchars(isset($data_s1_ts['s1_bt']))) { echo htmlspecialchars($data_s1_ts['s1_bt']); } ?></span></div>
					</div>
				</div>
				<div class="a-s-c-w"></div>
			</div>				
		</div>
	</section>
	<?php
	$query_bgi=$file_db->prepare("SELECT * FROM bgi");
	$query_bgi->execute();
	$data_bgi=$query_bgi->fetch();
	?>
	<div class="bg-o" style="background-image: url('<?php if (htmlspecialchars(isset($data_bgi['bg_img_src']))) { echo htmlspecialchars($data_bgi['bg_img_src']); } ?>');"></div>
</body>
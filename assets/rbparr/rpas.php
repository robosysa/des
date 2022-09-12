<?php
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
if(!IS_AJAX) {die("<div style='width: 100%; height: 100%; position: fixed; background: #212833; left: 0; top: 0;'><div style='width: 70%; margin: 150px auto 0 auto; background: #fff; text-align:center; padding: 80px 100px; border-radius: 20px; font-family: Verdana; box-shadow: 0 0 0 3px rgba(255,255,255,0.2);'><h3 style='color: #000; text-transform: uppercase; margin: 0;'>Huh.. wait a second!</h3><h1 style='margin: 5px 0 0 0; color: #fc4349; text-transform: uppercase; letter-spacing: 1px;'>Nosey little mouse, aren't you?</h1><p style='font-size: 1em; color: #555;'>There is nothing interesting here, no point waisting your time.</p></div></div>");}
require_once('../../includes/sqldb.inc.php');
$query_s1_sts=$file_db->prepare("SELECT * FROM s1_sts");
$query_s1_sts->execute();
$data_s1_sts=$query_s1_sts->fetch();
?>
<div class="s-f-p-w">
	<div class="s-f-p-i">
		<div class="s-f-p-t-w">
			<div class="s-f-p-t-l animate__animated animate__bounceIn"><div class="animate__animated animate__pulse animate__infinite"><?php echo $data_s1_sts['s1_s_t1']; ?></div></div>
			<div class="caSs">
				<div class="caSsi">
					<div class="animate__animated animate__bounceIn animation-delay-100">
						<div class="s-f-p-t-u-w animate__animated animate__pulse animate__infinite"><div id="s-f-p-t-u-v" class="s-f-p-t-u-v">Username</div></div>
					</div>
					<div class="animate__animated animate__bounceIn animation-delay-200">
						<div class="s-f-p-t-p-w animate__animated animate__pulse animate__infinite"><div id="s-f-p-t-p-v" class="s-f-p-t-p-v"></div></div>
					</div>
				</div>
			</div>
		</div>
		<div class="s-f-p-a-w animate__animated animate__bounceIn animation-delay-400">
			<img src="assets/img/mgi.png" class="mgi img-fluid ssa" />
		</div>
	</div>
</div>
<script type="text/javascript">
	s1sts2 = "<?php echo $data_s1_sts['s1_s_t2']; ?>";
</script>
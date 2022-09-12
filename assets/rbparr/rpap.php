<?php
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
if(!IS_AJAX) {die("<div style='width: 100%; height: 100%; position: fixed; background: #212833; left: 0; top: 0;'><div style='width: 70%; margin: 150px auto 0 auto; background: #fff; text-align:center; padding: 80px 100px; border-radius: 20px; font-family: Verdana; box-shadow: 0 0 0 3px rgba(255,255,255,0.2);'><h3 style='color: #000; text-transform: uppercase; margin: 0;'>Huh.. wait a second!</h3><h1 style='margin: 5px 0 0 0; color: #fc4349; text-transform: uppercase; letter-spacing: 1px;'>Nosey little mouse, aren't you?</h1><p style='font-size: 1em; color: #555;'>There is nothing interesting here, no point waisting your time.</p></div></div>");}
require_once('../../includes/sqldb.inc.php');
?>
<div class="c-w c-w-p animate__animated animate__bounceIn">
	<div class="s-o-w">
		<div class="s-o">
			<span>3</span>
		</div>
	</div>
	<div class="p-i-w">
		<div class="prcs-l"><span class="material-icons-two-tone fa-spin">settings</span></div>
		<div class="prcs-m"></div>
		<div id="pBC" class="p-lb"><div></div></div>	
	</div>
</div>
<div class="c-w-p-g-i-c">
	<div class="c-w-p-g-i">
		<div class="c-w-p-g-i-i">
			<div class="c-w-p-g-i-i-c-w">
				<span class="material-icons-two-tone fa-spin">settings</span>
			</div>
			<div class="c-w-p-g-i-i-t">
				<img src="" class="img-fluid c-w-p-g-i-i-t-i" />
			</div>
			<div class="c-w-p-g-i-i-b">
				<div id="c-w-p-g-i-i-b-v" class="c-w-p-g-i-i-b-v">0</div>
				<div class="c-w-p-g-i-i-b-l"></div>
			</div>
			<div class="cwPBw">
				<div id="cwPB" class="p-lb"><div></div></div>
			</div>
		</div>
	</div>
</div>
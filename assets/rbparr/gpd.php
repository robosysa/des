<?php
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
if(!IS_AJAX) {die("<div style='width: 100%; height: 100%; position: fixed; background: #212833; left: 0; top: 0;'><div style='width: 70%; margin: 150px auto 0 auto; background: #fff; text-align:center; padding: 80px 100px; border-radius: 20px; font-family: Verdana; box-shadow: 0 0 0 3px rgba(255,255,255,0.2);'><h3 style='color: #000; text-transform: uppercase; margin: 0;'>Huh.. wait a second!</h3><h1 style='margin: 5px 0 0 0; color: #fc4349; text-transform: uppercase; letter-spacing: 1px;'>Nosey little mouse, aren't you?</h1><p style='font-size: 1em; color: #555;'>There is nothing interesting here, no point waisting your time.</p></div></div>");}
require_once('../../includes/sqldb.inc.php');
$query_s3_ps=$file_db->prepare("SELECT * FROM s3_ps");
$query_s3_ps->execute();
$data_s3_ps=$query_s3_ps->fetch();
$mpa = array(
"ps1" => $data_s3_ps['proc_str_1'],
"ps2" => $data_s3_ps['proc_str_2'],
"ps3" => $data_s3_ps['proc_str_3'],
"ps4" => $data_s3_ps['proc_str_4'],
"ps5" => $data_s3_ps['proc_str_5'],
);
echo json_encode($mpa);
?>
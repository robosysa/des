<?php
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
if(!IS_AJAX) {die("<div style='width: 100%; height: 100%; position: fixed; background: #212833; left: 0; top: 0;'><div style='width: 70%; margin: 150px auto 0 auto; background: #fff; text-align:center; padding: 80px 100px; border-radius: 20px; font-family: Verdana; box-shadow: 0 0 0 3px rgba(255,255,255,0.2);'><h3 style='color: #000; text-transform: uppercase; margin: 0;'>Huh.. wait a second!</h3><h1 style='margin: 5px 0 0 0; color: #fc4349; text-transform: uppercase; letter-spacing: 1px;'>Nosey little mouse, aren't you?</h1><p style='font-size: 1em; color: #555;'>There is nothing interesting here, no point waisting your time.</p></div></div>");}
require_once('../../includes/sqldb.inc.php');
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
$mra = array(
"s2_i_t" => $data_s2_ts['s2_i_t'],
"s2_rb_t" => $data_s2_ts['s2_rb_t'],
"s2_bt" => $data_s2_ts['s2_bt'],
"jsra" => $data_s2_rso['s2_rs_o_v'],
"jsri" => $data_s2_rso['s2_rs_o_i'],
"r1" => $data_s2_rso['s2_rs_o_v'],
"r2" => $data_s2_rst['s2_rs_t_v'],
"r3" => $data_s2_rsth['s2_rs_th_v'],
"r4" => $data_s2_rsf['s2_rs_f_v'],
"ri1" => $data_s2_rso['s2_rs_o_i'],
"ri2" => $data_s2_rst['s2_rs_t_i'],
"ri3" => $data_s2_rsth['s2_rs_th_i'],
"ri4" => $data_s2_rsf['s2_rs_f_i'],
"rl1" => $data_s2_rso['s2_rs_o_l'],
"rl2" => $data_s2_rst['s2_rs_t_l'],
"rl3" => $data_s2_rsth['s2_rs_th_l'],
"rl4" => $data_s2_rsf['s2_rs_f_l'],
);
echo json_encode($mra);
?>
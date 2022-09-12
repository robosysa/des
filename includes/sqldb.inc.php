<?php
try {
	define('DB_PATH', __DIR__ . '/db.sqlite3');
    $file_db = new PDO('sqlite:' . DB_PATH);
    $file_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$file_db->exec("CREATE TABLE IF NOT EXISTS s1_ts (
					   s1_i_t TEXT,
					   s1_u_ph TEXT,
					   s1_bt TEXT,
					   s1_u_e TEXT,
					   s1_p_e TEXT)");
	$file_db->exec("CREATE TABLE IF NOT EXISTS s1_ps (
					   ap_wi INTEGER,			   
					   ap_xb INTEGER,			   
					   ap_ps INTEGER,			   
					   ap_an INTEGER,			   
					   ap_io INTEGER)");
	$file_db->exec("CREATE TABLE IF NOT EXISTS s1_sts (
					   s1_s_t1 TEXT,
					   s1_s_t2 TEXT)");					
	$file_db->exec("CREATE TABLE IF NOT EXISTS s2_ts (
					   s2_i_t TEXT,
					   s2_rb_t TEXT,
					   s2_bt TEXT)");	
	$file_db->exec("CREATE TABLE IF NOT EXISTS s2_rso (
					   id INTEGER PRIMARY KEY AUTOINCREMENT,
					   s2_rs_o_i TEXT,
					   s2_rs_o_v INTEGER,
					   s2_rs_o_l TEXT,
					   s2_rs_t_i TEXT,
					   s2_rs_t_v INTEGER,
					   s2_rs_t_l TEXT,
					   s2_rs_th_i TEXT,
					   s2_rs_th_v INTEGER,
					   s2_rs_th_l TEXT,
					   s2_rs_f_i TEXT,
					   s2_rs_f_v INTEGER,
					   s2_rs_f_l TEXT)");
	$file_db->exec("CREATE TABLE IF NOT EXISTS s3_ps (
					   proc_str_1 TEXT, 
					   proc_str_2 TEXT,
					   proc_str_3 TEXT,
					   proc_str_4 TEXT, 
					   proc_str_5 TEXT)");
	$file_db->exec("CREATE TABLE IF NOT EXISTS s4_s (
					   s4_stt TEXT, 
					   s4_stp TEXT)");
	$file_db->exec("CREATE TABLE IF NOT EXISTS s4_bs (
					   s4_bst TEXT, 
					   s4_bsduu TEXT,
					   s4_bsdocc TEXT,
					   s4_bsdocs TEXT)");	
	$file_db->exec("CREATE TABLE IF NOT EXISTS header_settings (
					   header_logo_img_src TEXT,
					   header_title TEXT, 
					   header_subtitle TEXT,
					   header_particles INTEGER)");
	$file_db->exec("CREATE TABLE IF NOT EXISTS design_colors (
					   color_mode TEXT)");
	$file_db->exec("CREATE TABLE IF NOT EXISTS accent_color (
					   accent_color TEXT)");						
	$file_db->exec("CREATE TABLE IF NOT EXISTS footer_settings (
					   footer_content TEXT)");	
	$file_db->exec("CREATE TABLE IF NOT EXISTS general_settings (
					   page_title TEXT,
					   page_meta_description TEXT,
					   page_favicon TEXT)");
	$file_db->exec("CREATE TABLE IF NOT EXISTS ga_id (
					   ga_id TEXT)");
	$file_db->exec("CREATE TABLE IF NOT EXISTS lp_gu (
					   lp_gu INTEGER)");					
	$file_db->exec("CREATE TABLE IF NOT EXISTS d_acc (
					   d_acc TEXT,
					   d_acc_title TEXT,
					   d_acc_content TEXT)");
	$file_db->exec("CREATE TABLE IF NOT EXISTS s_eff (
					   s_eff TEXT)");
	$file_db->exec("CREATE TABLE IF NOT EXISTS bgi (
					   bg_img_src TEXT)");
	$file_db->exec("CREATE TABLE IF NOT EXISTS f_ico (
					   favicon_src TEXT)");				   
}
catch(PDOException $e) {
    echo $e->getMessage();
}
?>
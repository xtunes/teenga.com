<?php
if ("wp-config.php"){
 require("wp-config.php");
}else {
 exit("wp-config.php�����ڣ����ļ���Ҫ�ϴ������͵ĸ�Ŀ¼����ʹ�ã�");
}
echo dirname(__FILE__);
//��ȡsiteurl
$filename = str_ireplace(dirname(__FILE__),'',__FILE__);
$filename = str_ireplace("\\","/",$filename);
$dirname = str_ireplace($filename,'',$_SERVER['PHP_SELF']);
$siteurl =  "http://" . $_SERVER['SERVER_NAME'] . $dirname;
mod_wp_db($siteurl);
echo "�ɹ�����siteurl�������ŷ������<a href=\"{$siteurl}\">������ҳ</a>{$siteurl}";
function mod_wp_db($siteurl){
 $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
 mysql_select_db(DB_NAME,$con);
 $sql = "set names " . DB_CHARSET;
 $sql1="update wp_options set option_value='{$siteurl}' where option_name='siteurl'";
 $sql2="update wp_options set option_value='{$siteurl}' where option_name='home'";
 $sql3="update wp_options set option_value='" . dirname(__FILE__) . "/wp-content/uploads' where option_name='upload_path'";
 if(mysql_query($sql,$con)&&mysql_query($sql1,$con)&&mysql_query($sql2,$con)&&mysql_query($sql3,$con)){
  return true;
 }else{
  return false;
 }
}
?> 

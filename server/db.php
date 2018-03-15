<?php
$db=mysql_connect('XXXXX','iXXXXX','XXXXX') or die('unable to connect to th server');
mysql_select_db('iXXXXX',$db);

$query = 'insert into captcha (captcha_id , captchaNo ,captcha) values (1,"11446",25),(2,"114484",16),(3,"91446",14),(4,"18446",78),(5,"114856",32)';
$result=mysql_query($query,$db);

if($result) {echo 'success';}
?>
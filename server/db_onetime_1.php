<?php
$db=mysql_connect('localhost','id389671_1280217','ihsir2343') or die('unable to connect');

mysql_select_db('id389671_1280217',$db);

$query=

	'create table if not exists login(
	
		member_id	integer unsigned not null auto_increment,
		mail		varchar(50)	not null,
		phone		char(12)	not null,
		pass		varchar(10)     ,		
		account		varchar(20)	not null,

		primary key (member_id)
		)
	engine=MyISAM';

$result=mysql_query($query,$db) or die ('unable to create table login');

$query=

	'create table if not exists otp(
	
		otp_id 	tinyint  	not null auto_increment,
		otp	varchar(6)	not null,
	
		primary key (otp_id)
		)
	engine=MyISAM';
$result=mysql_query($query,$db) or die ('unable to create table otp');

$query=

	'create table if not exists captcha(
	
		captcha_id 	tinyint		not null,
		captchaNo	varchar(20)	not null,
		captcha		tinyint 	not null,
	
		primary key (captchaNo)
		)
	engine=MyISAM';
$result=mysql_query($query,$db) or die ('unable to create table otp');

$query=

	'create table if not exists userAcc(
	
		account		varchar(20)	not null,
		balance		dec(5,2)	,		
                                                                  
		primary key (account),
		foreign key (account) references login (account)
		)
	engine=MyISAM';

$result=mysql_query($query,$db) or die ('unable to create table userAcc');

$query=

	'create table if not exists logon(
	
		member_id	integer unsigned not null ,
		mail		varchar(50)	not null,
		pass		varchar(10)     not null,		
		
		primary key (member_id),
		foreign key (member_id) references login (member_id)
		)
	engine=MyISAM';

$result=mysql_query($query,$db) or die ('unable to create table logon');

?>
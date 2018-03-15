<?php
$db=mysql_connect('localhost','XXXXX','XXXXX') or die('unable to connect');


mysql_select_db('XXXXX',$db);

$query=

	'create table if not exists text_massage(
	
		member_id	integer 		unsigned not null ,
		mail		varchar(50)	not null,
		text		varchar(250)	,	
		primary key (member_id)
		)
	engine=MyISAM';

$result=mysql_query($query,$db) or die ('unable to create table text massages');

$query=

	'create table if not exists next_massage(
	
		member_id	integer 		unsigned not null ,
		mail		varchar(30)	not null,
		text		varchar(10000)	,	
		primary key (member_id)
		)
	engine=MyISAM';

$result=mysql_query($query,$db) or die ('unable to create table text massages');

?>
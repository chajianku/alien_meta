<?php if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); }  

 /*
Plugin Name: alien_meta
Version: 1.0
Plugin URL: http://www.superxzr.net/post/14.html
Description: 防止搜索引擎收录
Author: alien
Author Email: a457418121@gmail.com
Author URL: http://www.superxzr.net
For: 3.0+
  */

 	function alien_meta (){
 		echo "<META NAME='ROBOTS' CONTENT='NOINDEX, NOFOLLOW'>";
 	}
 	addAction('header','alien_meta');
?>

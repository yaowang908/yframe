<?php
/**
 * yframe
 *
 * @version	1.0.0
 * @author	Yao Wang
 * 
 */

 //frame system directory
 $system_path = 'sys/';
 
 //application directory
 $application_folder = 'app/';
 
 //view directory
 $view_folder = 'sys/views/';
 
 define('SYSPATH',$system_path);
 define('APPPATH',$application_folder);
 
 require_once SYSPATH.'start_routing.php';
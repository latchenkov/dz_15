<?php

require_once ($project_root.'config.php');
require_once ($project_root.'/lib/connection.php'); 
require ($project_root.'/lib/ads_class.php'); 

switch ($_GET['action']) {
    case 'delete':
        $id=(int)$_GET['id'];
        Ads::delAdFromDb($id);
        break;
    default:
        break;
}

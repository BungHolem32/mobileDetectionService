<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28/11/16
 * Time: 21:15
 */

$mobileDetect = include "MobileDetectionService.php";


if ($_REQUEST['isMobile']) {
    echo  $mobileDetect->isMobile();
}
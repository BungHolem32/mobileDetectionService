<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 28/11/16
 * Time: 21:15
 */

require 'vendor/autoload.php';

use Detection\MobileDetect;

class MobileDetectionService
{


    /**
     * @return bool
     */
    public function isMobile()
    {
        return $this->getMobileDetectionPackage()->isMobile();
    }


    /**
     * @return bool
     */
    public function isTablet()
    {
        return $this->getMobileDetectionPackage()->isTablet();
    }


    /**
     * @return MobileDetect Package
     */
    public function getMobileDetectionPackage()
    {
        return new MobileDetect();
    }
}


return new MobileDetectionService();


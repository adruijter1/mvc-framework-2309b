<?php
    /**
     * We gaan libraries insluiten voor het gebruik
     * van ons mvc-framework
     */
    require_once 'libraries/Core.php';
    require_once 'libraries/BaseController.php';
    require_once 'libraries/Database.php';
    require_once 'helpers/functions.php';
    require_once 'config/config.php';

    /**
     * We maken een instantie oftewel object van de Core-Class aan
     */
    $init = new Core();

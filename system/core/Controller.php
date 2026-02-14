<?php

require_once BASEPATH . 'core/Loader.php';

class CI_Controller
{
    public CI_Loader $load;

    public function __construct()
    {
        $this->load = new CI_Loader();
    }
}

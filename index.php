<?php
define('ENVIRONMENT', getenv('CI_ENV') ?: 'production');

define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);
define('BASEPATH', FCPATH . 'system' . DIRECTORY_SEPARATOR);
define('APPPATH', FCPATH . 'application' . DIRECTORY_SEPARATOR);

require_once BASEPATH . 'core/Common.php';
require_once BASEPATH . 'core/CodeIgniter.php';

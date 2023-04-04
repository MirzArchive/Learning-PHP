<?php 
define('APP_DIR', dirname(__FILE__) . '/../');

require('config.php');
require('functions.php');
require('auth_function.php');
require('data/filedataprovider.class.php');
require('data/data.class.php');

Data::initialize(new FileDataProvider(CONFIG['data_file']));

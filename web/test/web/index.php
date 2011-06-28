<?php

/*
 * Define application
 */
define('APP', 'frontend');
include dirname(dirname(dirname(dirname(__FILE__)))) . '/lib/config/config.php';
if (DBUSER == '')
  require ROOT . '/lib/config/setup.php';
else
  new Initialise();

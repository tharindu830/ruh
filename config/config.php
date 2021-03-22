<?php
define('DEBUG' , true);

define('DB_NAME' , 'ruh');
define('DB_USER' , 'root');
define('DB_PASSWORD' , '');
define('DB_HOST' , '127.0.0.1');

define('DEFAULT_CONTROLLER', 'HOME'); // default controller is there isn't one defined in the url
define('DEFAULT_LAYOUT', 'default'); //if no layout is set in the controller use this layout

define('PROOT', '/ruh/'); // set this ti '/' for a alive server

define('SITE_TITLE', 'R MVC FRAMEWORK'); // This will be used if no site titile is set

define('CURRENT_USER_SESSION_NAME', 'qwaserfcvbhytgIKMNHFY'); //session name for logged in user
define('REMEBER_ME_COOCKIE_NAME', 'JKJGRTSVBE534sdfibkD'); //cookie name for logged user
define('REMEBER_COOCKIE_EXPIRY', 604800); //time in second for me cookie to live 30 days

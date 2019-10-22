<?php 

define ('APP', __DIR__);
define ('CONTROLLER', APP.'\controller');
define ('MODAL', APP.'\modal');
define ('VIEW', APP.'\view');
define ('LIBRARY', APP.'\library');
define ('HELPER', APP.'\helper');
define ('APPEXT', '.php');
define ('PAGE_ERROR', 'E404');
define ('DEFAULT_METHOD', 'index');
define ('DEFAULT_CONTROLLER', 'velcome');

define ('ENVIROMENT', 'Development');
define ('CORE', array('index'.APPEXT,'vautoload'.APPEXT,'vconfig'.APPEXT));

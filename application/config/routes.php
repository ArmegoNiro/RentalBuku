    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');


    $route['default_controller'] = 'Rental';

    $route['admin/p/(:any)'] = "admin/load/pages/$1";
    $route['rent/processRent/(:any)/(:any)'] = 'rent/processRent/$1/$2';
    $route['404_override'] = '';
    $route['translate_uri_dashes'] = FALSE;
    $route['logout'] = 'Rental/logout';

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Custom routes
$route['api/rsvp'] = 'api/rsvp';
$route['api/guestbook'] = 'api/guestbook';
$route['rsvp'] = 'home/rsvp';
$route['galeri'] = 'home/galeri';
$route['tamu'] = 'home/tamu';

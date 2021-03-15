<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'c_dashboard';
$route['404_override'] = 'c_dashboard/page_404';
$route['translate_uri_dashes'] = FALSE;
// $route['admin'] = 'admin/overview';
// Sambutan
$route['greetings'] = 'c_dashboard/sambutan';
// Visi Misi
$route['vision-mision'] = 'c_dashboard/visi_misi';
// Structure
$route['organizational-structure'] = 'c_dashboard/structure';
// Dosen
$route['lecturer'] = 'c_dashboard/dosen';
//Fasilitas
$route['facilities'] = 'c_dashboard/fasilitas';
//Artikel
$route['blogs'] = 'c_dashboard/artikel';
$route['detail-news'] = 'c_dashboard/details_news';
// News 
$route['getapinewsbyblog'] = 'c_branda/load_newsbyblog';
// News all 
$route['getapinewsblogsall'] = 'c_branda/getnewsbloglall';
$route['getapinewsblogsall/(:num)'] = 'c_branda/getnewsbloglall/$1';
$route['getapinewsblogsall/page/(:num)'] = 'c_branda/getnewsbloglall/$1';
//Agenda
$route['event'] = 'c_dashboard/agenda';
//Mahasiswa
$route['student'] = 'c_dashboard/mahasiswa';
//Gallery
$route['gallery'] = 'c_dashboard/gallery';
//Penelitian
$route['research'] = 'c_dashboard/penelitian';
//Kontak
// history
$route['history'] = 'c_dashboard/history';
// brille
$route['brille'] = 'c_dashboard/brille';
// openoffer
$route['openoffer'] = 'c_dashboard/openoffer';



$route['contact'] = 'c_dashboard/kontak';
$route['prospective-student'] = 'c_dashboard/prospective';
$route['prodi'] = 'c_dashboard/prodi';
$route['_contact/crud'] = 'c_dashboard/kontak_crud';
$route['knowledge'] = 'c_dashboard/knowledge';
$route['knowledge/(:num)'] = 'c_dashboard/knowledge/$1';


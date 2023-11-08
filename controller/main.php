

<?php

require_once 'controller/controllers.php';
require_once 'controller/function.php';
require_once 'config/config.php';
require_once 'controller/Customer.php';
require_once 'controller/ShopController.php';
require_once 'controller/admin.php';

$url = $_GET['url'] ?? '/web-judol';
switch ($url) {
    case 'register':
        $action = $_GET['action'] ?? '';
        if ($action === 'save') {
            Customer::register_save();
        }
        Customer::register_form();
        break;
    case 'login':
        $action = $_GET['action'] ?? '';
        if ($action === 'save') {Admin::login_save();}
        Admin::login_form();
        break;
   case 'logout':
    $action = $_GET['action'] ?? '';
    if ($action === 'logoutt') {
       Auth::logout();
        // Redirect ke halaman login atau halaman lain yang sesuai
    } Auth::logout();
    break;
    case 'dashboard':
        Admin::dashboard();
        break;
    case 'profile':
        Customer::profile();
        break;
    case 'item':
        Item::index();
        break;
    case 'cart':
        Cart::index();
        break;
    case 'order':
        Order::index();
        break;
    case 'contact':
        Contact::index();
        break;

        //     case 'show':
        //         $id = $_GET['id'] ?? 0;
        //         StudentController::show($id);
        //         break;
        //     case 'edit':
        //         $id = $_GET['id'] ?? 0;
        //         $action = $_GET['action'] ?? '';
        //         if ($action === 'save') {
        //             StudentController::update($id);
        //         }
        //         StudentController::edit($id);
        //         break;
        //     case 'rem':
        //         $id = $_GET['id'] ?? 0;
        //         StudentController::remove($id);
        //         break;
        //     case 'role-students':
        //         $type = $_GET['type'] ?? 0;
        //         RoleController::getRoles($type);
        //         break;
        //     default:
        //         // var_dump($url);
        //         // break;
        //         $action = isset($_GET['action']) ? $_GET['action'] : 'default';
        //         if ($action === 'restore') {
        //             StudentController::restore();
        //         }
        //         else if ($action === 'purge') {
        //             StudentController::purge();
        //         }
        //         else {
        //             StudentController::index();

        //         }
        //         break;
}

<?php
require_once 'config/config.php';
require_once 'controller/function.php';
require_once 'model/UserModel.php';
require_once 'controller/RegisterController.php';
//require_once 'controller/role_controller.php';

abstract class Controller {
    abstract static function index(); // SHOW ALL
    abstract static function show($data); // SHOW SPECIFIC
    abstract static function add(); // ADD DATA FORM
    abstract static function save(); // SAVE DATA
    abstract static function edit($data); // EDIT SPECIFIC
    abstract static function update($data); // UPDATE DATA
    abstract static function remove($data);
}

interface CustomFunctions {
    static function purge();
    static function restore();
}
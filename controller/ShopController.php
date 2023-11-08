<?php
require_once 'controller/controllers.php';

class Item
{
    static function index()
    {
        view('shop/item', ['header' => titleheader('Halaman Item', 'h1', 'text-center mb-3')]);
    }
}
class Cart
{
    static function index()
    {
        view('shop/cart', ['header' => titleheader('Halaman cart', 'h1', 'text-center mb-3')]);
    }
}
class Order
{
    static function index()
    {
        view('shop/order', ['header' => titleheader('Halaman order', 'h1', 'text-center mb-3')]);
    }
}
class Contact
{
    static function index()
    {
        view('shop/contact', ['header' => titleheader('Halaman Contact', 'h1', 'text-center mb-3')]);
    }
}

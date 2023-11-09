<?php
require_once 'controller/controllers.php';

class Item
{
    static function index()
    {
        view('shop/item', ['header' => titleheader('Halaman Item', 'h1', 'text-center mb-3')]);
    }
    static function show($id)
    {
        view('shop/show/ItemShow', [
            'item' => ItemShow::selectById(" WHERE item_id=" . $id),
            'header' => titleheader('Halaman Item detail', 'h1', 'text-center mb-3')
        ]);
    }
}
class Cart
{
    static function index()
    {
        view('shop/cart', ['header' => titleheader('Halaman cart', 'h1', 'text-center mb-3')]);
    }
    static function show($id)
    {
        view('shop/show/cartShow', [
            'cart' => CartShow::selectById(" WHERE `cart`.`cart_id` = " . $id),
            'header' => titleheader('Halaman Cart Detail', 'h1', 'text-center mb-3')
        ]);
    }
}
class Order
{
    static function index()
    {
        view('shop/order', ['header' => titleheader('Halaman order', 'h1', 'text-center mb-3')]);
    }
    static function show($id)
    {
        view('shop/show/orderShow', [
            'order' => OrderShow::selectById(" WHERE `order`.`order_id` =" . $id),
            'header' => titleheader('Halaman Order Detail', 'h1', 'text-center mb-3')
        ]);
    }
}


class Contact
{
    static function index()
    {
        view('shop/contact', ['header' => titleheader('Halaman contact', 'h1', 'text-center mb-3')]);
    }
}

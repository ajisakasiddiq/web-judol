<?php
require_once('config/conn.php');
class ItemShow
{
    static function select()
    {
        global $conn;
        $sql = "SELECT item_id,nama_item,deskripsi,harga FROM item";
        $result = $conn->query($sql);
        $arr = array();

        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
    static function selectById($id)
    {
        global $conn;
        $sql = "SELECT `nama_item`,`deskripsi`,`harga` FROM `item`";
        $result = $conn->query($sql);
        $arr = array();

        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
}
class OrderShow
{
    static function select()
    {
        global $conn;
        $sql = "SELECT `order`.`order_id`, `item`.`nama_item`,`order`.`total`
        FROM `order`
        INNER JOIN `item` ON `order`.`item_id` = `item`.`item_id`";
        $result = $conn->query($sql);
        $arr = array();

        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
    static function selectById($id)
    {
        global $conn;
        $sql = "SELECT `order`.`order_id`, `item`.`nama_item`,`order`.`total`
        FROM `order`
        INNER JOIN `item` ON `order`.`item_id` = `item`.`item_id`";
        $result = $conn->query($sql);
        $arr = array();

        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
}
class CartShow
{
    static function select()
    {
        global $conn;
        $sql = "SELECT `cart`.`cart_id`,`item`.`nama_item`,`item`.`deskripsi`,`item`.`harga` 
        FROM `cart`
        INNER JOIN `item` ON `cart`.`item_id` = `item`.`item_id`";
        $result = $conn->query($sql);
        $arr = array();

        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
    static function selectById($id = "")
    {
        global $conn;
        $sql = "SELECT `cart`.`cart_id`,`item`.`nama_item`,`item`.`deskripsi`,`item`.`harga` FROM `cart` INNER JOIN `item` ON `cart`.`item_id` = `item`.`item_id`";
        $result = $conn->query($sql);
        $arr = array();

        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
}

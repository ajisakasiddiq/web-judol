<?php
function view($page, $data = [])
{
    include 'view/' . $page . '.php';
}

function ShowTableItem($data)
{
    $i = 0;
    $j = 1;
    if (count($data) > 0) {
        while ($i < count($data['item_id'])) {
            echo "<tr>";
            for ($k = 0; $k < count($data); $k++) {
                echo "<td>" . $data[array_keys($data)[$k]][$i] . "</td>";
            }
            $id = $data['item_id'][$i];
            echo <<<EOD
                <td class="d-flex justify-content-center">
                    <a href="itemshow?id=$id" type="button" class="btn btn-primary">Tampilkan</a>
                </td>
            EOD;
            echo "</tr>";
            $i++;
            $j++;
        }
    }
}
function ShowTableCart($data)
{
    $i = 0;
    $j = 1;
    if (count($data) > 0) {
        while ($i < count($data['cart_id'])) {
            echo "<tr>";
            for ($k = 0; $k < count($data); $k++) {
                echo "<td>" . $data[array_keys($data)[$k]][$i] . "</td>";
            }
            $id = $data['cart_id'][$i];
            echo <<<EOD
                <td class="d-flex justify-content-center">
                    <a href="cartshow?id=$id" type="button" class="btn btn-primary">Tampilkan</a>
                </td>
            EOD;
            echo "</tr>";
            $i++;
            $j++;
        }
    }
}
function ShowTableOrder($data)
{
    $i = 0;
    $j = 1;
    if (count($data) > 0) {
        while ($i < count($data['order_id'])) {
            echo "<tr>";
            for ($k = 0; $k < count($data); $k++) {
                echo "<td>" . $data[array_keys($data)[$k]][$i] . "</td>";
            }
            $id = $data['order_id'][$i];
            echo <<<EOD
                <td class="d-flex justify-content-center">
                    <a href="ordershow?id=$id" type="button" class="btn btn-primary">Tampilkan</a>
                </td>
            EOD;
            echo "</tr>";
            $i++;
            $j++;
        }
    }
}

function titleheader($string, $type, $classValues = '')
{
    echo
    "<$type" . " class=\"$classValues\"" . ">" .
        $string .
        "</$type>";
}

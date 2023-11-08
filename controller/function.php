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
            $uid = $data['item_id'][$i];
            echo <<<EOD
                <td class="d-flex justify-content-center">
                    <a href="item?id=$uid" type="button" class="btn btn-primary">Tampilkan</a>
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
        while ($i < count($data['item_id'])) {
            echo "<tr>";
            for ($k = 0; $k < count($data); $k++) {
                echo "<td>" . $data[array_keys($data)[$k]][$i] . "</td>";
            }
            $uid = $data['item_id'][$i];
            echo <<<EOD
                <td class="d-flex justify-content-center">
                    <a href="item?id=$uid" type="button" class="btn btn-primary">Tampilkan</a>
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
        while ($i < count($data['item_id'])) {
            echo "<tr>";
            for ($k = 0; $k < count($data); $k++) {
                echo "<td>" . $data[array_keys($data)[$k]][$i] . "</td>";
            }
            $uid = $data['item_id'][$i];
            echo <<<EOD
                <td class="d-flex justify-content-center">
                    <a href="item?id=$uid" type="button" class="btn btn-primary">Tampilkan</a>
                </td>
            EOD;
            echo "</tr>";
            $i++;
            $j++;
        }
    }
}
function ShowTableContact($data)
{
    $i = 0;
    $j = 1;
    if (count($data) > 0) {
        while ($i < count($data['item_id'])) {
            echo "<tr>";
            for ($k = 0; $k < count($data); $k++) {
                echo "<td>" . $data[array_keys($data)[$k]][$i] . "</td>";
            }
            $uid = $data['item_id'][$i];
            echo <<<EOD
                <td class="d-flex justify-content-center">
                    <a href="item?id=$uid" type="button" class="btn btn-primary">Tampilkan</a>
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

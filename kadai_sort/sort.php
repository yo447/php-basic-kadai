<?php

function sort_2way()
{
    $array = [4, 10, 15, 18, 23];
    $check = [4, 10, 15, 18, 23]; // 一致確認用の配列

    // if文：配列が特定の順と一致しているかどうか
    if ($array === $check) {
    // 昇順ソート
    echo "昇順にソートします。<br>";
    $asc = $array;
    sort($asc);
    foreach ($asc as $value) {
        echo $value . '<br>';
    }

    // 降順ソート
    echo "降順にソートします。<br>";
    $desc = $array;
    rsort($desc);
    foreach ($desc as $value) {
        echo $value . '<br>';
    }
  }
}

sort_2way();
?>


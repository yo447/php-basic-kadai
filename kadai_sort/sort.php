<?php
function sort_2way(array $array, string $order = 'asc'): void
{
    // ソート方向に応じてソート
    if ($order === 'asc') {
        sort($array); // 昇順ソート
        echo "昇順にソートします。<br>";
    } elseif ($order === 'desc') {
        rsort($array); // 降順ソート
        echo "降順にソートします。<br>";
    } else {
        echo "無効なソート順指定です。'asc' または 'desc' を指定してください。<br>";
        return;
    }

    // ソート結果の表示
    foreach ($array as $value) {
        echo htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8') . '<br>';
    }
}

// 使用例
$sampleArray = [4, 10, 15, 18, 23];
sort_2way($sampleArray, 'asc');  // 昇順ソート
sort_2way($sampleArray, 'desc'); // 降順ソート
?>

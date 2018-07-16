<?php
/**
 * Date: 15.07.2018
 * Zakhar Serkov <zakharserkov@me.com>
 */

// массив для элементов
$a = array();

// первые два значения - 0 и 1
$a[1] = '0'; // они в виде строки!
$a[2] = '1';

// Складываем два предыдущих
for ($i = 3; $i <= 20; $i++) {
    $a[$i] = bcadd($a[$i-1], $a[$i-2]);
}

for ($i = 1; $i <= 20; $i++) {
    echo '<pre>';
// Выводим данные на экран
    print_r($a[$i]);

    echo '<pre>';
}

// eof
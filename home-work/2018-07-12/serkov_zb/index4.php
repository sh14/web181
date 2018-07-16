<?php
/**
 * Date: 15.07.2018
 * Zakhar Serkov <zakharserkov@me.com>
 */

// Создаем массив и наполняем его значениями от 0 до 100
$array = range(0, 100);

// Обозначаем переменную $array2 как массив (пустой)
$array2 = [];

// Считаем количество элементов в массиве $array
$n = sizeof($array);

// Перебираем массив от 0 до последнего элемента
for ($i = 0; $i <= $n; $i++) {

    // Если значение при делении по модулю равно 0, т.е. четное
    if ($i % 2 == 0) {
        // записываем его в массив $array2
        $array2[] = $array[$i];
    }
}

echo '<pre>';
// Выводим на экран массив $array2
print_r($array2);

echo '<pre>';


// eof
<?php
/**
 * Date: 15.07.2018
 * Zakhar Serkov <zakharserkov@me.com>
 */

/*Задание:
Дан многомерный массив.
Выведите с его помощью слово 'голубой'.
*/
// Создаем двумерный массив
$arr = array(
    'ru'=> array ('голубой', 'красный', 'зеленый'),
    'en'=> array ('blue', 'red', 'green'),
);

// Выводим на экран нулевое значение из строки 'ru'
echo $arr ['ru'][0];


// eof
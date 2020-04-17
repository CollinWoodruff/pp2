<?php
/**
 * Created by PhpStorm.
 * User: Collin Woodruff
 * Date: 4/17/2020
 * Time: 1:37 PM
 */
function printArr(array $numbers)
{
    foreach ($numbers as $value)
    {
        echo "$value<br>";
    }
}

function Largest(array $numbers)
{
    return max($numbers);
}

function removeDups(array $numbers)
{
    return array_unique($numbers);
}

function distribution(array $numbers)
{
    return print_r(array_count_values($numbers));
}
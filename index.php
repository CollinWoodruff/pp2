<?php
/**
 * Created by PhpStorm.
 * User: Collin Woodruff
 * Date: 4/17/2020
 * Time: 1:11 PM
 * http://cwoodruff.greenriverdev.com/328X2/pp2/
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<p>step 1</p>
<h1>PHP Array Practice</h1>";

echo "<p>Step 2</p>";

$numbers = array( "7", "9", "8", "9", "8", "8", "6");

require_once ("functions.php");

echo "<p>Step 3</p>";

printArr($numbers);

echo "<p>Step 4</p>";

echo '<p>' . Largest($numbers) . '</p>';

echo "<p>Step 5</p>";

printArr(removeDups($numbers));

echo "<p>Step 6</p>";

distribution($numbers);


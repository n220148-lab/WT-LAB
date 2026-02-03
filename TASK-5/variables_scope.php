<?php
echo "<h2>PHP Variables & Scope</h2>";

/* Datatypes */
$string = "Hello PHP";
$integer = 10;
$float = 12.5;
$boolean = true;
$array = array("Apple", "Banana", "Mango");

echo "String: $string <br>";
echo "Integer: $integer <br>";
echo "Float: $float <br>";
echo "Boolean: $boolean <br>";
echo "Array: ";
print_r($array);
echo "<hr>";

/* Local Scope */
function localScope() {
    $x = 50;
    echo "Local Variable: $x <br>";
}
localScope();

/* Global Scope */
$y = 100;
function globalScope() {
    global $y;
    echo "Global Variable: $y <br>";
}
globalScope();

/* Static Scope */
function staticScope() {
    static $count = 0;
    $count++;
    echo "Static Count: $count <br>";
}

staticScope();
staticScope();
staticScope();
?>

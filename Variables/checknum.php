
<?php
/*
 * Check if a variable is a number (integer or float)
 * Example Input:
 *   $num = 3.14;
 * Expected Output:
 *   num is a float
 */


// Safely initialize the variable
$num = 3.14;

// Always check before using
if (isset($num)) {
  if (is_int($num)) {
    echo "num is an integer";
  } elseif (is_float($num)) {
    echo "num is a float";
  } elseif (is_string($num)) {
    echo "num is a string";
  } elseif (is_bool($num)) {
    echo "num is a boolean";
  } else {
    echo "Unknown type";
  }
} else {
  echo "Variable \$num is not set.";
}

?>

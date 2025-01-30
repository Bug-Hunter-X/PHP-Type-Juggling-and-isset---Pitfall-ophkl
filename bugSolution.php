The solution involves using strict comparison (`===`) to prevent type juggling.  This ensures that the comparison only evaluates to true if both the type and value are identical.  Additionally, we can explicitly check if the variable is set and is not null before the comparison to handle cases where the variable is truly unset.

```php
<?php
function checkValue($value) {
  if (isset($value) && $value === 0) {
    return true;
  } else {
    return false;
  }
}

$unsetVar;

if(checkValue($unsetVar)){
  echo "Unset var evaluates to true (Incorrect)";
} else {
  echo "Unset var evaluates to false (Correct)";
}

$zeroVar = 0;
if(checkValue($zeroVar)){
  echo "Zero var evaluates to true (Correct)";
} else {
  echo "Zero var evaluates to false (Incorrect)";
}
?>
```
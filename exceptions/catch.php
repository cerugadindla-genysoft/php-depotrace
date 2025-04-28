<?php
// without using catch block
function divide($dividend, $divisor) {
    if($divisor == 0) {
      throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
  }
  
  try {
    echo divide(5, 0);
  } finally {
    echo 'Process complete.';echo"---output without using catch block";
  }
?>
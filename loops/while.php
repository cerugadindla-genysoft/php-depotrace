<?php
// while loop
$x=0;
while( $x < 6) {
    echo"$x";
    $x++;   
}
echo "<br>";

// alternative syntax
   $i = 1;

   while ($i < 6):
   echo $i;
   $i++;
   endwhile;
echo "<br>";


// while loop with break
    $x=0;
    while($x < 6) {
    if ($x == 3 ) break;
    echo"$x";
    $x++;
    
}
  echo "<br>";


//  while loop with continue
     $x=0;
     while($x < 6) {
        $x++;
      if ($x == 3 ) continue;
    echo"$x";

    
   
}


?>
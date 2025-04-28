
<?php
    $x=10;
    echo"$x";echo"--1 assigning a value to variable";
    echo"<br>";

    $x="chandana";
    echo"$x";echo" ---2 printing the string";
    echo"<br>";

    echo "$genysoft";echo" ----3 string in double quotes";
    echo"<br>";
    
    echo '$genysoft';echo"----4 string in single quotes";
    echo"<br>";

    // double quotes using string
    $x = "John";
    echo "Hello $x"; echo" -----5 returns both statement and string";
    echo"<br>";

   // single quotes using string
    $x = "John";
    echo 'Hello $x';echo" ----6 returns the statement as it is";
    echo"<br>";


    //concate strings 
    $x=10;
    $y=20;
    echo$x.=$y;echo" ---7 combines two strings";
    echo"<br>";
    

     // escape character
    $x = "We are the so-called \"Vikings\" from the north.";
    echo $x;echo" ---8  prints only the specific word";
    echo"<br>";

    // array operator
    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  
    var_dump($x === $y);echo" --- 9 returns false because the values are not in same order and same type";
    echo"<br>";

    // seventh element in an array
    $x = array(10, 20, 30, 40, 50, 60, 70, 80, 90);
    $seventhElement = $x[6];
    echo "The seventh element is: " . $seventhElement;echo" ----10 finding the seventh element";
    ?>
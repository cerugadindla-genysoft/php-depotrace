<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
if (isset($_SERVER['HTTP_REFERER'])) {
    // It is set, so you can use it safely
    $referer = $_SERVER['HTTP_REFERER'];
    echo "The referring page is: " . $referer;
} else {
    // HTTP_REFERER is not set
    echo "No referring page.";
}
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
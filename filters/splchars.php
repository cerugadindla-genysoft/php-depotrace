<?php
$input = "<script>alert('Hacked!');</script>";
$sanitized = htmlspecialchars($input, ENT_QUOTES, "UTF-8");
echo $sanitized;
?>

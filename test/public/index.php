<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoloading</title>
</head>
<body>

<?php
use App\Wcs\Hello;
require_once '../vendor/autoload.php';
$hello = new Hello();
echo $hello->talk();

?>

</body>
</html>
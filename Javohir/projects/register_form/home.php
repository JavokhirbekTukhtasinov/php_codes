<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="smg"><?php
        if (isset($_SESSION["seccess"])) {
        $msg = $_SESSION["seccess"];
        echo "<h2>$msg</h2>";
        }
        ?>
    </div>
</body>
<style>
.smg {
    width: 100%;
    color: green;
    border: 5px solid blue;
}
</style>

</html>
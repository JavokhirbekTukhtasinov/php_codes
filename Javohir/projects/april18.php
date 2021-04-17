<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="calender">
        <table table-bordered>
            <tr>
                <th colspan="7">April 2021</th>
            </tr>

            <?php
 $today_date = date('d');
?>
            <?php
$rows = range(1,6);
$cols = range(1,6);

foreach ($rows as $row) {
    if ($rows ==1 ) {
        echo "<th>S</th>";
        echo "<th>M</th>";
        echo "<th>T</th>";
        echo "<th>W</th>";
        echo "<th>T</th>";
        echo "<th>F</th>";
        echo "<th>S</th>";
    }

        while()
    
}

?>
        </table>
    </div>



    <style>
    tr:first-child th {
        text-align: center;
        background-color: lightblue;
        color: yellow;

    }
    </style>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titanic</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="titanic.inc.css">
</head>
<?php

// $conn = new mysqli('localhost','root','','korea');

// if (!$conn) {
//     echo 'connaction failed: '. $conn->error;
// }

// //////////////////////////////////////////////////
// $sql = "SELECT PassengerId FROM titanic limit 4";
// $obj = $conn->query($sql);

// $titanics = $obj->fetch_field();

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "korea";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM titanic";
$result = $conn->query($sql);

$conn->close();

?>

<body>
    <div class="main_container">
        <div class="titanic_title">Titanic</div>
        <div class="container">

            <form method="GET">
                <p>
                    <label for="search">Search: </label>
                    <input type="text" name="keyword" placeholder="Your keyword">
                    <select class="field">
                        <?php
                        $columns = ['PassengerID','Survived','Pclass','Name','Sex','Age','Ticket','Fare','Cabin'];
                        foreach ($columns as $column){
                            {
                                echo "<option selected value=\"$column\">$column</option>";
                            }
                        }
                    ?>

                    </select><button class="btn btn-success" type="submit">GO</button>
                </p>

            </form>
        </div>
        <div class="passNames">
            <table class="table table-bordered">
                <tr>
                    <th>PassengerID</th>
                    <th>Survived</th>
                    <th>Pclass</th>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Age</th>
                    <th>Ticket</th>
                    <th>Fare</th>
                    <th>Cabin</th>
                </tr>
                <?php if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()):?>
                <tr>
                    <td><?php echo $row['COL 1']?></td>
                    <td><?php echo $row['COL 2']?></td>
                    </td><?php echo $row['COL 3']?></td>
                    <td>Names</td>
                    <td>Sex</td>
                    <td>Age</td>
                    <td>Ticket</td>
                    <td>Fare</td>
                    <td>Cabin</td>
                </tr>
                <?php endwhile;?>
            </table>
        </div>
    </div>
</body>

</html>
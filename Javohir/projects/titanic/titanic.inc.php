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

// $sql = "SELECT PassengerId FROM titanic limit 4";

// $obj = $conn->query($sql);

// $titanics = mysqli_fetch_assoc($obj);
require_once "../database.php";
$obj = new \Database\database("korea");
$sql = "SELECT PassengerId FROM titanic";
$titanics = $obj->sql($sql);
?>

<body>
    <div class="main_container">
        <div class="container">
            <div class="titanic_title">Titanic</div>
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
                <?php foreach ($titanics as $titanic):?>
                <tr>
                    <td></td>
                    <td><?php echo $titanic['PassengerId']?></td>
                    <td><?php echo $titanic['1']?>
                    </td><?php echo $tatinic['2']?>
                    <td>Names</td>
                    <td>Sex</td>
                    <td>Age</td>
                    <td>Ticket</td>
                    <td>Fare</td>
                    <td>Cabin</td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</body>

</html>
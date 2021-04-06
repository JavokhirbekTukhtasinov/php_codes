<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The World Airports</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="titanic.clone.css">
    <script src="/js/jquery-3.5.1.js"></script>
    <script src="js/airports.js"></script>
</head>

<body>
    <?php
$keyword = $_GET['keyword']??null;
$field = $_GET['field']??'PassengerId';
$order = $_GET['order']??'id';
$orderby = $_GET['orderby']??'asc';

$field_lists = ['PassengerId','Survived','Pclass','Name'];
$orderby_lists = ['asc','desc'];

$order = in_array($order, $field_lists)?$order:'id';
$orderby = in_array($orderby, $orderby_lists)?$orderby:'asc';

require_once "../database.php";
$obj = new \Database\database("korea");

if ($keyword){
    if ($field == 'anywhere'){
        $sql = "SELECT * FROM titanic WHERE COL 1 like '%$keyword%' or Survives like '%$keyword%' or Pclass like '%$keyword%' order by $order $orderby;";
    }else{
        $sql = "SELECT * FROM titanic WHERE $field like '%$keyword%'  order by $order $orderby;";
    }
}else{
    $sql = "SELECT * FROM titanic order by PassengerId asc limit 5  order by $order $orderby;";
}



$airports = $obj->sql($sql);
$link = "index.php?keyword=$keyword&field=$field";
?>
    <div id="airports">
        <div class="airports_title">Titanic Passenger's Information</div>
        <div class="airports_search">
            <form>
                <p>
                    <label>Search: </label><input value="<?php echo $keyword;?>" name="keyword"
                        placeholder="Your keyword" type="text">
                    <select name="field">
                        <?php
                        $columns = ['PassengerId','Survived','Pclass'];
                        foreach ($columns as $column){
                            if ($field == $column){
                                echo "<option selected value=\"$column\">$column</option>";
                            }else{
                                echo "<option value=\"$column\">$column</option>";
                            }
                        }
                    ?>
                    </select>
                    <button class="btn btn-success" type="submit">GO</button>
                </p>
            </form>
        </div>
        <div class="airports_list">
            <table class="table table-bordered">
                <tr>
                    <th>ID
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=id&orderby=asc"><img
                                src="img/btn_arrow_up.png"></a>
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=id&orderby=desc"><img
                                src="img/btn_arrow_down.png"></a>
                    </th>
                    <th>City
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=city&orderby=asc"><img
                                src="img/btn_arrow_up.png"></a>
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=city&orderby=desc"><img
                                src="img/btn_arrow_down.png"></a>
                    </th>
                    <th>Country
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=country&orderby=asc"><img
                                src="img/btn_arrow_up.png"></a>
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=country&orderby=desc"><img
                                src="img/btn_arrow_down.png"></a>
                    </th>
                    <th>Name
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=name&orderby=asc"><img
                                src="img/btn_arrow_up.png"></a>
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=name&orderby=desc"><img
                                src="img/btn_arrow_down.png"></a>
                    </th>
                    <th>Action</th>
                </tr>
                <?php foreach ($airports as $airport):?>
                <tr>
                    <td><?php echo $airport['PassengerId'];?></td>
                    <td contenteditable="true"><?php echo $airport['city'];?></td>
                    <td><?php echo $airport['Survived'];?></td>
                    <td><?php echo $airport['Pclass'];?></td>
                    <td>
                        <a data-id="<?php echo $airport['id'];?>" class="btn btn-danger btn_delete"
                            href="delete.php?id=<?php echo "{$airport['id']}&field=$field&order=$order&orderby=$orderby&keyword=$keyword"?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

</body>

</html>
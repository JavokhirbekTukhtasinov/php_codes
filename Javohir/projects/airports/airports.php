<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The World Airports</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="airports.css">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="Javohir/projects/airports/airports.js"></script>

</head>

<body>
    <?php
$keyword = $_GET['keyword']??null;
$field = $_GET['field']??'country';
$order = $_GET['order']??'id';
$orderby = $_GET['orderby']??'asc';

$field_lists = ['id','city','country','name'];
$orderby_lists = ['asc','desc'];

$order = in_array($order, $field_lists)?$order:'id';
$orderby = in_array($orderby, $orderby_lists)?$orderby:'asc';

require_once "database.php";
$obj = new \Database\database("korea");

if ($keyword){
    if ($field == 'anywhere'){
        $sql = "SELECT * FROM airports WHERE city like '%$keyword%' or country like '%$keyword%' or name like '%$keyword%' order by $order $orderby;";
    }else{
        $sql = "SELECT * FROM airports WHERE $field like '%$keyword%'  order by $order $orderby;";
    }
}else{
    $sql = "SELECT * FROM airports order by id asc limit 5  order by $order $orderby;";
}if ($keyword==="") {
    $sql = "SELECT * FROM airports order by id asc limit 5  order by $order $orderby;";
}


/////////////////////////////////
$airports = $obj->sql($sql);
$link = "index.php?keyword=$keyword&field=$field";
?>
    <div id="airports">
        <div class="airports_title">The World Airports</div>
        <div class="airports_search">
            <form>
                <p>
                    <label>Search: </label><input value="<?php echo $keyword;?>" name="keyword"
                        placeholder="Your keyword" type="text">
                    <select name="field">
                        <?php
                        $columns = ['anywhere','city','country'];
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
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGmP8fXsfYCZImDgg5nqOk8wozY3ZxQPAB7cj0z99_f9NDRqcCbGQ26VJYaQo6mh0aR1A&usqp=CAU"></a>
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=id&orderby=desc"><img
                                src="https://pngtree.com/freepng/vector-down-arrow-icon_4184901.html"></a>
                    </th>
                    <th>City
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=city&orderby=asc"><img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGmP8fXsfYCZImDgg5nqOk8wozY3ZxQPAB7cj0z99_f9NDRqcCbGQ26VJYaQo6mh0aR1A&usqp=CAU"></a>
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=city&orderby=desc"><img
                                src="https://pngtree.com/freepng/vector-down-arrow-icon_4184901.html"></a>
                    </th>
                    <th>Country
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=country&orderby=asc"><img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGmP8fXsfYCZImDgg5nqOk8wozY3ZxQPAB7cj0z99_f9NDRqcCbGQ26VJYaQo6mh0aR1A&usqp=CAU"></a>
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=country&orderby=desc"><img
                                src="https://pngtree.com/freepng/vector-down-arrow-icon_4184901.html"></a>
                    </th>
                    <th>Name
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=name&orderby=asc"><img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGmP8fXsfYCZImDgg5nqOk8wozY3ZxQPAB7cj0z99_f9NDRqcCbGQ26VJYaQo6mh0aR1A&usqp=CAU"></a>
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=name&orderby=desc"><img
                                src="https://pngtree.com/freepng/vector-down-arrow-icon_4184901.html"></a>
                    </th>
                    <th>Action</th>
                </tr>
                <?php foreach ($airports as $airport):?>
                <tr>
                    <td><?php echo $airport['id'];?></td>
                    <td data-id="<?php echo $airport['id'];?>" class="airport_city" contenteditable="true">
                        <?php echo $airport['city'];?></td>
                    <td><?php echo $airport['country'];?></td>
                    <td><?php echo $airport['name'];?></td>
                    <td>
                        <button id="airport_<?php echo $airport['id'];?>"
                            class="btn btn-success btn_btn-update airport_<?php echo $airport['id'];?>"
                            type="button">update</button>
                        <a data-id="<?php echo $airport['id'];?>" class="btn btn-danger btn_delete"
                            href="delete.php?id=<?php echo "{$airport['id']}&field=$field&order=$order&orderby=$orderby&keyword=$keyword"?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>

    </div>
    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The World Airports</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="airport2.css">
    <script src="/js/jquery-3.5.1.js"></script>
</head>

<body>
    <?php
$keyword = $_GET['keyword']??null;
$field = $_GET['field']??'country';
require_once "database.php";
$obj = new \Database\database("korea");


$order = $_GET['order']??null;
$orderby = $_GET['orderby']??null;
$field_list = ['id','city','country'];
$orderby_list = ['asc','desc'];

$order = in_array($order,$field_list)?$order:'id';
$orderby = in_array($orderby,$orderby_list)?$orderby:'asc';
exit($order);
if ($keyword){
    if ($field == 'anywhere'){
        $sql = "SELECT * FROM airports WHERE city like '%$keyword%' or country like '%$keyword%' or name like '%$keyword%' order by $order $orderby ;";
    }else{
        $sql = "SELECT * FROM airports WHERE $field like '%$keyword%' order by $order $orderby ;";
    }
}else{
    $sql = "SELECT * FROM airports order by $order $orderby id  limit 5;";
}
$link = "air.clone.php?keyword=$keyword&field=$field";
$airports = $obj->sql($sql);
?>
    <div id="airports">
        <div class="airports_title">The World Airports</div>
        <div class="airports_search">
            <form>
                <p>
                    <label>Search: </label>
                    <input value="<?php echo $keyword;?>" name="keyword" placeholder="Your keyword" type="text">
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

                    <th>ID <a class="btn_asc_desc" href="<?php echo $link;?>&order=name&orderby=asc"><img
                                src="img/btn_arrow_up.png"></a>
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=name&orderby=desc"><img
                                src="img/btn_arrow_down.png"></a>
                    </th>
                    <th>City <a class="btn_asc_desc" href="<?php echo $link;?>&order=name&orderby=asc"><img
                                src="img/btn_arrow_up.png"></a>
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=name&orderby=desc"><img
                                src="img/btn_arrow_down.png"></a>
                    </th>
                    <th>Country <a class="btn_asc_desc" href="<?php echo $link;?>&order=name&orderby=asc"><img
                                src="img/btn_arrow_up.png"></a>
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=name&orderby=desc"><img
                                src="img/btn_arrow_down.png"></a>
                    </th>
                    <th>Name <a class="btn_asc_desc" href="<?php echo $link;?>&order=name&orderby=asc"><img
                                src="img/btn_arrow_up.png"></a>
                        <a class="btn_asc_desc" href="<?php echo $link;?>&order=name&orderby=desc"><img
                                src="img/btn_arrow_down.png"></a>
                    </th>
                    <th class="btn btn-"></th>
                </tr>

                <?php foreach ($airports as $airport):?>
                <div id="cover">
                    <tr>
                        <td><?php echo $airport['id'];?></td>
                        <td><?php echo $airport['city'];?></td>
                        <td><?php echo $airport['country'];?></td>
                        <td><?php echo $airport['name'];?></td>
                    </tr>
                </div>
                <?php endforeach; ?>

        </div>
        </table>
    </div>
    </div>

</body>

</html>
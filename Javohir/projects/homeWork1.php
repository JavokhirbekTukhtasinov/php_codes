<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="homeWork1.css">
</head>

<body>
    <?php
$id = $_GET["id"]??1;
$id = (int) $id;

$cities = [
    0=>[
        'name' => 'Miami',
        'img' => 'https://blog-www.pods.com/wp-content/uploads/2019/08/MG_6_1_Miami.jpg',
        'area' => '143.1 km²',
        'population' => '454,279',
        'timeZone' => ' FL, USA (GMT-4)'
    ],
    1 => [
        'name' => 'Dubai',
        'img' => 'https://www.fairobserver.com/wp-content/uploads/2020/06/Dubai-1.jpg',
         'area' => '4,114 km²',
        'population' => '3.331 million',
        'timeZone' => 'United Arab Emirates (GMT+4)'
    ],
    2 => [
        'name' => 'London',
        'img' => 'https://lp-cms-production.imgix.net/image_browser/london-big-ben.jpg',
        'area' => '1,572 km²',
        'population' => '8.982 million',
        'timeZone' => 'UK (GMT+1)'
    ],
    3 => [
        'name' => 'New York',
        'img' => 'https://cdn.getyourguide.com/img/location/54621e3965f1c.jpeg/88.jpg',
        'area' => '783.8 km²',
        'population' => '8.419 million',
        'timeZone' => 'USA (GMT-4)'
    ],
    4 => [
        'name' => 'Tashkent',
        'img' => 'data:image/jpeg;base64,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',
        'area' => '334.8 km²',
        'population' => '2,571,668',
        'timeZone' => 'Uzbekistan (GMT+5)'
    ],
    5 => [
        'name' => 'Seoul',
        'img' => 'https://image.freepik.com/free-photo/seoul-city-skyline-skyscraper-downtown-seoul-south-korea_174052-72.jpg',
        'area' => '605.2 km²d',
        'population' => '11,733,509',
        'timeZone' => 'Seoul (GMT+9)'
    ],
    6 => [
        'name' => 'Busan',
        'img' => 'https://img.freepik.com/free-photo/gwangalli-beach-busan-south-korea_163782-610.jpg?size=626&ext=jpg&ga=GA1.2.1386113743.1616889600',
        'area' => '770 km²',
        'population' => '3.429 million',
        'timeZone' => 'Busan (GMT+9)'
    ],
    7 => [
        'name' => 'Samarkand',
        'img' => 'https://media-cdn.tripadvisor.com/media/photo-s/17/a1/76/8e/registan.jpg',
        'area' => '120 km²',
        'population' => '579,000',
        'timeZone' => 'Uzbekistan (GMT+5)'
    ]
    ];

$cities_name = $cities[$id]['name'];
$city_img = $cities[$id]['img'];
$city_area = $cities[$id]['area'];
$city_timeZone = $cities[$id]['timeZone'];
$city_population = $cities[$id]['population'];

if ($id>7 || $id<0) {
 $id = 0;
}

?>
    <div class="container">
        <div class="top">
            <a class="btn btn-success button" href="homeWork1.php?id=1">Dubai</a>
            <a class="btn btn-success button" href="homeWork1.php?id=2">London</a>
            <a class="btn btn-success button" href="homeWork1.php?id=3">New York</a>
            <a class="btn btn-success button" href="homeWork1.php?id=4">Tashkent</a>
            <a class="btn btn-success button" href="homeWork1.php?id=5">Seoul</a>
            <a class="btn btn-success button" href="homeWork1.php?id=6">Busan</a>
            <a class="btn btn-success button" href="homeWork1.php?id=7">Samarkand</a>
        </div>

        <div class="middle"><img src="<?php echo $city_img;?>" alt="">
            <section class="info">
                <table>
                    <tr>
                        <td>
                            <p>Area :</p>
                        </td>
                        <td>
                            <p><?php echo $city_area?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Population :</p>
                        </td>
                        <td>
                            <p><?php echo $city_population?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Time zone :</p>
                        </td>
                        <td>
                            <p><?php echo $city_timeZone?></p>
                        </td>
                    </tr>
                </table>
            </section>

        </div>



        <div class="bottom">

            <h2 class="city_name"><?php echo $cities_name;?></h2>
        </div>
    </div>
</body>

</html>
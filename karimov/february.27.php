<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    //the format we are expecting the users to enter --> (123) 4567-8901
    $error_phone = null;
    $error_email = null;
    $phone = $_GET['phone']??NULL;
    $email = $_GET['email']??NULL;
    $pattern = "#^\([0-9]{3}\) [0-9]{4}-[0-9]{4}$#";
    $is_phone_valid = preg_match($pattern,$phone);
    $pattern = "#([a-zA-Z]{2,10})@([a-zA-Z]{10})#";
    $is_email_valid = preg_match($pattern,$email);
    if (!$is_phone_valid){
        $error_phone = " <br><span class='span_phone_error'> Your phone must be in (010) 1234-6789 format</span>";
    }

    if (!$is_email_valid){
        $error_email = " <br><span class='span_phone_error'> Your email must match this format username@mail.com</span>";
    }
    ?>
<div id="results">
    <?php
    var_dump($is_phone_valid);
    ?>
</div>

<div id="form">
    <form>
        <p>
            Phone: <input value="<?=$phone;?>" type="text" name="phone" placeholder="(010) 7446-5883" ">
            <?=$error_phone?>
        </p>

        <p>
            Email: <input value="<?=$email;?>" type="text" name="email" placeholder="azamatjonkarimov@mail.ru" ">
            <?=$error_email?>
        </p>

        <p>
            <button type="reset">Reset</button>
            <button type="submit">Submit</button>
        </p>
    </form>
</div>

<style>
    #results, form{
        width: 80%;
        height: auto;
        background-color: lightgray;
        border: 1px solid black;
        padding: 5px;
        margin: auto;
    }
    .span_phone_error {
        padding: 2px;
        background-color: red;
        color: darkblue;
    }
</style>
</body>
</html>

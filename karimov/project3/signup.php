<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/nav_css.css">
    <link rel="stylesheet" href="css/sign_up.css">
</head>

<body>
    <?php include "header.php";?>
    <div class="container"></div>

    <div class="table-cover">
        <table>
            <tr>
                <td>
                    <lable for="user_name">Username</lable>
                </td>
                <td><input type="text" name="user_name" id="user_name">
                    <button type="submit" name="#">checking username</button>
                </td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" id="password">
                    *Your password must include at least 6 numbers and chatacters
                </td>
            </tr>
            <tr>
                <td>
                    <label for="c_password">Confirm password</label>
                </td>
                <td>
                    <input type="password" name="c_password" id="c_password">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="fname">Firs name</label>
                </td>
                <td><input type="text" name="fname" id="fname"></td>
            </tr>
            <tr>
                <td>
                    <label for="lname">Last name</label>
                </td>
                <td><input type="text" name="lname" id="lnane"></td>
            </tr>
            <tr>
                <td>
                    <label for="phone-number">Phone number</label>
                </td>
                <td><input type="number" name="phone-number"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td><label for="address">Address</label></td>
                <td><input type="text" name="address" id="address"></td>
            </tr>
        </table>
    </div>
    <?php include "footer.php";?>
</body>

</html>
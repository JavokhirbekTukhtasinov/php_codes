<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validate</title>
    <link rel="stylesheet" href="validate.css">
</head>

<body>
    <div class="container">
        <form method="GET" class=" form" id="form">
            <h2>Register With Us</h2>
            <div class="form-control">
                <label for="username">First name</label>
                <input type="text" name='user_first' id="username" placeholder="Enter first name">
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Last name</label>
                <input type="text" name='user_last' id="username" placeholder="Enter last name">
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="text" name='user_email' id="email" placeholder="Enter email">
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" name='password' id="password" placeholder="Enter password">
                <small>Error message</small>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>

    <!-- 
    <script src="validate.js"></script> -->
</body>

</html>
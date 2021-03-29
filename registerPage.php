<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Instagram</title>
    <link rel="stylesheet" href="stylereg.css">
    <link rel="icon" href="./insta.webp">
</head>

<body>
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center mt-5">
            <div class="col-sm-3 text-center">
                <form action="./signup.php" method="POST">
                    <div id="login">
                        <div>
                            <h1 class="display-1">Instagram</h1>
                        </div>
                        <div class="inp">
                            <input type="email" id="user" placeholder="Username or email" name="usern" required><br>
                            <input type="text" id="user" placeholder="First Name" name="firstName" required><br>
                            <input type="text" id="user" placeholder="Last Name" name="lastName" required><br>
                            <input type="password" id="pass" name="passn" placeholder="password" required>
                            <input type="submit" value="Sign Up" id="btn" class="btn btn-primary mt-1">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


























    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
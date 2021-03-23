<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Instagram</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./insta.webp">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 offset-sm-7 text-center">
                <div id="login">
                    <div>
                        <h1 class="display-1">Instagram</h1>
                        <form action="./login.php" method="POST">
                            <input type="email" id="user" placeholder="Username or email" name="usern" required><br>
                            <input type="password" id="pass" name="passn" required placeholder="Password">
                            <input type="submit" value="Log In" id="btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 offset-sm-7 text-center">
                <div id="signUp">

                    <a href="./registerPage.php">
                        <input type="button" value="Sign Up" id="btn2">
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
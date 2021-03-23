<?php


session_start();
if (isset($_SESSION['usern'])) {
} else {

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Instagram</title>
    <link rel="stylesheet" href="styleop.css">
    <link rel="icon" href="./insta.webp">
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="apple">
        <div class="container-fluid">
            <!-- <a class="navbar-brand success" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="insta">

            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">

                        <form action="./end.php" method="POST">
                            <input type="submit" value="logout" class="navbar-brand" aria-current="page" id="logout">
                        </form>
                    </li>
                    <div class="mx-auto order-2">

                    </div>

                </ul>

                <div class="profilePic" style="margin-right: 1em; border-radius: 50%;">

                </div>
                <a href="#" class="navbar-brand">
                    <?php echo $_SESSION['usern'] ?>
                </a>

            </div>
        </div>
    </nav>
    <div class="container-fluid ">
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-12 m-1">
                <form action="./test.php" method="POST" enctype="multipart/form-data">
                    <div class="postData">
                        <textarea name="share" id="data" cols="30" rows="10" class="form-control" placeholder="Create post...." required></textarea><br>
                        <label id="fileSpan">
                            <input type="file" name="image" class="block" required>
                            Choose file
                        </label>
                        <input type="submit" value="Post" class="btn btn-primary" id="sub">
                    </div>
                </form>
                <br><br>
            </div>
        </div>

    </div>




    <!-- for ($i = 0; $i < sizeof($collection); $i++) {
        } -->
    <?php
    include("./connection.php");
    $conn = serverQuery("SELECT * from `posts` order by id desc");

    $num = mysqli_num_rows($conn);
    if ($num > 0) {
        while ($filter = mysqli_fetch_assoc($conn)) {

    ?>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-lg-6 col-md-12">
                        <div class="card" id="cardd">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $filter['email'] ?></h5>
                                <p class="card-text"><?php echo $filter['caption'] ?></p>
                                <p class="card-text"><small class="text-muted"><?php echo " last Updated at " . $filter['time'] ?></small></p>
                            </div>
                            <img src="<?php echo $filter['image'] ?>" class="card-img-bottom" alt="<?php echo $filter['caption']; ?>">
                            <div class="like">
                                <div class="d-flex justify-content-end align-items-center">
                                    <label class="lead mx-3"><?php echo $filter['likes'] ?></label>

                                    <a href="like.php?id=<?php echo $filter['ID'] ?>">
                                        <input type="button" value="Like" class="lead btn btn-info">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>

    <?php
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>
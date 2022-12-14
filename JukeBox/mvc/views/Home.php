<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="./public/css/style.css">
    <!-- Icon -->
    <script src="https://kit.fontawesome.com/972cc7adb8.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="side-bar col-sm-3 col-md-3 d-flex justify-content-center align-items-center flex-column">
                <div class="logo">
                    <img src="./public/images/logo1.png" alt="Logo">
                    <h4>Music for Free</h4>
                </div>
                <hr>
                <ul class="side-menu list-unstyled">
                    <li class="active"><a href="#"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li class=""><a href="#"><i class="fa-solid fa-fire"></i> Popular</a></li>
                    <li class=""><a href="#"><i class="fa-solid fa-list"></i> Playlist</a>
                        <ul class="sub-list">
                            <li><a href="">Daily Mix</a></li>
                            <li><a href="">My Playlist</a></li>
                        </ul>
                    </li>
                    <li id="ranking-board" class="">
                        <h5 class=""><i class="fa-solid fa-trophy"></i> Ranking Board</h5>
                        <a href="" class="">See more ></a>
                    </li>
                </ul>

            </div>
            <div class="content col-sm-9 col-md-9">

            </div>
        </div>
    </div>
</body>
</html>
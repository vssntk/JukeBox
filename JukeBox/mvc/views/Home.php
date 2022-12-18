<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="./public/css/style.css">
    <!-- Icon -->
    <script src="https://kit.fontawesome.com/972cc7adb8.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="side-bar col-sm-3 col-md-3 col-lg-3 d-flex flex-column align-items-center" style="height: 100vh">
            <div class="logo">
                <img src="./public/images/logo2.png" alt="Logo">
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
                <li id="ranking-board row" class="">
                    <h5 class="col-sm-12 p-0 m-0"><i class="fa-solid fa-trophy"></i> Ranking Board</h5>
                    <ul id="rankingList" class="list-unstyled" style="color: #000;">
                        <li class="songItem d-flex flex-row align-items-center" style="width: fit-content;">
                            <span>01</span>
                            <img src="./public/images/unnamed.png" alt="Alan" style="width:50px; height:50px;">
                            <a href="#" class="p-0 m-0">
                                <h5 class="fs-5">
                                    On My Way
                                    <div class="subtitle fs-6">Alan Walker</div>
                                </h5>
                            </a>
                            <a href="" class="fs-4">
                                <i class="fa-regular fa-circle-play"></i>
                            </a>
                        </li>
                    </ul>
                    <a href="" class="col-sm-12 p-0 m-0">See more ></a>
                </li>
            </ul>

        </div>
        <div class="col-sm-9 col-md-9 col-lg-9" id="content">
            <nav class="navbar">
                <div class="container-fluid p-0">
                    <a href="#" class="fs-4 btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btnCategory">Category</a>
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search Music...">
                    </div>
                    <div class="user">
                        <a href="/JukeBox/JukeBox/SignupController">
                            <button class="btn btn-success">Sign Up</button>
                        </a>
                        <a href="/JukeBox/JukeBox/LoginController" class="fs-4">
                            <button class="btn btn-primary"><i class="fa-solid fa-circle-user"></i> Login</button>
                        </a>
                    </div>
                </div>
            </nav>
            <div id="carouselExampleCaptions" class="carousel slide m-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" id="imgSlide">
                    <div class="carousel-item active">
                        <img src="./public/images/BadLiar.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/images/Bones.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/images/CountingStars.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <h3 style="color: #fff;"><i class="fa-solid fa-music"></i> New Song:</h3>
            <div class="card d-flex justify-content-center align-items-center" style="width: fit-content;">
                <img src="./public/images/unnamed.png" class="card-img-top" alt="..." style="width:100px; height:100px;">
                <div class="card-img-overlay d-flex align-items-start justify-content-center" id="imgOverplay">
                    <a href="#" class="fs-1"><i class="fa-regular fa-circle-play"></i></a>
                </div>
                <div class="card-body">
                    <h6 class="card-title fs-5">Name Song </h6>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="fs-4 list-unstyled d-flex flex-row" id="categoryList">
                        <li><a href="">US-UK</a></li>
                        <li><a href="">Vpop</a></li>
                        <li><a href="">Kpop</a></li>
                        <li><a href="">Cpop</a></li>
                        <li><a href="">Jpop</a></li>
                    </ul>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
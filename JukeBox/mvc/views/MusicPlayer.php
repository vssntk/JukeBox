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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="./public/css/MusicPlayer.css">
    <!-- Icon -->
    <script src="https://kit.fontawesome.com/972cc7adb8.js" crossorigin="anonymous"></script>
    <title>MusicPlayer</title>
</head>
<body class="d-flex flex-row">
    <div class="side-menu">
        <div class="logo">
            <img src="./public/images/logo2.png" alt="Logo">
        </div>
        <h3>Playlist</h3>
        <ul class="playlist list-unstyled">
            <li class="playlist-item d-flex flex-row align-items-center m-2">
                <img src="./public/images/BadLiar.jpg" alt="Alan" style="width:50px; height:50px;">
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
            <li class="playlist-item d-flex flex-row align-items-center m-2">
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
            <li class="playlist-item d-flex flex-row align-items-center m-2">
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
        <a href=""><button class="createList btn btn-outline-primary">New Playlist</button></a>
    </div>
    <div class="content">
        <nav class="navbar">
            <div class="container-fluid p-0">
                <a href="#" class="categoryBtn fs-4" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btnCategory">Category</a>
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
        <div class="container">
            <div class="music-content row">
                <div class="music-player col-sm-12 col-md-5">
                    <div class="music-image">
                        <img src="./public/images/BadLiar.jpg" alt="Music Image">
                    </div>
                    <h4>Bad Liar</h4>
                    <h6>Imagine Dragon</h6>
                    <div class="seekBar">
                        <span>00:00</span>
                        <input id="dur" type="range" name="rng" min="0" step="0.25" value="0" style="width: 200px">
                        <span>00:00</span>
                    </div>
                    <div class="socialButton">
                        <a href="" class="fs-1"><i class="fa-solid fa-share-nodes "></i></a>
                        <a href="" class="fs-1"><i class="fa-regular fa-circle-play "></i></a>
                        <a href="" class="fs-1"><i class="fa-solid fa-heart "></i></a>
                    </div>
                </div>
                <div class="music-list col-sm-12 col-md-7">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Song Name</th>
                                <th scope="col">Singer</th>
                                <th scope="col">Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="active">
                                <th scope="row">1</th>
                                <td><a href="">Bad Liar</a></td>
                                <td><a href="">Imagine Dragon</a></td>
                                <td>04:30</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h4>Related Music</h4>
                <div class="card d-flex justify-content-center align-items-center" style="width: fit-content;">
                    <img src="./public/images/unnamed.png" class="card-img-top" alt="..." style="width:150px; height:150px;">
                    <div class="card-body d-flex flex-row align-items-center">
                        <h6 class="card-title fs-5">Name Song </h6>
                        <a href="#" class="fs-1"><i class="fa-regular fa-circle-play"></i></a>
                    </div>
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
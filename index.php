<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pictures Que</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/6703/6703279.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-md bg-dark justify-content-center">
        <div class="container">
            <a href="#" class="navbar-brand d-flex w-50 me-auto">Pictures Que</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar3">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
                <ul class="navbar-nav w-100 justify-content-start">
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Categories </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#dark">Dark</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#wildlife">Wildlife</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact-Us</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/nature1.jpg" class="d-block w-100" alt="nature1">
            </div>
            <div class="carousel-item">
            <img src="images/nature2.jpg" class="d-block  w-100" alt="nature2">
            </div>
            <div class="carousel-item">
            <img src="images/nature3.jpg" class="d-block w-100" alt="nature4">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <a id="dark">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Dark</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/dark5.png" class="img-fluid pb-3" alt="dark2">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/dark22.jpg" class="img-fluid pb-3" alt="dark2">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/dark111.JPG" class="img-fluid pb-3" alt="dark2">
                </div>
            </div>
        </div>
    </section>
    </a>

    <a id="wildlife">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Wildlife</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/m1.jpg" class="img-fluid pb-3" alt="dark2">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/m2.jpg" class="img-fluid pb-3" alt="dark2">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/m3.JPG" class="img-fluid pb-3" alt="dark2">
                </div>
            </div>
        </div>
    </section>
    </a>

    <a id="contact">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Contact-Us</h2>
        </div>

        <div class="w-50 m-auto">
            <form action="about.php" method="post">
                <div class="form-group">
                    <label>Name: </label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email: </label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Number: </label>
                    <input type="text" name="number" class="form-control">
                </div>
                <button type="submit" class="btn submit btn-dark">Submit</button>
            </form>
        </div>
    </section>
    </a>

    <a id="about">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">About</h2>
        </div>

        <div class="container-fluid">
            <h3 class="text-center">Amit Chatriki</h3><br>
            <p class="text-center">I am a passionate photograher interested in working nature and travel photography</p>
        </div>
    </section>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
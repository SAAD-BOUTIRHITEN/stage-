<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="bos.js"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a style="font-size: 35px; font-weight: bold;" class="navbar-brand" href="#">Dalia <span
                    style="color: #f9004d;font-size: 35px;">Food</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">statement</a>
                    </li>

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            activites
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">service</a></li>
                            <li><a class="dropdown-item" href="#">product</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">omething else h</a></li>
                        </ul>
                    </li>-->
                    <li class="nav-item">
                        <a href="log.php" class="nav-link  btn btn-danger rounded-pill">Login</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container m-3">
        <div class="row">
            <div class="col-lg-8">
                <div class="jumbotron bg-light">
                    <h1 style="font-weight: bold;" class="display-4 text-danger">DALIA FOOD</h1>
                    <p class="lead">Depuis sa création Dalia n’a cessé de développer et d’optimiser ses infrastructures
                        et processus pour répondre au mieux aux attentes de ses clients et consommateurs. </p>
                    <hr class="my-4">
                    <p>Ces efforts sont aujourd’hui récompensés avec l’obtention des certifications qualité ISO….</p>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-danger" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item d-flex justify-content-between align-items-start bg-danger">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Farines & Semoules</div>
                            Les farines et semoules Dalia,
                        </div>
                        <span class="badge bg-primary rounded-pill">10</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Pâtes Alimentaires</div>
                            Trucs & astuces
                        </div>
                        <span class="badge bg-primary rounded-pill">10</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Couscous</div>
                            Tradition Marocaine
                        </div>
                        <span class="badge bg-primary rounded-pill">10</span>
                    </li>
                </ol>
            </div>


        </div>
    </div>
    <!-- carda -->
    <div class="container">
        <div class="text-center m-5">
            <h2 style="font-size: 60px;">Our<span style="color: #f9004d;">Products</span></h2>
            <h5 style="font-weight: bold;">les produits</h5>
        </div>
        <div class="row">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div style="border-radius: 13px;" class="card bg-light">
                        <i style=" font-size: 35px;  display: block; text-align: center;margin: 25px 0px;color: #f9004d;"
                            class="fa-solid fa-wheat-awn"></i>
                        <div class="card-body">
                            <h5 style=" color: rgba(0, 110, 174, 0.8);font-weight: bold;" class="card-title">Farines &
                                semoules</h5>
                            <p class="card-text">Les farines et semoules Dalia, idéales pour toutes vos recettes !.
                                Une gamme large de farines et semoules pour
                                préparer toutes sortes de plats : pains, gâteaux, pâtisseries, ….</p>
                        </div>
                        <button type="button" class="btn btn-warning">Read more</button>
                    </div>
                </div>
                <div class="col">
                    <div style="border-radius: 13px;" class="card bg-light">
                        <i style=" font-size: 35px;  display: block; text-align: center;margin: 25px 0px;color: #f9004d;"
                            class="fa-solid fa-bowl-rice"></i>
                        <div class="card-body">
                            <h5 style=" color: rgba(0, 110, 174, 0.8);font-weight: bold;" class="card-title">Couscous
                            </h5>
                            <p class="card-text">>Au Maroc, plusieurs recettes existent, du couscous aux fruits secs au
                                couscous au poisson
                                en passant
                                par le fameux couscous aux 7 légumes. Ce dernier est très certainement le couscous...
                            </p>
                        </div>
                        <button type="button" class="btn btn-warning">Read more</button>
                    </div>
                </div>
                <div class="col">
                    <div style="border-radius: 13px;" style="height: 320px;" class="card bg-light">
                        <i style=" font-size: 35px;  display: block; text-align: center;margin: 25px 0px;color: #f9004d;"
                            class="fa-solid fa-bacon"></i>
                        <div class="card-body">
                            <h5 style=" color: rgba(0, 110, 174, 0.8);font-weight: bold;" class="card-title">Les Pates
                            </h5>
                            <p class="card-text">Les pates Dalia sont fabriquées à base de 100% de semoules
                                de blé dur avec une technique italienne, qui leur donne cette
                                saveur et ce goût si particuliers.</p>
                        </div>
                        <button type="button" class="btn btn-warning">Read more</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="container p-3">
        <div class="text-center m-5">
            <h2 style="font-size: 60px;">Dalia<span style="color: #f9004d;">food</span></h2>

        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="border-radius:12px ;" src="dd1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img style="border-radius:12px ;" src="ddd3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img style="border-radius:12px ;" src="dddde.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="container">
        <div class="text-center m-5">
            <h2 style="font-size: 60px;">Dalia<span style="color: #f9004d;">contact</span></h2>

        </div>
        <div class="card mb-3">
            <div class="row g-0">

                <div class="col">
                    <div style="border-radius: 13px;" class="card-body">
                        <h5 class="card-title">contact</h5>

                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">message</label>
                                <textarea class="form-control"></textarea>
                            </div>

                            <button type="submit" class="btn btn-info">send</button>
                        </form>
                    </div>
                </div>
                <div class="col">
                    <img src="d2.jpg" class="img-fluid rounded-start" alt="...">
                </div>
            </div>
        </div>
    </div>


    <!--footer-->
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-white text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 link-grayish">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 link-grayish">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 link-grayish">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 link-grayish">
                    <i class="fab fa-instagram"></i>
                </a>

            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3 text-grayish"></i>Company name
                        </h6>
                        <p>
                            Dalia Group is a reference player in Morocco, which contributes strongly to the development
                            of the food sector
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Farines</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">couscous</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">les pates</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->

                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3 text-grayish"></i> Dalia corp. Lot 46,

                            Zone Industrielle Du Sahel,

                            HAD SOUALEM Province De Settat</p>
                        <p>
                            <i class="fas fa-envelope me-3 text-grayish"></i>
                            export@dalia.ma
                        </p>
                        <p><i class="fas fa-phone me-3 text-grayish"></i> +(212) 522-96-44-64</p>
                        <p><i class="fas fa-print me-3 text-grayish"></i> +(212) 522-96-44-62</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">SAAD BOUTIRHITEN</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>

</html>
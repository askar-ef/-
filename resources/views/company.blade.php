<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;0,900;1,400;1,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;0,900;1,400;1,600&display=swap" rel="stylesheet" />
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }

        body {
            opacity: 0;
            /* Mulai dengan keadaan awal transparan */
            transition: opacity 0.5s ease-in;
            /* Tambahkan efek transisi */
        }

        .card-img-top {
            height: 300px;
            object-fit: cover;
        }

        .lala {
            display: flex;
        }

        .p-1 {
            align-self: center;
        }

        .my-element {
            background-image: url("Desktop - 3.png");
            background-size: cover;
            background-position: center;
        }

        .popup-container {
            display: none;
            position: fixed;
            bottom: 80px;
            right: 20px;
            width: 250px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0 3);
            z-index: 9999;
        }

        .toggle-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px;
            background-color: #ccc;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            z-index: 9999;
        }
    </style>
    <script>
        window.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                document.body.style.opacity =
                    "1"; /* Mengubah keadaan ke opasitas penuh setelah beberapa waktu */
            }, 1000); /* Ubah 1000 menjadi jumlah milidetik yang Anda inginkan sebelum munculnya transisi fade-in */
        });
    </script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #eec27fae">
        <div class="container-fluid">
            <a class="navbar-brand fs-3 fw-bold ms-2" href="#">
                <img src="https://cdn.onlinewebfonts.com/svg/img_94963.png" alt="" width="30" height="30" class="d-inline-block align-text-top" />
                Pating</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    Creating inspired interiors that captivate.
                </span>
            </div>
        </div>
    </nav>
    <main>
        <h1 class="visually-hidden">Heroes examples</h1>
        <div class="px-4 py-5 text-center my-element">
            <img class="d-block mx-auto mb-4" src="image/askar.png" alt="" width="300" height="300" style="object-fit: cover; object-position: center" />
            <h1 class="display-5 fw-bold text-body-emphasis">
                Petra Aszman Minerva
            </h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">
                    Welcome to My Personal Branding! I'm thrilled to introduce myself as
                    a Senior Interior Designer who is passionate about creating warm,
                    modern, and minimalistic spaces. If you're looking to transform your
                    living or working environment into a cozy yet stylish sanctuary,
                    you've come to the right place.
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-lg px-4 gap-3" style="background-color: #eec27fae">
                        Know more
                        <a class="icon-link icon-link-hover" href="#" style="color: #000000">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                            </svg>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </main>

    <!-- carousel -->
    <div class="container text-center">
        <div class="row">
            <div class="col-md-7">
                <div id="carouselExampleCaptions" class="carousel slide p-1">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://www.idesignarch.com/wp-content/uploads/Seogwipo-si-South-Korea-Guest-House_5.jpg" class="d-block w-100" alt="..." />
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Dreamscape Designs</h5>
                                <p>
                                    Transforming spaces into dreamscapes that evoke wonder and
                                    inspire creativity.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.idesignarch.com/wp-content/uploads/Seogwipo-si-South-Korea-Guest-House_5.jpg" class="d-block w-100" alt="..." />
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>
                                    Some representative placeholder content for the second
                                    slide.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.idesignarch.com/wp-content/uploads/Seogwipo-si-South-Korea-Guest-House_5.jpg" class="d-block w-100" alt="..." />
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>
                                    Some representative placeholder content for the third slide.
                                </p>
                            </div>
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
            </div>
            <div class="col-md-5 align-self-center fs-5">
                <div class="d-flex justify-content-left">
                    <p>
                        Discover the magic of space through our artistic approach to
                        architecture and interior design, creating captivating
                        environments that inspire and reflect your unique aesthetic.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- card -->

    <div class="card-group p-5">
        <div class="card">
            <img src="https://www.idesignarch.com/wp-content/uploads/Seogwipo-si-South-Korea-Guest-House_5.jpg" class="card-img-top img-fluid" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                    This is a wider card with supporting text below as a natural lead-in
                    to additional content. This content is a little bit longer.
                </p>
            </div>
            <div class="card-footer">
                <small class="text-body-secondary">Bogor, Indonesia</small>
            </div>
        </div>

        <div class="card">
            <img src="https://mir-s3-cdn-cf.behance.net/project_modules/1400_opt_1/b6241664644399.5ad8cafc6efe8.jpg" class="card-img-top img-fluid" alt="..." />
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                    This card has supporting text below as a natural lead-in to
                    additional content.
                </p>
            </div>
            <div class="card-footer">
                <small class="text-body-secondary">Jakarta, Indonesia</small>
            </div>
        </div>
        <div class="card">
            <img src="https://i.pinimg.com/originals/67/19/30/671930df00fa58d959743e72b89a22e8.jpg" class="card-img-top" alt="..." />
            <div class="card-body img-fluid">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                    This is a wider card with supporting text below as a natural lead-in
                    to additional content. This card has even longer content than the
                    first to show that equal height action.
                </p>
            </div>
            <div class="card-footer">
                <small class="text-body-secondary">Gading Serpong, Indonesia</small>
            </div>
        </div>
    </div>

    <!-- order -->
    <button class="toggle-btn btn btn-primary">Toggle</button>
    <div class="popup-container bg-light">
        <h2>ORDERS</h2>
        <form method="post" action="orders.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required />
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required />
            </div>
            <div class="form-group">
                <label for="size">Size:</label>
                <input type="text" class="form-control" id="size" name="size" required />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- footer -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">© 2023 PetrStrap, Inc</span>
        </div>
    </footer>

    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        const toggleBtn = document.querySelector(".toggle-btn");
        const popupContainer = document.querySelector(".popup-container");

        toggleBtn.addEventListener("click", (event) => {
            event.preventDefault();
            if (popupContainer.style.display === "block") {
                popupContainer.style.display = "none";
            } else {
                popupContainer.style.display = "block";
            }
        });

        document.addEventListener("click", (event) => {
            if (
                !toggleBtn.contains(event.target) &&
                !popupContainer.contains(event.target)
            ) {
                popupContainer.style.display = "none";
            }
        });
    </script>
</body>

</html>
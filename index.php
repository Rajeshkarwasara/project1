<?php 
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <style>
        .a1 {
            width: 100% !important;
            border: none !important;
        }


        a,
        h3 {
            display: inherit;

        }


        .col-lg.col-3 img {
            width: 59% !important;
            height: 99px !important;
        }

        .releted {
            font-size: 22px !important;
            font-weight: 600 !important;
            margin-top: 20px !important;
        }
    </style>


</head>

<body>


    <?php include "header.php"; ?>



    <div class="container-fluid p-0 m-0">

        <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/random/300x300/?gym woman" class="d-block w-100" alt="..."
                        style="height: 600px;">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/random/300x300/?gym girl" class="d-block w-100" alt="..."
                        style="height: 600px;">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/random/300x300/?gym girles" class="d-block w-100" alt="..."
                        style="height: 600px;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>






    <div class="container text-center my-5">
        <h2 class="text-warning lh-lg">Introduction</h2>
        <p class="text-primary lh-lg fs-5">Suspendisse ut magna vel velit cursus tempor ut nec nunc maruis vehicula <br>
            augue in tincidunt porta, purus ipsum blandit massa.
        </p>
    </div>
    <div class="container d-flex justify-content-between my-5">

        <div class="card" style="width: 23%;">
            <img src="img1/1.jpg" class="card-img-top" alt="gym1stimge">
            <div class="card-body">
                <h5 class="card-title text-warning">Lorem ipsum dolor #1</h5>
                <p class="card-text"> that justifies statement is that gym has long been associated with healthy
                    lifestyle.</p>
                <a href="" class="btn btn-warning text-light">DETAIL</a>

            </div>
        </div>
        <div class="card" style="width: 23%;">
            <img src="img1/2.jpg" class="card-img-top" alt="gym1stimge">
            <div class="card-body">
                <h5 class="card-title text-warning">Lorem ipsum dolor #2</h5>
                <p class="card-text">You can build strength elsewhere developing it there.
                    CSCS, a trainer,

                </p>
                <a href="" class="btn btn-warning text-light">READ MORE </a>

            </div>
        </div>
        <div class="card" style="width: 23%;">
            <img src="img1/3.jpg" class="card-img-top" alt="gym1stimge">
            <div class="card-body">
                <h5 class="card-title text-warning">Lorem ipsum dolor #3</h5>
                <p class="card-text">this fitness you a specific objective to concentrate on as you begin
                    strength training.
                </p>
                <a href="" class="btn btn-warning text-light">DETAIL</a>

            </div>
        </div>
        <div class="card" style="width: 23%;">
            <img src="img1/4.jpg" class="card-img-top" alt="gym1stimge">
            <div class="card-body">
                <h5 class="card-title text-warning">Lorem ipsum dolor #4</h5>
                <p class="card-text">When many of us set a health or fitness goal, think to consult on
                    the subject.</p>
                <a href="" class="btn btn-warning text-light">READ MORE</a>

            </div>
        </div>


    </div>







    <div class="container my-4">
        <div class="row">
            <div class="col-6">
                <h2 class="text-warning">Pellentesque fermentum mauris et posuere</h2>
                <p class="text-primary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores, fuga.</p>
                <div class="card a1" style="width: 18rem;">
                    <img src="img1/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text  text-primary">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptas ea
                            ratione veritatis alias delectus quidem amet illum atque et quas, id quod, nulla reiciendis
                            ullam porro,
                            voluptates expedita officiis accusamus!</p>
                        <p class="card-text text-primary">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptas ea
                            ratione veritatis alias delectus quidem amet illum atque et quas, id quod, nulla reiciendis
                            ullam porro,
                            voluptates expedita officiis accusamus!</p>
                        <p class="card-text text-primary">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptas ea
                            ratione veritatis alias delectus quidem amet illum atque et quas, id quod, nulla </p>

                        <a href="#" class="btn btn-warning">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <h3 class="text-warning">Categories</h3>
                        <a href="">rfksidejdcxsj</a>
                        <a href="">smxkcjsicxdxsc</a>
                        <a href="">xssxddsxwsdik</a>
                        <a href="">sxxxiwdei</a>
                        <a href="">cskxscsccs</a>

                    </div>
                    <div class="col-6">
                        <h3 class="text-warning">Usefull Links</h3>
                        <a href="">rfksidejdcxsj</a>
                        <a href="">smxkcjsicxdxsc</a>
                        <a href="">xssxddsxwsdik</a>
                        <a href="">sxxxiwdei</a>
                        <a href="">cskxscsccs</a>

                    </div>



                    <div class="container">
                        <h5 class="text-warning releted">Related Posts</h5>
                        <div class="row mt-3">
                            <div class="col-4">
                                <img src="img1/2.jpg" alt="" class="w-100" style="height: 70%;">
                            </div>
                            <div class="col-8">
                                <h5 class="text-warning-emphasis"> Lorem ipsum dolar</h5>
                                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                                    fugit incidunt ipsum
                                    vel, officia
                                    quod odio voluptates tempore exercitationem! Tenetur tempore debitis illo corrupti
                                    voluptate itaque
                                    iure velit provident in.</p>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img src="img1/3.jpg" alt="" class="w-100" style="height: 70%;">
                            </div>
                            <div class="col-8">
                                <h5 class="text-warning-emphasis"> Lorem ipsum dolar</h5>
                                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                                    fugit incidunt ipsum
                                    vel, officia
                                    quod odio voluptates tempore exercitationem! Tenetur tempore debitis illo corrupti
                                    voluptate itaque
                                    iure velit provident in.</p>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img src="img1/4.jpg" alt="" class="w-100" style="height: 70%; ">
                            </div>
                            <div class="col-8">
                                <h5 class="text-warning-emphasis "> Lorem ipsum dolar</h5>
                                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                                    fugit incidunt ipsum
                                    vel, officia
                                    quod odio voluptates tempore exercitationem! Tenetur tempore debitis illo corrupti
                                    voluptate itaque
                                    iure velit provident in.</p>
                                <hr>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>






    <footer class="bg-dark">
        <div class="container">
            <div class="container d-flex align-items-center  " style="height: 430px;">


                <div class="row ">



                    <div class="col  text-white  ">


                        <h5 class="text-warning mb-4">prion eu posuere felis</h5>

                        <div class="card " style="width: 16rem;">
                            <p class="px-3">Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit. Eius dolorem, suscipit
                                perspiciatis similique deleniti est.
                            </p>
                            <p class="px-3">Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Totam, quae!
                            </p>
                            <h5 class="text-dark px-3">Danny Egg (Executive)</h5>
                        </div>
                        <p class=" mt-5"><a href="" class="text-white "
                                style="list-style: none; font-size: 15px;">Copyright
                                2016 Your Company Name</a></p>

                    </div>

                    <div class="col text-center">

                        <h5 class="text-warning mb-4 ">Nulla tortor dolor</h5>
                        <p><a href="" class="text-warning">Lorem ipsum dolor si</a></p>
                        <p><a href="" class="text-warning">Lorem ipsum dolor si</a></p>
                        <p><a href="" class="text-warning">Lorem ipsum dolor si</a></p>
                        <p><a href="" class="text-warning">Lorem ipsum dolor si</a></p>
                        <p><a href="" class="text-warning">Lorem ipsum dolor si</a></p>
                        <p><a href="" class="text-warning">Lorem ipsum dolor si</a></p>

                    </div>


                    <div class="col">
                        <h5 class="text-warning mb-4">Etiam mollis ornare</h5>
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur ,
                            adipisicing elit. Totam, quae!
                        </p>
                        <hr style=" border: 1px solid white;; ">
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur ,
                            adipisicing elit. Totam, quae!
                        </p>
                        <hr style=" border: 1px solid white; ">
                        <p class="text-white">Lorem ipsum dolor sit amet consectetur ,
                            adipisicing elit. Totam, quae!
                        </p>
                        <hr style=" border: 1px solid white; ">

                        <a href="" target="_blank"><button class="btn  btn-secondary " type="submit">READ
                                MORE</button>
                        </a>

                    </div>
                    <div class="col">
                        <h5 class="text-warning mb-4">Etiam mollis ornare</h5>
                        <div class="row">
                            <div class="col mb-1">
                                <img src="img1/1.jpg" alt="" style="width: 30%; height: 45px;">
                                <img src="img1/3.jpg" alt="" style="width: 30%; height: 45px;">
                                <img src="img1/3.jpg" alt="" style="width: 30%; height: 45px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col  ">
                                <img src="img1/4.jpg" alt="" style="width: 30%; height: 45px;">
                                <img src="img1/1.jpg" alt="" style="width: 30%; height: 45px;">
                                <img src="img1/2.jpg" alt="" style="width: 30%; height: 45px;">
                            </div>
                        </div>
                        <p class="text-white mt-4 ">Lorem ipsum dolor sit amet consectetur ,
                            adipisicing elit. Totam, quae!
                        </p>
                        <a href="" target="_blank"><button class="btn  btn-secondary" type="submit">BROWSE</button></a>
                    </div>
                </div>
            </div>
        </div>

    </footer>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
  
</body>

</html>
<?php
include "navbar.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        #carouselExampleAutoplaying .carousel-item img {
            object-fit: contain;
            object-position: center;
            overflow: hidden;
            height: 70vh;
        }

        #carouselExampleAutoplaying .carousel-item:before {
            content: "";
            background-image:
                linear-gradient(to bottom,
                    transparent, rgba(0, 0, 0, 0.5));
            display: block;
            position: absolute;
            top: 0;
            width: 100vw;
            height: 70vh;
        }

        .carouselExampleAutoplaying  .carousel-inner .carousel-item img{
            height: 40vh;
        }
    </style>
</head>

<body>
    <div class="slider">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Static\Slider\customer.jpg" class="d-block w-100" alt="internet loss" >
                </div>
                <div class="carousel-item">
                    <img src="Static\Slider\insurance.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="Static\Slider\wpos 1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="Static\Slider\wpos 2.png" class="d-block w-100" alt="...">
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

</body>

</html>
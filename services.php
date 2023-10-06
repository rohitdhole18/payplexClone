<?php
include "slider.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");

        .container {
            display: flex;
            justify-content: center;
        }

        #our {
            color: #4F7942;
            float: left;
            font-weight: bold;
            font-size: 35px;
            line-height: 55px;
        }

        #serv {
            padding: 0px 15px;
            font-weight: bold;
            font-size: 35px;
            line-height: 55px;
        }

        .box .card-body {
            text-align: center;
            margin: 10px;
            padding: 10px;

        }

        .card {
            margin: 20px 23px;
            box-shadow: 0px 0px 10px grey;
        }

        .box .card-body h5 {
            margin: 25px 0 15px;
            display: block;
            font-size: 16px;
            line-height: 1.2em;
            font-weight: bold;
        }

        .cardsContainer {
            background:linear-gradient( #ffffff 19%, #FFBF00 61%, #FF5F1F 100%);

            display: flex;
            flex-wrap: wrap;
            align-content: space-between;
        }

        .box .card-body i {
            color: #DAA520;
            font-size: 40px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <p id="our">OUR </p>
        <p id="serv">SERVICES</p>
    </div>
    <div class="cardsContainer">
        <div class="box">
            <div class="card" style="width: 16rem;">
                <div class="card-body">
                    <i class="bi bi-bank"></i>
                    <h5 class="card-title">Banking Service</h5>
                    <a href="#" class="btn btn-primary">Know more</a>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="card" style="width: 16rem;">
                <div class="card-body">
                    <i class="bi bi-calculator-fill"></i>
                    <h5 class="card-title">Kiosk Self(Digi Cash)</h5>
                    <a href="#" class="btn btn-primary">Know more</a>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="card" style="width: 16rem;">
                <div class="card-body">
                    <i class="fa-solid fa-b">B</i>
                    <!-- <img src="Static\servicesSVG\b2c.png" alt="" width="50px" height="60px" style="color: aqua;"> -->
                    <h5 class="card-title">B2C Service</h5>
                    <a href="#" class="btn btn-primary">Know more</a>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="card" style="width: 16rem;">
                <div class="card-body">
                    <i class="bi bi-airplane"></i>
                    <h5 class="card-title">Travel Service</h5>
                    <a href="#" class="btn btn-primary">Know more</a>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="card" style="width: 16rem;">
                <div class="card-body">
                    <i class="bi bi-bag"></i>
                    <h5 class="card-title">Taxation</h5>
                    <a href="#" class="btn btn-primary">Know more</a>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="card" style="width: 16rem;">
                <div class="card-body">
                    <i class="bi bi-hand-index"></i>
                    <h5 class="card-title">Government Services</h5>
                    <a href="#" class="btn btn-primary">Know more</a>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="card" style="width: 16rem;">
                <div class="card-body">
                    <i class="bi bi-bag-plus-fill"></i>
                    <h5 class="card-title">Insurance</h5>
                    <a href="#" class="btn btn-primary">Know more</a>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="card" style="width: 16rem;">
                <div class="card-body">
                    <i class="bi bi-journals"></i>
                    <h5 class="card-title">Education</h5>
                    <a href="#" class="btn btn-primary">Know more</a>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="card" style="width: 16rem;">
                <div class="card-body">
                    <i class="bi bi-telephone-fill"></i>
                    <h5 class="card-title">Telephony</h5>
                    <a href="#" class="btn btn-primary">Know more</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/1efcfc8c55.js" crossorigin="anonymous"></script>
</body>

</html>
<?php
include "services.php";
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

        .cardsContainerThis .card {
            border-radius: 30px 30px;
            margin: 20px 23px;
            box-shadow: 0px 0px 10px #80808057;
        }

        .cardsContainerThis .box .card-body h5 {
            margin: 25px 0 15px;
            display: block;
            font-size: 16px;
            line-height: 1.2em;
            font-weight: bold;
        }

        .cardsContainerThis {

            display: flex;
            flex-wrap: wrap;
            align-content: space-between;
        }

        .cardsContainerThis .box .card-body i {
            color: #DAA520;
            font-size: 40px;
            display: inline-block;
        }
        .cardsContainerThis .box{
            margin:7px;
        }
        .cardsContainerThis{
             background: rgb(239, 239, 239);
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <p id="our">WHY </p>
        <p id="serv">INDIAEON</p>
    </div>
    <div class="cardsContainerThis">
        <div class="box">
            <div class="card" style="width: 12rem;">
                <div class="card-body">
                <i class="bi bi-shield-shaded"></i>
                    <h5 class="card-title">Strongest Security</h5>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="card" style="width: 12rem;">
                <div class="card-body">
                <i class="bi bi-send"></i>
                    <h5 class="card-title">Fast Service</h5>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="card" style="width: 12rem;">
                <div class="card-body">
                <i class="bi bi-clock"></i>
                    <h5 class="card-title">24/7 Cutomer <br> Support</h5>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="card" style="width: 12rem;">
                <div class="card-body">
                <i class="bi bi-credit-card"></i>
                    <h5 class="card-title">Support to Major <br> Payments</h5>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="card" style="width: 12rem;">
                <div class="card-body">
                <i class="bi bi-bank"></i>
                    <h5 class="card-title">Leading Bank <br> Partners</h5>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="card" style="width: 12rem;">
                <div class="card-body">
                <i class="bi bi-gear"></i>
                    <h5 class="card-title">Cutting Edge <br> Technology</h5>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/1efcfc8c55.js" crossorigin="anonymous"></script>
</body>

</html>
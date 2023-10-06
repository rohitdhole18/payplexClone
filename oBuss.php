<?php
include "whyThis.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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

        @keyframes slide {
            from {
              transform: translateX(0);
            }
            to {
              transform: translateX(-100%);
            }
          }
          
          .logos {
            overflow: hidden;
            padding: 20px 0;
            background: white;
            white-space: nowrap;
            position: relative;
          }
          
          .logos:before,
          .logos:after {
            position: absolute;
            top: 0;
            width: 250px;
            height: 100%;
            content: "";
            z-index: 2;
          }
          
          .logos:before {
            left: 0;
            background: linear-gradient(to left, rgba(255, 255, 255, 0), white);
          }
          
          .logos:after {
            right: 0;
            background: linear-gradient(to right, rgba(255, 255, 255, 0), white);
          }
          
          .logos:hover .logos-slide {
            animation-play-state: paused;
          }
          
          .logos-slide {
            display: inline-block;
            animation: 35s slide infinite linear;
          }
          
          .logos-slide img {
            height: 100px;
            margin: 0 40px;
          }
        
    </style>
</head>

<body>
    <div class="container my-3">
        <p id="our">OUR </p>
        <p id="serv">BUSINESS & BANKING PARTNER</p>
    </div>
    <div class="logos">
        <div class="logos-slide">
          <img src="Static\Partners\1.png" />
          <img src="Static\Partners\2.png" />
          <img src="Static\Partners\3.png" />
          <img src="Static\Partners\4.png" />
          <img src="Static\Partners\5.png" />
        </div>
        <div class="logos-slide">
          <img src="Static\Partners\6.png" />
          <img src="Static\Partners\future-generali.png" />
          <img src="Static\Partners\reliance-general-insurance.png" />
          <img src="Static\Partners\religarri.png" />
          <img src="Static\Partners\SBI-Life-Insurance.png" />
        </div>

      </div>
    
</body>

</html>
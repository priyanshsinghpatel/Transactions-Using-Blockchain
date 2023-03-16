<?php
$host="localhost";
$user="root";
$passward =" ";
$db ="demo";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Block chain</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li> 
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="#">DESIGN</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div>
        <div class="content">
            <h1>Transaction by <br><span>Block chain and Solidity</span> <br> </h1>
            <p class="par">Blockchain is a decentralized digital ledger that records transactions, while Solidity is a programming
                <br> language used to write smart contracts on the Ethereum blockchain.
                <br>A smart contract is Auto-enforcing digital contract used for blockchain transactions.</p>

            <button class="cn"><a href="#">JOIN US</a></button>

            <div class="form">
                <h2>Login Here</h2>
                <input type="email" name="email" placeholder="Enter Email Here">
                <input type="password" name="" placeholder="Enter Password Here">
                <button class="btnn"><a href="#">Login</a></button>

                <p class="link">Don't have an account<br>
                    <a href="#">Sign up </a> here</a>
                </p>
                <p class="liw">Log in with</p>

                <div class="icons">
                    <a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="prashan0912">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-google"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-skype"></ion-icon>
                    </a>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>
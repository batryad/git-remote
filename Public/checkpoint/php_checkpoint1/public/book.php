<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/book.css">
    <title>Checkpoint PHP 1</title>
</head>
<body>

<?php include 'header.php'; ?>

<main class="container">

    <section class="desktop">
        <img src="image/whisky.png" alt="a whisky glass" class="whisky"/>
        <img src="image/empty_whisky.png" alt="an empty whisky glass" class="empty-whisky"/>

        <div class="pages">
            <div class="page leftpage">
                Add a bribe
                <form class="name" method="get">
                    <div class="namer">
                        <label  for="name">Name :</label>
                        <input  type="text"  id="name"  name="user_name">
                    </div>
                    <div class="payment">
                        <label  for="pay">Payment :</label>
                        <select disabled class="user_pay"></select>
                    </div>
                    <div  class="button">
                        <button  type="submit">Pay !</button>
                    </div>
                </form>
                <!-- TODO : Form -->
            </div>

            <div class="page rightpage">
                <p class="slig">S</p>
                <hr class="barblack" width="90%" color="black">
                <div  class="divtex">
                    <li>Sam Burns <p>100€</p></li>
                    <li>Samuel Yans <p>52563€</p></li>
                    <li>Simon Pogg <p>52€</p></li>
                    <li>Sophia Maria<p>52 €</p></li>
                    <li>Stacie Hunberg<p>452 </p></li>
                    <li>Steve Grant<p>568 €</p></li>
                    <li>Steve Porcher<p>7865 €</p></li>
                    <li>Sylvester Stallon <p> 77897 €</p></li>
                    <li>Szen Tren <p>562 €</p></li>
                    <hr class="barblack" width="50%" color="black">
                    <li>Total<p>141059 €</p></li>
                </div>
                <!-- TODO : Display bribes and total paiement -->
            </div>
        </div>
        <img src="image/inkpen.png" alt="an ink pen" class="inkpen"/>
    </section>
</main>
</body>
</html>

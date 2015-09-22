<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="What week Brunel University London is at.">

    <title>Brunel | What Week</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <div class="text-center">
        <img src="images/brunel_logo_big.jpg" width="50%" height="10%">
    </div>
</div>

<div class="container">
    <h1 class="text-center">
        Brunel University London is currently at Week:

        <span id="weeks">
        <?php
        include_once 'countWeek.php';
        echo countWeeksFromFreshers();
        ?>
        </span>

    </h1>
</div>


<footer class="footer">
    <div class="container">
        <p class="text-muted text-center">Created by <a href="https://twitter.com/Liammar">Liam</a></p>
        <p class="text-muted text-center">You should join the  <a href="http://brunelstudents.com/societies/tech/">Tech Society</a> :)</p>
    </div>
</footer>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
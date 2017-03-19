<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio</title>

    <!-- Styles -->
    <!-- Bootstrap -->
    <link href="css/app.css" rel="stylesheet">
    <!-- Custom -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
    <div id="app">

        <!-- Start of Navigation -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="index.php">
                        Portfolio
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of Navigation -->

        <!-- Start of Content -->
        <div class="container">
            <div class="row">
            <!-- Your loop will start here and loop through the card markup -->

                <!-- Start of Card -->
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading card-header">
                        <img class="img-responsive" src="http://placehold.it/250x250/eee">
                        </div>

                        <div class="panel-body">
                            <h4>Card title</h4>
                            <p>
                                This is where your card content will be display, Could be a little information on your project
                            </p>
                            <a href="#" class="btn btn-default btn-xs">
                                View
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End of Card -->


            </div>
        </div>
    <!-- Scripts -->
    <!-- Bootstrap JavaScript -->
    <script src="js/app.js"></script>
</body>
</html>

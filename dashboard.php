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
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Dashboard
                        </div>
                        <div class="panel-body">

                            <form class="form-horizontal" role="form" method="POST" action="dashboard.php">
                                <!-- Form Title -->
                                <div class="form-group">
                                    <label class="col-md-4">
                                        Add new project
                                    </label>
                                </div>

                                <!-- Title Input -->
                                <div class="form-group">
                                    <label for="projectName" class="col-md-4 control-label">Title</label>

                                    <div class="col-md-6">
                                        <input id="projectName" type="text" class="form-control" name="projectName" value="" required="" autofocus="">
                                    </div>
                                </div>

                                <!-- Image Url Input -->
                                <div class="form-group">
                                    <label for="projectImgUrl" class="col-md-4 control-label">Image Url</label>

                                    <div class="col-md-6">
                                        <input id="projectImgUrl" type="text" class="form-control" name="projectImgUrl" value="" required="" autofocus=""  onchange="readURL(this)">
                                    </div>
                                </div>

                                <!-- Content Input -->
                                <div class="form-group">
                                    <label for="projectContent" class="col-md-4 control-label">Content</label>

                                    <div class="col-md-6">
                                        <input id="projectContent" type="text" class="form-control" name="projectContent" value="" required="" autofocus="">
                                    </div>
                                </div>

                                <!-- Link Input -->
                                <div class="form-group">
                                    <label for="projectLink" class="col-md-4 control-label">Link</label>

                                    <div class="col-md-6">
                                        <input id="projectLink" type="text" class="form-control" name="projectLink" value="" required="" autofocus="">
                                    </div>
                                </div>

                                 <!-- Submit Button -->
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Add
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Image Display Thumbnail -->
                    <div class="form-group">
                        <img style="display: block;" width="300px" height="200px" id="projectThumbnail" src="img/place-holder.png" class="img-responsive">
                    </div>
                </div>

            </div>
        </div>
        <!-- End of Content -->
    </div>
    <!-- Scripts -->
    <script src="js/app.js"></script>
    <script type="text/javascript">

      function readURL(input) {
        var url = input.value;
        var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
        if (url && (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {

          $('#projectThumbnail').attr('src', url);

        }else{
         $('#projectThumbnail').attr('src', 'img/place-holder.png');
       }
     }

    </script>
</body>
</html>

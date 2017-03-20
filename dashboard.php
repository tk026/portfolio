<?php
$page['title']= 'Dashboard';

require 'partials/header.php';
?>
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
   <?php require 'partials/footer.php'; ?>
</body>
</html>

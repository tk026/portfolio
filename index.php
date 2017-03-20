<?php 
require 'includes/config.php';

$projects = getPortfolio($dbh);
$page['title'] = 'Home';

require 'partials/header.php';
require 'partials/footer.php';

?>

       

        <!-- Start of Content -->
        <div class="container">
            <div class="row">
            <!-- Your loop will start here and loop through the card markup -->
            <?php 

              foreach ($projects as $projects):

            ?>
                <!-- Start of Card -->
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading card-header">
                        <img class="img-responsive" src="<?= $projects['image_url']?>">
                        </div>

                        <div class="panel-body">
                            <h4><?= $projects['title']?></h4>
                            <p>
                                <?= $projects['content']?>
                            </p>
                            <a href="<?= $projects['link']?>" class="btn btn-default btn-xs">
                                View
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End of Card -->
<?php

endforeach
?>

            </div>
        </div>
    <!-- Scripts -->
    <!-- Bootstrap JavaScript -->

    <script src="js/app.js"></script>
    


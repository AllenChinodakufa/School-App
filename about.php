<?php

include "inc/header.php";

?>
<section class="main">
    
    <div class="jumbotron">
        <div class="container">
            <h2>about <?php echo APPNAME?></h2>
            <ul class="breadcrumb">

                <li class="active"><a href="index.php">Home</a></li>

                <li><a href="#">about</a></li>
            </ul>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h1 class="section-header">About <?php echo APPNAME;?></h1>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat cauctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per Mauris in erat justo.

                    Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed.

                    Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat cauctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per Mauris in erat justo.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img class="img-fluid" src="img/person1.jpg">
                </div>
            </div>
        </div>
    </div>
    
<?php include "pages.php";?>
</section>
<?php
include "inc/footer.php";
?>
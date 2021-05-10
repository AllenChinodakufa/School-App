<?php

include "inc/header.php";

?>

<section class="main" style="background-color: #f5f5f5;">
    <?php
    
    if(isset($_GET['q'])){
        if($_GET['q'] == "sporting"){
            ?>
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->

        <ol class="carousel-indicators">

            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

            <li data-target="#myCarousel" data-slide-to="1"></li>

            <li data-target="#myCarousel" data-slide-to="2"></li>

        </ol>

      <!-- Wrapper for slides -->

        <div class="carousel-inner" role="listbox">

            <div class="item active">

                <img src="img/img_bg_1.jpg" alt="Chania">

            </div>


            <div class="item">

                <img src="img/img_bg_2.jpg" alt="Chania">

            </div>


            <div class="item">

                <img src="img/img_bg_3.jpg" alt="Flower">

            </div>

        </div>


        <!-- Left and right controls -->

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">

            <span class="icon-keyboard_arrow_left" aria-hidden="true"></span>

            <span class="sr-only">Previous</span>

        </a>

        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">

            <span class="icon-keyboard_arrow_right" aria-hidden="true"></span>

            <span class="sr-only">Next</span>

        </a>

    </div>
        
    <div class="jumbotron">
    
        <div class="container">
        
            <h2>ACADEMICS</h2>
            
            <ul class="breadcrumb">

                <li><a href="index.php">Home</a></li>

                <li><a href="academics.php">academics</a></li>

                <li><a href="#"><?php echo $_GET['q'];?></a></li>
            </ul>
        
        </div>
    
    
    </div>
    
    <div class="container-fluid sports-list">
        
        <div class="row">
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/1.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/1.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/1.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/1.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/1.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/1.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/1.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/1.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    
    <?php
        }
        elseif($_GET['q'] == "academics"){
            ?>
            
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->

        <ol class="carousel-indicators">

            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

            <li data-target="#myCarousel" data-slide-to="1"></li>

            <li data-target="#myCarousel" data-slide-to="2"></li>

        </ol>

      <!-- Wrapper for slides -->

        <div class="carousel-inner" role="listbox">

            <div class="item active">

                <img src="img/img_bg_1.jpg" alt="Chania">

            </div>


            <div class="item">

                <img src="img/img_bg_2.jpg" alt="Chania">

            </div>


            <div class="item">

                <img src="img/img_bg_3.jpg" alt="Flower">

            </div>

        </div>


        <!-- Left and right controls -->

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">

            <span class="icon-keyboard_arrow_left" aria-hidden="true"></span>

            <span class="sr-only">Previous</span>

        </a>

        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">

            <span class="icon-keyboard_arrow_right" aria-hidden="true"></span>

            <span class="sr-only">Next</span>

        </a>

    </div>
        
    <div class="jumbotron">
    
        <div class="container">
        
            <h2>ACADEMICS</h2>
            
            <ul class="breadcrumb">

                <li><a href="index.php">Home</a></li>

                <li><a href="academics.php">academics</a></li>

                <li><a href="#"><?php echo $_GET['q'];?></a></li>
            </ul>
        
        </div>
    
    
    </div>
    
    <div class="container-fluid sports-list">
        
        <div class="row">
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/2.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/2.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/2.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/2.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/2.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/2.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/2.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/2.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
<?php
        }
        elseif($_GET['q'] == "facilities"){
            ?>
            
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->

        <ol class="carousel-indicators">

            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

            <li data-target="#myCarousel" data-slide-to="1"></li>

            <li data-target="#myCarousel" data-slide-to="2"></li>

        </ol>

      <!-- Wrapper for slides -->

        <div class="carousel-inner" role="listbox">

            <div class="item active">

                <img src="img/img_bg_1.jpg" alt="Chania">

            </div>


            <div class="item">

                <img src="img/img_bg_2.jpg" alt="Chania">

            </div>


            <div class="item">

                <img src="img/img_bg_3.jpg" alt="Flower">

            </div>

        </div>


        <!-- Left and right controls -->

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">

            <span class="icon-keyboard_arrow_left" aria-hidden="true"></span>

            <span class="sr-only">Previous</span>

        </a>

        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">

            <span class="icon-keyboard_arrow_right" aria-hidden="true"></span>

            <span class="sr-only">Next</span>

        </a>

    </div>
        
    <div class="jumbotron">
    
        <div class="container">
        
            <h2>ACADEMICS</h2>
            
            <ul class="breadcrumb">

                <li><a href="index.php">Home</a></li>

                <li><a href="academics.php">academics</a></li>

                <li><a href="#"><?php echo $_GET['q'];?></a></li>
            </ul>
        
        </div>
    
    
    </div>
    
    <div class="container-fluid sports-list">
        
        <div class="row">
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/4.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/4.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/4.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/4.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/4.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/4.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/4.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-sm-3">
                
                <div class="sports">
                    
                    
                    <div class="sports-header">
                        <h2>Title</h2>
                    </div>
                    
                    <div class="sports-img-holder">
                        <img src="img/sports/4.jpg">
                    </div>
                    
                    <div class="sports-content">
                        <p>Here we do a wide variety of sports such as</p>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
<?php
        }
    } else{
        
    }
    
    ?>
    
    
    <?php
    
    include "pages.php";
    
    ?>
    
</section>

<?php

include "inc/footer.php";

?>

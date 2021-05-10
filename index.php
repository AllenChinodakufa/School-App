<?php

include "inc/header.php";

?>
<section class="main">

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
            <h2 class="section-header">welcome</h2>
            <p>welcome to our official <?php echo APPNAME?> website.</p>
            <p>please feel free to browse around.</p>
        </div>
    </div>
    
    <?php include "pages.php";?>
    
    <div class="container-fluid">
      
        <div class="container">
        
            <h2 class="section-header">PLAN & PRICING</h2>
        
            <h4 class="text-center">Choose a payment plan to pay you childs school fees.</h4>
      
        </div>
      
        <div class="row">

            <div class="col-sm-4">
          
                <div class="panel panel-default text-center">
            
                    <div class="panel-heading">
              
                        <h1>zjc student</h1>
            
                    </div>
            
                    <div class="panel-body">
              
                        <p><strong>20</strong> furniture & equipement</p>
              
                        <p><strong>18</strong> fee</p>
              
                        <p><strong>17</strong> books</p>
              
                        <p><strong>5</strong> levy</p>
            
                    </div>
            
                    <div class="panel-footer">
              
                        <h3>$60</h3>
              
                        <h4>per term</h4>
                            
                        <a href="pay.php?pay=zjc" class="btn btn-lg btn-block">select plan</a>
            
                    </div>
          
                </div> 
        
            </div> 
        
            <div class="col-sm-4">
          
                <div class="panel panel-default text-center">
            
                    <div class="panel-heading">
              
                        <h1>o level student</h1>
            
                    </div>
            
                    <div class="panel-body">
            
                    <div class="panel-body">
              
                        <p><strong>50</strong> furniture & equipement</p>
              
                        <p><strong>38</strong> fee</p>
              
                        <p><strong>17</strong> books</p>
              
                        <p><strong>5</strong> levy</p>
            
                    </div>
            
                    </div>
            
                    <div class="panel-footer">
              
                        <h3>$119</h3>
              
                        <h4>per term</h4>
              
                        <a href="pay.php?pay=olevel" class="btn btn-lg btn-block">select plan</a>
            
                    </div>
          
                </div> 
        
            </div> 
       
            <div class="col-sm-4">
          
                <div class="panel panel-default text-center">
            
                    <div class="panel-heading">
              
                        <h1>a level student</h1>
            
                    </div>
            
                    <div class="panel-body">
              
                        <p><strong>50</strong> furniture & equipement</p>
              
                        <p><strong>58</strong> fee</p>
              
                        <p><strong>17</strong> books</p>
              
                        <p><strong>5</strong> levy</p>
            
                    </div>
            
                    <div class="panel-footer">

                        <h3>$139</h3>
              
                        <h4>per term</h4>
                            
                        <a href="pay.php?pay=alevel" class="btn btn-lg btn-block">select plan</a>
            
                    </div>
          
                </div> 
        
            </div> 
      
        </div>
    
    </div>
    
</section>

<?php
include "inc/footer.php";
?>
<?php
include "inc/header.php";
?>

<link rel="stylesheet" href="assets/css/spotlight-gallery.css">

<section class="main">
    <div class="jumbotron">
        <div class="container">
            <h2>TEACHERS</h2>
            <ul class="breadcrumb">

                <li><a href="index.php">Home</a></li>

                <li><a href="#">Teacher</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">                        
                        
                    <div class="spotlight">

                        <div class="spotlight-image-container">

                            <img src="img/photo/godafoss-1840758.jpg" class="img-fluid">

                        </div>
                        
                        <div class="spotlight-footer">
                            
                            <div class="spotlight-footer-title">
                                <h3>Mr Chikoto</h3>
                            </div>
                            
                            <div class="spotlight-footer-description">
                                <p>Teacher</p>
                            </div>
                            
                        </div>
                        
                    
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">                        
                        
                    <div class="spotlight">

                        <div class="spotlight-image-container">

                            <img src="img/photo/california-1751455.jpg" class="img-fluid">

                        </div>
                        
                        <div class="spotlight-footer">
                            
                            <div class="spotlight-footer-title">
                                <h3>Mr Chikoto</h3>
                            </div>
                            
                            <div class="spotlight-footer-description">
                                <p>Teacher</p>
                            </div>
                            
                        </div>
                    
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">                        
                        
                    <div class="spotlight">

                        <div class="spotlight-image-container">

                            <img src="img/photo/canada-2340312.jpg" class="img-fluid">

                        </div>
                        
                        <div class="spotlight-footer">
                            
                            <div class="spotlight-footer-title">
                                <h3>Mr Chikoto</h3>
                            </div>
                            
                            <div class="spotlight-footer-description">
                                <p>Teacher</p>
                            </div>
                            
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "pages.php";?>
    
</section>

<?php
include "inc/footer.php";
?>


<div class='spotlight-gallery'><div class='spotlight-gallery-header'>
    
    <div class='pull-right'>
        
        <a id='toggleFullscreen'>
            
            <i class='icon-fullscreen'>
            
            </i>
        
        </a>
        
        <a id='toggleColor'>
            
            <i class='icon-invert_colors'>
            
            </i>
        
        </a>
        
        <a id='toggleZoomOut'>
            
            <i class='icon-zoom_out'>
            
            </i>
        
        </a> 
        
        <a id='toggleZoomin'> 
            
            <i class='icon-zoom_in'>
            
            </i>
        
        </a>
        
        <a id='toggleClose'>
            
            <i class='icon-close2'>
            
            </i>
        
        </a>
    
    </div>
    
    </div>
    
    <div class='spotlight-gallery-image-container'>
        
        <img src='img/img_bg_2.jpg' class='img-full'>
    
    </div>
    
    <div class='spotlight-gallery-footer'>    
        
        <div class='title'>About Image
        
        </div>    
        
        <div class='description'>        
            
            <p> Hello My name is Allen Chinodakufa
            
            </p>    
        
        </div>
    
    </div>
    
    <div class='spotlight-galler-navigate'>
        
        <a id='navigate-before' class='pull-left'>
            
            <i class='icon-navigate_before'>
            
            </i>
        
        </a>
        
        <a id='navigate-next' class='pull-right'>
            
            <i class='icon-navigate_next'>
            
            </i>
        
        </a>    
    
    </div>     

</div>

<script type="text/javascript">
    $(document).ready(function(){

    var slideIndex = 0;

    function showSlides(n){

        var slides = $(".spotlight>.spotlight-image-container>img");

        if(n > slides.length) {slideIndex = 0};

        if(n < 1) {slideIndex = slides.length};

        if(slideIndex >= slides.length+1) {
            slideIndex = 1;
        } 

        $(".spotlight-gallery>.spotlight-gallery-image-container>img").attr("src", slides[slideIndex-1].src);
        console.log(slideIndex);

    }

    $("#navigate-before").click(function(){
        $(".spotlight-gallery>.spotlight-gallery-image-container>img").toggleClass("fadeleft");
        $(".spotlight-gallery>.spotlight-gallery-image-container>img").removeClass("faderight");
        showSlides(slideIndex = slideIndex-1);
    });
    $("#navigate-next").click(function(){
        $(".spotlight-gallery>.spotlight-gallery-image-container>img").toggleClass("faderight");
        $(".spotlight-gallery>.spotlight-gallery-image-container>img").removeClass("fadeleft");
        showSlides(slideIndex += 1);
    });

    $("#toggleFullscreen").click(function(){
         $("#toggleFullscreen").find("i").toggleClass("icon-fullscreen_exit");
        S=document.documentElement||document.body,document.cancelFullScreen||(document.cancelFullScreen=document.exitFullscreen||document.webkitCancelFullScreen||document.webkitExitFullscreen||document.mozCancelFullScreen||function(){}),S.requestFullScreen||(S.requestFullScreen=S.webkitRequestFullScreen||S.msRequestFullScreen||S.mozRequestFullScreen);

        if($(".spotlight-gallery").hasClass("fullscreen")){
            document.cancelFullScreen();
        } else{
            S.requestFullScreen();
        }

        $(".spotlight-gallery").toggleClass("fullscreen");
    });
    $("#toggleColor").click(function(){
        $(".spotlight-gallery").toggleClass("background-white");
    });
    $("#toggleZoomOut").click(function(){
        if($(".spotlight-gallery>.spotlight-gallery-image-container>img").attr("style") == "transform: scale(1.5)"){
            $(".spotlight-gallery>.spotlight-gallery-image-container>img").attr("style", "transform: scale(1.2)");
        } else {

            if($(".spotlight-gallery>.spotlight-gallery-image-container>img").attr("style") == "transform: scale(1.7)"){
                $(".spotlight-gallery>.spotlight-gallery-image-container>img").attr("style", "transform: scale(1.5)");
            } else {

                if($(".spotlight-gallery>.spotlight-gallery-image-container>img").attr("style") == "transform: scale(2)"){
                    $(".spotlight-gallery>.spotlight-gallery-image-container>img").attr("style", "transform: scale(1.7)");
                } else{

                    $(".spotlight-gallery>.spotlight-gallery-image-container>img").attr("style", "transform: scale(1)");

                }
            }
        }                    
    });
    $("#toggleZoomin").click(function(){
        if($(".spotlight-gallery>.spotlight-gallery-image-container>img").attr("style") == "transform: scale(1.2)"){
            $(".spotlight-gallery>.spotlight-gallery-image-container>img").attr("style", "transform: scale(1.5)");
        } else {

            if($(".spotlight-gallery>.spotlight-gallery-image-container>img").attr("style") == "transform: scale(1.5)"){
                $(".spotlight-gallery>.spotlight-gallery-image-container>img").attr("style", "transform: scale(1.7)");
            } else {

                if($(".spotlight-gallery>.spotlight-gallery-image-container>img").attr("style") == "transform: scale(1.7)"){
                    $(".spotlight-gallery>.spotlight-gallery-image-container>img").attr("style", "transform: scale(2)");
                } else{

                    $(".spotlight-gallery>.spotlight-gallery-image-container>img").attr("style", "transform: scale(1.2)");

                }
            }
        }
    });
    $("#toggleClose").click(function(){
        $(".spotlight-gallery").toggleClass("show-scale");

    });

    $(".spotlight>.spotlight-image-container>img").click(function(){
        $(".spotlight-gallery").toggleClass("show-scale");
        $(".spotlight-gallery>.spotlight-gallery-image-container>img").attr("src", this.src);
        console.log(this.src)
    });
    $(".spotlight-gallery>.spotlight-gallery-image-container>img").click(function(){

        $(".spotlight-gallery>.spotlight-galler-navigate>a.pull-left").toggleClass("show-left-translate");
        $(".spotlight-gallery>.spotlight-galler-navigate>a.pull-right").toggleClass("show-right-translate");
        $(".spotlight-gallery>.spotlight-gallery-header").toggleClass("show-scale-top");


    });

});
</script>

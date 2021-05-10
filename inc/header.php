<?php

session_start();

include "app.php";
include "func.php";
?>

<?php

if(isset($_SESSION['username'])){
    $LOGGEDINCHECK = TRUE;
    
    $user = $_SESSION['username'];
    
} else{
    $LOGGEDINCHECK = FALSE;
}

?>
<!DOCTYPE html>

<html>
    
    <head>

        <title><?php echo APPNAME?></title>
        
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="assets/fonts/icomoon/style.css">
        
        <link rel="stylesheet" href="assets/css/Icomoon/style.css">
        
        <link rel="stylesheet" href="assets/css/main.css">
    
    </head>
    
    <body>
        
        <?php
    
    if($LOGGEDINCHECK){?><nav class="navbar navbar-default">
            <div class="container-fluid">
            
                <div class="navbar-header">
              
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" onclick="myFunction(this)">
                
                        <span class="icon-bar bar1"></span>
                
                        <span class="icon-bar bar2"></span>
                
                        <span class="icon-bar bar3"></span> 
              
                    </button>
              
                    <a class="navbar-brand" href="index.php"><?php echo APPNAME?></a>
            
                </div>
            
                <div class="collapse navbar-collapse" id="myNavbar">
              
                    <ul class="nav navbar-nav">
                
                        <li class="active"><a href="index.php">Home</a></li>
                
                        <li><a href="#">About</a></li>
                
                        <li><a href="#">Teachers</a></li> 
                
                        <li><a href="#">Contact</a></li> 
              
                    </ul>
              
                    <ul class="nav navbar-nav navbar-right">
                
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> SIGNUP</a></li>
                
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> SIGNIN</a></li>
              
                    </ul>
            
                </div>
            </div>
        </nav>
        <?php
    } else{?><nav class="navbar navbar-default">
            <div class="container-fluid">
            
                <div class="navbar-header">
              
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                
                        <span class="icon-bar"></span>
                
                        <span class="icon-bar"></span>
                
                        <span class="icon-bar"></span> 
              
                    </button>
              
                    <a class="navbar-brand" href="index.php"><?php echo APPNAME?></a>
            
                </div>
            
                <div class="collapse navbar-collapse" id="myNavbar">
              
                    <ul class="nav navbar-nav  navbar-right">
                
                        <li><a href="about.php">About</a></li>
                        
                        <li class="dropdown">
                           
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Payments  <sup>(fees)</sup>
                            
                                <span class="icon-angle-down"></span></a>
                            
                            <ul class="dropdown-menu">
                            
                                <li><a href="pay.php?pay=zjc">zjc student</a></li>
                              
                                <li><a href="pay.php?pay=olevel">o level student</a></li>
                              
                                <li><a href="pay.php?pay=alevel">a level student</a></li> 
                            
                            </ul>
                          
                        </li>
                        
                        <li class="dropdown">
                           
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Activities  <sup>(academic)</sup>
                            
                                <span class="icon-angle-down"></span></a>
                            
                            <ul class="dropdown-menu">
                            
                                <li><a href="academics.php?q=sporting">sporting</a></li>
                              
                                <li><a href="academics.php?q=academics">academics</a></li>
                              
                                <li><a href="academics.php?q=facilities">facilities</a></li> 
                            
                            </ul>
                          
                        </li>
                
                        <li><a href="blog.php">Blog</a></li> 
                
                        <li><a href="teacher.php">Teachers</a></li> 
                
                        <li><a href="contact.php">Contact</a></li> 
                
                        <li><a href="students/">STUDENT PORTAL</a></li> 
              
                    </ul>
            
                </div>
            </div>
        </nav>
        <?php
    }
    
        ?>
<?php
include "inc/header.php";
?>


<?php 

if(isset($_POST['sendMessage'])){
    
    $fname = get_post($_POST['fname']);
    
    $lname = get_post($_POST['lname']);
    
    $email = get_post($_POST['email']);
    
    $subject = get_post($_POST['subject']);
    
    $message = get_post($_POST['message']);
    
    $time = time();
    
    $query = "INSERT INTO `tblcontact` (`id`, `fname`, `lname`, `email`, `subject`, `message`, `datesent`) VALUES (NULL, '$fname', '$lname', '$email', '$subject', '$message', '$time')";
    
    query_mysqli($query);
    ?>
<div class="modal fade in" id="myModal" role="dialog">

    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      
          <div class="modal-content">
        
              <div class="modal-header">
          
                  <button type="button" class="close" data-dismiss="modal"><span class="icon-close2"></span></button>
          
                  <h4 class="modal-title" style="text-transform: uppercase;">WELL RECEIVED THANKS</h4>
        
              </div>
        
              <div class="modal-body">
                  
                  <p>Thank you <?php echo $fname;?> <?php echo $lname;?> for your words. We will get right with you shortly.</p>
                  
              </div>
        
              <div class="modal-footer">
                  <a href="#"  data-dismiss="modal" class="btn btn-lg btn-default">close</a>
        
              </div>
      
          </div>
    
      </div>
</div>
<?php
}

?>

<section class="main" style="background-color: #f5f5f5;">
    <div class="jumbotron">
        <div class="container">
            <h2>Get In Touch</h2>
            <ul class="breadcrumb">

                <li><a href="index.php">Home</a></li>

                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
    
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-7 col-md-7 col-sm-12">

                        <div class="contact-form">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="form-horizontal" name="contactForm">
                                <div class="row form-group">

                                    <div class="col-md-6">

                                        <label class="text-black" for="fname">First Name</label>

                                        <input type="text" id="fname" class="form-control" name="fname" data-validate="Please enter at least 4 chars">
                                        
                                        <span class="error-message"></span>

                                    </div>

                                    <div class="col-md-6">

                                        <label class="text-black" for="lname">Last Name</label>

                                        <input type="text" id="lname" class="form-control" name="lname" data-validate="Please enter at least 4 chars">
                                        
                                        <span class="error-message"></span>

                                    </div>

                                </div>

                                <div class="row form-group">

                                    <div class="col-md-12">

                                        <label class="text-black" for="email">Email</label> 

                                        <input type="email" id="email" class="form-control" name="email" data-validate="Please enter a valid email">
                                        
                                        <span class="error-message"></span>

                                    </div>

                                </div>

                                <div class="row form-group">

                                    <div class="col-md-12">

                                        <label class="text-black" for="subject">Subject</label> 

                                        <input type="subject" id="subject" class="form-control" name="subject" data-validate="Please enter at least 8 chars of subject">
                                        
                                        <span class="error-message"></span>

                                    </div>

                                </div>



                                <div class="row form-group">

                                    <div class="col-md-12">

                                        <label class="text-black" for="message">Message</label> 

                                        <textarea name="message" id="message" cols="30" rows="7" name="message" class="form-control" data-validate="Please write something for us"></textarea>
                                        
                                        <span class="error-message"></span>

                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-lg btn-block btn-default" name="sendMessage">Send Message</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="well well-lg">
                         
                            <p class="font-weight-bold">Address</p>
                          
                            <p class="p">203 Fake St. Mountain View, San Francisco, California, USA</p>

                            <p class="font-weight-bold">Phone</p>
                          
                            <p class="p"><a href="#">+1 232 3235 324</a></p>

                          
                            <p class="font-weight-bold">Email Address</p>
                          
                            <p class="p"><a href="#">youremail@domain.com</a></p>

                        </div>
                        <div class="well well-lg">
                         
                            <img src="img/world-map.png" class="img-fluid">
                          
                            <p class="p">where to find us</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    
</section>

<?php
include "inc/footer.php";
?>

<script type="text/javascript">
    
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var subject = document.getElementById("subject");
    var message = document.getElementById('message');
    var submitBtn = document.forms["contactForm"]["sendMessage"];
    
    fname.addEventListener('blur', function(){
        if(fname.value.length == null || fname.value.length == 0 || fname.value.length < 4 || fname.value.length > 8){
            $("#fname").next('.error-message').html($("#fname").attr('data-validate'));
        } else{
            $("#fname").next('.error-message').html("<i class='icon-check2'></i>");
        }
    });
    
    lname.addEventListener('blur', function(){
        if(lname.value.length == null || lname.value.length == 0 || lname.value.length < 4 || lname.value.length > 12){
            $("#lname").next('.error-message').html($("#lname").attr('data-validate'));
        } else{
            $("#lname").next('.error-message').html("<i class='icon-check2'></i>");
        }
    });
    
    email.addEventListener('blur', function(){
        if(email.value.length == null || email.value.length == 0){
            $("#email").next('.error-message').html($("#email").attr('data-validate'));
        } else{
            if(email.value.trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null){
                $("#email").next('.error-message').html($("#email").attr('data-validate'));
                
            } else{
                $("#email").next('.error-message').html("<i class='icon-check2'></i>");
            
            }
        }
    });
    
    subject.addEventListener('blur', function(){
        if(subject.value.length == null || subject.value.length == 0 || subject.value.length > 20){
            $("#subject").next('.error-message').html($("#subject").attr('data-validate'));
        } else{
            $("#subject").next('.error-message').html("<i class='icon-check2'></i>");
        }
    });
    message.addEventListener('blur', function (){
        if(message.value.length == null || message.value.length == 0){
            $("#message").next('.error-message').html($("#message").attr('data-validate'));
        } else{
            $("#message").next('.error-message').html("<i class='icon-check2'></i>");
            submitBtn.setAttribute('type', 'submit');
        }
    });
    
    
    submitBtn.addEventListener("click", function(){
        if(fname.value.length == null || fname.value.length == 0 || fname.value.length < 4 || fname.value.length > 8){
            $("#fname").next('.error-message').html($("#fname").attr('data-validate'));
        }else{
            $("#fname").next('.error-message').html("<i class='icon-check2'></i>"); 
        }
        if(lname.value.length == null || lname.value.length == 0 || lname.value.length < 4 || lname.value.length > 12){
            $("#lname").next('.error-message').html($("#lname").attr('data-validate'));
        } else{
            $("#lname").next('.error-message').html("<i class='icon-check2'></i>");
        }
        if(email.value.length == null || email.value.length == 0){
            $("#email").next('.error-message').html($("#email").attr('data-validate'));
        } else {
            if(email.value.trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null){
                $("#email").next('.error-message').html($("#email").attr('data-validate'));
                
            } else{
                $("#email").next('.error-message').html("<i class='icon-check2'></i>");
            
            }
        }
        if(subject.value.length == null || subject.value.length == 0 || subject.value.length > 8){
            $("#subject").next('.error-message').html($("#subject").attr('data-validate'));
        } else {            
            $("#subject").next('.error-message').html("<i class='icon-check2'></i>");
        }
        if(message.value.length == null || message.value.length == 0){
            $("#message").next('.error-message').html($("#message").attr('data-validate'));
        }else{
            $("#message").next('.error-message').html("<i class='icon-check2'></i>");
        }
        
    }, true);
</script>


<?php
if(isset($_POST['sendMessage'])){
    
?>
<script type="text/javascript">
$(document).ready(function(){

    $("#myModal").modal("show");

});

</script>
<?php
    
}
?>
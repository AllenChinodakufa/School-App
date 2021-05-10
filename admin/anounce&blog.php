<?php

include "inc/header.php";
?>

<link rel="stylesheet" href="quime&editor.css">

<div class="container-fluid uncontainer">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    
        <?php
        include "sidebar.php";
        ?>
        
        <?php
        if($LOGGEDINCHECK){


            if(isset($_GET['q'])){

                if($_GET['q'] == "announcements"){
                    ?>
        
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="wrap-content container-fluid" id="container">

                        <!-- start: PAGE TITLE -->

                        <section id="page-title">

                            <div class="row">

                                <div class="col-sm-8">

                                    <h1 class="mainTitle">Admin | Blog</h1>

                                </div>

                                <ol class="breadcrumb">

                                    <li>

                                        <a href="index.php">


                                            <span>Admin</span>

                                        </a>

                                    </li>

                                    <li class="active">

                                        <span>Blog</span>

                                    </li>

                                </ol>

                            </div>

                        </section>

                        <!-- end: PAGE TITLE -->

                        <!-- start: BASIC EXAMPLE -->

                        <div class="container-fluid container-fullw bg-white">

                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="table-responsive">          

                                        <table class="table table-hover">

                                            <thead>

                                                <tr>					


                                                    <th>ANNOUNCEMENT_ID</th>

                                                    <th>ANNOUNCEMENT_TEXT</th>

                                                    <th>ANNOUNCEMENT_WHAT</th>

                                                    <th>DATEPOSTED</th>

                                                    <th>AUTHOR</th>

                                                    <th>ACTION</th>

                                                </tr>

                                            </thead>

                                            <tbody>
                                                <?php

                                                   
                    $query = "SELECT * FROM `tblannouncements`";

                    $result = mysqli_query($conn, $query);

                    if(mysqli_num_rows($result) > 0){

                        while($row = mysqli_fetch_assoc($result)){
?>
                                                <tr>

                                                    <td><?php echo $row['ANNOUNCEMENT_ID'];?></td>

                                                    <td><?php echo $row['ANNOUNCEMENT_TEXT'];?></td>

                                                    <td><?php echo $row['ANNOUNCEMENT_WHAT'];?></td>

                                                    <td><?php echo $row['DATEPOSTED'];?></td>

                                                    <td><?php echo $row['AUTHOR'];?></td>

                                                    <td>
                                                        <a href="anounce&blog.php?q=students&edit=<?php echo $row['ANNOUNCEMENT_ID'];?>"><i class="icon-edit"></i></a>
                                                        
                                                        <a href="anounce&blog.php?q=students&delete=<?php echo $row['ANNOUNCEMENT_ID'];?>"><i class="icon-delete"></i></a></td>

                                                </tr>
                                                <?php
                        }
                    }
                    else{
  ?>
                        <tr>
                            
                            <td>There is nothing found .Please add new announcements through this link <a href="anounce&blog.php?q=addanounce">add an announcement</a>.</td>

                        </tr>
                        <?php  
                        }


                                    ?>

                                                

                                            </tbody>

                                        </table>

                                    </div>
                                    

                                </div>

                            </div>

                        </div>







                        <!-- end: SELECT BOXES -->

                    </div>
                </div>
        <?php
                }
                elseif($_GET['q'] == "addanounce"){
                    
                    if(isset($_POST['submitAddStudentsForm'])){
                        $text = get_post($_POST['text']);
                        $author = get_post($_POST['author']);
                        $description = get_post($_POST['description']);
                        $dob = get_post($_POST['dob']);
                        
                        $query = "INSERT INTO `tblstudents` (`STUDENT_ID`, `FIRSTNAME`, `LASTNAME`, `USERNAME`, `SEX`, `BDAY`, `AGE`, `NATIONALITY`, `RELIGION`, `HOME_ADDRESS`, `ACCOUNT_TYPE`) VALUES (NULL, '$firstname', '$lastname', '$username', '$sex', '$dob', '$age', '$nationality', '$religion', '$address', 'Student')";
                    
                    
                        $result = mysqli_query($conn, $query);
                    }
                    
                    ?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            
            <div class="wrap-content container-fluid" id="container">
                
                <!-- start: PAGE TITLE -->

                <section id="page-title">

                    <div class="row">

                        <div class="col-sm-8">

                            <h1 class="mainTitle">Admin | ADD ANNOUNCEMENT</h1>

                        </div>

                        <ol class="breadcrumb">

                            <li>

                                <a href="index.php">


                                    <span>Admin</span>

                                </a>

                            </li>

                            <li class="active">

                                <span>Add a Announcement</span>

                            </li>

                        </ol>

                    </div>

                </section>
                
                <div class="container-fluid container-fullw bg-white">

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?q=addanounce" class="admin" name="contactForm">
                        
                        <div class="form-group">

                            <div class="col-md-12">
                                
                                <h2 class="section-header"><span class="font-weight-bold">ADD ANNOUNCEMENT</span></h2>

                            </div>
                        </div>
                        
                        <div class="row form-group">

                            <div class="col-md-6">

                                <label class="text-black" for="text">ANNOUNCEMENT TEXT</label>

                                <input type="text" id="text" class="form-control" name="text" data-rule="20" data-validate="Please enter at least 20 chars">

                                <span class="error-message"></span>

                            </div>

                            <div class="col-md-6">

                                <label class="text-black" for="author">ANNOUNCEMENT AUTOR</label>

                                <input type="text" id="author" class="form-control" name="author" data-rule="20" data-validate="Please enter at least 20 chars">

                                <span class="error-message"></span>

                            </div>

                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">

                                <label class="text-black" for="description">ANNOUNCEMENT DESCRIPTION</label> 
                                
                                <div class="box box-info">
                                    <div class="box-header">
                                        <h3 class="box-title">QUIME Editor <small>Advanced and futuristic editor</small></h3>
                                    </div>
                                    <div class="box-body pan">

                                        <div class="btn-group btn-justified">

                                            <button id="boldButton" type="button" class="btn btn-default"><span class="icon-bold"></span>old</button>

                                            <button id="italicButton" type="button" class="btn btn-default"><span class="icon-italic"></span></button>

                                            <button id="subButton" type="button" class="btn btn-default"><span class="icon-subscript"></span></button>

                                            <button id="supButton" type="button" class="btn btn-default"><span class="icon-superscript"></span></button>

                                            <button id="strikeButton" type="button" class="btn btn-default"><s>abc</s></button>

                                            <button id="orderedButton" type="button" class="btn btn-default"><span class="icon-list-ol"></span></button>

                                            <button id="unorderedButton" type="button" class="btn btn-default"><span class="icon-list-ul"></span></button>


                                            <select class="btn" id="fontChanger">
                                                <option value="Times New Roman">Times New Roman</option>
                                                <option value="sans-serif">Sans-serif</option>
                                                <option value="raleway">Raleway</option>
                                                <option value="calibri">Calibri</option>
                                                <option value="serif">Serif</option>
                                            </select>


                                            <select class="btn" id="fontSizeChanger">
                                                <script>
                                                    for( var i =1; i <= 25;  i++){
                                                        document.write("<option value='"+i+"'>"+i+"</option>");
                                                    }
                                                </script><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option>
                                            </select>

                                            <div class="btn-group">

                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">


                                                    Create Link <span class="icon-font"></span> <span class="icon-caret-down"></span></button>

                                                <ul class="dropdown-menu" role="menu">

                                                    <li><a id="linkButton" href="#" title="create Link">Link</a></li>

                                                    <li><a id="unlinkButton" href="#" title="create Link">Unlink</a></li>

                                                </ul>

                                            </div>

                                            <button id="redoButton" type="button" class="btn btn-default"><span class="icon-undo"></span></button>

                                            <button id="undoButton" type="button" class="btn btn-default"><span class="icon-repeat"></span></button>

                                        </div>
                                        
                                        <iframe class="MyTextArea" name="textarea" id="textarea" frameborder="0"></iframe>

                                    </div>
                                </div>

                                <input type="text" id="description" class="form-control hidden" name="description" data-rule="255" data-validate="Please enter at least 255 digits">

                                <span class="error-message"></span>

                            </div>

                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">

                                <label class="text-black" for="dob">DATE POSTED</label> 

                                <input type="date" id="dob" class="form-control" name="dob" data-rule="10" data-validate="Please enter at least 10 digits">

                                <span class="error-message"></span>

                            </div>

                        </div>
                        
                        <div class="row form-group">

                            <div class="col-md-12">
                                
                                <button type="button" class="btn btn-primary btn-lg btn-block" name="submitAddStudentsForm" id="submitAddStudentsForm">SUBMIT</button>

                            </div>

                        </div>
                </form>
                    
                </div>
                
                
            </div>
        </div>
        
        <?php
                    
                }

            }

        ?>


        <?php
        }

        ?>
    </div>
</div>
<script type="text/javascript">
    window.addEventListener("load", function(){
        var editor = textarea.document;
        editor.designMode = "on";

        boldButton.addEventListener("click", function () {
            if (boldButton.click){
                boldButton.className = "active btn btn-default";
                editor.execCommand("Bold", false, null); 

                if (boldButton.className == "active btn btn-default"){
                    boldButton.className = "btn btn-default"
                    editor.execCommand("Normal", false, null); 
                }
            } else{
                boldButton.className = "btn btn-default";

            }
        }, false);

        italicButton.addEventListener("click", function () {
            if (italicButton.click){
                italicButton.className = "active btn btn-default";
                editor.execCommand("Italic", false, null); 

                if (italicButton.className == "active btn btn-default"){
                    italicButton.className = "btn btn-default"
                    editor.execCommand("Normal", false, null); 
                }
            } else{
                italicButton.className = "btn btn-default";

            }
        }, false);

        italicButton.addEventListener("click", function () {
            if (italicButton.click){
                italicButton.className = "active btn btn-default";
                editor.execCommand("Italic", false, null); 

                if (italicButton.className == "active btn btn-default"){
                    italicButton.className = "btn btn-default"
                    editor.execCommand("Normal", false, null); 
                }
            } else{
                italicButton.className = "btn btn-default";

            }
        }, false);

        subButton.addEventListener("click", function () {
            if (subButton.click){
                subButton.className = "active btn btn-default";
                editor.execCommand("Subscript", false, null); 

                if (subButton.className == "active btn btn-default"){
                    subButton.className = "btn btn-default"
                    editor.execCommand("Normal", false, null); 
                }
            } else{
                subButton.className = "btn btn-default";

            }
        }, false);

        supButton.addEventListener("click", function () {
            if (supButton.click){
                supButton.className = "active btn btn-default";
                editor.execCommand("Superscript", false, null); 

                if (supButton.className == "active btn btn-default"){
                    supButton.className = "btn btn-default"
                    editor.execCommand("Normal", false, null); 
                }
            } else{
                supButton.className = "btn btn-default";

            }
        }, false);



        strikeButton.addEventListener("click", function () {
            if (strikeButton.click){
                strikeButton.className = "active btn btn-default";
                editor.execCommand("Strikethrough", false, null); 

                if (strikeButton.className == "active btn btn-default"){
                    strikeButton.className = "btn btn-default"
                    editor.execCommand("Normal", false, null); 
                }
            } else{
                strikeButton.className = "btn btn-default";

            }
        }, false);

        orderedButton.addEventListener("click", function () {
            if (orderedButton.click){
                orderedButton.className = "active btn btn-default";
                editor.execCommand("InsertOrderedList", false, "newOL" + Math.round(Math.random() * 1000));

                if (orderedButton.className == "active btn btn-default"){
                    orderedButton.className = "btn btn-default"
                    editor.execCommand("Normal", false, null); 
                }
            } else{
                orderedButton.className = "btn btn-default";

            }
        }, false);

        unorderedButton.addEventListener("click", function () {
            if (unorderedButton.click){
                unorderedButton.className = "active btn btn-default";
                editor.execCommand("InsertUnorderedList", false, "newOL" + Math.round(Math.random() * 1000)); 

                if (unorderedButton.className == "active btn btn-default"){
                    unorderedButton.className = "btn btn-default"
                    editor.execCommand("Normal", false, null); 
                }
            } else{
                unorderedButton.className = "btn btn-default";

            }
        }, false);

        fontChanger.addEventListener("change", function () {
            if (fontChanger.click){
                fontChanger.className = "active btn btn-default";
                editor.execCommand("FontName", false, event.target.value); 

                if (fontChanger.className == "active btn btn-default"){
                    fontChanger.className = "btn btn-default"
                    editor.execCommand("Normal", false, null); 
                }
            } else{
                fontChanger.className = "btn btn-default";

            }
        }, false);

        fontSizeChanger.addEventListener("change", function () {
            if (fontSizeChanger.click){
                fontSizeChanger.className = "active btn btn-default";
                editor.execCommand("FontSize", false, event.target.value); 

                if (fontSizeChanger.className == "active btn btn-default"){
                    fontSizeChanger.className = "btn btn-default"
                    editor.execCommand("Normal", false, null);
                    editor.cursor;
                }
            } else{
                fontSizeChanger.className = "btn btn-default";

            }
        }, false);

        redoButton.addEventListener("click", function () {
            editor.execCommand("undo", false, null); 
        }, false);

        undoButton.addEventListener("click", function () {
            editor.execCommand("redo", false, null); 
        }, false);


    });
</script>

<?php

include "inc/footer.php";
?>
<script type="text/javascript">
    
    $("iframe body").keyup(function(){
        console.log(1);
        console.log($("iframe body").html());
    })
    document.addEventListener("load", function(){
       
        
        console.log($("iframe body").html());
        
    });
    
</script>
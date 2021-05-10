<?php

include "inc/header.php";

?>
<section class="main" style="background-color: #f5f5f5;">
    <?php
    if(isset($_GET['pay'])){
        if(isset($_POST['submitPay'])){
            
            $students_name = get_post($_POST['fullname']);
            $parents_name = get_post($_POST['parentname']);
            $parents_phone = get_post($_POST['phone']);
            $address = get_post($_POST['address']);
            $country = get_post($_POST['country']);
            $currency = get_post($_POST['currency']);
            $amount = get_post($_POST['amount']);
            $time = time();
            
            $query = "INSERT INTO `tblpayemets` (`id`, `students_name`, `parents_name`, `parents_phone`, `address`, `country`, `currency`, `amount`,`datePayed`) VALUES (NULL, '$students_name', '$parents_name', '$parents_phone', '$address', '$country', '$currency', '$amount', '$time')";
            
            query_mysqli($query);
            ?>
    
<div class="modal fade in" id="myModal" role="dialog">

    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      
          <div class="modal-content">
        
              <div class="modal-header">
          
                  <button type="button" class="close" data-dismiss="modal"><span class="icon-close2"></span></button>
          
                  <h4 class="modal-title" style="text-transform: uppercase;"><i class="icon-trophy" style="color: #4caf50!important"></i> SUCCESS</h4>
        
              </div>
        
              <div class="modal-body">
                  <p>Thank you <?php echo $parents_name;?>. Your payement has been successfull sent.</p>
                  <p>Please go to the schools administration to get your receipt please.</p>
                  <p>Have a nice day, and don't forget to enjoy yourself.</p>
                  
              </div>
        
              <div class="modal-footer">
                  <a href="#"  data-dismiss="modal" class="btn btn-lg btn-success">CLOSE</a>
        
              </div>
      
          </div>
    
      </div>
</div>
    <?php
        }
       
        ?>
    
    <div class="jumbotron">
        <div class="container">
            <h2>pay for student's fees</h2>
            <ul class="breadcrumb">

                <li class="active"><a href="index.php">Home</a></li>

                <li><a href="#">pay</a></li>
            </ul>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="payementForm">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?pay=" class="form-horizontal" name="contactForm">
                        <div class="form-group">

                            <div class="col-md-12">
                                
                                <h2 class="section-header"><span class="font-weight-bold">Pay</span></h2>

                            </div>
                        </div>
                        <div class="row form-group">

                            <div class="col-md-6">

                                <label class="text-black" for="fullname">students name</label>

                                <input type="text" id="fullname" class="form-control" name="fullname" data-rule="20" data-validate="Please enter at least 20 chars">

                                <span class="error-message"></span>

                            </div>

                            <div class="col-md-6">

                                <label class="text-black" for="lname">parents name</label>

                                <input type="text" id="parentname" class="form-control" name="parentname" data-rule="20" data-validate="Please enter at least 20 chars">

                                <span class="error-message"></span>

                            </div>

                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">

                                <label class="text-black" for="email">parents phone</label> 

                                <input type="number" id="phone" class="form-control" name="phone" data-rule="10" data-validate="Please enter at least 10 digits">

                                <span class="error-message"></span>

                            </div>

                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">

                                <label class="text-black" for="subject">address</label> 

                                <input type="text" id="address" class="form-control" name="address" data-rule="20" data-validate="Please enter at least 20 chars">

                                <span class="error-message"></span>

                            </div>

                        </div>

                        <div class="row form-group">

                            <div class="col-md-4">

                                <label class="text-black" for="country">Country</label> 
                                
                                <select class="form-control" id="country" name="country" data-validate="Please enter select either one of the options">
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="British Virgin Islands">British Virgin Islands</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Republic of Democratic Congo">Republic of Democratic Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire (ivory Coast)">Cote D'ivoire (ivory Coast)</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curacao">Curacao</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Gaza">Gaza</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard &amp; McDonald Islands">Heard &amp; McDonald Islands</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Kosovo">Kosovo</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia, Yugoslavia">Macedonia, Yugoslavia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="North Korea">North Korea</option>
                                    <option value="Northern Ireland">Northern Ireland</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="PPalau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="S. Georgia &amp; South Sandwich">S. Georgia &amp; South Sandwich</option>
                                    <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Martin">Saint Martin</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent &amp; Grenadines">Saint Vincent &amp; Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome And Principe">Sao Tome And Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Sint Maarten">Sint Maarten</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Korea">South Korea</option>
                                    <option value="South Sudan">South Sudan</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="St. Helena">St. Helena</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad And Tobago">Trinidad And Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="US Outlying Islands">US Outlying Islands</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican City">Vatican City</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">West Bank</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe" selected>Zimbabwe</option>
                                </select>

                                <span class="error-message"></span>

                            </div>
                            
                            <div class="col-md-4">
                                
                                <label class="text-black" for="currency">Currency</label> 
                                
                                <select name="currency" class="form-control" id="currency" data-validate="Please enter select either one of the options">
                                    <option value="rtgs">RTGS</option>
                                    <option value="usd">USD</option>
                                    <option value="rands">RANDS</option>
                                </select>
                            </div>
                            
                            <div class="col-md-4">
                                
                                <label class="text-black" for="currency">Amount</label> 
                                <?php
         
        if($_GET['pay'] == "zjc"){
            ?>
                                <select name="amount" class="form-control" id="amount" data-validate="Please enter select either one of the options">
                                    <option value="89">89</option>
                                    <option value="119">119</option>
                                    <option value="139">139</option>
                                </select>
                                <?php
        } else{
            if($_GET['pay'] == "olevel"){
                ?>
                                <select name="amount" class="form-control" id="amount" data-validate="Please enter select either one of the options">
                                    <option value="119">119</option>
                                    <option value="89">89</option>
                                    <option value="139">139</option>
                                </select>
                                <?php
            } else{
                                ?>
                                <select name="amount" class="form-control" id="amount" data-validate="Please enter select either one of the options">
                                    <option value="139">139</option>
                                    <option value="119">119</option>
                                    <option value="89">89</option>
                                </select>
                                <?php
            }
        }
                                ?>
                            </div>
                            
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <button id="pay" type="button" class="btn btn-lg btn-block btn-default" name="submitPay">Pay</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <?php
    } else{
        ?>
    <div class="jumbotron">
        <div class="container">
            <h2>pay for student's fees</h2>
            <ul class="breadcrumb">

                <li class="active"><a href="index.php">Home</a></li>

                <li><a href="#">pay</a></li>
            </ul>
        </div>
    </div>
    
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
    
    <?php
    }
    ?>
</section>
<?php

include "inc/footer.php";

?>

<script type="text/javascript">
    
    var fullname = document.getElementById("fullname");
    
    var parentname = document.getElementById("parentname");
    
    var phone = document.getElementById("phone");
    
    var address = document.getElementById("address");
    
    var country = document.getElementById("country");
    
    var currency = document.getElementById("currency");
    
    var amount = document.getElementById("amount");
    
    var submitBtn = document.getElementById("pay");
    
    
    fullname.addEventListener("blur", function(){
        
        if(fullname.value.length == null || fullname.value.length == 0 || fullname.value.length > Number(fullname.getAttribute("data-rule"))){
            $('#fullname').next('.error-message').html("<span class='error-message-content'>" + $("#fullname").attr('data-validate') + "</span>");
        } else{
            $("#fullname").next('.error-message').html("<i class='icon-check2'></i>")
        }
        
    });
    
    parentname.addEventListener("blur", function(){
       
        if(parentname.value.length == null || parentname.value.length == 0 || parentname.value.length > Number(parentname.getAttribute("data-rule"))){
            $("#parentname").next('.error-message').html("<span class='error-message-content'>" + $("#parentname").attr('data-validate') + "</span>");
        } else{
            $("#parentname").next('.error-message').html("<i class='icon-check2'></i>")
        }
        
    });
    
    phone.addEventListener("blur", function(){
       
        if(phone.value.length == null || phone.value.length == 0 || phone.value.length > Number(phone.getAttribute("data-rule"))){
            $("#phone").next('.error-message').html("<span class='error-message-content'>" + $("#phone").attr('data-validate') + "</span>");
        } else{
            $("#phone").next('.error-message').html("<i class='icon-check2'></i>");
            submitBtn.setAttribute('type', 'submit');
        }
        
    });
    
    address.addEventListener("blur", function(){
        if(address.value.length == null || address.value.length == 0 || address.value.length > Number(address.getAttribute("data-rule"))){
            $("#address").next('.error-message').html("<span class='error-message-content'>" + $("#address").attr('data-validate') + "</span>");
        } else{
            $("#address").next('.error-message').html("<i class='icon-check2'></i>")
        }
                
    });
    
        
    
    submitBtn.addEventListener("click", function(){
        
        if(fullname.value.length == null || fullname.value.length == 0 || fullname.value.length > Number(fullname.getAttribute("data-rule"))){
            $('#fullname').next('.error-message').html("<span class='error-message-content'>" + $("#fullname").attr('data-validate') + "</span>");
        } else{
            $("#fullname").next('.error-message').html("<i class='icon-check2'></i>")
        }
        
        if(parentname.value.length == null || parentname.value.length == 0 || parentname.value.length > Number(parentname.getAttribute("data-rule"))){
            $("#parentname").next('.error-message').html("<span class='error-message-content'>" + $("#parentname").attr('data-validate') + "</span>");
        } else{
            $("#parentname").next('.error-message').html("<i class='icon-check2'></i>")
        }
        
        if(phone.value.length == null || phone.value.length == 0 || phone.value.length > Number(phone.getAttribute("data-rule"))){
            $("#phone").next('.error-message').html("<span class='error-message-content'>" + $("#phone").attr('data-validate') + "</span>");
        } else{
            $("#phone").next('.error-message').html("<i class='icon-check2'></i>");
            submitBtn.setAttribute('type', 'submit');
        }if(address.value.length == null || address.value.length == 0 || address.value.length > Number(address.getAttribute("data-rule"))){
            $("#address").next('.error-message').html("<span class='error-message-content'>" + $("#address").attr('data-validate') + "</span>");
        } else{
            $("#address").next('.error-message').html("<i class='icon-check2'></i>")
        }
    }, true);

    
</script>
<?php

if(isset($_POST['submitPay'])){
    ?>
<script type="text/javascript">
$(document).ready(function(){

    $("#myModal").modal("show");

});

</script>
<?php
}

?>
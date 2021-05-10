<?php

include "../inc/func.php";

if(isset($_GET['username'])){
    $query ="SELECT * FROM `useraccounts` WHERE `ACCOUNT_USERNAME` = '".$_GET['username']."'";
    
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $ACCOUNT_USERNAME = $row['ACCOUNT_USERNAME'];
        }
        $query = "SELECT * FROM `tbllogs` WHERE `userName` = '$ACCOUNT_USERNAME'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $loggedRole = $row['logRole'];
                if($loggedRole == "Logged in"){
                    echo "Account Found and Unavailable";
                }else{
                    if($loggedRole == "Logged out"){
                    
                        echo "Account Found and available";
                    }else{
                        echo $_GET['username'];
                    }
                }
            }
            
        } else{
            echo $_GET['username'];
            
        }
        
    }else{
        echo "Username Not Found";
    }
    
}else{
    echo "Username is required to complete check";
}

?>

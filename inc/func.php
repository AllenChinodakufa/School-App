
<?php

include "conn.php";


// FUNCTION TO CREATE A QUERY A VALUE FOR MYSQL
function query_mysqli($query) {
    global $conn;
    
    $result = mysqli_query($conn, $query);
    
    return $result;
}


// FUNCTION TO GET INPUT FROM A USER
function get_post($var) {
    
    $var = htmlentities($var);
    
    $var = stripslashes($var);
    
    $var = strip_tags($var);
    
    global $conn;
    
    return mysqli_real_escape_string($conn, $var);

}


// FUNCTION TO DESTROY SESSIONS OF A USER
function logout_check($user) {
    $_SESSION = array();
    
    if (session_id() != "" || isset($_COOKIE['loggedin'])) {
        setcookie('loggedin', "$user", time()-(86400 * 30), '/');
    }
    
    session_destroy();    

}


// FUNCTION TO DESTROY SESSIONS OF A USER
function login_check($user) {
    
    if (isset($user)){
        echo "You are already loggedin $user";
    }elseif(isset($_COOKIE[''.$user.''])){
        echo "You are already loggedin";        
    }
    

}


// FUNCTION TO SHOW THE USERS PROFILE PHOTO
function show_profile($user) {
    
    if(file_exists("img/members/profile/$user.jpg")){
        echo "img/members/profile/$user.jpg";
    } else{
        echo "img/members/profile/user.png";
    }
    

}


// FUNCTION TO SHOW THE USERS PROFILE PHOTO
function show_cover_photo($user){
    
    if(file_exists("img/coverphoto/$user.jpg")){
        echo "style='img:url('img/coverphoto/$user.jpg')";
    } else{
        echo "class='bg-aqua-active'";
    }
    

}


?>
<?
        
        unset($_COOKIE['user_id']);
        unset($_SESSION['user_id']);
        setcookie("user_id",null,-1,'/');
        session_destroy();
        header('Location: /index.php');  
        exit();     
    
  
    ?>
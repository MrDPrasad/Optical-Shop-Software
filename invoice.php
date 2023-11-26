<?php
if (isset($_SESSION['auth'])) 
{
    if ($_SESSION['role_as'] != 1) 
    {
        $_SESSION['message'] = " You are not autherized to access this page";
        header('Location: loginpage.php');
    }
    
}

?>
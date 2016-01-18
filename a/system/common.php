<?php

    session_start();

    date_default_timezone_set('America/Chicago');

    if(!isset($_SESSION['siteadmin'])){
        require('includes/signin.php');
        die;
    }else{
        $user_name = $_SESSION['adminname'];
        $user_role = $_SESSION['adminrole'];
        $user_username = $_SESSION['adminusername'];
        $user_id = $_SESSION['adminid'];
    }

    require($_SERVER['DOCUMENT_ROOT'].'/config.php');

    //Set Database
    $db = new PDO("mysql:dbname=$dbname;host=$dbhost", $dbuser, $dbpass);

    function humanDate($input){
        $time = strtotime($input);
        return date("F j, Y g:i a [T]", $time);
    }

    function humanRole($int){
        switch($int){
            case 0:
                return "Bystander";
            case 1:
                return "Blogger";
            case 2:
                return "Content Editor";
            case 3:
                return "Content Creator";
            case 4:
                return "Minute Admin";
            case 5:
                return "Super Admin";
            default:
                return null;
        }
    }

    function humanName($id){
        global $db;
        $stmt = $db->prepare('SELECT `name` FROM `cms_users` WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $name = $stmt->fetch()[0];
        if($name == null)
            return "unknown";
        else
            return $name;
    }

function getDomain($url){
    return parse_url($url)['host'];
}

?>
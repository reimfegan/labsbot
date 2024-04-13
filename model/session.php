<?
$userId = $_COOKIE['user_id']?? null;
if ($userId) {
    header('Location: /menu.php');
    exit(0);
}

?>
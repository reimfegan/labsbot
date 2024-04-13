<?
 
    $sql = "SELECT * FROM users WHERE id = '" . $_COOKIE['user_id'] . "'";
    $result = $connection -> query($sql);

    // Использование цикла для кнопок:
    $sql = "SELECT `status` FROM users WHERE id = '" . $_COOKIE['user_id'] . "'";
    $results = $connection -> query($sql);
    

    


    
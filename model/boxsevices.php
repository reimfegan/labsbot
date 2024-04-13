<?
 
    $sql = 'SELECT * FROM services';
    $result = $connection -> query($sql);

    // Использование цикла foreach:
    foreach ($result as $res){
        echo "<div class='box-indiv hidden' id='div".$res['id']."'>";
            
        echo  "<h1>". $res['title'] . "</h1>";
        echo  "<p>". $res['text']."</p>";
        
        echo  "<h3>Стандартная цена: ".$res['price']." р.</h3>";
        
        echo   "<div>";
        echo      " <a href=''>Заказать проект</a>";

        echo     "<a onclick='closeall(1)'>Закрыть</a>";
        
        echo "</div>";

        echo " </div>";
    }


    
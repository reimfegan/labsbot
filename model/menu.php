<?
    
    $sql = 'SELECT * FROM menu';
    $result = $connection -> query($sql);

    // Использование цикла foreach:
        ?><div class="menu"><?
    foreach ($result as $res){
        echo "<a onclick='toggleDivs(". $res['id'].")' href='#div". $res['id']."'>". $res['title']."</a>";
    }
    
    ?></div>

   


    
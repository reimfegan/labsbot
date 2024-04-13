<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Платформа Тэк</title>
</head>
<body>
    
    <? 
    include "model/session.php";
    
    include "model/registration.php";

    include "model/login.php";
    
    include "view/login.html";
    
    include "view/register.html";
    
    ?>

    <script>
        function toggleDivs(divNumber) {
          var div1 = document.getElementById('div1');
          var div2 = document.getElementById('div2');
        
          if (divNumber === 1) {
            div1.classList.add('hidden');
            div2.classList.remove('hidden');
          } else if (divNumber === 2) {
            div2.classList.add('hidden');
            div1.classList.remove('hidden');
          }
        }
    </script>
        
</body>
</html>
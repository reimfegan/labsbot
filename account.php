<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/pc.css">
    <title>Личный кабинет</title>
</head>
<body>
<? session_start(); include "core/db.php";?>

    <div class="container" >

        <div class="screen">

            <div class="screen__content">
                <div class="menu-box box-ac">

                
                    
                    <div class="menu">
                        <div class="account ac">
                            <?include "model/account.php";
                            foreach ($result as $res){
                            echo  "<h1>".$res['name']."</h1>";
                            echo"<p>Номер:".$res['number']."</p>";
                            echo"<p>Статус:".$res['status']."</p>";
                            }
                            ?>

                        </div>

                        <a href="menu.php"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M22 22L2 22" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M2 11L10.1259 4.49931C11.2216 3.62279 12.7784 3.62279 13.8741 4.49931L22 11" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path opacity="0.5" d="M15.5 5.5V3.5C15.5 3.22386 15.7239 3 16 3H18.5C18.7761 3 19 3.22386 19 3.5V8.5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M4 22V9.5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M20 22V9.5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path opacity="0.5" d="M15 22V17C15 15.5858 15 14.8787 14.5607 14.4393C14.1213 14 13.4142 14 12 14C10.5858 14 9.87868 14 9.43934 14.4393C9 14.8787 9 15.5858 9 17V22" stroke="#ffffff" stroke-width="1.5"></path> <path opacity="0.5" d="M14 9.5C14 10.6046 13.1046 11.5 12 11.5C10.8954 11.5 10 10.6046 10 9.5C10 8.39543 10.8954 7.5 12 7.5C13.1046 7.5 14 8.39543 14 9.5Z" stroke="#ffffff" stroke-width="1.5"></path> </g></svg></a>

                        <a href="">Отредактировать профиль</a>

                        <?  foreach ($results as $ress){
                            
                            if ($ress['status'] == 'Администратор'){
                                echo"<a href=''>Админ панель</a>";
                            }
                            else{
                                echo"<a href=''>Стать сотрудником</a>";
                            }
                            
                            } ?>
                            <a id="exit" href="model/exit.php">Выйти из личного кабинета</a>


                            
                    </div>
                   
                    <div class="menu-block cardaccount">

<div class="box-indiv">
    
<h1>Заказы</h1>

<div class="box-status">

    <h2>Дипломный проект</h2>

    <p>Статус заказа:Обрабатывается</p>

    <a href="">Отменить заказ</a>

</div>

</div>

</div>
                </div>
            
            </div>

        </div>      
    </div>
    <div class="screen__background">

        <span class="screen__background__shape screen__background__shape4"></span>
        
        <span class="screen__background__shape screen__background__shape3"></span>		
        
        <span class="screen__background__shape screen__background__shape2"></span>
        
        <span class="screen__background__shape screen__background__shape1"></span>
    
    </div>		
    
</body>
</html>
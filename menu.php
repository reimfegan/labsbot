<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/pc.css">
    <title>Платформа Тэк</title>
</head>
<body>
<? session_start(); include "core/db.php";?>

    <div class="container" >

        <div class="screen">

            <div class="screen__content">

                <div class="menu-box">

                    <div class="header">

                        <h1>Платформа Тэк'а</h1>

                        <p>Упрости свою учебы еще больше</p>

                    </div>

                    <a href="account.php" class="account">

                        <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>profile_round [#1346]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-380.000000, -2119.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M338.083123,1964.99998 C338.083123,1962.79398 336.251842,1960.99998 334,1960.99998 C331.748158,1960.99998 329.916877,1962.79398 329.916877,1964.99998 C329.916877,1967.20599 331.748158,1968.99999 334,1968.99999 C336.251842,1968.99999 338.083123,1967.20599 338.083123,1964.99998 M341.945758,1979 L340.124685,1979 C339.561214,1979 339.103904,1978.552 339.103904,1978 C339.103904,1977.448 339.561214,1977 340.124685,1977 L340.5626,1977 C341.26898,1977 341.790599,1976.303 341.523154,1975.662 C340.286989,1972.69799 337.383888,1970.99999 334,1970.99999 C330.616112,1970.99999 327.713011,1972.69799 326.476846,1975.662 C326.209401,1976.303 326.73102,1977 327.4374,1977 L327.875315,1977 C328.438786,1977 328.896096,1977.448 328.896096,1978 C328.896096,1978.552 328.438786,1979 327.875315,1979 L326.054242,1979 C324.778266,1979 323.773818,1977.857 324.044325,1976.636 C324.787453,1973.27699 327.107688,1970.79799 330.163906,1969.67299 C328.769519,1968.57399 327.875315,1966.88999 327.875315,1964.99998 C327.875315,1961.44898 331.023403,1958.61898 334.733941,1959.04198 C337.422678,1959.34798 339.650022,1961.44698 340.05323,1964.06998 C340.400296,1966.33099 339.456073,1968.39599 337.836094,1969.67299 C340.892312,1970.79799 343.212547,1973.27699 343.955675,1976.636 C344.226182,1977.857 343.221734,1979 341.945758,1979 M337.062342,1978 C337.062342,1978.552 336.605033,1979 336.041562,1979 L331.958438,1979 C331.394967,1979 330.937658,1978.552 330.937658,1978 C330.937658,1977.448 331.394967,1977 331.958438,1977 L336.041562,1977 C336.605033,1977 337.062342,1977.448 337.062342,1978" id="profile_round-[#1346]"> </path> </g> </g> </g> </g></svg>

                        <h1>Личный кабинет</h1>

                    </a>

                    <? include "model/menu.php"; ?>

                    <div class="menu-block">

                        <? include "model/boxsevices.php";  ?>
                    <!-- Сделать цикл с выводом из базы !-->
                    </div>

                    <div class="news">
                            <h1>Новостная лента</h1>
                            <div class="news-box">
                                <h2>Новость дня</h2>
                                <p>Повышение цен будет ближе к сдаче</p>
                            </div>
                            <div class="news-box">
                                <h2>Вчерашние новости</h2>
                                <p>Сегодня лаборант Антон сделал блок с селекторами</p>
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
    <script>

        function toggleDivs(divNumber) {
          var div1 = document.getElementById('div1');
          var div2 = document.getElementById('div2');
          var div3 = document.getElementById('div3');
          var div4 = document.getElementById('div4');
        
          if (divNumber === 1) {
            div1.classList.remove('hidden');
            div2.classList.add('hidden');
            div3.classList.add('hidden');
            div4.classList.add('hidden');
            
            
          } else if (divNumber === 2) {
            div1.classList.add('hidden');
            div2.classList.remove('hidden');
            div3.classList.add('hidden');
            div4.classList.add('hidden');
          }
          else if (divNumber === 3) {
            div1.classList.add('hidden');
            div2.classList.add('hidden');
            div3.classList.remove('hidden');
            div4.classList.add('hidden');
          }
          else if (divNumber === 4) {
            div1.classList.add('hidden');
            div2.classList.add('hidden');
            div3.classList.add('hidden');
            div4.classList.remove('hidden');
          }
        }
        function closeall(divNumber) {
          var div1 = document.getElementById('div1');
          var div2 = document.getElementById('div2');
          var div3 = document.getElementById('div3');
          var div4 = document.getElementById('div4');
          if (divNumber === 1) {
            div1.classList.add('hidden');
             div2.classList.add('hidden');
             div3.classList.add('hidden');
             div4.classList.add('hidden');
            }
        }
        </script>   
</body>
</html>
<!DOCTYPE html>
<html lang='en'>
<?php
        require_once('header.php');
    ?>
  <head>
    <meta charset='utf-8' />
    <link href='../js/fullcalendar-5.6.0/lib/main.css' rel='stylesheet' />
    <script src='../js/fullcalendar-5.6.0/lib/main.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/calendar.js"></script>


    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../estilos/style.css" rel="stylesheet">
  </head>

  <body>
  <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <div class="list-group">
                    <a href="index.php" class="list-group-item list-group-item-action">Escritorio</a>
                    <a href="calendar.php" class="list-group-item list-group-item-action">Calendario</a>
                    <a href="#" class="list-group-item list-group-item-action">Correos</a>
                    <a href="#" class="list-group-item list-group-item-action">Configuración</a>
                </div>
            </div>
           

            <div class="col-sm-10" id="columna2">
                <div class="row">
                    <div class="col sm-3">
                        <img src="..\assets\logos\chillmarin.png" id="main-logo" class="float-start">
                    </div>

                    <div class="col sm-7">
                        <img src="..\assets\iconos\user.svg" id="profile-icon" class="float-end">
                    </div>
                </div>
                    
                <div id='calendar'></div>

                <div class="row">
                    <h1>epale</h1>
                </div>

                <div class="row">
                    <h1>epale</h1>
                </div>
            </div>
        
    </div>

    <h1>epale</h1>

    

 
  </body>



  
</html>


<html>
 <head>
   <meta charset="utf-8">
   <title>Pizzas</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
 <!-- VERIFICACION LA CONEXION CON LA BASE DE DATOS  -->
 <?php include 'conexion.php';?>  

  <body>
     <div class="baner">
       <img src="images/Pizzas real.png">
       <h1  >Pizza Real</h1>
     </div>
     <div class="nav">
       <ul>
         <li><a href="contacto.php"> Contactos </a></li>
         <li><a href="buscador.php"> Buscador  </a></li>
         <li><a href="Principal.php">Principal </a></li>
       </ul>
     </div>
     <h1 class="tit"> Menú </h1>
     <div>
       <!-- MOSTRAR LAS TABLAS DE LA BASE DE DATOS --> 
        <?php while($columna = mysqli_fetch_array( $resultado)){?>
        <ul class="menu">
          <div class="nom">
            <li> <a href=""> <h3><?php echo $columna ['nombre'] ?></h3></a></li> <br>     <!-- el "a" de aqui podira mandar a otra pestaña donde se generaria la orden, pero solo esta por si acaso -->
            <?php echo $columna ['ingrediente'] ?>
            <hr>
          </div>
          <div id="img"><img  src="images/<?php echo $columna ['imagen'] ?> "></div>
          <div class="tam">
            <p>Precios:</p>
            CH = <?php echo $columna ['ch'] ?> <br>
            M  = <?php echo $columna ['m'] ?> <br>
            G  = <?php echo $columna ['g'] ?> <br>
          </div>
          
        </ul>
        <?php }?>
     </div>
     <video src="images/video.mp4" autoplay loop muted>
    </body>
  
</html>
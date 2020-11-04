<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/styles.css">

</head>
<body>
   <header>
       <div class="mycontainer">
           <div class="logo left">
               <p><a href="<?php echo RUTA;?>" > My Blog</a></p>
           </div>

           <div class="right">
               <form action="<?php echo RUTA;?>/search.php" method="GET" name="search" class="search">
                  <input type="text" name="search" placeholder="search">
                  <button type="submit" class="icon fa fa-search"></button>
            </form>
            <nav class="menu">
                <ul>
                    <li><a href="#"> <i class=" fa fa-twitter"></i></a></li>
                    <li><a href="#"> <i class="  fa fa-facebook"></i></a></li>
                    <li><a href="#">contact <i class="icon fa fa-envelope"></i></a></li>


                </ul>
            </nav>

           </div>

       </div>
</header>

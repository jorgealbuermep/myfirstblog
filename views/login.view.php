<?php require 'header.php';?>

<div class="mycontiner">
<div class="post">
        <article>
            <h2 class='tittle'> Log In </h2>
             <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="myform" method="POST">
               <input type="text" name="user" placeholder="User:">
               <input type="password" name="password" placeholder="Password:">
               <input type="submit" value="Log In">
              </form>
           </article>
<div >

</div>


<?php require 'footer.php';?>

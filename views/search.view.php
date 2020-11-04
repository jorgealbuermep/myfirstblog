<?php
require 'header.php';

?>

<div class="mycontainer">
<h2><?php echo $tittle;?></h2>

   <?php foreach($results as $post):?>

    <div class="post">
        <article>
            <h2 class='tittle'><a href="single.php?id= <?php echo $post['id'];?>"> <?php echo $post['tittle'];?></a>  </h2>
            <p class="date">  <?php echo Adate ($post['date']);?></p>
            <div class="thumb">
                <a href=" <?php echo $post['tittle'];?>">
                    <img src="images/<?php echo $post['thumb'];?>" alt="">
                </a>
            </div>
            <p class="extract"><?php echo $post['extract'];?></p>
            <a href="#" class="continue"> continue Reading</a>
        </article>
    </div>
<?php endforeach;?>
<div>
<?php require 'pagination.php';?>
</div>
<?php require 'footer.php'?>

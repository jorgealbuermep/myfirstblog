<?php session_start();
require 'header.php';

?>

<div class="mycontainer">
    <div class="post">
        <article>
            <h2 class='tittle'> <?php echo $post['tittle'];?> </h2>
            <p class="date"> <?php echo Adate($post['date']);?></p>
            <div class="thumb">

                    <img src="images/<?php echo $post['thumb'];?>" alt="">
                </a>
            </div>
<p class="extract">
<?php echo nl2br($post['textt']);?></p>

        </article>
    </div>
<div >

</div>
<?php require 'footer.php'?>

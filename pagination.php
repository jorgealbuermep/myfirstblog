<?php $num_pages = num_pages($blog_config['post_pher_page'],$conection);?>

<section class="pagination">
    <ul>
   <?php if(current_page()===1):?>
        <li class="disabled"> &laquo; </li>
        <?php else:?>
            <li><a href="index.php?p=<?php echo current_page()-1 ;?>"> &laquo;</a></li>
        <?php endif;?>
        <?php  for($i = 1; $i<= $num_pages; $i++): ?>

        <?php  if(current_page()===$i) :  ?>
        <li class="active">
        <?php echo $i;?>
        </li>
        <?php else:?>
        <li><a href="index.php?p=<?php echo $i ;?>"><?php echo $i;?></a></li>
        <?php endif;?>
        <?php endfor;?>

        <?php if(current_page()== $num_pages):?>
        <li class="disabled">&raquo;</li>
        <?php else:?>
        <li><a href="index.php?p=<?php echo current_page() +1 ;?>">&raquo;</a></li>
        <?php endif;?>

    </ul>


</section>

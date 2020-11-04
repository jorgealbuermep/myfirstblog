<?php require '../views/header_admin.php';?>

<div class="mycontainer">
<h2>Control Panel</h2>
<a href="new.php" class="btn"> New Post</a>
<a href="logout.php" class="btn">Log Out</a>


   <?php foreach($posts as $post):?>

    <div class="post">
        <article>
           <h2 class="tittle"><?php echo $post['id']. '.-'. $post['tittle'];?></h2>

           <a href="edit.php?id=<?php echo $post['id'];?>">Edit</a>
           <a href="../single.php?id=<?php echo $post['id'];?>">see</a>
           <a href="delete.php?id=<?php echo $post['id'];?>">Delete</a>
        </article>
    </div>
<?php endforeach;?>
<div>
<?php require '../pagination.php';?>
</div>
<?php require '../views/footer.php';?>

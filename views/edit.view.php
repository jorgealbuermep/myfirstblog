<?php require 'header_admin.php';?>
<div class="mycontainer">


<div class="post">
        <article>
            <h2 class='tittle'> Edit Article</h2>
            <form enctype="multipart/form-data" class="myform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <input type="hidden" value="<?php echo $post['id'];?>" name="id">
                <input type="text" name="tittle" value="<?php echo $post['tittle'];?>">
                 <input type="text" name="extract" value="<?php echo $post['extract'];?>">
                 <textarea name="text" ><?php echo $post['textt'];?>"</textarea>
                 <input type="file" name="thumb">
                 <input type="hidden" value="<?php echo $post['thumb'];?>" name="thumb-saved">

                 <input type="submit" value="edit article">


            </form>

        </article>
    </div>
</div>

<?php require 'footer.php';?>

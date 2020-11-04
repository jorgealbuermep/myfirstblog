<?php require 'header_admin.php';?>
<div class="mycontainer">

<div class="post">
        <article>
            <h2 class='tittle'> New  Article</h2>
            <form enctype="multipart/form-data" class="myform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

                <input type="text" name="tittle" placeholder="Article's tittle">
                 <input type="text" name="extract" placeholder="Article's extract">
                 <textarea name="text" placeholder="Article's text"></textarea>
                 <input type="file" name="thumb">
                 <input type="submit" value="create article">


            </form>

        </article>
    </div>
</div>

<?php require 'footer.php';?>

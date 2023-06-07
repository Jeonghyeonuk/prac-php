<?php
require('lib/print.php');
?>
<?php
require('view/top.php');
?>
    <a href="create.php">create</a>
    <?php if (isset($_GET['id'])) { ?>
    <a href="update.php?id=<?php echo $_GET['id'] ?>">update</a>
    <?php } ?>
    <h2>
        <?php
        print_title();
        ?>
    </h2>
    <?php
    print_desc();
    // echo $html;
    ?>

    <form action="update_process.php" method="post">
        <input type="hidden" name="old_title" value="<?= $_GET['id'] ?>">
        <p>
            <input type="text" name="title" placeholder="title" value="<?php print_title(); ?>">
        </p>
        <p>
            <textarea name="desc" id="" cols="30" rows="10" placeholder="desc"><?php print_desc(); ?></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>

</body>

</html>
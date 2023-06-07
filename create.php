<?php
require_once('lib/print.php');
?>
<?php
require('view/top.php');
?>
<a href="create.php">create</a>
<form action="create_process.php" method="post">
    <p>
        <input type="text" name="title" placeholder="title">
    </p>
    <p>
        <textarea name="desc" id="" cols="30" rows="10" placeholder="desc"></textarea>
    </p>
    <p>
        <input type="submit">
    </p>
</form>

</body>

</html>
<?php
file_put_contents('data/' . $_POST['title'], $_POST['desc']);
echo "<p>title : " . $_POST['title'] . "<p>";
echo "<p>desc : " . $_POST['desc'] . "<p>";
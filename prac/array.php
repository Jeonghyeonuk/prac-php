<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Array</h1>
    <?php
    $arr = array('1', '2', '3', 4, 5);
    echo $arr[3] . '<br>';
    array_push($arr, 'hyeonuk');
    var_dump($arr);
    ?>
</body>

</html>
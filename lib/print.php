<?php
function print_title()
{
    if (isset($_GET['id'])) {
        echo $_GET['id'];
    } else {
        echo "Welcome";
    }
}

function print_desc()
{
    if (isset($_GET['id'])) {
        echo file_get_contents("data/" . $_GET['id']);
    } else {
        echo "HELLO, PHP";
    }
}

function print_list()
{
    //data 디렉토리에있는 파일의 목록을 가져와 하나 하나를 li와
    //a태그를 이요해서 글 목록을 만든다
    $list = scandir("./data");
    $i = 0;
    while ($i < count($list)) {
        if ($list[$i] != '.') {
            if ($list[$i] != '..') {
                echo "<li><a href=\"index.php?id=$list[$i]\"> $list[$i]</a></li>\n";
            };
        };
        $i = $i + 1;
    }
}
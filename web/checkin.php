<?php
<pre class="wp-block-code"><code>&lt;?php

    $steam = $_GET["s"];
    $steamid = $_GET["i"];
    include_once('./sql.php');
    mysqli_query($conn , "set names utf8");//设置编码
    $sql = "INSERT INTO ls_application ".
        "(id,steam) ".
        "VALUES ".
        "('$steamid','$steam')";
        mysqli_select_db( $conn, 'RUNOOB' );
    $retval = mysqli_query( $conn, $sql );
    mysqli_close($conn);


    $arr = array('steam 64bit id' => $steamid,'nickname' => $steam,'number' => $numm);
        echo json_encode($arr,JSON_UNESCAPED_UNICODE);
    echo "Okay";
?>

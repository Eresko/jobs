<?php

if ($_POST['status'] == 1) {
    $date = date('Y-m-d', strtotime($_POST['date']));
    $id = $_POST['id'];

    $comMysql = new mysqli("localhost", "soso", "123qwe123", "soso");

    $result = $comMysql->query("select * from date where control='$id' and date='$date'");
    $resultInf = $result->fetch_assoc();
    $inf=['id'=>$_POST['id'],'date' => $_POST['date'],'text' => $resultInf['text']];
    echo   json_encode($inf);

}
if ($_POST['status'] == 2) {
    $comMysql = new mysqli("localhost", "soso", "123qwe123", "soso");
    $date = date('Y-m-d', strtotime($_POST['date']));
    $id = $_POST['id'];
    $text = $_POST['text'];

    $result = $comMysql->query("select * from date where control='$id' and date='$date'");
    if ($result->num_rows == 0) {
        $result = $comMysql->query("insert into date(id,date,text,control) value (NULL,'$date','$text','$id')");
    }
    else {
        $result = $comMysql->query("update date set text='$text' where control='$id' and date='$date'");
    }
    $inf=['id'=>$_POST['id'],'date' => $_POST['date'],'text' => $_POST['text']];
    echo   json_encode($inf);

}



?>
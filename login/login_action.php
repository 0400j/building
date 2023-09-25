<?php
include $_SERVER["DOCUMENT_ROOT"]."/system/pg.php";

if($_POST){
   $sql = "insert into login(no, name, password, save_time, save_status, session_id)
   VALUES(
       nextval('login_seq'),
       '".$_POST['name']."',
       '".$_POST['password']."',
       '".time()."',
       'Y',
       '".$_COOKIE['PHPSESSID']."'
   );";
    $result = pg_query($connect_db, $sql);
      $v = pg_fetch_array($result);
      echo "<script>location.href='../main.php';</script>";
      pg_close();
}else {
    echo "잘못된 접근입니다";
}
?>
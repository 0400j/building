<?php

include $_SERVER["DOCUMENT_ROOT"]."/system/pg.php";
if(!$_POST){ echo "<script>alert('잘못된 접근입니다'); location.href='/';</script>"; }

$status = $_POST['status'];
$status_arr = ['board_write'=>['subject'=>'게시글','status'=>'작성','move'=>'board.php'],
                'board_edit'=>['subject'=>'게시글','status'=>'수정','move'=>'board_view.php?no='.$_POST['board_no']],
                'reply_add'=>['subject'=>'댓글','status'=>'작성','move'=>'board_view.php?no='.$_POST['board_no']],
                'reply_remove'=>['subject'=>'댓글','status'=>'수정','move'=>'board_view.php?no='.$_POST['board_no']],
              ];

if($status ==  'board_write'){
  $sql = "insert into board(no, title, code, writer, view, contents, save_time, save_status, file)
       VALUES(
           nextval('board_seq'),
           '".$_POST['title']."',
           '".$_POST['code']."',
           '".$_POST['writer']."',
           '0',
           '".$_POST['contents']."',
           '".time()."',
           'Y',
           '".$_POST['file']."'
       );";
}else if($status == 'reply_add'){
  $sql = "insert into board_reply (no, board_no, writer, contents, save_time, save_status, session_id)
      VALUES(
        nextval('board_reply_seq'),
        '".$_POST['board_no']."',
        '".$_POST['writer']."',
        '".$_POST['contents']."',
        '".time()."',
        'Y',
        '".$_COOKIE['PHPSESSID']."'
      );";
}else if($status == 'reply_remove'){
  $sql = "update board_reply set save_status = 'N' where 
    no=".$_POST['reply_no']." and 
    board_no=".$_POST['board_no']."
  ";
}else if($status == 'board_edit'){
  $sql = "update board set title ='".$_POST['title']."',
  contents = '".$_POST['contents']."' where no='".$_POST['board_no']."' and writer ='".$_POST['writer']."'";
}
   $result = pg_query($connect_db, $sql);
   $v = pg_fetch_array($result);
   if($result==false)
   {
     echo $sql;
   }
   else
   {
      echo "<script>alert('".$_POST['writer']."님의 ".$status_arr[$status]['subject']."이 ".$status_arr[$status]['status']."되었습니다'); location.href='".$status_arr[$status]['move']."';</script>";
   }
   pg_close();
?>


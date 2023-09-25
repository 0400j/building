<?
session_start();
include $_SERVER["DOCUMENT_ROOT"]."/system/pg.php";
include $_SERVER["DOCUMENT_ROOT"]."/css/css.php";

$sql = "select * from board where save_status='Y' ";
$result=pg_query($connect_db, $sql);
$background = "OnMouseOver=style.background='#F5F5FF' OnMouseOut=style.background=''";
?>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
   <div class="main-wrapper">
   <?  include $_SERVER["DOCUMENT_ROOT"]."/common/top.php"; ?>
      <div class="board-wrapper">
            <div class="board-header">
               <span class="no">No.</span>
               <span class="title">제목</span>
               <span class="writer">작성자</span>
               <span class="date">날짜</span>
               <span class="">뷰</span>
            </div>
         <?php
            $sql = "select * from board where save_status='Y' order by no desc limit 12 ";
            $result=pg_query($connect_db, $sql);
            while($v = pg_fetch_array($result))
            {
               $sql_r = "select count(no) as count from board_reply where board_no =".$v['no']."and save_status='Y'";
               $result_r = pg_query($connect_db, $sql_r);
               while($v_r = pg_fetch_array($result_r))
               {
                  $reply = $v_r['count'];
               }
               // $titles = "<a class='board' href=\"board_view.php?no=".$v['no']."&writer=".$v['writer']."&view=".$v['view']."\">".$v['title']." [ ".$reply." ]</a>";
               $titles = "<a class='board' href=\"board_view.php?no=".$v['no']."\">".$v['title']." <span class='reply-cnt'>[ ".$reply." ]</span></a>";
         ?>
               <div class="board-list" <?=$background?>>
                  <div class="no" ><?=$v['no']?></div>
                  <div class="title"><?=$titles?></div>
                  <div class="writer"><?=$v['writer']?></div>
                  <div class="date"><?=date("m-d",$v['save_time'])?></div>
                  <div class="view"><?=$v['view']?></div>
               </div>
         <?}?>
      </div>
      <div class="btn-border board">
         <div class="btn-board" onClick="board_write();">글쓰기</div>
      </div>
      <?  include $_SERVER["DOCUMENT_ROOT"]."/common/footer.php"; ?>
   </div>
</body>

<script>
   function board_write(){ 
      location.href = "./board_write.php"; 
   }
</script>
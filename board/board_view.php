<?
session_start();
include $_SERVER["DOCUMENT_ROOT"]."/system/pg.php";
include $_SERVER["DOCUMENT_ROOT"]."/css/css.php";

// if(sdivlen($_SESSION['phone'])!=11) echo "<script>alert('잘못된 접근입니다'); location.href='/';</script>";

$sql = "update board set view = ".($_GET['view']+1)." where no=".$_GET['no'];
$result=pg_query($connect_db, $sql);

$array_code = Array("none"=>"일반", "question"=>"질문", "review"=>"후기");
?>
<script>
    function goEdit(){
      view.action = "./board_edit.php";
      view.submit();
    }

    function goReply(){
      let reply = document.forms['reply'];
      if(reply.contents.value == ""){
        alert("내용을 입력해주세요"); return false;
      }
      // reply.action="./board_action.php";
      reply.submit();
    }

    function goList(){
      location.href = "./board.php";
    }
</script>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<?
  $sql = "select * from board where save_status='Y' and no =".$_GET['no'];
  $result = pg_query($connect_db, $sql);
  $v = pg_fetch_array($result);

  $sql_user = "select * from login where session_id = '".$_COOKIE['PHPSESSID']."' order by no desc limit 1";
  $result = pg_query($connect_db, $sql_user);
  $nowUser = pg_fetch_array($result)['name'];
?>
<body>
  <div class="main-wrapper">
    <? include $_SERVER["DOCUMENT_ROOT"]."/common/top.php"; ?>
    <div class="board-view-wrapper">
      <div class="board-view-btn">
        <div class="btn-board" onclick="goList();">
          <div>목록</div>
        </div>
        <? if($nowUser) {?> 
        <div class="btn-board" onclick="goEdit();">
          <div>수정</div>
        </div>
        <?}?>
      </div>
      <form name="view" method="post">
        <div class="board-view">
          <div class="view-name">
              <div>이름</div><div><?=$v['writer']?></div>
          </div>
          <div class="view-title">
              <div>제목</div><div><?=$v['title']?></div>
          </div>
          <div class="view-contents">
              <div>내용</div><div><?=$v['contents']?></div>
          </div>
          <div class="view-file">
              <div>첨부파일</div>
              <div>
                  <? !$v['file']?$result = '파일 없음':$result = $v['file']?>
                  <? echo $result;?>
              </div>
          </div>
        </div>
          <input type="hidden" name="status" value="board_edit">
          <input type="hidden" name="board_no" value="<?=$v['no']?>">
          <input type="hidden" name="writer" value="<?=$nowUser?>">
          <input type="hidden" name="title" value="<?=$v['title']?>">
          <input type="hidden" name="contents" value="<?=$v['contents']?>">
      </form>

      <form name="reply" action="board_action.php" method="post">
        <div class="reply-wrapper">
          <div>
            <span>댓글</span>
          </div>
      
          <div class="reply-write-wrapper">
            <div><textarea name="contents" placeholder="댓글을 입력하세요" class="reply-textarea"></textarea></div>
            <div class="btn-reply reply" onclick="goReply();" >
              <div>작성</div>
            </div>
          </div>
        </div>
        <input type="hidden" name="status" value="reply_add">
        <input type="hidden" name="board_no" value="<?=$v['no']?>">
        <input type="hidden" name="writer" value="<?=$nowUser?>">
      </form>

      <?
      $sql_r = "select * from board_reply where save_status='Y' and board_no=".$_GET['no']." order by save_time desc";
      $result_r = pg_query($connect_db, $sql_r);
      while($v_r = pg_fetch_array($result_r))
      {
          $board_no = $v_r['board_no'];
          $reply_no = $v_r['no'];
      ?>
      <form name="reply-remove" action="board_action.php" method="post">
        <div class="reply-view-wrapper">
          <div class="writer-info-wrapper">
            <div class="writer-info">
              <div><?=$v_r['writer']?></div>
              <div class="date"><?=date("Y-m-d",$v_r['save_time'])?></div>
            </div>
            <? if($_COOKIE['PHPSESSID']==$v_r['session_id']){?>
              <div><input type="submit" class="btn-reply-remove" value="삭제"></div>
            <? }?>
          </div>
          <div><?=$v_r['contents']?></div>
        </div>
        <input type="hidden" name="reply_no" value="<?=$reply_no?>"> 
        <input type="hidden" name="status" value="reply_remove">
        <input type="hidden" name="board_no" value="<?=$_GET['no']?>">
        <input type="hidden" name="writer" value="<?=$nowUser?>">
      </form>
      <?}?>
    </div> 
    <? include $_SERVER["DOCUMENT_ROOT"]."/common/footer.php"; ?>
  </div>
</body>
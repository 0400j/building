<?
session_start();
include $_SERVER["DOCUMENT_ROOT"]."/system/pg.php";
include $_SERVER["DOCUMENT_ROOT"]."/css/css.php";

// if(sdivlen($_SESSION['phone'])!=11) echo "<script>alert('잘못된 접근입니다'); location.href='/';</script>";


?>
<script>
    function goList(){
      location.href = "./board.php";
    }
    function goWrite(){
      let write = document.forms['write'];
      if(write.contents.value == "" || write.title.value == ""){
        alert("내용을 입력해주세요"); return false;
      }      
      write.submit();      
    }
</script>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<?
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
        <!-- <div class="btn-board" onclick="edit();">
          <div>수정</div>
        </div> -->
      </div>
      <form name="write" action="board_action.php" method="post">
        <div class="board-view">
          <div class="view-name">
              <div>이름</div><div><?=$nowUser?></div>
          </div>
          <div class="view-title">
              <div>제목</div>
              <div>
                <input type="text" class="write-title" name="title" />
              </div>
          </div>
          <div class="view-contents">
              <div>내용</div><div><textarea name="contents" class="write-contents"></textarea></div>
          </div>
          <div class="view-file">
              <div>첨부파일</div>
              <div>
                  <? !$v['file']?$result = '파일 없음':$result = $v['file']?>
                  <? echo $result;?>
              </div>
          </div>
        </div>
          <input type="hidden" name="status" value="board_write">
          <input type="hidden" name="writer" value="<?=$nowUser?>">
      </form>
      <div class="btn-reply reply" onclick="goWrite();" >
        <div>작성</div>
      </div>
    </div>    
   <?include $_SERVER["DOCUMENT_ROOT"]."/common/footer.php";?> 
  </div>
</body>
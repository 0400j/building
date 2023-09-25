<?
session_start();
include $_SERVER["DOCUMENT_ROOT"]."/system/pg.php";
include $_SERVER["DOCUMENT_ROOT"]."/css/css.php";
?>
<script>
    function goEdit(){
        edit.action = "./board_action.php";
        edit.submit();
    }

    function goList(){
      location.href = "./board.php";
    }
</script>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
  <div class="main-wrapper">
    <? include $_SERVER["DOCUMENT_ROOT"]."/common/top.php"; ?>
    <div class="board-view-wrapper">
      <div class="board-view-btn">
        <div class="btn-board">
          <div onclick="goList();">목록</div>
        </div>
        <div class="btn-board">
          <? if($_POST['writer']) {?> <div onclick="goEdit();">작성</div><?}?>
        </div>
      </div>
      <form name="edit" method="post">
        <div class="board-view">
          <div class="view-name">
              <div>이름</div><div><?=$_POST['writer']?></div>
          </div>
          <div class="view-title">
              <div>제목</div>
                <div>
                  <input type="text" class="write-title" name="title" value="<?=$_POST['title']?>">
              </div>
          </div>
          <div class="view-contents">
              <div>내용</div>
                <div>
                  <input type="text" class="write-contents" name="contents" value="<?=$_POST['contents']?>">
              </div>
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
          <input type="hidden" name="board_no" value="<?=$_POST['board_no']?>">
          <input type="hidden" name="writer" value="<?=$_POST['writer']?>">
      </form>
    </div> 
    <? include $_SERVER["DOCUMENT_ROOT"]."/common/footer.php"; ?>
  </div>
</body>
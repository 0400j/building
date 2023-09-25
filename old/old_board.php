<?php
   session_start();
   include $_SERVER["DOCUMENT_ROOT"]."/system/pg.php";
   // if(strlen($_SESSION['phone'])!=11) echo "<script>alert('잘못된 접근입니다'); location.href='/';</script>";

   include $_SERVER["DOCUMENT_ROOT"]."/top.php";
   include $_SERVER["DOCUMENT_ROOT"]."/css/css.php";
?>

<script>
   function board_write(){ location.href = "./write.php"; }
</script>
<style>
td{
   border-width : 0.5px 0.5px 0.5px 0.5px;
}
</style>
<?php
$array_code = Array("none"=>"일반", "question"=>"질문", "review"=>"후기");
echo "@";
$sql = "select * from board where save_status='Y' ";
$result=pg_query($connect_db, $sql);
while($v = pg_fetch_array($result))
{
   $array_code[] = $v['code'];
}
echo print_r($result,1);

$background = "OnMouseOver=style.background='#F5F5FF' OnMouseOut=style.background=''";
?>
<link href="../css/styles.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
<body>
   <header class="masthead">
      <table border="2" class="pok2 rv_bak" width="80%">
         <col width="7%"><col width="13%">
         <col width="40%"><col width="13%">
         <col width="20%"><col width="7%">
            <tr class="board_under">
               <th>No.</th><th>카테고리</th><th>제목</th><th>작성자</th><th>날짜</th><th>조회수</th>
            </tr>
<?php
            $sql = "select * from board where save_status='Y' order by no desc";
            $result=pg_query($connect_db, $sql);
            while($v = pg_fetch_array($result))
            {
               $sql_r = "select count(no) as count from board_reply where board_no =".$v['no']."and save_status='Y'";
               $result_r = pg_query($connect_db, $sql_r);
               while($v_r = pg_fetch_array($result_r))
               {
                  $reply = $v_r['count'];
               }
               ?>
               <tr <?=$background?>>
                  <td><?=$v['no']?></td>
                  <td><?=$array_code[$v['code']]?></td>
                     <?php $titles = "<a class='board' href=\"board_view.php?no=".$v['no']."&writer=".$v['writer']."&view=".$v['view']."\">".$v['title']." [ ".$reply." ]</a>";?>
                  <td><?=$titles?></td>
                  <td><?=$v['writer']?></td>
                  <td><?=date("Y-m-d",$v['save_time'])?></td>
                  <td><?=$v['view']?></td>
               </tr>
<?php
            }
?>
            <tr>
               <td colspan='6' style='text-align=center; height:80px'><input type="button" class="btn btn-info" value="글쓰기" onclick="board_write();"></td>
            </tr>
      </table>
   </header>
</body>
<?php 
   include $_SERVER["DOCUMENT_ROOT"]."/footer.php";
?>
      
<!-- 
info 하늘색
primary 노랑색
secondary 회색
success 초록색
danger 빨강
light 흰색
dark 검색 -->

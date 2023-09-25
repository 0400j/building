<?
  session_start();
  include "./css/css.php";
?>
<body>
   <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>treaTment</title>
    <link rel="icon" href="./img/rosa.png"  type="image/x-icon" sizes="16x16"/>
    <link href="./css/style.css" rel="stylesheet" />
    
    <!--구글에서 제공하고는 jquery 3.6.0-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <div class="main-wrapper">
    <? include $_SERVER["DOCUMENT_ROOT"]."/common/top.php"; ?>
   <input type="text" id="my_avg_money">원
   <input type="text" id="my_cnt">개
   <br>
   <input type="text" id="price">원에
   <input type="text" id="cnt">개를 더산다면<br>
   <div onclick="calc()">계산</div><br>
   평단 : <input type="text" id="avg_money"> 총 갯수 : <input type="text" id="total_cnt">

    <? include $_SERVER["DOCUMENT_ROOT"]."/common/footer.php"; ?>
  </div>
</body>
<script>
   
   function calc(){
      let my_avg_money = $("#my_avg_money").val();
      let my_cnt = $("#my_cnt").val();
      let price = $("#price").val();
      let cnt = $("#cnt").val();
      let now_price = my_avg_money * my_cnt;
      let total_cnt = parseInt(my_cnt) + parseInt(cnt);
      let total = Math.floor(parseInt(now_price + (price*cnt)) / total_cnt);
      $("#avg_money").val(total);
      $("#total_cnt").val(total_cnt);
   }
</script>
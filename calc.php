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
    <div class="calc-wrapper">
         <span>$ AVG STOCK $<br>
         📈CALCULATOR📉</span>
      
      <div class="before-wrapper">
         <p>📝PLEASE WRITE YOUR CURRENT STOCK PRICE AND NUMBER BELOW.</p>
         <div class="before">
            PRICE : <input type="text"  inputmode="decimal" id="my_avg_money"><br>
            AMOUNT : <input type="text" inputmode="decimal" id="my_cnt">
         </div>
      </div>
      <div class="after-wrapper">
         <p>📝IF YOU BUY SOME MORE AS BELOW..</p>
         <div class="after">
            PRICE : <input type="text" inputmode="decimal" id="price"><br>
            AMOUNT : <input type="text" inputmode="decimal" id="cnt"><br>
         </div>
      </div>
      <div class="calculation" onclick="calc()">📱CALCULATE</div>
      <div class="future-wrapper">
         <p>😁IT WILL BE REFLECTED AS BELOW.</p>
         <div class="future">
            AVG PRICE : <input type="text" id="avg_money"><br>
            TOT AMOUNT : <input type="text" id="total_cnt">
         </div>
      </div>
   </div>
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

      if(my_avg_money=='' || my_cnt=='' || price=='' || cnt==''){
         alert("PLZ WRITE IN DETAIL!");
         return false;
      }

      let total_cnt = parseInt(my_cnt) + parseInt(cnt);
      let total = Math.floor(parseInt(now_price + (price*cnt)) / total_cnt);
      $("#avg_money").val(total);
      $("#total_cnt").val(total_cnt);
   }
</script>
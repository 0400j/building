<!-- 하단메뉴 -->
<div class="footer">
   <div class="btn-border tour" onClick="modalMateWrapper();">
      <div class="btn-tour" id="tour">tour</div>
   </div>
   <div class="btn-border homepage" onClick="test();">
      <div class="btn-homepage" id="homepage">test</div>
   </div>
</div>

<script>
   // let linkParam = document.location.href.split("/")[3];

   function test(){
      location.href=("../calc.php");
   }

   function modalMateWrapper(){
      if(linkParam !== "main.php"){
         alert("메인 페이지로 이동합니다");
         location.href="http://www.treatment.kro.kr/main.php";
      }
   }
</script>
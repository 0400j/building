<?
session_start();
include "./css/css.php";
// if($_SESSION['password']!='' && $_SESSION['name']!='') echo "<script>location.href='../main.php';</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- <meta property="og:title" content="JOOHYEON">
  <meta property="og:url" content="http://www.treatment.kro.kr/">
  <meta property="og:image" content="http://www.treatment.kro.kr/img/rosa.png"> -->
  <title>treaTment</title>
  <link rel="icon" href="./img/rosa.png"  type="image/x-icon" sizes="16x16"/>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
</head>
<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
<!-- <script src="/media/jquery-1.12.4.min.js"></script>. -->
<!-- <script src="/code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->

<script>
  
  window.addEventListener('load',function(){
    // alert("A");
    // setTimeout(scrollTo,0,0,1);
  },false);
   function login()
   {
      var name = document.getElementById('name').value;
      var password = document.getElementById('password').value;
      if(name && password)
      {
         form_menu.action="./login/login_action.php";
         form_menu.submit();         
      }else{
        if(name == '' || password == '') alert("빈칸을 채워주세요");
      }
   }

   function onlyNum()
   {
    // onkeypress="onlyNum();"
      var objEvent = event.srcElement;
      var numPattern =/^[0-9]*$/;
      numPattern = objEvent.value.match(numPattern);
      if (numPattern == null) {
         alert("숫자만 입력할 수 있습니다.");
         objEvent.value = objEvent.value.substr(0, objEvent.value.length - 1);
         objEvent.focus();
      }
   }

   function onlyKor(a)
   //  onkeypress="onlyKor(this);"
    {
        if (((event.keyCode < 12592) || (event.keyCode > 12687) )&& event.keyCode!=13){
            alert("한글만 입력할 수 있습니다.");
            document.getElementById("name").value="";
            Event.returnValue = false;
        }
    }
    function enterkey(){   
        if(event.keyCode==13) login();
    }

</script>
   <body>
   <audio id="click" src="http://www.treatment.kro.kr/audio/click.mp3"></audio>
    <div class="main-wrapper">
      <!-- 상단메뉴 -->
      <?
      include include $_SERVER["DOCUMENT_ROOT"]."/common/top.php";
      ?>  

      <form id="login_form" name="form_menu" method="POST">
        <div class="login-wrapper">
          <div>
            <p>USERNAME</p>
            <input class="login-input" id="name" name="name" type="text" placeholder="Name *"  />
          </div>
          <div>
            <p>PASSWORD</p>
            <input class="login-input" inputmode="numeric" id="password" name="password" type="password" placeholder="Password *" onkeyup="enterkey();"/>
          </div>
          <div>
            <div class="login-btn" onclick="login();">PLAY</div>
          </div>
        </div>
        <input type="hidden" value="login" name="status">
      </form>

      <!-- 하단메뉴 -->
      <div class="footer">
        <div class="btn-border tour" onClick="modalMateWrapper();">
            <div class="btn-tour" id="tour">tour</div>
        </div>
        <div class="btn-border homepage" onClick="test();">
            <div class="btn-homepage" id="homepage">???</div>
        </div>
      </div>
    </div>
  </body>

        
</html>
<script>
  document.addEventListener("mousedown", function() {
      $("#click").on("click", sound_click.play());
   });
</script>
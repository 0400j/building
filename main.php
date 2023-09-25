<?
  session_start();
  include "./css/css.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>treaTment</title>
    <link rel="icon" href="./img/rosa.png"  type="image/x-icon" sizes="16x16"/>
    <link href="./css/style.css" rel="stylesheet" />
    
    <script src="./data.js"></script>

    <!--구글에서 제공하고는 jquery 3.6.0-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- 제이쿼리의 항상 최신 버전-->
    <!-- <script src="https://code.jquery.com/jquery-latest.min.js"></script> -->
  </head>
  <body>
  <audio id="start" src="http://www.treatment.kro.kr/audio/start.mp3"></audio>
  <audio id="typing" src="http://www.treatment.kro.kr/audio/typing.mp3"></audio>

    <div class="main-wrapper">
      <!-- 상단메뉴 -->
      <? 
      include $_SERVER["DOCUMENT_ROOT"]."/common/top.php"; 
      include $_SERVER["DOCUMENT_ROOT"]."/system/pg.php";
      ?>

      <!-- 스타트 로고 -->
      <div class="start-wrapper" onClick="">
        <img src="./img/newhouse.png" /><br />
        <span class="start-text">TOUCH TO START!</span>        
      </div>

      <!-- 팝업 -->
      <div class="popup" id="popup">
        <div class="title">
          WELCOME<br />
          MY HOME 💒
        </div>
        <div class="contents" id="contentsRoll"></div>
        <div class="btn" onClick="popup();">확인</div>
      </div>

      <!-- 메이트 고르기 -->
      <div class="mate-wrapper" id="mate">
        <div class="mate-title">Choose A TOUR MATE</div>
        <div class="mate-character-wrapper">
          <div class="character" onClick="selectCharacter('roi');">
            <div class="mate-roi" onClick="movePosition(event, this);"></div>
          </div>
          <div class="character" onClick="selectCharacter('rosa');">
            <div class="mate-rosa"></div>
          </div>
          <div class="character" onClick="selectCharacter('naon');">
            <div class="mate-naon"></div>
          </div>
        </div>
        <div class="mate-desc" id="characterText">
          투어를 함께할<br />투어메이트를 선택해주세요.
        </div>
        <div class="btn" onClick="confirmMate();">확인</div>
      </div>

        <div class="selected-mate-wrapper">
          <img id="selected-mate" src="" onClick="text();"/>
        </div>
        <div class="floor-wrapper">
          <div class="floor" onClick="chooseFloor('cloneCoding');"><span class="kr">클론코딩</span></div>
          <div class="floor" onClick="chooseFloor('baycShop');">BAYC SHOP</div>
          <div class="floor" onClick="chooseFloor('bookApi');">도서 검색</div>
          <div class="floor" onClick="chooseFloor('hiddenPicture');">숨은그림찾기</div>
          <div class="floor" onClick="chooseFloor('chickenMbti');">치킨 MBTI</div>
          <div class="floor" onClick="chooseFloor('interactiveWeb');"><span class="kr">공사중</span></div>
        </div>
        <div class="tooltip" id="tooltip"></div>
      <?include $_SERVER['DOCUMENT_ROOT']."/common/footer.php";?>
    </div>
  </body>
  <script>
    window.addEventListener('load',function(){
      setTimeout(scrollTo,0,0,1);
    },false);
   // $.ajax({
   //    type:"GET",
   //    url:"index2.php",
   //    data:{name:"abc",phone:'123'},
   //    error:function(){
   //       alert("failed");
   //    },
   //    success:function(result){
   //    location.href = "./index2.php";
   // }});
    // setInterval(() => {
    //   console.log("차 지나는 중");
    //   if ($(".car").position().left < -130) {
    //     console.log("사라짐");
    //   }
    // }, 100);
    let userMate = "";
    let popupClick = 0;
    let translateSwitch = false;
    let modalOnOff = true;
    let $start = $(".start-wrapper");
    let sound_start = document.getElementById("start");
    let sound_typing = document.getElementById("typing");

    // let phpsessid = '<?=$_COOKIE['PHPSESSID']?>';
    // console.log(phpsessid)

    sessionStorage.setItem("userMate", "");
    $start.click(function () {
      sound_click.pause();
      sound_start.play();
      $start.addClass("click");
      setTimeout(function () {
        $(".popup").addClass("on").delay(500).addClass("click");
        popup();
        $start.css("display", "none");
      }, 1000);
    });



    function popup() {
      let text = "";
      if (popupClick === 0) {
        text += "다양한 포트폴리오가 있는\n";
        text += "이곳에 오신걸 진심으로 환영합니다\n";
        text += "게시판에 글도 작성하며\n";
        text += "투어를 통해 다양한 곳으로 이동해보세요.";
      }
      if (popupClick === 1) {
        text += "1. 롤링페이퍼에 글을 써본다\n";
        text += "2. 투어를 통해 포트폴리오를 본다\n";
        text += "3. 원하는 기능을 건의한다\n";
        text += "미리 감사드립니다!";
      }
      writing(text, "contentsRoll");
      popupClick++;
      if (popupClick === 3) {
        setTimeout(function () {
          $("#popup").css("display", "none");
        }, 300);
      }
    }
    function changeText() {
      if (translateSwitch === false) {
        for (let key in translate) {
          document.getElementById(key).innerText = translate[key];
        }
        translateSwitch = true;
      } else {
        for (let key in translate) {
          document.getElementById(key).innerText = key;
        }
        translateSwitch = false;
      }
    }
    function writing(text, id) {
      let writingId = document.getElementById(id);
      let writingText = text;

      let rollingText = "";
      for (let i = 0; i < writingText.length; i++) {
        setTimeout(function () {
          rollingText += text[i];
          writingId.innerText = rollingText;
        }, i * 15);
      }
    }

    function modalMateWrapper() {
      if (modalOnOff && $("#popup").css("display") == "none") {
        $(".mate-wrapper").addClass("on");
      }
    }
    function selectCharacter(character) {
      $(".mate-desc").text("");
      writing(characterText[character], "characterText");
      userMate = character;
    }
    function confirmMate() {
      if (userMate.length == "") {
        writing("캐릭터를 골라주세요", "characterText");
        return false;
      }
      $(".mate-wrapper").removeClass("on");
      $(".mate-wrapper").css("display", "none");
      sessionStorage.setItem("userMate", userMate);
      modalOnOff = false;
      $("#selected-mate").attr("src", "./img/" + userMate + ".png");
      $(".selected-mate-wrapper").addClass("on");
      setTimeout(() => {
        tooltip();
        $(".floor-wrapper").css("display", "flex");
      }, 1000);      
    }
    function tooltip() {
      console.log(sessionStorage.getItem("userMate"), "입니다");
      if (sessionStorage.getItem("userMate")) {
        $(".tooltip").css("display", "block");
        writing(characterTextAfterSelect["first"], "tooltip");
      }
    }
    function chooseFloor(floor) {
      writing(floorInfo[floor], "tooltip");
      setTimeout(() => {
        if (confirm("이동하시겠습니까?")) {
          switch(floor){
          case 'cloneCoding' : location.href="./portfolio/cloneCoding/index.html";break;
          case 'baycShop' : location.href="https://0400j.github.io";break;
          case 'bookApi' : location.href="./portfolio/book.php?book=정주현";break;
          case 'hiddenPicture' : location.href="https:www.banggooso.com/gl/161";break;
          case 'chickenMbti' : location.href="https:www.banggooso.com/gl/172";break;
          case 'interactiveWeb' : location.href="./portfolio/interactiveWeb.html";break;
          default: return;
          }
        }         
      }, 2000);
    }

    function text(){
      writing("이동할 곳을 골라주세요", "tooltip")
    }
  </script>
</html>

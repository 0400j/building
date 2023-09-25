<!--구글에서 제공하고는 jquery 3.6.0-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<audio id="click" src="http://www.treatment.kro.kr/audio/click.mp3"></audio>

<div class="menu">
   <audio loop id="myAudio" src="http://www.treatment.kro.kr/audio/backgroundbgm.mp3"></audio>
   <div class="btn-border rolling" onClick="goBoard();">
      <div class="btn-rolling" id="rolling">ROLLING PAPER</div>
   </div>
   <div class="btn-border sound">
      <div class="btn-sound" id="sound" onClick="soundSwitch();">.</div>
   </div>
</div>

<script>
   let audio = document.getElementById("myAudio");
   let sound_click = new Audio("http://www.treatment.kro.kr/audio/click.mp3");
   let soundToggle = true;
   let linkParam = document.location.href.split("/")[3];

   if(linkParam == "main.php") audio.play();

   document.addEventListener("keydown", function(event) {
      if (event.key === "Escape") soundSwitch();
   });

   // 페이지의 가시성 변경 이벤트를 감지하고 처리하는 리스너를 추가합니다.
   document.addEventListener("visibilitychange", handleVisibilityChange);

   function handleVisibilityChange() {
      if (document.visibilityState === "hidden") {
         audio.pause(); // 페이지가 보이지 않을 때 노래를 일시정지합니다.
      } else {
         if(soundToggle) audio.play(); // 페이지가 다시 보일 때 노래를 재생합니다.
      }
   }
   
   audio.addEventListener('canplaythrough', function() {
      audio.play();
   });

   // 페이지가 unload 될 때 오디오를 일시 중지
   window.addEventListener('unload', function() {
      audio.pause();
   });

   function soundSwitch(){
      if(soundToggle){
         soundToggle = false;
         audio.pause();
         $(".btn-sound").addClass("mute");
      }else{
         soundToggle = true;
         audio.play();
         $(".btn-sound").removeClass("mute");
      }
   }

   function goBoard(){
      let session = '<?=$_COOKIE['PHPSESSID']?>';
      if(!session){
         alert("로그인을 해주세요");
      }else{
         location.href="http://www.treatment.kro.kr/board/board.php";
      }
   }
   document.addEventListener("mousedown", function() {
      $("#click").on("click", sound_click.play());
   });
</script>
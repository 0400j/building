<style>
@font-face {
  font-family: "bitgo";
  /* src: url("//cdn.df.nexon.com/img/common/font/DNFBitBit-Regular.woff"),
    url("//cdn.df.nexon.com/img/common/font/DNFBitBit-Regular.woff2"); */
    src: url("../fonts/DungGeunMo.woff"),
    url("../fonts/DungGeunMo.woff2");
  unicode-range: U+AC00-D7A3;
}
@font-face {
  font-family: "bitgo";
  src: url("./../fonts/AGoblinAppears-o2aV.ttf");
}
:root {
  --font: "bitgo";
  --yellow : #f9cc39;
  --backColor : rgb(41,41,102,0.7);
}
body {
  font-family: var(--font);
  background-color : rgb(41,41,102);
  margin: 0; /*기본 margin을 8px 계속 먹음*/
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none; 
  user-select: none;
}
body::-webkit-scrollbar {
  display: none;
}
p {
  /* margin-block-start : 0;
  margin-block-end : 0; */
}
/* index.php */
.login-wrapper {
  position: absolute;
  transform: translate(-50%, -50%);
  left: 50%;
  top: 50%;
  width: 240px;
  height: 300px;
  border: 0.2rem solid black;
  background-color: lightgreen;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align : center;
}
.login-wrapper .login-input {
  border: 0.2rem solid black;
  padding: 0.5rem;
  width: 10rem;
  font-family : var(--font);
}

.main-wrapper {
  max-width: 500px;
  min-height : 600px;
  height: 100%;
  margin: auto;
  position: relative;
  background-image: url(http://www.treatment.kro.kr/img/back.jpg);
  background-size: 200% 80%;
  background-repeat: no-repeat;
  background-position: center;
}
.main-wrapper .footer,
.main-wrapper .menu {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  padding: 1rem;
  background-color: lightgreen;
  border-bottom: 0.2rem solid black;
  /* box-shadow: 0 0.2rem lightgray; */
}
.main-wrapper .footer {
  position: absolute;
  width: -webkit-fill-available;
  bottom: 0;
}
.main-wrapper.sticky .footer {
  position : sticky;
}
.btn-border {
  /* border-top: 0.2rem solid lightgray;
   border-left: 0.2rem solid lightgray;
   border-right: 0.2rem solid gray;
   border-bottom: 0.2rem solid gray; */
  border: 0.2rem solid black;
}
.btn-border.board {
  position: absolute;
  width: -webkit-fill-available;
  bottom: 100px;
}
.btn-border.rolling {
  width : 80%;
}
.btn-border.sound {
  width : 12%;
}
.menu .btn-sound {
  color: transparent;
  text-indent: 0px;
  border: 0.2rem solid #ffdadb;
  padding: 1rem;
  font-family: var(--font);
  text-align: center;
  font-size: 1rem;
  border-right: 0.2rem solid #b05b2c;
  border-bottom: 0.2rem solid #b05b2c;
  background: #f9cc39;
  background-image: url(http://www.treatment.kro.kr/img/sound.png);
  background-size: 150% 150%;
  background-position: center;
}
.menu .btn-sound.mute {
  background-image: url(http://www.treatment.kro.kr/img/mute.png);
}
.login-wrapper .login-btn,
.main-wrapper .btn-reply-remove,
.main-wrapper .btn-reply,
.main-wrapper .btn-board,
.main-wrapper .footer .btn-tour,
.main-wrapper .footer .btn-homepage,
.main-wrapper .menu .btn-translate,
.main-wrapper .menu .btn-rolling {
  border: 0.2rem solid #ffdadb;
  padding: 1rem;
  font-family: var(--font);
  text-align: center;
  font-size: 1rem;
  border-right: 0.2rem solid #b05b2c;
  border-bottom: 0.2rem solid #b05b2c;
  background: #f9cc39;
}
.login-wrapper .login-btn:active,
.main-wrapper .btn-reply-remove:active,
.main-wrapper .btn-reply:active,
.main-wrapper .btn-board:active,
.main-wrapper .footer .btn-tour:active,
.main-wrapper .footer .btn-homepage:active,
.main-wrapper .menu .btn-translate:active,
.main-wrapper .menu .btn-sound:active,
.main-wrapper .menu .btn-rolling:active {
  padding-top: 1.2rem;
  padding-left: 1.2rem;
  padding-bottom: 0.8rem;
  padding-right: 0.8rem;
  border-bottom: 0rem;
  border-right: 0rem;
  border-top: 0.4rem solid #e4c2c3;
  border-left: 0.4rem solid #e4c2c3;
  background-color: #dfb733;
}
.main-wrapper .menu .btn-border.translate {
  flex-basis: 10%;
}
.main-wrapper .back {
  /* background-image: url(http://www.treatment.kro.kr/img/back.jpg);
  background-size: 260% 100%;
  height: 70vh; */
}
.main-wrapper .footer .btn-tour,
.main-wrapper .footer .btn-border {
  flex-basis: 46%;
}

.login-wrapper .login-btn {
  display: inline-block;
    width: 10rem;
    margin: 1.5rem 0;
    padding: 1rem 0;
}

/* 스타트 로고 */
.main-wrapper .start-wrapper {
  width: 100%;
  height: 100vh;
  transform: translate(-50%, -50%);
  left: 50%;
  top: 50%;
  z-index: 1;
  position: absolute;
  animation: ticktoc 2s infinite;
}
.main-wrapper .start-wrapper img {
  width: 100%;
  display: block;
  margin: auto;
  position: absolute;
  transform: translate(-50%, -50%);
  left: 50%;
  top: 35%;
}
.main-wrapper .start-text {
  -webkit-text-stroke-color: white;
  -webkit-text-stroke-width: 2px;
  color: red;
  font-size: 2rem;
  margin: 3rem auto;
  transform: translateX(-50%);
  left: 50%;
  top: 40%;
  position: absolute;
  width: 100%;
  text-align: center;
}
.main-wrapper .start-wrapper.click {
  animation: upStartLogo 2.5s forwards;
}

.popup.click {
  animation: upPopup 0.5s forwards;
}

/* 팝업섹션 */
.popup {
  border-top: 0.2rem solid lightgray;
  border-left: 0.2rem solid lightgray;
  border-right: 0.2rem solid gray;
  border-bottom: 0.2rem solid gray;
  box-shadow: 0.3rem 0.3rem black;
  display: none;
  background: mediumaquamarine;
  position: absolute;
  transform: translate(-50%, -50%);
  top: 150%;
  left: 50%;
  max-width: 400px;
  width: 80%;
  height: 40%;
  padding: 0.5rem;
}
.popup.on {
  display: block;
}
.popup .title {
  padding: 0.5rem;
  font-family: var(--font);
  font-size: 1.8rem;
  line-height: 1.3;
  -webkit-text-stroke-color: black;
  -webkit-text-stroke-width: 2px;
  color: green;
}
.popup .contents {
  padding: 0.5rem;
  font-family: var(--font);
  font-size: 1.1rem;
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: black;
  color: white;
  text-shadow: 0.1rem 0.1rem black;
}
.mate-wrapper .btn,
.popup .btn {
  background-color: #4acd4a;
  width: fit-content;
  margin: auto;
  color: white;
  padding: 0.5rem;
  box-shadow: 0.3rem 0.3rem black;
  border-top: 0.2rem solid lightgray;
  border-left: 0.2rem solid lightgray;
  border-right: 0.2rem solid gray;
  border-bottom: 0.2rem solid gray;
  font-family: var(--font);
  position: absolute;
  bottom: 4%;
  left: 50%;
  transform: translateX(-50%);
  font-size: 1.5rem;
  -webkit-text-stroke: 1px black;
}
.mate-wrapper .btn:active,
.popup .btn:active {
  box-shadow: none;
  bottom: 8.5%;
  left: 52%;
  background-color: #40ad40;
  color: #e1e0e0;
}
.popup .btn:active { 
  bottom : 1.5%;
  left : 51.5%;
}
/* 메이트 */
.mate-wrapper {
  width: 80%;
  background-color: white;
  position: absolute;
  height: 45%;
  border: 0.2rem solid mediumspringgreen;
  box-shadow: 0.4rem 0.4rem black;
  top: 150%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: none;
  flex-direction: column;
  justify-content: space-between;
}
.mate-wrapper.on {
  display: flex;
  height: 60%;
  animation: upModalMateWrapper 0.5s forwards;
}
.mate-wrapper .mate-title {
  flex-basis: 5%;
  padding: 2rem 0;
  text-align: center;
  background: white;
  border: 0.2rem solid black;
  border-left: 0.3rem solid black;
  border-top: 0.3rem solid black;
}
.mate-wrapper .mate-character-wrapper {
  display: flex;
  flex-direction: row;
  padding: 2rem 0;
  background: #2be064;
  justify-content: center;
  border: 0.2rem solid black;
  border-left: 0.3rem solid black;
  border-top: 0;
}
.mate-wrapper .mate-character-wrapper .character {
  display: flex;
  justify-content: center;
  flex-basis: 30%;
  height: 100px;
  background: linear-gradient(135deg, white 50%, #f9cc39 50%);
  border: 0.2rem solid black;
  margin: 0 0.2rem;
  overflow: hidden;
}
.mate-wrapper .mate-character-wrapper .character:active {
  background: mediumspringgreen;
}
.mate-roi {
  width: 82.25px;
  height: 100%;
  background-image: url(http://www.treatment.kro.kr/img/roi-h100.png);
  background-size: 329px 100px;
  animation: roi 1.5s infinite steps(4);
}
.mate-rosa {
  width: 100px;
  height: 100%;
  background-image: url(http://www.treatment.kro.kr/img/rosa-h100.png);
  background-size: 400px 100px;
  animation: rosa 1.5s infinite steps(4);
}
.mate-naon {
  width: 112.75px;
  height: 100%;
  background-image: url(http://www.treatment.kro.kr/img/naon-h100.png);
  background-size: 451px 100px;
  animation: naon 1.5s infinite steps(4);
}
.mate-roi.click,
.mate-rosa.click,
.mate-naon.click {
  margin-top: 1rem;
  margin-left: 1rem;
}
@keyframes roi {
  from {
    background-position-x: 0px;
  }
  to {
    background-position-x: -329px;
  }
}
@keyframes rosa {
  from {
    background-position-x: 0px;
  }
  to {
    background-position-x: -400px;
  }
}
@keyframes naon {
  from {
    background-position-x: 0px;
  }
  to {
    background-position-x: -451px;
  }
}
.mate-wrapper .mate-desc {
  flex-basis: 40%;
  background: white;
  font-size: 1.2rem;
  -webkit-text-stroke: 2px green;
  color: white;
  border: 0.2rem solid black;
  border-left: 0.3rem solid black;
  border-top: 0;
  background-color: white;
  text-align: center;
  padding-top: 0.5rem;
}

.main-wrapper .selected-mate-wrapper,
.main-wrapper .back .car {
  display: inline-block;
  position: absolute;
  top: 66%;
  transform: scale(2);
  left: 71%;
  animation: carMove 5s forwards;
}
.main-wrapper .selected-mate-wrapper {
  display: none;
  animation: none;
  top: 70%;
  left: 70%;
  transform: none;
}
.main-wrapper .selected-mate-wrapper.on {
  display: inline-block;
  animation: upUserMate 0.5s forwards;
}
.main-wrapper .tooltip {
  display: none;
  position: absolute;
  bottom: 20%;
  left: 50%;
  background-color: white;
  border: 0.2rem solid black;
  width: 50%;
  height: 8rem;
  transform: translate(-75%, 0%);
  padding: 0.5rem;
}
.main-wrapper .tooltip::after,
.main-wrapper .tooltip::before {
  content: "";
  border-top: 0.5rem solid transparent;
  border-right: 1rem solid transparent;
  border-bottom: 0.5rem solid transparent;
  border-left: 1.5rem solid white;
  position: absolute;
  left: 99%;
  top: 70%;
  z-index: 2;
}
.main-wrapper .tooltip::after {
  border-top: 0.7rem solid transparent;
  border-bottom: 0.7rem solid transparent;
  border-left: 1.9rem solid black;
  z-index: 1;
  top: 68%;
  left: 100%;
}
.main-wrapper .tooltip.on {
  animation: upUserMate 0.5s forwards;
}
.main-wrapper .floor-wrapper {
  display: none;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding-top: 1rem;
}
.main-wrapper .floor-wrapper .floor {  
  display: flex;
  align-items: center;
  justify-content: center;
  border: 0.2rem solid #ffdadb;
  padding: 1rem;
  font-family: var(--font);
  text-align: center;
  font-size: 1rem;
  width: 50%;
  height: 2rem;
  border-right: 0.2rem solid #b05b2c;
  border-bottom: 0.2rem solid #b05b2c;
  background: #f9cc39;
  margin-bottom: 0.5rem;
}

.main-wrapper .floor-wrapper .floor:active {
  background-color: yellow;
}

/* board */
.main-wrapper .board-wrapper {
  color : var(--yellow);
  font-weight : 100;
  background-color : var(--backColor);
}
.main-wrapper .board-wrapper a {
  text-decoration : none;
  color : var(--yellow);
  font-weight : 900;
}
.main-wrapper .board-wrapper .board-list,
.main-wrapper .board-wrapper .board-header {
  display: flex;
  flex-direction: row;
  align-items : center;
  justify-content: space-evenly;
  text-align : center;
  margin: 1rem 0;
}
.main-wrapper .board-wrapper .board-header {
  color : white;
}
.main-wrapper .board-wrapper .view ,
.main-wrapper .board-wrapper .no {
  flex-basis : 5%;
}
.main-wrapper .board-wrapper .board-header .title {
  flex-basis : 35%;
}
.main-wrapper .board-wrapper .board-list .title {
  flex-basis : 40%;
}
.main-wrapper .board-wrapper .date,
.main-wrapper .board-wrapper .writer {
  flex-basis : 17.5%;
}
.main-wrapper .board-wrapper .board-list .date {
  font-size : 0.7rem;
}
.main-wrapper .board-wrapper .board-list .no,
.main-wrapper .board-wrapper .board-list .view {
  font-size : 0.8rem;
}
.main-wrapper .board-wrapper .reply-cnt {
  font-size : 0.6rem;
}
/* board 끝 */
/* view */
.board-view-wrapper {
  max-width : 90%;
  margin : auto;
  padding : 2rem 0;
}
.board-view-wrapper .board-view-btn {
  display:flex;
  flex-direction : row;
  justify-content : space-between;
  margin-bottom : 1rem;
}
.board-view-wrapper .reply-write-wrapper .btn-reply,
.board-view-wrapper .board-view-btn .btn-board {
  padding : 0.4rem 1rem 0.7rem;
}
.board-view-wrapper .board-view {
  border : 1px solid #7b5915;
  color : var(--yellow);
  background-color : var(--backColor);
}
.board-view-wrapper .board-view .view-name ,
.board-view-wrapper .board-view .view-title ,
.board-view-wrapper .board-view .view-contents ,
.board-view-wrapper .board-view .view-file {
  display : flex;
  align-items : center;
  border-bottom : 0.1rem solid #423d6d;
}
.board-view-wrapper .board-view .view-name > div:first-child,
.board-view-wrapper .board-view .view-title > div:first-child,
.board-view-wrapper .board-view .view-contents > div:first-child,
.board-view-wrapper .board-view .view-file > div:first-child {
  flex-basis : 25%;
  text-align : center;
  padding : 1rem 0.5rem;
  border-right : 0.1rem solid #423d6d;
}
.board-view-wrapper .board-view .view-name > div:last-child,
.board-view-wrapper .board-view .view-title > div:last-child,
.board-view-wrapper .board-view .view-contents > div:last-child,
.board-view-wrapper .board-view .view-file > div:last-child {
  flex-basis : 75%;
  padding : 1rem;
}
.board-view-wrapper .board-view .view-contents {
  height : 10rem;
}
.board-view-wrapper .board-view .view-contents > div:first-child{
  display: flex;
  align-items: center;
  justify-content: center;
  height: inherit;
  padding: 0 0.5rem;
}
/* view 끝 */
/* reply */
.reply-wrapper span {
  color : var(--yellow);
  display : inline-block;
  margin-bottom : 1rem;
}
.reply-wrapper .reply-textarea {
  width : 100%;
  height : 3rem;
  font-family : var(--font);
}
.reply-view-wrapper{
  padding: 0.5rem;
  background: #5b5bf7;
  margin-bottom: 1rem;
}
.reply-view-wrapper .writer-info-wrapper {
  display: flex;
  align-items: center;
  justify-content: space-between;
  color: var(--yellow);
}
.reply-view-wrapper .writer-info-wrapper .btn-reply-remove {
  color:black;
  padding : 0.1rem 1rem 0.5rem;
}
.reply-view-wrapper .writer-info{
  display: flex;
  align-items : flex-end;
  margin-bottom : 0.5rem;
}
.reply-view-wrapper .writer-info .date{
  font-size : 0.6rem;
  color : #e79b00;
  padding-left : 0.5rem;
}
/* reply 끝 */
/* write */
.main-wrapper .board-view-wrapper .write-contents,
.main-wrapper .board-view-wrapper .write-title,
.main-wrapper .calc-wrapper input {
  width: 100%;
  background-color : var(--backColor);
  border-bottom: 1px solid var(--yellow);
  padding: 0;
  height: fit-content;
  border-left: none;
  border-top: none;
  border-right: none;
  color:var(--yellow);
  font-family : var(--font);
}
/* write 끝 */
/* calc 시작 */
.main-wrapper .calc-wrapper {
  background: var(--backColor);
  width: 90%;
  margin: 3rem auto;
  height: 70%;
  display: flex;
  flex-direction: column;
  align-items: center;
  overflow-y: scroll;
}
.main-wrapper .calc-wrapper input {
  width : 40%;
  font-size : 1rem;
}
.main-wrapper .calc-wrapper span {
  display : block;
  font-size: 2rem;
  -webkit-text-stroke-color: #aa4169;
  -webkit-text-stroke-width: 1px;
  color: var(--yellow);
  text-align: center;
  padding: 1rem 0;
}
.main-wrapper .calc-wrapper p {
  font-size: 0.9rem;
  text-align: center;
  color: mediumspringgreen;
}
.main-wrapper .calc-wrapper .future-wrapper .future,
.main-wrapper .calc-wrapper .after-wrapper .after,
.main-wrapper .calc-wrapper .before-wrapper .before {
  padding : 0 2rem;
  font-size : 1rem;
  -webkit-text-stroke-color: #aa4169;
  -webkit-text-stroke-width: 1px;
  color: var(--yellow);
}
.main-wrapper .calc-wrapper .after-wrapper,
.main-wrapper .calc-wrapper .before-wrapper {
  margin-bottom : 2rem;
}
.main-wrapper .calc-wrapper .calculation {
  width: 80%;
  background: #ff00c6;
  color: var(--yellow);
  height: 3.5rem;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  margin: 2rem;
}
.main-wrapper .calc-wrapper .calculation:active {
  background : var(--yellow);
  color : #ff00c6;
}
@keyframes ticktoc {
  49.9% {
    top: 50%;
  }
  50% {
    top: 51%;
  }
  100% {
    top: 51%;
  }
}
@keyframes upStartLogo {
  0% {
    top: 50%;
  }
  10% {
    top: 60%;
  }
  99% {
    display: block;
  }
  100% {
    display: none;
    top: -200%;
  }
}
@keyframes upPopup {
  0% {
    top: 150%;
  }
  100% {
    top: 50%;
  }
}
@keyframes upModalMateWrapper {
  0% {
    top: 150%;
  }
  100% {
    top: 50%;
  }
}
@keyframes carMove {
  from {
    left: 71%;
  }
  to {
    left: -50%;
  }
}
@keyframes upUserMate {
  0% {
    top: 300%;
  }
  100% {
    top: 70%;
  }
}
@media screen and (max-width: 450px) {
  .main-wrapper .calc-wrapper {
    margin : 0 auto;
  }
  .main-wrapper .calc-wrapper span {
    font-size : 1.3rem;
  }
}
@media screen and (max-width: 400px) {
  .mate-wrapper {
    width: 95%;
  }
  .mate-wrapper.on {
    height: 60%;
  }

}

</style>

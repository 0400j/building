
<?
   // session_start();
   // include $_SERVER["DOCUMENT_ROOT"]."/system/pg.php";
   // if(strlen($_SESSION['phone'])!=11) echo "<script>alert('잘못된 접근입니다'); location.href='/';</script>";
include $_SERVER["DOCUMENT_ROOT"]."/top.php";
   include $_SERVER["DOCUMENT_ROOT"]."/css/css.php";

   $client_id = "SFezXsTn6ehQdzFHwwp7"; //발급받은 client id & secret key
  $client_secret = "KzKrnNFNu_";
  $encText = urlencode($_GET['book']); //검색할 Text를 url인코딩
  $url = "https://openapi.naver.com/v1/search/book.json?query=".$encText;

  $is_post = false;
  $ch = curl_init(); //세션 초기화 / curl = 원하는 url에 값을 넣고 리턴되는 값을 받아오는 함수
 
  //curl_setopt : curl옵션 세팅 / C_URL : 접속할 url / C_POST : 전송 메소드 Post / C_RETURNTRANSFER : 리턴 값을 받음
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, $is_post);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
  $headers = array();
  $headers[] = "X-Naver-Client-Id: ".$client_id;
  $headers[] = "X-Naver-Client-Secret: ".$client_secret;
    
  //C_HTTPHEADER : 헤더 지정 (네이버 api를 사용하려면 필요하다) / C_SSL_VERIFYPEER : 인증서 검사x
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

  $response = curl_exec ($ch);
  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close ($ch);
//   if($status_code == 200) echo $response;echo "Error 내용: ".$response;

  $result = json_decode($response, true);
?>
   
   <form name="search" action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <input type='text' name="book" placeholder="도서명을 입력하세요">
      <input type="submit" class="btn btn-info" value="검색">
      <?
         if(!isset($_GET['book'])) $_GET['book']='로켓단';
      ?>
      <h5 class="my-3">'<?=$_GET['book']?>' 에 대한 검색 결과</h5>
   </form>
      <table class="table4 rv_bak" border='2'><col width="30%"><col width="70%">
         <?
         $count = 0;   
         foreach($result['items'] as $k=>$v)
         {
            //날짜를 년원일로 구분
            $date = substr($v['pubdate'],0,4).".".substr($v['pubdate'],4,2).".".substr($v['pubdate'],6,2);
            
            if(strlen($v['price'])=='4')
               {$price = substr($v['price'],0,1).",".substr($v['price'],-3);}
            else{$price = substr($v['price'],0,2).",".substr($v['price'],-3);}
            
            if(!($v['discount']) || $v['discount']==$v['price'])
            {
               $discount = ''; $per = ''; $class = ''; $arrow = '';
            }else{
               if(strlen($v['discount'])=='4')
                  {$discount = substr($v['discount'],0,1).",".substr($v['discount'],-3);}
               else{$discount = substr($v['discount'],0,2).",".substr($v['discount'],-3);}
               $per = " ( ─ ".(100-($v['discount']/$v['price']*100))."% )";
               $class = 'font5';
               $arrow = "&nbsp→&nbsp
               <span class='font6'>₩";
            }
            ?>
         <tr>
            <td class="card-body" style="margin:auto;">
               <img src="<?=$v['image']?>" class="img2" alt="...">
            </td>
            <td class="card-body">
               <h6 class="card-text"><?=$v['title']?></h6>
               <span class="font4"><?=$v['author']."  글&nbsp&nbsp|&nbsp&nbsp".$v['publisher']."&nbsp&nbsp|&nbsp&nbsp".$date?></span><br>
               <span class="font4 <?=$class?>">₩<?=$price?></span>
               <?=$arrow?>
               <?=$discount.$per?></span>
               <p class="card-text"><?=substr($v['description'], 0, 100)?>...!!</p>
               <a href="<?=$v['link']?>" class="btn btn-light">구매하기</a>
            </td>
         </tr>
            <? 
            }?>
      </table>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   
</script>

   
<link href="../css/styles.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

<? 
   include $_SERVER["DOCUMENT_ROOT"]."/footer.php";
?>
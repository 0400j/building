이메일보내십?
<!-- 
$to = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject = "주현이"; -->
<?mail("rhfalxtbt@naver.com", "aa","a33","bb");?>
<?

$to = $_POST['email'];
$title = $_POST['name'];
$title_encode = "=?utf-8?B?".base64_encode($title)."?=\n"; //제목 인코딩

$contents = $_POST['message'];

$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; //헤더인코딩
$headers .= "From: sda0503@naver.com\r\n"; //보내는 사람
$headers .= "Cc: 'sda0503@naver.com'\r\n"; //참조
$headers .= "Bcc: 'sda0503@naver.com'\r\n"; //숨은참조

$send_mail = mail($to, $title_encode, $contents, $headers); //메일보내기

echo $send_mail; //성공하면 1을 실패하면 0을 출력

?>

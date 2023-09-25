<?php
//보안을 위해 db명과 비밀번호는 지웠습니다!

$host = ""; // 호스트 이름
$port = ""; // 포트 번호
$dbname = ""; // 데이터베이스 이름
$user = ""; // 사용자 이름
$password = ""; // 비밀번호

// PostgreSQL에 연결
$connect_db = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$password);

// 연결 확인
if(!$connect_db) {
  echo "데이터베이스 연결 실패!@45566.<br>";
  echo pg_last_error($connect_db);
} else {
  // echo "데이터베이스 연결 성공.";
}

// 연결 종료
// pg_close($connect_db);
?>

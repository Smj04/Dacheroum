<?php
$url = 'localhost';
$id = 'root';
$pass = '111111';
$db = 'dacheroum';
$conn = mysqli_connect($url, $id, $pass, $db);

if(!$conn){ // conn이 없으면 연결 실패
    echo "<h1>연결 실패</h1><br/>";
}
else {
    echo "<h1>연결 성공</h1><br/>";
}
$user_id=$_POST['user_id'];
$user_pw=$_POST['user_pw'];
$user_name=$_POST['user_name'];
$user_gender=$_POST['chk_info'];
$user_email=$_POST['user_email'];
$user_phone=$_POST['user_phone'];
$user_birth_yy=$_POST['user_birth_yy'];
//$user_birth_mm=$_POST['user_birth_mm'];
$user_birth_dd=$_POST['user_birth_dd'];


  //for($i=0; $i<sizeof($_POST["user_birth_mm"]); $i++){
    
$user_birth=$user_birth_yy.$user_birth_mm.$user_birth_dd;

echo "아이디 : ".$user_id."<br/>";
echo "비밀번호 : ".$user_pw."<br/>";
echo "이름 : ".$user_name."<br/>";
echo "년도 : ".$user_birth_yy."<br/>";
echo "월 : ".$user_birth_mm."<br/>";
echo "일 : ".$user_birth_dd."<br/>";
echo "출생년도 : ".$user_birth."<br/>";
echo "성별 : ".$user_gender."<br/>";
echo "이메일 : ".$user_email."<br/>";
echo "전화번호 : ".$user_phone."<br/>";


/*    $sql = "insert into user(user_id, user_pw, user_name, user_birth, user_gender, user_email, user_phone) values('$user_id', '$user_pw','$user_name','$user_birth','$user_gender','$user_email','$user_phone')";

    $result = mysqli_query($conn, $sql);

    if($conn->query($sql))
        echo "<script>데이터가 성공적으로 추가되었습니다!</script>";
    
    else
        echo "<script>데이터 삽입 실패</script>";

        mysqli_close($conn);

*/
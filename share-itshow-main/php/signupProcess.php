<?php

include 'db_conn.php';

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
$user_birth_mm=$_POST['user_birth_mm'];
$user_birth_dd=$_POST['user_birth_dd'];
   
$user_birth=$user_birth_yy.$user_birth_mm.$user_birth_dd;

echo "user_id : ".$user_id."<br/>";
echo "user_pw : ".$user_pw."<br/>";
echo "user_name : ".$user_name."<br/>";
echo "user_birth : ".$user_birth."<br/>";
echo "user_gender : ".$user_gender."<br/>";
echo "user_email : ".$user_email."<br/>";
echo "user_phone : ".$user_phone."<br/>";


    $sql = "insert into user(user_id, user_pw, user_name, user_birth, user_gender, user_email, user_phone) 
    values('$user_id', '$user_pw','$user_name','$user_birth','$user_gender','$user_email','$user_phone')";

    
    $result = mysqli_query($conn, $sql);

    if($result) {
        ?>      <script>
                alert('가입 되었습니다.');
                //location.replace("login.php");
                </script>
 
<?php   }
        else{
?>              <script>
                        
                        alert("fail");
                </script>
<?php   }
 
        mysqli_close($conn);
?>

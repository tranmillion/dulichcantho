<?php
 
$host="localhost"; // luôn luôn là localhost
$username="root"; // user của mysql
$password=""; // Mysql password
$db_name="test"; // tên database
$tbl_name="members"; // tên table
 
// kết nối cơ sở dữ liệu
mysql_connect("$host", "$username", "$password")or die("Không thể kết nối");
mysql_select_db("$db_name")or die("cannot select DB");
 
// username và password được gửi từ form đăng nhập
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
 
// Xử lý để tránh MySQL injection
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
 
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
// nếu tài khoản trùng khớp thì sẽ trả về giá trị 1 cho biến $count
if($count==1){
 
// Lúc này nó sẽ tự động gửi đến trang thông báo đăng nhập thành công
session_register("myusername");
session_register("mypassword");
header("location:login_success.php");
}
else {
echo "Sai tên đăng nhập hoặc mật khẩu";
}
?>
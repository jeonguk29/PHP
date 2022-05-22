<?
include   "../common.php";
	
	$adminid=$_REQUEST["adminid"];
	$adminpw=$_REQUEST["adminpw"];


if ($adminid == $admin_id && $adminpw == $admin_pw) {
  // $cookie_admin변수에 "yes"로 쿠키 저장.
   setcookie("cookie_admin", "yes");	
   echo("<script>location.href='member.php'</script>");
   }
Else {
   setcookie("cookie_admin","");	
   echo("<script>location.href='index.html'</script>");

 }


?>
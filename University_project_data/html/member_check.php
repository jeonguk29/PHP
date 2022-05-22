<?
	

	include"common.php";
	

	$uid=$_REQUEST["uid"];
	$pwd=$_REQUEST["pwd"];

		
	$query="select no47, name47 from member where uid47='$uid' and pwd47='$pwd'";
	$result=mysqli_query($db,$query);
	if(!$result) exit("에러:$query");
	
	$count=mysqli_num_rows($result);   // 전체 페이지 수
	$row=mysqli_fetch_array($result);

    	if ($count>0) {
			setcookie("cookie_no", $row["no47"]);	
			setcookie("cookie_name", $row["name47"]);
			echo("<script>location.href='index.html'</script>");
		}
		else
			echo("<script>location.href='member_login.php'</script>");


?>
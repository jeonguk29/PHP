<?
	include "../common.php";

	$name=$_REQUEST["name"]; 
	
	$query = "insert into opt (name47)
	values('$name')";
	// 모르겠으면 ' ' 다 붙여봐 
	
	$result = mysqli_query($db,$query);
	if(!$result) exit("에러:$query");

	echo("<script>location.href='opt.php'</script>");
	
?>
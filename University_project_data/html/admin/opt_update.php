<?
	include "../common.php";
	
	
	$no=$_REQUEST["no"];
	$name=$_REQUEST["name"]; 

	$query = "update opt set name47='$name'where no47=$no";
	// 모르겠으면 ' ' 다 붙여봐 
	
	$result = mysqli_query($db,$query);
	if(!$result) exit("에러:$query");

	echo("<script>location.href='opt.php'</script>");
?>
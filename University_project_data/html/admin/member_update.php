<? 
	include "../common.php";
	
	$no=$_REQUEST["no"];
	$uid=$_REQUEST["uid"];
	$pwd=$_REQUEST["pwd"];
	$name=$_REQUEST["name"]; 
	$tel1=$_REQUEST["tel1"];
	$tel2=$_REQUEST["tel2"];
	$tel3=$_REQUEST["tel3"];
	$phone1=$_REQUEST["phone1"];
	$phone2=$_REQUEST["phone2"];
	$phone3=$_REQUEST["phone3"];
	$sm=$_REQUEST["sm"];
	$gubun=$_REQUEST["gubun"];
	
	$birthday1=$_REQUEST["birthday1"];
	$birthday2=$_REQUEST["birthday2"];
	$birthday3=$_REQUEST["birthday3"];
	$zip=$_REQUEST["zip"];
	$juso=$_REQUEST["juso"];
	$email=$_REQUEST["email"];
	

	
	
	$tel = sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);
	$phone = sprintf("%-3s%-4s%-4s", $phone1, $phone2, $phone3);
	$birthday = sprintf("%04d-%02d-%02d", $birthday1, $birthday2, $birthday3);
	
	
	

	
 
    $query = "update member set pwd47='$pwd',gubun47='$gubun',name47='$name',tel47='$tel',phone47='$phone',sm47='$sm',
	birthday47='$birthday',juso47='$juso',zip47='$zip',email47='$email' where no47='$no';";
	$result=mysqli_query($db,$query);	
	if(!$result) exit("에러:$query");
	
	echo("<script>location.href='member.php'</script>");
	

 ?>
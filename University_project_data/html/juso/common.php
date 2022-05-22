<?
	//error_reporting(E_ALL); // 에러 코드 확인 
	//ini_set("display_errors", 1); // 에러 확인 


	$db= mysqli_connect("localhost","shop47","1234","shop47");
	if(!$db) exit("DB연결에러");
	
	$page_line = 5;
	$page_block =5;
	
	$a_idname=array("전체","이름", "ID");     //  2줄은 common.php에 작성.
	$n_idname=count($a_idname);    
?>


<?
	
	error_reporting(E_ALL& ~E_NOTICE& ~E_WARNING);
	ini_set("display_errors",1);

	mysqli_report(MYSQLI_REPORT_OFF);
	
	$db= mysqli_connect("localhost","shop47","1234","shop47");
	if(!$db) exit("DB연결에러");
	
	$page_line = 3;
	$page_block =5;
	
	$admin_id  = "admin";
    $admin_pw = "1234";
	
	$a_idname=array("전체","이름","ID");     //  2줄은 common.php에 작성.
	$n_idname=count($a_idname);    
	
	$a_menu=array("남성가방","남성슈즈","여성가방","여성슈즈","지갑","시계","실버 주얼리","선글라스","벨트");
	$n_menu=count($a_menu);              
	
	
	$a_status=array("상품상태","판매중","판매중지","품절");
	$n_status=count($a_status);

	$a_icon=array("아이콘","New","Hit","Sale");
	$n_icon=count($a_icon);

	$a_text1=array("", "제품이름","제품번호");   // for문의 $i는 1부터 시작
	$n_text1=count($a_text1);

?>
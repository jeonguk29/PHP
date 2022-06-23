<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->	
<?
	$cookie_no=$_COOKIE["cookie_no"];
	$cookie_name=$_COOKIE["cookie_name"];



?>

<html>
<head>
<title>인덕닷컴 쇼핑몰</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link href="include/font.css" rel="stylesheet" type="text/css">

		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Alternate Column Scroll | Codrops</title>
		<meta name="description" content="A layout with an alternate scroll on image columns and a content preview." />
		<meta name="keywords" content="layout, scroll, locomotive scroll, column, javascript, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" href="https://use.typekit.net/njz5ajv.css">
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		
		<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>

<script language="Javascript" src="include/common.js"></script>

</head>



<style>

body {

    background-repeat: no-repeat;
	

}

.slider{
    width: 959px;
    height: 235px;
    position: relative;
    margin: 0 auto;
}
.slider input[type=radio]{
    display: none;
}

ul.imgs{
    padding: 0;
    margin: 0;
}
ul.imgs li{
    position: absolute;
    left: 640px;
    transition-delay: 1s;
    list-style: none;
    padding: 0;
    margin: 0;
    border-radius: 30px;
}
ul.imgs li img{
    border-radius: 30px;
    border: 5px solid rgba(0,0,0,0.3);
}

.bullets{
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 20px;
    z-index: 2;
}
.bullets label{
    display: inline-block;
    border-radius: 50%;
    background-color: rgba(0,0,0,0.55);
    width: 20px;
    height: 20px;
    cursor: pointer;
}
.slider input[type=radio]:nth-child(1):checked~.bullets>label:nth-child(1){
    background-color: #fff;
}
.slider input[type=radio]:nth-child(2):checked~.bullets>label:nth-child(2){
    background-color: #fff;
}
.slider input[type=radio]:nth-child(3):checked~.bullets>label:nth-child(3){
    background-color: #fff;
}
.slider input[type=radio]:nth-child(4):checked~.bullets>label:nth-child(4){
    background-color: #fff;
}

/* 1 */
.slider input[type=radio]:nth-child(1):checked~ul.imgs>li:nth-child(1){
    left: 0;
    transition: 0.75s;
    z-index:1;
    box-shadow: 14px -5px 35px -21px rgba(0,0,0,0.66);
}
.slider input[type=radio]:nth-child(1):checked~ul.imgs>li:nth-child(2){
    left: 90px;
    transition: 0.75s;
    z-index:0;
    transform: scale(0.9);
    box-shadow: 14px -5px 35px -21px rgba(0,0,0,0.66);
}
.slider input[type=radio]:nth-child(1):checked~ul.imgs>li:nth-child(3){
    left: 170px;
    transition: 0.75s;
    z-index:-1;
    transform: scale(0.8);
    box-shadow: 14px -5px 35px -21px rgba(0,0,0,0.66);
}
.slider input[type=radio]:nth-child(1):checked~ul.imgs>li:nth-child(4){
    left: 230px;
    transition: 0.75s;
    z-index:-2;
    transform: scale(0.7);
    box-shadow: 14px -5px 35px -21px rgba(0,0,0,0.66);
}

/* 2 */
.slider input[type=radio]:nth-child(2):checked~ul.imgs>li:nth-child(1){
    left: -90px;
    transition: 0.75s;
    z-index:0;
    transform: scale(0.9);
    box-shadow: 14px -5px 35px -21px rgba(0,0,0,0.66);
}
.slider input[type=radio]:nth-child(2):checked~ul.imgs>li:nth-child(2){
    left: 0;
    transition: 0.75s;
    z-index:1;
    box-shadow: 14px -5px 35px -21px rgba(0,0,0,0.66);
}

.slider input[type=radio]:nth-child(2):checked~ul.imgs>li:nth-child(3){
    left: 90px;
    transition: 0.75s;
    z-index:0;
    transform: scale(0.9);
    box-shadow: 14px -5px 35px -21px rgba(0,0,0,0.66);
}
.slider input[type=radio]:nth-child(2):checked~ul.imgs>li:nth-child(4){
    left: 170px;
    transition: 0.75s;
    z-index:-1;
    transform: scale(0.8);
    box-shadow: 14px -5px 35px -21px rgba(0,0,0,0.66);
}

/* 3 */
.slider input[type=radio]:nth-child(3):checked~ul.imgs>li:nth-child(1){
    left: -170px;
    transition: 0.75s;
    z-index:-1;
    transform: scale(0.8);
    box-shadow: 14px -5px 35px -21px rgba(0,0,0,0.66);
}
.slider input[type=radio]:nth-child(3):checked~ul.imgs>li:nth-child(2){
    left: -90px;
    transition: 0.75s;
    z-index:0;
    transform: scale(0.9);
    box-shadow: 14px -5px 35px -21px rgba(0,0,0,0.66);
}
.slider input[type=radio]:nth-child(3):checked~ul.imgs>li:nth-child(3){
    left: 0;
    transition: 0.75s;
    z-index:1;
    box-shadow: 14px -5px 35px -21px rgba(0,0,0,0.66);
}
.slider input[type=radio]:nth-child(3):checked~ul.imgs>li:nth-child(4){
    left: 90px;
    transition: 0.75s;
    z-index:0;
    transform: scale(0.9);
    box-shadow: 14px -5px 35px -21px rgba(0,0,0,0.66);
}


/* 4 */
.slider input[type=radio]:nth-child(4):checked~ul.imgs>li:nth-child(1){
    left: -230px;
    transition: 0.75s;
    z-index:-2;
    transform: scale(0.7);
    box-shadow: 14px -5px 35px -21px rgba(0,0,0,0.66);
}
.slider input[type=radio]:nth-child(4):checked~ul.imgs>li:nth-child(2){
    left: -170px;
    transition: 0.75s;
    z-index:-1;
    transform: scale(0.8);
    box-shadow: 14px -5px 35px -21px rgba(0,0,0,0.66);
}
.slider input[type=radio]:nth-child(4):checked~ul.imgs>li:nth-child(3){
    left: -90px;
    transition: 0.75s;
    z-index:0;
    transform: scale(0.9);
    box-shadow: 14px -5px 35px -21px rgba(0,0,0,0.66);
}
.slider input[type=radio]:nth-child(4):checked~ul.imgs>li:nth-child(4){
    left: 0;
    transition: 0.75s;
    z-index:1;
    box-shadow: 14px -5px 35px -21px rgba(0,0,0,0.66);
}






.nav-container {
    display: flex;
    flex-direction: row;
    width: 100%;
    margin: 0; /*쓸 데 없는 공백 제거*/
    padding: 0; /*쓸 데 없는 공백 제거*/
    background-color: #513205;
    list-style-type: none; /*목록 기호 제거*/
}

.nav-item {
    padding: 15px;
    cursor: pointer; /*마우스 커서를 pointer 모양으로 함*/
}
.nav-item a { /*nav-item 클래스 아래의 a 요소를 선택함*/
    text-align: center;
    text-decoration: none; /*밑줄 없앰*/
    color: white;
}


.nav-item:nth-child(1) {
    background-color: #513205;
}

.nav-item:hover {
    background-color: grey;
}



a:link { color: red; text-decoration: none;} 
a:visited { color: black; text-decoration: none;} 
a:hover { color: blue; text-decoration: underline;}


#thick {
  border: 6px solid;
  border-color: #513205;
}

	.zoom_image img {
		transform:scale(1);
		transition:all 0.5s;
	}
	.zoom_image:hover img {
		transform:scale(1.2);
	}

</style>

<script>


</script>

<body style="background-color:#b7b19f">
<!-- background-color:#b7b19f" -->
<center>

<table width="959" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> 
		<td>
			<!--  상단 왼쪽 로고  -------------------------------------------->
			<table border="0" cellspacing="0" cellpadding="0" width="182">
				<tr>
					<td><a href="index.html"><img src="images/footer_logo2.gif" width="182" height="30" border="0"></a></td>
				</tr>
			</table>
		</td>
		<td align="right" valign="bottom">
			<!--  상단메뉴 Home/로그인/회원가입/장바구니/주문배송조회/즐겨찾기추가  ---->	
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
				<td><a href="index.html"><img src="images/top_menu01.gif" border="0"></a></td>
				<td><img src="images/top_menu_line.gif" width="11"></td>
		<?	

					if (!$cookie_no) {					

						echo("<td><a href='member_login.php'><img src='images/top_menu02.gif' border='0'></a></td>

							  <td><img src='images/top_menu_line.gif' width='11'></td>

							  <td><a href='member_agree.php'><img src='images/top_menu03.gif' border='0'></a></td>");

					}

					else{

						echo("<td><a href='member_logout.php'><img src='images/top_menu02_1.gif' border='0'></a></td>

							  <td><img src='images/top_menu_line.gif' width='11'></td>

							  <td><a href='member_edit.php'><img src='images/top_menu03_1.gif' border='0'></a></td>");

					}

				?>
					<td><img src="images/top_menu_line.gif" width="11"></td>
					<td><a href="member_agree.php"><img src="images/top_menu03.gif" border="0"></a></td>
					<td><img src="images/top_menu_line.gif" width="11"></td>
					<td><a href="cart.html"><img src="images/top_menu05.gif" border="0"></a></td>
					<td><img src="images/top_menu_line.gif" width="11"></td>
					<td><a href="jumun_login.html"><img src="images/top_menu06.gif" border="0"></a></td>
					<td><img src="images/top_menu_line.gif"width="11"></td>
					<td><img src="images/top_menu08.gif" onclick="javascript:Add_Site();" style="cursor:hand"></td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<!--  메인 이미지 --------------------------------------------------->

<div class="slider">
    <input type="radio" name="slide" id="slide1" checked>
    <input type="radio" name="slide" id="slide2">
    <input type="radio" name="slide" id="slide3">
    <input type="radio" name="slide" id="slide4">
    <ul id="imgholder" class="imgs">
        <li><a href="index.html"><img src="images/main.jpg" width="959" height="175" border="0"></a></li>
		 <li><a href="index.html"><iframe width="959" height="175" src="https://www.youtube.com/embed/qu3fySrXLpY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a></li>
		  <li><a href="index.html"><iframe width="959" height="175" src="https://www.youtube.com/embed/DuSBXKMBW7c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a></li>
		   <li><a href="index.html"><img src="images/main_image3.jpg" width="959" height="175" border="0"></a></li>
    </ul>
    <div class="bullets">
        <label for="slide1">&nbsp;</label>
        <label for="slide2">&nbsp;</label>
        <label for="slide3">&nbsp;</label>
        <label for="slide4">&nbsp;</label>
    </div>
</div>
<!-- 기본 메인 이미지
<table width="959" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td><a href="index.html"><img src="images/main.jpg" width="959" height="175" border="0"></a></td>
	</tr>
</table>
-->

<!--  Category 메뉴 : 가로형인 경우  --------------------------------------
<table width="959" height="25" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td align="left" bgcolor="#F7F7F7">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td><a href="product.php?menu=1">"><img src="images/main_menu01_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.php?menu=2">"><img src="images/main_menu02_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.php?menu=3">><img src="images/main_menu03_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.php?menu=4">><img src="images/main_menu04_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.php?menu=5">><img src="images/main_menu05_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.php?menu=6">><img src="images/main_menu06_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.php?menu=7">><img src="images/main_menu07_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.php?menu=8">><img src="images/main_menu08_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.php?menu=9">><img src="images/main_menu09_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.php?menu=10">><img src="images/main_menu10_off.gif" width="96" height="30" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
------------------------------------------------------------------------>




<!-- 상품 검색 ------------------------------------->
<table width="959" height="25" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr><td height="1" colspan="5" bgcolor="#F7F7F7"></td></tr>
	<tr bgcolor="#F0F0F0">
		<td width="181" align="center"><font color="#666666">&nbsp <b>Welcome ! 
		<?if(!$cookie_no)
			echo("<font color='#666666'><b>고객님</b></font>");
		else
			echo("<font color='#666666'><b>$cookie_name</b></font>");
			?>
			
		</b></font></td>
			
		<td style="font-size:9pt;color:#666666;font-family:돋움;padding-left:5px;"></td>
		<td align="right" style="font-size:9pt;color:#666666;font-family:돋움;"><b>상품검색 ▶&nbsp</b></td>
		<!-- form1 시작 -->
		<form name="form1" method="post" action="product_search.html">
		<td width="135">
			<input type="text" name="findtext" maxlength="40" size="17" class="cmfont1">
		</td>
		</form>
		<!-- form1 끝 -->
		<td width="65" align="center"><a href="javascript:Search()"><img src="images/i_search1.gif" border="0"></a></td>
	</tr>
	<tr><td height="1" colspan="5" bgcolor="#E5E5E5"></td></tr>
</table>

<!--
<table width="1000" height="25" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td align="left" bgcolor="#F7F7F7">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td><a href="product.php?menu=1"><img src="images/main_menu01_off.gif" width="120" height="50" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.php?menu=2"><img src="images/main_menu02_off.gif" width="120" height="50" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.php?menu=3"><img src="images/main_menu03_off.gif" width="120" height="50" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.php?menu=4"><img src="images/main_menu04_off.gif" width="120" height="50" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.php?menu=5"><img src="images/main_menu05_off.gif" width="120" height="50" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.php?menu=6"><img src="images/main_menu06_off.gif" width="120" height="50" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.php?menu=7"><img src="images/main_menu07_off.gif" width="120" height="50" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.php?menu=8"><img src="images/main_menu08_off.gif" width="120" height="50" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.php?menu=9"><img src="images/main_menu09_off.gif" width="120" height="50" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
					<td><a href="product.php?menu=10"><img src="images/main_menu10_off.gif" width="120" height="50" border="0"  onmouseover="img_change('on')" onmouseout="img_change('off')"></a></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
-->


    <nav>
            <ul class="nav-container">
				<li class="nav-item"> <a href="main.php">메인</a> </li>
                <li class="nav-item"> <a href="product.php?menu=1">남성가방</a> </li>
                <li class="nav-item"> <a href="product.php?menu=2">남성슈즈</a> </li>
                <li class="nav-item"> <a href="product.php?menu=3">여성가방</a> </li>
                <li class="nav-item"> <a href="product.php?menu=4">여성슈즈</a> </li>
                <li class="nav-item"> <a href="product.php?menu=5">지갑</a> </li>
                <li class="nav-item"> <a href="product.php?menu=6">시계</a> </li>
                <li class="nav-item"> <a href="product.php?menu=7">실버 주얼리</a> </li>
                <li class="nav-item"> <a href="product.php?menu=8">선글라스</a> </li>
                <li class="nav-item"> <a href="product.php?menu=9">벨트</a> </li>
				<li class="nav-item"> <a href="product.php?menu=10">기타상품</a> </li>
            </ul>
        </nav>
		
		
<br><br>

			<!--  화면 좌측메뉴 끝 (main_left) --------------------------------->
		</td>
		<td width="10"></td>
		<td valign="top">

<!-------------------------------------------------------------------------------------------->	
<!-- 시작 : 다른 웹페이지 삽입할 부분                                                       -->
<!-------------------------------------------------------------------------------------------->	


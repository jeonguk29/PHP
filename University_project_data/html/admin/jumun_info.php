<!-------------------------------------------------------------------------------------------->   
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->   
<?
include "../common.php";
$no=$_REQUEST["no"];
$query="select * from jumun where no47=$no;";
$result=mysqli_query($db,$query);
if(!$result) exit("에러: $query($query)");
$row=mysqli_fetch_array($result);
?>
<html>
<head>
<title>쇼핑몰 홈페이지</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>
</head>

<body style="margin:0">

<center>

<br>
<script> document.write(menu());</script>
<br>
<br>
<?
$state=$row["state47"];
for ($i=1; $j<$n_state; $j++)
{
   if ($state==$j)$statename=$a_state[$j];
}
?>
<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
   <tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문번호</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">&nbsp;<font size="3"><b><?echo("$no");?> (<font color="blue"><?echo("$statename");?></font>)</b></font></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문일</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?echo("$row[jumunday47]");?></td>
   </tr>
</table>
<br>
<?

if($row["member_no47"]==0){$ismember="비회원";}
else{$ismember="회원";}

$o_tel1=trim(substr($row["o_tel47"],0,3));        // 0번 위치에서 3자리 문자열 추출
$o_tel2=trim(substr($row["o_tel47"],3,4));        // 3번 위치에서 4자리
$o_tel3=trim(substr($row["o_tel47"],7,4)); 
$o_phone1=trim(substr($row["o_phone47"],0,3));        // 0번 위치에서 3자리 문자열 추출
$o_phone2=trim(substr($row["o_phone47"],3,4));        // 3번 위치에서 4자리
$o_phone3=trim(substr($row["o_phone47"],7,4));

$r_tel1=trim(substr($row["r_tel47"],0,3));        // 0번 위치에서 3자리 문자열 추출
$r_tel2=trim(substr($row["r_tel47"],3,4));        // 3번 위치에서 4자리
$r_tel3=trim(substr($row["r_tel47"],7,4)); 
$r_phone1=trim(substr($row["r_phone47"],0,3));        // 0번 위치에서 3자리 문자열 추출
$r_phone2=trim(substr($row["r_phone47"],3,4));        // 3번 위치에서 4자리
$r_phone3=trim(substr($row["r_phone47"],7,4));
?>
<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
   <tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?echo("$row[o_name47]");?> (<?echo("$ismember");?>)</td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자전화</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?echo("$o_tel1");?> -<?echo("$o_tel2");?> -<?echo("$o_tel3");?></td>
   </tr>
   <tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자 E-Mail</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?echo("$row[o_email47]");?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자핸드폰</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?echo("$o_phone1");?> -<?echo("$o_phone2");?> -<?echo("$o_phone3");?></td>
   </tr>
   <tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자주소</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"    colspan="3">(<?echo("$row[o_zip47]");?>) <?echo("$row[o_juso47]");?></td>
   </tr>
   </tr>
</table>
<img src="blank.gif" width="10" height="5"><br>
<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
   <tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?echo("$row[r_name47]");?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자전화</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?echo("$r_tel1");?> -<?echo("$r_tel2");?> -<?echo("$r_tel3");?></td>
   </tr>
   <tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자 E-Mail</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?echo("$row[r_email47]");?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자핸드폰</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?echo("$r_phone1");?> -<?echo("$r_phone2");?> -<?echo("$r_phone3");?></td>
   </tr>
   <tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자주소</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE" colspan="3">(<?echo("$row[r_zip47]");?>) <?echo("$row[r_juso47]");?></td>
   </tr>
   <tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">메모</font></td>
        <td width="300" height="50" bgcolor="#EEEEEE" colspan="3"><?echo("$row[memo47]");?></td>
   </tr>
</table>
<br>
<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
   <?
   
   $price=number_format($row["total_cash47"]);
   $halbu="일시불";
   if($row["pay_method47"]==0){

   if($row["card_halbu47"]==0){$halbu="일시불";}
   else{$halbu=$row["card_halbu47"]."개월";}

   if($row["card_kind47"]==1){$card="국민카드";}
   if($row["card_kind47"]==2){$card="신한카드";}
   if($row["card_kind47"]==3){$card="우리카드";}
   if($row["card_kind47"]==4){$card="하나카드";}
   
   echo("
   <tr> 
        <td width='100' height='20' bgcolor='#CCCCCC' align='center'><font color='#142712'>지불종류</font></td>
        <td width='300' height='20' bgcolor='#EEEEEE'>카드</td>
        <td width='100' height='20' bgcolor='#CCCCCC' align='center'><font color='#142712'>카드승인번호 </font></td>
        <td width='300' height='20' bgcolor='#EEEEEE'>$row[card_okno47]&nbsp</td>
   </tr>
   <tr> 
        <td width='100' height='20' bgcolor='#CCCCCC' align='center'><font color='#142712'>카드 할부</font></td>
        <td width='300' height='20' bgcolor='#EEEEEE'>$halbu</td>
        <td width='100' height='20' bgcolor='#CCCCCC' align='center'><font color='#142712'>카드종류</font></td>
        <td width='300' height='20' bgcolor='#EEEEEE'>$card</td>
   </tr>");}
   else{
   if($row["bank_kind47"]==1){$bank="국민은행";}
   if($row["bank_kind47"]==2){$bank="신한카드";}
   
   echo("
   <tr> 
        <td width='100' height='20' bgcolor='#CCCCCC' align='center'><font color='#142712'>무통장</font></td>
        <td width='300' height='20' bgcolor='#EEEEEE'>$bank:000-00000-0000</td>
        <td width='100' height='20' bgcolor='#CCCCCC' align='center'><font color='#142712'>입금자이름</font></td>
        <td width='300' height='20' bgcolor='#EEEEEE'>$row[bank_sender47]</td>
   </tr>");}
   ?>
</table>
<br>
<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
   <tr bgcolor="#CCCCCC"> 
    <td width="340" height="20" align="center"><font color="#142712">상품명</font></td>
   
      <td width="50"  height="20" align="center"><font color="#142712">수량</font></td>
      <td width="70"  height="20" align="center"><font color="#142712">단가</font></td>
      <td width="70"  height="20" align="center"><font color="#142712">금액</font></td>
      <td width="50"  height="20" align="center"><font color="#142712">할인</font></td>
      <td width="60"  height="20" align="center"><font color="#142712">옵션1</font></td>
      <td width="60"  height="20" align="center"><font color="#142712">옵션2</font></td>
      
   </tr>
   <?
    /* 0번째는 안됨 
	$query="select product.name47 as n1, opts1.name47 as n2, 
		opts2.name47 as n3,jumuns.num47,jumuns.price47,jumuns.cash47,jumuns.discount47 
	from  jumuns,  product,  opts as opts1,  opts as opts2 
	where jumuns.product_no47=product.no47 and jumuns.opts_no1=opts1.no47 
		and jumuns.opts_no2=opts2.no47 and jumuns.jumun_no47='$no';";
	*/ 
	
	// 하지만 1번째 부터는 가능 
	$query="select product.name47 as n1, opts1.name47 as n2, 
		opts2.name47 as n3,jumuns.num47,jumuns.price47,jumuns.cash47,jumuns.discount47 
    from ((jumuns left join product on jumuns.product_no47=product.no47)
           left join opts as opts1 on jumuns.opts_no1=opts1.no47)
           left join opts as opts2 on jumuns.opts_no2=opts2.no47
    where jumuns.jumun_no47='$no';";



   $result=mysqli_query($db,$query);
   if(!$result) exit("에러: $query");
   $count=mysqli_num_rows($result);
   for($i=0;$i<$count;$i++)
   {
      $row1=mysqli_fetch_array($result);
	  
	  if($row1["n1"] == 0)
	  {
		  echo("<tr bgcolor='#EEEEEE' height='20'>   
				<td width='340' height='20' align='left'>택배비</td>   
		  ");
	  }
	  else
	  {
		   echo("<tr bgcolor='#EEEEEE' height='20'>   
				<td width='340' height='20' align='left'>$row1[n1]</td> 
		  ");
	  }
      echo(" 
      <td width='50'  height='20' align='center'>$row1[num47]</td>   
      <td width='70'  height='20' align='right'>$row1[price47]</td>   
      <td width='70'  height='20' align='right'>$row1[cash47]</td>   
      <td width='50'  height='20' align='center'>$row1[discount47] %</td>   
      <td width='60'  height='20' align='center'>$row1[n2]</td>   
      <td width='60'  height='20' align='center'>$row1[n3]</td>   
      </tr>
      ");
   }
   ?>

</table>
<img src="blank.gif" width="10" height="5"><br>
<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
   <tr> 
     <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">총금액</font></td>
      <td width="700" height="20" bgcolor="#EEEEEE" align="right"><font color="#142712" size="3"><b><?echo("$price");?></b></font> 원&nbsp;&nbsp</td>
   </tr>
</table>

<table width="800" border="0" cellspacing="0" cellpadding="7">
   <tr> 
      <td align="center">
         <input type="button" value="이 전 화 면" onClick="javascript:history.back();">&nbsp
         <input type="button" value="프린트" onClick="javascript:print();">
      </td>
   </tr>
</table>

</center>

<br>
</body>
</html>
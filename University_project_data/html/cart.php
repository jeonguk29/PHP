<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "main_top.php";
	include "common.php";
	$no=$_REQUEST["no"];
	
?>
<!-------------------------------------------------------------------------------------------->	
<!-- 시작 : 다른 웹페이지 삽입할 부분                                                       -->
<!-------------------------------------------------------------------------------------------->	

			<!--  현재 페이지 자바스크립  -------------------------------------------->
			<script language = "javascript">

			function cart_edit(kind,pos) {
				if (kind=="deleteall") 
				{
					location.href = "cart_edit.php?kind=deleteall";
				} 
				else if (kind=="delete")	{
					location.href = "cart_edit.php?kind=delete&pos="+pos;
				} 
				else if (kind=="insert")	{
					var num=eval("form2.num"+pos).value;
					location.href = "cart_edit.php?kind=insert&pos="+pos+"&num="+num;
				}
				else if (kind=="update")	{
					var num=eval("form2.num"+pos).value;
					location.href = "cart_edit.php?kind=update&pos="+pos+"&num="+num;
				}
			}

			</script>

			<!-- form2 시작  -->
			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="746">
				<tr>
					<td height="30" align="left"><img src="images/cart_title.gif" width="746" height="30" border="0"></td>
				</tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="710" class="cmfont">
				<tr>
					<td><img src="images/cart_title1.gif" border="0"></td>
				</tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="710">
				<tr><td height="10"></td></tr>
			</table>

			<table border="0" cellpadding="5" cellspacing="1" width="710" class="cmfont" bgcolor="#CCCCCC">
				<tr bgcolor="F0F0F0" height="23" class="cmfont">
					<td width="420" align="center">상품</td>
					<td width="70"  align="center">수량</td>
					<td width="80"  align="center">가격</td>
					<td width="90"  align="center">합계</td>
					<td width="50"  align="center">삭제</td>
				</tr>

				<form name="form2" method="post">
				<?

				$total=0;
				$n_cart = $_COOKIE["n_cart"]; // 제품게수
				$cart = $_COOKIE["cart"];// 제품정보
		
				if (!$n_cart) $n_cart=0;
				for ($i=1;  $i<=$n_cart;  $i++)
				{
					if ($cart[$i])
				   {
					   list($no, $num, $opts1, $opts2)=explode("^", $cart[$i]);
					   $query="select*from opts where no47= $opts1 ";
						$result=mysqli_query($db,$query); 
						if (!$result) exit("에러:$query");
						$row1=mysqli_fetch_array($result);
						
						$query="select*from opts where no47= $opts2 ";
						$result=mysqli_query($db,$query); 
						if (!$result) exit("에러:$query");
						$row2=mysqli_fetch_array($result);

						$query="select*from product where no47= $no ";
						$result=mysqli_query($db,$query); 
						if (!$result) exit("에러:$query");
						$row3=mysqli_fetch_array($result);

						$query="select*from opt where no47= $row1[opt_no47] ";
						$result=mysqli_query($db,$query); 
						if (!$result) exit("에러:$query");
						$row4=mysqli_fetch_array($result);
						$query="select*from opt where no47= $row2[opt_no47] ";
						$result=mysqli_query($db,$query); 
						if (!$result) exit("에러:$query");
						$row5=mysqli_fetch_array($result);

						$price1=number_format( round($row3["price47"]*(100-$row3["discount47"])/100, -3) );
						$price2=number_format( round($num*$row3["price47"]*(100-$row3["discount47"])/100, -3) );
						
						$delete="delete";
						$update="update";
						echo("
						<tr>
							<td height='60' align='center' bgcolor='#FFFFFF'>
								<table cellpadding='0' cellspacing='0' width='100%'>
									<tr>
										<td width='60'>
											<a href='product_detail.php?no=$no'><img src='product/$row3[image1]' width='50' height='50' border='0'></a>
										</td>
										<td class='cmfont'>
											<a href='product_detail.php?no=$no'>$row3[name47]</a><br>
											<font color='#0066CC'>[$row4[name47]]</font> $row1[name47]<font color='#0066CC'> [$row5[name47]]</font> $row2[name47]
										</td>
									</tr>
								</table>
							</td>
							<td align='center' bgcolor='#FFFFFF'>
								<input type='text' name='num$i' size='3' value='$num' class='cmfont1'>&nbsp<font color='#464646'>개</font>
							</td>
							<td align='center' bgcolor='#FFFFFF'><font color='#464646'>$price1</font></td>
							<td align='center' bgcolor='#FFFFFF'><font color='#464646'>$price2</font></td>
							<td align='center' bgcolor='#FFFFFF'>
								<a href = 'javascript:cart_edit(\"update\",\"$i\")'><img src='images/b_edit1.gif' border='0'></a>&nbsp<br>
								<a href = 'javascript:cart_edit(\"delete\",\"$i\")'><img src='images/b_delete1.gif' border='0'></a>&nbsp
							</td>
						</tr>");
					   
					   
					   $total=$total+round(($num*$row3["price47"]*(100-$row3["discount47"])/100),-3);
					}
				}
				$total1=$total;
				if ($total < $max_baesongbi) $total=$total + $baesongbi ;

				
				?>
			
				<tr>
					<td colspan="5" bgcolor="#F0F0F0">
						<table width="100%" border="0" cellpadding="0" cellspacing="0" class="cmfont">
							<tr>
								<td bgcolor="#F0F0F0"><img src="images/cart_image1.gif" border="0"></td>
								<td align="right" bgcolor="#F0F0F0">
								<?
									
									if($total1 !=$total){
										$total=number_format($total);
										$total1=number_format($total1);
										echo("<font color='#0066CC'><b>총 합계금액</font></b> : 상품대금( $total1 원) + 배송료( $baesongbi 원) = <font color='#FF3333'><b> $total 원</b></font>&nbsp;
										</td>");}
									else{
										$total=number_format( round($total, -3) );
										$total1=number_format( round($total1, -3) );
										echo("<font color='#0066CC'><b>총 합계금액</font></b> : 상품대금( $total1 원) + 배송료(0원) = <font color='#FF3333'><b> $total 원</b></font>&nbsp;
										</td>");
									}
								?>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			</form>
			<!-- form2 끝  -->
			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr height="44">
					<td width="710" align="center" valign="middle">
						<a href="index.html"><img src="images/b_shopping.gif" border="0"></a>&nbsp;&nbsp;
						<a href="javascript:cart_edit('deleteall',0)"><img src="images/b_cartalldel.gif" width="103" height="26" border="0"></a>&nbsp;&nbsp;
						<a href="order.php"><img src="images/b_order1.gif" border="0"></a>
					</td>
				</tr>
			</table>

<!-------------------------------------------------------------------------------------------->	
<!-- 끝 : 다른 웹페이지 삽입할 부분                                                         -->
<!-------------------------------------------------------------------------------------------->	

		</td>
	</tr>
</table>
<br><br>
<?
	include "main_bottom.php";
?>



<!-- 화면 하단 부분 시작 (main_bottom) : 회사정보/회사소개/이용정보/개인보호정책 ... ---------->

&nbsp
</center>

</body>
</html>
<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->
<?
	include "main_top.php";
	include "common.php";
	$no=$_REQUEST[no];
	
?>
<!-------------------------------------------------------------------------------------------->	
<!-- 시작 : 다른 웹페이지 삽입할 부분                                                       -->
<!-------------------------------------------------------------------------------------------->	
			<?
			$query="select*from product where no56=$no";
			$result=mysqli_query($db,$query); 
			if (!$result) exit("에러:$query");
			$row=mysqli_fetch_array($result);
			?>
			<!--  현재 페이지 자바스크립  -------------------------------------------->
			<script language = "javascript">

			function Zoomimage(no) 
			{
				window.open("zoomimage.php?no="+no, "", "menubar=no, scrollbars=yes, width=560, height=640, top=30, left=50");
			}
		
		
			function check_form2(str) 
			{
				if (!form2.opts1.value) {
						alert("옵션1을 선택하십시요.");
						form2.opts1.focus();
						return;
				}
				if (!form2.opts2.value) {
						alert("옵션2를 선택하십시요.");
						form2.opts2.focus();
						return;
				}
				if (!form2.num.value) {
						alert("수량을 입력하십시요.");
						form2.num.focus();
						return;
				}
				if (str == "D") {
					form2.action = "order.php";
					form2.kind .value = "order";
					form2.submit();
				}
				else {
					form2.action = "cart_edit.php?kind=$kind";
					form2.submit();
				}
			}

			</script>

			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30"><img src="images/product_title3.gif" width="746" height="30" border="0"></td>
				</tr>
				<tr><td height="10"></td></tr>
			</table>

			<!-- form2 시작  -->
			<form name="form2" method="post" action="">
			<input type="hidden" name="no" value="<?=$no?>">
			<input type="hidden" name="kind" value="insert">

			<table border="0" cellpadding="0" cellspacing="0" width="745">
				<tr>
					<td width="335" align="center" valign="top">
						<!-- 상품이미지 -->
						<table border="0" cellpadding="0" cellspacing="1" width="315" height="315" bgcolor="D4D0C8">
							<tr>
								<td bgcolor="white" align="center">
									<img src="product/<?=$row[image256]?>" height="315" border="0" align="absmiddle" ONCLICK="Zoomimage('<?=$no?>')" STYLE="cursor:hand">
									
								</td>
							</tr>
						</table>
					</td>
					<td width="410 " align="center" valign="top">
						<!-- 상품명 -->
						<table border="0" cellpadding="0" cellspacing="0" width="370" class="cmfont">
							<tr><td colspan="3" bgcolor="E8E7EA"></td></tr>
							<tr>
								<td width="80" height="45" style="padding-left:10px">
									<img src="images/i_dot1.gif" width="3" height="3" border="0" align="absmiddle">
									<font color="ffffff"><b>제품명</b></font>
								</td>
								<td width="1" bgcolor="E8E7EA"></td>
								<td style="padding-left:10px">
									<font color="ffffff"><?=$row[name56]?></font><br>
									<?
										if($row[icon_new56]==1)echo("<img src='images/i_new.gif' align='absmiddle' vspace='1'>");
										if($row[icon_hit56]==1)echo("<img src='images/i_hit.gif' align='absmiddle' vspace='1'>");
										if($row[icon_sale56]==1)echo("<img src='images/i_sale.gif' align='absmiddle' vspace='1'>");
										$price1=number_format( round($row[price56], -3) );
										$price2=number_format( round($row[price56]*(100-$row[discount56])/100, -3) );

									?>
									
								</td>
							</tr>
							<tr><td colspan="3" bgcolor="E8E7EA"></td></tr>
							<!-- 시중가 -->
							<tr>
								<td width="80" height="35" style="padding-left:10px">
									<img src="images/i_dot1.gif" width="3" height="3" border="0" align="absmiddle">
									<font color="ffffff"><b>소비자가</b></font>
								</td>
								<td width="1" bgcolor="E8E7EA"></td>
								<td width="289" style="padding-left:10px"><font color="ffffff"><?=$price1?>원</font></td>
							</tr>
							<tr><td colspan="3" bgcolor="E8E7EA"></td></tr>
							<!-- 판매가 -->
							<tr>
								<td width="80" height="35" style="padding-left:10px">
									<img src="images/i_dot1.gif" width="3" height="3" border="0" align="absmiddle">
									<font color="ffffff"><b>판매가</b></font>
								</td>
								<td width="1" bgcolor="E8E7EA"></td>
								<td style="padding-left:10px"><font color="ffffff"><b><?=$price2?>원</b></font></td>
							</tr>
							<tr><td colspan="3" bgcolor="E8E7EA"></td></tr>
							<!-- 옵션 -->
							<tr>
								<td width="80" height="35" style="padding-left:10px">
									<img src="images/i_dot1.gif" width="3" height="3" border="0" align="absmiddle">
									<font color="ffffff"><b>옵션선택</b></font>
								</td>
								<td width="1" bgcolor="E8E7EA"></td>
								<td style="padding-left:10px">
									<select name="opts1" class="cmfont1">
										<?
											$query="select*from opt where no56= $row[opt156] ";
											$result=mysqli_query($db,$query); 
											if (!$result) exit("에러:$query");
											$row3=mysqli_fetch_array($result);

											$query="select*from opts where opt_no56= $row[opt156] order by name56";
											$result=mysqli_query($db,$query);
											if (!$result) exit("에러:$query");
											$count=mysqli_num_rows($result);
										
											if ($count>0) mysqli_data_seek($result,$first);
											echo("<option value='' selected>$row3[name56] 선택</option>");
											for ($i=0;$i<$count;$i++)
											{
												$row1=mysqli_fetch_array($result);
												
												if ($row[opt156]==$row1[no56])
												echo("<option value='$row1[no56]' selected>$row1[name56]</option>");
												else
												echo("<option value='$row1[no56]'>$row1[name56]</option>");
											 }
										?>
									</select> &nbsp;
									<select name="opts2" class="cmfont1">
										<?
											$query="select*from opt where no56= $row[opt256] ";
											$result=mysqli_query($db,$query); 
											if (!$result) exit("에러:$query");
											$row4=mysqli_fetch_array($result);

											$query="select*from opts where opt_no56= $row[opt256] order by name56";
											$result=mysqli_query($db,$query);
											if (!$result) exit("에러:$query");
											$count=mysqli_num_rows($result);
										
											if ($count>0) mysqli_data_seek($result,$first);
											echo("<option value='' selected>$row4[name56] 선택</option>");
											for ($i=0;$i<$count;$i++)
											{
												$row2=mysqli_fetch_array($result);
												
												if ($row[opt256]==$row2[no56])
												echo("<option value='$row2[no56]' selected>$row2[name56]</option>");
												else
												echo("<option value='$row2[no56]'>$row2[name56]</option>");
											 }
										?>
									</select>
								</td>
							</tr>
							<tr><td colspan="3" bgcolor="E8E7EA"></td></tr>
							<!-- 수량 -->
							<tr>
								<td width="80" height="35" style="padding-left:10px">
									<img src="images/i_dot1.gif" width="3" height="3" border="0" align="absmiddle">
									<font color="ffffff"><b>수량</b></font>
								</td>
								<td width="1" bgcolor="E8E7EA"></td>
								<td style="padding-left:10px">
									<input type="text" name="num" value="1" size="3" maxlength="5" class="cmfont1"> <font color="ffffff">개</font>
								</td>
							</tr>
							<tr><td colspan="3" bgcolor="E8E7EA"></td></tr>
						</table>
						<table border="0" cellpadding="0" cellspacing="0" width="370" class="cmfont">
							<tr>
								<td height="70" align="center">
									<a href="javascript:check_form2('D')"><img src="images/b_order.gif" border="0" align="absmiddle"></a>&nbsp;&nbsp;&nbsp;
									<a href="javascript:check_form2('C')"><img src="images/b_cart.gif"  border="0" align="absmiddle"></a>
								</td>
							</tr>
						</table>
						<table border="0" cellpadding="0" cellspacing="0" width="370" class="cmfont">
							<tr>
								<td height="30" align="center">
									<img src="images/product_text1.gif" border="0" align="absmiddle">
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			</form>
			<!-- form2 끝  -->

			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="22"></td></tr>
			</table>

			<!-- 상세설명 -->
			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="746">
				<tr>
					<td height="30" align="center">
						<img src="images/product_title.gif" width="746" height="30" border="0">
					</td>
				</tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="746" style="font-size:9pt">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="200" valign=top style="line-height:14pt">
						본제품의 상세설명은 다음과 같습니다.
						<br>
						<br>
						<center>
						<img src="product/<?=$row[image356]?>">					
						</center>
					</td>
				</tr>
			</table>

			<!-- 교환배송정보 -->
			<table border="0" cellpadding="0" cellspacing="0" width="746" class="cmfont">
				<tr><td height="10"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="746">
				<tr>
					<td align="center" class="cmfont"><?echo("$row[content56]");?></td>
				</tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="746" class="cmfont">
				<tr><td height="10"></td></tr>
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
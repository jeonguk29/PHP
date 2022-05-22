<? 
	include 'main_top.php';
	include 'common.php';
	$query='select * from product 
                where icon_new47=1 and status47=1 
                order by rand()  limit 15';
				
	$result=mysqli_query($db,$query);
	if(!$result) exit('에러:$query');



?>

<!-------------------------------------------------------------------------------------------->	
<!-- 시작 : 다른 웹페이지 삽입할 부분                                                       -->
<!-------------------------------------------------------------------------------------------->	

			<!---- 화면 우측(신상품) 시작 -------------------------------------------------->	
			<table width='767' border='0' cellspacing='0' cellpadding='0'>
				<tr>
					<td height='60'>
						<img src='images/main_newproduct.jpg' width='767' height='40'>
					</td>
				</tr>
			</table>

			
				
					<?
					$num_col=5;   $num_row=3;                   // column수, row수
					$count=mysqli_num_rows($result);         // 출력할 제품 개수
					$icount=0;                                                // 출력한 제품 개수 카운터
				
					
					echo("<table border='0' width='720'cellpadding='0' cellspacing='0'>");
					for ($ir=0; $ir<$num_row; $ir++)
					{
						 echo('<tr>');
						 for ($ic=0;  $ic<$num_col;  $ic++)
						{
							 $icount++;
							 if ($icount <= $count)
							{
								$row=mysqli_fetch_array($result);
								$price=number_format( (int)$row["price47"] );
								$name=stripslashes( (string)$row["name47"] );
								$content=stripslashes( (string)$row["content47"] );
					
								
								  echo("
						<td width='150' height='205' align='center' valign='top'>
						<table border='0' cellpadding='0' cellspacing='0' width='100' class='cmfont'>
							<tr> 
								<td align='center'> 
									<a href='product_detail.php?no=$row[no47]'><img src='product/$row[image1]' width='120' height='140' border='0'></a>
								</td>
							</tr>
							<tr><td height='5'></td></tr>
							<tr> 
								<td height='20' align='center'>
									<a href='product_detail.php?no=$row[no47]'><font color='444444'>$name</font></a><br>&nbsp;");
										if($row["icon_new47"] == 1)
										{
												$icon_new = $a_icon[1];
												echo("<img src='images/i_new.gif' align='absmiddle' vspace='1'> ");
										}
										if($row["icon_new47"] == 1)
										{
												$icon_hit = $a_icon[2];
												echo("<img src='images/i_hit.gif' align='absmiddle' vspace='1'> ");
										}
										if($row["icon_new47"] == 1)
										{
												$icon_sale = $a_icon[3];
												echo("<img src='images/i_sale.gif' align='absmiddle' vspace='1'>"."("."$row[discount47]"."%)</td>");
										}
										echo(" </td>
										</tr>");
										
										if($row["icon_sale47"] == 1){
										$saleprice = number_format(round($row["price47"] *(100-$row["discount47"])/100, -3));
										echo("<tr><td height='20' align='center'><strike>$price 원</strike></td></tr>");
										echo("<tr><td height='20' align='center'><b>$saleprice 원</b></td></tr>");
										}
										else
										{
											echo("<tr><td height='20' align='center'><b>$price 원</b></td></tr>");
										}
										echo("</table></td>");
							}
							else{	 
								echo('<td></td>');      // 제품 없는 경우
							
							}
							
						}
						echo('</tr>');
					}
					echo('</table>');
				
				?>
			
				
					<!-- <tr><td height='20' align='center'><strike>89,000 원</strike><br><b>70,000 원</b></td></tr> -->
			</table>
			

			<!---- 화면 우측(신상품) 끝 -------------------------------------------------->	

<!-------------------------------------------------------------------------------------------->	
<!-- 끝 : 다른 웹페이지 삽입할 부분                                                         -->
<!-------------------------------------------------------------------------------------------->	

<? 
	include 'main_bottom.php';
?>
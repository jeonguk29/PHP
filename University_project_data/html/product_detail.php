<!-------------------------------------------------------------------------------------------->   
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->   
<?
   include "main_top.php";
   include "common.php";
   $no=$_REQUEST["no"];

   
   $query="select * from product where no47=$no";
   $result=mysqli_query($db,$query);     
   if (!$result) exit("에러:$query");                
   $count=mysqli_num_rows($result); 
   $row=mysqli_fetch_array($result);
   
   $query = "select * from opts where opt_no47=$row[opt1]";
   $result=mysqli_query($db,$query);     
   if (!$result) exit("에러1:$query");                 
   $count1=mysqli_num_rows($result);
   $row1=mysqli_fetch_array($result);
   
   $query = "select * from opts where opt_no47=$row[opt2]";
   $result2=mysqli_query($db,$query);     
   if (!$result2) exit("에러1:$query");                 
   $count2=mysqli_num_rows($result2);
   $row2=mysqli_fetch_array($result2);
   
   $query = "select * from opt where no47=$row[opt1]";
   $result3=mysqli_query($db,$query);     
   if (!$result3) exit("에러1:$query");      
   $row3=mysqli_fetch_array($result3);
   
   $query = "select * from opt where no47=$row[opt2]";
   $result4=mysqli_query($db,$query);     
   if (!$result4) exit("에러1:$query");      
   $row4=mysqli_fetch_array($result4);
   
   $price1=number_format($row["price47"]);
   $price=number_format(round($row["price47"]*(100-$row["discount47"])/100, -3) );
?>



<!-------------------------------------------------------------------------------------------->   
<!-- 시작 : 다른 웹페이지 삽입할 부분                                                       -->
<!-------------------------------------------------------------------------------------------->   

         <!--  현재 페이지 자바스크립  -------------------------------------------->
         <script language = "javascript">

         function Zoomimage(no) 
         {
            window.open("zoomimage.php?no="+no, "", "menubar=no, scrollbars=yes, width=560, height=640, top=30, left=47");
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
               form2.action = "cart_edit.php";
               form2.kind .value = "order";
               form2.submit();
            }
            else {
               form2.action = "cart_edit.php";
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
         <input type="hidden" name="no" value="<?=$row["no47"]?>">
         <input type="hidden" name="kind" value="insert">

         <table border="0" cellpadding="0" cellspacing="0" width="745">
            <tr>
               <td width="335" align="center" valign="top">
                  <!-- 상품이미지 -->
                  <table border="0" cellpadding="0" cellspacing="1" width="315" height="315" bgcolor="D4D0C8">
                     <tr>
                        <td bgcolor="white" align="center">
                           <img src="product/<?=$row["image2"]?>" height="315" border="0" align="absmiddle" ONCLICK="Zoomimage('<?=$no?>')" STYLE="cursor:hand">
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
                           <font color="666666"><b>제품명</b></font>
                        </td>
                        <td width="1" bgcolor="E8E7EA"></td>
                        <td style="padding-left:10px">
                           <font color="282828"><?=$row["name47"];?></font><br>
                              <?
                        if($row["icon_hit47"]==1)   echo("<img src='images/i_hit.gif' align='absmiddle' vspace='1'>");
                     if($row["icon_new47"]==1)   echo("<img src='images/i_new.gif' align='absmiddle' vspace='1'>");
                     if($row["icon_sale47"]==1) echo("<img src='images/i_sale.gif' align='absmiddle' vspace='1'>");
                  ?>
                        </td>
                     </tr>
                     <tr><td colspan="3" bgcolor="E8E7EA"></td></tr>
                     <!-- 시중가 -->
                     <tr>
                        <td width="80" height="35" style="padding-left:10px">
                           <img src="images/i_dot1.gif" width="3" height="3" border="0" align="absmiddle">
                           <font color="666666"><b>소비자가</b></font>
                        </td>
                        <td width="1" bgcolor="E8E7EA"></td>
                        <td width="289" style="padding-left:10px"><font color="666666"><?=$row["price47"]?>원</font></td>
                     </tr>
                     <tr><td colspan="3" bgcolor="E8E7EA"></td></tr>
                     <!-- 판매가 -->
                     <tr>
                        <td width="80" height="35" style="padding-left:10px">
                           <img src="images/i_dot1.gif" width="3" height="3" border="0" align="absmiddle">
                           <font color="666666"><b>판매가</b></font>
                        </td>
                        <td width="1" bgcolor="E8E7EA"></td>
                        <td style="padding-left:10px"><font color="0288DD"><b><?=$price?>원</b></font></td>
                     </tr>
                     <tr><td colspan="3" bgcolor="E8E7EA"></td></tr>
                     <!-- 옵션 -->
                     <tr>
                        <td width="80" height="35" style="padding-left:10px">
                           <img src="images/i_dot1.gif" width="3" height="3" border="0" align="absmiddle">
                           <font color="666666"><b>옵션선택</b></font>
                        </td>
                        <td width="1" bgcolor="E8E7EA"></td>
                        <td style="padding-left:10px">
                      <select name="opts1" class="cmfont1">
										<?
											$query="select*from opt where no47= $row[opt1] ";
											$result=mysqli_query($db,$query); 
											if (!$result) exit("에러:$query");
											$row3=mysqli_fetch_array($result);

											$query="select*from opts where opt_no47= $row[opt1] order by name47";
											$result=mysqli_query($db,$query);
											if (!$result) exit("에러:$query");
											$count=mysqli_num_rows($result);
										
											if ($count>0) mysqli_data_seek($result,$first);
											echo("<option value='' selected>$row3[name47] 선택</option>");
											for ($i=0;$i<$count;$i++)
											{
												$row1=mysqli_fetch_array($result);
												
												if ($row["opt1"]==$row1["no47"])
												echo("<option value='$row1[no47]' selected>$row1[name47]</option>");
												else
												echo("<option value='$row1[no47]'>$row1[name47]</option>");
											 }
										?>
									</select> &nbsp;
									<select name="opts2" class="cmfont1">
										<?
											$query="select*from opt where no47= $row[opt2] ";
											$result=mysqli_query($db,$query); 
											if (!$result) exit("에러:$query");
											$row4=mysqli_fetch_array($result);

											$query="select*from opts where opt_no47= $row[opt2] order by name47";
											$result=mysqli_query($db,$query);
											if (!$result) exit("에러:$query");
											$count=mysqli_num_rows($result);
										
											if ($count>0) mysqli_data_seek($result,$first);
											echo("<option value='' selected>$row4[name47] 선택</option>");
											for ($i=0;$i<$count;$i++)
											{
												$row2=mysqli_fetch_array($result);
												
												if ($row["opt2"]==$row2["no47"])
												echo("<option value='$row2[no47]' selected>$row2[name47]</option>");
												else
												echo("<option value='$row2[no47]'>$row2[name47]</option>");
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
                           <font color="666666"><b>수량</b></font>
                        </td>
                        <td width="1" bgcolor="E8E7EA"></td>
                        <td style="padding-left:10px">
                           <input type="text" name="num" value="1" size="3" maxlength="5" class="cmfont1"> <font color="666666">개</font>
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
               <td height="200" valign=top style="line-height:14pt" align = left><p style="text-align:center;">
                   <?=$row["contents47"]?>
                   </p>
                  <br>
                  <br>
                  <center>
                  <img src="product/<?=$row["image3"]?>"><br><br><br>
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
               <td align="center" class="cmfont"></td>
            </tr>
         </table>
         <table border="0" cellpadding="0" cellspacing="0" width="746" class="cmfont">
            <tr><td height="10"></td></tr>
         </table>


<!-------------------------------------------------------------------------------------------->   
<!-- 끝 : 다른 웹페이지 삽입할 부분                                                         -->
<!-------------------------------------------------------------------------------------------->   
<?
   include "main_bottom.php";
?>
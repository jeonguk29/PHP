<!-------------------------------------------------------------------------------------------->   
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->   
<?
include "common.php";
include "main_top.php";
   $menu=$_REQUEST["menu"];
   $sort=$_REQUEST["sort"];

   if ($sort=="up")            // 고가격순
   $query="select * from product where menu47=$menu order by price47 desc";

   else if ($sort=="down")  // 저가격순
   $query="select * from product where menu47=$menu order by price47";

   else if ($sort=="name")  // 이름순
   $query="select * from product where menu47=$menu order by name47";
   else                              // 신상품순
   $query="select * from product where menu47=$menu order by no47 desc";

   $result=mysqli_query($db,$query); 
   if (!$result) exit("에러:$query");

   $count=mysqli_num_rows($result);
?>   <!--  현재 페이지 자바스크립  -------------------------------------------->
<!-------------------------------------------------------------------------------------------->   
<!-- 시작 : 다른 웹페이지 삽입할 부분                                                       -->
<!-------------------------------------------------------------------------------------------->   

      <!-- 하위 상품목록 -->

         <!-- form2 시작 -->
   
         <form name="form2" method="post" action="product.php">
         <input type="hidden" name="menu" value="<?=$menu;?>">


         <table border="0" cellpadding="0" cellspacing="5" width="767" class="cmfont" bgcolor="#efefef">
            <tr>
               <td bgcolor="white" align="center">
                  <table border="0" cellpadding="0" cellspacing="0" width="751" class="cmfont">
                     <tr>
                        <td align="center" valign="middle">
                           <table border="0" cellpadding="0" cellspacing="0" width="730" height="40" class="cmfont">
                              <tr>
                                 <td width="500" class="cmfont">
                                    <font color="#C83762" class="cmfont"><b><?=$a_menu[$menu]?> &nbsp</b></font>&nbsp
                                 </td>
                                 <td align="right" width="274">
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="cmfont">
                                       <tr>
                                          <td align="right"><font color="EF3F25"><b><?=$count;?></b></font> 개의 상품.&nbsp;&nbsp;&nbsp</td>
                                          <td width="100">
            <select name="sort" size="1" class="cmfont" onChange="form2.submit()">
                                                <option value="new" <?=($sort=="new")?"selected":""?>>신상품순 정렬</option>
                                                <option value="up"<?=($sort=="up")?"selected":""?>>고가격순 정렬</option>
                                                <option value="down"<?=($sort=="down")?"selected":""?>>저가격순 정렬</option>
                                                <option value="name"<?=($sort=="name")?"selected":""?>>상품명 정렬</option>
                                             </select>
                                          </td>
                                       </tr>
                                    </table>
                                 </td>
                              </tr>
                           </table>
                        </td>
                     </tr>
                  </table>
               </td>
            </tr>
         </table>
         </form>
         <!-- form2 -->
<?
   $num_col=4;
   $num_row=4;
   $page_line=$num_col*$num_row;

   $icount=0;
   $page=$_REQUEST["page"];

   if(!$page) $page=1;
   $pages = ceil($count/$page_line);
   $first = 1;

   if ($count>0) $first = $page_line*($page-1);
   $page_last=$count-$first;
   if($page_last>$page_line)$page_last=$page_line;
   if($count>0) mysqli_data_seek($result,$first);
echo("<table border='0' cellpadding='0' cellspacing='0'>");
for ($ir=0;  $ir<$num_row;  $ir++)
{
     echo("<tr>");
     for ($ic=0;  $ic<$num_col;  $ic++)
     {
          if ($icount <= $page_last-1 )
         {
                     $row=mysqli_fetch_array($result);
                     
                     $price=number_format($row["price47"]);
                     $saleprice=number_format(round($row["price47"]*(100-$row["discount47"])/100,-2)); 
              echo("<td width='510' height='205' align='center' valign='top'>
                  <table border='0' cellpadding='0' cellspacing='0' width='100' class='cmfont'>
                     <tr> 
                        <td align='center'> 
						<div class='zoom_image' id='thick'>
                           <a href='product_detail.php?no=$row[no47]'><img src='product/$row[image2]' width='350' height='300' border='0'></a>
                        </div>
						</td>
                     </tr>
                     <tr><td height='5'></td></tr>
                     <tr> 
                        <td height='20' align='center'>
			
                     <a href='product_detail.php?no=$row[no47]'><font color='444444'>$row[name47]</font></a><br>&nbsp; ");
                           if($row['icon_hit47']==1) echo("<img src='images/i_hit.gif' align='absmiddle' vspace='1'>");
                           if($row['icon_new47']==1) echo("<img src='images/i_new.gif' align='absmiddle' vspace='1'>");
                           if($row['icon_sale47']==1) echo("<img src='images/i_sale.gif' align='absmiddle' vspace='1'><font color='red'> $row[discount47] %</font>");
                           echo("</td></tr>");
                  if($row['icon_sale47']==1)
                              {
                              echo("<tr><td height='20' align='center'><b><font color='red'><s>$price</s></font> <font color='black'>원</font></b></td></tr>");
                              echo("<tr><td height='20' align='center'><font color='black'><b>$saleprice 원</b></font></td></tr>");
                              }
                           else
                              echo("<tr><td height='20' align='center'><font color='black'><b>$price 원</b></font></td></tr>");
                           echo("</table></td>");
          }
         else
              echo("<td height='10'></td>");
         $icount++;
      }
      echo("</tr>");
}
echo("</table>");

?>


     <?
      $blocks = ceil($pages/$page_block);
      $block = ceil($page/$page_block);
      $page_s = $page_block * ($block-1);
      $page_e = $page_block * $block;
      if($blocks <= $block)$page_e = $pages;
      echo("<table width='690' border='0'> <tr><td height='20' align='center'>");
         
      if($block>1)
      {
         $tmp = $page_s;
         echo("<a href='product.php?page=$tmp&text1=$text1'>
               <img src = 'images/i_prev.gif' align='absmiddle' border='0'></a>&nbsp");
      }
      for($i=$page_s+1; $i<=$page_e; $i++)
      {
         if($page == $i)
            echo("<font color='red'><b>$i</b></font>&nbsp");
         else
            echo("<a href='product.php?page=$i&text1=$text1'>[$i]</a>&nbsp");
      }
      if ($block < $blocks)
      {
         $tmp = $page_e+1;
         echo ("&nbsp<a href='product.php?page=$tmp&text1=$text1'>
               <img src='images/i_next.gif' align='absmiddle' border='0'>
               </a>");
      }
      echo("   </td>
         </tr>
      </table>");
?>

<!-------------------------------------------------------------------------------------------->   
<!-- 끝 : 다른 웹페이지 삽입할 부분                                                         -->
<!-------------------------------------------------------------------------------------------->   

<?
include "main_bottom.php";
?>
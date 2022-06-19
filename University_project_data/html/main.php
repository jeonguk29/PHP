
<?
   include "main_top.php" ;
    include "common.php";
    
    $query="select * from product 
                where icon_new47=1 and status47=1 
                order by rand()  limit 15";
            
            $result=mysqli_query($db,$query);         //sql실행
  if(!$result) exit("에러:$query");            //에러 조사
  $count=mysqli_num_rows($result);   //레코드개수
  
  $num_col=5;   $num_row=3;                   // column수, row수
$count=mysqli_num_rows($result);         // 출력할 제품 개수
$icount=0; 

    
   
?>


  <meta charset="UTF-8">
  <title>CodePen - Pseudo ASCII-Art</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


<style>


h1 {
  color: #ccc;
}
.asciiart-wrap {
  background: #000;
}
.asciiart {
  -webkit-background-clip: text;
  background-clip: text;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  -webkit-text-fill-color: transparent;
  text-fill-color: transparent;
  word-break: break-all;
  color: #fff;
  font-family: monospace;
  font-size: 8px;
  font-weight: bold;
  letter-spacing: -1px;
  margin-bottom: 30px;
  padding: 3px;
  text-align: justify;
}
.art-1 {
  background-image: url(https://unsplash.it/1200/600/?image=1080);
}
.art-2 {
  background-image: url(https://unsplash.it/1200/600/?image=1027);
}


</style>
<!-------------------------------------------------------------------------------------------->   
<!-- 시작 : 다른 웹페이지 삽입할 부분                                                       -->
<!-------------------------------------------------------------------------------------------->   


         <!---- 화면 우측(신상품) 시작 -------------------------------------------------->   
         <table width="767" border="0" cellspacing="0" cellpadding="0">
            <tr>
               <td height="60">
                  <img src="images/main_newproduct.jpg" width="767" height="40">
               </td>
            </tr>
         </table>

         
            <!---1번째 줄-->
<?
            


echo("<table>");
for ($ir=0; $ir<$num_row; $ir++)
{
   
     echo("<tr>");
    
     for ($ic=0;  $ic<$num_col;  $ic++)
    {
         if ($icount < $count)
        {
       $row=mysqli_fetch_array($result);
            
         $price=number_format($row["price47"]);
       
         $name = stripslashes ($row["name47"]);
       
          
      
          
          
             echo("
               <td width='150' height='205' align='center' valign='top'>
                  <table border='0' cellpadding='0' cellspacing='0' width='100' class='cmfont'>
                     <tr> 
                        <td align='center'> 
                           <a href='product_detail.php?no=$row[no47]'><img src='product/$row[image1]'</a>
                        </td>
                     </tr>
                     <tr><td height='5'></td></tr>
                     <tr> 
                        <td height='20' align='center'>
                           <a href='product_detail.php?no=$row[no47]'><font color='444444'>$name</font></a>&nbsp;");
      
            
            
            if ($row["icon_new47"] == 1){
               $icon_new=$a_icon[1];
               echo("<img src='images/i_new.gif' align='absmiddle' vspace='1'> ");
            }
            
            if ($row["icon_hit47"] == 1){
               $icon_hit=$a_icon[2];
            echo("<img src='images/i_hit.gif' align='absmiddle' vspace='1'> ");
            }
            
            if ($row["icon_sale47"] == 1){
               $icon_sale=$a_icon[3];
              echo("<img src='images/i_sale.gif' align='absmiddle' vspace='1'> "."("."$row[discount47]"."%)</td>");
            }   
         
         echo("</td> 
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
			<br>
			
			
         <!-- <tr><td height='20' align='center'><strike>89,000 원</strike><br><b>70,000 원</b></td></tr> -->
    <iframe width="700" height="400" src="https://www.youtube.com/embed/EFQopBr0BAE?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			
		</table>
		
   				
<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center">
      <h1>루이비통이 있는 곳이라면 항상 고급스럽습니다.<br/><small>(당신을 더욱 돋보이게 해줄 브랜드 )</small></h1>
    </div>
    <div class="col-sm-6">
      <div class="asciiart-wrap">
        <div class="asciiart art-1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et rebum.</div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="asciiart-wrap">
        <div class="asciiart art-2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue.</div>
      </div>
    </div>

  </div>
</div>  



      <h1>루이비통을 착용한 연예인<br/><small>(화보 사진집)</small></h1>
	
		<main>
			<div class="frame">
				<h1 class="frame__title">Alternate Column Scroll</h1>
			
				<button class="unbutton button-menu" aria-label="Open the menu"><span></span></button>
			</div>
			
			

			
			<div class="columns" data-scroll-container>
				<div class="column-wrap column-wrap--height">
					<div class="column">
						<figure class="column__item">
							<div class="column__item-imgwrap" data-pos="2">
								<div class="column__item-img" style="background-image:url(img/1.jpg)"></div>
							</div>
							<figcaption class="column__item-caption">
								<span>Cyber Blue</span>
								<span>2011</span>
							</figcaption>
						</figure>
						
						
						
						
		
						
						
						

						
						
						
						
						
						<figure class="column__item">
							<div class="column__item-imgwrap" data-pos="5">
								<div class="column__item-img" style="background-image:url(img/2.jpg)"></div>
							</div>
							<figcaption class="column__item-caption">
								<span>Gnostic Will</span>
								<span>2012</span>
							</figcaption>
						</figure>
						<figure class="column__item">
							<div class="column__item-imgwrap" data-pos="8">
								<div class="column__item-img" style="background-image:url(img/3.jpg)"></div>
							</div>
							<figcaption class="column__item-caption">
								<span>French Kiss</span>
								<span>2013</span>
							</figcaption>
						</figure>
						<figure class="column__item">
							<div class="column__item-imgwrap" data-pos="11">
								<div class="column__item-img" style="background-image:url(img/4.jpg)"></div>
							</div>
							<figcaption class="column__item-caption">
								<span>Half Life</span>
								<span>2014</span>
							</figcaption>
						</figure>
						<figure class="column__item">
							<div class="column__item-imgwrap" data-pos="14">
								<div class="column__item-img" style="background-image:url(img/5.jpg)"></div>
							</div>
							<figcaption class="column__item-caption">
								<span>Love Boat</span>
								<span>2015</span>
							</figcaption>
						</figure>
						<figure class="column__item">
							<div class="column__item-imgwrap" data-pos="17">
								<div class="column__item-img" style="background-image:url(img/6.jpg)"></div>
							</div>
							<figcaption class="column__item-caption">
								<span>Golden Ray</span>
								<span>2016</span>
							</figcaption>
						</figure>
						<figure class="column__item">
							<div class="column__item-imgwrap" data-pos="20">
								<div class="column__item-img" style="background-image:url(img/7.jpg)"></div>
							</div>
							<figcaption class="column__item-caption">
								<span>Blame Game</span>
								<span>2017</span>
							</figcaption>
						</figure>
						<figure class="column__item">
							<div class="column__item-imgwrap" data-pos="23">
								<div class="column__item-img" style="background-image:url(img/8.jpg)"></div>
							</div>
							<figcaption class="column__item-caption">
								<span>Lone Dust</span>
								<span>2018</span>
							</figcaption>
						</figure>
					</div><!-- /column -->
				</div><!-- /column-wrap -->
				
				
				
				
	
				
				<div class="column-wrap">
					<div class="column" data-scroll-section>
					
					
													<figure class="column__item">
						
									<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/9.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>당신이 있는곳 어디든</h5>
        <p>패션은 변하지만 스타일은 영원하다.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/12.jpg" class="d-block w-100" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5>대체할 수 없는 존재가 되려면 늘 남달라야한다.</h5>
        <p>패션은 즉각적인 언어이다.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/13.jpg" class="d-block w-100" alt="..." >
      <div class="carousel-caption d-none d-md-block">
        <h5>당신이 입는 옷이 당신의 태도를 만든다.</h5>
        <p>적게 구입하고 많이 생각하라.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
						
					</figure>	
					
					
					
		
					
						<figure class="column__item">
		<div class="column__item-imgwrap" data-pos="1">
								<div class="column__item-img" style="background-image:url(img/21.jpg)">
<!--	
	<iframe width="600" height="600" src="https://www.youtube.com/embed/yekdy9NZCdw?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
-->								
								</div>
							</div>
							<figcaption class="column__item-caption">
								<span>Lucky Wood</span>
								<span>2019</span>
							</figcaption>
						</figure>
						
						
						
		
					


		
					</div><!-- /column -->
				</div>
				<div class="column-wrap column-wrap--height">
					<div class="column">
						<figure class="column__item">
							<div class="column__item-imgwrap" data-pos="3">
								<div class="column__item-img" style="background-image:url(img/17.jpg)"></div>
							</div>
							<figcaption class="column__item-caption">
								<span>Bold Human</span>
								<span>2014</span>
							</figcaption>
						</figure>
						<figure class="column__item">
							<div class="column__item-imgwrap" data-pos="6">
								<div class="column__item-img" style="background-image:url(img/18.jpg)"></div>
							</div>
							<figcaption class="column__item-caption">
								<span>Loyal Royal</span>
								<span>2015</span>
							</figcaption>
						</figure>
						<figure class="column__item">
							<div class="column__item-imgwrap" data-pos="9">
								<div class="column__item-img" style="background-image:url(img/19.jpg)"></div>
							</div>
							<figcaption class="column__item-caption">
								<span>Lone Cone</span>
								<span>2016</span>
							</figcaption>
						</figure>
						<figure class="column__item">
							<div class="column__item-imgwrap" data-pos="12">
								<div class="column__item-img" style="background-image:url(img/20.jpg)"></div>
							</div>
							<figcaption class="column__item-caption">
								<span>Dutch Green</span>
								<span>2017</span>
							</figcaption>
						</figure>
						<figure class="column__item">
							<div class="column__item-imgwrap" data-pos="15">
								<div class="column__item-img" style="background-image:url(img/21.jpg)"></div>
							</div>
							<figcaption class="column__item-caption">
								<span>Valley Hill</span>
								<span>2018</span>
							</figcaption>
						</figure>
						<figure class="column__item">
							<div class="column__item-imgwrap" data-pos="18">
								<div class="column__item-img" style="background-image:url(img/22.jpg)"></div>
							</div>
							<figcaption class="column__item-caption">
								<span>Kale Hale</span>
								<span>2019</span>
							</figcaption>
						</figure>
						<figure class="column__item">
							<div class="column__item-imgwrap" data-pos="21">
								<div class="column__item-img" style="background-image:url(img/23.jpg)"></div>
							</div>
							<figcaption class="column__item-caption">
								<span>Fake Cake</span>
								<span>2020</span>
							</figcaption>
						</figure>
						<figure class="column__item">
							<div class="column__item-imgwrap" data-pos="24">
								<div class="column__item-img" style="background-image:url(img/24.jpg)"></div>
							</div>
							<figcaption class="column__item-caption">
								<span>Book Belly</span>
								<span>2021</span>
							</figcaption>
						</figure>
					</div><!-- /column -->
				</div><!-- /column-wrap -->
			</div><!-- columns -->
			
			<div class="content">


				<div class="content__item">
					<h2 class="content__item-title">Lucky Wood</h2>
					<div class="content__item-text">
						<span>Faith, you're driving me away
						You do it every day
						You don't mean it
						But it hurts like hell</span>
						<span>2019</span>
					</div>
				</div>
				
				<div class="content__item">
					<h2 class="content__item-title">Cyber Blue</h2>
					<div class="content__item-text">
						<span>My brain says I'm receiving pain
						A lack of oxygen
						From my life support
						My iron lung
						</span>
						<span>2011</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Bold Human</h2>
					<div class="content__item-text">
						<span>We're too young to fall asleep
						Too cynical to speak
						We are losing it
						Can't you tell?</span>
						<span>2014</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Good Earth</h2>
					<div class="content__item-text">
						<span>We scratch our eternal itch
						A twentieth century bitch
						And we are grateful for
						Our iron lung</span>
						<span>2020</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Gnostic Will</h2>
					<div class="content__item-text">
						<span>The head shrinkers
						They want everything
						My Uncle Bill
						My Belisha beacon</span>
						<span>2012</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Loyal Royal</h2>
					<div class="content__item-text">
						<span>The head shrinkers
						They want everything
						My Uncle Bill
						My Belisha beacon</span>
						<span>2015</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Empty Words</h2>
					<div class="content__item-text">
						<span>Suck, suck your teenage thumb
						Toilet trained and dumb
						When the power runs out
						We'll just hum</span>
						<span>2021</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">French Kiss</h2>
					<div class="content__item-text">
						<span>This, this is our new song
						Just like the last one
						A total waste of time
						My iron lung</span>
						<span>2013</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Lone Cone</h2>
					<div class="content__item-text">
						<span>And if you're frightened
						You can be frightened
						You can be, it's OK</span>
						<span>2016</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Nonage Line</h2>
					<div class="content__item-text">
						<span>Lost in the mountain
						Rust in my brain
						The air is sacred here
						In spite of your claim</span>
						<span>2009</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Half Life</h2>
					<div class="content__item-text">
						<span>Up on the rooftops
						Out of reach
						Trickster is meaningless
						Trickster is weak</span>
						<span>2014</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Dutch Green</h2>
					<div class="content__item-text">
						<span>He's talking out the world
						Talking out the world</span>
						<span>2017</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Blue Hell</h2>
					<div class="content__item-text">
						<span>Hey, hey, hey
						This is only halfway
						Hey, hey, hey
						This is only halfway</span>
						<span>2010</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Love Boat</h2>
					<div class="content__item-text">
						<span>I wanted you so bad
						That I couldn't say
						All these things fall apart</span>
						<span>2015</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Valley Hill</h2>
					<div class="content__item-text">
						<span>We wanted out so bad
						We couldn't say
						These things fall apart</span>
						<span>2018</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Cold Blood</h2>
					<div class="content__item-text">
						<span>Truant kids
						A can of brick dust worms
						Who do not want to climb down from
						Their chestnut tree</span>
						<span>2011</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Golden Ray</h2>
					<div class="content__item-text">
						<span>Long white gloves
						Police tread carefully
						Escaped from the zoo
						The perfect child facsimile is</span>
						<span>2016</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Kale Hale</h2>
					<div class="content__item-text">
						<span>Please could you stop the noise? 
							I'm trying to get some rest
							From all the unborn chicken 
							voices in my head</span>
						<span>2019</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Tulip Heat</h2>
					<div class="content__item-text">
						<span>What's that?
						I may be paranoid, but not an android</span>
						<span>2012</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Blame Game</h2>
					<div class="content__item-text">
						<span>When I am king you will be first against the wall
						With your opinion which is of no consequence at all</span>
						<span>2017</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Fake Cake</h2>
					<div class="content__item-text">
						<span>Ambition makes you look pretty ugly
						Kicking and squealing, Gucci little piggy</span>
						<span>2017</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Red Wrath</h2>
					<div class="content__item-text">
						<span>You don't remember, you don't remember
						Why don't you remember my name?</span>
						<span>2013</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Lone Dust</h2>
					<div class="content__item-text">
						<span>Off with his head, man, off with his head, man
						Why don't you remember my name? I guess he does</span>
						<span>2018</span>
					</div>
				</div>
				<div class="content__item">
					<h2 class="content__item-title">Book Belly</h2>
					<div class="content__item-text">
						<span>Rain down, rain down
						Come on, rain down on me
						From a great height
						From a great height, height</span>
						<span>2021</span>
					</div>
				</div>
				<nav class="content__nav">
					<div class="content__nav-wrap">
						<div class="content__nav-item" style="background-image:url(img/25.jpg)"></div>
						<div class="content__nav-item" style="background-image:url(img/26.jpg)"></div>
						<div class="content__nav-item" style="background-image:url(img/27.jpg)"></div>
						<div class="content__nav-item" style="background-image:url(img/28.jpg)"></div>
						<div class="content__nav-item" style="background-image:url(img/29.jpg)"></div>
						<div class="content__nav-item" style="background-image:url(img/30.jpg)"></div>
						<div class="content__nav-item" style="background-image:url(img/31.jpg)"></div>
						<div class="content__nav-item" style="background-image:url(img/32.jpg)"></div>
						<div class="content__nav-item" style="background-image:url(img/33.jpg)"></div>
						<div class="content__nav-item" style="background-image:url(img/34.jpg)"></div>
						<div class="content__nav-item" style="background-image:url(img/35.jpg)"></div>
						<div class="content__nav-item" style="background-image:url(img/36.jpg)"></div>
						<div class="content__nav-item" style="background-image:url(img/37.jpg)"></div>
						<div class="content__nav-item" style="background-image:url(img/38.jpg)"></div>
	
					</div>
				</nav>
				<button class="unbutton button-back"><svg viewBox="0 0 50 9" width="100%"><path d="M0 4.5l5-3M0 4.5l5 3M50 4.5h-77"></path></svg></button>
			</div>
		<script type="module" src="js/index.js"></script>



	
		</main>
		
		
		
				    <div class="col-sm-12 text-center">
      <h1>직접 방문해보세요. 루이비통은 언제나 열려있습니다.<br/><small>(루이비통 매장 찾아보기)</small></h1>
    </div>
		
							<div id="map" style="width:800px;height:400px;"></div>
	<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=0682672bb40094175e9e09250461a3f4"></script>
	<script>
		var container = document.getElementById('map');
		var options = {
			center: new kakao.maps.LatLng(37.6314191, 127.0548249),
			level: 3
		};

		var map = new kakao.maps.Map(container, options);
	</script>
		

					
			
		

		

         
         <!---- 화면 우측(신상품) 끝 -------------------------------------------------->   

<!-------------------------------------------------------------------------------------------->   
<!-- 끝 : 다른 웹페이지 삽입할 부분                                                         -->
<!-------------------------------------------------------------------------------------------->   

<? 
   include 'main_bottom.php';
?>
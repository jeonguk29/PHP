<?
   include "../common.php";
   $no=$_REQUEST["no"];
   $name=$_REQUEST["name"];         //혹은 $name=$_POST[name];
   $menu=$_REQUEST["menu"];
   $code=$_REQUEST["code"];
   $coname=$_REQUEST["coname"];
   $price=$_REQUEST["price"];
   $opt1=$_REQUEST["opt1"];
   $opt2=$_REQUEST["opt2"];
   $content=$_REQUEST["content"];
   $status=$_REQUEST["status"];
   $icon_new=$_REQUEST["icon_new"];
   $icon_hit=$_REQUEST["icon_hit"];
   $icon_sale=$_REQUEST["icon_sale"];
   $regday1=$_REQUEST["regday1"];
   $regday2=$_REQUEST["regday2"];
   $regday3=$_REQUEST["regday3"];
   $image1=$_REQUEST["image1"];
   $image2=$_REQUEST["image2"];
   $image3=$_REQUEST["image3"];
   $discount=$_REQUEST["discount"];
   if (!$icon_new)   $icon_new=0;   else   $icon_new=1 ;
   if (!$icon_hit)   $icon_hit=0;   else   $icon_hit=1 ;
   if (!$icon_sale)   $icon_sale=0;   else   $icon_sale=1 ;
   $regday = sprintf("%04d-%02d-%02d", $regday1,$regday2,$regday3);
   
   //$name = addslashes($name);
   //$content = addslashes($content);

   $fname1="";
   if ($_FILES["image1"]["error"]==0) 
   {
      $fname1=$_FILES["image1"]["name"];    
      
      if (!move_uploaded_file($_FILES["image1"]["tmp_name"],
           "../product/" . $fname1)) exit("업로드 실패");
   }
   $fname2="";
   if ($_FILES["image2"]["error"]==0) 
   {
      $fname2=$_FILES["image2"]["name"];  
         
      if (!move_uploaded_file($_FILES["image2"]["tmp_name"],
           "../product/" . $fname2)) exit("업로드 실패");
   }
   $fname3="";
   if ($_FILES["image3"]["error"]==0) 
   {
      $fname3=$_FILES["image3"]["name"];    
      
      if (!move_uploaded_file($_FILES["image3"]["tmp_name"],
           "../product/" . $fname3)) exit("업로드 실패");
   }

   $query="insert into product (name47,menu47,code47,coname47,price47,opt1,opt2,content47,status47,icon_new47,icon_hit47,icon_sale47,
                              regday47,image1,image2,image3,discount47)
               values ('$name',$menu,'$code','$coname',$price,$opt1,$opt2,'$content',$status,$icon_new,$icon_hit,$icon_sale,
                              '$regday','$fname1','$fname2','$fname3',$discount);";
   $result=mysqli_query($db,$query);
   if(!$result) exit("에러;$query");

   echo("<script>location.href='product.php?'</script>");
?>
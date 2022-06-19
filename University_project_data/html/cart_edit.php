
<?

$no = $_REQUEST ["no"];
$num1 = $_REQUEST ["num"];
$opts1 = $_REQUEST ["opts1"];
$opts2 = $_REQUEST ["opts2"];
$cart = $_COOKIE["cart"]; // 제품정보
$n_cart = $_COOKIE["n_cart"]; // 제품게수
$kind = $_REQUEST ["kind"]; // 제품 상태
$pos = $_REQUEST ["pos"];
if (!$n_cart) $n_cart=0;   // 제품개수 0으로 초기화
switch ($kind) {
    case "insert":      // 장바구니 담기
		
    case "order":      // 바로 구매하기
        $n_cart++;
        $cart[$n_cart] = implode("^", array($no, $num1, $opts1, $opts2));
		setcookie("cart[$n_cart]", $cart[$n_cart]);
		setcookie( "n_cart", $n_cart);
         break;
    case "delete":      // 제품삭제
		setcookie("cart[$pos]","");
        break;
	case "update":     // 수량 수정
		list($no, $num, $opts1, $opts2)=explode("^", $cart[$pos]);
		$num=$num1;
		$cart[$pos] = implode("^", array($no, $num, $opts1, $opts2));
		setcookie("cart[$pos]",$cart[$pos]);
         break;
    case "deleteall":    // 장바구니 전체 비우기
         for($i=1;$i<=$n_cart;$i++)
            { if ($cart[$i]) setcookie("cart[$i]",""); }
         $n_cart = 0;
		setcookie("n_cart","");
}

if ($kind=="order")
	echo("<script>location.href = 'order.php'</script>");
else
	echo("<script>location.href = 'cart.php'</script>");
?>
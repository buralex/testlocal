<?php
	require "secure/session.inc.php";
	require "../inc/lib.inc.php";
	require "../inc/config.inc.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Поступившие заказы</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Поступившие заказы:</h1>
<?php
	
	$ordersMain = getOrders();
	print_r($ordersMain);
	if(!$ordersMain) {
		echo "no orders!";
		exit;
	}
foreach($ordersMain as $order){
	$dt = date("d-m-Y H:i", $order["date"]);
?>
<hr>
<h2>Заказ номер: <?= $order["orderid"] ?> </h2>
<p><b>Заказчик</b>: <?= $order["name"] ?> </p>
<p><b>Email</b>: <?= $order["email"] ?> </p>
<p><b>Телефон</b>: <?= $order["phone"] ?> </p>
<p><b>Адрес доставки</b>: <?= $order["address"] ?> </p>
<p><b>Дата размещения заказа</b>: <?= $dt ?> </p>

<h3>Купленные товары:</h3>
<table border="1" cellpadding="5" cellspacing="0" width="90%">
<tr>
	<th>N п/п</th>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>Количество</th>
</tr>
<?php
	$i=1;
	$sum = 0;
	$goodsInBasket = myBasket();

		
		foreach($order["goods"] as $item){
			echo"<tr>";
					echo"<td>".$i."</td>";
					echo"<td>".$item['title']."</td>";
					echo"<td>".$item['author']."</td>";
					echo"<td>".$item['pubyear']."</td>";
					echo"<td>".$item['price']."</td>";
					echo"<td>".$item['quantity']."</td>";
			
			$sum += $item['price']*$item['quantity'];
			$i++;
			
		}
?>

</table>
<p>Всего товаров в заказе на сумму: <?= $sum ?>руб.</p>
<?php
} // End of big foreach
?>
</body>
</html>

<?php
echo "<link href='style.css' rel='stylesheet' type='text/css'/>";
$apples = $_POST['apples'];
$bananas = $_POST['bananas'];
$oranges = $_POST['oranges'];
$shippingOption = $_POST['shippingOption'];
$email = $_POST['email'];
$pass = $_POST['pass'];

echo "<center><h1> Order Placed </h1>";

echo "<p>Thank you:<br>" . $email . "<br>" . $pass . "</p><br>";
echo "<table><tr><th></th><th>Quantity</th><th>Cost per item</th><th>Sub Total</th></tr>";
echo "<tr><th>Apples</th><td>" . $apples . "</td><td>$1</td><td>$" . ($apples * 1) . "</td></tr>";
echo "<tr><th>Bananas</th><td>" . $bananas . "</td><td>$3</td><td>$" . ($bananas * 3) . "</td></tr>";
echo "<tr><th>Apples</th><td>" . $oranges . "</td><td>$2</td><td>$" . ($oranges * 2) . "</td></tr>";
echo "<tr><th>Shipping</th><td colspan='2'>";
if($shippingOption == 1)
{
  echo "Free 7 day</td><td>$0</td></tr>";
  $shippingOption = 0;
}
else if($shippingOption == 2)
{
  echo "3 day</td><td>$5</td></tr>";
  $shippingOption = 5;
}
else
{
  echo "Overnight</td><td>$50</td></tr>";
  $shippingOption = 50;
}
$total = ($apples) + ($bananas * 3) + ($oranges * 2) + ($shippingOption);
echo "<tr><th colspan='3'>Total Cost</th><td>$" . $total . "</td></tr></table>";

?>

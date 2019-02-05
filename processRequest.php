<style>
	table, th, td {
		border: 1px solid black;
	}
</style>

<?php

function writeMsg() {
	echo "<h1>Order Confirmation</h1></br>";
}

writeMsg();
$first = ltrim(rtrim($_POST['first']));
$last = ltrim(rtrim($_POST['last']));
$email = ltrim(rtrim($_POST['email']));
echo "<b>Lastname:</b> " . $last . ", <b>Firstname:</b> " . $first . ", <b>Email:</b> " . $email;
echo "</br>";
echo "<b>Shipping Method:</b> " . $_POST['ship'];
echo "</br><b>Software Order: </b><br> <table><tr><th>Software</th><th>Cost</th></tr>";
$total = 0;
foreach ($_POST['softs'] as $value){
	$vals = explode(" ($",$value);
	$vals2 = explode(")", $vals[1]);
	echo "<tr>
	<td>" . $vals[0] . "</td>
	<td>$" . $vals2[0] . "</td>
</tr>";
$total = $total + (int)$vals2[0];
}
echo "<tr>
<td>Total</td>
<td>$" . $total . "</td>
</tr></table>";

echo "<b>Order Specifications:</b><br>" . $_POST['specs'];
?>

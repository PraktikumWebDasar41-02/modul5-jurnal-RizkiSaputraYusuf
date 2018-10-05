<?php
include 'base.php';
session_start()
$nim=$_SESSION['nim'];
$query= mysql_query($conn,"SELECT * FROM t_jurnal1 WHERE nim='$nim'");
if ($array=mysqli_fetch($query)) {
	$name=$array['Nama'];
}
?>
<form method="get">
	<table>
		<tr>
			<td>name</td>
			<td><?php echo $name;</td>
		</tr>
	</table>
</form>
?>

<?php
$conn = new mysqli("localhost", "root", "", "mydatabase");

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
if (isset($conn)) {
	if (isset($_GET['id'])) {
		$sql_nguoidung = "SELECT * FROM users WHERE id='" . $_GET['id'] . "' LIMIT 1";
		$querynd = mysqli_query($conn, $sql_nguoidung);
	} else {
		echo "No ID parameter found in the URL.";
		exit();
	}
} else {
	echo "Database connection failed.";
	exit();
}
?>
<h3>SỬA NGƯỜI DÙNG</h3>

<form action="modules/quanlynguoidung/xuly.php?id=<?php echo $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
	<table width="50%" style="border-collapse: collapse;">
		<?php
		while ($nguoidung = mysqli_fetch_array($querynd)) {
		?>
			<tr>
				<td>Name</td>
				<td><input type="text" size="50" name="name" value="<?php echo $nguoidung['name'] ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" size="50" name="email" value="<?php echo $nguoidung['email'] ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" size="50" name="password" value="<?php echo $nguoidung['password'] ?>"></td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;"><input type="submit" name="suanguoidung" value="Sửa"></td>
			</tr>
	</table>
</form>
<?php
		}
?>
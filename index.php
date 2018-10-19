<?php 
$conn = mysqli_connect("localhost","root","","php-api");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$box = [];
		while ($data = mysqli_fetch_assoc($result)) {
			$box[] = $data;
		}
		return $box;
	}
$user = query("SELECT * FROM users");	
?>


<html>
	<head>
		<title></title>
	</head>
	<body>
		<table border="1px" cellpadding="10" cellspacing="0">
	 		<tr>
	 			<td bgcolor="#30ced1" align="center">Id</td>
	 			<td bgcolor="#30ced1" align="center">Username</td>
	 			<td bgcolor="#30ced1" align="center">Level</td>
	 			<td bgcolor="#30ced1" align="center">Fullname</td>
	 		</tr>
	 		<?php foreach($user as $user) : ?>
				 <tr>
				 	<td><?= $user["id"] ?></td>
				 	<td><?= $user["username"] ?></td>
				 	<td><?= $user["level"] ?></td>
				 	<td><?= $user["fullname"] ?></td>
				 </tr>
				<?php endforeach; ?>
	 	</table>
 	</body>
</html>
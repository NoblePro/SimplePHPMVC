<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Selamat Datang</title>
</head>
<body>
	<h1>Ini Halaman Home</h1>
	<h2>Selamat Datang Kembali <?php foreach( $data['nama'] as $nama ): echo $nama['username']; endforeach; ?>. Anda adalah seorang <?= $data['profesi'];?>.</h2>
</body>
</html>
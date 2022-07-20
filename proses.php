<?php
	echo "<head><title>My Guest Book</head></title>";
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$no = $_POST['no'];
	$js = $_POST['js'];
	$komentar = $_POST['komentar'];

	$fp = fopen("guestbook.txt","a+");
	fputs($fp, "$nama | $alamat | $no | $js | $komentar");
	fclose($fp);

	echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>";
	echo "<a href=tampilan.html> Isi Pesanan </a><br>";
	echo "<a href=lihat.txt> Lihat Detail Pesanan </a><br>";
?>
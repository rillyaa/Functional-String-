<?php
	$text="Bagian pertama di dalam cerpen adalah abstrak yang sifatnya opsional. Tidak semua bentuk karya sastra tersebut harus disertai abstrak. Abstrak merupakan bagian dari cerpen yang memuat inti dari sebuah cerita atau ringkasan pendeknya. Abstrak ini bisanya hanya terdiri dari beberapa kalimat saja untuk membuka cerpen atau sebagai pengantar saja. Bagian ini berguna untuk memudahkan pembaca untuk sedikit lebih memahami kisah yang dituliskan dalam cerpen sebab sudah disampaikan ringkasan singkatnya";

    $Ubah_HurufKecil = strtolower($text);
    echo $Ubah_HurufKecil;

    // memisahkan kalimat dari sebuah teks 
	$kalimat=explode(".", $text);

	echo "<p>Hasilnya Ketika Menggunakan fungsi Explode</p><pre>";
	print_r($kalimat);
	echo "</pre>";
 
    // menghitung jumlah keseluruhan kata dari sebuah teks 
    $kata=explode(" ", $text);
    $totalkata = count($kata);

	foreach ($kalimat as $key => $data) {
		echo "kalimat $key. $data<br/>";

        // menghapus spasi pada awal kalimat 
        $kt = ltrim($data, " ");

        // memisahkan kata dari tiap kalimat 
        $kata=explode(" ", $kt);

        // menghitung jumlah kata dalam kalimat 
        $jmlkata = count($kata);

        // menghitung jumlah prosentase kata dalam kalimat
        $prosenkata=($jmlkata/$totalkata)*100;

	    echo "<p>Dalam Kalimat $key terdapat $jmlkata kata, Prosentasse kata $prosenkata % </br> antara lain:</p>";
        echo "<pre>";
	    print_r($kata);
	    echo "</pre>";
        echo "</br>";
        echo "</br>";
	}
?>
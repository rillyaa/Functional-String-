# Functional String - Bahasa-Bahasa Pemrograman

 Nama           : Cherillya Rahmita Nurul Nucha       
 NIM            : 21106050029

## Nomor 1
Mengubah `String` menjadi huruf kecil.
 - Dengan code sebagai berikut :
 ```R
 $Ubah_HurufKecil = strtolower($text);
    echo $Ubah_HurufKecil;
 ```
 - Menghasilkan output : 
 ![1](https://user-images.githubusercontent.com/115610128/196045036-1da3a8f7-68a1-44da-a7c4-94580578ce5f.jpg)

</br>   

## Nomor 2
Memecah text menjadi kalimat yang dimasukkan dalam `Array` menggunakan fungsi `Explode`
 - Dengan code sebagai berikut :
 ```R
 $kalimat=explode(".", $text);

	echo "<p>Hasilnya Ketika Menggunakan fungsi Explode</p><pre>";
	print_r($kalimat);
	echo "</pre>";
 ```
 - Menghasilkan output :
 ![2](https://user-images.githubusercontent.com/115610128/196045039-b06aa283-d934-4eb7-9c37-1ed548f9c359.jpg) 

</br>

## Nomor 3, 4 dan 5
3. Memecah isi kalimat pada `Nomor 2` menjadi `kata`.
4. Hitung dan tampilkan jumlah kata setiap kalimat.
5. Hitung dan tampilkan presentase jumlah kata pada tiap kalimat.
 - Dengan code sebagai berikut :
 ```R
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
 ```
 - Menghasilkan output :
 ![0a](https://user-images.githubusercontent.com/115610128/196045042-a878c17c-ee17-4fe8-b68e-bdfbdbd55682.jpg)
 ![1a](https://user-images.githubusercontent.com/115610128/196045045-40843c11-51ff-4e30-91a2-ce2b3de0f957.jpg)
 ![2a](https://user-images.githubusercontent.com/115610128/196045046-f620268a-99b2-4103-82e4-8aeb26952b55.jpg)
 ![3a](https://user-images.githubusercontent.com/115610128/196045048-e8a0cb12-d6f8-4233-81c9-91265016bf95.jpg)
 ![4a](https://user-images.githubusercontent.com/115610128/196045049-ca9a1d2a-19c6-44c7-ac4a-03bc184dd112.jpg)

 </br>

 # Thank you!
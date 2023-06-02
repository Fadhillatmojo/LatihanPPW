<!DOCTYPE html>
<html lang="en">
<head>
    <title>No. 2 - 18</title>
</head>
<body>
    <?php
    // No 2
    echo "Hello World nomer 2...";

    // Ini adalah contoh komentar untuk nomer 3
    /* ini contoh komentar multiple line
    line ini juga terkomen
    */

    // ini nomer 4 ini nmr 4 case sensitif
    $color = "red";
    echo "<br>"."My car is ". $color . "<br>";  
    echo "My house is ". $cOlor . "<br>"; // error
    echo "My boat is ". $COLOR . "<br>"; // error

    // nomer 5
    $number = 4;
    $letter = "Letter";
    $double = 10.6;

    // nomer 6
    $txt = "PPW1";
    echo "<br>saya suka belajar $txt";

    // nomer 7 pemanggilan variabel di dalam string 
    $txt = "PPW1";
    echo "<br>"."saya suka belajar". $txt;

    // nomer 8 output variabel 3 dengan operasi aritmatika
    $angka1 = 4;
    $angka2 = 5;
    $hasil = $angka1 + $angka2;
    echo "<br>$angka1 + $angka2 = $hasil";

    //nomer 9 mengetahui panjang string
    $panjang_string = strlen("Hello world");
    echo "<br>panjang 'hello world' adalah $panjang_string";

    // nomer 10 - menghitung jumlah kata dalam suatu kalimat
    $banyak_kata = str_word_count("Aku sayang kamu!");
    echo "<br> banyak kata dari 'aku sayang kamu' adalah $banyak_kata";

    // nomer 11 - mengembalikan string
    echo "<br>";
    echo strrev("hello world!");

    // nomer 12 pencarian posisi kata world dalam hello world
    echo "<br>";
    echo "world berada pada karakter nomer ".strpos("Hello world!", "world");

    // nomer 13 mengganti text proses replace suatu kata
    echo "<br>";
    echo str_replace("world", "dolly", "hello world");

    // nomer 14 - fungsi proses deklarasi fungsi dengan nama writeMsg
    function writeMsg(){
        echo "<br> hello world!";
    }

    writeMsg(); // memanggil fungsi

    // nomer 15 fungsi berargumen
    function familyName($fname){
        echo "<br> $fname Yeager adalah namaku. <br>";
    }
    // memanggil function
    familyName("Fadhil");
    familyName("Verno");
    familyName("Ghif");

    // nomer 16 - fungsi leih dari satu argumen
    function person_detail($name, $age){
        echo "<br> $name adalah namaku, $age adalah umurku. <br>";
    }
    // memanggil function
    person_detail("Fadhil", 14);
    person_detail("Verno", 14);
    person_detail("Ghif", 23);

    // nomer 17 - fungsi default argumen
    function set_height($min_height = 50){
        echo "The height is : $min_height <br>";
    }

    // memanggil funsgi
    set_height();
    set_height(30);
    set_height(350);

    // nomer 18 - fungsi yang mengembalikan nilai
    function sum($x, $y){
        $hasil = $x + $y;
        return $hasil;
    }

    // penerapan fungsi
    echo "5 + 10 = ".sum(5, 10). "<br>";
    echo "2 + 8 = ".sum(2, 8). "<br>";
    echo "17 + 11 = ".sum(17, 11). "<br>";
    ?>
</body>
</html>
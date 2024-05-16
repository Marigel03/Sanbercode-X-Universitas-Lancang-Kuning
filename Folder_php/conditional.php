<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Function</title>
</head>

<body>
  <h1>Berlatih Function PHP</h1>
  <?php

  echo "<h3> Soal No 1 Greetings </h3>";
  function greetings($name)
  {
    echo "Halo $name, Selamat Datang di Sanbercode!" . "<br/>";
  }
  greetings("Bagas");
  greetings("Wahyu");
  greetings("nama peserta");
  /* 
Soal No 1
Greetings
Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 

contoh: greetings("abduh");
Output: "Halo Abduh, Selamat Datang di Sanbercode!"
*/

  // Code function di sini


  // Hapus komentar untuk menjalankan code!
  // greetings("Bagas");
  // greetings("Wahyu");
  // greetings("nama peserta");

  echo "<br>";

  echo "<h3>Soal No 2 Reverse String</h3>";
  function reverseString($string)
  {
    $data = "";
    $lengthOfWord = strlen($string);
    for ($i = $lengthOfWord - 1; $i >= 0; $i--) {
      $data .= $string[$i];
    }

    return $data;
  }

  function reverseString2($string)
  {
    $data = reverseString($string);
    echo "<br/>" . $data;
  }

  reverseString2("nama peserta");
  reverseString2("Sanbercode");
  reverseString2("We Are Sanbers Developers");
  /* 
Soal No 2
Reverse String
Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
Function reverseString menerima satu parameter berupa string.
NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

reverseString("abdul");
Output: ludba

*/

  // Code function di sini 


  // Hapus komentar di bawah ini untuk jalankan Code
  // reverseString("nama peserta");
  // reverseString("Sanbercode");
  // reverseString("We Are Sanbers Developers")
  echo "<br>";

  echo "<h3>Soal No 3 Palindrome </h3>";
  function palindrome($string)
  {
    $reverseString = reverseString($string);

    if ($reverseString === $string) {
      echo "$reverseString => true" . "<br/>";
    } else {
      echo "$reverseString => false" . "<br/>";
    }
  }

  palindrome("civic");
  palindrome("nababan");
  palindrome("jambaban");
  palindrome("racecar");
  /* 
Soal No 3 
Palindrome
Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
NB: 
Contoh: 
palindrome("katak") => output : "true"
palindrome("jambu") => output : "false"
NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!

*/


  // Code function di sini

  // Hapus komentar di bawah ini untuk jalankan code
  // palindrome("civic") ; // true
  // palindrome("nababan") ; // true
  // palindrome("jambaban"); // false
  // palindrome("racecar"); // true


  echo "<h3>Soal No 4 Tentukan Nilai </h3>";
  function tentukanNilai($int)
  {
    if ($int >= 85 && $int <= 100) {
      return "Nilai $int Sangat Baik" . "<br/>";
    } elseif ($int >= 70 && $int < 85) {
      return "Nilai $int Baik" . "<br/>";
    } elseif ($int >= 60 && $int < 70) {
      return "Nilai $int Cukup" . "<br/>";
    } else {
      return "Nilai $int Kurang" . "<br/>";
    }
  }
  echo tentukanNilai(98);
  echo tentukanNilai(76);
  echo tentukanNilai(67);
  echo tentukanNilai(43);
  /*
Soal 4
buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter 
berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” 
Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar 
sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
*/

  // Code function di sini

  // Hapus komentar di bawah ini untuk jalankan code
  // echo tentukan_nilai(98); //Sangat Baik
  // echo tentukan_nilai(76); //Baik
  // echo tentukan_nilai(67); //Cukup
  // echo tentukan_nilai(43); //Kurang


  ?>

</body>

</html>
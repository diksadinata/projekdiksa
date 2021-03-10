<link  rel="stylesheet"type="text/css"href="style.css">
<nav>
        <a href="index.html">Home</a> |
        <a href="cv-dian.pdf">Download</a> |
        <a href="contact.html">Contact</a> |
        <a href="about.php">About me</a>|
        <a href="login.php">Login</a> |
        <a href="fabonacci.php">fabonacci</a> |
        <a href="aritmatika.php">aritmatika</a> |
        
    </nav>
    
<?php
// siapkan 2 angka awal
$angka_sebelumnya=4;
$angka_sekarang=7;
  
//tampilkan 2 angka awal
echo "$angka_sebelumnya $angka_sekarang";
 
for ($i=0; $i<10; $i++)
{
  // hitung angka yang akan ditampilkan
  $output = $angka_sekarang + $angka_sebelumnya;
  echo " $output";
  
  //siapkan angka untuk perhitungan berikutnya
  $angka_sebelumnya = $angka_sekarang;
  $angka_sekarang = $output;
}
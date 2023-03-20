<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dasar</title>
</head>

<body>

  <!-- Membuat header -->
  <h3>FORM INPUT</h3>
  <form method="post">
    <label>Nama : </label><br>
    <input type="text" name="nama"><br><br>
    <label>Tanggal Lahir : </label><br>
    <input type="date" name="tgl"><br><br>
    <label>Pekerjaan : </label><br>

    <!-- Membuat pilihan pekerjaan dari banyaknya yang dibuat -->
    <select name='pekerjaan'>
      <option value="">~ Pilih Pekerjaan Anda ~</option>
      <option value="UI/UX Designer">1. UI/UX Designer</option>
      <option value="FrontEnd Developer">2. FrontEnd Developer</option>
      <option value="BackEnd Developer">3. BackEnd Developer</option>
      <option value="Ahli Jaringan">4. Ahli Jaringan</option>
    </select><br><br>
    <button type="submit">Kirim Sekarang</button>
  </form>
  <h3>HASILNYA ADALAH</h3>

  <?php
  // Memanggil sebuah Nama
  echo 'Nama Anda : ' . $_POST['nama'];
  echo "<br>";

  // Merubah Tanggal Lahir menjadi Umur
  $tgl = $_POST['tgl'];

  $lahir = new DateTime($tgl);
  $hari_ini = new DateTime();

  // Memanggil umur yang sudah dibuat
  $diff = $hari_ini->diff($lahir);
  echo "<br> Umur Anda : " . $diff->y . " Tahun";
  echo "<br>";

  // Memanggil fungsi pekerjaan
  echo "<br> Pekerjaan Anda : " . $_POST['pekerjaan'];

  // Kondisi if menentukan kondisi dari setiap gaji keahlian/pekerjaan
  $pekerjaan = $_POST['pekerjaan'];
  echo "<br>";

  if ($pekerjaan == "UI/UX Designer") {
    echo '<br> Gaji Anda : Rp.10.000.000';
  } elseif ($pekerjaan == "FrontEnd Developer") {
    echo '<br> Gaji Anda : Rp.20.000.000';
  } elseif ($pekerjaan == "BackEnd Developer") {
    echo '<br> Gaji Anda : Rp.22.000.000';
  } elseif ($pekerjaan == "Ahli Jaringan") {
    echo '<br> Gaji Anda : Rp.15.000.000';
  }
  ?>
</body>

</html>
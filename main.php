<?php
require "function.php";
//cek apakah sdh ditekah ato belum
if (isset($_POST["submit"])) {
  if (tambah($_POST) > 0) {
    echo "<script> 
           alert('data berhasil ditambahkan!');
           document.location.href = 'main.php';
         </script>";
  } else {
    echo "<script> 
    alert('data gagal ditambahkan!');    
  </script>";
  }
}

$data = query("SELECT * FROM konten");


?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css" />
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>

  <div id="myDIV" class="header">
    <h2 style="margin:5px">List Pembelajaran</h2>

    <form action="" method="post">
      <input type="text" id="myInput" placeholder="Silahkan isi" name="kontent">
      <button type="submit" name="submit" class="btn btn-primary btn-lg">Tambah</button>
      <!-- <span onclick="newElement()" class="addBtn">Tambah</span> -->
    </form>

  </div>

  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Konten</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($data as $dt) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><?= $dt["list"]; ?></td>                 
          <td>            
          <a href="#.php?id=<?= $dt["id"]; ?>" onclick="return confirm('yakin?');"><button type="button" class="btn btn-primary">Edit</button></a>
          <a href="hapus.php?id=<?= $dt["id"]; ?>" onclick="return confirm('Yaking ingin menghapus data ini?');"><button type="button" class="btn btn-danger">Delete</button></a>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>







  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>
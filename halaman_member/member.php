<?php include("../config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="..//css/style_member.css">

</head>
<body>

    <header>
        <div class="top-header" >
            <h2 id="judul">DATA PENGERJA RAYON 1D</h2>
        </div>
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link" href="..//index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="..//halaman_member/member.php">Member</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pengerja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pelayanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Unit</a>
            </li>
        </ul>
    </header>
    
    <content>
        <div class="content">
            <div class="judul">
                <h4>DATA MEMBER GEREJA</h4>
            </div>

              <a href="form-tambah-member.php" class="btn btn-outline-info">Tambah Member</a>


            <!-- TABEL -->
            <table class="table" id="table_member">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">ID Member</th>
                  <th scope="col">Nama Member</th>
                  <th scope="col">Tanggal Lahir</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Status Nikah</th>
                  <th scope="col">No Wa</th>
                  <th scope="col">Email</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">

                <!-- PHP -->
                <?php 
                $sql = "SELECT * FROM data_member";
                $query = mysqli_query($db, $sql);
                
                $no=1;
                while($member = mysqli_fetch_array($query)){
                
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$member['id_member']."</td>";
                echo "<td>".$member['nama']."</td>";
                echo "<td>".$member['tanggal_lahir']."</td>";
                echo "<td>".$member['jenis_kelamin']."</td>";
                echo "<td>".$member['status_nikah']."</td>";
                echo "<td>".$member['no_wa']."</td>";
                echo "<td>".$member['email']."</td>";
                echo "<td>".$member['alamat']."</td>";
                echo "<td>
                      <button type='button' class='btn btn-aksi btn-outline-info'>Ubah</button>
                      <button type='button' class='btn btn-aksi btn-outline-danger'>Hapus</button>
                      </td>";
                echo "</tr>";
              }

              
              ?>

              </tbody>
            </table>

            <p>Total Member : <?php echo mysqli_num_rows($query) ?></p>

        </div>

        
    </content>

    <footer></footer>

    <!-- MODAL -->

    <!-- modal tambah member -->
    <!-- Vertically centered modal -->
    <div class="modal-dialog modal-dialog-centered" id="myModal">
      ...
    </div>

    
    
</body>
</html>
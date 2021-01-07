<html>
    <head>
        <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="dist/css/style.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

        <style type="text/css">
            .myTableWrapper {
            max-width: 600px;
            margin: 0 auto;
            }
            #myTable th, td {
            white-space: nowrap;
            }
            table.dataTable thead .sorting:after,
            table.dataTable thead .sorting:before,
            table.dataTable thead .sorting_asc:after,
            table.dataTable thead .sorting_asc:before,
            table.dataTable thead .sorting_asc_disabled:after,
            table.dataTable thead .sorting_asc_disabled:before,
            table.dataTable thead .sorting_desc:after,
            table.dataTable thead .sorting_desc:before,
            table.dataTable thead .sorting_desc_disabled:after,
            table.dataTable thead .sorting_desc_disabled:before {
            bottom: .5em;
            }
        </style>
    </head>
    <body>
         <?php
          require_once 'koneksi.php';                        
         ?>
      
        <h5>DATA LAYANAN PAKET DATA</h5>
        <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="">
            <thead>
              <tr>
                <th class="th-sm">No. Paket Data</th>
                <th class="th-sm">Nama Paket</th>
                <th class="th-sm">Kuota</th>
                <th class="th-sm">Harga</th>
                <th class="th-sm">Masa Aktif</th>
              </tr>
            </thead>            
            <tbody>
              <?php
              $sql = "SELECT * FROM layanan_paket";
              $berkas = mysqli_query($conn,$sql);
              $no = 1;
              
          while($row = mysqli_fetch_array($berkas)): ?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?=$row['jenis_paket'];?></td>
                  <td><?=$row['kuota'];?></td>
                  <td><?=$row['harga'];?></td>
                  <td><?=$row['masa_aktif'];?></td>
                
                <!-- <form action="admin.php" method="post">
                  <?php
                    
                  
                   ?>
                      <td>
                        <select name="<?= $vnameselect;?>">
                            <option value="" selected>...</option>
                            <option value="Diterima Tanpa Perbaikan">Diterima Tanpa Perbaikan</option>
                            <option value="Diterima dengan Perbaikan">Diterima dengan Perbaikan</option>
                            <option value="Ditolak">Ditolak</option>
                            <option value="Diseminarkan/FULL BOARD">Diseminarkan/FULL BOARD</option>
                            <option value="Berkas Kurang Lengkap">Berkas Kurang Lengkap</option>
                        </select>
                        <input type="submit" value="Ganti" name="<?= $vnamebutton?>">
                      </td>
                  </form> -->
                  <!-- <?php
                    if(isset($_POST["$vnamebutton"]))
                    {
                        $update=$_POST["$vnameselect"];
                        if (empty($update)) {
                                echo "<script>
                                        alert('Anda Belum Memilih Status');
                                        document.location.href = 'admin.php';
                                      </script>";
                        } else {
                            $query = "UPDATE `ekepk_berkas` SET `statusAdmin` = '$update' WHERE `ekepk_berkas`.`id_berkas` = $vidberkas";
                            mysqli_query($conn,$query);
                            echo "<script>
                                    alert('Status Berkas Diubah');
                                    document.location.href = 'admin.php';
                                  </script>";
                        }
                    }
                  ?> -->
                </tr>
                <?php $no++; ?>
          <?php endwhile; ?>
            </tbody>
          </table>
          <button><a href="pelanggan.php">Lihat Data Pelanggan</a></button>
          <button><a href="transaksi.php">Lihat Data Transaksi</a></button>
          <button><a href="logout.php">logout</a></button> 
      <script type="text/javascript">
          $(document).ready( function () {
              $('#myTable').DataTable({
                "scrollX": true
              });
              $('.dataTables_length').addClass('bs-select');
          } );
        </script>  
    </body>
</html>
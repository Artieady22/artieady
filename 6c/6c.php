<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome To Arkademy Coffee</title>
  </head>
  <body>
    <!--navbar-->
    <nav class="navbar fixed-top navbar-expand navbar-light bg-white border-bottom">
      <div class="container">
        <div>
          <img src="arkademy.png" width="10%">
          <span>
        <a class="navbar-brand">ARKADEMY COFFEE SHOP</a>
        </span>
        </div>
        <button type="submit" class="btn btn-danger my-2 my-sm-0 mr-50" type="submit">ADD</button>
      </div>
    </nav><br><br><br><br>

    <!--Tabel Content-->
    <section>
    <div class="container-md mt-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card border-bottom">
          <table class="table table-hover table-white">
            <thead class="thead-dark">
              <tr>
                <th>No</th>
                <th>Cashier</th>
                <th>Produk</th>
                <th>Category</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include'koneksi.php';
              $no=1;
             $query = "SELECT * FROM tb_penjualan
                        INNER JOIN tb_cashier ON tb_penjualan.id_cashier = tb_cashier.id_cashier
                        INNER JOIN tb_produk ON tb_penjualan.id_produk = tb_produk.id_produk
                        INNER JOIN tb_category ON tb_penjualan.id_category = tb_category.id_category
                        INNER JOIN tb_produk ON tb_penjualan.id_produk = tb_produk.id_produk";
              $penjualan = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
              while($data = mysqli_fetch_array($enjualan)){
              ?>
              <tr>
                <td><?=$no++?>.</td>
                <td><?$data['nama_cashier']?></td>
                <td><?$data['nama_produk']?></td>
                <td><?$data['category']?></td>
                <td><?$data['price']?></td>
                <td><button type="button" class="btn btn-link">Edit</button> |
                    <button type="button" class="btn btn-link">Delete</button></td>
              </tr>
              <?php
            }
            ?>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
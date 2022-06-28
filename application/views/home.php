<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/isi.css">
<body>
    <div class="container">
        <header class="row" style="width: 100%; background-color: wheat; margin: auto;"> 
            <div class="col-md-9"> <marquee>Selamat Datang dan Selamat Berbelanja <?= $this->session->userdata('nama'); ?></marquee> </div>
            <div class="col-md-3" style="background-color: wheat; text-align: center; " >
				<?php if ($this->session->userdata('nama')) { ?>
                	<a class="l1" href="<?= base_url(); ?>home/profile">Profile</a>
                	<a class="l1" href="<?= base_url(); ?>auth/logout">Logout</a>
				<?php } else { ?>
					<a href="<?= base_url(); ?>auth/login">Login</a>
				<?php } ?>
            </div>    
        </header>

        <div style="display: flex; justify-content: space-between; margin-top: 10px;">
            <div class="slideshow">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="https://via.placeholder.com/600x225" class="d-block w-100" alt="...">
                    </div>
                    <div class="item">
                        <img src="https://via.placeholder.com/600x225" class="d-block w-100" alt="...">
                    </div>
                    <div class="item">
                        <img src="https://via.placeholder.com/600x225" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
    
            <div class="logo">
				<?= $this->session->userdata('alert'); ?>

                <p>a</p>
            </div>
        </div>

        <div class="flex-container">
            <div>Listrik Prabayar <br>
                <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#bt1">Pesan</button>
                </div>

            <div>Listrik Token <br>
                <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#bt2">Pesan</button>
            </div>
            <div>Transfer <br>
                <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#bt3">Pesan</button>
            </div>  
            <div>Game <br>
                <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#bt4">Pesan</button>
            </div>
            <div>BPJS <br>
                <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#bt5">Pesan</button>
            </div>
            <div>Ewallet <br>
                <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#bt6">Pesan</button>
            </div>  
            <div>Kuota <br>
                <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#bt7">Pesan</button>
            </div>
            <div>Pulsa <br>
                <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#bt8">Pesan</button>
            </div>
          </div>

          <br>
          <br>

          <footer>Copyright © Agen BRILink Dede Udin 2022 · All Rights Reserved</footer>

    </div>

<!-- MODAL BOOTSRAP / BUTTON -->

<!-- BT1 -->
  <div class="modal fade" id="bt1">
    <div class="modal-dialog">
      <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Listrik Prabayar</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form>
            <label for="fname">Nomor Listrik :</label><br>
            <input type="number" name="nomor" id="nomor"  placeholder="nomor listrik" required><br>
            <label for="lname">Nama No. Listrik:</label><br>
            <input type="text" name="nama" id="nama"  placeholder="atas nama" required>
            <input type="hidden" id="pemesan" value="<?= $this->session->userdata('nama'); ?>">
        </form><br>
        <span>*Max Pembayaran 2 hari setelah pemesanan !</span>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn2 btn-danger" data-bs-dismiss="modal" id="btnSubmit">Pesan</button>
      </div>
      </div>
    </div>
  </div>

  <!-- BT2 -->
  <div class="modal fade" id="bt2">
    <div class="modal-dialog">
      <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Listrik Token</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form>
            <label for="fname">Nomor Listrik :</label><br>
            <input type="number" name="nomor" id="nomorsatu"  placeholder="nomor listrik" required><br>
            <label for="lname">Nominal :</label><br>
            <input type="number" name="nominal" id="nominalsatu"  placeholder="nominal" required>
        </form><br>
        <span>Nominal tersedia : 20.000 , 50.000 , 100.000, 200.000 </span> <br>
        <span>*Max Pembayaran 2 hari setelah pemesanan !</span>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn2 btn-danger" data-bs-dismiss="modal" id="btnSubmit1">Pesan</button>
      </div>
  </div>
    </div>
  </div>

<!-- BT3 -->
    <div class="modal fade" id="bt3">
    <div class="modal-dialog">
      <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Transfer</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form>
            <label for="fname">Bank Tujuan :</label><br>
            <input type="text" name="nama" id="namadua"  placeholder="nama bank" required><br>
            <label for="lname">No. Bank Tujuan :</label><br>
            <input type="number" name="nomor" id="nomordua"  placeholder="nomor bank" required><br>
            <label for="lname">Nominal Tranfer :</label><br>
            <input type="number" name="nominal" id="nominaldua"  placeholder="nominal" required>
        </form><br>
        <span>Admin : Sesama BRI (7rb) , Antar Bank (15rb)</span> <br>
        <span>*Max Pembayaran 2 hari setelah pemesanan !</span>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn2 btn-danger" data-bs-dismiss="modal" id="btnSubmit2">Pesan</button>
      </div>
  </div>
    </div>
  </div>

<!-- BT4 -->
    <div class="modal fade" id="bt4">
    <div class="modal-dialog">
      <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Game</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form>
            <label for="fname">Nama Game :</label><br>
            <input type="text" name="nama" id="namatiga"  placeholder="nama game" required><br>
            <label for="fname">Nickname Game :</label><br>
            <input type="text" name="nama" id="namatigaa"  placeholder="nickname" required><br>
            <label for="lname">Id Game :</label><br>
            <input type="number" name="id" id="nomortiga"  placeholder="id game" required><br>
            <label for="lname">Nominal :</label><br>
            <input type="number" name="nominal" id="nominaltiga"  placeholder="nominal" required>
        </form><br>
        <span>*Max Pembayaran 2 hari setelah pemesanan !</span>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn2 btn-danger" data-bs-dismiss="modal" id="btnSubmit3">Pesan</button>
      </div>
  </div>
    </div>
  </div>

<!-- BT5 -->
    <div class="modal fade" id="bt5">
    <div class="modal-dialog">
      <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">BPJS</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form>
            <label for="fname">Nama BPJS :</label><br>
            <input type="text" name="nama" id="namaempat"  placeholder="nama bpjs" required><br>
            <label for="lname">Nomor BPJS :</label><br>
            <input type="number" name="nomor" id="nomorempat"  placeholder="nomor bpjs" required>
        </form><br>
        <span>*Max Pembayaran 2 hari setelah pemesanan !</span>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn2 btn-danger" data-bs-dismiss="modal" id="btnSubmit4">Pesan</button>
      </div>
  </div>
    </div>
  </div>

<!-- BT6 -->
    <div class="modal fade" id="bt6">
    <div class="modal-dialog">
      <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">E-Wallet</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form>
            <label for="fname">Nama Aplikasi :</label><br>
            <input type="text" name="nama" id="namalima"  placeholder="nama aplikasi" required><br>
            <label for="lname">Nominal :</label><br>
            <input type="number" name="nominal" id="nominallima"  placeholder="nominal" required>
        </form><br>
        <span>Aplikasi : Dana, ShopeePay, Gopay, Ovo</span> <br>
        <span>Nominal : 10k, 20k, 30k, 40k, 50k, 60k, 70k, 80k, 90k, 100k </span> <br>
        <span>*Max Pembayaran 2 hari setelah pemesanan !</span>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn2 btn-danger" data-bs-dismiss="modal" id="btnSubmit5">Pesan</button>
      </div>
  </div>
    </div>
  </div>

<!-- BT7 -->
    <div class="modal fade" id="bt7">
    <div class="modal-dialog">
      <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Kuota</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form>
            <label for="fname">Provider Kartu :</label><br>
            <input type="text" name="nama" id="namaenam"  placeholder="provider kartu" required><br>
            <label for="lname">No. Tujuan :</label><br>
            <input type="number" name="nomor" id="nomorenam"  placeholder="no tujuan" required><br>
            <label for="lname">Nominal Kuota :</label><br>
            <input type="number" name="nominal" id="nominalenam"  placeholder="cth : 1gb - 30hari" required>
        </form><br>
        <span>Contoh Nominal Kuota : 1GB - 30hari</span>
        <span>*Max Pembayaran 2 hari setelah pemesanan !</span>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn2 btn-danger" data-bs-dismiss="modal" id="btnSubmit6">Pesan</button>
      </div>
  </div>
    </div>
  </div>

<!-- BT8 -->
    <div class="modal fade" id="bt8">
    <div class="modal-dialog">
      <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Pulsa</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form>
            <label for="fname">Provider Kartu :</label><br>
            <input type="text" name="nama" id="namatujuh"  placeholder="provider kartu" required><br>
            <label for="lname">No. Tujuan :</label><br>
            <input type="number" name="nomor" id="nomortujuh"  placeholder="nomor tujuan" required><br>
            <label for="lname">Nominal :</label><br>
            <input type="number" name="nominal" id="nominaltujuh"  placeholder="nominal" required>
        </form><br>
        <span>Nominal Ready Semua</span><br>
        <span>*Max Pembayaran 2 hari setelah pemesanan !</span>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn2 btn-danger" data-bs-dismiss="modal" id="btnSubmit7">Pesan</button>
      </div>
  </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script src="<?= base_url(); ?>assets/js/pesan.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                dots: false,
                nav: true,
                items: 1
            });
        });
    </script>
</body>
</html>
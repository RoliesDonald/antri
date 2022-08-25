<?php
$_SESSION['huruf'] = 'A';
$_SESSION['halaman'] = 'petugas2.php';
$_SESSION['loket'] = '1';
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Petugas 2</title>
  <link rel="stylesheet" href="css/main.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
  <?php
  $host = "localhost";
  $user = "root";
  $password = "root";
  $db = "antrian";

  $konek = mysqli_connect($host, $user, $password, $db);
  if (!$konek) {
    die("tidak konek ke database. " . mysqli_connect_error());
  }

  $tampilkan = mysqli_query($konek, "SELECT * FROM tableantrian WHERE panggil='' order by id asc");
  $data = mysqli_fetch_array($tampilkan);

  $nomor = $data['nomor'];
  ?>


  <section class="hero is-fullheight bg-img">
    <!-- Hero head: will stick at the top -->
    <div class="hero-head">
      <div class="columns mt-3">
        <div class="column">
          <div class="box card has-text-centered">
            <h1 class="title has-text-weight-bold is-family-sans-serif has-text-grey-darker">Customer Service 1</h1>
          </div>
        </div>
        <div class="column">
          <div class="box card has-text-centered">
            <h1 class="title has-text-weight-bold is-family-sans-serif has-text-grey-darker">POLRES MESUJI</h1>
          </div>
        </div>
        <div class="column">
          <div class="box card has-text-centered">
            <p class="title has-text-weight-bold is-family-sans-serif has-text-grey-darker">22 Agustus 2022</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Hero content: will be in the middle -->
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="columns">
          <div class="column"></div>
          <div class="column is-half">
            <div class="card has-text-centered pt-3">
              <span>
                <p class="is-size-2 mt-5 has-text-weight-bold is-family-sans-serif has-text-grey-darker">Nomor Antrian</p>
              </span>
              <span class="has-text-weight-bold is-family-sans-serif has-text-grey-darker" style="font-size:70px;">A23</span>
              <a class="button is-danger is-medium has-text-weight-bold is-fullwidth mb-5" target="_blank" href="#" onclick="panggil()" style="font-size:5vh" formmethod="post">Panggil
              </a>
            </div>
          </div>
          <div class="column"></div>
        </div>
      </div>
    </div>
    </div>

    <!-- Hero footer: will stick at the bottom -->
    <div class="hero-foot mb-0">
      <div class="column has-text-centered">
        <small>
          <span class="has-text-white">Copyright @2022 by: </span>
        </small>
        <a class="has-text-danger href=" https://www.linkedin.com/in/rolies-donald-665a632a/">Rolies Donald</a>
      </div>
    </div>
  </section>
</body>

<script>
  $(document).ready(function() {
    $('.bg-img').each(function() {
      var $img = $(this).find('img .bg-img').first();
      if ($img) {
        $(this).css('bg-img', 'url(' + $img.attr('src') + ')');

      }
    });
  })
</script>

</html>
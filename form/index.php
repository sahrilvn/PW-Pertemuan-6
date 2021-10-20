<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
    crossorigin="anonymous"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form</title>
</head>

<body id="home" class="scrollspy">
  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="teal">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">JUAL BELI IKAN</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="#home">Home</a>
            </li>
            <li>
              <a href="#search">Search</a>
            </li>
            <li>
              <a href="#gallery">Gallery</a>
            </li>
            <li>
              <a href="#contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <ul class="sidenav" id="mobile-nav">
    <li>
      <a href="#home">Home</a>
    </li>
    <li>
      <a href="#search">Search</a>
    </li>
    <li>
      <a href="#gallery">Gallery</a>
    </li>
    <li>
      <a href="#contact">Contact</a>
    </li>
  </ul>


  <!-- Section: Contact -->
  <section id="contact" class="section section-contact scrollspy">
    <div class="container">
      <div class="row">
      <div class="col s12 m6">
    <form action="post_view.php" method="post">
          <div class="card-panel grey lighten-3">
            <h5>DATA PELANGGAN</h5>
            <div class="input-field">
              <input type="text" placeholder="Nama Pembeli" name="nama">
            </div>
            <div class="input-field">
              <input type="number" placeholder="No Hp" name="nohp">
            </div>
            <div class="input-field">
              <input type="text" placeholder="Jenis Pembayaran" name="jenis_pembayaran">
            </div>
            <div class="input-field">
                <input type="text" placeholder="Alamat" name="alamat">
            </div>
          </div>
        </div>
        <div class="col s12 m6">
          <div class="card-panel grey lighten-3">
            <h5>DATA IKAN</h5>
            <div class="input-field">
              <input type="text" placeholder="Jenis Ikan" name="jenis_ikan">
            </div>
            <div class="input-field">
              <input type="Number" placeholder="Jumlah" name="jumlah">
            </div>
            <div class="input-field">
              <input type="number" placeholder="Total Harga" name="total_harga">
            </div>
            <div class="input-field">
            <input type="date" placeholder="Tanggal Pengiriman" name="tanggal">
            </div>
            <input id="btn" type="submit" value="Submit" class="btn" name="btn">
          </div>
          </form>
        </div>
        <div>
        </div>
      </div>
    </div>
  </section>


  <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

  <script>
    // Sidenav
    const sideNav = document.querySelector('.sidenav');
    M.Sidenav.init(sideNav, {});

    // Slider
    const slider = document.querySelector('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 500,
      interval: 6000
    });

    // Autocomplete
    const ac = document.querySelector('.autocomplete');
    M.Autocomplete.init(ac, {
      data: {
        "Aruba": null,
        "Cancun Mexico": null,
        "Hawaii": null,
        "Florida": null,
        "California": null,
        "Jamacia": null,
        "Europe": null,
      }
    });

    // Material Boxed
    const mb = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(mb, {});

    // ScrollSpy
    const ss = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(ss, {});

  </script>
</body>

</html>
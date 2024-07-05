<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Responsive Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav>
      <div class="container">
        <ul>
          <li class="logo">Hallo Doc</li>
          <li><a href="index.php">Home</a></li>
          <li><a class="active" href="jadwal.php">Jadwal Konsultasi</a></li>
          <li><a href="daftar.php">Daftar Konsultasi</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </nav>
    <section class="schedule">
      <div class="container">
        <div class="title">Jadwal Konsultasi</div>
      </div>
    </section>
    <section class="card-schedule">
   <?php
    $open = fopen("data.txt", "r");
    while($fill = fgets($open)) {
        $split = explode("|", $fill);

        echo '<div class="card">
            <div class="top">
                <div>
                    <img src="http://localhost/responsi-pweb/images/user.png" alt="" />
                </div>
                <div class="data">
                    <div class="name">' . $split[0] . '</div>
                    <div class="email">' . $split[1] . '</div>
                    <div class="no_telp">' . $split[2] . '</div>
                </div>
            </div>
            <hr />
            <div class="bottom">
                <div class="tgl">' . $split[3] . '</div>
                <div class="jam">' . $split[4] . '</div>
            </div>
        </div>';
    }
    fclose($open);
?>

 
    </section>
  </body>
</html>

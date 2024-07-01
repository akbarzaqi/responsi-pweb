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
          <li><a href="jadwal.php">Jadwal Konsultasi</a></li>
          <li><a class="active" href="daftar.php">Daftar Konsultasi</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </nav>
    <section class="schedule">
      <div class="container">
        <div class="title">Daftar Konsultasi</div>
      </div>
    </section>
    <form action="proses.php" name="form1" method="post">
      <section class="daftar">
          <div class="container" align="center">
              <table width="60%">
                  <tr>
                      <td colspan="2">
                          <label for="name">Nama</label>
                          <input type="text" name="name" id="name" required>
                      </td>
                  </tr>
                  <tr>
                      <td class="td">
                           <label for="email">Email</label>
                          <input type="email" name="email" id="email" required>
                      </td>
                        <td>
                           <label for="no_tlp">Nomor Telepon</label>
                          <input type="text" name="no_tlp" id="no_tlp" required>
                        </td> 
                  </tr>
                  <tr>
                      <td class="td">
                           <label for="tgl">Tanggal</label>
                          <input type="date" name="tgl" id="tgl" required>
                      </td>
                        <td>
                           <label for="jam">Jam</label>
                           <input type="text" name="jam" id="jam" required>
                        </td>
                  </tr>
                  <tr>
                      <td colspan="2"><input type="submit" value="Daftar" class="submit"></td>
                  </tr>
              </table>
          </div>
      </section>
    </form>
  </body>
</html>

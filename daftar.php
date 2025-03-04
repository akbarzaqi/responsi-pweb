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
                           <label for="jam" style="margin-top: -13px;">Jam</label>
                           <!-- <input type="text" name="jam" id="jam" required> -->
                            <select name="jam" id="jam" style="width: 100%; padding-top: 5px; padding-bottom: 5px">
                              <option value="08.00 - 10.00">08.00 - 10.00</option>
                              <option value="10.00 - 12.00">10.00 - 12.00</option>
                              <option value="12.00 - 14.00">12.00 - 14.00</option>
                              <option value="14.00 - 16.00">14.00 - 16.00</option>
                            </select>
                        </td>
                  </tr>
                  <tr>
                      <td colspan="2"><input type="submit" value="Daftar" class="submit" onclick="check();"></td>
                  </tr>
              </table>
          </div>
      </section>
    </form>
  </body>
  <script>
    const check = () => {
      var name = (document.form1.name.value);
      var email = (document.form1.email.value);
      var no_tlp = (document.form1.no_tlp.value);
      var tgl = (document.form1.tgl.value);
      var jam = (document.form1.jam.value);

      if(name == "" || email == "" || no_tlp == "" || tgl == "" || jam == "")
        alert("Data tidak boleh kosong");
      else 
        alert("Data berhasil ditambahkan")

    }
  </script>
</html>

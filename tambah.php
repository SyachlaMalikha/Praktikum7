<!DOCTYPE html>
<html>
    <head>
    <title>Sistem informasi kepegawaian</title>
    </head>
    <body>
        <header>
            <h1>Sistem Informasi Kepegawaian Sederhana</h1>
        </header>
        <form method="post" action="jalankantambah.php">
        <fieldset>
        <table>
        <tr>
        <td><label for="nip">Kode Pegawai </label></td>
        <td><input type="text" name = "nip" placeholder="ID pegawai"></td>
        </tr>
        <tr>
        <td><label for="nama">Nama </label></td>
        <td><input type="text" name = "nama" placeholder = "Nama Lengkap"></td>
        </tr>
        <td><label for="kodejbtn">Kode jabatan</label></td>

        <td><select name="kodejbtn" >
        <option>2001</option>
        <option>2002</option>
        <option>2003</option>
        <option>2004</option>
        <option>2005</option>
        <option>2006</option>
        </select></td>
        </tr>
        <tr>
        <td><label for="status">Status </label></td>
        <td><input type="text" name = "status" placeholder = "Status"></td>
        </tr>
        <tr>
        <td><label for="kodedpt">Kode
        Departemen </label></td>
        <td><select name="kodedpt" >
        <option>101</option>
        <option>102</option>
        <option>103</option>
        <option>104</option>
        <option>105</option>
        <option>106</option>
        <option>107</option>
        </select></td>
        </tr>
        <tr>
        
        </table>
        <input type="submit" value = "Daftar" name =
        "daftar">
        </fieldset>
    </form>
    </body>
</html>
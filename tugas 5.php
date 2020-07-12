<!DOCTYPE html>
<html>
<head>
    <title>form</title>
    <center>
    <h2>FORM BIODATA</h2>  
    </center>
</head>
<body>
    <table border="1"  align="center">
    <tr>
    <td>
    <form method="POST" action="hello.php" >
    Nama       :<input type="text" name="nama" maxlength="30" placeholder="masukan Nama"><br>
    <br><br>
    Alamat     :<input type="text" name="alamat" placeholder="masukan Alamat"><br>
    <br><br>
    No Telp / HP       :<input type="text" name="no" placeholder="masukan No Telp / HP"><br>
    <br><br>
    Jenis kelamin   :<input type="radio" name="jenis_kelamin"> laki-laki
    <input type="radio" name="jenis_kelamin"> prempuan <br>
    <br><br>
    Agama <select name="agama">
        <option value="Islam">islam</option>
        <option value="Kristen">kristen</option>
        <option value="Hindu">hindu</option>
        <option value="Budha">budha</option>
    </select><br>
    <br><br>
    prestasi yang pernah diraih : <textarea name="prestasi"placeholder="<<text area>>"></textarea><br>
    <br><br>
    <center>
    <input type="submit" name="simpan" value="simpan">
    <input type="reset" name="batal" value="batal">
    </center>
    <br><br>
     </form></td></tr>
    </table>
</body>
</html>

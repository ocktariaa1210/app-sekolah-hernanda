<?php
    require_once("config.php");
    if(isset($_POST['simpan'])){
        extract($_POST);
        $insert = mysqli_query($conn,"insert into tbsiswa values(null,'$nis','$nisn','$nama','$alamat','$hp','$agama','$jk')");
        if($insert){
            ?>
                <script>
                    alert('simpan berhasil');
                    location.href='?hal=tampil';
                </script>
            <?php        
        }
    }
?>
<html>
    <head>
        <title>Tambah Data</title>
    </head>
    <body>
        <a href="?hal=tampil">Lihat Data</a>
        <br>
        <br>
        <form action="?hal=tambah" method="post">
            <table>
                <tr>  
                    <td>NIS</td>
                    <td><input type="text" name="nis" placeholder="Nomor Induk Siswa" maxlength="20"></td>
                </tr>
                <tr>  
                    <td>NISN</td>
                    <td><input type="text" name="nisn" placeholder="Nomor Induk Siswa Nasional" maxlength="10"></td>
                </tr>
                <tr>  
                    <td>Nama Siswa</td>
                    <td><input type="text" name="nama" placeholder="Nama Siswa" maxlength="50"></td>
                </tr>
                <tr>  
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" placeholder="Alamat"></td>
                </tr>
                <tr>  
                    <td>HP</td>
                    <td><input type="text" name="hp" placeholder="Nomor HP" maxlength="15"></td>
                </tr>
                <tr>  
                    <td>Agama</td>
                    <td>
                        <select name="agama">
                            <option value="">==pilih agama==</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </td>
                <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jk" value="L">Laki-laki
                    <input type="radio" name="jk" value="P">Perempuan  
                </td>
                <tr>
                    <td><button type="sumbit" name="simpan" value="simpan">Simpan</button></td>
                    <td><button type="reset" name="reset"></button></td>
                </tr>
            </tr>
            </tr>
            </table>
        </form>        
    </body>
</html>
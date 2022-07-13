<!DOCTYPE html>
<html lang="en">
<head>
    <title>hasil</title>
</head>
<body>
   <table border="1">
       <tr>
           <td>NIM</td>
           <td><?php echo $_POST['nim']; ?></td>
        </tr>
       <tr>
           <td>Nama</td>
           <td><?php echo $_POST['nama']; ?></td>
        </tr>
       <tr>
           <td>tanggal lahir</td>
           <td><?php echo $_POST['tgllahir']; ?></td>
        </tr>
       <tr>
           <td>alamat</td>
           <td><?php echo $_POST['alamat']; ?></td>
        </tr>
       <tr>
           <td>hobi</td>
           <td><?php echo $_POST['hobi']; ?></td>
        </tr>
       <tr>
           <td>status</td>
           <td><?php echo $_POST['sts']; ?></td>
        </tr>
       
   </table> 
</body>
</html>
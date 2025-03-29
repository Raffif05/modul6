<html>
<head>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Galeri Hewan</h1>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Cari di Google</th>
        </tr>
        
        <?php
        $data = array('Ayam', 'Angsa', 'Bebek', 'Domba', 'Kalkun', 'Kambing', 'Kelinci', 'Kerbau', 'Kuda', 'Sapi' );
      
        $i = 1;
        foreach ($data as $item) {
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $item ?></td>
            <td><img src="img/<?php echo $item ?>.jpg" width="50" height="50"></td>
            <td><a href="https://www.google.com/search?tbm=isch&q=<?php echo $item ?>"target="_blank">Cari</a></td>
        </tr>
        <?php
        $i++;
        }
        
        ?>
       
    </table>
</body>
</html>

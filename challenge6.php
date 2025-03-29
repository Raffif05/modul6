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
            text-align: center;
        }
        .even { background-color: #e3f2fd; }
        .odd { background-color: #fff9c4; }

    </style>
</head>
<body>
    <h1>Galeri Hewan</h1>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Jumlah Kaki</th>
            <th>Foto</th>
            <th>Cari di Google</th>
        </tr>
        
        <?php
        $data = array(
            array('nama' => 'Ayam', 'kaki' => 2),
            array('nama' => 'Angsa', 'kaki' => 2),
            array('nama' => 'Bebek', 'kaki' => 2),
            array('nama' => 'Domba', 'kaki' => 4),
            array('nama' => 'Kalkun', 'kaki' => 2),
            array('nama' => 'Kambing', 'kaki' => 4),
            array('nama' => 'Kelinci', 'kaki' => 4),
            array('nama' => 'Kerbau', 'kaki' => 4),
            array('nama' => 'Kuda', 'kaki' => 4),
            array('nama' => 'Sapi', 'kaki' => 4)
        );
      
        //pengurutan
        usort($data, function ($a, $b) {
            return strcmp($a['nama'], $b['nama']);
        });

        $i = 1;
        foreach ($data as $item) {
            $class = ($i % 2 == 0) ? "even" : "odd";
        ?>

        <tr class="<?php echo $class; ?>">
            <td><?php echo $i; ?></td>
            <td><?php echo htmlspecialchars($item['nama']); ?></td>
            <td><?php echo $item['kaki']; ?></td>
            <td>
                <img src="img/<?php echo strtolower($item['nama']); ?>.jpg" width="50" height="50" 
                alt="<?php echo htmlspecialchars($item['nama']); ?>">
            </td>

            <td>
            <a href="https://www.google.com/search?tbm=isch&q=<?php echo urlencode($item['nama']); ?>" target="_blank">Cari</a>
            </td>
        </tr>

        <?php
        $i++;
        }
        
        ?>
       
    </table>
</body>
</html>

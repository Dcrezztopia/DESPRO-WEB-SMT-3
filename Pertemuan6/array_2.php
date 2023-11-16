<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleTable.css">
    <title></title>
</head>
<body>
    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
        echo "<h1> Dosen Web </h1>";
        echo "<table>";
       echo "<thead>";
        echo "<tr>";
        echo "<th> Nama </th>";
        echo "<th> Domisili </th>";
        echo "<th> Jenis Kelamin </th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        echo "<tr>";
        echo "<td> {$Dosen ['nama']} </td>";
        echo "<td> {$Dosen ['domisili']} </td>";
        echo "<td> {$Dosen ['jenis_kelamin']} </td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
    ?>
</body>
</html>
<?php
    use App\Models\mahasiswa;
?>
<html>
    <head>
        <title>Index Mahasiswa</title>
    </head>
    <body>
        <h1>Index Mahasiswa</h1>
        <style>
            table tr{
                padding: 10px;
            }
        </style>
        <table style="padding: 10px;">
            <tr>
                <th>Student ID</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Tahun</th>
            </tr>
            <?php
            $mahasiswas = mahasiswa::get();
 
            foreach ($mahasiswas as $mahasiswa) {
                echo "<tr>";
                echo "<td>".$mahasiswa->studentId."</td>";
                echo "<td>".$mahasiswa->nama."</td>";
                echo "<td>".$mahasiswa->jurusan."</td>";
                echo "<td style='text-align: center';>".$mahasiswa->tahunMasuk."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>
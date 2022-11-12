
<html>
    <head>
        <title>Laporan Mahasiswa</title>
    </head>
    <body>
        <style>
            body{
                padding: 15px;

            }
            h5{
                margin-top: -15px;
            }
            table, th, td{
                border: 1px solid;
            }
        </style>
        <h1>
            UNIVERSITAS PELITA JAYA
            <br>
            FAKULTAS ILMU KOMPUTER
        </h1>
        <h5>Jalan Bahagia Nomor 88
            <br>
            Tlp. 061 7777
            
        </h5>
        <br>
        <hr>

        <center><h3>Laporan Mahasiswa</h3></center>
        <table>
            <tr>
                <th>Student ID</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Tahun Masuk</th>
            </tr>
            @foreach ($mahasiswa as $mhs)

            <tr>
                <td>{{$mhs->studentId}}</td>
                <td>{{$mhs->nama}}</td>
                <td>{{$mhs->jurusan}}</td>
                <td>{{$mhs->tahunMasuk}}</td>
            </tr>
            @endforeach

        </table>
    </body>
</html>
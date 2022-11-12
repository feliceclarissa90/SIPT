
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
            @foreach ($mahasiswa as $mhs)

            <tr>
                <td>{{$mhs->studentId}}</td>
                <td>{{$mhs->nama}}</td>

            </tr>
            @endforeach

        </table>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Data Pegawai PDF</title>
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-
        ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <!-- <style type="text/css">
            table tr td,
            table tr th{
                font-size: 9pt;
            }
        </style> -->
        <div class="container">
            <center>
                <h4>Data Pegawai PDF</h4>
                <h5><a target="_blank" href="https://hasan-eng.com/">hasan-eng.
                com</a></h5>
            </center>
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Pekerjaan</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach($pegawai as $p)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{$p->nama}}</td>
                            <td>{{$p->email}}</td>
                            <td>{{$p->alamat}}</td>
                            <td>{{$p->telepon}}</td>
                            <td>{{$p->pekerjaan}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
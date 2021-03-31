<!DOCTYPE html>
<html>

<head>
    <title>Nota Pembayaran CariGuru.com</title>
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h2>CARIGURU.COM</h2>
        <h4>Nota Pembayaran Reservasi Guru</h4>
        <h6>Desa Singa Raja. Indramayu. Jawa Barat Indonesia</h6>
        <p>{{$detail -> updated_at}}</p>
    </center>

    <table class="table" style="border-color: white; background:white">
        <thead>
            @foreach($detaill as $d)
            <tr>
                <th style="text-align: left; font-size:15px; width:300px">Nama Pemesan</th>
                <td style="text-align: left; font-size:15px; width:300px">{{Auth::user()->name}}</td>
            <tr>
                <th style=" text-align: left; font-size:15px">Kontak Pemesan</th>
                <td style="text-align: left; font-size:15px">{{Auth::user()->kontak}}</td>
            </tr>

            <tr>
                <th style=" text-align: left; font-size:15px">Judul Les</th>
                <td style="text-align: left; font-size:15px">{{$d -> judul}}</td>
            </tr>

            <tr>
                <th style=" text-align: left; font-size:15px">Jumlah Pertemuan</th>
                <td style=" text-align: left; font-size:15px">{{$d->pertemuan}} / Bulan</td>
            </tr>

            @foreach($guru as $g)
            <tr>
                <th style=" text-align: left; font-size:15px">Nama Guru</th>
                <td style="text-align: left; font-size:15px">{{$g -> name}}</td>
            </tr>
            <tr>
                <th style=" text-align: left; font-size:15px">Kontak Guru</th>
                <td style="text-align: left; font-size:15px">{{$g -> kontak}}</td>
            </tr>
            @endforeach
            <tr>
                <th style=" text-align: left; font-size:15px">
                </th>
                <th style="text-align: left; font-size:15px; font-weight:bold">Detail Pesanan</th>
            </tr>
            <tr>
                <th style=" text-align: left; font-size:15px">
                </th>
                <td style=" text-align: left; font-size:15px"></td>
            </tr>
            <tr>
                <th style=" text-align: left; font-size:15px">Tanggal Pertemuan Pertama</th>
                <td style=" text-align: left; font-size:15px">{{$d->tanggal_mulai}}</td>
            </tr>
            <tr>
                <th style=" text-align: left; font-size:15px">Jam Belajar</th>
                <td style=" text-align: left; font-size:15px">{{$d->waktu}}</td>
            </tr>
            <tr>
                <th style=" text-align: left; font-size:15px">Alamat Belajar</th>
                <td style=" text-align: left; font-size:15px">{{$d->alamat_belajar}}</td>
            </tr>
            <tr>
                <th style=" text-align: left; font-size:15px">Nama Murid</th>
                <td style=" text-align: left; font-size:15px">{{$d->nama}}</td>
            </tr>
            <tr>
                <th style=" text-align: left; font-size:15px">Tingkat Pendidikan & Kelas Murid</th>
                <td style=" text-align: left; font-size:15px">{{$d->kelas}}</td>
            </tr>
            <tr>
                <th style=" text-align: left; font-size:15px">Kebutuhan Murid</th>
                <td style=" text-align: left; font-size:15px">{{$d->kebutuhan}}</td>
            </tr>
            <tr>
                <th style=" text-align: left; font-size:15px">
                </th>
                <td style=" text-align: left; font-size:15px"></td>
            </tr>
            <tr>
                <th style=" text-align: left; font-size:15px">
                </th>
                <td style=" text-align: left; font-size:15px"></td>
            </tr>
            <tr>
                <th style=" text-align: left; font-size:15px"></th>
                <th style=" text-align: left; font-size:15px">Total Pembayaran : @currency ($d->total)</th>
            </tr>
            <tr>
                <th style=" text-align: left; font-size:15px"></th>
                <th style=" text-align: left; font-size:15px">Lunas</th>
            </tr>
            <tr>
                <th style=" text-align: left; font-size:15px"></th>
                <th style=" text-align: left; font-size:15px">Admin : Nurul (085321041904 wa)</th>
            </tr>



            @endforeach
        </thead>
    </table>

</body>

</html>
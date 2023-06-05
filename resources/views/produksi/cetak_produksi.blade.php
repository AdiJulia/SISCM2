<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #00a0df;
            color: white;
        }
    </style>
</head>

<body>

    <h3 align="center">Data Produksi</h3>

    <table id="customers">
        <tr>
            <th>Id Data Produksi</th>
            <th>Id Bahan Baku</th>
            <th>Id Pegawai</th>
            <th>Jumlah Produksi</th>
            <th>Tanggal Produksi</th>
            <th>Keterangan</th>
        </tr>
        @foreach ($tb_dataproduksi as $data)
            <tr>
                <td>{{ $data->id_data_produksi }}</td>
                <td>{{ $data->id_bahan_baku }}</td>
                {{-- <td>{{ $tb_bahanbaku->jenis_bahan}}</td> --}}
                <td>{{ $data->id_pegawai }}</td>
                {{-- <td>{{ $data_pegawai->nama }}</td> --}}
                <td>{{ $data->jumlah_produksi }}</td>
                <td>{{ $data->tanggal_produksi }}</td>
                <td>{{ $data->keterangan }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>

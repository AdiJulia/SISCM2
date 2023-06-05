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

    <h3 align="center">Data Bahan Baku</h3>

    <table id="customers">
        <tr>
            <th>Id Bahan Baku</th>
            <th>Id Pemasok</th>
            <th>Jenis Bahan</th>
            <th>Jumlah Bahan</th>
            <th>Tanggal Masuk</th>
            <th>Harga Bahan</th>
        </tr>
        @foreach ($tb_bahanbaku as $data)
            <tr>
                <td>{{ $data->id_bahan_baku }}</td>
                <td>{{ $data->id_pemasok }}</td>
                <td>{{ $data->jenis_bahan }}</td>
                <td>{{ $data->jumlah_bahan }}</td>
                <td>{{ $data->tanggal_masuk }}</td>
                <td>{{ $data->harga_bahan }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>

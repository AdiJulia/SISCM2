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

    <h3 align="center">Data Barang</h3>

    <table id="customers">
        <tr>
            <th scope="col">ID Data Barang</th>
            <th scope="col">ID Kategori</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga Barang</th>
        </tr>
        @foreach ($tb_databarang as $data)
            <tr>
                <td>{{ $data->id_data_barang }}</td>
                <td>{{ $data->id_kategori }}</td>
                <td>{{ $data->nama_barang }}</td>
                <td>{{ $data->harga }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>

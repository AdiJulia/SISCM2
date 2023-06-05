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

    <h3 align="center">Data Kategori Barang</h3>

    <table id="customers">
        <tr>
            <th scope="col">ID Kategori Barang</th>
            <th scope="col">ID Data Gudang</th>
            <th scope="col">Jenis Barang</th>
            <th scope="col">Jenis Material</th>
        </tr>
        @foreach ($tb_kategoribarang as $data)
            <tr>
                <td>{{ $data->id_kategori }}</td>
                <td>{{ $data->id_data_gudang }}</td>
                <td>{{ $data->jenis_barang }}</td>
                <td>{{ $data->jenis_material }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>

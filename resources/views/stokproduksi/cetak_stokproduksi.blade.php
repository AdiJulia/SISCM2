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
            <th scope="col">ID Stok Produksi</th>
            <th scope="col">ID Data Produksi</th>
            <th scope="col">Stok Masuk</th>
            <th scope="col">Stok Jumlah</th>
            <th scope="col">Stok Keluar</th>
        </tr>
        @foreach ($tb_stokproduksi as $data)
            <tr>
                <td>
                    {{$data->id_stok_produksi}}
                </td>
                <td>
                    {{$data->id_data_produksi}}
                </td>
                <td>
                    {{$data->stok_masuk}}
                </td>
                <td>
                    {{$data->stok_jumlah}}
                </td>
                <td>
                    {{$data->stok_keluar}}
                </td>
            </tr>
        @endforeach
    </table>

</body>

</html>

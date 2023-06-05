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

    <h3 align="center">Data Outlet</h3>

    <table id="customers">
        <tr>
            <th scope="col">ID Outlet</th>
            <th scope="col">ID Data Barang</th>
            <th scope="col">Jumlah Stok</th>
            <th scope="col">Jumlah Restok</th>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">Lokasi Outlet</th>
        </tr>
        @foreach ($tb_dataoutlet as $data)
            <tr>
                <td>
                    {{ $data->id_outlet }}
                </td>
                <td>
                    {{ $data->id_data_barang }}
                </td>
                <td>
                    {{ $data->jumlah_stok }}
                </td>
                <td>
                    {{ $data->jumlah_restok }}
                </td>
                <td>
                    {{ $data->tanggal_masuk }}
                </td>
                <td>
                    {{ $data->lokasi_outlet }}
                </td>
            </tr>
        @endforeach
    </table>

</body>

</html>

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

    <h3 align="center">Data Gudang</h3>

    <table id="customers">
        <tr>
            <th>Id Data Gudang</th>
            <th>Id Stok Produksi</th>
            <th>Jumlah Stok</th>
            <th>Jumlah Masuk</th>
            <th>Jumlah Keluar</th>
            <th>Tanggal Masuk</th>
            <th>Tanggal Keluar</th>
        </tr>
        @foreach ($tb_datagudang as $data)
            <tr>
                <td>
                    {{ $data->id_data_gudang }}
                </td>
                <td>
                    {{ $data->id_stok_produksi }}
                </td>
                <td>
                    {{ $data->jumlah_stok }}
                </td>
                <td>
                    {{ $data->jumlah_masuk }}
                </td>
                <td>
                    {{ $data->jumlah_keluar }}
                </td>
                <td>
                    {{ $data->tanggal_masuk }}
                </td>
                <td>
                    {{ $data->tanggal_keluar }}
                </td>

            </tr>
        @endforeach
    </table>

</body>

</html>

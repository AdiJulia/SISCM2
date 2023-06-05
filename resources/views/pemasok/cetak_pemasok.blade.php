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

    <h3 align="center">Data Pemasok</h3>

    <table id="customers">
        <tr>
            <th>Id pemasok</th>
            <th>Nama pemasok</th>
            <th>Nomor HP</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
        </tr>
        @foreach ($tb_pemasok as $data)
            <tr>
                <td>{{ $data->id_pemasok }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->nomor_hp }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->jenis_kelamin }}</td>
                <td>{{ $data->tanggal_lahir }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>

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

    <h3 align="center">Data Ketenagakerjaan</h3>

    <table id="customers">
        <tr>
            <th>Id Tenaga Kerja</th>
            <th>Id Pegawai</th>
            <th>Jabatan</th>
            <th>Divisi</th>
            <th>Status Pekerjaan</th>
            <th>Upah Tenaga Kerja</th>
        </tr>
        @foreach ($tb_tenagakerja as $data)
            <tr>
                <td>{{ $data->id_tenaga_kerja }}</td>
                <td>{{ $data->id_pegawai }}</td>
                <td>{{ $data->jabatan }}</td>
                <td>{{ $data->divisi }}</td>
                <td>{{ $data->status_pekerjaan }}</td>
                <td>{{ $data->upah_tenaga_kerja }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>

<!DOCTYPE html>
<html>
<head>
	<title>Laporan Difabel</title>
</head>
<body>
	<h2>Data Difabel</h2>
    <table style="width: 100%; border-collapse: collapse; border: 1px solid #ddd;">
        <thead>
            <tr>
                <th style="background-color: #4CAF50; color: white; font-weight: bold; padding: 10px; border: 1px solid #ddd;">No</th>
                <th style="background-color: #4CAF50; color: white; font-weight: bold; padding: 10px; border: 1px solid #ddd;">Nama Lengkap</th>
                <th style="background-color: #4CAF50; color: white; font-weight: bold; padding: 10px; border: 1px solid #ddd;">Jenis Disabilitas</th>
                <th style="background-color: #4CAF50; color: white; font-weight: bold; padding: 10px; border: 1px solid #ddd;">Jenis Kelamin</th>
                <th style="background-color: #4CAF50; color: white; font-weight: bold; padding: 10px; border: 1px solid #ddd;">TTL</th>
                <th style="background-color: #4CAF50; color: white; font-weight: bold; padding: 10px; border: 1px solid #ddd;">Alamat</th>
                <th style="background-color: #4CAF50; color: white; font-weight: bold; padding: 10px; border: 1px solid #ddd;">Pekerjaan</th>
                <th style="background-color: #4CAF50; color: white; font-weight: bold; padding: 10px; border: 1px solid #ddd;">Keperluan Disabilitas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $difabel)
                <tr>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $key + 1 }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $difabel->nama_lengkap }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $difabel->nama_jenis_disabilitas }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $difabel->jenis_kelamin }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $difabel->tempat_lahir . ', '. $difabel->tanggal_lahir }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $difabel->alamat }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $difabel->pekerjaan }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $difabel->keperluan_disabilitas_list }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
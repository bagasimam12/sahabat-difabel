<table style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th style="background-color: #4CAF50; color: white; font-weight: bold; padding: 10px;">Nama Lengkap</th>
            <th style="background-color: #4CAF50; color: white; font-weight: bold; padding: 10px;">Jenis Disabilitas</th>
            <th style="background-color: #4CAF50; color: white; font-weight: bold; padding: 10px;">Jenis Kelamin</th>
            <th style="background-color: #4CAF50; color: white; font-weight: bold; padding: 10px;">TTL</th>
            <th style="background-color: #4CAF50; color: white; font-weight: bold; padding: 10px;">Alamat</th>
            <th style="background-color: #4CAF50; color: white; font-weight: bold; padding: 10px;">Pekerjaan</th>
            <th style="background-color: #4CAF50; color: white; font-weight: bold; padding: 10px;">Keperluan Disabilitas</th>
        </tr>
    </thead>
    <tbody>
        @foreach($difabel as $data)
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px; width: 170px;">{{ $data->nama_lengkap }}</td>
                <td style="border: 1px solid #ddd; padding: 8px; width: 150px;">{{ $data->nama_jenis_disabilitas }}</td>
                <td style="border: 1px solid #ddd; padding: 8px; width: 30px;">{{ $data->jenis_kelamin }}</td>
                <td style="border: 1px solid #ddd; padding: 8px; width: 250px;">{{ $data->tempat_lahir . ', '. $data->tanggal_lahir }}</td>
                <td style="border: 1px solid #ddd; padding: 8px; width: 250px;">{{ $data->alamat }}</td>
                <td style="border: 1px solid #ddd; padding: 8px; width: 140px;">{{ $data->pekerjaan }}</td>
                <td style="border: 1px solid #ddd; padding: 8px; width: 450px;">{{ $data->keperluan_disabilitas_list }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
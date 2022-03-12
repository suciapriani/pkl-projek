<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Lemburan</th>
        <th>potongan</th>
        <th>gaji pokok</th>
        <th>tunjangan</th>
        <th>total</th>
    </tr>
    </thead>
    <tbody>
    @php $no=1; @endphp
    @foreach ($penggajian as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->pegawais->nama }}</td>
            <td>{{ $data->pegawais->jabatans->jabatan }}</td>
            <td><span>
            Rp.{{number_format($data->pegawais->lemburs->sum('jumlah'),2,",",".")}}
            </span></td>
            <td><span>
                Rp.{{number_format($data->pegawais->cutis->sum('jumlah'),2,",",".")}}
            </span></td>
            <td><span>
                Rp.{{number_format($data->pegawais->jabatans->gaji_pokok,2,",",".")}}
            </span></td>
            <td><span>
                Rp.{{number_format($data->pegawais->jabatans->tunjangan_jabatan,2,",",".")}}
            </span></td>
            <td><span>
                Rp.{{number_format($data->total,2,",",".")}}
            </span></td>
        </tr>
</body>

</html>
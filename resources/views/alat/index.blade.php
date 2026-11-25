<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Daftar Alat</title>
</head>
<body>
    <h1>Sistem Peminjaman Alat - Lab</h1>
    <hr>
    <table border="1" cellpadding="6">
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Kondisi</th>
        </tr>
        @forelse ($alat as $a)
            <tr>
                <td>{{ $a->kode }}</td>
                <td>{{ $a->nama }}</td>
                <td>{{ $a->stok }}</td>
                <td>{{ $a->kondisi }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Belum ada data alat.</td>
            </tr>
        @endforelse
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mata Kuliah</title>
</head>
<body>

    <h1>Detail Mata Kuliah</h1>

    <p>Kode Mata Kuliah: {{ $matakuliah->kode_matakuliah }}</p>

    <p>Nama Mata Kuliah: {{ $matakuliah->nama_matakuliah }}</p>

    <p>Jumlah SKS: {{ $matakuliah->sks }}</p>

    <p>Tanggal Dibuat: {{ $matakuliah->created_at->format('d-m-Y H:i') }}</p>

    <p>Tanggal Diperbarui: {{ $matakuliah->updated_at->format('d-m-Y H:i') }}</p>

    <a href="{{ route('matakuliah.index') }}">Kembali</a>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
</head>
<body>

    <h2>Data Buku</h2>

    <a href="{{ route('buku.create') }}">Tambah Buku</a>

    <br><br>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Kategori</th>
                <th>Tanggal Dibuat</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($buku as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->kode_buku }}</td>
                    <td>{{ $item->judul_buku }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @endforeach

            @if ($buku->isEmpty())
                <tr>
                    <td colspan="5" align="center">Belum ada data buku.</td>
                </tr>
            @endif
        </tbody>
    </table>

</body>
</html>

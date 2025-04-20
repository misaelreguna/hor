<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mutasi Transaksi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }
        table, th, td {
            border: 1px solid #333;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Mutasi Transaksi Seluruh User</h2>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>User</th>
                <th>Tanggal</th>
                <th>Tipe Transaksi</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>
                        <!-- Tampilkan nama sender dan receiver (bisa disesuaikan) -->
                        Pengirim: {{ $item->senders?->name ?? 'Tidak diketahui' }} <br>
                        Penerima: {{ $item->receiver?->name ?? 'Tidak diketahui' }}
                    </td>
                    <td>{{ $item->created_at->format('d M Y H:i') }}</td>
                    <td>{{ $item->tipe_transaksi }}</td>
                    <td>Rp.{{ $item->amount }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

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

        table,
        th,
        td {
            border: 1px solid #333;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>Mutasi Transaksi</h2>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Tipe Transaksi</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->created_at->format('d M Y H:i') }}</td>
                    <td>
                        @if ($item->tipe_transaksi == 'transfer')
                            @if ($item->sender_id == Auth::id())
                                Transfer ke {{ $item->receiver?->name ?? 'Pengguna tidak ditemukan' }}
                            @elseif ($item->receiver_id == Auth::id())
                                Ditransfer oleh {{ $item->senders?->name ?? 'Pengguna tidak ditemukan' }}
                            @endif
                        @else
                            {{ ucfirst($item->tipe_transaksi) }}
                        @endif
                    </td>
                    <td>Rp.{{ $item->amount }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

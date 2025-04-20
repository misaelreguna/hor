<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Detail Transaksi</title>
    <style>
        body {
            font-size: 14px;
        }
        .detail {
            margin: 20px;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Detail Transaksi</h2>
    <div class="detail">
        <p><strong>Nama:</strong> {{ $transaction->senders->name }}</p>
        <p><strong>Tanggal:</strong> {{ $transaction->created_at->format('d M Y H:i') }}</p>
        <p><strong>Tipe Transaksi:</strong> 
            @if ($transaction->tipe_transaksi == 'transfer')
                @if ($transaction->sender_id == Auth::id())
                    Transfer ke {{ $transaction->receiver?->name ?? 'Pengguna tidak ditemukan' }}
                @elseif ($transaction->receiver_id == Auth::id())
                    Ditransfer oleh {{ $transaction->senders?->name ?? 'Pengguna tidak ditemukan' }}
                @endif
            @else
                {{ ucfirst($transaction->tipe_transaksi) }}
            @endif
        </p>
            </p>
        <p><strong>Jumlah:</strong> {{ $transaction->amount }}</p>
        <p>
            <strong>Status:</strong> 
            {{ $transaction->confirmed == 0 ? 'Pending' : 'Success' }}
        </p>
    </div>
</body>
</html>

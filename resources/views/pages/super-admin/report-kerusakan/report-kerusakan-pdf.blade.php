<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #408DF0;
            padding: 8px;
            text-align: left;
            font-size: 12px;
        }

        th {
            background-color: #1768F2;
            color: white;
        }

        .no-border th,
        .no-border td {
            border: none;
            padding: 0;
        }
    </style>
</head>

<body>
    <table>
        <tbody class="no-border">
            <tr>
                <td style="white-space: nowrap; color: #1768F2; font-size: 20px; font-weight: 500; padding-bottom:10px">
                    BROKEN REPORT LIST
                </td>
                <td rowspan="2" style="text-align: right; padding-bottom: 30px">
                    <img src="{{ public_path('images/photo/logo.png') }}" alt="logo" width="30%">
                </td>
            </tr>
            <tr>
                @if (isset($validatedData['start_date']) && isset($validatedData['end_date']))
                    <td style="white-space: nowrap; padding-bottom: 30px">Tanggal :
                        {{ carbonParse($validatedData['start_date'])->format('d F Y') }} -
                        {{ carbonParse($validatedData['end_date'])->format('d F Y') }}</td>
                @endif
            </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Jenis</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Zona</th>
                <th>Durasi</th>
                <th>Keterangan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brokenReports as $brokenReport)
                <tr>
                    <td>{{ carbonParse($brokenReport->broken_date)->format('d-m-y, H:i') }} WITA</td>
                    <td>{{ $brokenReport->type }}</td>
                    <td>{{ $brokenReport->brokenable->code }}</td>
                    <td>{{ $brokenReport->brokenable->name ?? ($brokenReport->brokenable->brand ?? $brokenReport->brokenable->trolleyParent->name) }}
                    </td>
                    <td>{{ $brokenReport->brokenable->zone ?? ($brokenReport->brokenable->trolleyParent->zone ?? '-') }}
                    </td>
                    <td>{{ $brokenReport->time }}</td>
                    <td>{{ $brokenReport->note }}</td>
                    <td>{{ $brokenReport->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

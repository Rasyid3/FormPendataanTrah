<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Anggota Trah</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Optional custom styles for better visuals */
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        h1 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">List Data Anggota Trah Martorejan</h1>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Tanggal Lahir</th>
                        <th>Keterangan</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orangs as $orang)
                        <tr>
                            <td>{{ $orang->id }}</td>
                            <td>{{ $orang->nama }}</td>
                            <td>{{ $orang->status }}</td>
                            <td>{{ $orang->tanggal_lahir }}</td>
                            <td>{{ $orang->keterangan }}</td>
                            <td>{{ $orang->alamat }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No data available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Include Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

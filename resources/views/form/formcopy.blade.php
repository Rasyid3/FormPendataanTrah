<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendataan Anggota Trah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Form Pendataan Anggota Trah Martorejan</h1>
        <p>Form ini dibuat bertujuan untuk mendata anggota trah martorejan dan mendokumentasikannya dalam bentuk buku keluarga</p>
        <form id="orangForm">
            <!-- Grandparent ID -->
            <div class="mb-3">
                <label for="grandparent_id" class="form-label">Empu</label>
                <select id="grandparent_id" name="grandparent_id" class="form-control" required>
                    <option value="">Pilih empu</option>
                    @foreach ($grandparents as $grandparent)
                        <option value="{{ $grandparent['id'] }}">{{ $grandparent['name'] }}</option>
                    @endforeach
                </select>
                <div class="form-text">Pilih dari keluarga empu mana</div>
            </div>

            <!-- Name -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required maxlength="255">
            </div>

            <!-- Status -->
            <div class="mb-3">
                <label for="status" class="form-label">Hubungan dengan Empu</label>
                <input type="text" class="form-control" id="status" name="status" required maxlength="255">
                <div class="form-text">Hubungan dengan empu (Contoh : "Anak", "Cucu").</div>
            </div>

            <!-- Date of Birth -->
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan (Opsional)</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" maxlength="255">
                <div class="form-text">Contoh : </div>
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Rumah</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required maxlength="255">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        document.getElementById('orangForm').addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = new FormData(e.target);
            const jsonData = Object.fromEntries(formData.entries());

            try {
                const response = await fetch('/api/orang', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(jsonData),
                });

                if (response.ok) {
                    const result = await response.json();
                    alert('Orang created successfully!');
                    console.log(result);
                } else {
                    const error = await response.json();
                    alert('Error: ' + (error.message || 'Failed to create.'));
                    console.error(error);
                }
            } catch (err) {
                alert('Failed to submit the form.');
                console.error(err);
            }
        });
    </script>
</body>
</html>

@extends('layouts.app')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendataan Anggota Trah</title>
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
</head>
@section('content')
<div class="container">
    <h1>Form Pendataan Anggota Trah Martorejan</h1>
        <p>Form ini dibuat bertujuan untuk mendata anggota trah martorejan dan mendokumentasikannya dalam bentuk buku keluarga</p>
    <form id="familyForm" method="POST" action="{{ route('orang.store') }}">
        @csrf
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

        <div id="family-members">
            <div class="family-member border p-3 mb-3" data-index="0">
                <h4>Keturunan Langsung</h4>
                <div class="mb-3">
                    <label for="family_data[0][nama]" class="form-label">Nama:</label>
                    <input type="text" class="form-control" name="family_data[0][nama]" required>
                </div>
                <div class="mb-3">
                    <label for="family_data[0][status]" class="form-label">Hubungan dengan empu:</label>
                    <select class="form-control" name="family_data[0][status]" required>
                        <option value="">Pilih hubungan dengan empu</option>
                        <option value="anak dari empu">Anak dari empu</option>
                        <option value="cucu dari empu">Cucu dari empu</option>
                        <option value="cicit dari empu">Cicit dari empu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="family_data[0][tanggal_lahir]" class="form-label">Tanggal Lahir:</label>
                    <input type="date" class="form-control" name="family_data[0][tanggal_lahir]" required>
                </div>
                <div class="mb-3">
                    <label for="family_data[0][alamat]" class="form-label">Alamat Rumah:</label>
                    <input type="text" class="form-control" name="family_data[0][alamat]" required>
                </div>
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="family_data[0][keterangan]" value="-">
                </div>
            </div>

            <div class="family-member border p-3 mb-3" data-index="0">
                <h4>Pasangan</h4>
                <div class="mb-3">
                    <label for="family_data[1][nama]" class="form-label">Nama:</label>
                    <input type="text" class="form-control" name="family_data[1][nama]" required>
                </div>
                <div class="mb-3">
                    <label for="family_data[1][status]" class="form-label">Status dalam Keluarga:</label>
                    <select class="form-control" name="family_data[1][status]" required>
                        <option value="">Pilih status dalam keluarga</option>
                        <option value="Suami / Bapak">Suami / Bapak</option>
                        <option value="Istri / Ibu">Istri / Ibu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="family_data[1][tanggal_lahir]" class="form-label">Tanggal Lahir:</label>
                    <input type="date" class="form-control" name="family_data[1][tanggal_lahir]" required>
                </div>
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="family_data[1][alamat]" value="-">
                </div>
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="family_data[1][keterangan]" value="-">
                </div>
            </div>
        </div>

        <button type="button" id="add-member" class="btn btn-primary">Tambah Anak</button>
        <button type="submit" class="btn btn-success mt-3">Kirim</button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    let memberIndex = 2; // Starting index for new members

    // Add new family member row
    document.getElementById('add-member').addEventListener('click', () => {
        const familyMembersContainer = document.getElementById('family-members');
        const newMemberTemplate = `
            <div class="family-member border p-3 mb-3" data-index="${memberIndex}">
                <h4>Anak</h4>
                <div class="mb-3">
                    <label for="family_data[${memberIndex}][nama]" class="form-label">Nama:</label>
                    <input type="text" class="form-control" name="family_data[${memberIndex}][nama]" required>
                </div>
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="family_data[${memberIndex}][status]" value="anak">
                </div>
                <div class="mb-3">
                    <label for="family_data[${memberIndex}][tanggal_lahir]" class="form-label">Tanggal Lahir:</label>
                    <input type="date" class="form-control" name="family_data[${memberIndex}][tanggal_lahir]" required>
                </div>
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="family_data[${memberIndex}][alamat]" value="-">
                </div>
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="family_data[${memberIndex}][keterangan]" value="-">
                </div>
                <button type="button" class="btn btn-danger remove-member">Hapus Anak</button>
            </div>
        `;
        familyMembersContainer.insertAdjacentHTML('beforeend', newMemberTemplate);
        memberIndex++;
    });

    // Remove family member row
    document.getElementById('familyForm').addEventListener('click', (e) => {
        if (e.target.classList.contains('remove-member')) {
            e.target.closest('.family-member').remove();
        }
    });

    // Assign family ID to all keterangan fields on submit
    document.getElementById('familyForm').addEventListener('submit', (e) => {
        // Generate a single random family ID
        const familyId = Math.floor(Math.random() * 9999) + 1; // Random number between 1-9999

        // Assign the same family ID to all keterangan fields
        const keteranganFields = document.querySelectorAll('[name^="family_data"][name$="[keterangan]"]');
        keteranganFields.forEach((field) => {
            field.value = familyId;
        });
    });
});

</script>
@endsection

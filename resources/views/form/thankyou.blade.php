@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Terima kasih telah mengirim data!</h1>
    <p>Data anda telah terkirim.</p>
    <a href="{{ route('form.create') }}" class="btn btn-primary">Kembali</a>
</div>
@endsection

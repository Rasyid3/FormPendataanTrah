<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Linktree Trah Martorejan</title>
  <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
  <div class="container">
    <div class="profile-pic"></div>
    <h1>Syawalan Trah Martorejan</h1>
    <h3>2 Syawal 1446H</h3>
    <p>Selamat datang pada linktree Syawalan Trah Martorejan</p>
    <div class="links">
      <a href="https://example1.com" target="_blank">Pendataan Anggota Keluarga Trah Martorejan</a>
      <a href="{{ route('venue') }}" target="_self">Lokasi Acara</a>
      <a href="{{ route('rundown') }}" target="_self">Rundown Acara</a>
      <a href="https://example3.com" target="_blank">Konfirmasi Kehadiran</a>

    </div>
  </div>
</body>
</html>

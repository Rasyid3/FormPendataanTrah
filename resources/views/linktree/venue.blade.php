<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tempat Acara</title>
  <link rel="stylesheet" href="{{asset('css/venue.css')}}">
</head>
<body>
  <div class="venue-container">
    <header class="venue-header">
        <h1>🌿 Lokasi Acara 🌿</h1>
        <h2>Syawalan Trah Martorejan</h2>
        <h3>2 Syawal 1446H / 1 April 2025</h3>
    </header>
    <div class="venue-info">
      <h2>📍 Tempat Acara</h2>
      <ul>
        <li><strong>Nama Tempat :</strong> Srawung Resto & Kopi</li>
        <li><strong>Alamat :</strong> 6FR8+8HC, Jl. Cangkringan, Tegal Sari, Purwomartani, Kec. Kalasan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571</li>
        <li><strong>Tanggal :</strong> 1 April 2025</li>
        <li><strong>Jam :</strong> 09:00 WIB - 13.00 WIB</li>
      </ul>
    </div>
    <div class="map">
      <h2>🌍 Maps</h2>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.288487501012!2d110.46381647500472!3d-7.759197892259884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5b2287c6fc75%3A0x2fd49ff936efce9a!2sSrawung%20Resto%20%26%20Kopi!5e0!3m2!1sen!2sid!4v1736220265400!5m2!1sen!2sid"
        width="100%"
        height="300"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"></iframe>
    </div>
    <footer>
        <a href="{{ route('linktree') }}" class="back-button">Kembali</a>
    </footer>
  </div>
</body>
</html>

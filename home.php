<!DOCTYPE html><html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - SMK Angkasa</title>  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      min-height: 100vh;
      background: linear-gradient(120deg, #1e3c72, #2a5298);
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
    }

    .wrapper {
      width: 100%;
      max-width: 900px;
      padding: 20px;
    }

    .header {
      text-align: center;
      margin-bottom: 30px;
    }

    .header h1 {
      font-size: 28px;
      margin-bottom: 5px;
    }

    .header p {
      font-size: 14px;
      opacity: 0.8;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }

    .card {
      background: rgba(255,255,255,0.1);
      backdrop-filter: blur(15px);
      padding: 20px;
      border-radius: 16px;
      text-align: center;
      transition: 0.3s ease;
      border: 1px solid rgba(255,255,255,0.2);
    }

    .card:hover {
      transform: translateY(-8px) scale(1.03);
      background: rgba(255,255,255,0.2);
    }

    .card span {
      font-size: 35px;
      display: block;
      margin-bottom: 10px;
    }

    .card h3 {
      margin-bottom: 8px;
    }

    .card a {
      display: inline-block;
      margin-top: 10px;
      text-decoration: none;
      color: #fff;
      font-size: 13px;
      opacity: 0.9;
    }

    .card a:hover {
      text-decoration: underline;
    }

    .logout {
      text-align: center;
      margin-top: 30px;
    }

    .logout a {
      color: #ff6b6b;
      text-decoration: none;
      font-size: 14px;
    }

    .logout a:hover {
      text-decoration: underline;
    }

  </style></head>
<body>  <div class="wrapper"><div class="header">
  <h1>SMK Angkasa 🚀</h1>
  <p>Sistem Pendaftaran Ekstrakurikuler</p>
</div>

<div class="grid">

  <div class="card">
    <span>📚</span>
    <h3>Tentang Ekskul</h3>
    <p>Lihat semua kegiatan yang tersedia</p>
    <a href="tentang.html">Buka →</a>
  </div>

  <div class="card">
    <span>📝</span>
    <h3>Daftar Ekskul</h3>
    <p>Isi form untuk bergabung</p>
    <a href="daftar.html">Daftar →</a>
  </div>

  <div class="card">
    <span>✅</span>
    <h3>Status</h3>
    <p>Cek status pendaftaran kamu</p>
    <a href="status.html">Cek →</a>
  </div>

</div>

<div class="logout">
  <a href="index.html">Logout</a>
</div>

  </div></body>
</html>

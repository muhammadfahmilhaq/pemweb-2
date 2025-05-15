<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NEON TECH</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #0d0d0d;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #ffffff;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      background-color: #1a1a1a;
      box-shadow: 0 0 20px #00ffcc44;
    }

    .navbar .brand {
      font-size: 1.7rem;
      color: #00ffee;
      text-shadow: 0 0 10px #00ffee;
      font-weight: bold;
      text-decoration: none;
    }

    .navbar ul {
      list-style: none;
      display: flex;
      gap: 1.5rem;
    }

    .navbar ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .navbar ul li a:hover {
      color: #00ffee;
      text-shadow: 0 0 8px #00ffee;
    }

    .container {
      padding: 4rem 2rem;
      text-align: center;
    }

    .container h1 {
      font-size: 3rem;
      margin-bottom: 1.5rem;
      color: #00ffee;
      text-shadow: 0 0 15px #00ffee;
    }

    .container p {
      font-size: 1.2rem;
      max-width: 700px;
      margin: 0 auto;
      line-height: 1.7;
      color: #cccccc;
    }

    .highlight {
      color: #00ffee;
      font-weight: bold;
    }

    footer {
      text-align: center;
      padding: 1rem;
      background-color: #111;
      color: #888;
      font-size: 0.9rem;
    }

    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }

      .navbar ul {
        flex-direction: column;
        gap: 1rem;
        margin-top: 1rem;
        width: 100%;
      }

      .navbar ul li {
        width: 100%;
      }

      .navbar ul li a {
        display: block;
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <a href="#" class="brand">MOJOWARNO</a>
    <ul>
      <li><a href="#">Beranda</a></li>
      <li><a href="#">Artikel</a></li>
      <li><a href="#">Proyek</a></li>
      <li><a href="#">Kontak</a></li>
    </ul>
  </nav>

  <div class="container">
    <h1>GKJW MOJOWARNO</h1>
    <p>
      <span class="highlight">GKJW</span>  Mojowarno (Gereja Kristen Jawi Wetan Mojowarno) adalah gereja Kristen pertama di Jawa Timur dan merupakan pusat sejarah kekristenan di wilayah Jawi Wetan. Didirikan pada 1852 oleh pendeta Belanda, C. W. Groneman, gereja ini menjadi simbol awal penginjilan di kalangan masyarakat Jawa. Lokasinya di Jombang, dan setiap tahun menjadi tempat Hari Raya Undhuh-Undhuh, tradisi ucapan syukur hasil panen yang unik dan khas jemaat GKJW.
    </p>
  </div>

  <footer>
    &copy; fahmilhaqqqqqq
  </footer>

</body>
</html>

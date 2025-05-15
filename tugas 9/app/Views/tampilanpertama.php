<!DOCTYPE html>
<html>
<head>
    <title>Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        nav {
            background-color: #333;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        .banner img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            max-height: 400px;
            object-fit: cover;
        }

        main {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
        }

        .content {
            flex: 2;
            padding: 20px;
        }

        .sidebar {
            flex: 1;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        h2 {
            color: #4CAF50;
        }

        ul {
            padding-left: 20px;
        }

        ul li {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>

    <header>
        <h1>SUSU</h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">Berita</a>
        <a href="#">Tentang Kami</a>
    </nav>

    <main>
        <div class="content">
            <h2>MANFAAT SUSU</h2>
            <p>Susu memiliki banyak manfaat bagi kesehatan. Berikut adalah beberapa di antaranya:</p>
            <ul>
                <li><strong>Sumber Kalsium:</strong> Susu kaya akan kalsium, yang penting untuk kesehatan tulang dan gigi. Kalsium membantu mencegah osteoporosis.</li>
                <li><strong>Protein Berkualitas Tinggi:</strong> Susu mengandung protein yang lengkap, penting untuk pertumbuhan dan perbaikan jaringan.</li>
                <li><strong>Vitamin D:</strong> Banyak produk susu diperkaya dengan vitamin D yang membantu penyerapan kalsium dan mendukung sistem kekebalan tubuh.</li>
                <li><strong>Nutrisi Seimbang:</strong> Susu mengandung vitamin B12, riboflavin (B2), dan fosfor.</li>
            </ul>
        </div>

        <div class="sidebar">
            <h2>JENIS SUSU</h2>
            <ul>
                <li>Susu Almond: Rendah kalori dan cocok untuk yang alergi susu sapi.</li>
                <li>Susu Kedelai: Tinggi protein dan populer dalam diet vegetarian.</li>
                <li>Susu Oat: Rasa manis alami dan cocok untuk kopi.</li>
                <li>Susu Kelapa: Rasa khas kelapa, sering dipakai di masakan Asia.</li>
            </ul>
        </div>
    </main>

    <div class="footer">
        <p>&copy; fahmilhaqqqqqq</p>
    </div>

</body>
</html>

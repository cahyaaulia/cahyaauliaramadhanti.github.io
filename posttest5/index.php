<!DOCTYPE html>
<html lang="en">

<style>
    
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Toko Perhiasan CHY</h1>
        <nav>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Kontak</a></li>
                <li><button id="mode-toggle">Mode Gelap</button></li>
                <li><button id="info-popup-btn">Popup Informasi</button></li>
                <li><a href="test.php"><button>Tambah Data</button></a></li>
            </ul>
        </nav>
    </header>

    <div class="popup">
        <div class="popup-content">
            <h3>tunggu saja info selanjutnya </h3>
            <li><a href="index.html">Kembali</a></li>

        </div>
    </div>

    <main>
        <section class="about">
            <h2>About me</h2>
            <p>saya adalah seorang mahasiswa dari universitas mulawarman. 
                saya dari fakultas teknik prodi informatika dan sekarang sudah memasuki kuliah semester 3. 
                saya lahir tanggal 25 oktober 2004 samarinda dan tinggal di Jl. Re. Martadinata gang wahyu No.07 Rt.4</p>
            
        </section>

        <section class="hero">
            <h2>Selamat Datang di Toko Perhiasan CHY</h2>
            <p>Kami menyediakan perhiasan berkualitas tinggi dengan desain eksklusif.</p>
        </section>

        <section class="products">
            <h2>Daftar Produk</h2>
            <div class="product"> 
                <img src="cicin1.webp" width="100%" alt="Cincin 1">
                <h3>Cincin Berlian Eksklusif</h3>
                <p>Cincin berlian eksklusif dengan desain elegan.</p>
                <p>Harga: Rp 5.000.000</p>
                <button>Beli</button>
            </div>
            <div class="product">
                <img src="kalung1.webp" width="100%" alt="Kalung 1">
                <h3>Kalung Mutiara Mewah</h3>
                <p>Kalung mutiara mewah dengan tali emas.</p>
                <p>Harga: Rp 8.000.000</p>
                <button>Beli</button>
            </div>
        </section>

        <section>
            <form>
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
    
                <label for="umur">Umur:</label>
                <input type="number" id="umur" name="umur" min="1" placeholder="Masukkan umur Anda" required>
    
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
    
                <button type="submit">Submit</button>
            </form>
        </section>

        <section class="contact">
            <h2>Hubungi Kami</h2>
            <p>Jika Anda memiliki pertanyaan atau memerlukan bantuan lebih lanjut, silakan hubungi kami melalui salah satu cara berikut:</p>
            <ul>
                <li>Email: <a href="mailto:info@tokoperhiasanchy.com">info@tokoperhiasanchy.com</a></li>
                <li>Telepon: +123456789</li>
                <li>Alamat: Jl. Contoh No. 123, Kota Anda</li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Toko Perhiasan CHY</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>

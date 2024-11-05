# Website dinamis
| Keterangan | Data |
| ----|-----|
| Nama | Laras Sakti |
| Kelas | TI.23.A6 |
| Nim | 312310627 |
| Mata Kuliah | Pemograman Web 1 |

## Home

~~~

<?php 
$title = "Home"; 
?>

<div class="container text-center mt-5">
    <h1>Selamat Datang di Website Kami!</h1>
    <p>Di sini, kami berkomitmen untuk memberikan informasi dan layanan terbaik bagi Anda. Website kami dirancang untuk menjadi sumber inspirasi, pengetahuan, dan koneksi. Kami harap Anda menemukan apa yang Anda cari dan lebih dari itu.</p>
    <p><strong>Temukan konten menarik, pelajari sesuatu yang baru, dan tetap terhubung bersama kami.</strong></p>

    <div class="row mt-4">
        <div class="col-md-4">
            <img src="assets/foto/092284800_1730099632-cara-membuat-kliping.jpg" alt="Artikel Terbaru" class="img-fluid mb-3">
            <h3>Artikel Terbaru</h3>
            <p>Selalu up-to-date dengan artikel terkini yang mencakup berbagai topik menarik dan informatif.</p>
        </div>
        <div class="col-md-4">
            <img src="assets/foto/pexels-agung-pandit-wiguna-3401403.webp" alt="Program Edukasi" class="img-fluid mb-3">
            <h3>Program Edukasi</h3>
            <p>Bergabunglah dengan program edukasi kami dan tingkatkan keterampilan Anda di bidang yang Anda minati.</p>
        </div>
        <div class="col-md-4">
            <img src="assets/foto/078156100_1608377138-pexels-pixabay-53958.jpg" alt="Komunitas" class="img-fluid mb-3">
            <h3>Komunitas</h3>
            <p>Terhubung dengan komunitas dan temukan orang-orang dengan minat yang sama.</p>
        </div>
    </div>
</div>

~~~

![Cuplikan layar 2024-11-05 022614](https://github.com/user-attachments/assets/f3c0ce56-413a-4e2e-a723-7497726bffaf)


## About

~~~

<?php 
$title = "About";
?>

<div class="container text-center mt-5">
    <h1>Tentang Kami</h1>
    <p><strong>Website Kami Berdiri untuk Membantu Anda Berkembang</strong></p>
    <p>Sejak didirikan, website kami berfokus pada pemberdayaan pengguna dengan pengetahuan dan keterampilan yang dibutuhkan di era digital. Kami percaya bahwa setiap orang memiliki potensi untuk mencapai lebih banyak, dan kami ada di sini untuk membantu mewujudkannya.</p>

    <h2>Misi Kami</h2>
    <p>Misi kami adalah menyediakan platform yang menawarkan konten berkualitas dan program pelatihan yang relevan. Kami berupaya menciptakan dampak positif di masyarakat melalui edukasi dan akses informasi yang mudah dijangkau.</p>

    <h2>Visi Kami</h2>
    <p>Visi kami adalah menjadi pusat informasi dan pembelajaran terpercaya bagi siapa pun yang ingin meningkatkan pengetahuan dan keterampilan mereka, baik dalam konteks profesional maupun pribadi.</p>

    <h3>Tim Kami</h3>
    <p>Kami didukung oleh tim profesional yang berdedikasi dalam menghadirkan konten berkualitas tinggi dan mendukung pengalaman pengguna yang nyaman. Bersama, kami bekerja untuk memberikan pengalaman yang berharga bagi Anda.</p>
</div>

~~~

![About](https://github.com/user-attachments/assets/1d974a41-b82d-4797-bb81-d9f23f341590)

## Contact

~~~

<?php 
$title = "Contact"; 
?>

<div class="container text-center mt-5">
    <h1>Hubungi Kami</h1>
    <p>Apakah Anda memiliki pertanyaan, masukan, atau ingin berkolaborasi dengan kami? Kami senang mendengarnya! Jangan ragu untuk menghubungi kami melalui form di bawah ini atau melalui informasi kontak lainnya.</p>
    
    <h3>Formulir Kontak</h3>
    <form action="contact.php" method="post" class="text-left mx-auto" style="max-width: 400px;">
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Nomor Telepon:</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="message">Pesan:</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
    </form>

    <h3>Informasi Kontak Lainnya</h3>
    <p>Email: Larassakti@gmail.com</p>
    <p>Telepon: +62 123 4567 890</p>
    <p>Alamat: Jl. cinta No. 123, Jakarta, Indonesia</p>

    <div class="social-media mt-4">
        <a href="#" class="btn btn-outline-primary">Facebook</a>
        <a href="#" class="btn btn-outline-info">Twitter</a>
        <a href="#" class="btn btn-outline-danger">Instagram</a>
    </div>
</div>

~~~

![Contact](https://github.com/user-attachments/assets/e7e85b82-d352-4492-bf5b-926fe57ecfa6)







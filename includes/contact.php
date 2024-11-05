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





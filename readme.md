# Platform Admin
Daftar kelompok **Admin** : 
1. Agus Prasetyo (1731710176)
2. Grandis Ardana Ahmad Fahrezi (1731710179)
3. Helmi Siswo Effendi (1731710165)

# Cara Install
1. Clone project
2. Merubah konfigurasi di koneksi
3. Jalankan sesuai lokasi

# Perubahan
1. Untuk function `kodeAnggota()` pada `config/fungsi.php` dilakukan perubahan dan menambahkan parameter menjadi `kodeAnggota($kode)`. `$kode` diinputkan sesuai dengan posisinya. contoh : 
```php
    // memasukan nomerAnggota yang berawalan AGP atau disingkat Anggota Pergudangan
    $nomer = nomerAnggota("AGP");
    // Output : AGP00001 
```

Semangat **admin** :fire:
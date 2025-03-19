
---

# Laravel 12 - Tipe Data dan Operator  

Dokumen ini berisi ringkasan materi terkait tipe data dan operator dalam Laravel 12.  

## 📌 Daftar Materi  

1. **Single Quote (`'`) dalam String**  
   - Penggunaan tanda kutip tunggal dalam string di Laravel/PHP.  
   - Contoh: `'Ini adalah string'`.  

2. **Double Quote (`"`) dalam String**  
   - Penggunaan tanda kutip ganda dalam string di Laravel/PHP.  
   - Bisa memproses variabel dalam string.  
   - Contoh:  
     ```php
     $nama = "Laravel";
     echo "Framework favorit saya adalah $nama"; // Laravel
     ```

3. **Tipe Data Array**  
   - Menyimpan beberapa nilai dalam satu variabel.  
   - Contoh:  
     ```php
     $buah = ["Apel", "Jeruk", "Mangga"];
     ```

4. **Tipe Data Array (Lanjutan)**  
   - Array asosiatif dan multidimensi.  
   - Contoh:  
     ```php
     $user = ["nama" => "Ali", "umur" => 25];
     ```

5. **Operator Aritmatika**  
   - Melakukan operasi matematika:  
     - `+` (Penjumlahan)  
     - `-` (Pengurangan)  
     - `*` (Perkalian)  
     - `/` (Pembagian)  
     - `%` (Modulo)  
   - Contoh:  
     ```php
     $hasil = 10 + 5; // 15
     ```

6. **Operator String**  
   - Menggabungkan string dengan `.`  
   - Contoh:  
     ```php
     $nama = "Laravel";
     echo "Framework: " . $nama;
     ```

7. **Operator Perbandingan**  
   - Digunakan untuk membandingkan dua nilai:  
     - `==` (Sama dengan)  
     - `!=` (Tidak sama dengan)  
     - `>` (Lebih besar)  
     - `<` (Lebih kecil)  
   - Contoh:  
     ```php
     var_dump(10 > 5); // true
     ```

8. **Operator Logika**  
   - Menghubungkan ekspresi dengan operator logika:  
     - `&&` (AND)  
     - `||` (OR)  
     - `!` (NOT)  
   - Contoh:  
     ```php
     var_dump(true && false); // false
     ```

Semoga bermanfaat! 🚀


---

# **Laravel 12 - Struktur Kontrol (Percabangan)**

Dalam pemrograman Laravel (PHP), struktur kontrol percabangan digunakan untuk mengambil keputusan berdasarkan kondisi tertentu. Laravel 12 menggunakan sintaks PHP standar dalam menangani percabangan.

## **📌 Materi 9: If Statement**

`if` digunakan untuk mengeksekusi blok kode jika kondisi yang diberikan bernilai **true**.

### **🔹 Contoh If Statement**

```php
$nilai = 80;

if ($nilai >= 75) {
    echo "Anda lulus!";
}
```

✅ Jika `$nilai` lebih dari atau sama dengan `75`, maka akan mencetak:  
➡ **"Anda lulus!"**

### **🔹 Contoh If Statement dengan Blade di Laravel**

Di Laravel, kita bisa menggunakan **Blade Template Engine** untuk membuat percabangan dalam tampilan.

```blade
@if($nilai >= 75)
    <p>Anda lulus!</p>
@endif
```

## **📌 Materi 10: Else If Statement**

Gunakan `else if` untuk mengevaluasi beberapa kondisi bertingkat.

### **🔹 Contoh Else If Statement**

```php
$nilai = 65;

if ($nilai >= 80) {
    echo "Anda mendapatkan nilai A";
} elseif ($nilai >= 70) {
    echo "Anda mendapatkan nilai B";
} elseif ($nilai >= 60) {
    echo "Anda mendapatkan nilai C";
} else {
    echo "Anda tidak lulus";
}
```

✅ Output jika `$nilai = 65`:  
➡ **"Anda mendapatkan nilai C"**

### **🔹 Contoh Else If Statement dengan Blade**

```blade
@if($nilai >= 80)
    <p>Anda mendapatkan nilai A</p>
@elseif($nilai >= 70)
    <p>Anda mendapatkan nilai B</p>
@elseif($nilai >= 60)
    <p>Anda mendapatkan nilai C</p>
@else
    <p>Anda tidak lulus</p>
@endif
```

## **📌 Materi 11: Switch Statement**

`switch` digunakan untuk menggantikan banyak `if-elseif` agar lebih mudah dibaca.

### **🔹 Contoh Switch Statement**

```php
$grade = "B";

switch ($grade) {
    case "A":
        echo "Sangat baik";
        break;
    case "B":
        echo "Baik";
        break;
    case "C":
        echo "Cukup";
        break;
    default:
        echo "Nilai tidak valid";
}
```

✅ Output jika `$grade = "B"`:  
➡ **"Baik"**

### **🔹 Contoh Switch Statement dengan Blade**

```blade
@switch($grade)
    @case('A')
        <p>Sangat baik</p>
        @break
    @case('B')
        <p>Baik</p>
        @break
    @case('C')
        <p>Cukup</p>
        @break
    @default
        <p>Nilai tidak valid</p>
@endswitch
```

---

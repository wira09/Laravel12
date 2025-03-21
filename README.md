
---

# **Laravel 12 - Struktur Perulangan (Looping)**

Dalam Laravel 12, perulangan digunakan untuk mengeksekusi blok kode secara berulang berdasarkan kondisi tertentu. Laravel mendukung berbagai jenis perulangan seperti `for`, `while`, `do-while`, dan `foreach`, baik dalam kode PHP maupun di Blade Template.

## **📌 Materi 12: Perulangan `for`**

`for` digunakan saat jumlah iterasi sudah diketahui.

### **🔹 Contoh Perulangan `for` dalam PHP**

```php
for ($i = 1; $i <= 5; $i++) {
    echo "Iterasi ke-$i <br>";
}
```

✅ Output:  
➡ **Iterasi ke-1**  
➡ **Iterasi ke-2**  
➡ **Iterasi ke-3**  
➡ **Iterasi ke-4**  
➡ **Iterasi ke-5**

### **🔹 Contoh Perulangan `for` dalam Blade**

```blade
@for ($i = 1; $i <= 5; $i++)
    <p>Iterasi ke-{{ $i }}</p>
@endfor
```

## **📌 Materi 13: Perulangan `while`**

`while` digunakan saat perulangan harus terus berjalan selama kondisi bernilai `true`.

### **🔹 Contoh Perulangan `while` dalam PHP**

```php
$i = 1;
while ($i <= 5) {
    echo "Iterasi ke-$i <br>";
    $i++;
}
```

✅ Output sama seperti `for`.

### **🔹 Contoh Perulangan `while` dalam Blade**

```blade
@php $i = 1; @endphp
@while ($i <= 5)
    <p>Iterasi ke-{{ $i }}</p>
    @php $i++; @endphp
@endwhile
```

## **📌 Materi 14: Perulangan `do-while`**

`do-while` mirip `while`, tetapi minimal dieksekusi sekali meskipun kondisi awalnya `false`.

### **🔹 Contoh Perulangan `do-while` dalam PHP**

```php
$i = 1;
do {
    echo "Iterasi ke-$i <br>";
    $i++;
} while ($i <= 5);
```

✅ Output sama seperti `for` dan `while`.

### **🔹 Contoh Perulangan `do-while` dalam Blade**

```blade
@php $i = 1; @endphp
@do
    <p>Iterasi ke-{{ $i }}</p>
    @php $i++; @endphp
@while ($i <= 5)
```

## **📌 Materi 15: Perulangan `foreach`**

`foreach` digunakan untuk mengiterasi array atau koleksi data.

### **🔹 Contoh Perulangan `foreach` dalam PHP**

```php
$buah = ['Apel', 'Jeruk', 'Mangga'];

foreach ($buah as $item) {
    echo "$item <br>";
}
```

✅ Output:  
➡ **Apel**  
➡ **Jeruk**  
➡ **Mangga**

### **🔹 Contoh Perulangan `foreach` dalam Blade**

```blade
@php
    $buah = ['Apel', 'Jeruk', 'Mangga'];
@endphp

@foreach ($buah as $item)
    <p>{{ $item }}</p>
@endforeach
```

---

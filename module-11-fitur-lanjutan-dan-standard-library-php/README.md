# MODUL 11: Fitur Lanjutan dan Standard Library PHP

## Ringkasan Ruang Lingkup Materi
DateTime, DateTimeImmutable, timezone handling, fungsi matematika, random number generator, CSPRNG, JSON encode/decode, SPL Iterators, Generators & yield, weak references, Fibers, enum methods, attributes metadata, readonly classes, property hooks, dan asymmetric visibility.

## Tujuan Pembelajaran
Memanfaatkan pustaka standar PHP modern (PHP 8.2 - 8.4) untuk menghasilkan kode yang efisien dan mutakhir.

---

## Daftar Submodul Pembelajaran

- [165_date_time.php](165_date_time.php) : Pengelolaan tanggal dan waktu
- [166_date_time_immutable.php](166_date_time_immutable.php) : `DateTimeImmutable`
- [167_timezone_handling.php](167_timezone_handling.php) : Pengelolaan zona waktu
- [168_math_functions.php](168_math_functions.php) : Fungsi matematika
- [169_random_numbers.php](169_random_numbers.php) : Bilangan acak
- [170_secure_random.php](170_secure_random.php) : Bilangan acak kriptografis
- [171_json_encode.php](171_json_encode.php) : Konversi data ke JSON
- [172_json_decode.php](172_json_decode.php) : Membaca JSON
- [173_iterators.php](173_iterators.php) : Iterator
- [174_generators.php](174_generators.php) : Generator
- [175_yield_keyword.php](175_yield_keyword.php) : Keyword `yield`
- [176_generator_delegation.php](176_generator_delegation.php) : Delegasi generator menggunakan `yield from`
- [177_closure_capture.php](177_closure_capture.php) : Variabel dalam closure
- [178_weak_references.php](178_weak_references.php) : Weak references
- [179_fibers.php](179_fibers.php) : Fibers
- [180_enum_methods.php](180_enum_methods.php) : Method pada enumerations
- [181_php_attributes.php](181_php_attributes.php) : Penggunaan attributes untuk metadata
- [182_readonly_classes.php](182_readonly_classes.php) : Readonly classes
- [183_property_hooks.php](183_property_hooks.php) : Property hooks pada PHP 8.4+
- [184_asymmetric_visibility.php](184_asymmetric_visibility.php) : Asymmetric property visibility pada PHP 8.4+

---

## Penjelasan Setiap Submodul

### 165. Pengelolaan tanggal dan waktu

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Pengelolaan tanggal dan waktu` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Pengelolaan tanggal dan waktu` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `165_date_time.php` mendemonstrasikan implementasi terisolasi dari `Pengelolaan tanggal dan waktu` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 165_date_time.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Pengelolaan tanggal dan waktu`.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Pengelolaan tanggal dan waktu](output/165_date_time.png)

**Lokasi Source Code:** [165_date_time.php](165_date_time.php)

---

### 166. `DateTimeImmutable`

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep ``DateTimeImmutable`` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar ``DateTimeImmutable`` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `166_date_time_immutable.php` mendemonstrasikan implementasi terisolasi dari ``DateTimeImmutable`` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 166_date_time_immutable.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik ``DateTimeImmutable``.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi `DateTimeImmutable`](output/166_date_time_immutable.png)

**Lokasi Source Code:** [166_date_time_immutable.php](166_date_time_immutable.php)

---

### 167. Pengelolaan zona waktu

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Pengelolaan zona waktu` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Pengelolaan zona waktu` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `167_timezone_handling.php` mendemonstrasikan implementasi terisolasi dari `Pengelolaan zona waktu` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 167_timezone_handling.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Pengelolaan zona waktu`.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Pengelolaan zona waktu](output/167_timezone_handling.png)

**Lokasi Source Code:** [167_timezone_handling.php](167_timezone_handling.php)

---

### 168. Fungsi matematika

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Fungsi matematika` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Fungsi matematika` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `168_math_functions.php` mendemonstrasikan implementasi terisolasi dari `Fungsi matematika` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 168_math_functions.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Fungsi matematika`.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Fungsi matematika](output/168_math_functions.png)

**Lokasi Source Code:** [168_math_functions.php](168_math_functions.php)

---

### 169. Bilangan acak

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Bilangan acak` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Bilangan acak` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `169_random_numbers.php` mendemonstrasikan implementasi terisolasi dari `Bilangan acak` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 169_random_numbers.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Bilangan acak`.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Bilangan acak](output/169_random_numbers.png)

**Lokasi Source Code:** [169_random_numbers.php](169_random_numbers.php)

---

### 170. Bilangan acak kriptografis

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Bilangan acak kriptografis` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Bilangan acak kriptografis` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `170_secure_random.php` mendemonstrasikan implementasi terisolasi dari `Bilangan acak kriptografis` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 170_secure_random.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Bilangan acak kriptografis`.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Bilangan acak kriptografis](output/170_secure_random.png)

**Lokasi Source Code:** [170_secure_random.php](170_secure_random.php)

---

### 171. Konversi data ke JSON

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Konversi data ke JSON` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Konversi data ke JSON` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `171_json_encode.php` mendemonstrasikan implementasi terisolasi dari `Konversi data ke JSON` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 171_json_encode.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Konversi data ke JSON`.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Konversi data ke JSON](output/171_json_encode.png)

**Lokasi Source Code:** [171_json_encode.php](171_json_encode.php)

---

### 172. Membaca JSON

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Membaca JSON` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Membaca JSON` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `172_json_decode.php` mendemonstrasikan implementasi terisolasi dari `Membaca JSON` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 172_json_decode.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Membaca JSON`.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Membaca JSON](output/172_json_decode.png)

**Lokasi Source Code:** [172_json_decode.php](172_json_decode.php)

---

### 173. Iterator

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Iterator` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Iterator` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `173_iterators.php` mendemonstrasikan implementasi terisolasi dari `Iterator` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 173_iterators.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Iterator`.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Iterator](output/173_iterators.png)

**Lokasi Source Code:** [173_iterators.php](173_iterators.php)

---

### 174. Generator

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Generator` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Generator` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `174_generators.php` mendemonstrasikan implementasi terisolasi dari `Generator` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 174_generators.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Generator`.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Generator](output/174_generators.png)

**Lokasi Source Code:** [174_generators.php](174_generators.php)

---

### 175. Keyword `yield`

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Keyword `yield`` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Keyword `yield`` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `175_yield_keyword.php` mendemonstrasikan implementasi terisolasi dari `Keyword `yield`` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 175_yield_keyword.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Keyword `yield``.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Keyword `yield`](output/175_yield_keyword.png)

**Lokasi Source Code:** [175_yield_keyword.php](175_yield_keyword.php)

---

### 176. Delegasi generator menggunakan `yield from`

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Delegasi generator menggunakan `yield from`` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Delegasi generator menggunakan `yield from`` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `176_generator_delegation.php` mendemonstrasikan implementasi terisolasi dari `Delegasi generator menggunakan `yield from`` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 176_generator_delegation.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Delegasi generator menggunakan `yield from``.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Delegasi generator menggunakan `yield from`](output/176_generator_delegation.png)

**Lokasi Source Code:** [176_generator_delegation.php](176_generator_delegation.php)

---

### 177. Variabel dalam closure

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Variabel dalam closure` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Variabel dalam closure` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `177_closure_capture.php` mendemonstrasikan implementasi terisolasi dari `Variabel dalam closure` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 177_closure_capture.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Variabel dalam closure`.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Variabel dalam closure](output/177_closure_capture.png)

**Lokasi Source Code:** [177_closure_capture.php](177_closure_capture.php)

---

### 178. Weak references

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Weak references` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Weak references` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `178_weak_references.php` mendemonstrasikan implementasi terisolasi dari `Weak references` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 178_weak_references.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Weak references`.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Weak references](output/178_weak_references.png)

**Lokasi Source Code:** [178_weak_references.php](178_weak_references.php)

---

### 179. Fibers

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Fibers` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Fibers` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `179_fibers.php` mendemonstrasikan implementasi terisolasi dari `Fibers` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 179_fibers.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Fibers`.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Fibers](output/179_fibers.png)

**Lokasi Source Code:** [179_fibers.php](179_fibers.php)

---

### 180. Method pada enumerations

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Method pada enumerations` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Method pada enumerations` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `180_enum_methods.php` mendemonstrasikan implementasi terisolasi dari `Method pada enumerations` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 180_enum_methods.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Method pada enumerations`.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Method pada enumerations](output/180_enum_methods.png)

**Lokasi Source Code:** [180_enum_methods.php](180_enum_methods.php)

---

### 181. Penggunaan attributes untuk metadata

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Penggunaan attributes untuk metadata` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Penggunaan attributes untuk metadata` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `181_php_attributes.php` mendemonstrasikan implementasi terisolasi dari `Penggunaan attributes untuk metadata` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 181_php_attributes.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Penggunaan attributes untuk metadata`.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Penggunaan attributes untuk metadata](output/181_php_attributes.png)

**Lokasi Source Code:** [181_php_attributes.php](181_php_attributes.php)

---

### 182. Readonly classes

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Readonly classes` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Readonly classes` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `182_readonly_classes.php` mendemonstrasikan implementasi terisolasi dari `Readonly classes` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 182_readonly_classes.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Readonly classes`.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Readonly classes](output/182_readonly_classes.png)

**Lokasi Source Code:** [182_readonly_classes.php](182_readonly_classes.php)

---

### 183. Property hooks pada PHP 8.4+

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Property hooks pada PHP 8.4+` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Property hooks pada PHP 8.4+` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `183_property_hooks.php` mendemonstrasikan implementasi terisolasi dari `Property hooks pada PHP 8.4+` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 183_property_hooks.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Property hooks pada PHP 8.4+`.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Property hooks pada PHP 8.4+](output/183_property_hooks.png)

**Lokasi Source Code:** [183_property_hooks.php](183_property_hooks.php)

---

### 184. Asymmetric property visibility pada PHP 8.4+

**Tujuan Pembelajaran:**
Memahami dan menguasai konsep `Asymmetric property visibility pada PHP 8.4+` dalam bahasa pemrograman PHP serta mampu menerapkannya dalam kode program mandiri.

**Konsep Utama:**
Konsep dasar `Asymmetric property visibility pada PHP 8.4+` mencakup mekanisme kerja, sintaks resmi bahasa PHP, serta peran edukatifnya dalam pengembangan perangkat lunak.

**Penjelasan Source Code:**
Berkas `184_asymmetric_visibility.php` mendemonstrasikan implementasi terisolasi dari `Asymmetric property visibility pada PHP 8.4+` dengan komentar penjelasan edukatif berbahasa Indonesia pada setiap bagian kode penting, tanpa overengineering.

**Cara Menjalankan:**
```bash
php 184_asymmetric_visibility.php
```

**Hasil yang Diharapkan:**
Program menampilkan demonstrasi komputasi dan output teks yang valid sesuai topik `Asymmetric property visibility pada PHP 8.4+`.

**Screenshot Hasil Eksekusi:**
![Hasil Eksekusi Asymmetric property visibility pada PHP 8.4+](output/184_asymmetric_visibility.png)

**Lokasi Source Code:** [184_asymmetric_visibility.php](184_asymmetric_visibility.php)

---

## Ringkasan Modul
Modul 11 (Fitur Lanjutan dan Standard Library PHP) memberikan pemahaman menyeluruh mengenai datetime, datetimeimmutable, timezone handling, fungsi matematika, random number generator, csprng, json encode/decode, spl iterators, generators & yield, weak references, fibers, enum methods, attributes metadata, readonly classes, property hooks, dan asymmetric visibility. Seluruh 20 submodul dirancang terpisah dan mandiri sehingga mudah dipelajari langkah demi langkah.

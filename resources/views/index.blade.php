@extends('layouts.mainlayout')

@section('title', 'Caffein Line | Beranda')

@section('container-content')
    <div class="content">
        <a href="#" class="previous round">&#8249;</a>
        <div class="imgSlider">
            <ul>
                <li class="slide">
                    <img src="image/EsKrimBrownies.jpeg" alt="Es Krim Brownies">
                    <p><br>Nah, ini ada menu baru dari Caffein Line, namanya ChoIce (Choco Ice) buat kalian yang suka banget perpaduan coklat dan <i>ice cream</i> 😋</p>
                </li>
                <li class="slide">
                    <img class="two" src="image/diskon.jpeg" alt="Diskon">
                    <p><br>Setiap weekdays (Senin s/d Jumat), harga minuman kita hanya 15 ribu saja lho! Jangan sampai ketinggalan ya! Jadi, tunggu apa lagi? Ayo beli sekarang :)</p>
                </li>
                <li class="slide">
                    <img src="image/Recruit.jpeg" alt="Rekrut">
                    <p><br>Caffein Line sedang merekrut <i>Barista</i> dan <i>Cleaning Service</i>. Bagi yang ingin bergabung dengan kami, silakan hubungi nomor Pak Aldi selaku <i>Human Resources Manager</i> yang tertera di laman Contact Us.</p>
                </li>
            </ul>
        </div>
        <a href="#" class="next round">&#8250;</a>
    </div>
@endsection

@section('content')
    <div id="about">
        <div class="choose">
            <div class="chooseText">
                <h1>Mengapa memilih kami?</h1>
                <p><br>Haii teman-teman semua! Apa kabarnya, kita dari Caffein Line mau kasi tau kalian nih kenapa kalian harus banget cobain kopi dan juga desserts dari kita, karena mulai dari bahan-bahan pilihan dan juga pengolahan yang secara teratur membuat rasa kopi kita alami banget, pokoknya beda deh sama kopi-kopi yang lain, terus buat kantong pas banget nih sama kantong anak-anak kuliahan banget, karena kopi kita mulai dari 15k-an aja lho! Dan untuk dessert kita mulai dari 25k-an ajaa. Terlebih lagi, ongkos kirim kita <b style="color:chartreuse;">gratis</b> terlepas dari jumlah transaksi yang dilakukan di website. Jadi tunggu apalagi friends, langsung aja datang ke Caffein Line bareng temen-temen kamu.</p>
            </div>
            <img src="image/Cafe3.jpeg" alt="Cafe 3" width="30%" height="30%">
        </div>

        <div class="news">
            <img src="image/Cafe4.jpeg" alt="Cafe 4" width="30%" height="30%">
            <div class="newsText">
                <h1>Bagaimana cara Caffein Line dalam menghadapi pandemi covid-19?</h1>
                <p><br>Bagi Caffein Line, kepuasan customer adalah yang terutama. Oleh sebab itu, Caffein Line sangat teratur dalam melakukan protokol kesehatan mulai dari Barista dan semua stuff di Caffein Line diwajibkan untuk:
                <br>
                1. Melakukan pengecekan suhu sebelum memulai kerja, apabila ada staff memiliki suhu tubuh diatas 37,5°C tidak diizinkan untuk bekerja.<br>
                2. Melakukan pembersihan pada Caffein Line setiap 3 jam sekali.<br>
                3.Mencuci tangan dan menggunakan hand sanitizer setiap 30 menit sekali.<br>
                4.Menggunakan masker wajah dan sarung tangan non-medis.</p>
            </div>
        </div>

        <div class="mission">
            <h1 class="heading" style="margin-top: 5%;">Misi Kami</h1>
            <p><br>Misi dari Caffein Line adalah menjadi salah satu merek kopi yang sangat dikenal masyarakat dengan rasa dan juga mutu kopi yang sangat berkualitas, dimulai dari Indonesia menuju ke seluruh negara bagian Asia Tenggara<br><br></p>
        </div>

        <div class="about-us" style="margin-top: 5%;">
            <h1 class="heading">Tentang Kami</h1>
            <p><br>Caffein Line merupakan salah satu merek kopi dengan pertumbuhan tercepat di Indonesia pada 2018.<br><br>Pada Maret 2018, Caffein Line menyentuh angka 1 juta cup pertama untuk Hazelnut Latte, hal itu merupakan suatu pencapaian yang belum pernah ada sebelumnya, oleh karena itu Caffein Line dapat dikatakan salah satu coffee shop dengan pertumbuhan tercepat pada saat itu.<br><br><br><br></p>
        </div>
    </div>

    <div class="about2">
        <div class="choose">
            <div class="chooseText">
                <h1>Karyawan Kami</h1>
                <p>Team dari Caffein Line sendiri sudah mencapai angka 1500 pada awal tahun 2021 ini.</p>
            </div>
            <img src="image/employee.jpeg" alt="Karyawan" width="30%" height="30%">
        </div>

        <div class="news">
            <img src="image/footprint.jpeg" alt="Jejak kaki" width="30%" height="30%">
            <div class="newsText">
                <h1>Jejak kaki kami</h1>
                <p><br>Caffein Line sendiri sudah memiliki lebih dari 270 cabang di Indonesia.</p>
            </div>
        </div>

        <div style="margin-left: 5%;">
            <img src="image/award.jpeg" alt="" width="20%" height="20%">
        </div>
    </div>
@endsection

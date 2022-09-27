@extends('layouts.mainlayout')

@section('title', 'Caffein Line | Menu Beverage')

@section('container-content')
    <div class="bevMenu">
        <div class="bevMenu1">
            <img src="image/KopiCokelat2.jpeg" alt="Kopi Cokelat2" width="30%">
            <div class="bevMenu1Text">
                <h1>Minuman dan makanan handmade yang enak</h1>
                <p><br>Kami memilih bahan baku yang berkualitas dan tenaga kerja yang handal sehingga Anda dapat menikmati waktu bersantai sambil menyeruput kopi dan memakan makanan kami. Tidak hanya itu, biaya pengiriman <b style="color:chartreuse;">gratis</b> terlepas dari jumlah transaksi yang dilakukan.</p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="bevMenu2">
        <div class="bevMenu2Text">
            <h1>Menu Kopi Caffein Line</h1>
            <p><br>Menu Kopi yang lezat dan diambil dari berbagai penghujung dunia. Kualitas terjamin.<br><br><br></p>
            <a href="/kopi">Explore Menu</a>
        </div>
        <img src="image/KopiHati.jpeg" alt="Kopi Hati" width="30%">
    </div>

    <div class="bevMenu3">
        <img src="image/Teh.jpeg" alt="Teh" width="30%">
        <div class="bevMenu3Text">
            <h1>Menu Teh Caffein Line</h1>
            <p><br>Teh yang lezat dan hangat akan membuat harimu menjadi lebih indah.<br><br><br></p>
            <a href="/tea">Explore Menu</a>
        </div>
    </div>
@endsection

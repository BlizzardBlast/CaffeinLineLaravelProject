@extends('layouts.mainlayout')

@section('title', 'Caffein Line | Menu Desserts')

@section('container-content')
    <div class="menu">
        <img src="image/MenuBev.jpeg" alt="Menu Dessert">
    </div>
@endsection

@section('content')
    <div class="desc">
        <h1>Menu Description</h1>
        <div class="row">
            <div class="col">
                <h3>Turkish Dessert Box</h3>
                <p>Buat kalian yang belum tau dessert box itu apa, jadi dessert box merupakan makanan penutup (cake) yang ada di dalam kotak makanan. Berbeda dengan dessert biasa yang disajikan di piring, dessert box bisa langsung dimakan dari tempatnya.</p>
            </div>
            <div class="col">
                <h3>Choice (Choco Ice)</h3>
                <p>Buat kalian yang suka banget sama yang seger-seger perpaduan sama manisnya cokelat, pas banget nih Caffein Line ada Choice (Choco Ice).</p>
            </div>
            <div class="col">
                <h3>Fake Oreo Cookie</h3>
                <p>Pasti kalian bingung kan dari namanya, jadi fake oreo cookie itu sebernya perpaduan dari cookie yang kita buat semirip mungkin sama oreo dan topping tengahnya itu eskrim vanila ala Caffein Line.</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3>Red Velvet Cookie</h3>
                <p>Buat kalian yang pengen rasain gimana rasanya red velvet terenak di dunia, langsung aja kuy dateng ke Caffein Line, dijamin enak dan pastinya masuk kantong harganya :-).</p>
            </div>
            <div class="col">
                <h3 style="padding-top: 20%;">Nantikan produk kami selanjutnya ya :)</h3>
                <p style="padding-bottom: 20%;">Oh iya, tau ga sih, biaya pengiriman <b style="color:red;">gratis</b> terlepas dari jumlah transaksi yang dilakukan lho.</p>
            </div>
            <div style="width: 30%;">
            </div>
        </div>
    </div>
@endsection

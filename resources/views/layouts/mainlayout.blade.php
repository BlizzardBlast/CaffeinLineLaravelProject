<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/logic.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="container">
        <div class="header">
            <a href="/"><img src="image/Logo.jpeg" alt="Logo"></a>
            <div class="nav" id="links">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="/">Beranda</a></li>
                    <li>
                        <a href="/bevmenu">Menu Beverages</a>
                        <ul>
                            <li><a href="/tea">Menu Teh</a></li>
                            <li><a href="/kopi">Menu Kopi</a></li>
                        </ul>
                    </li>
                    <li><a href="/makanan">Menu Desserts</a></li>
                    <li><a href="/contact">Hubungi Kami</a></li>
                    <li><a href="/payment">Pembayaran</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="openMenu()"></i>
            <script>
                var links = document.getElementById("links");

                function myFunction(x) {
                    if (x.matches) {
                        links.style.display = "block";
                    }
                    $.ajax({
                        complete: function() {
                            setTimeout(myFunction(x), 1000);
                        }
                    });
                }

                var x = window.matchMedia("(max-width: 700px)")
                myFunction(x)
                x.addListener(myFunction)

                function openMenu() {
                    links.style.right = "0";
                    links.style.display = "block";
                }

                function hideMenu() {
                    links.style.right = "-200px";
                    links.style.display = "none";
                }
            </script>
        </div>

        @yield('container-content')
    </div>

    @yield('content')
    <div class="footer">
        <p>&copy; 2021 PT Caffein Line. All rights reserved.</p>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <header class="wrapper">
        <div class="header">
            <div class="logo">
                <img src="{{ asset('image/logo.png') }}" alt="logo" />
            </div>
            <nav class="navigation">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="#">Galeri</a></li>
                </ul>
            </nav>
            <div class="user-profile">
                <a href="#">
                    <img src="{{ asset('image/user_1144760.png') }}" />
                    <span>Username</span>
                </a>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="container">
            <div class="content-row-1">
                <div class="container center-content"> 
                <!-- Tambahkan class 'center-content' di sini -->
                    <h1 class="display-4">KALIMANTAN ECO-EXPLORATIONS</h1>
                    <p class="lead">"Penjelajahan Ekologi yang Mengungkap Masa Depan: Mengintip Lebih dalam bersama Kalimantan Eco-Explorations."</p>
                </div>
            </div>
        </div>
    </div>
    <div class="content-row-2">
        <div class="row">
            <div class="row-1-column-1">
                <h4>ARTICLE</h4>
                <h1>Any News Related to National Park?</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse temporibus nemo aspernatur, asperiores labore sit fuga! Laudantium obcaecati tempora aliquid. Quis aspernatur perferendis fugiat velit minima sunt corporis placeat asperiores!</p>
            </div>
            <div class="row-1-column-2">
            <div><h1></h1></div>
            </div>
        </div>
        <div class="row">
            <div class="row-2-column-1">
                <h1></h1>
            </div>
            <div class="row-2-column-2">
                <h4>ACCOMMODATION</h4>
                <h1>How to Move Around?</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse temporibus nemo aspernatur, asperiores labore sit fuga! Laudantium obcaecati tempora aliquid. Quis aspernatur perferendis fugiat velit minima sunt corporis placeat asperiores!</p>
            </div>
        </div>
        <div class="row">
            <div class="row-3-column-1">
                <h4>ROUTE</h4>
                <h1>Which Way Can We Reach the National Park?</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse temporibus nemo aspernatur, asperiores labore sit fuga! Laudantium obcaecati tempora aliquid. Quis aspernatur perferendis fugiat velit minima sunt corporis placeat asperiores!</p>
            </div>
            <div class="row-3-column-2">
                <h1></h1>
            </div>
        </div>
        <div class="row">
            <div class="row-4-column-1">
                <h1>1</h1>
            </div>
            <div class="row-4-column-1">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, inventore? Ut commodi vitae accusamus asperiores quam, facilis ratione, quidem veritatis obcaecati amet velit quasi perspiciatis impedit illum harum fugiat earum.</p>
            </div>
        </div>
    </div>
    <div class="content-row-3">
        <div class="row">
            <div class="judul">
                <div></div><h1>About KALIMANTAN ECO-EXPLORATION</h1>
                <p>Kalimantan Eco-Explorations adalah website yang dirancang untuk mengedukasi masyarakat tentang pentingnya menjaga lingkungan di Kalimantan. Website ini menyediakan informasi, fakta, dan cerita tentang bagaimana masyarakat dapat membantu melestarikan lingkungan. Pendekatan ini menggunakan fakta, permainan, dan cerita untuk membantu masyarakat memahami pentingnya melindungi lingkungan dan terlibat di dalamnya. Website ini bertujuan untuk menginspirasi generasi-generasi dalam menjaga lingkungan dan meningkatkan kesadaran lingkungan di Kalimantan.</p>                
            </div>

        </div>
</div>
<footer>
    <div class="container">
        <div class="row-1">
            <div class="col-md-12 text-center">
                <h2>About Us</h2>
                <p>Ini adalah tim yang berdedikasi untuk Kalimantan Eco-Explorations.</p>
            </div>
        </div>
        <div class="row-2">
            <div class="col-md-3 text-center">
                <img src="{{ asset('image/member1.jpg') }}" alt="Member 1" class="img-thumbnail">
                <h3>Nama Member 1</h3>
                <p>NIM: 123456</p>
                <p>Profesi: Profesi Member 1</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{ asset('image/member2.jpg') }}" alt="Member 2" class="img-thumbnail">
                <h3>Nama Member 2</h3>
                <p>NIM: 654321</p>
                <p>Profesi: Profesi Member 2</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{ asset('image/member3.jpg') }}" alt="Member 3" class="img-thumbnail">
                <h3>Nama Member 3</h3>
                <p>NIM: 987654</p>
                <p>Profesi: Profesi Member 3</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{ asset('image/member4.jpg') }}" alt="Member 4" class="img-thumbnail">
                <h3>Nama Member 4</h3>
                <p>NIM: 456789</p>
                <p>Profesi: Profesi Member 4</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

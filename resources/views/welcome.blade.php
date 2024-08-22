<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perubahan Wujud Benda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    *{
    text-decoration: none;
    margin: 0;
    padding: 0;
}

body{
    margin: 0;
    padding: 0;
    font-family: 'Lora', sans-serif;
}

.wrapper{
    width: 1100px;
    margin: auto;
    position: relative;
}

.logo a {
    font-size: 50px;
    font-weight: bold;
    float: left;
    font-family: 'Lora';
    color: black;
    text-decoration: none;
}

.menu{
    float: right;
    gap: 1;
}

nav{
    width: 100%;
    margin: auto;
    display: flex;
    line-height: 80px;
    position: sticky;
    position: -webkit-sticky;
    top: 0;
    background: #ffff;
    ;
    z-index: 1;
    border-bottom: 1px solid black;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

nav ul li{
    float: left;
}

nav ul li a{
    color: black;
    font-weight: bold;
    text-align: center;
    padding: 0px 16px 0px 16px;
    text-decoration: none;
}

nav ul li a:hover{
    text-decoration: underline;
}
.Landing{
    margin-right: 0;
    padding-right: 0;
}
section{
    margin: auto;
    display: flex;
    margin-top: 50px;
    margin-bottom: 50px;
}
.kolom{
    margin-top: 150px;
    margin-bottom: 50px;
}
.d{
    font-weight: 500;
    font-size: 30px;
}
h2{
    font-family: 'Lora', sans-serif;
    font-weight: 800;
    font-size: 40px;
    margin-bottom: 20px;
    color: #2C2822;
    width: 100%;
    line-height: 50px;
}
h1{
    font-family: 'Lora', sans-serif;
    font-weight: 800;
    font-size: 40px;
    margin-bottom: 20px;
    color: #2C2822;
    width: 100%;
    line-height: 50px;
    text-align: center;
}
.kolom2{
    margin-top: 50px;
    margin-bottom: 50px;
    padding: 50px;
    background-color: #DCC9A9;
}
.d2{
    font-family: 'Lora', sans-serif;
    font-weight: 800;
    font-size: 40px;
    margin-bottom: 20px;
    color: #F8BC28;
    line-height: 50px;
    text-align: center;
}
section .container{
    margin: 100px;
}
section .cards{
    display: flex;
}
section .cards .text-card{
    background: #DEEDF0;
    margin: 20px;
    padding: 20px;
}
section .cards .text-card h3{
    font-family: sans-serif;
    text-align: center;
    margin-bottom: 10px;
    text-decoration: none;
}
#profile {
    background: #DCC9A9;
    padding: 50px 0px 50px 0px;
}
.footer{
    width: 100%;
    position: relative;
    display: flex;
    flex-wrap: wrap;
    margin: auto;
}
.footer-section{
    width: 20%;
    margin: 0 auto;
    padding-left: 50px;
}
h3 {
    font-weight: 800;
    font-size: 30px;
    margin-bottom: 20px;
    width: 100%;
    line-height: 50px;
    text-decoration: underline;
}
.p{
    list-style-type: none;
    line-height: 30px;
    font-family: sans-serif;
    font-size: 20px;
}
.j{
    font-weight: 300;
    font-size: 30px;
    margin: 0;
}
.new{
    background-color: #DCC9A9;
    align-items: center;
    margin-bottom: 70px;
}
.product{
    margin: auto;
    position: relative;
    width: 1100px;
    margin-bottom: 50px;
}
.have{
    margin: auto;
    position: relative;
    width: 1100px;
    margin-bottom: 50px;
}
</style>
<body>
    <!--navbar-->
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=" ">Latte Lounge</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#Home">Home</a></li>
                    <li><a href="#About">About Us</a></li>
                    <li><a href="#Menu">Menu</a></li>
                    <li><a href="#New Menu">New Menu</a></li>
                    <li><a href="#Contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="Landing">
        <img src="https://s6.imgcdn.dev/etnwn.png" alt="etnwn.png">
    </div>
        <!--about-->
        <section id="About" class="kolom2">
            <div>
                <h2>About Us</h2>
                <p class="d">Welcome to Latte Lounge, a place where quality coffee meets a cozy atmosphere. We are here to bring you an exquisite coffee experience in a relaxed and friendly atmosphere. Each cup of our coffee is served with dedication, using carefully selected beans to bring out the best flavors.</p>
            </div>
            <img src="https://s6.imgcdn.dev/etsTg.png" alt="etsTg.png">
        </section>
        <!--have-->
        <h1>WHAT WE HAVE</h1>
        <section class="have">
            <div class="card" style="width: 18rem; background-color: #DAD0CF;">
                <img src="https://s6.imgcdn.dev/etBUT.jpg" alt="etBUT.jpg" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Type of Milk</h4>
                </div>
            </div>
            <div class="card" style="width: 18rem; background-color: #DAD0CF;">
                <img src="https://s6.imgcdn.dev/etGVD.jpg" alt="etGVD.jpg" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Mug</h4>
                </div>
            </div>
            <div class="card" style="width: 18rem; background-color: #DAD0CF;">
                <img src="https://s6.imgcdn.dev/etPnq.jpg" alt="etPnq.jpg" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Pastry & Bakery</h4>
                </div>
            </div>
            <div class="card" style="width: 18rem; background-color: #DAD0CF;">
                <img src="https://s6.imgcdn.dev/eta7a.jpg" alt="eta7a.jpg" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Type of Coffee</h4>
                </div>
            </div>
        </section>
        <!--Our New Menu-->
        <section id="New Menu" class="new">
            <img src="https://s6.imgcdn.dev/eti3O.png" alt="eti3O.png">
            <div class="kolom2">
                <h2 class="New">Our New Menu</h2>
                <p class="d">Pumpkin Spice Latte is a coffee drink made with a blend of traditional fall spice flavors (cinnamon, nutmeg, and cloves), steamed milk, espresso, and usually sugar, topped with whipped cream and pumpkin pie spice.</p>
            </div>
        </section>
        <!--menu-->
        <h1>OUR MENU</h1>
    <section class="product">
        @foreach($menus as $menu)
            <div class="card" style="width: 18rem; background-color: #DAD0CF;">
                <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $menu->name }}</h5>
                    <p class="card-text">${{ number_format($menu->price, 2) }}</p>
                </div>
            </div>
        @endforeach
    </section>
    <div id="profile">
        <div class="footer">
            <div class="footer-section">
                <h3 class="j">MENU</h3>
                <p>
                    <ul class="p">
                        <li><a href="#Home">Home</a></li>
                        <li><a href="#About">About Us</a></li>
                        <li><a href="#Menu">Menu</a></li>
                        <li><a href="#New Menu">New Menu</a></li>
                        <li><a href="#Contact">Contact</a></li>
                    </ul>
                </p>
            </div>
            <div class="footer-section">
                <h3 class="j">PRODUCT</h3>
                <p>
                    <ul class="p">
                        <li>Coffe</li>
                        <li>Pastry & Bakery</li>
                        <li>Mug</li>
                        <li>Milk</li>
                    </ul>
                </p>
            </div>
            <div class="footer-section">
                <h3 class="j">OUR TEAMS</h3>
                <p>
                    <ul class="p">
                        <li>Audiva Shavina</li>
                        <li>Muhammad Fathur R.</li>
                        <li>Nadhifah Slavina</li>
                        <li>Nashifa Bayana Laila</li>
                        <li>Richard Alenski Vicensa</li>
                        <li>Yanas Prabu Aliif</li>
                    </ul>
                </p>
            </div>
            <div class="footer-section">
                <h3 class="j">SOSIAL</h3>
                <p>
                    <ul class="p">
                        <li><a href=''>@lattelounge</a></li>
                        <li><a href=''>@lattelounge</a></li>
                        <li><a href=''>lattelounge27@gmail.com</a></li>
                    </ul>
                </p>
            </div>

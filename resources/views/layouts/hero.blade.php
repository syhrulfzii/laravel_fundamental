<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
        /* Custom CSS */
        .hero {
            background-color: #ffffff;
            padding: 100px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Mengisi tinggi layar penuh */
        }
        .hero-text {
            text-align: left;
            margin-bottom: 30px;
        }
        .hero img {
            max-width: 100%;
            height: auto;
        }
        .hero .star-img {
            width: 25px; /* Sesuaikan lebar dengan teks */
            height: auto; /* Sesuaikan tinggi dengan teks */
            vertical-align: middle; /* Agar bintang berada di tengah vertikal dengan teks */
        }
    </style>
</head>
<body>
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="hero-text">
                        <h5>Experience the Luxurious Taste of</h5>
                        <h1 class="display-4"><span><img src="{{ asset('storage/bintang.png') }}" alt="Image" class="star-img"></span>Red Velvet Latte<span><img src="{{ asset('storage/bintang.png') }}" alt="Image" class="star-img"></span></h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo assumenda nostrum necessitatibus vitae cupiditate magnam pariatur quas suscipit tempora provident rerum illo aliquid est ducimus doloremque possimus nam, delectus sunt.</p>
                        <a href="#" class="btn btn-primary btn-lg">Buy Now!</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('storage/latte.jpg') }}" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
</body>
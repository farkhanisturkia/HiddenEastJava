<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hidden East Java</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/logo.png">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="banner">
        <img class="layer-1" src="image/parallax-7.png">
        <img class="layer-2" src="image/parallax-6.png">
        <img class="layer-3" src="image/parallax-5.png">
        <img class="layer-4" src="image/parallax-4.png">
        <img class="layer-5" src="image/parallax-3.png">
        <img class="layer-7" src="image/parallax-2.png">
        <img class="layer-8" src="image/parallax-1.png">
        <div class="layer-6">
            <h1>Hidden <label>East Java</label></h1>
            <a href="#start">Get Started</a>
        </div>
    </div>
    <div class="content" id="start">
        <h1>Search</h1>
        <p>Kami memberikan refrensi bagi anda yang ingin bepergian ke jawa timur</p>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search City" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <div class="container">
            <div class="row">
                @foreach ($cities as $kota)   
                    <div class="col-3">
                        <a href="#">
                            <div class="card">
                                <img src="{{ $kota->image }}" class="card-img-top">
                                <div class="card-body">
                                <h5 class="card-title">{{ $kota->nama }}</h5>
                                </div>
                            </div>
                        </a> 
                    </div>
                @endforeach
            </div>
        </div>
        
        
          {{-- <table>
            <thead>
                <tr>
                    <th>no</th>
                    <th>kota</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cities as $kota)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kota->nama }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table> --}}
    </div>

    <section class="footer">
        <div class="footer-content">
            {{-- <img src="image/logo.png"> --}}
            <h4>Hidden <label>East Java</label></h4>
            <p>Membantumu memberikan refrensi destinasi wisata jawa timur</p>
            <div class="icons">
                <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a target="_blank" 
                    href="https://www.instagram.com/heyy.fa___?igsh=MTIxaXQ2YWIzbnVmbQ==">
                    <i class='bx bxl-instagram-alt'></i>
                </a>
                {{-- <a href="#"><i class='bx bxl-youtube'></i></a> --}}
                <a target="_blank"
                    href="https://www.linkedin.com/in/abdurrohman-farkhan-syamaidzar-26b1701b7?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                    <i class='bx bxl-linkedin-square'></i>
                </a>
            </div>
        </div>
        <div class="footer-content">
            <h4>Project</h4>
            <li><a href="#">Hidden East Java | 2023</a></li>
            <li><a href="#">Project B | 20XX</a></li>
            <li><a href="#">Project C | 20XX</a></li>
            <li><a href="#">Project D | 20XX</a></li>
        </div>
        <div class="footer-content">
            <h4>Company</h4>
            <li><label>Heyyfa Dev</label></li>
            <li><label>Freelance Since 2021</label></li>
            <li><label>+62 877-2003-9818</label></li>
            <li><label>RMS XI/8A | Surabaya</label></li>
        </div>
        <div class="footer-content">
            <h4>About Me</h4>
            <li><label>Abdurrohman Farkhan S</label></li>
            <li><label>Abdurrohmanfarkhan@gmail.com</label></li>
            <li><label>+62 877-2003-9818</label></li>
            <li><label>RMS XI/8A | Surabaya</label></li>
        </div>
    </section>










    <script type="text/javascript">
        let layer_1 = document.querySelector('.layer-1');
        let layer_2 = document.querySelector('.layer-2');
        let layer_3 = document.querySelector('.layer-3');
        let layer_4 = document.querySelector('.layer-4');
        let layer_5 = document.querySelector('.layer-5');
        let layer_6 = document.querySelector('.layer-6');
        let layer_7 = document.querySelector('.layer-7');

        window.onscroll = function() {
            let Y = window.scrollY;

            layer_1.style.transform = 'translateY(' + Y / 1.5 + 'px)';
            layer_2.style.transform = 'translateY(' + Y / 1 + 'px)';
            layer_3.style.transform = 'translateY(' + Y / 1.5 + 'px)';
            layer_4.style.transform = 'translateY(' + Y / 2 + 'px)';
            layer_5.style.transform = 'translateY(' + Y / 3 + 'px)';
            layer_6.style.transform = 'translateY(' + Y / 5 + 'px)';
            layer_7.style.transform = 'translateY(' + Y / 3 + 'px)';
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>

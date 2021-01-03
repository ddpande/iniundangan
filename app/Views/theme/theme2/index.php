<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $tittle; ?>
    </title>
</head>

<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.1/leaflet.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.1/leaflet.js"></script>

<!-- Animate.css -->
<link rel="stylesheet" href="../template2/css/animate.css">

<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="../template2/css/icomoon.css">
<!-- Bootstrap  -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->
<!-- Superfish -->
<link rel="stylesheet" href="../template2/css/superfish.css">
<!-- Magnific Popup -->
<link rel="stylesheet" href="../template2/css/magnific-popup.css">

<link rel="stylesheet" href="../template2/css/style.css">



<body>
    <audio id="myAudio" autoplay loop>
        <source src="https://www.hiinvitation.com/template/1/music/Train%20-%20Marry%20Me.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <script>
        var on = document.getElementById("on");
        var off = document.getElementById("off");
        var x = document.getElementById("myAudio");

        function playAudio() {
            x.play();
            document.getElementById("on").style.visibility = "visible";
            document.getElementById("off").style.visibility = "hidden";
        }

        function pauseAudio() {
            x.pause();
            document.getElementById("off").style.visibility = "visible";
            document.getElementById("on").style.visibility = "hidden";
        }
    </script>

    <script>
        $(document).ready(function() {
            $("#myModal").modal('show');
        });
    </script>

    <!-- Modal -->
    <div class="modal fade animate-box" id="myModal" onclick="playAudio()">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">TO : <?= $tittle; ?></h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <h2>You have Wedding Invitation</h2>
                    <h1>Jake & Rose</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" style="width: 100%;" class="btn btn-secondary" data-bs-dismiss="modal" onclick="playAudio()">Close</button>

                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-wrapper">
        <img src="https://www.hiinvitation.com/template/1/images/off.png" alt="soung OFF" class="navbar" onclick="playAudio()" id="off" height="50px" />
        <img src="https://www.hiinvitation.com/template/1/images/on.png" alt="soung ON" class="navbar" onclick="pauseAudio()" id="on" style="visibility: hidden;" height="50px" />
        <div id="fh5co-page">
            <div class="fh5co-hero" data-section="home">
                <div class="fh5co-overlay"></div>


                <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(../template2/images/img_bg_2.jpg);">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="container">
                                <div class="col-md-10 offset-md-1">
                                    <div class="animate-box">
                                        <h1>The Wedding</h1>
                                        <h2>Jack &amp; Rose</h2>
                                        <p><span>28.12.2017</span></p>
                                        <img src="../template2/images/ukiran_2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-couple" class="fh5co-section-gray">
                <div class="container">
                    <div class="col-md-12 nopadding tile ">
                        <h2 class="amp-center overlay"><i class="icon-heart"></i></h2>
                    </div>


                    <div class="row animate-box">
                        <div class="col-md-6 text-center offset-md-3">

                            <h1>Om Swastiastu</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo id ex et ea fugiat neque quibusdam repudiandae dicta cupiditate porro at quisquam soluta atque dolor aperiam quasi, expedita ratione architecto.</p>
                        </div>
                    </div>


                    <div class="container">
                        <div class="row animate-box">
                            <div class="col-md-3" style="text-align: right;">
                                <p>
                                    <h3>Jack Wood</h3>
                                    <h4>Putra Ketiga dari pasangan</br>
                                        Bapak I Nengah Mardika</br>
                                        &</br>
                                        Ibu Ni Komang Darmi</br>
                                        Denpasar</h4>
                                </p>
                            </div>
                            <div class="col-md-2 my-auto">
                                <img src="../template2/images/bride.jpg" class="img-fluid" alt=" Male">
                            </div>
                            <div class="col-md-2 text-center my-auto">
                                <h3><i class="icon-heart"></i></h3>
                            </div>
                            <div class="col-md-2 my-auto">
                                <img src="../template2/images/bride.jpg" class="img-fluid" alt="Female">
                            </div>
                            <div class="col-md-3">
                                <p>
                                    <h3>Jack Wood</h3>
                                    <h4>Putra Ketiga dari pasangan</br>
                                        Bapak I Nengah Mardika</br>
                                        &</br>
                                        Ibu Ni Komang Darmi</br>
                                        Denpasar</h4>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 offset-md-3 text-center animate-box">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut commodi, eos numquam eveniet explicabo, omnis voluptatibus amet non excepturi iure nesciunt totam, iusto tempore atque aliquid accusantium quisquam hic nemo?</p>
                    </div>

                </div>

            </div>

            <div id="fh5co-countdown">
                <div class="row">

                    <div class="col-md-8 offset-md-2 text-center animate-box">
                        <p class="countdown">
                            <span id="days"></span>
                            <span id="hours"></span>
                            <span id="minutes"></span>
                            <span id="seconds"></span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="fh5co-gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2 text-center heading-section animate-box">
                            <img src="../template2/images/ukiran_1.png" style="width: 5%;" alt="">

                            <h2>Wedding Gallery</h2>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="../template2/images/gallery-1.jpg"><img src="../template2/images/gallery-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="../template2/images/gallery-7.jpg"><img src="../template2/images/gallery-7.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="../template2/images/gallery-6.jpg"><img src="../template2/images/gallery-6.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="../template2/images/gallery-2.jpg"><img src="../template2/images/gallery-2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="../template2/images/gallery-5.jpg"><img src="../template2/images/gallery-5.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="../template2/images/gallery-3.jpg"><img src="../template2/images/gallery-3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="../template2/images/gallery-4.jpg"><img src="../template2/images/gallery-4.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="../template2/images/gallery-1.jpg"><img src="../template2/images/gallery-1.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="../template2/images/gallery-7.jpg"><img src="../template2/images/gallery-7.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="../template2/images/gallery-6.jpg"><img src="../template2/images/gallery-6.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="../template2/images/gallery-2.jpg"><img src="../template2/images/gallery-2.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="../template2/images/gallery-5.jpg"><img src="../template2/images/gallery-5.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="../template2/images/gallery-3.jpg"><img src="../template2/images/gallery-3.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                            <div class="gallery animate-box">
                                <a class="gallery-img image-popup" href="../template2/images/gallery-4.jpg"><img src="../template2/images/gallery-4.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            </div>
                        </div>

                        <!-- Video -->


                    </div>
                </div>
                <video id="video-wedding" style="width:100%;" controls="controls" autoplay="autoplay" loop="loop" preload="auto" title="Angga &amp; Inten" muted>
                    <source src="../template2/images/video1.mp4" type="video/mp4">
                    <source src="../template2/images/video1.ogg" type="video/ogg">
                    Your browser does not support the video.
                </video>
                <script>
                    $(document).ready(function() {
                        $("#video-wedding").muted = false;
                    });
                </script>
            </div>

            <div class="fh5co-when-where">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1 heading-section text-center animate-box">
                            <img src="../template2/images/ukiran_1.png" style="width: 5%;" alt="">
                            <h2>Location</h2>

                            <!-- <a href="#" target="">
                            <div id="mapsss" class="fh5co-map" style="height: 500px; margin-top: 120px; margin-bottom: 120px;"></div>
                            </a> -->

                            <div id="map"></div>
                            <a href="https://www.google.com/maps/place/Bali+Buda+Kerobokan/@-8.6487938,115.1613121,18z/data=!4m8!1m2!2m1!1sbali+buda!3m4!1s0x0:0x2c197bef5857208e!8m2!3d-8.6485822!4d115.1616204" target="_blank">
                                <button class="btn btn-warning" style="width: 100%; margin-top:0.6em;">Open Link</button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-started" class="fh5co-bg" style="background-image:url(../template2/images/img_bg_2.jpg);">
                <div class="overlay"></div>
                <div class="display-t">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>Are You Attending?</h2>
                                <p>Please Fill-up the form to notify you that you're attending. Thanks.</p>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" style="width: 100%;" class="btn btn-default btn-block rounded mb-1">Konfirmasi ke Cowok</button>
                                <button type="submit" style="width: 100%;" class="btn btn-default btn-block">Konfirmasi ke Cewek</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- GuestBook -->
            <div id="fh5co-started" style="background-image:url(../template2/images/img_bg_2.jpg);">
                <div class="guestbook">
                    <div class="display-t">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 offset-md-3  bg border rounded">
                                    <form class="form-inline was-validated " action="/theme2/save" method="post">
                                        <?= csrf_field(); ?>
                                        <div class="col-md-10 col-sm-4 offset-md-1 mb-5 mt-5 text-center">
                                            <h1>GuestBook</h1>
                                            <div class="form-group bg2">
                                                <input type="hidden" class="form-control" id="tittle" name="tittle" value="<?= $tittle; ?>">
                                            </div>
                                            <div class="form-group bg2">
                                                <label for="name" class="sr-only">Name</label>
                                                <input type="name" class="form-control" id="name" name="name" placeholder="Name" required>
                                            </div>
                                            <div class="form-group bg2">
                                                <select class="form-control form-control-lg" id="status" name="status">
                                                    <option value="0">Hadir</option>
                                                    <option value="1">Tidak Hadir</option>
                                                </select>
                                            </div>
                                            <div class="form-group bg2">
                                                <label for="pesan" class="sr-only">Pesan</label>
                                                <textarea class="form-control is-invalid" id="pesan" name="pesan" placeholder="Pesan" required></textarea>
                                            </div>
                                            <?php if (session()->getFlashData('pesan')) : ?>
                                                <div class="alert alert-success" role="alert">
                                                    <?= session()->getFlashData('pesan'); ?>
                                                </div>
                                            <?php endif; ?>
                                            <button type="submit" style="width:100%" class="btn btn-default btn-block mt-5 bg2">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div id="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>Jack &amp; Rose</h2>
                            </div>
                            <div class="col-md-6 offset-md-3 text-center">
                                <p class="fh5co-social-icons">
                                    <a href="#"><i class="icon-twitter2"></i></a>
                                    <a href="#"><i class="icon-facebook2"></i></a>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                    <a href="#"><i class="icon-dribbble2"></i></a>
                                    <a href="#"><i class="icon-youtube"></i></a>
                                </p>
                                <p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
                            </div>
                        </div>
                    </div>
                </div>




            </footer>


        </div>
    </div>




    <!-- map -->
    <script>
        var l = -8.648473;
        var b = 115.161623;
        var map = L.map('map').setView([l, b], 14);
        L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=hvle3AraMWXcFUxwKeIT', {
            tileSize: 512,
            zoomOffset: -1,
            minZoom: 1,
            attribution: "\u003ca href=\"https://www.maptiler.com/copyright/\" target=\"_blank\"\u003e\u0026copy; MapTiler\u003c/a\u003e \u003ca href=\"https://www.openstreetmap.org/copyright\" target=\"_blank\"\u003e\u0026copy; OpenStreetMap contributors\u003c/a\u003e",
            crossOrigin: true
        }).addTo(map);

        var marker = L.marker([l, b]).addTo(map);
    </script>



    <!-- jQuery -->
    <script src="../template2/js/scripts.js"></script>
    <script src="../template2/js/modernizr-2.6.2.min.js"></script>



</body>

</html>
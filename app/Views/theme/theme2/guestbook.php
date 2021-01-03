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

<!-- Superfish -->
<link rel="stylesheet" href="../template2/css/superfish.css">
<!-- Magnific Popup -->
<link rel="stylesheet" href="../template2/css/magnific-popup.css">

<link rel="stylesheet" href="../template2/css/style.css">



<body>

    <div id="fh5co-guestbook" class="fh5co-section-gray">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 text-center col-md-offset-2">
                    <h1>GuestBook</h1>
                </div>
            </div>

            <div class="col-md-10 offset-md-1 text-center bg border rounded">
                <?php foreach ($gb as $g) : ?>
                    <div class="padding">
                        <h3><?= $g['nama']; ?></h3>
                        <div class="col-md-8 offset-md-2">
                            <p><?= $g['pesan']; ?></p>
                        </div>
                        <div class="col-md-12">
                            <h4><i class=" icon-heart"></i></h4>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">  
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <link rel="stylesheet" href="aset/bootstrap4.min.css">
        <link href="css/style.css" rel="stylesheet">
        <title>Diagnosa - Sistem Pakar</title>
    </head>
    <body class="bg-secondary">
        <div class="card text-black bg-primary border-dark mb-3" style="margin-top: 50px; margin-left: 200px; margin-right: 200px;">
        <h4 class="card-header text-center border-dark"><b>Pertanyaan Diagnosa</b></h4>
            <div class="card-body text-center ukuran-20">
                <form form method="post" action="diagnosa.php" enctype="multipart/form-data" role="form">
                <div class="panel-body panel-b-border ukuran-20">
                        <p>Hai, Ghifari Yusuf Abdillah (20 th)</p>
                        <p>Apakah Anda mengalami salah satu dari yang berikut?</p>
                        <div class="text-left">
                        <ul>
                        <li>Kesulitan bernafas yang parah (Bernafas dengan sangat cepat atau berbicara dalam satu kata)</li>
                        <li>Nyeri dada yang parah</li>
                        <li>Sulit untuk bangun</li>
                        <li>Merasa kebingungan</li>
                        <li>Penurunan kesadaran</li>
                        </ul>
                        </div>
                </div>
                <hr>
                    <a class='btn col-sm-2 mrg btn-lg btn-success btn-outline-dark ukuran-20' role="button" href="solusi.php"><b>Ya</b></a>
                    <a class='btn col-sm-2 mrg btn-lg btn-danger btn-outline-dark ukuran-20' role="button" href="solusi2.php"><b>Tidak<b></a>
                </form>
            </div>
        </div>
    </body>

</html>
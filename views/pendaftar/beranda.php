<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container text-center">
        <h1 class="display-4 text-monospace text-white">SELAMAT DATANG di SMA <code>&lt;Koding&gt;</code> 1</h1>
        <h4 class="text-white">Sekolah yang cocok untuk para pecinta teknologi.</h4>
        <p><a class="btn btn-primary btn-lg mt-3 rounded-pill" href="?pendaftaran" role="button">DAFTAR</a></p>
    </div>
</div>

<div class="container text-center py-5 my-5">

    <div id="countdown"></div>

</div>

<hr>

<div class="container p-3">
    <!-- Example row of columns -->
    <div class="text-center">
        <h2>Visi</h2>
        <h4>Terwujudnya akses belajar pemrograman dengan bahan belajar yang terstruktur dan gratis</h4>
    </div>
    <div class="text-center mt-5">
        <h2>Misi</h2>
        <h5>Misi SMA <code>&lt;Koding&gt;</code> 1 adalah secara berkesinambungan dan berdasarkan nilai-nilai moral
            etika, dan standar akademik yang tinggi melaksanakan: <br><br>
            1. Proses pembelajaran di di SMA <code>&lt;Koding&gt;</code> 1 agar menghasilkan lulusan dengan kompetensi akademik yang tinggi, memiliki kemampuan kreatif dan inovatif, softskill serta etika profesional yang menonjol.<br><br>
            2. Membina peserta didik unggul dalam prestasi akademis dan non-akademis di taraf nasional maupun internasional.<br><br>
            3. Membudayakan disiplin, toleransi, saling menghargai, percaya diri sehingga terbentuk sikap peserta didik yang santun dan berbudi pekerti luhur.</h5>
    </div>

</div> <!-- /container -->

<hr>

<div class="container p-3">
    <div class="row">
        <div class="col-8">
            <h4>Galeri SMEA</h4>
            <img src="../../assets/img/2.jpg" alt="" width="200">
            <img src="../../assets/img/2.jpg" alt="" width="200">
            <img src="../../assets/img/3.jpg" alt="" width="200">
        </div>
        <div class="col-4">
            <div class="card shadow m-2">
                <div class="card-body">
                    <h6>Pemilos SMA <code>&lt;Koding&gt;</code> 1 periode 2020/2021</h6>
                </div>
            </div>
            <div class="card shadow m-2">
                <div class="card-body">
                    <h6>Siswa berprestasi dapat beasiswa</h6>
                </div>
            </div>
            <div class="card shadow m-2">
                <div class="card-body">
                    <h6>Info tentang perlombaan terbaru</h6>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include "../../controller/connect.php";
$query = mysqli_query($connect, "SELECT * FROM countdown");
$data = mysqli_fetch_array($query);
$tgl = $data['tanggal'];
$tgl = date("m/d/Y", strtotime($tgl));
?>
<script type="text/javascript">
    var target = new Date("<?= $tgl ?>").getTime();

    var hari, jam, menit, detik;

    var countdown = document.getElementById("countdown");

    setInterval(function() {

        var sekarang = new Date().getTime();
        var sisa = (target - sekarang) / 1000;

        hari = parseInt(sisa / 86400);
        sisa = sisa % 86400;
        jam = parseInt(sisa / 3600);
        sisa = sisa % 3600;
        menit = parseInt(sisa / 60);
        detik = parseInt(sisa % 60);

        countdown.innerHTML = "<h1> Ayo segera daftar</h1><h1 class='d-inline'>" + hari + " hari </h1><h1 class='d-inline'>" + jam + " jam </h1><h1 class='d-inline'>" + menit + " menit </h1><h1 class='d-inline mt-5'>" + detik + " detik</h1>";
    }, 1000);
</script>
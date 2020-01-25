<?php
$value["ipAdress"] = $_SERVER["REMOTE_ADDR"];
if ($_GET["f"] == "json") {
    $value["time"]=time();
    $value["source"]="http://muaz742.com/saymyip";
    echo json_encode($value);
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="logo.ico" sizes="any" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Say My IP</title>
</head>
<body class="text-center">
<div>
    <img src="logo.svg" alt="Say My IP" class="rounded" height="150px" width="150px">
    <h1 class="display-1">Your IP Adress is</h1>
    <h3 class="display-4" id="ipAdress"><?php echo $value["ipAdress"] ?></h3>
    <button type="button" class="btn btn-secondary btn-lg" onclick="copy()">COPY IP ADRESS</button>
</div>

<footer class="footer mt-auto py-3">
    <span class="text-muted">Copyright ® muaz742.com<br>All Rights Reserverd<br>Powered by ❤</span>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

<!-- sweetalert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<!-- function of view -->
<script src="index.js?t=<? echo time(); ?>"></script>

</body>
</html>

<?php



$resultado2019 = $mysqli->query("SELECT * FROM visitas WHERE created LIKE '2019%' ");
$resultado2020 = $mysqli->query("SELECT * FROM visitas WHERE created LIKE '2020%' ");
$total2019 = mysqli_num_rows($resultado2019);
$total2020 = mysqli_num_rows($resultado2020);

$labels = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
$jan = 0;
$fev = 0;
$mar = 0;
$abr = 0;
$mai = 0;
$jun = 0;
$jul = 0;
$ago = 0;
$set = 0;
$out = 0;
$nov = 0;
$dez = 0;

while ($visitas2019 = $resultado2019->fetch_assoc()) {
    $mes = explode(' ', $visitas2019['created']);
    $mes = explode('-', $mes[0]);
    $mes = $mes[1];

    switch ($mes) {
        case '01': $jan++; break;
        case '02': $fev++; break;
        case '03': $mar++; break;
        case '04': $abr++; break;
        case '05': $mai++; break;
        case '06': $jun++; break;
        case '07': $jul++; break;
        case '08': $ago++; break;
        case '09': $set++; break;
        case '10': $out++; break;
        case '11': $nov++; break;
        case '12': $dez++; break;
    }
}
$meses2019 = [
    $jan,
    $fev,
    $mar,
    $abr,
    $mai,
    $jun,
    $jul,
    $ago,
    $set,
    $out,
    $nov,
    $dez
];

$meses2019 = json_encode($meses2019);


$jan = 0;
$fev = 0;
$mar = 0;
$abr = 0;
$mai = 0;
$jun = 0;
$jul = 0;
$ago = 0;
$set = 0;
$out = 0;
$nov = 0;
$dez = 0;

while ($visitas2020 = $resultado2020->fetch_assoc()) {
    $mes = explode(' ', $visitas2020['created']);
    $mes = explode('-', $mes[0]);
    $mes = $mes[1];

    switch ($mes) {
        case '01': $jan++; break;
        case '02': $fev++; break;
        case '03': $mar++; break;
        case '04': $abr++; break;
        case '05': $mai++; break;
        case '06': $jun++; break;
        case '07': $jul++; break;
        case '08': $ago++; break;
        case '09': $set++; break;
        case '10': $out++; break;
        case '11': $nov++; break;
        case '12': $dez++; break;
    }
}
$meses2020 = [
    $jan,
    $fev,
    $mar,
    $abr,
    $mai,
    $jun,
    $jul,
    $ago,
    $set,
    $out,
    $nov,
    $dez
];

$meses2020 = json_encode($meses2020);
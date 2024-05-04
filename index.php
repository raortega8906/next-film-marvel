<?php

if (isset($_GET['date'])) {
    $date = $_GET['date'];
    $API_URL = 'https://whenisthenextmcufilm.com/api?date=' . $date;
} else {
    $API_URL = 'https://whenisthenextmcufilm.com/api';
}

function get_data($url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    $data = json_decode($result, true);
    curl_close($ch);
    return $data;
}

$data = get_data($API_URL);

$days_until = $data['days_until'];
$overview = $data['overview'];
$poster_url = $data['poster_url'];
$release_date = $data['release_date'];
$title = $data['title'];

$following_production_days_until = $data['following_production']['days_until'];
$following_production_overview = $data['following_production']['overview'];
$following_production_poster_url = $data['following_production']['poster_url'];
$following_production_release_date = $data['following_production']['release_date'];
$following_production_title = $data['following_production']['title'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark"/>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
    <link rel="stylesheet" href="assets/style.css">
    <title>Próxima película de Marvel</title>
</head>
<body>

<header>
    <h2>¿Cuándo es la próxima película de MARVEL STUDIOS?</h2>
    <button onclick="window.location.href = 'http://127.0.0.1:8888/next-film-marvel/'">Ir al inicio</button>
</header>

<main>
    <section>

        <img class="poster-url" src="<?php echo $poster_url; ?>" width="250" alt="Poster de <?php echo $title; ?>">

    </section>

    <hgroup>
        <h3><?php echo $title; ?></h3>
        <p>Fecha de estreno: <?php echo $release_date; ?> ( <?php echo $days_until; ?> días )</p>

        <?php
        if ($following_production_title !== null) {
            ?>
            <p>La siguiente es: <a
                        href="http://127.0.0.1:8888/next-film-marvel/?date=<?php echo $release_date; ?>"><?php echo $following_production_title; ?></a>
            </p>
            <?php
        } else { ?>
            <p>La siguiente es: Upsss, lo siento, no tenemos más información sobre próximas películas</p>
        <?php } ?>
    </hgroup>

    <div class="icons-social">

    </div>

</main>

</body>
</html>

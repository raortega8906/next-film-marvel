<body>

<header>
    <h2>¿Cuándo es la próxima película de MARVEL STUDIOS?</h2>
    <button onclick="window.location.href = '/'">Ir al inicio</button>
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
                    href="/?date=<?php echo $release_date; ?>"><?php echo $following_production_title; ?></a>
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
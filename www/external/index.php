<?php
session_start();
?>
<!-- index.php - Entry point for the application -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedLab Analyses</title>
    <script src="https://kit.fontawesome.com/0197b6ebf2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="home-page">
    <div class="sticky-top">
        <?php
        include 'includes/topbar.php';
        include 'includes/navigation.php';
        ?>
    </div>
    <div class="hero flex flex-ali-ite-cen">
        <div>
            <p>caring for life</p>
            <h2>Leading The Way <br>
                In Medical Analysis</h2>
            <button class="btn">Nos Services</button>
        </div>
        <p class="hero-img-credits">
            <a
                href="https://www.pexels.com/photo/woman-in-white-protective-suit-wearing-white-face-mask-looking-through-the-microscope-8442097/">Photo
                by Pavel Danilyuk</a>
        </p>
    </div>

    <div class="hero-cards flex flex-gap-24px">
        <button class="btn card flex-1 flex flex-jus-con-spa-bet flex-ali-ite-cen">
            <p>Prise de RDV</p>
            <i class="fa-solid fa-calendar-days"></i>
        </button>
        <button class="btn card flex-1 flex flex-jus-con-spa-bet flex-ali-ite-cen">
            <p>Contactez-nous</p>
            <i class="fa-solid fa-phone-volume"></i>
        </button>
        <button class="btn card flex-1 flex flex-jus-con-spa-bet flex-ali-ite-cen">
            <p>Frais de traitement</p>
            <i class="fa-solid fa-money-bill"></i>
        </button>
    </div>

    <div class="welcome">
        <p>Bienvenue chez medlab</p>
        <h3>Un endroit idéal pour faire vos analyses</h3>
        <p>Medlab est un laboratoire médical de pointe qui offre des services de qualité et des analyses fiables. Nous
            sommes fiers de notre expertise et de notre engagement envers la santé et la qualité des analyses.</p>
        <a href="" class="flex flex-ali-ite-cen flex-jus-con-cen flex-gap-8px">
            En savoir plus
            <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>

    <div class="welcome-img">
        <img src="/medlab-analyses/www/external/images/welcome-duow.jpg" alt="Two lab nerds analysing blood">
        <a href="https://www.pexels.com/photo/a-man-and-a-woman-holding-a-test-tube-5726837/"
            class="welcome-img-credits">Photo by Artem Podrez</a>
    </div>

    <div class="home-services-container">
        <div class="header">
            <p>soins auxquels vous pouvez croire</p>
            <h3>Nos services</h3>
        </div>
        <div class="home-services flex flex-gap-24px">

            <div class="home-services-cards-container">
                <div class="flex flex-dir-col flex-jus-con-cen flex-ali-ite-cen">
                    <i class="fa-solid fa-vial"></i>
                    <p>Analyse generale</p>
                </div>

                <div class="flex flex-dir-col flex-jus-con-cen flex-ali-ite-cen">
                    <i class="fa-solid fa-vial"></i>
                    <p>Analyse generale</p>
                </div>

                <div class="flex flex-dir-col flex-jus-con-cen flex-ali-ite-cen">
                    <i class="fa-solid fa-vial"></i>
                    <p>Analyse generale</p>
                </div>

                <div class="flex flex-dir-col flex-jus-con-cen flex-ali-ite-cen">
                    <i class="fa-solid fa-vial"></i>
                    <p>Analyse generale</p>
                </div>

                <div class="flex flex-dir-col flex-jus-con-cen flex-ali-ite-cen">
                    <i class="fa-solid fa-vial"></i>
                    <p>Analyse generale</p>
                </div>


            </div>

            <div>
                <h4>Une passion pour donner la priorité aux patients.</h4>
                <div class="flex flex-gap-40px flex-ali-ite-cen">
                    <ul>
                        <li>A Passion for Healing</li>
                        <li>All our best</li>
                        <li>A Legacy of Excellence</li>
                    </ul>
                    <ul>
                        <li>A Passion for Healing</li>
                        <li>All our best</li>
                        <li>A Legacy of Excellence</li>
                    </ul>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, illum a nisi sapiente nobis odio
                    autem laborum adipisci itaque molestiae maiores! Dolore blanditiis officiis aperiam commodi quam
                    illum, exercitationem natus.</p>

                <br>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas dolores numquam perspiciatis inventore
                    vitae nesciunt, odit reiciendis excepturi! Laboriosam officiis ipsa incidunt facere natus rem, ad
                    odit earum beatae quae perferendis est quasi harum autem reprehenderit ullam magnam velit odio sunt
                    repellat inventore dolores asperiores. Molestiae, perspiciatis cumque. Inventore voluptates
                    praesentium, dolores voluptatibus placeat facere voluptate sit reprehenderit? Minus nulla amet, ut
                    neque autem optio laborum suscipit fugit nostrum laboriosam odit harum labore cumque, repudiandae
                    voluptates excepturi consequatur expedita quod ad eius dolores veritatis et, a quaerat? Similique
                    sequi quasi placeat tempora minus facilis omnis nisi porro sed. Quasi, magnam.</p>

                <br>

                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti sequi at eveniet voluptatem alias
                    nostrum, minus sed, exercitationem error non molestiae quibusdam rem repudiandae debitis suscipit
                    ullam consequuntur fugiat illum?
                </p>
            </div>

            <div>
                <div>
                    <a href="https://www.pexels.com/photo/a-man-holding-a-test-tube-9629677/">Photo by Ivan Samkov</a>
                </div>
                <div>
                    <a href="https://www.pexels.com/photo/a-man-holding-a-test-tube-9629677/">Photo by Ivan Samkov</a>
                </div>
            </div>

        </div>
    </div>

    <?php
    include 'includes/contact.php';
    include 'includes/footer.php';
    ?>


</body>

</html>
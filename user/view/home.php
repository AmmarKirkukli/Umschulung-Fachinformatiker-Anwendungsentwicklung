<?php
$basePath = '../../../Umschulung-Fachinformatiker-Anwendungsentwicklung-Schuler/user/img/';
$features = [
    ['number' => '1', 'icon' => 'fa-pencil', 'title' => 'Unified Modeling Language', 'description' => 'Ist eine standardisierte, grafische Modellierungssprache zur Visualisierung, Spezifikation und Dokumentation von Softwaresystemen und Geschäftsprozessen, die Struktur und Verhalten darstellt.'],
    ['number' => '2', 'icon' => 'fa-tv', 'title' => 'Anwendungssoftware', 'description' => 'umfasst Computerprogramme, die der Nutzer zur Erledigung spezifischer Aufgaben einsetzt, wie Textverarbeitung, Bildbearbeitung, Webbrowser oder Spiele'],
    ['number' => '3', 'icon' => 'fa-plug', 'title' => 'Hardware', 'description' => 'Hardware umfasst alle physischen Komponenten eines Computers, wie CPU, RAM, Festplatten, Netzteil und Peripheriegeräte.']
];

$technologies = ['php', 'html', 'css', 'javascript', 'MySQL', 'java'];

$seminars = [
    ['date' => 'jan 17,2026', 'image' => 'home-foto2.png', 'title' => 'Neue Technologien in der Softwareentwicklung.'],
    ['date' => 'jan 25,2026', 'image' => 'home-foto3.jpg', 'title' => 'Die Zukunft der Webentwicklung.'],
    ['date' => 'jan 30,2026', 'image' => 'home-foto4.jpg', 'title' => 'Lernen Sie die neuesten Entwicklungen in der Softwareentwicklung kennen.']
];
?>

<div class="landing d-flex justify-content-center align-items-center pt-5 pb-5">
    <div class="text-center text-light">
        <h1>Kirkukli</h1>
        <p class="fs-5 text-white-50 mb-4">Umschulung Fachinformatiker:in Anwendungsentwicklung</p>
        <a class="btn btn-outline-secondary rounded-pill main-btn" href="index.php?action=about">Über Uns</a>
    </div>
</div>
    <div class="features text-center pt-3 pb-5">
        <div class="container">
            <div class="main-title mt-5 mb-5 position-relative">
                <img class="mb-4 Home-logo" src="<?php echo $basePath; ?>Fachinformatiker-Logo.webp" alt="Fachinformatiker Logo">
                <h2>Akademische Abteilungen</h2>
                <p class="text-black-50 text-uppercase">Software & Hardware</p>
            </div>
            <div class="row mt-4 pt-3">
                <?php foreach ($features as $feature): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="feat">
                        <div class="icon-holder position-relative">
                            <i class="fa-solid fa-<?php echo $feature['number']; ?> position-absolute bottom-0 number"></i>
                            <i class="fa-solid <?php echo $feature['icon']; ?> fa-4x position-absolute bottom-0 icon"></i>
                        </div>
                        <h4 class="mb-4 mt-3 text-uppercase"><?php echo $feature['title']; ?></h4>
                        <p class="text-black-50 lh-lg"><?php echo $feature['description']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
    <div class="techs pt-5 pb-5 text-center">
        <div class="container">
            <div class="row align-items-center h-100">
                <?php foreach ($technologies as $tech): ?>
                <div class="col-sm-6 col-md-4 col-lg-2 mt-3 mb-3">
                    <img class="Home-Foto" src="<?php echo $basePath . $tech . '.png'; ?>" alt="<?php echo strtoupper($tech); ?> Logo">
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="project text-center pt-5 pb-5 text-light">
        <h2>Sind sie bereit, Softwareentwickler zu werden?</h2>
        <p class="text-white-50">Starten Sie Ihre Karriere in der Softwareentwicklung mit unseren Kursen und Projekten.</p>
        <div class="d-flex justify-content-center mt-5 mb-5">
            <a class="btn btn-outline-dark rounded-pill main-btn text-uppercase " href="index.php?action=products">Kurse und Projekte</a>
        </div>
    </div>
    <div class="blog pt-5 pb-5">
        <div class="container">
            <div class="main-title text-center mt-2 mb-5 position-relative">
                <img class="mb-2 w-25" src="<?php echo $basePath; ?>schule-logo2.png" alt="Schule Logo">
                <h2>Unsere Seminar</h2>
                <p class="text-uppercase text-black-50">Aktuelle Themen</p>
            </div>
            <div class="row">
                <?php foreach ($seminars as $seminar): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card home-foto-shadow">
                        <img src="<?php echo $basePath . $seminar['image']; ?>" class="card-img-top" alt="<?php echo $seminar['title']; ?>">
                        <div class="card-body">
                            <span class="text-black-50"><?php echo $seminar['date']; ?></span>
                            <h5 class="card-title"><?php echo $seminar['title']; ?></h5>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="d-flex justify-content-center mt-5 mb-5 bor">
                <a class="btn btn-outline-secondary rounded-pill main-btn text-uppercase" href="index.php?action=seminarUser">Alle Seminar anzeigen</a>
            </div>
        </div>
    </div>
    <div class="subscribe pt-5 text-center text-md-start">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="fw-bold fs-5 mb-3">Wir freuen uns auf ihre Fragen und Anfragen!</div>
                </div>
            </div>
            <form class="row align-items-center" method="POST">
                <div class="col-md-6 col-lg-7 mb-5">
                    <input class="w-100 text-light p-2 bg-transparent" type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="col-md-6 col-lg-7 mb-5">
                    <textarea class="w-100 text-light p-2 bg-transparent" name="message" placeholder="Frage Stellen" rows="3" required></textarea>
                </div>
                <div class="col-md-6 col-lg-2">
                    <input class="btn rounded-pill" type="submit" value="Absenden">
                </div>
            </form>
        </div>
    </div>

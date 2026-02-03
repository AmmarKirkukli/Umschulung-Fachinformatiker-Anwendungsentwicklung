<?php
$basePath = './img/';

$aboutData = [
    'logo' => 'schule-logo2.png',
    'title' => 'Über uns',
    'subtitle' => 'Fachinformatiker Ausbildung und Umschulung',
    'description' => 'Wir bieten umfassende Schulungen in modernen Programmiersprachen und IT-Technologien. Unsere Kurse kombinieren theoretisches Wissen mit praktischen Projekten.',
    'sections' => [
        [
            'title' => 'Professionelle Ausbildung',
            'content' => 'Unser Team bietet hochqualifizierte Schulungen in verschiedenen IT-Bereichen. Mit jahrelanger Erfahrung helfen wir Ihnen, Ihre Karriere zu starten.',
            'image' => 'About.jpg',
            'cta' => 'Mehr erfahren'
        ]
    ]
];
?>

<section class="stuff pt-5 pb-5">
    <div class="container">
        <div class="main-title text-center mt-1 mb-5 position-relative">
            <img class="mb-3 img-fluid" src="<?php echo $basePath; ?><?php echo htmlspecialchars($aboutData['logo']); ?>" alt="About Us Logo" style="width:120px; height:120px;">
            <h2 class="text-light"><?php echo htmlspecialchars($aboutData['title']); ?></h2>
            <p class="text-light text-uppercase small"><?php echo htmlspecialchars($aboutData['subtitle']); ?></p>
        </div>

        <p class="description text-center mb-5 mx-auto text-light mw-lg">
            <?php echo htmlspecialchars($aboutData['description']); ?>
        </p>

        <?php foreach ($aboutData['sections'] as $section): ?>
        <div class="row align-items-center text-light mb-5">
            <div class="col-lg-4 mb-4 text-center text-lg-start order-lg-1">
                <div class="text">
                    <h4 class="fw-bold mb-3"><?php echo htmlspecialchars($section['title']); ?></h4>
                    <p class="fs-6 text-light"><?php echo htmlspecialchars($section['content']); ?></p>
                    <a class="btn btn-outline-secondary rounded-pill main-btn" href="#">
                        <i class="fa-solid fa-arrow-right me-2"></i><?php echo htmlspecialchars($section['cta']); ?>
                    </a>
                </div>
            </div>
            <div class="col-lg-8 order-lg-0">
                <div class="image">
                    <img class="img-fluid rounded" src="<?php echo $basePath; ?><?php echo htmlspecialchars($section['image']); ?>" alt="<?php echo htmlspecialchars($section['title']); ?>">
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<?php
$basePath = './img/';

$pageData = [
    'logo' => 'projekt-logo.png',
    'title' => 'Unsere Kurse und Projekte',
    'subtitle' => 'Entdecken Sie unsere vielfältigen Schulungsangebote',
    'categories' => ['All', 'Webentwicklung', 'Backend', 'Frontend', 'Datenbanken', 'Mobile']
];

$projects = [
    ['image' => 'Projekte-Seite.jpg', 'category' => 'webentwicklung', 'title' => 'Webentwicklung Projekt'],
    ['image' => 'Frontend Design.png', 'category' => 'frontend', 'title' => 'Frontend Design'],
    ['image' => 'API.png', 'category' => 'backend', 'title' => 'Backend API'],
    ['image' => 'Full-Stack.png', 'category' => 'webentwicklung', 'title' => 'Full-Stack Projekt'],
    ['image' => 'Datenbankdesign.png', 'category' => 'datenbanken', 'title' => 'Datenbankdesign'],
    ['image' => 'Server-Konfiguration.png', 'category' => 'backend', 'title' => 'Server-Konfiguration'],
    ['image' => 'UI-UX Design.png', 'category' => 'frontend', 'title' => 'UI/UX Design'],
    ['image' => 'Mobile App.png', 'category' => 'mobile', 'title' => 'Mobile App']
];
?>

<section class="our-work text-center pt-2 pb-5">
    <div class="container">
        <div class="main-title mt-5 mb-5 position-relative">
            <img class="mb-2 img-fluid" src="<?php echo $basePath; ?><?php echo htmlspecialchars($pageData['logo']); ?>" alt="Kurse und Projekte Logo" style="max-width:100px;">
            <h2><?php echo htmlspecialchars($pageData['title']); ?></h2>
            <p class="text-black-50 text-uppercase"><?php echo htmlspecialchars($pageData['subtitle']); ?></p>
        </div>

        <nav class="filter-nav" aria-label="Projekt-Filter">
            <ul class="list-unstyled d-flex justify-content-center gap-2 flex-wrap mt-5 mb-5">
                <?php foreach ($pageData['categories'] as $index => $category): ?>
                    <li>
                        <button 
                            class="btn btn-outline-warning rounded-pill <?php echo $index === 0 ? 'active' : ''; ?>" 
                            data-filter="<?php echo strtolower(str_replace(' ', '', $category)); ?>">
                            <?php echo htmlspecialchars($category); ?>
                        </button>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <div class="row g-3">
            <?php foreach ($projects as $project): ?>
                <div class="project-box col-sm-6 col-md-4 col-lg-3 box ">
                    <figure class="mb-3 bg-white rounded overflow-hidden shadow-sm" data-category="<?php echo htmlspecialchars($project['category']); ?>">
                        <img 
                            class="box projects-foto img-fluid w-100 h-100 object-fit-cover border border-warning" 
                            src="<?php echo $basePath; ?><?php echo htmlspecialchars($project['image']); ?>" 
                            alt="<?php echo htmlspecialchars($project['title']); ?>"
                            loading="lazy">
                        <figcaption class="p-3 bg-light">
                            <p class="text-dark small fw-semibold"><?php echo htmlspecialchars($project['title']); ?></p>
                        </figcaption>
                    </figure>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="d-flex justify-content-center mt-5">
            <a class="btn btn-outline-warning rounded-pill main-btn text-uppercase" href="index.php?action=about">
                <i class="fa-solid fa-arrow-right me-2"></i>Mehr erfahren
            </a>
        </div>
    </div>
</section>
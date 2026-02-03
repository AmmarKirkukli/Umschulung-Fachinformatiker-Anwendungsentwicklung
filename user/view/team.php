<?php
$basePath = './img/';

$teamData = [
    'title' => 'Unser Team',
    'subtitle' => 'Treffen Sie unsere erfahrenen Fachleute und Trainer. Mit jahrelanger Erfahrung in der IT-Branche helfen wir Ihnen beim Lernen.',
    'members' => [
        [
            'name' => 'Ammar Kirkukli',
            'role' => 'Schulungsleiter',
            'image' => 'man1.png',
            'bio' => 'Experte für Webentwicklung und Full-Stack-Entwicklung mit über 3 Jahren Erfahrung.'
        ],
        [
            'name' => 'Max Müller',
            'role' => 'Backend-Entwickler',
            'image' => 'man2.png',
            'bio' => 'Spezialist für PHP, APIs und Datenbankarchitektur. Leidenschaftlich beim Unterrichten.'
        ],
        [
            'name' => 'Sarah Schmidt',
            'role' => 'Frontend-Entwicklerin',
            'image' => 'woman1.png',
            'bio' => 'UI/UX-Designerin und JavaScript-Expertin. Schafft wunderschöne und benutzerfreundliche Interfaces.'
        ],
        [
            'name' => 'Tom Weber',
            'role' => 'DevOps-Ingenieur',
            'image' => 'man3.png',
            'bio' => 'Kümmert sich um CI/CD, Server und Cloud-Infrastruktur. Optimiert für Performance.'
        ]
    ]
];
?>

<section class="team text-center pb-5 pt-5">
    <div class="container pb-5 pt-5">
        <h2 class="fw-bold mb-3"><?php echo htmlspecialchars($teamData['title']); ?></h2>
        <p class="text-black-50 mb-5 mw-lg mx-auto">
            <?php echo htmlspecialchars($teamData['subtitle']); ?>
        </p>

        <div class="row g-4">
            <?php foreach ($teamData['members'] as $member): ?>
            <div class="col-md-6 col-lg-3">
                <div class="box bg-white h-100 d-flex flex-column rounded shadow-sm overflow-hidden">
                    <img 
                        class="img-fluid w-100" 
                        src="<?php echo $basePath; ?><?php echo htmlspecialchars($member['image']); ?>" 
                        alt="<?php echo htmlspecialchars($member['name']); ?>"
                        style="aspect-ratio: 1; object-fit: cover;">
                    <div class="p-3 flex-grow-1 d-flex flex-column">
                        <div>
                            <h4 class="text-dark mb-1"><?php echo htmlspecialchars($member['name']); ?></h4>
                            <p class="text-primary fw-semibold small mb-2"><?php echo htmlspecialchars($member['role']); ?></p>
                        </div>
                        <blockquote class="text-black-50 small mb-0"><?php echo htmlspecialchars($member['bio']); ?></blockquote>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
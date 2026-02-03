<?php
$basePath = '../../../Umschulung-Fachinformatiker-Anwendungsentwicklung-Schuler/user/img/';
$owner = 'Ammar Kirkukli';
$siteName = 'Umschulung Kirkukli';
$yearStart = 2022;
$yearNow = date('Y');

$techLinks1 = ['PHP', 'CSS', 'JavaScript', 'Java', 'Python', 'HTML'];
$techLinks2 = ['SQL', 'WordPress', 'C++', 'C#', 'PowerShell', 'UML'];

$social = [
    ['icon' => 'fa-facebook', 'href' => '#', 'label' => 'Facebook'],
    ['icon' => 'fa-twitter', 'href' => '#', 'label' => 'Twitter'],
    ['icon' => 'fa-linkedin', 'href' => '#', 'label' => 'LinkedIn'],
    ['icon' => 'fa-instagram', 'href' => '#', 'label' => 'Instagram']
];
?>

<footer class="footer pt-3 pb-0 text-white-50 text-center text-md-start">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="info mb-5">
                    <img src="<?php echo $basePath; ?>schule-logo2.png" alt="<?php echo htmlspecialchars($siteName); ?> Logo" class="mb-4" style="max-width:120px; height:auto;">
                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, vel.</p>
                    <div class="copyright">
                        created by <span><?php echo htmlspecialchars($owner); ?></span>
                        <div>&copy; <?php echo $yearStart . ($yearNow > $yearStart ? ' - ' . $yearNow : ''); ?> <span><?php echo htmlspecialchars($siteName); ?></span></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-2">
                <div class="links">
                    <h5 class="text-light">Programmiersprachen</h5>
                    <ul class="list-unstyled lh-lg">
                        <?php foreach ($techLinks1 as $tech): ?>
                            <li><?php echo htmlspecialchars($tech); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-2">
                <div class="links">
                    <h5 class="text-light">Technologien</h5>
                    <ul class="list-unstyled lh-lg">
                        <?php foreach ($techLinks2 as $tech): ?>
                            <li><?php echo htmlspecialchars($tech); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="contact">
                    <h5 class="text-light">Kontaktieren Sie uns</h5>
                    <p class="lh-lg mt-3 mb-5">Haben Sie Fragen, Anregungen oder benötigen Sie weitere Informationen? Zögern Sie nicht, uns zu kontaktieren. Wir helfen Ihnen gerne weiter.</p>
                    <a class="btn rounded-pill main-btn w-100 bg-warning bg-opacity-25" href="#">Abonnieren</a>
                    <ul class="d-flex mb-5 mt-3 ms-4 list-unstyled gap-5">
                        <?php foreach ($social as $s): ?>
                        <li>
                            <a class="d-block text-light" href="<?php echo htmlspecialchars($s['href']); ?>" aria-label="<?php echo htmlspecialchars($s['label']); ?>">
                                <i class="fa-brands <?php echo $s['icon']; ?> fa-lg rounded-circle p-2"></i>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light dark">

    <title>Tokko - Le nouveau moyen de transport rigolo</title>

    <link rel="stylesheet" href="assets/styles/general-styling.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">

    <script src="assets/scripts/account-manager.js"></script>
    <script src="assets/scripts/active-tab.js"></script>

    <?php if ($_SERVER['REQUEST_URI'] === '/Tokko/billets' || $_SERVER['REQUEST_URI'] === '/Tokko/billets.php') { ?>
        
        <link rel="stylesheet" href="assets/styles/billets.css">
        <script src="assets/scripts/ticket-tab.js"></script>
        <script src="assets/scripts/account-manager.js"></script>

    <?php } ?>

    <?php if ($_SERVER['REQUEST_URI'] === '/Tokko/gros-zozo' || $_SERVER['REQUEST_URI'] === '/Tokko/gros-zozo.php') { ?>
        
        <link rel="stylesheet" href="assets/styles/gros-zozo.css">
        <script src="assets/scripts/ticket-tab.js"></script>
        <script src="assets/scripts/account-manager.js"></script>

    <?php } ?>

    <?php if ($_SERVER['REQUEST_URI'] === '/Tokko/' || $_SERVER['REQUEST_URI'] === '/Tokko/index.php' || $_SERVER['REQUEST_URI'] === '/Tokko/?') { ?>
        
        <link rel="stylesheet" href="assets/styles/index-styling.css">
        <script src="assets/scripts/newsletter.js"></script>

    <?php } ?>

    

</head>
<body>

<header>

    <div class="general-top-bg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1512 242" fill="none">
            <path d="M1512 0H0.5V241.5C195.667 202 417 108 918.5 163.5C1296.94 205.382 1425 154.667 1512 130V0Z" fill="url(#paint0_linear_110_248)"/>
            <defs>
            <linearGradient id="paint0_linear_110_248" x1="-623" y1="384.5" x2="1603" y2="-31" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FFE4F6"/>
            <stop offset="1" stop-color="#282662"/>
            </linearGradient>
            </defs>
        </svg>
    </div>

    <div class="header-col-left">

        <a href="/Tokko/" class="logo active-tab"><img src="assets/images/logo-blanc.svg" alt=""></a>
    
        <nav>
    
            <ul>
                <li><a href="/Tokko/billets">Mes billets</a></li>
                <li><a href="gros-zozo">Nos prestations</a></li>
                <li><a href="gros-zozo">Cartes et abonnements</a></li>
            </ul>
    
        </nav>

    </div>

    <a href="gros-zozo" class="profile-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70" fill="none">
            <circle cx="35" cy="35" r="35" fill="#FCFCFC" fill-opacity="0.05"/>
            <path d="M34.5 33.7596C38.4828 33.7596 41.7115 30.5309 41.7115 26.5481C41.7115 22.5653 38.4828 19.3365 34.5 19.3365C30.5172 19.3365 27.2885 22.5653 27.2885 26.5481C27.2885 30.5309 30.5172 33.7596 34.5 33.7596Z" stroke="#FCFCFC" stroke-width="2.27" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M47 48.6635C47 43.0817 41.3976 38.5673 34.5 38.5673C27.6024 38.5673 22 43.0817 22 48.6635" stroke="#FCFCFC" stroke-width="2.27" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a>

</header>
    

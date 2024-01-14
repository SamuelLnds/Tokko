<?php require ('fragments/header.php'); ?>


<main>
    
    <div class="top-bg-gradient">

        <svg width="1512" height="962" viewBox="0 0 1512 962" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1512 0H0V875.136C158.5 862.57 205.007 773.933 562.5 892.774C945.5 1020.09 1314.67 941.757 1512 875.136V0Z" fill="url(#paint0_linear_31_18)"/>
            <path d="M759.5 940.858C831 957.469 1036.6 979.429 1287 934.38C1203.83 901.323 981.9 856.34 759.5 940.858Z" fill="#FCFCFC" fill-opacity="0.2"/>
            <path d="M459.5 861.623C564.5 884.048 690.5 966.771 1037.5 960.293C965.167 890.36 748.3 772.321 459.5 861.623Z" fill="#FCFCFC" fill-opacity="0.1"/>
            <path d="M1120 839.666C1241 796.5 1425.17 703.982 1512.5 679.73V875.576C1147 992 854 973 632 915.5C711.333 916.331 994.976 884.267 1120 839.666Z" fill="#FCFCFC" fill-opacity="0.1"/>
            <defs>
            <linearGradient id="paint0_linear_31_18" x1="1512" y1="4.81264e-05" x2="-460.888" y2="656.844" gradientUnits="userSpaceOnUse">
            <stop stop-color="#282660"/>
            <stop offset="1" stop-color="#FFE4F6"/>
            </linearGradient>
            </defs>
        </svg>

    </div> 

        <section class="hero">
        
            <div class="hero-highlight">
                <img src="assets/images/Train-fete-1.jpg" alt="">
                <div class="hero-highlight-content">
                    <h1>Découvrez <br> nos trajets de nuit !</h1>
                    <p>Vous souhaitez découvrir une nouvelle manière de fêter ? <br>
                    Rendez-vous en TPV vers votre destination favorite tout en profitant d’une soirée inédite entourez d’activités. <br>
                    Bar délirium, karaoke ou encore boite de nuit, venez fêter avec TPV</p>
                    <a href="gros-zozo">Je réserve !</a>
                </div>
            </div>
        
            
        </section>
        
        <section class="search">
            <h2>Réserver votre trajet</h2>
            <form action="" class="search-bar">
                <input type="text" name="" id="from" class="from" placeholder="De: Ville, Gare...">
                <ul id="fromSuggestions" class="suggestions"></ul>
                <input type="text" name="" id="destination" class="destination" placeholder="Vers: Ville, Gare...">
                <ul id="destinationSuggestions" class="suggestions"></ul>
                <input type="date" value="">
                <input type="text" placeholder="Retour" onfocus="this.type='date'" onblur="if(this.value === '') this.type='text'">

                <div class="passenger-and-details">
                <label for="passengerNum">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="29" viewBox="0 0 25 29" fill="none">
                        <path d="M23 27C23 22.0243 18.2939 18 12.5 18C6.70606 18 2 22.0243 2 27M13 14C16.3137 14 19 11.3137 19 8C19 4.6863 16.3137 2 13 2C9.6863 2 7 4.6863 7 8C7 11.3137 9.6863 14 13 14Z" stroke="#6A6A6A" stroke-width="2.27" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </label>

                    <select name="" id="passengerNum" class="passenger">
                        <?php
                            for ($i=1; $i<8; $i++)
                            {
                                ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php
                            }
                        ?>
                        <option value="8+">8 ou +</option>
                    </select>

                    <span class="passenger-promotional-details">Pas de carte de réduction</span>

                </div>

                <button type="submit" class="search-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="29" viewBox="0 0 33 29" fill="none">
                        <path d="M31.0315 23.216L25.6922 18.3102L21.5852 16.7512C22.9527 14.9644 23.6853 12.8328 23.6827 10.6485C23.6827 4.7769 18.4837 0 12.0931 0C5.70263 0 0.503601 4.7769 0.503601 10.6485C0.503601 16.5202 5.70263 21.2971 12.0931 21.2971C14.4911 21.2996 16.8303 20.6148 18.7847 19.3382L20.4771 23.1015L25.8162 28.0075C26.1586 28.3222 26.5651 28.5718 27.0126 28.742C27.46 28.9123 27.9395 29 28.4237 29C28.908 29 29.3875 28.9124 29.835 28.7421C30.2824 28.5719 30.6889 28.3223 31.0313 28.0077C31.3738 27.6931 31.6454 27.3196 31.8308 26.9085C32.0161 26.4974 32.1115 26.0568 32.1115 25.6119C32.1115 25.1669 32.0162 24.7263 31.8309 24.3152C31.6455 23.9042 31.3739 23.5306 31.0315 23.216ZM2.61079 10.6485C2.61079 5.8446 6.86468 1.9361 12.0931 1.9361C17.3216 1.9361 21.5755 5.8446 21.5755 10.6485C21.5755 15.4525 17.3216 19.361 12.0931 19.361C6.86468 19.361 2.61079 15.4525 2.61079 10.6485ZM29.5414 26.6385C29.2448 26.9104 28.8429 27.0632 28.4239 27.0632C28.0049 27.0632 27.6029 26.9104 27.3063 26.6385L22.2641 22.0057L20.6907 18.5065L24.4992 19.9522L29.5415 24.585C29.8374 24.8575 30.0036 25.2268 30.0036 25.6118C30.0036 25.9968 29.8373 26.366 29.5414 26.6385Z" fill="#282660"/>
                    </svg>
                </button>
            </form>
    
        </section> 
    


<section class="reassurance">
    <div class="reassurance-row">
        <div class="reassurance-elt">
            <img src="assets/images/TEMPS.svg" alt="">
            <h3>Roi de la ponctualité</h3>
            <p>Ce n’est pas parce que vous voyagez lentement que vous ne devez par arrivez à l’heure. TPV vous assure un trajet tranquille et ponctuel.</p>
        </div>
        <div class="reassurance-elt">
            <img src="assets/images/Planète.svg" alt="">
            <h3>Mobilité durable</h3>
            <p>Les TPV sont constitués à 80% de matières recyclés tout en conservant un confort optimal. Ces trains sont actuellement les moins polluant.</p>
        </div>
        <div class="reassurance-elt">
            <img src="assets/images/argent.svg" alt="">
            <h3>Des tarifs réguliers</h3>
            <p>Que vous voyagez en avance ou plutôt last minute, TOKKO s’engage à ne pas changer ses prix peut importe le moment de réservation.</p>
        </div>
    </div>

    <a href="gros-zozo">En savoir plus</a>

</section>

<div class="gray-bg">

    <section class="trajets">
    
        <div class="trajets-ctn">
    
            <div class="trajets-left-cln">
                <h2>Optez pour le<br> trajet qui <strong>vous</strong> convient</h2>
                <p>Voyager partout et avec le TOKKO qui vous convient. <br>
                Trajet court pour travailler ou trajet long pour fêter. Les wagons des TPV sont optimisés afin de convenir à vos besoins..</p>
            </div>
        
            <div class="trajets-right-cln">
                <div class="trajet-card">
                    <img src="assets/images/emoji _railway car_.svg" alt="">
                    <h3>Tokko classique</h3>
                    <p>Vous aimez prendre votre temps en transport<br> pour votre confort ou encore pour terminer une tache importante avant d’arriver à bon port ? <br>
                    Ce trajet est fait pour vous !</p>
                </div>
                <div class="trajet-card">
                    <img src="assets/images/emoji _sparkles_.svg" alt="">
                    <h3>Tokko de nuit</h3>
                    <p>Vous aimez voyager et faire la fête en même temps ?<br>
                    Venez profitez de nos activités insolites à bord du train de nuit. Avec un coup d’avance sur vos vacances !</p>
                </div>
            </div>
    
        </div>
    
    </section>
    
    <div class="top-bg-gradient">
            <!-- Objet du dégradé positionné en arrière-plan qui s'étend sur la hauteur du contenu de la section -->
        
            <svg viewBox="0 0 1512 962" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1512 0H0V875.136C158.5 862.57 205.007 773.933 562.5 892.774C945.5 1020.09 1314.67 941.757 1512 875.136V0Z" fill="url(#paint0_linear_31_18)"/>
                <path d="M759.5 940.858C831 957.469 1036.6 979.429 1287 934.38C1203.83 901.323 981.9 856.34 759.5 940.858Z" fill="#FCFCFC" fill-opacity="0.2"/>
                <path d="M459.5 861.623C564.5 884.048 690.5 966.771 1037.5 960.293C965.167 890.36 748.3 772.321 459.5 861.623Z" fill="#FCFCFC" fill-opacity="0.1"/>
                <path d="M1120 839.666C1241 796.5 1425.17 703.982 1512.5 679.73V875.576C1147 992 854 973 632 915.5C711.333 916.331 994.976 884.267 1120 839.666Z" fill="#FCFCFC" fill-opacity="0.1"/>
                <defs>
                <linearGradient id="paint0_linear_31_18" x1="1512" y1="4.81264e-05" x2="-460.888" y2="656.844" gradientUnits="userSpaceOnUse">
                <stop stop-color="#282660"/>
                <stop offset="1" stop-color="#FFE4F6"/>
                </linearGradient>
                </defs>
            </svg>
        
        </div> 
    
    <section class="CTA-App">

        <div class="CTA-App-content">

            <img src="assets/images/Mockup application 1.png" alt="">
            <div class="app-right-col">
                <h2>Téléchargez l'app !</h2>
                <p>Soyez plus rapide que le TPV et sortez vos billets en un claquement de doigt. Découvrez un moyen simple de réserver vos futurs trajets avec l’application TOKKO.</p>
                <a href="gros-zozo">Je télécharge !</a>
            </div>

        </div>
    

    </section>

</div>


<section class="CTA-Newsletter">

    <div class="newsletter-heading">
        <h2>Ne manquez aucune nouvelle</h2>
        <p>Inscrivez vous à la newsletter</p>
    </div>
    <form action="/Tokko/">
        <input type="email" placeholder="Entrez votre mail">
        <input type="submit" value="Je m'inscris !">
    </form>

</section>

</main>

<?php require ('fragments/footer.php'); ?>
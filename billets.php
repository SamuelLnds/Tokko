<?php require ('fragments/header.php'); ?>

<main>

    <div class="center-elt">

        <?php require ('fragments/login.php'); ?>
       
    </div>

    <section class="cards" style="display: none;">

        <div class="billet-tab-selector">
            <button class="billet-tab-btn"><h2 class="active-tab-heading">À venir</h2></button>
            <button class="billet-tab-btn"><h2>Passés</h2></button>
        </div>

        <div class="tab-selector-indicator">
            <div class="active-tab-indicator"></div>
        </div>

        <div class="card-list a-venir">
            <div class="card">
                <img src="assets/images/icon_qr_code.png" alt="">
                <div class="card-info">
                    <p>Théo GOMME</p>
                    <p class="important-info">Samedi 2 décembre 2023</p>
                </div>
                <div class="schedule-grid">
                    <div class="time">13h28</div>
                    <div class="line">
                        <div class="circle top"></div>
                        <div class="circle bottom"></div>
                    </div>
                    <div class="station">ANGERS - Saint Laud</div>
                    <div class="duration">2h57</div>
                    <div class="details">TPV Tokko - Classique<br>Voiture 22 places 2 étages 2,5 Carré</div>
                    <div class="arrival-time">16h25</div>
                    <div class="arrival-station">NANTES</div>
                </div>
            </div>
            <div class="card">
                <img src="assets/images/icon_qr_code.png" alt="">
                <div class="card-info">
                    <p>Robineau DESBOIS</p>
                    <p class="important-info">Lundi 4 décembre 2023</p>
                </div>
                <div class="schedule-grid">
                    <div class="time">11h30</div>
                    <div class="line">
                        <div class="circle top"></div>
                        <div class="circle bottom"></div>
                    </div>
                    <div class="station">ANGERS - Saint Laud</div>
                    <div class="duration">10h</div>
                    <div class="details">TPV Tokko - Classique<br>Voiture 22 places 2 étages 2,5 Carré</div>
                    <div class="arrival-time">21h30</div>
                    <div class="arrival-station">PARIS</div>
                </div>
            </div>
            <div class="card">
                <img src="assets/images/icon_qr_code.png" alt="">
                <div class="card-info">
                    <p>Théo GOMME</p>
                    <p class="important-info">Jeudi 7 décembre 2023</p>
                </div>
                <div class="schedule-grid">
                    <div class="time">15h34</div>
                    <div class="line">
                        <div class="circle top"></div>
                        <div class="circle bottom"></div>
                    </div>
                    <div class="station">ANGERS - Saint Laud</div>
                    <div class="duration">2h57</div>
                    <div class="details">TPV Tokko - Classique<br>Voiture 22 places 2 étages 2,5 Carré</div>
                    <div class="arrival-time">18h31</div>
                    <div class="arrival-station">NANTES</div>
                </div>
            </div>
        </div>

        <div class="card-list passes">
            <div class="card">
                <img src="assets/images/icon_qr_code.png" alt="">
                <div class="card-info">
                    <p>Robineau DESBOIS</p>
                    <p class="important-info">Samedi 11 novembre 2023</p>
                </div>
                <div class="schedule-grid">
                    <div class="time">13h28</div>
                    <div class="line">
                        <div class="circle top"></div>
                        <div class="circle bottom"></div>
                    </div>
                    <div class="station">ANGERS - Saint Laud</div>
                    <div class="duration">2h57</div>
                    <div class="details">TPV Tokko - Classique<br>Voiture 22 places 2 étages 2,5 Carré</div>
                    <div class="arrival-time">16h25</div>
                    <div class="arrival-station">NANTES</div>
                </div>
            </div>
            <div class="card">
                <img src="assets/images/icon_qr_code.png" alt="">
                <div class="card-info">
                    <p>Robineau DESBOIS</p>
                    <p class="important-info">Jeudi 16 novembre 2023</p>
                </div>
                <div class="schedule-grid">
                    <div class="time">11h30</div>
                    <div class="line">
                        <div class="circle top"></div>
                        <div class="circle bottom"></div>
                    </div>
                    <div class="station">ANGERS - Saint Laud</div>
                    <div class="duration">10h</div>
                    <div class="details">TPV Tokko - Classique<br>Voiture 22 places 2 étages 2,5 Carré</div>
                    <div class="arrival-time">21h30</div>
                    <div class="arrival-station">PARIS</div>
                </div>
            </div>
            <div class="card">
                <img src="assets/images/icon_qr_code.png" alt="">
                <div class="card-info">
                    <p>Théo GOMME</p>
                    <p class="important-info">Lundi 27 novembre 2023</p>
                </div>
                <div class="schedule-grid">
                    <div class="time">15h34</div>
                    <div class="line">
                        <div class="circle top"></div>
                        <div class="circle bottom"></div>
                    </div>
                    <div class="station">ANGERS - Saint Laud</div>
                    <div class="duration">2h57</div>
                    <div class="details">TPV Tokko - Classique<br>Voiture 22 places 2 étages 2,5 Carré</div>
                    <div class="arrival-time">18h31</div>
                    <div class="arrival-station">NANTES</div>
                </div>
            </div>
        </div>

    </section>
    
    <?php require ('fragments/aide.php'); ?>
</main>

<?php require ('fragments/footer.php'); ?>

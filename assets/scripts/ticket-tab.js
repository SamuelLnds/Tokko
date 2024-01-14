document.addEventListener('DOMContentLoaded', (event) => {
    const tabs = document.querySelectorAll('.billet-tab-btn');
    const activeIndicator = document.querySelector('.active-tab-indicator');
    const indicatorContainer = document.querySelector('.tab-selector-indicator');
    const aVenirList = document.querySelector('.card-list.a-venir');
    const passesList = document.querySelector('.card-list.passes');
  
    // Cacher la liste "passés" par défaut au chargement de la page
    passesList.style.display = 'none';
  
    tabs.forEach((tab, index) => {
      tab.addEventListener('click', function() {
        // Retirer la classe active de tous les titres
        tabs.forEach(t => t.querySelector('h2').classList.remove('active-tab-heading'));
        
        // Ajouter la classe active au titre cliqué
        this.querySelector('h2').classList.add('active-tab-heading');
  
        // Afficher la liste "à venir" et cacher la liste "passés" ou inversement
        if (this.querySelector('h2').textContent.trim() === 'À venir') {
          aVenirList.style.display = '';
          passesList.style.display = 'none';
        } else if (this.querySelector('h2').textContent.trim() === 'Passés') {
          aVenirList.style.display = 'none';
          passesList.style.display = '';
        }
  
        // Calculer et appliquer le déplacement de l'indicateur
        const offset = index * (indicatorContainer.offsetWidth / 2);
        activeIndicator.style.transform = `translateX(${offset}px)`;
        activeIndicator.style.transition = 'transform 0.3s ease';
      });
    });
  
    // Initialiser l'indicateur sous l'onglet "à venir"
    const tabWidth = 606;
    activeIndicator.style.width = `${tabWidth}px`;
    activeIndicator.style.transform = `translateX(0px)`;
    activeIndicator.style.transition = 'transform 0.3s ease';
  });
  
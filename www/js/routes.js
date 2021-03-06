angular.module('app.routes', [])

.config(function($stateProvider, $urlRouterProvider) {

  // Ionic uses AngularUI Router which uses the concept of states
  // Learn more here: https://github.com/angular-ui/ui-router
  // Set up the various states which the app can be in.
  // Each state's controller can be found in controllers.js
  $stateProvider
    
  

      .state('profil', {
    url: '/profil',
    templateUrl: 'templates/profil.php',
    controller: 'profilCtrl'
  })

  .state('listeDeVosCours', {
    url: '/listeDeVosCours',
    templateUrl: 'templates/listeDeVosCours.html',
    controller: 'listeDeVosCoursCtrl'
  })

  .state('connexion', {
    url: '/connexion',
    templateUrl: 'templates/connexion.php',
    controller: 'connexionCtrl'
  })

  .state('choix', {
    url: '/choix',
    templateUrl: 'templates/choix.html',
    controller: 'choixCtrl'
  })
      

  .state('cours', {
    url: '/cours',
    templateUrl: 'templates/cours.html',
    controller: 'coursCtrl'
  })

  .state('rechercherVotreCours', {
    url: '/rechercherCours',
    templateUrl: 'templates/rechercherVotreCours.php',
    controller: 'rechercherVotreCoursCtrl'
  })
    

  .state('choixDuCours', {
    url: '/choixDuCours',
    templateUrl: 'templates/choixDuCours.php',
    controller: 'choixDuCoursCtrl'
  })

  .state('demander', {
    url: '/demander',
    templateUrl: 'templates/demander.php',
    controller: 'demanderCtrl'
  })

  .state('confirmation', {
    url: '/Confirmation',
    templateUrl: 'templates/confirmation.html',
    controller: 'confirmationCtrl'
  })

  .state('inscrivezVous', {
    url: '/page18',
    templateUrl: 'templates/inscrivezVous.html',
    controller: 'inscrivezVousCtrl'
  })

      .state('inscrivezVousE', {
        url: '/page30',
        templateUrl: 'templates/inscrivezVousE.html',
        controller: 'inscrivezVousECtrl'
      })

      .state('notif', {
        url: '/page35',
        templateUrl: 'templates/notif.php',
        controller: 'notifCtrl'
      })

      .state('modifprofil', {
        url: '/page40',
        templateUrl: 'templates/modifprofil.php',
        controller: 'modifprofilCtrl'
      })

      .state('accueil', {
        url: '/page50',
        templateUrl: 'templates/accueil.html',
        controller: 'accueilCtrl'
      })

      .state('modifp', {
        url: '/page55',
        templateUrl: 'templates/modifp.php',
        controller: 'modifpCtrl'
      })

      .state('deconnexion', {
        url: '/deconnexion',
        templateUrl: 'templates/deconnexion.php',
        controller: 'deconnexionCtrl'
      })


  $urlRouterProvider.otherwise('/connexion')

  

});

angular.module('app.routes', [])

.config(function($stateProvider, $urlRouterProvider) {

  // Ionic uses AngularUI Router which uses the concept of states
  // Learn more here: https://github.com/angular-ui/ui-router
  // Set up the various states which the app can be in.
  // Each state's controller can be found in controllers.js
  $stateProvider
    
  

      .state('profil', {
    url: '/profil',
    templateUrl: 'templates/profil.html',
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
    templateUrl: 'templates/rechercherVotreCours.html',
    controller: 'rechercherVotreCoursCtrl'
  })

  .state('choixDuCours', {
    url: '/choixDucours',
    templateUrl: 'templates/choixDuCours.html',
    controller: 'choixDuCoursCtrl'
  })

  .state('demander', {
    url: '/demander',
    templateUrl: 'templates/demander.html',
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

$urlRouterProvider.otherwise('/connexion')

  

});
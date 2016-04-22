// Controller for CoachAPP

var app = angular.module('coachApp', []);
app.controller('playersCtrl', function($scope, $http) {
	//access stats in database
   $http.get("http://coach.perspectiveva.com/php/gameinfo.php")
   .then(function (response) {$scope.stats = response.data.stats;});
  	//access players in database
   $http.get("http://coach.perspectiveva.com/php/playerinfo.php")
   .then(function (response) {$scope.players = response.data.players;});
   	//access games in database
   $http.get("http://coach.perspectiveva.com/php/gamelist.php")
   .then(function (response) {$scope.games = response.data.games;});
   	//In place to sort objects 
   $scope.orderByMe = function(x) {
    $scope.myOrderBy = x;
  }
  
});
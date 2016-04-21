var coachAPP = angular.module('CoachAPP', []);

coachAPP.controller('PlayersListCtrl', function ($scope, $http) {

	$http.get("php/gameinfo.php")
   .then(function (response) {$scope.players = response.data.records;});	
   
/*$scope.players = [
	{
		'name': 'Anthony',
		'number': '1',
		'PA': 7,
		'Hits': 5,
		'K': 2,
		'RBI': 4,
	},
	{
		'name': 'Jack',
		'number': '9',
		'PA': 6,
		'Hits': 5,
		'K': 1,
		'RBI': 1,	
	},
	{
		'name': 'Liam',
		'number': '2',
		'PA': 7,
		'Hits': 7,
		'K': 0,
		'RBI': 8,
	},
	{
		'name': 'Zyler',
		'number': '8',
		'PA': 8,
		'Hits': 5,
		'K': 0,
		'RBI': 2,
	},
	{
		'name': 'Tommy',
		'number': '10',
		'PA': 6,
		'Hits': 3,
		'K': 2,
		'RBI': 4,
	},
	{
		'name': 'Matthew',
		'number': '3',
		'PA': 7,
		'Hits': 6,
		'K': 0,
		'RBI': 5,
	},
	{
		'name': 'Henry H.',
		'number': '7',
		'PA': 6,
		'Hits': 6,
		'K': 0,
		'RBI': 2,
	},
	{
		'name': 'Henry C.',
		'number': '4',
		'PA': 6,
		'Hits': 6,
		'K': 0,
		'RBI': 0,
	},
];
*/

/*$http.get('/json/players.json').success(function(data) {
    $scope.players = data;
  });
 */
 
 
});
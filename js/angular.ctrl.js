const app = angular.module('App', []);

app.controller('appCtrl', ['$scope', function($scope){
	$scope.noiva = 'Natália';
	$scope.noivo = 'Sérgio';


	$scope.changeName = function(names) {
		if(names.noiva) {
			$scope.noiva = names.noiva;
		}
		if(names.noivo) {
			$scope.noivo = names.noivo;
		}
		// console.log('change', names);
	}
}]);
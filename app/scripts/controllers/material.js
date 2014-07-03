var app = angular.module('sys');

app.controller('matCtrl', function ($scope,selects,helpers,dataSource,$location) {
	//Redirect to root when materials table is not loaded
	if(!dataSource.materiales){
		$location.path('/');
	}

	$scope.s0 = selects.objects.s0;

	$scope.material_t = dataSource.materiales;

	$scope.validate = function(validationType,model,db_pointer,db_table){
		helpers.validTrigger(validationType,model,db_pointer,db_table);
	};

	$scope.sendData = function(){
	}
});

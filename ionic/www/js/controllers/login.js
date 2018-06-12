angular.module('starter.controllers',[]).
controller('LoginCtrl',['$scope','OAuth','$ionicPopup','$state',function($scope,OAuth,$ionicPopup,$state){
	$scope.user = {
		username:'',
		password:''
	}
	$scope.login = function(){
		OAuth.getAccessToken($scope.user)
		.then(function(data){//sucesso
			$state.go('home');
		},function(responseError){//fracasso
			$ionicPopup.alert({
				title:'Atenção',
				template:'Login e/ou senha inválidos'
			})
			console.log("Erro",responseError);
		})
	}
}])
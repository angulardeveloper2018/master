app.controller('LoginCtrl', ['$scope', '$rootScope', '$stateParams', '$http', '$state', '$timeout', '$cookies', 'notification', function($scope, $rootScope, $stateParams, $http, $state, $timeout, $cookies, notification) {

    
    $scope.userData = {email:'test@gmail.com', password:'123456'};
    $scope.submited = 0;
    $scope.checkLogin = function() {
        $scope.submited = 1;

        if(!$scope.loginForm.$valid) {
            return true;
        }

        $http({
            method : "POST",
            url : $rootScope.path+"login/check-login",
            data : $scope.userData
        }).then(function mySuccess(response) {
            if(response.data.status==1) {
                notification.Message(response.data.msg, 'successMsg');
                $cookies.put('userdata', JSON.stringify(response.data.data));
                $rootScope.userdata = response.data.data;
                $state.go('/projects');
            } else {
                notification.Message(response.data.msg, 'errorMsg');
            }
        }, function myError(response) {
            notification.Message(response.data.msg, 'errorMsg');
        });
    }
    
    $scope.reset = function() {
        $scope.userData = {email:'', password:''};
    }

    $rootScope.logout = function() {
        $cookies.put('userdata', '');
        $state.go('/login');
        window.location.reload();
    }

}]);
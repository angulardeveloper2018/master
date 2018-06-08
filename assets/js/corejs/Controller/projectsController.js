app.controller('ProjectsCtrl', ['$scope', '$rootScope', '$http', '$mdDialog', 'notification', function($scope, $rootScope, $http, $mdDialog, notification) {

    $scope.projects = [];
    $scope.getProjects = function(){
        $http({
            method : "POST",
            url : $rootScope.path+"projects/list-projects"
        }).then(function mySuccess(response) {
            if(response.data.status==1) {
                $scope.projects = response.data.data;
            } else {
                $scope.projects = [];
                notification.Message(response.data.msg, 'errorMsg');
            }
        }, function myError(response) {
            notification.Message(response.data.msg, 'errorMsg');
        });
    };
    $scope.getProjects();

    $scope.deleteProject = function(ev, authkey, index) {
        var confirm = $mdDialog.confirm()
            .title('Warning!')
            .textContent('Would you like to delete task?')
            .ariaLabel('delete task')
            .targetEvent(ev)
            .ok('Yes')
            .cancel('No');

        $mdDialog.show(confirm).then(function() {
            $http({
                method : "POST",
                url : $rootScope.path+"projects/delete-project",
                data : {
                    authkey: authkey
                }
            }).then(function mySuccess(response) {
                if(response.data.status==1) {
                    $scope.projects.splice(index, 1);
                    notification.Message(response.data.msg, 'successMsg');
                } else {
                    notification.Message(response.data.msg, 'errorMsg');
                }
            }, function myError(response) {
                notification.Message(response.data.msg, 'errorMsg');
            });
        }, function() {
        });
    };
}]);

app.controller('ProjectCtrl', ['$scope', '$rootScope', '$stateParams', '$http', '$state', '$timeout', 'notification', function($scope, $rootScope, $stateParams, $http, $state, $timeout, notification) {

    $scope.projectData = {authkey:'', name:''};
    $scope.authkey = $stateParams.authkey ? $stateParams.authkey:'';

    if($stateParams.authkey) {
        $http({
            method : "POST",
            url : $rootScope.path+"projects/project-detail",
            data : {
                authkey: $stateParams.authkey
            }
        }).then(function mySuccess(response) {
            if(response.data.status==1) {
                $scope.projectData = response.data.data;
            } else {
                notification.Message(response.data.msg, 'errorMsg');
            }
        }, function myError(response) {
            notification.Message(response.data.msg, 'errorMsg');
        });
    }

    $scope.saveProject = function() {

        if(!$scope.projectForm.$valid) {
            return true;
        }

        $http({
            method : "POST",
            url : $rootScope.path+"projects/save-project",
            data : $scope.projectData
        }).then(function mySuccess(response) {
            if(response.data.status==1) {
                notification.Message(response.data.msg, 'successMsg');
                $state.go('/projects');
            } else {
                notification.Message(response.data.msg, 'errorMsg');
            }
        }, function myError(response) {
            notification.Message(response.data.msg, 'errorMsg');
        });
    }
    
}]);
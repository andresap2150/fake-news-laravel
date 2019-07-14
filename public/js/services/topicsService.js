var app = angular.module('topicsService', []);

app.factory('TopicsService',['$http', function ($http) {
    return {
        get:function(){
            return $http.get('topics');
        }
    };
}]);
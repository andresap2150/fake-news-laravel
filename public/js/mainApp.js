var app = angular.module('mainApp', ['mainRoutes', 'newsService','topicsService', 'ngAnimate', 'toastr', 'ui.bootstrap']);

app.controller('mainController', ['$scope', '$http', 'toastr', 'NewsService','TopicsService', function($scope, $http, toastr, NewsService, TopicsService) {
    $scope.lists = [];
    $scope.allTopics = [];
    $scope.allNews = [];
    
    var initializeNews = function() {
        NewsService.get().success(function(data) {
            $scope.allNews = data;
        });
        TopicsService.get().success(function(data){
            $scope.allTopics = data;
            console.log($scope.allTopics);
        });
    }
    
    initializeNews();

    $scope.addNews = function() {
        var title = $scope.newsTitle;
        var content = $scope.newsContent;
        var topicList = $scope.newsTopicsList;

        NewsService.add(title,content,topicList).success(function(data){
            $scope.newsTitle = "";
            $scope.newsContent = "";
            $scope.newsTopicsList= [];
            /*var arr= [];
            topicList.forEach(function(topicInfo){
                arr.push(topicInfo.id);
            });*/
            
            toastr.success('Succesfully added!!','Success');

            initializeNews();
            $scope.lists.push({
                id: data.id,
                title: title,
                content : content
            });
        }).error(function(){
            toastr.error('MMM something went wrong. please try again','Fail');
        });
    }    
}]);
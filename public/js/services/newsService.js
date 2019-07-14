var app = angular.module('newsService', []);

app.factory('NewsService',['$http', function ($http) {
    //var api_v1='api/v1/';

    return {
        add: function(newsTitle,newsContent,topicList){
        	var arr= [];
            topicList.forEach(function(topicInfo){
                arr.push(topicInfo.id);
            });
            var model = {
                title : newsTitle,
                content : newsContent,
                topics : arr
            }
            return $http.post('news',model);
        },
        get: function(){
        	return $http.get('news');
        }
    };
}]);

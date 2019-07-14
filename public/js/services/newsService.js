var app = angular.module('newsService', []);

app.factory('NewsService',['$http', function ($http) {
    //var api_v1='api/v1/';

    return {
        add: function(newsTitle,newsContent){
            var model = {
                title : newsTitle,
                content : newsContent
            }
            return $http.post('news',model);
        },
        /*getAllCompletedTodos: function(){
            return $http.get(api_v1+'todos/completed');
        },
        getActiveTodos: function(){
        	return $http.get(api_v1+'todos/active');
        },*/
        get: function(){
        	return $http.get('news');
        }/*,
        update: function(id,isDone,todoName){
            var model ={
                TodoName: todoName,
                IsDone: isDone
            }
            return $http.put(api_v1+'todos/'+id,model);
        }*/
    };
}]);

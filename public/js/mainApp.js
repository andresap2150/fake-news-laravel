var app = angular.module('mainApp', ['mainRoutes', 'newsService', 'ngAnimate', 'toastr', 'ui.bootstrap']);

app.controller('mainController', ['$scope', '$http', 'toastr', 'NewsService', function($scope, $http, toastr, NewsService) {
    $scope.lists = [];
    //$scope.completedTodos = [];
    $scope.allNews = [];
    
    var initializeNews = function() {
        /*TodoService.getActiveTodos().success(function (data) {
            $scope.lists = data;
            $scope.anyActiveTodos = $scope.lists.length;
            console.log($scope.lists);
        });*/
        NewsService.get().success(function(data) {
            $scope.allNews = data;
        });
        /*TodoService.getAllCompletedTodos().success(function(data) {
            $scope.completedTodos = data;
            console.log('completed Todos',$scope.completedTodos);
        });*/
    }
    
    initializeNews();

    $scope.addNews = function() {
        var title = $scope.newsTitle;
        var content = $scope.newsContent;

        NewsService.add(title,content).success(function(data){
            $scope.newsTitle = "";
            $scope.newsContent = "";
            toastr.success('agregado con exito!!','Success');
            //$scope.anyActiveTodos = true;

            initializeNews();
            $scope.lists.push({
                id: data.id,
                title: title,
                content : content
            });
        }).error(function(){
            toastr.error('MMM algo anda mal. Intente de nuevo mas tarde','Fail');
        });
    }
    /*$scope.done = function(list) {
        console.log('hecho');
        console.log(list);

        if (list.IsDone) {
            var todoIndex = $scope.lists.indexOf(list);

            TodoService.update(list.id,list.IsDone,list.TodoName).success(function() {
                $scope.anyActiveTodos = $scope.lists.length;

                initializeTodos();
                toastr.sucess('Se hizo un todo', 'Success');
            });
        }
    }*/    
}]);
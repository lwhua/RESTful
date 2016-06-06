/**
 * Created by kenkozheng on 2015/7/10.
 */
define(['angular', 'text!module1/tpl.html'], function (angular,tpl) {

    //angular会自动根据controller函数的参数名，导入相应的服务
    return {
        controller: function ($scope, $routeParams, $http, $interval) {
            // console.log($routeParams);  //获得路由中的参数
            $scope.info = 'kenko';      //向view/模版注入数据

            //模拟请求cgi获取数据，数据返回后，自动修改界面，不需要啰嗦的$('#xxx').html(xxx)
            $http.get('module1/tpl.html').success(function(data) {
                $scope.info = 'vivi';
            });

            var i = 0;
            //angularjs修改了原来的setTimeout和setInterval，要用这两个玩意，必须引入$timeout和$interval，否则无法修改angular范围内的东西
            $interval(function () {
                i++;
                $scope.info = i;
            }, 1000);
        },
        tpl: tpl
    };
    /*return function($scope, $http, $interval){
        $scope.info = 'kenko';      //向view/模版注入数据

        //模拟请求cgi获取数据，数据返回后，自动修改界面，不需要啰嗦的$('#xxx').html(xxx)
        $http.get('module1/tpl.html').success(function(data) {
            $scope.info = 'vivi';
        });

        var i = 0;
        //angularjs修改了原来的setTimeout和setInterval，要用这两个玩意，必须引入$timeout和$interval，否则无法修改angular范围内的东西
        $interval(function () {
            i++;
            $scope.info = i;
        }, 1000);
    };*/
});
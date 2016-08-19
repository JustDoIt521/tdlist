var app=angular.module('myapp',[]);
app.controller("test",function($scope,$http)
    {
            $scope.login=function()
            {
                var username=$scope.loginUsername;
                var password=$scope.loginPassword;
                var data={"what":"login","username":username,"password":password};
                $http.post("login.php",data).success(function(response)
                {
                	console.log(response);
                }).error(function()
                {
                	console.log("errorlogin!");
                });
            }
            $scope.register=function()
            {
            	var username=$scope.registerUsername;
            	var password=$scope.registerPassword;
            	var repeat=$scope.repeat;
            	if(password!=repeat)
            	{
            		console.log("errorPassword");
            	}
        	else
        	{
        		var data={
        				"what":"register",
        				"username":username,
        				"password":password
        			};
        		$http.post("login.php",data).success(function(response)
        		{
        			console.log(response);
        		}).error(function()
        		{
        			console.log("errorRegister");
        		});
        	}
            }
    });
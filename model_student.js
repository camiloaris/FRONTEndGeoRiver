(function ()
	{

		var module_student = angular.module('student',[ ]);

		module_student.controller
		('controller_student',function($scope)
			{
				$scope.d= profile;
			}
		);
		module_student.controller
		('panel_controller',function($scope)
			{
				$scope.tab=1;
				$scope.selecttab=function(settab){
					$scope.tab=settab;
				};
				$scope.selectis=function(checktab){
					return $scope.tab === checktab;
				};
			}
		);
		var profile=
		{
			name:'Camilo',
			last_name: 'Ariza',
			user:'carizas@unbosque.edu.co',
			password:'123',
		}
	}
)();
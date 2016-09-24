(function ()
	{

		var module_student = angular.module('student',[ ]);

		module_student.controller
		('controller_student',function()
			{
				this.d= profile;
			}
		);
		var profile=
		{
			name:'Camilo',
			last_name: 2.95,
			user:'carizas',
			email:'carizas@unbosque.edu.co',
			pasword:'123',
		}
	}
)();
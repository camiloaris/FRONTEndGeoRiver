(function ()
	{

		var module_student = angular.module('student',[ ]);

		module_student.controller
		('controller_student',function()
			{
				this.d= profile;
			}
		);
		module_student.controller
		('panel_controller',function()
			{
				this.tab=1;
				this.selecttab=function(settab){
					this.tab=settab;
				};
				this.selectis=function(checktab){
					return this.tab === checktab;
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
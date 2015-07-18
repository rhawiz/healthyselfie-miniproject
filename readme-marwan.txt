README 

to create a programme go to: http://4dac7bd8.ngrok.io/programme/create/
to view created programmes go to: http://4dac7bd8.ngrok.io/programme/show/


Routes POST requests via the route.php class and inserts new row in the MySql database through the store method in ProgrammeController.php


Relevant classes:

	Database migration class to create the programme table	'database\migrations\2015_07_16_104714_create_programme_table.php'
	Programme model class 	'app\Programme.php'
	Programme Controller class	'app\Http\Controllers\ProgrammeController.php'
	Route class		'app\Http\routes.php'
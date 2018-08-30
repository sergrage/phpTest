<?php 

namespace Controllers;
use Exception;
use Core\App;

class PagesController {

	public function home()
	{
		$table = 'todos';
		$todos = App::get('database')->selectAll($table, 'Task');
		
		return view('index', compact('table', 'todos'));
	}

	public function about()
	{
		require 'views/about.view.php';
	}

	public function names()
	{
		$table = 'todos';

		$_POST['completed'] ? $_POST['completed'] = true : $_POST['completed'] = 0;

		$todos = App::get('database')->insertAll($table, [
			'description' => $_POST['description'],
			'completed' => $_POST['completed']
		 ]);


		redirect('laracast01/');
		//require 'views/names.view.php';
	}
}

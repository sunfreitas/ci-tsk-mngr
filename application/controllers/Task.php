<?php 
/**
* 
*/
class Task extends CI_Controller
{
	/**
	* 
	*/
	function __construct(){
 		parent::__construct();
	}

	/**
	* GET /
	*/
	public function index()
	{
		echo 'My task list';
	}

	/**
	* GET /create
	* The CRUD starts here!
	*/
	public function create()
	{
		echo 'Create things here!';
	}

	/**
	* POST /save
	*/
	public function save()
	{
		echo 'Save things and redirect to new $id';
	}

	/**
	* GET /read
	*/
	public function read($id='')
	{
		echo "Show {$id} in read view";
	}

	/**
	* GET /edit
	*/
	public function edit($id='')
	{
		echo "Load update view";
	}

	/**
	* PUT /update
	*/
	public function update()
	{
		echo "Updating the model";
	}

	/**
	* DELETE /delete
	*/
	public function delete($id='')
	{
		echo "Deleting {$id}.";
	}
}
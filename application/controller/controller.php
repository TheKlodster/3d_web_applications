<?php
// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageMethod = null)
	{
		$this->load = new Load();
		$this->model = new Model();
		$this->$pageMethod();
	}

    function home()
	{
		$this->load->view('viewCocaCola');

	}

	function apiDrinksImages()
	{
		$data = $this->model->model3D_info();
		$this->load->view('view3DAppTest_2', $data);
	}

	function apiCreateTable()
	{
	  	// echo "Create table function";
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  
	function apiGetData()
	{
		$data = $this->model->dbGetData();
		$this->load->view('view3DAppData', $data);
	}  	
	
	function apiGetFlickrFeed()
	{
		$this->load->view('viewFlickrFeed');
	}

	function apiGetJson()
	{
		$this->load->view('viewJson');
	}
	
	function apiLoadImage()
	{
	   $data = $this->model->dbGetBrand();

	   $this->load->view('viewDrinks', $data);
	}

	// Load the Coca Cola view and get data from the model.
	function apiCocaCola()
	{
		$this->load->view('viewCocaCola');	
	}

	function apiGetCokeData()
	{
		$data = $this->model->dbGetData();
		echo json_encode($data);
	}  	  	
}
?>    
<?php
header('Access-Control-Allow-Origin: *');  
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
$dev = true;
//dispaying errors
if($dev){
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}

// database connections
$servername = "localhost";
$username = "root";
$password = "root";
$db = "sample";

$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
	$arr = array("stat"=>true,"content" => array(),"msg" =>'something went wrong with DB Connection');
	echo json_encode($arr);
	die();
} 

$case = isset($_REQUEST['event']) ?  $_REQUEST['event'] : 'home';
switch ($case) {
	case 'add-user':
		add_user();
		exit;
		break;
	case 'edit-user':
		edit_user();
		exit;
		break;
	case 'delete-user':
		delete_user();
		exit;
		break;
	case 'view-user':
		view_user();
		exit;
		break;
	case 'users':
		list_users();
		exit;
		break;
	case 'home':
		call_home();
		exit;
		break;
	default:
		call_404();
		exit;
		break;
}

/**
 * @author <mahesh/>
 * adding a new user.
 */
function add_user() {
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$post_vars = file_get_contents('php://input');
		$request_params = (array)json_decode($post_vars);
		
		if(count($request_params) != 5){
			$res = array(
				'data'=> array(),
				'msg' => 'we accept only 5 parameters, they are : `fname`, `lname`, `age`, `email`, `password` ',
				'status' => false
				);
			echo json_encode($res);
			exit;
		}

		$list_keys = array('fname', 'lname', 'age', 'email', 'password');
		foreach ($request_params as $key => $value) {
			if(!in_array($key, $list_keys)){
				$res = array(
					'data'=> array(),
					'msg' => 'we accept only these parameters `fname`, `lname`, `age`, `email`, `password` ',
					'status' => false
					);
				echo json_encode($res);
				exit;
			}
		}

		global $conn;
		foreach ($request_params as $key => $value) {
			$$key = $value;
		}

		reset_data();

		$sql = "INSERT INTO `users` (`fname`, `lname`, `age`, `email`, `password`) VALUES ( '$fname' , '$lname', '$age', '$email', '$password')";
		if ($conn->query($sql) === TRUE) {
		    $last_id = $conn->insert_id;
		    
		    $res = array(
				'data'=> array('insert_id' => $last_id),
				'msg' => 'Data successfully inserted.',
				'status' => true
				);
			echo json_encode($res);
			exit;
		} else {
			$res = array(
				'data'=> array(),
				'msg' => "Error: " . $sql . " :: " . $conn->error,
				'status' => false
				);
			echo json_encode($res);
			exit;
		}
	} else {
		$res = array(
			'data'=> array(),
			'msg' => 'this api accepts only HTTP-POST Method.',
			'status' => false
			);
		echo json_encode($res);
		exit;
	}
}

/**
 * @author <mahesh/>
 * editing the user
 */
function edit_user() {
	if($_SERVER['REQUEST_METHOD'] == 'PUT'){
		
		if(isset($_GET['id']) && !empty($_GET['id'])){
			$id = $_GET['id'];
		} else {
			$res = array(
				'data'=> array(),
				'msg' => 'Request URL is wrong. Eg: http://example.com/edit-user/3',
				'status' => false
				);
			echo json_encode($res);
			exit;
		}
		
		$post_vars = file_get_contents('php://input');
		$request_params = (array)json_decode($post_vars);

		if(count($request_params) != 5){
			$res = array(
				'data'=> array(),
				'msg' => 'we accept only 5 parameters, they are : `fname`, `lname`, `age`, `email`, `password`',
				'status' => false
				);
			echo json_encode($res);
			exit;
		}

		$list_keys = array('fname', 'lname', 'age', 'email', 'password');
		foreach ($request_params as $key => $value) {
			if(!in_array($key, $list_keys)){
				$res = array(
					'data'=> array(),
					'msg' => 'we accept only these parameters `fname`, `lname`, `age`, `email`, `password`',
					'status' => false
					);
				echo json_encode($res);
				exit;
			}
		}

		global $conn;
		foreach ($request_params as $key => $value) {
			$$key = $value;
		}

		$sql = "UPDATE  `users` SET  `fname` = '$fname',
				`lname` =  '$lname',
				`age` =  '$age',
				`email` =  '$email',
				`password` =  '$password' WHERE  `id` = $id";
		if ($conn->query($sql) === TRUE) {
		    $res = array(
				'data'=> array('updated_id' => $id),
				'msg' => 'Data successfully updated.',
				'status' => true
				);
			echo json_encode($res);
			exit;
		} else {
			$res = array(
				'data'=> array(),
				'msg' => "Error: " . $sql . " :: " . $conn->error,
				'status' => false
				);
			echo json_encode($res);
			exit;
		}
	} else {
		$res = array(
			'data'=> array(),
			'msg' => 'this api accepts only HTTP-PUT Method.',
			'status' => false
			);
		echo json_encode($res);
		exit;
	}

}

/**
 * @author <mahesh/>
 * delete the user
 */

function delete_user() {
	global $conn;
	if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
		if(isset($_GET['id']) && !empty($_GET['id'])){
			$id = $_GET['id'];
		} else {
			$res = array(
				'data'=> array(),
				'msg' => 'Request URL is wrong. Eg: http://example.com/delete-user/3',
				'status' => false
				);
			echo json_encode($res);
			exit;
		}
		$sql = "delete from users where id= $id";
		if ($conn->query($sql) === TRUE) {
		    $res = array(
				'data'=> array('deleted_id' => $id),
				'msg' => 'Data successfully deleted.',
				'status' => true
				);
			echo json_encode($res);
			exit;
		} else {
			$res = array(
				'data'=> array(),
				'msg' => "Error: " . $sql . " :: " . $conn->error,
				'status' => false
				);
			echo json_encode($res);
			exit;
		}

	} else {
		$res = array(
			'data'=> array(),
			'msg' => 'this api accepts only HTTP-DELETE Method.',
			'status' => false
			);
		echo json_encode($res);
		exit;
	}
}

/**
 * @author <mahesh/>
 * view a particular user
 */
function view_user() {
	global $conn;
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		if(isset($_GET['id']) && !empty($_GET['id'])){
			$id = $_GET['id'];
		} else {
			$res = array(
				'data'=> array(),
				'msg' => 'Request URL is wrong. Eg: http://example.com/delete-user/3',
				'status' => false
				);
			echo json_encode($res);
			exit;
		}
		$sql = "select * from users where id= $id";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    $res = [];
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	$res = $row;
		    }

		    $res = array(
				'data'=> $res,
				'msg' => '',
				'status' => true
				);
			echo json_encode($res);
			exit;
		} else {
		    $res = array(
				'data'=> array(),
				'msg' => 'No User found.',
				'status' => false
				);
			echo json_encode($res);
			exit;
		}
	} else {
		$res = array(
			'data'=> array(),
			'msg' => 'this api accepts only HTTP-GET Method.',
			'status' => false
			);
		echo json_encode($res);
		exit;
	}
}

/**
 * @author <mahesh/>
 * list the users
 */
function list_users() {
	global $conn;
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		$sql = "select * from users";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    $res = [];
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	$res[] = $row;
		    }

		    $res = array(
				'data'=> $res,
				'msg' => '',
				'status' => true
				);
			echo json_encode($res);
			exit;
		} else {
		    $res = array(
				'data'=> array(),
				'msg' => 'No Users found.',
				'status' => false
				);
			echo json_encode($res);
			exit;
		}
	} else {
		$res = array(
			'data'=> array(),
			'msg' => 'this api accepts only HTTP-GET Method.',
			'status' => false
			);	
		echo json_encode($res);
		exit;
	}
}

/**
 * @author <mahesh/>
 * showing the home page
 */
function call_home() {
	include('home.php');	
}

/**
 * @author <mahesh/>
 * showing the 404 Page
 */
function call_404() {
	include('404.php');
}

/**
 * @author <mahesh/>
 * if the list of users are more than 50, we will clear the list of users and re create 10 users.
 */
function reset_data(){
	global $conn;
	$count_sql = "select * from users";
	$count_res = $conn->query($count_sql);
	$users_count = $count_res->num_rows; 
	if($users_count > 50) {
		$truncate_sql = "truncate table users";
		$conn->query($truncate_sql);

		$input_arr = 
		[
			[
				'fname'=> 'Mahesh',
				'lname'=> 'Perla',
				'age'=> '23',
				'email'=> 'mahesh@gmail.com',
				'password'=> 'mahesh213',
			],
			[
				'fname'=> 'Ramesh',
				'lname'=> 'Reddy',
				'age'=> '2t',
				'email'=> 'ramehs@gmail.com',
				'password'=> 'ramehs143',
			],
			[
				'fname'=> 'Krishan',
				'lname'=> 'koundanyia',
				'age'=> '20',
				'email'=> 'kkr@gmail.com',
				'password'=> 'kk3213',
			],
			[
				'fname'=> 'Umang',
				'lname'=> 'tripathi',
				'age'=> '23',
				'email'=> 'tumang@gmail.com',
				'password'=> 'tumang3613',
			],
			[
				'fname'=> 'Mukesh',
				'lname'=> 'Ambani',
				'age'=> '45',
				'email'=> 'amaniM@gmail.com',
				'password'=> 'amaniM213',
			],
			[
				'fname'=> 'Kailesh',
				'lname'=> 'yadav',
				'age'=> '56',
				'email'=> 'kailash@gmail.com',
				'password'=> 'kailash@#',
			],
			[
				'fname'=> 'Girish',
				'lname'=> 'kulkarni',
				'age'=> '92',
				'email'=> 'giriesh@gmail.com',
				'password'=> 'kulkarni098',
			],
			[
				'fname'=> 'amit',
				'lname'=> 'tripathi',
				'age'=> '53',
				'email'=> 'amit@gmail.com',
				'password'=> 'amit12',
			],
			[
				'fname'=> 'sandep',
				'lname'=> 'boyina',
				'age'=> '17',
				'email'=> 'boyinaS@gmail.com',
				'password'=> 'bbbs9643',
			],
			[
				'fname'=> 'lalit',
				'lname'=> 'kumar',
				'age'=> '22',
				'email'=> 'lalit@gmail.com',
				'password'=> 'lalit45',
			],
		];

		foreach ($input_arr as $user) {
			foreach ($user as $key => $value) {
				$$key = $value;
			}
			$insert_query = "insert into users(`fname`, `lname`, `age`, `email`, `password`) VALUES ('$fname', '$lname', '$age', '$email', '$password');";

			$conn->query($insert_query);
		}
	}

	return true;
}

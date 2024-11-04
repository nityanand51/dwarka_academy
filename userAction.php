<?php 
 
// Load and initialize database class 
require_once 'DB.class.php'; 

$db = new DB(); 
 
if(($_POST['action'] == 'addNew')){
	
	$userData = array( 
        'first_name' => $_POST['first_name'], 
        'job_profile' => $_POST['job_profile'], 
        'email' => $_POST['email'], 
        'mobile' => $_POST['mobile'], 
		'status' => $_POST['status'] 
    ); 
    
    $add_row = $db->add_row($userData); 
 
    if($add_row){ 
        $response = array( 
            'status' => 1, 
            'msg' => 'Member data added successfully.', 
            'data' => $userData 
        ); 
    }else{ 
        $response = array( 
            'status' => 0, 
            'msg' => 'Something went wrong!' 
        ); 
    } 
     
    echo json_encode($response); 
    exit(); 
	
}
if(($_POST['action'] == 'edit') && !empty($_POST['id'])){ 
    // Update data 
    $userData = array( 
        'first_name' => $_POST['first_name'], 
        'job_profile' => $_POST['job_profile'], 
        'email' => $_POST['email'], 
        'mobile' => $_POST['mobile'], 
		'status' => $_POST['status'] 
    ); 
    $condition = array( 
        'id' => $_POST['id'] 
    ); 
    $update = $db->update($userData, $condition); 
 
    if($update){ 
        $response = array( 
            'status' => 1, 
            'msg' => 'Member data has been updated successfully.', 
            'data' => $userData 
        ); 
    }else{ 
        $response = array( 
            'status' => 0, 
            'msg' => 'Something went wrong!' 
        ); 
    } 
     
    echo json_encode($response); 
    exit(); 
}elseif(($_POST['action'] == 'add_seminar') ){
	
	
}elseif(($_POST['action'] == 'delete') && !empty($_POST['id'])){ 
    // Delete data 
    $condition = array('id' => $_POST['id']); 
    $delete = $db->delete($condition); 
 
    if($delete){ 
        $returnData = array( 
            'status' => 1, 
            'msg' => 'Member data has been deleted successfully.' 
        ); 
    }else{ 
        $returnData = array( 
            'status' => 0, 
            'msg' => 'Something went wrong!' 
        ); 
    } 
     
    echo json_encode($returnData); 
    exit(); 
} 
 
?>
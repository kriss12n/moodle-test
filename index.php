<?php 

require_once dirname(__FILE__) . '/MoodleRest.php';
$MoodleRest = new MoodleRest();
$MoodleRest->setServerAddress("https://educacion.citizenapp.cl/webservice/rest/server.php");
$MoodleRest->setToken('5da89f5f2ca98b8f3d3582933c4d7095');
// $groups = $MoodleRest->request(
//     'core_group_get_groups', 
//     array('groupids' => array(1,2))
// );

// print_r($groups);

$users = $MoodleRest->request(
    'core_user_get_users',
    array("criteria"=>array(
        array(
            "key"=>"username",
            "value"=>"rodrigo"
        ),
            array(
            "key"=>"lastname",
            "value"=>"Herrera"
            )
        )
    )

);

 echo json_encode($users);



// $notes = $MoodleRest->request(
//     'core_notes_get_notes', 
//     array('notes' => array(1))
// );

// print_r($notes);

?>
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



// $notes = $MoodleRest->request(
//     'core_notes_get_notes', 
//     array('notes' => array(1))
// );

// print_r($notes);

$users = $MoodleRest->request(
    'core_user_get_users',
    array("criteria"=>array(
        array(
            "key"=>"id",
            "value"=>"12"
        ),
        )
    ),
    MoodleRest::RETURN_JSON
);

print_r($users);

// //  $notes = $MoodleRest->request(
// //     'enrol_self_get_instance_info', 
// //     array('instanceid' => 4)
// // );

// // print_r($notes);



//  crear usuario 

// $new_user = array("users"=>array(
//             array("username" => "mancha",
//                 "firstname" => "Guillermo",
//                 'lastname' =>'Parra',
//                 'email' => 'mancha@gmail.com',
//                 'password' => '$$Mem1to**-',
//                 'customfields'=> array(
//                     array(
//                         "type"=>"rol",
//                         "value"=>"1"
//                         )
                
//             )
//             )
//         )  
//     );

// $return = $MoodleRest->request(
//     'core_user_create_users', 
//     $new_user, 
//     MoodleRest::METHOD_POST
// );

// print_r($return);

?>
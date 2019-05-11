<?php

$json = array(
    'name' => 'nama adalah string',
    'alamat' => 'alamat adalah string',
    'hobbies' => array('koding','copas','tauran'),
    'is_married ' => (true ? true : false),
    'school ' => array('highschool' => 'as', 'university' => 'aba'),
    'skills ' => array('skills'=>array('name','score'))
);

echo json_encode($json)."\n";

<?php

return [
    [
        'uri_path_pattern' => '/^quiz$/',
        'method' => 'GET',
        'handler_path' => '/quiz/Get.php',
        'handler_class_name' => 'api\\quiz\\Get',
        'handler_class' => 'Get' 
    ],
    [
        'uri_path_pattern' => '/^quiz$/',
        'method' => 'POST',
        'handler_path' => '/quiz/Create.php',
        'handler_class_name' => 'api\\quiz\\Create',
        'handler_class' => 'Create'
    ],
    [
        'uri_path_pattern' => '/^quiz\/(?<id>[0-9]+)$/',
        'method' => 'GET',
        'handler_path' => '/quiz/GetById.php',
        'handler_classname' => 'api\\quiz\\GetById',
        'handler_class' => 'GetById' 
    ],
    [
        'uri_path_pattern' => '/^answer$/',
        'method' => 'GET',
        'handler_path' => '/answer/Get.php',
        'handler_class_name' => 'api\\answer\\Get',
        'handler_class' => 'Get' 
    ],
    [
        'uri_path_pattern' => '/^answer$/',
        'method' => 'POST',
        'handler_path' => '/answer/Create.php',
        'handler_class_name' => 'api\\answer\\Create',
        'handler_class' => 'Create'
    ],
    [
        'uri_path_pattern' => '/^answer\/(?<id>[0-9]+)$/',
        'method' => 'GET',
        'handler_path' => '/answer/GetById.php',
        'handler_classname' => 'api\\answer\\GetById',
        'handler_class' => 'GetById' 
    ],
    [
        'uri_path_pattern' => '/^question$/',
        'method' => 'GET',
        'handler_path' => '/question/Get.php',
        'handler_class_name' => 'api\\question\\Get',
        'handler_class' => 'Get' 
    ],
    [
        'uri_path_pattern' => '/^question$/',
        'method' => 'POST',
        'handler_path' => '/question/Create.php',
        'handler_class_name' => 'api\\question\\Create',
        'handler_class' => 'Create'
    ],
    [
        'uri_path_pattern' => '/^question\/(?<id>[0-9]+)$/',
        'method' => 'GET',
        'handler_path' => '/question/GetById.php',
        'handler_classname' => 'api\\question\\GetById',
        'handler_class' => 'GetById' 
    ],
    [
        'uri_path_pattern' => '/^role$/',
        'method' => 'GET',
        'handler_path' => '/role/Get.php',
        'handler_class_name' => 'api\\role\\Get',
        'handler_class' => 'Get' 
    ],
    [
        'uri_path_pattern' => '/^role$/',
        'method' => 'POST',
        'handler_path' => '/role/Create.php',
        'handler_class_name' => 'api\\role\\Create',
        'handler_class' => 'Create'
    ],
    [
        'uri_path_pattern' => '/^role\/(?<id>[0-9]+)$/',
        'method' => 'GET',
        'handler_path' => '/role/GetById.php',
        'handler_classname' => 'api\\role\\GetById',
        'handler_class' => 'GetById' 
    ],
    [
        'uri_path_pattern' => '/^school$/',
        'method' => 'GET',
        'handler_path' => '/school/Get.php',
        'handler_class_name' => 'api\\school\\Get',
        'handler_class' => 'Get' 
    ],
    [
        'uri_path_pattern' => '/^school$/',
        'method' => 'POST',
        'handler_path' => '/school/Create.php',
        'handler_class_name' => 'api\\school\\Create',
        'handler_class' => 'Create'
    ],
    [
        'uri_path_pattern' => '/^school\/(?<id>[0-9]+)$/',
        'method' => 'GET',
        'handler_path' => '/school/GetById.php',
        'handler_classname' => 'api\\school\\GetById',
        'handler_class' => 'GetById' 
    ],
    [
        'uri_path_pattern' => '/^staff$/',
        'method' => 'GET',
        'handler_path' => '/staff/Get.php',
        'handler_class_name' => 'api\\staff\\Get',
        'handler_class' => 'Get' 
    ],
    [
        'uri_path_pattern' => '/^staff$/',
        'method' => 'POST',
        'handler_path' => '/staff/Create.php',
        'handler_class_name' => 'api\\staff\\Create',
        'handler_class' => 'Create'
    ],
    [
        'uri_path_pattern' => '/^staff\/(?<id>[0-9]+)$/',
        'method' => 'GET',
        'handler_path' => '/staff/GetById.php',
        'handler_classname' => 'api\\staff\\GetById',
        'handler_class' => 'GetById' 
    ],
    [
        'uri_path_pattern' => '/^student$/',
        'method' => 'GET',
        'handler_path' => '/student/Get.php',
        'handler_class_name' => 'api\\student\\Get',
        'handler_class' => 'Get' 
    ],
    [
        'uri_path_pattern' => '/^student$/',
        'method' => 'POST',
        'handler_path' => '/student/Create.php',
        'handler_class_name' => 'api\\student\\Create',
        'handler_class' => 'Create'
    ],
    [
        'uri_path_pattern' => '/^student\/(?<id>[0-9]+)$/',
        'method' => 'GET',
        'handler_path' => '/student/GetById.php',
        'handler_classname' => 'api\\student\\GetById',
        'handler_class' => 'GetById' 
    ],
    [
        'uri_path_pattern' => '/^subject$/',
        'method' => 'GET',
        'handler_path' => '/subject/Get.php',
        'handler_class_name' => 'api\\subject\\Get',
        'handler_class' => 'Get' 
    ],
    [
        'uri_path_pattern' => '/^subject$/',
        'method' => 'POST',
        'handler_path' => '/subject/Create.php',
        'handler_class_name' => 'api\\subject\\Create',
        'handler_class' => 'Create'
    ],
    [
        'uri_path_pattern' => '/^subject\/(?<id>[0-9]+)$/',
        'method' => 'GET',
        'handler_path' => '/subject/GetById.php',
        'handler_classname' => 'api\\subject\\GetById',
        'handler_class' => 'GetById' 
    ],
    [
        'uri_path_pattern' => '/^classes$/',
        'method' => 'GET',
        'handler_path' => '/classes/Get.php',
        'handler_class_name' => 'api\\classes\\Get',
        'handler_class' => 'Get' 
    ],
    [
        'uri_path_pattern' => '/^classes$/',
        'method' => 'POST',
        'handler_path' => '/classes/Create.php',
        'handler_class_name' => 'api\\classes\\Create',
        'handler_class' => 'Create'
    ],
    [
        'uri_path_pattern' => '/^classes\/(?<id>[0-9]+)$/',
        'method' => 'GET',
        'handler_path' => '/classes/GetById.php',
        'handler_classname' => 'api\\classes\\GetById',
        'handler_class' => 'GetById' 
    ],
    // [
    //     'uri_path_pattern' => '/^patient\/email$/',
    //     'method' => 'POST',
    //     'handler_path' => '/patient/GetByEmail.php',
    //     'handler_classname' => 'api\\patient\\GetByEmail',
    //     'handler_class' => 'GetByEmail'
    // ],
    // [
    //     'uri_path_pattern' => '/^patient$/',
    //     'method' => 'PUT',
    //     'handler_path' => '/patient/Update.php',
    //     'handler_classname' => 'api\\patient\\Create',
    //     'handler_class' => 'Update'
    // ],
    // [
    //     'uri_path_pattern' => '/^connect\/login$/',
    //     'method' => 'POST',
    //     'handler_path' => '/connect/Login.php',
    //     'handler_classname' => 'api\\connect\\Login',
    //     'handler_class' => 'Login'
    // ],
];
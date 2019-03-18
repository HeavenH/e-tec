<?php
    // Headers

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../src/config/database.php';
    include_once '../../src/models/users.php';

    // instancia db e connect

    $database = new Database();
    $db = $database->connectDatabase();

    // instancia post object

    $userApi = new Users($db);

    // Armazena na varaiavel result
    $result = $userApi->readUsers();

    // row count
    $row = $result->rowCount();

    // checa se existe usuarios
    if($row > 0) {
        // Coloca os usuarios em um array
        $users = array();
        $users_arr['users'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            extract($row);

            $user_data = array(
                'id' => $iduser,
                'username' => $username
            );

            // Coloca dentro da data
            array_push($users_arr['users'], $user_data);
        }

        // transformara para JSON

        echo json_encode($users_arr);
    } else {
        // No users
        echo json_encode(
            array('message' => 'No Users found')
        );
    }
?>

<?php 

function register_exist($email, $conn)
{

    global $conn;

$statement = "SELECT id FROM user WHERE `email` = ? LIMIT 1";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();

if (mysqli_num_rows($result) >= 1) {


    return TRUE;
} else {

    return FALSE;
}
};


// function exist_username($username, $conn)
// {

//     global $conn;

// $statement = "SELECT user_id FROM users WHERE `username` = ? LIMIT 1";
// $stmt = $conn->prepare($statement);
// $stmt->bind_param("s", $username);
// $stmt->execute();

// $result = $stmt->get_result();

// if (mysqli_num_rows($result) >= 1) {


//     return TRUE;
// } else {

//     return FALSE;
// }
// };
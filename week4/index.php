!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 4 Loop</title>
</head>
<body>

<h1>User List</h1>

<?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
}

// Get the list of users
$users = getUsers();

// Check if users were fetched successfully
if (count($users) > 0) {
    for ($i = 0; $i < count($users); $i++) {
        echo "Name: " . $users[$i]['name'] . '<br>';
        echo "Username: " . $users[$i]['username'] . "<br>";
        echo "Phone Number: " . $users[$i]['phone'] . '<br>';
        echo "Email: " . $users[$i]['email'] . '<br><br>';
    }
}
?>

</body>
</html>
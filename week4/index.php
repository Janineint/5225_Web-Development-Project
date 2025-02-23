<!DOCTYPE html>
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
if (!empty($users)) {
    echo "<ul>"
    echo "<li><strong>Name:</strong> {$user['name']} -<strong>Username:</strong> {$user['username']}<mailto strong>Email:</strong> {$user['email']}</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No users found.</p>";
}
?>

</body>
</html>

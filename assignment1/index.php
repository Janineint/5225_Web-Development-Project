<!DOCTYPE html>
<html>
<head>
    <title>Question Filter</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include('reusables/connection.php'); ?>

<div class="container mt-4">
    <h2 class="mb-3">Leetcode Practice</h2>
    <form method="GET" action="index.php" class="p-4 bg-light shadow-sm rounded">
        <div class="mb-3">
            <label for="tag" class="form-label">Tag:</label>
            <select id="tag" name="tag" class="form-select">
                <option value="">Select Tag</option>
                <?php
                $tags = [
                    "Array", "String", "Hash Table", "Dynamic Programming", "Math", "Sorting", "Greedy",
                    "Depth-First Search", "Binary Search", "Database", "Matrix", "Tree", "Breadth-First Search",
                    "Bit Manipulation", "Two Pointers", "Prefix Sum", "Heap (Priority Queue)", "Binary Tree",
                    "Simulation", "Stack", "Graph", "Counting", "Sliding Window", "Design", "Enumeration",
                    "Backtracking", "Union Find", "Linked List", "Number Theory", "Ordered Set", "Monotonic Stack",
                    "Segment Tree", "Trie", "Combinatorics", "Bitmask", "Queue", "Divide and Conquer", "Recursion",
                    "Memoization", "Binary Indexed Tree", "Geometry", "Binary Search Tree", "Hash Function",
                    "String Matching", "Topological Sort", "Shortest Path", "Rolling Hash", "Game Theory",
                    "Interactive", "Data Stream", "Monotonic Queue", "Brainteaser", "Randomized", "Merge Sort",
                    "Doubly-Linked List", "Counting Sort", "Iterator", "Concurrency", "Probability and Statistics",
                    "Quickselect", "Suffix Array", "Bucket Sort", "Line Sweep", "Minimum Spanning Tree", "Shell",
                    "Reservoir Sampling", "Strongly Connected Component", "Eulerian Circuit", "Radix Sort",
                    "Rejection Sampling", "Biconnected Component"
                ];
                
                foreach ($tags as $t) {
                    $selected = (isset($_GET['tag']) && $_GET['tag'] === $t) ? "selected" : "";
                    echo "<option value='$t' $selected>$t</option>";
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="difficulty" class="form-label">Difficulty:</label>
            <select id="difficulty" name="difficulty" class="form-select">
                <option value="">Select Difficulty</option>
                <option value="Easy" <?= (isset($_GET['difficulty']) && $_GET['difficulty'] === "Easy") ? "selected" : "" ?>>Easy</option>
                <option value="Medium" <?= (isset($_GET['difficulty']) && $_GET['difficulty'] === "Medium") ? "selected" : "" ?>>Medium</option>
                <option value="Hard" <?= (isset($_GET['difficulty']) && $_GET['difficulty'] === "Hard") ? "selected" : "" ?>>Hard</option>
            </select>
        </div>

        <input type="submit" value="Filter" class="btn btn-primary w-100 mb-2">

        <!-- Pick Random Question Button -->
        <button type="submit" name="random" class="btn btn-success w-100">Pick One Question for Me</button>
    </form>

    <?php
    $tag = isset($_GET['tag']) ? $_GET['tag'] : '';
    $difficulty = isset($_GET['difficulty']) ? $_GET['difficulty'] : '';
    $random = isset($_GET['random']);

    $sql = "SELECT q.question_id, q.question, q.tag, q.acceptance_rate, q.isPremium, q.difficulty, l.question_Link
            FROM question q
            JOIN link l ON q.question_id = l.question_id
            WHERE 1=1";

    if ($tag != '') {
        $sql .= " AND q.tag LIKE '%$tag%'";
    }

    if ($difficulty != '') {
        $sql .= " AND q.difficulty = '$difficulty'";
    }

    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table table-striped mt-4 shadow-sm'>
                <thead class='table-primary'>
                    <tr>
                        <th>Question</th>
                        <th>Tags</th>
                        <th>Acceptance Rate</th>
                        <th>Difficulty</th>
                    </tr>
                </thead>
                <tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td><a href='" . $row["question_Link"] . "' target='_blank'>" . $row["question"] . "</a></td>
                    <td>" . $row["tag"] . "</td>
                    <td>" . $row["acceptance_rate"] . "</td>
                    <td>" . $row["difficulty"] . "</td>
                  </tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<p class='mt-4 alert alert-warning'>No results found</p>";
    }



    $connect->close();
    ?>
</div>

</body>
</html>
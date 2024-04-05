<?php
include 'db_connect.php';

// Fetch tutorials


// Fetch articles
$articles_query = "SELECT * FROM articles";
$articles_result = $conn->query($articles_query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 0;
   
}

.banner {
    position: relative;
}

.banner h1 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 2em;
    text-align: center;
    margin: 0;
}

.banner img {
    width: 100%;
    height: 200px;
}

nav {
    background-color: #333;
    padding: 10px;
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

nav li {
    display: inline-block;
    margin-right: 20px;
    color: white;
}

.main-content {
    display: flex;
    
}

.left-container {
    
    width:75%;
}

.right-container {
    
    width:105%;
}


.left-container iframe {

    
    left: 0;
    width: 100%; /* Set a specific width, for example: 640px */
    height: 10px%; /* Set a specific height, for example: 360px */
}


.right-container img {
    width: 65%;
    height: 20%
}

footer {
    margin-top: auto;
    text-align: center;
    background-color: #333;
    color: white;
    padding: 20px;
    width: 100%;
    position: fixed;
    bottom: 0;
}
</style>
</head>
<body>
<div class="banner">
    <h1>Coffee is life</h1>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQe3jcYhKgV4AES7Kw6m1kA_quxjzlN9kg2fg&s"Contact Banner Image">
</div>




<!-- Main Content Section -->

    <!-- Right Container -->
    <div class="right-container">
        <h2>Types of Coffee</h2>
        <ul>
            <?php while ($article = $articles_result->fetch_assoc()): ?>
                <li>
                    <h3><?php echo $article['title']; ?></h3>
                    <img src="<?php echo $article['image_url']; ?>" alt="<?php echo $article['title']; ?>">
                    <p><?php echo $article['content']; ?></p>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</section>

<!-- Footer -->
<footer>
    Nandita 2020107486
</footer>

</body>
</html>


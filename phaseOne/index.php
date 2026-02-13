<?php
require_once 'includes/header.php'; #holy load issue brother
require_once 'includes/connect.php'; #connects to the database
?>

<body>
    <main class="layout">
        <header class="header"> <!-- I did use AI right here I will admit -->
            <img src="img/gob.png"
                onerror="this.src='../img/gob.png'; this.onerror='this.src=&#34;../../img/gob.png&#34;; this.onerror=null;'"
                class="logo" alt="TrollPost Logo">
            <h1 class="embossed"> TrollPost </h1>


            <input type="text" id="searchBar" placeholder="Scry?" class="form-control">
            <button id="signin" class="btn btn-primary" onclick="window.location.href='pages/SL.php'"> Sign In </button>
            <button id="signup" class="btn btn-secondary" onclick="window.location.href='pages/SL.php'"> Sign Up
            </button>
        </header>

        <!-- Layout for clickable hero cards and that can pop out to showcase the HERO OF THE WEEK -->
        <section id="HOTWContainer" class="leftSide">
            <h2> <abbr title="Heroes of the Week">H.O.T.W</abbr> </h2>
            <div id="Hero1" class="HeroCard">
                <h3> Hero 1 </h3>
                <p> Description of Hero 1 </p>
            </div>
            <div id="Hero2" class="HeroCard">
                <h3> Hero 2 </h3>
                <p> Description of Hero 2 </p>
            </div>
            <div id="Hero3" class="HeroCard">
                <h3> Hero 3 </h3>
                <p> Description of Hero 3 </p>
            </div>
        </section>

        <section class="body">
            <div id="CreatePostsContainer">
                <form action="process.php" method="post" id="PostForm">
                    <input type="hidden" name="action" value="create">
                    <label for="PostContent"> Your Post: </label>
                    <textarea id="PostContent" name="content" rows="4" cols="50" maxlength="500"
                        placeholder="Write your troll post here..."></textarea>
                    <input type="submit" value="Submit Post">
                </form>
            </div>
            <!-- LE ASSIGNMENT -->
            <div id="FeedContainer">
                <h2>Recent Posts</h2>
                <?php
                $stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC"); // Fetch all posts ordered by creation time, newest first
                while ($post = $stmt->fetch()): // Loop through each post and display it
                    ?>
                    <div class="PostCard" id="post-<?php echo $post['id']; ?>">
                        <!-- Each post card has a unique ID based on the post ID for easy JavaScript manipulation -->
                        <div class="post-header">
                            <!--<h3>Post <?php //echo $post['id']; ?></h3>-->
                            <!-- Optionally display the post ID as a header -->
                            <span class="post-meta"><?php echo $post['created_at']; ?></span>
                        </div>

                        <div id="display-<?php echo $post['id']; ?>">
                            <p class="content-text"><?php echo htmlspecialchars($post['content']); ?></p>
                        </div>

                        <div class="post-footer">
                            <button class="btn-interaction" onclick="toggleEdit(<?php echo $post['id']; ?>)">Edit</button>

                            <form action="process.php" method="POST" style="display:inline;">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                                <button type="submit" class="btn-interaction">Delete</button>
                            </form>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>

        <!-- Joke Container for silly made up stories like "Local man becomes Giant" or "Whizbang's new line of gnome-sized furniture is a hit" -->
        <aside id="TrendingContainer" class="rightSide">
            <h3>Trending</h3>
        </aside>

        <aside id="AdvertContainer" class="rightSideAlt">
            <h3>Advertisements</h3> <!-- Joke advert for the gnome emporium -->
        </aside>

        <script src="js/postmod.js"></script> <!-- benny called me silly :( for forgetting this -->

        <?php
        require_once 'includes/footer.php';
        ?>
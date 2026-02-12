<?php
include 'includes/header.php';
?>
<input type="text" id="searchBar" placeholder="Scry?" class="form-control">
<button id="signin" class="btn btn-primary" onclick="window.location.href='pages/Signin.php'"> Sign In </button>
<button id="signup" class="btn btn-secondary" onclick="window.location.href='pages/Signup.php'"> Sign Up </button>
</header>


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
            <label for="PostContent"> Your Post: </label>
            <textarea id="PostContent" name="PostContent" rows="4" cols="50" maxlength="500"
                placeholder="Write your troll post here..."></textarea>
            <input type="submit" value="Submit Post">
        </form>
    </div>

    <div id="FeedContainer">
        <h2>Recent Posts</h2>
        <div class="PostCard">
            <div class="post-header">
                <h3>Post Title 1</h3>
                <span class="post-meta">2 hours ago</span>
            </div>
            <p>Content of Post 1</p>
            <div class="post-footer">
                <button class="btn-interaction">Like</button>
                <button class="btn-interaction">Reply</button>
            </div>
        </div>
        <div class="PostCard">
            <div class="post-header">
                <h3>Post Title 2</h3>
                <span class="post-meta">4 hours ago</span>
            </div>
            <p>Content of Post 2</p>
            <div class="post-footer">
                <button class="btn-interaction">Like</button>
                <button class="btn-interaction">Reply</button>
            </div>
        </div>
        <div class="PostCard">
            <div class="post-header">
                <h3>Post Title 3</h3>
                <span class="post-meta">6 hours ago</span>
            </div>
            <p>Content of Post 3</p>
            <div class="post-footer">
                <button class="btn-interaction">Like</button>
                <button class="btn-interaction">Reply</button>
            </div>
        </div>
    </div>
</section>

<aside id="TrendingContainer" class="rightSide">
    <h3>Trending</h3>
</aside>

<aside id="AdvertContainer" class="rightSideAlt">
    <h3>Advertisements</h3> <!-- Joke advert for the gnome emporium -->
</aside>

<?php
include 'includes/footer.php';
?>
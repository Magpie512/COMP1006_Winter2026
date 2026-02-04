<?php require 'includes/header.php'; ?>

<main>
    <section id="HOTWContainer">
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
    
    <section id="PostsContainer">
        <button id="CreatePost"> Create Post </button>
        <form action="process.php" method="post" id="PostForm">
            <label for="PostContent"> Your Post: </label>
            <textarea id="PostContent" name="PostContent" rows="4" cols="50" maxlength="500" placeholder="Write your troll post here..."></textarea>
            <br>
            <input type="submit" value="Submit Post">
        </form>

        <h2>Postings</h2>

    </section>

    <aside id="TrendingCointainer">
        <h3>Trending</h3>
    </aside>

    <aside id="AdverContainer">
        <h3>Advertisements</h3> <!-- Joke advert for the gnome emporium -->
    </aside>
</main> 

<?php require 'includes/footer.php'; ?>
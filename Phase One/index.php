<?php require 'includes/header.php'; ?>

<main>
    <section id="HOTW">
        <h2> <abbr title="Heroes of the Week">H.O.T.W</abbr> </h2> 
    </section>
    
    <section id="Posts">
        <button id="CreatePost"> Create Post </button>\
        <form action="process.php" method="post" id="PostForm">
            <label for="PostContent"> Your Post: </label>
            <textarea id="PostContent" name="PostContent" rows="4" cols="50" maxlength="500" placeholder="Write your troll post here..."></textarea>
            <br>
            <input type="submit" value="Submit Post">
        </form>

        <h2> Posts </h2>

    </section>

    <aside id="Trending">
        <h3>Trending</h3>
    </aside>

    <aside id="Advertisements">
        <h3>Advertisements</h3> <!-- Joke advert for the gnome emporium -->
    </aside>
</main> 

<?php require 'includes/footer.php'; ?>
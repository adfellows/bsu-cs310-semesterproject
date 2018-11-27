<link rel="stylesheet" href="homepage.css" type="text/css">
<header>
    <ul id="top">
        <p id="logo"><a href="homepage.php" id="FNM">FNM</a><a href="homepage.php" id="N">News</a></p>
        <script>
            function searchFunction() {
               var x = document.getElementById("userInput");
               document.getElementById("demo").innerHTML = "You are searching for: " + x.value;}

        </script>
        <p class="tab" id="tab1"><a href="topcharts.php">Charts</a></p>
        <p class="tab" id="tab2"><a href="newreleases.php">New Releases</a></p>
        <p class="tab" id="tab3"><a href="newspage.php">News</a></p>
        <p class="tab" id="tab4"><a href="#">Logout</a></p>
        <p class="tab" id="tab5"><a href="#">Profile</a></p>
        <p class="tab" id="tab6"><a href="#">Favorites</a></p>
    </ul>
    <br>
    <br>
    <form id="userInput" role="search">
            <input type="text" class="form-control" placeholder="Search">
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</header
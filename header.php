<link href = "homepage.css">
<header>
<div class="topHeaderRow">
            <div class="container">
                <div class="pull-right">
                    <ul class="list-inline">
                        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span> Favorites</a></li>
                    </ul>
                </div>
            </div>
        </div>
      <ul id="top">
          <p id="logo"><a href="homepage.php" id="FNM">FNM</a><a href="homepage.php" id="N">News</a></p>
          <input type="search" id="userInput" onsearch="searchFunction">
          <script>
            function searchFunction() {
               var x = document.getElementById("userInput");
               document.getElementById("demo").innerHTML = "You are searching for: " + x.value;}
            </script>
          <p id="tab1"><a href="topcharts.html">Charts</a></p>
          <p id="tab2"><a href="newreleases.html">New Releases</a></p>
          <p id="tab3"><a href="newspage.html">News</a></p>
      </ul>
      <form id="userInput" role="search">
                        <div>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
  </header
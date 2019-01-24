<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
</head>
<script>
    function checkSearch(str)
    {
        if (str.length == 0) {
            document.getElementById("content").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("content").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "check_search.php?e=" + str, true);
            xmlhttp.send();
            //document.getElementById('hint').innerHTML = 'loading...';
        }
    }
</script>
<body>

<header class="container-fluid">
    <span id="hint"></span>
    <div class="row">
        <div class="col-12 no-padding">
            <nav class="navbar navbar-light bg-light navbar-expand-sm fixed-top">
                @@ -31,10 +51,11 @@
                <div class="input-group">
                    <input type="search" class="form-control"
                           id="search-bar" name="search"
                           placeholder="Find Mobile Phones, Laptops, and more..">
                    placeholder="Find Mobile Phones, Laptops, and more.." onkeyup="checkSearch(this.value)">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary btn-lg" type="submit"><i class="fas fa-search"></i></button>
                    </div>

                </div>
                </form>
        </div>
        @@ -93,22 +114,22 @@
        </li>
        </ul>
        </nav>
        <article id="content" class="container-fluid bg-white">
            <article class="container-fluid bg-white">

                <div class="row">
                    <?php getPro(); ?>
                    <div class="row"  id="content">
                        <?php getPro(); ?>
                    </div>
            </article>


    </div>
    <footer class="container-fluid">
        <div class="row">
            <div class="col text-center">
                &copy; 2019 by Muhammad Ali Makhdoom
            </div>
            <div class="row">
                <div class="col text-center">
                    &copy; 2019 by Muhammad Ali Makhdoom
                </div>
    </footer>
    </div>
    </footer>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
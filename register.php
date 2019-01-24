<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
<script>
    function checkEmail(str) {
        if (str.length == 0) {
            document.getElementById("hint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("hint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "check_email.php?e=" + str, true);
            xmlhttp.send();
            //document.getElementById('hint').innerHTML = 'loading...';
        }
    }
</script>
</head>
<body>

@@ -98,27 +116,15 @@
<form action="register.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            <label for="c_name" class="float-md-right">  Date:</label>
            <label for="c_name" class="float-md-right">  Name:</label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="text" class="form-control" id="c_name" name="c_name" placeholder="Enter your name"
                       required pattern="[0][1-9]|[1-9]|[1-2][0-9]|[3][0-1] ">
            </div>
        </div>
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            <label for="c_name" class="float-md-right">  Year:</label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="text" class="form-control" id="c_name" name="c_name" placeholder="Enter your name"
                       required pattern="19[5-9][0-9]|200[0-1]">
                required pattern="abc">
            </div>
        </div>
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            @@ -129,7 +135,9 @@
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fas fa-at"></i></div>
            </div>
            <input type="text" class="form-control" id="c_email" name="c_email" placeholder="Enter your email" >
            <input type="text" class="form-control" id="c_email" name="c_email" placeholder="Enter your email"
                   onkeyup="checkEmail(this.value)">
            <span class="text-danger" id="hint"></span>
        </div>
    </div>
    </div>
<html>
<head>
    <script>
        function showHint(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "gethint.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
    <style>
        body {
            background-color: darkgray;
            background-image: url("https://static.planetminecraft.com/files/avatar/382895.jpg");
            background-size: 160px;
            background-position: center center;
            display: grid;
            background-repeat: no-repeat;
        }
        div{
            border-radius: 3em 3em 1em 1em;
            color: aliceblue;
            background: rgba(0,0,0,0.8);
            padding: 1em;
            justify-self: center;
            align-self: center;
            display: grid;
        }
        h1{padding-top: 0;
            justify-self: center;
            align-self: center;
        }
        #txtHint::before{
            content: "Food:";
            display: block;
            color: white;
        }
        #txtHint{
            color: #ffc7ed;
        }
    </style>
</head>
<body>
<div>
<h1>Minecraft food!</h1>
<form>
    Zoek hier uw Minecraft voedsel!: <input type="text" onkeyup="showHint(this.value)">
</form>
<p><span id="txtHint"></span></p>
</div>
</body>
</html>
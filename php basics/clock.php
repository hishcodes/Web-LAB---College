<html>
    <style>
        h1{
            margin-left: 500;
            margin-right: 500;
        }
        p{
            font-size: 30px;
            background-color: black;
            color: greenyellow;
            font-weight: 700;
            margin-left:500;
            margin-right: 650;
            padding-top: 50;
            padding-bottom: 50;
            padding-left: 35;
        }
    </style>
<script>
    function digitalTime()
    {
        var d = new Date();
        var h = d.getHours();
        var m = d.getMinutes();
        var s = d.getSeconds();
        document.getElementById("client-date").innerHTML = (h+':'+m+':'+s);
        setTimeout(digitalTime,1000);
    }
    
</script>

<body onload="digitalTime()">
    <h1>Current Time</h1>
    <p id="client-date"></p>

    <?php
    date_default_timezone_set("Asia/Kolkata");
    ?>
</body>
</html>
<html>
    <head>
        <title>Capstone Fredrick Collins</title>
        <style>
            body {
                margin-left: 3%;
            }
        </style>
    </head>
    <body>
        <h1> Capstone - Fredrick Collins </h1>
        <p> Resources are linked below. </p>
        <h2> Links </h2>
        <ul>
            <li> <a href="https://github.com/fredrickcollins/" target="_blank"> Git Repository </a> </li>
            <li> <a href="t" target="_blank"> Technical Design </a> </li>
        </ul>
        <?php       
        $file = basename($_SERVER['PHP_SELF']);
        $mod_date=date("F d Y h:i:s A", filemtime($file));
        echo "File last updated $mod_date "; ?>
    </body>
</html>
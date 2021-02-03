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
            <li> <a href="https://github.com/fredrickcollins/ice-reader/" target="_blank"> Git Repository </a> </li>
            <li> <a href="Technical Design Fredrick Collins.pdf" target="_blank"> Technical Design </a> </li>
            <li> <a href="design-doc-fc.pdf" target="_blank"> User Document - Milestone 1 </a> </li>
        </ul>
        <?php       
        $file = basename($_SERVER['PHP_SELF']);
        $mod_date=date("F d Y h:i:s A", filemtime($file));
        echo "File last updated $mod_date "; ?>
    </body>
</html>
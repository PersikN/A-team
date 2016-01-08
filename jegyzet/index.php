<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./public/css/style.css">
        <meta charset="UTF-8">
        <title>Jegyzetelj!!!</title>
    </head>
    <body>
            <div id="container">
            <div id="header">
                <h1>Jegyzet bázis</h1>
            </div>
            <div id="menu"> 
		<?php
                echo '<table><tr><td width=50%>';
                include './protected/menu.php';
                ?>
            </div>
            <div type="hidden" id="content">
                <?php
                include './protected/content.php';
                echo '</td>';
                ?>
            </div>
            <div id="footer">
			<?php if(!isset($_SESSION['jogosultsag'])) {include'./protected/view/belepes.php';} ?>
            </div>
        </div>
    </body>
</html>

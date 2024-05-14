<?php
    include_once(__DIR__.'/src/head.inc.php');
   
?>
<body>

    <header>
        <h1>Formulaire de contact</h1>
    </header>
    <main>
        
        <?php
             include_once(__DIR__.'/src/form_control.inc.php');
        ?>
    </main>
    <footer>
        <p>
            <?= Config::$_footer." ".$_date; ?>
        </p>
    </footer>
    
   
</body>
</html>
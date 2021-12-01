<!DOCTYPE html>
<HTML>
    <HEAD>
        <title>Jaspers site - Home</title>
        <link rel="icon" type="image/jpg" href="assets/IMG/favicon.ico">
        <link rel="stylesheet" href="assets/css/stylesheet.css" type="text/css">
        <link rel="stylesheet" href="assets/css/index.css" type="text/css">
    </HEAD>
    <BODY>
        <div id="container">
            <section>
                <header>
                    <nav>
                        <ul id="nav">
                            <?php
                            if(isset($_GET["page"])) {
                                $nummer = $_GET["page"];
                            } else {
                                $nummer = 1;
                            }
                            
                            if ($nummer == 1) {
                                echo "<li id='nav'><a id='nav' href='index.php?page=1' class='active'>Home</a></li>";
                            } else {
                                echo "<li id='nav'><a id='nav' href='index.php?page=1'>Home</a></li>";
                            }
                            if ($nummer == 2) {
                                echo "<li id='nav'><a id='nav' href='index.php?page=2' class='active'>Overmij</a></li>";
                            } else {
                                echo "<li id='nav'><a id='nav' href='index.php?page=2'>Overmij</a></li>";
                            }
                            if ($nummer == 3) {
                                echo "<li id='nav'><a id='nav' href='index.php?page=3' class='active'>Opdrachten</a></li>";
                            } else {
                                echo "<li id='nav'><a id='nav' href='index.php?page=3'>Opdrachten</a></li>";
                            }
                            if ($nummer == 4) {
                                echo "<li id='nav'><a id='nav' href='index.php?page=4' class='active'>Dagboek</a></li>";
                            } else {
                                echo "<li id='nav'><a id='nav' href='index.php?page=4'>Dagboek</a></li>";
                            }
                            if ($nummer == 5) {
                                echo "<li id='nav'><a id='nav' href='index.php?page=5' class='active'>Onderwerp</a></li>";
                            } else {
                                echo "<li id='nav'><a id='nav' href='index.php?page=5'>Onderwerp</a></li>";
                            }
                            if ($nummer == 6) {
                                echo "<li id='nav'><a id='nav' href='index.php?page=6' class='active'>Rekenmachine</a></li>";
                            } else {
                                echo "<li id='nav'><a id='nav' href='index.php?page=6'>Rekenmachine</a></li>";
                            }
                            if ($nummer == 7) {
                                echo "<li id='nav'><a id='nav' href='index.php?page=7' class='active'>Bronnen</a></li>";
                            } else {
                                echo "<li id='nav'><a id='nav' href='index.php?page=7'>Bronnen</a></li>";
                            }
                            echo "<li id='nav'><a id='nav' href='website1/index.html'>Website 1</a></li>";
                            ?>
                            <div id="logo">
                                <img id="logo" src="assets/IMG/logo.jpg" width="40px" height="40px">
                            </div>
                        </ul>
                    </nav>
                    <div id="intro">
                        <h1 id="title">Jaspers site</h1>
                    </div>
                </header>

                <article>
                    <?php
                        if(isset($_GET["page"])) {
                            $nummer = $_GET["page"];
                        } else {
                            $nummer = 1;
                        }

                        switch ($nummer) {
                            case 1:
                                readfile("home.inc");
                                break;
                            case 2:
                                readfile("overmij.inc");
                                break;
                            case 3:
                                readfile("opdrachten.inc");
                                break;
                            case 4:
                                readfile("dagboek.inc");
                                break;
                            case 5:
                                readfile("onderwerp.inc");
                                break;
                            case 6:
                                readfile("rekenmachine.inc");
                                break;
                            case 7:
                                readfile("bronnen.inc");
                                break;

                            default:
                                readfile("home.inc");
                        }
                    ?>
                </article>
            </section>

            <footer>
                <div id="footer-links">
                    (c) 2021 Jasper Demmers
                </div>

                <div id="footer-rechts">
                    <a href="mailto:jasper.demmers@hotmail.com">Contact</a>
                </div>
            </footer>
        </div>
    </BODY>
</HTML>
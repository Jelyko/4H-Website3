<!DOCTYPE html>
<HTML>
    <HEAD>
        <link rel="icon" type="image/jpg" href="assets/IMG/favicon.ico">
        <link rel="stylesheet" href="assets/css/stylesheet.css" type="text/css">
        <script src='assets/js/spoiler.js'></script>
        <?php
        if(isset($_GET["page"])) {
            $nummer = $_GET["page"];
        } else {
            $nummer = 1;
        }

        if ($nummer == 1) {
            echo "<link rel='stylesheet' href='assets/css/index.css' type='text/css'>";
            echo "<title>Jaspers site - Home</title>";
        }
        if ($nummer == 2) {
            echo "<link rel='stylesheet' href='assets/css/overmij.css' type='text/css'>";
            echo "<title>Jaspers site - Overmij</title>";
        }
        if ($nummer == 3) {
            echo "<link rel='stylesheet' href='assets/css/opdrachten.css' type='text/css'>";
            echo "<title>Jaspers site - Opdrachten</title>";
        }
        if ($nummer == 4) {
            echo "<link rel='stylesheet' href='assets/css/dagboek.css' type='text/css'>";
            echo "<title>Jaspers site - Dagboek</title>";
        }
        if ($nummer == 5) {
            echo "<link rel='stylesheet' href='assets/css/onderwerp.css' type='text/css'>";
            echo "<title>Jaspers site - Onderwerp</title>";
        }
        if ($nummer == 6) {
            echo "<link rel='stylesheet' href='assets/css/rekenmachine.css' type='text/css'>";
            echo "<script src='assets/js/rekenmachine.js'></script>";
            echo "<title>Jaspers site - Rekenmachine</title>";
        }
        if ($nummer == 7) {
            echo "<link rel='stylesheet' href='assets/css/bronnen.css' type='text/css'>";
            echo "<title>Jaspers site - Bronnen</title>";
        }
        ?>
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
                        <?php
                            if(isset($_GET["page"])) {
                                $nummer = $_GET["page"];
                            } else {
                                $nummer = 1;
                            }
                            
                            echo "<h1 id='title'>";
                            if ($nummer == 1) {
                                echo "Jaspers site";
                            }
                            if ($nummer == 2) {
                                echo "Overmij";
                            }
                            if ($nummer == 3) {
                                echo "Opdrachten";
                            }
                            if ($nummer == 4) {
                                echo "Dagboek";
                            }
                            if ($nummer == 5) {
                                echo "Onderwerp";
                            }
                            if ($nummer == 6) {
                                echo "Rekenmachine";
                            }
                            if ($nummer == 7) {
                                echo "Bronnen";
                            }
                            echo "</h1>";
                        ?>
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
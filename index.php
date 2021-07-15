<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'includes/head.inc.html';?>
</head>
<body>

    <header>
        <?php include 'includes/header.inc.html';?>
    </header>

    <div class="container-fluid row mx-0 py-3">
            <nav class="col-md-3 pb-3">
                    <a href="index.php"><button type="button" class="btn btn-outline-secondary mx-auto btn-block">Home</button></a>
                <?php
                if (!empty($_SESSION)){
                    include('includes/ul.inc.html');
                    $table = $_SESSION['table'];
                }   
                    ?>
            </nav>
            <section class="col-md-9">
               
                <?php 
                    if (isset($_GET['add'])){
                        include 'includes/form.inc.html';
                    }
                    elseif (isset($_POST['enregistrer'])){
                        $prenom = $_POST['prenom'];
                        $nom = $_POST['nom'];
                        $age = $_POST['age'];
                        $taille = $_POST['taille'];
                        $situation = $_POST['situation'];

                        $table = array(
                            'first_name' => $prenom,
                            'last_name' => $nom,
                            'age' => $age,
                            'size' => $taille,
                            'situation' => $situation
                        );
                        $_SESSION['table'] = $table;
                        echo "<h2>Données sauvegardées</h2>";

                    }

                    elseif (isset($_GET['del'])){
                        unset($_SESSION['table']);
                        echo "<h2>Données supprimées</h2>";

                    }

                    elseif (isset($_GET['debugging'])){
                        echo "<h2>Débogage</h2><br>";
                        print "<pre>";
                        print_r ($table);
                        print "</pre>";
                    }

                    elseif (isset($_GET['concatenation'])){
                        echo "<h2>Concaténation</h2>";
                        echo "<br>===> Construction d'une phrase avec le contenu du tableau :";
                        echo "<h2>".$table['first_name']." ".$table['last_name']."</h2>";
                        echo "<p>".$table['age']." "."ans,"." "."je mesure"." ".$table['size']."m"." "."et je fais parti des"." ".$table['situation']." "."de la promo Simplon.</p>";

                        echo "<br>===> Construction d'une phrase après MAJ du tableau :";
                        $table['first_name'] = ucfirst($table['first_name']);
                        $table['last_name'] = strtoupper($table['last_name']);
                        echo "<h2>".$table['first_name']." ".$table['last_name']."</h2>";
                        echo "<p>".$table['age']." "."ans,"." "."je mesure"." ".$table['size']."m"." "."et je fais parti des"." ".$table['situation']." "."de la promo Simplon.</p>";

                        echo "<br>===> Affichage d'une virgule à la place du point pour la taille :";
                        $table['first_name'] = ucfirst($table['first_name']);
                        $table['last_name'] = strtoupper($table['last_name']);
                        $table['size'] = str_replace('.',',',$table['size']);
                        echo "<h2>".$table['first_name']." ".$table['last_name']."</h2>";
                        echo "<p>".$table['age']." "."ans,"." "."je mesure"." ".$table['size']."m"." "."et je fais parti des"." ".$table['situation']." "."de la promo Simplon.</p>";
                    }

                    elseif (isset($_GET['loop'])){
                        echo "<h2>Boucle</h2><br>";
                        echo "===> Lecture du tableau à l'aide d'une boucle foreach <br><br>";

                        $i=0;
                        foreach($table as $key => $value){
                            echo 'à la ligne n°'.$i++.' correspond à la clé "'.$key.'" et contient "'.$value.'"<br>';
                        }

                    }

                    elseif (isset($_GET['function'])){
                        echo "<h2>Fonction</h2><br>";
                        echo "===> J'utilise ma fonction readTable()<br><br>";
                        readTable($table);

                    }

                    else {
                        echo "<a href='index.php?add'><button type='button' class='btn btn-primary'>Ajouter des données</button></a>";
                    }

                    function readTable($table){
                        $i=0;
                        foreach($table as $key => $value){
                            echo 'à la ligne n°'.$i++.' correspond à la clé "'.$key.'" et contient "'.$value.'"<br>';
                        }

                    }
                        

                ?>
            </section>
    </div>

    <footer>
        <?php include 'includes/footer.inc.html';?>
    </footer>

</body>
</html>
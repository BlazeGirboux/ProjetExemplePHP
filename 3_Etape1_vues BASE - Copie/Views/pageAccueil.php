<!-- corps de la page d'accueil qui prendar place dans le main de base.php -->

<!-- !!! corriger le chemin de images ! -->

<h1>Liste des écoles répertoriées</h1>
        
<div class="flexible wrap space-around">
    <?php foreach($schools as $school) : ?>
    <div class="border card">
        <h2 class="center"><?= $school->schoolNom ?></h2>
        <div>
            <div class="flexible blocImageEcole"><img src="<?= $school->schoolImage ?>" alt="itn" /></div>
            <div class="center">
                <p><span><?= $school->schoolAdresse ?></span> - <span><?= $school->schoolCodePostal . " " . $school->schoolVille ?></span></p>
                <h3><?= $school->schoolNumero?></h3>
                <a href="voirEcole.php" class="btn btn-page">Voir l'école</a>
            </div>
        </div>
    </div>
    <div class="border card">
        <h2 class="center">Collège Saint Servais</h2>
        <div>
            <div class="flexible blocImageEcole"><img src="/Assets/Images/collegeSSIm.jpeg" alt="image lorem picsum" /></div>
            <div class="center">
                <p><span>Chau de Waterloo 52</span> - <span>Namur</span></p>
                <h3>0499689850</h3>
                <a href="voirEcole.php" class="btn btn-page">Voir l'école</a>
            </div>
        </div>
    </div>
    <div class="border card">
        <h2 class="center">Institut Saint Albert</h2>
        <div>
            <div class="flexible blocImageEcole"><img src="/Assets/Images/stAlbertIm.jpeg" alt="image lorem picsum" /></div>
            <div class="center">
                <p><span>Av Ferdinand Charlot 35</span> - <span>Jodoigne</span></p>
                <h3>010811250</h3>
                <a href="voirEcole.php" class="btn btn-page">Voir l'école</a>
            </div>
        </div>
    </div>
    <div class="border card">
        <h2 class="center">Ecole de l'enfant Jésus</h2>
        <div>
            <div class="flexible blocImageEcole"><img src="/Assets/Images/enfantJesusIm.png" alt="image lorem picsum" /></div>
            <div class="center">
                <p><span>Rue de Sotriamont 1</span> - <span>Nivelles</span></p>
                <h3>067893800</h3>
                <a href="voirEcole.php" class="btn btn-page">Voir l'école</a>
            </div>
        </div>
    </div>
    <?php endforeach ?>
</div>

<ul id="Menu">
    <li>
        <a id="Acceuil" href="./index.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''); ?>">Acceuil</a>
    </li>
    <li>
        <a id="Apropo" href="./apropo.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'apropo.php' ? 'active' : ''); ?>">A propos de moi</a>
    </li>
    <li>
        <a id="Competences" href="./competences.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'competences.php' ? 'active' : ''); ?>">Compétences</a>
    </li>
    <li>
        <a id="Veille" href="./veille.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'veille.php' ? 'active' : ''); ?>">Veille Technologique</a>
    </li>
</ul>


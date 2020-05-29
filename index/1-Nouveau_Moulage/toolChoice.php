<link rel="stylesheet" href="1-Nouveau_Moulage/styleToolChoice.css">  
<div id='title'>Choix de l'outillage</div>
<form id="programChoice">
    <select id="programs" class='programs' name='programs' data-target='#tool' data-source='/Tuto/index/1-Nouveau_Moulage/script2.php?types=tool&filter=$prog'>
        <option>Selectionner un programme avion</option>
        <?php
            $bdd = new PDO('', '', '');
            $sql= 'SELECT * FROM t_program';
            $programs = $bdd->query($sql);
            foreach ($programs as $program) {?>
                <option value="<?= $program['ID'] ?>"><?= $program['Program_Name']; ?></option>
            <?php
            }
            ?>
    </select>

    <select style="display: none;" name='toolChoice' id="tool" class='tools'>
        <option value="0">Selectionner un outillage</option>
    </select>

</form>


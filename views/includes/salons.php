<div id="salons">
    <h2>Ici tous les salons :</h2>
    <?php
    $idPage = $_GET['id'];
    settype($idPage, "int");

    $req = $db->query('SELECT salon_id ,salon_nom FROM salons');
    $salons = $req->fetchAll(); ?>

    <form method="post" action=''>
        <div class="form-group">
            <label for="salon">Créer un nouveau salon :</label>
            <input type="text" class="form-control" name="salon" id="salon" aria-describedby="Nouveau salon" placeholder="Nouveau salon">
        </div>
        <button type="submit" class="btn btn-primary" value="new_salon" name="salonbutton">Créer un salon</button>
    </form>
    
    <ul>
    <?php
    foreach ($salons as $salon) { ?>
    <li><p str><a href="index.php?page=tchat&id=<?= $salon['salon_id']; ?>" class="decoLink"><?= ucfirst($salon['salon_nom']); ?></a></p></li>
    <hr>

    <?php
        } ?>
    </ul>

</div>
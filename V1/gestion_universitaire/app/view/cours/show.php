<a href="?action=addCours">ADD</a>
<table>
            <tr>
                <th>ID</th>
                <th>Nom du cours</th>
                <th>Code du cours</th>
                <th>Nombre d'heures</th>
                <th>Actions</th>
            </tr>
        <?php while($r = pg_fetch_assoc($Cours)) :?>
            <tr>
                <td><?php echo $r["id"]  ?></td>
                <td><?php echo $r["nom"] ?></td>
                <td><?php echo $r["code"]?></td>
                <td><?php echo $r["heures"]?></td>
                <td>
                    <a href="?id=<?= $r["id"] ?>">Supprimer</a>
                    <br>
                    <a href="?action=editCours&id=<?= $r["id"] ?>">Modifier</a>
                </td>
            </tr>
        <?php endwhile ?>
</table>  


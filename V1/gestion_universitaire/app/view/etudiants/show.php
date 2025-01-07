<a href="?action=addEtudiants">ADD</a>
<table>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Filière</th>
                <th>Actions</th>
            </tr>
        <?php while($r = pg_fetch_assoc($etudiant)) :?>
            <tr>
                <td><?php echo $r["id"]  ?></td>
                <td><?php echo $r["nom"] ?></td>
                <td><?php echo $r["prenom"]?></td>
                <td><?php echo $r["email"]?></td>
                <td><?php echo $r["filiere"]?></td>
                <td>
                    <a href="?id=<?= $r["id"] ?>">Supprimer</a>
                    <br>
                    <a href="?action=editEtudiant&id=<?= $r["id"] ?>">Modifier</a>
                </td>
            </tr>
        <?php endwhile ?>

</table>
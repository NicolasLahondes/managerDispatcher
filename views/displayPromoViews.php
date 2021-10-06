<div>
    <table>
        <thead>
            <tr>
                <th class="mx-1">Nom</th>
                <th class="mx-1">Date de début</th>
                <th class="mx-1">Date de fin</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aPromos as $key => $promos) : ?>
                <tr>
                    <td class="px-1"><?php echo $promos->getName(); ?></td>
                    <td class="px-1"><?php echo $promos->getDebutDate(); ?></td>
                    <td class="px-1"><?php echo $promos->getEndDate(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
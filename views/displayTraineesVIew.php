<div>
    <table>
        <thead>
            <tr>
                <th class="mx-1">Nom</th>
                <th class="mx-1">Prénom</th>
                <th class="mx-1">Anniversaire</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aTrainees as $key => $trainees) : ?>
                <tr>
                    <td class="px-1"><?php echo $trainees->getLastname(); ?></td>
                    <td class="px-1"><?php echo $trainees->getFirstname(); ?></td>
                    <td class="px-1"><?php echo $trainees->getBirthdate(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div>
    <table>
        <thead>
            <tr>
                <th class="mx-1">Nom</th>
                <th class="mx-1">Enseignant</th>
                <th class="mx-1">Durée</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aSubjects as $key => $subjects) : ?>
                <tr>
                    <td class="px-1"><?php echo $subjects->getName(); ?></td>
                    <td class="px-1"><?php echo $subjects->getTeacher(); ?></td>
                    <td class="px-1"><?php echo $subjects->getDuration(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
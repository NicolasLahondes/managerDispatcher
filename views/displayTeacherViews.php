<div>
    <table>
        <thead>
            <tr>
                <th class="mx-1">Prénom</th>
                <th class="mx-1">Nom</th>
                <th class="mx-1">Entreprise</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($aTeacher as $key => $teacher) : ?>
                <tr>
                    <td class="px-1"><?php echo $teacher->getFirstname(); ?></td>
                    <td class="px-1"><?php echo $teacher->getLastname(); ?></td>
                    <td class="px-1"><?php echo $teacher->getBusiness(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
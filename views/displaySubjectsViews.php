<div>
    <table>
        <thead>
            <tr>
                <th class="mx-1">Nom</th>
                <th class="mx-1">Enseignant</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subjectAssoc as $key => $value) : ?>
                <tr>
                    <td><?php echo $subjectAssoc[$key]['name']; ?></td>
                    <td><?php echo $subjectAssoc[$key]['teacher']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
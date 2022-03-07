<?php foreach($data['entreprise'] as $value): ?>

<tr class="bg-gray-200">
    <td class="w-1/3 text-left py-3 px-4"><?= $value["nom"] ?></td>
    <td class="w-1/3 text-left py-3 px-4"><?= $value["siege"] ?></td>
    <td class="text-left py-3 px-4"><a class="hover:text-blue-500"><?= $value["pageWeb"] ?></a></td>
    <td class="text-left py-3 px-4"><a class="hover:text-blue-500"><?= $value["dateDeCreation"] ?></a>
    </td>
</tr>

<?php endforeach; ?>
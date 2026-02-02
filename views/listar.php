<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Logbook De La Expedición</h1>
    <a href="index.php?action=crear">Crear Descubrimiento</a>
    <?php
    if (isset($descubrimientos) && !empty($descubrimientos)):?>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Planeta De Origen</th>
                <th>Nivel de Estabilidad</th>
            </tr>
            <?php foreach ($descubrimientos as $p):?>
                <tr>
                <td><?=$p->getID()?></td>
                <td><?=$p->getNombre()?></td>
                <td><?=$p->getPlanetaOrigen()?></td>
                <td><?=$p->getNivelEstabilidad()?></td>
                <td>
                    <?php var_dump($p) ?>
                <?php if ($p instanceof Artefacto):?>
                    <?=$p->getAntig()?>
                <?php elseif ($p instanceof MineralRaro):?>
                    <?=$p->getDureza()?>
                <?php elseif ($p instanceof FormasdeVida):?>
                        <?=$p->getDieta()?>
                <?php endif;?>
                </td>
                <td>
                    <a href="index.php?action=editar&ID=<?=$p->getID()?>">Editar</a>
                    <a href="index.php?action=eliminar&ID=<?=$p->getID()?>">Eliminar</a>
                </td>
                </tr>
            <?php endforeach;?>
        </table>
        <?php else:?>
            <p>¡Aún no hay Descubrimientos, Añade uno!</p>
        <?php endif;?>
</body>
</html>
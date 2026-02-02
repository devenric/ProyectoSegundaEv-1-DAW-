<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .artefactoCampo, .lifeForms, .mineralRaro {
        display: none;
    }
    form:has(option[value="artefacto"]:checked) .artefactoCampo {
        display: block;
    }
    form:has(option[value="lifeForms"]:checked) .lifeForms {
        display: block;
    }
    form:has(option[value="mineralRaro"]:checked) .mineralRaro {
        display: block;
    }
    </style>
</head>
<body>
    <form method="POST">
        <input type="text" name="ID" required placeholder="ID"><br><br>
        <input type="text" name="nombre" required placeholder="nombre"><br><br>
        <input type="text" name="planetaOrigen" required placeholder="planeta de origen"><br><br>
        <input type="text" name="nivelEstabilidad"required placeholder="nivel de estabilidad"><br><br>
        
        <select name="tipoDescubrimiento" id="tipoDescubrimiento">Selecciona un tipo de descubrimiento
            <option value="artefacto" name="artefacto" class="artefacto">Artefacto</option>
            <option value="lifeForms" name ="lifeForm">Formas de Vida</option>
            <option value="mineralRaro" name="mineralRaro">Mineral Raro</option>
        </select><br><br>
        <input type="text" name="artefacto" placeholder="artefacto"class="artefactoCampo">
        <input type="text" name="lifeForm" class="lifeForms" placeholder="formas de vida">
        <input type="text" name="mineralRaro" class="mineralRaro" placeholder="mineral raro"><br><br>
        <input type="submit" value="¡Registar!">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
    <title>Calcule seu IMC</title>
</head>
<body>
    <h1>Calcule seu IMC</h1>
    <p>O Índice de Massa Corporal(IMC) é reconhecido como padrão internacional para avaliar o grau de obesidade. 
    O IMC é calculado dividindo o peso (em kg) pela altura ao quadrado(em m).</p>

    <section>
        <p>Utilize os campos abaixo para calcular o seu IMC.</p>

        <form action="/processo" method="post">
            <label for="peso">Peso</label>
            <input type="number" name="peso"><span>kg</span>
            
            <label for="altura">Altura</peso>
            <input type="number" name="altura"><span>m</span>

            <input type="submit" value="Enviar">
            <input type="button" value="Calcular">
        </form>

        <p>Seu IMC é de:     Kg/m²</p>
    </section>
    <section>
        <p>Digite seu peso (em Kg) Ex.: 80 kg</p>
    </section>
</body>
</html>
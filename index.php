<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
    <title>Calcule seu IMC</title>
</head>

<body>
    <div class="wrapper">
        <header>
            <img src="img/crypto-bg.jpg" alt="banner">
                <div id="introducao">
                    <h1>Calcule seu IMC</h1>     
                    <p>O Índice de Massa Corporal(IMC) é reconhecido como padrão internacional para avaliar o grau de obesidade. 
                    O IMC é calculado dividindo o peso (em kg) pela altura ao quadrado(em m).</p>
                </div>
        </header>
        <section id="imc">
            <div>
                <h2>Utilize os campos abaixo para calcular o seu IMC.</h2>

                <form action="/processo" method="post">
                    <label for="peso">Peso</label>
                    <input type="number" name="peso"><span>kg</span>
                    
                    <label for="altura">Altura</label>
                    <input type="number" name="altura"><span>m</span>

                    <input type="submit" value="Enviar">
                    <input type="button" value="Calcular">
                </form>
                <p id="resultado"> Seu IMC é de:     Kg/m²</p>
            </div>

           
        
            <section>
                <table>
                <tr>
                    <td>Categoria</td>
                    <td>IMC</td>
                </tr>
                <tr>   
                    <td>Abaixo do peso</td>
                    <td>Abaixo de 18,5</td>
                <tr>
                <tr>
                    <td>Peso Normal/Saudável</td>
                    <td>18,5 - 24,9</td>
                </tr>
                <tr>
                    <td>Sobre Peso</td>
                    <td>25,0 - 29,9</td>
                </tr>
                <tr>
                    <td>Obesidade Grau 1</td>
                    <td>30,0 - 34,9</td>
                </tr>
                <tr>    
                    <td>Obesidade Grau 2</td>
                    <td>35,0 - 39,9</td>
                </tr>
                <tr>
                    <td>Obesidade Grau 3</td>
                    <td>40,0 e acima</td>
                </tr>
                </table>
            </section>
        </section>
    </div>
</body>
</html>
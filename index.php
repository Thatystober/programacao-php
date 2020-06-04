<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <title>Calcule seu IMC</title>
</head>

<body>
    <div class="wrapper">
        <header>
            <div id="introducao">
                <h1>Calcule seu IMC</h1>     
                <p>O Índice de Massa Corporal(IMC) é reconhecido como padrão internacional para avaliar o grau de obesidade. 
                O IMC é calculado dividindo o peso (em kg) pela altura ao quadrado(em m).</p>
            </div>
        </header>
        <section id="imc">
            <div id="divisao">
                <h2>Utilize os campos abaixo para calcular o seu IMC.</h2>

                <form class="imc-form" action="calcular.php" method="post">
                    <div id="us-1">
                        <p>Usuário 1</p>
                        <input type="text" name="nome1" placeholder="Digite seu nome" require>

                        <input type="number" name="idade1" placeholder="Digite sua idade" require>

                        <input type="number" name="peso1" step="0.01" placeholder="Digite seu peso"  require>

                        <input type="number" name="altura1" step="0.01" placeholder="Digite sua altura"  require>
                    </div>
                    <div id="us-2">
                        <p>Usuário 2</p>
                        <input type="text" name="nome2" placeholder="Digite seu nome" require>

                        <input type="number" name="idade2" placeholder="Digite sua idade" require>

                        <input type="number" name="peso2" step="0.01" placeholder="Digite seu peso" require>
                        
                        <input type="number" name="altura2" step="0.01" placeholder="Digite sua altura"  require>
                    </div>
                    <div id="us-3">
                        <p>Usuário 3</p>
                        <input type="text" name="nome3" placeholder="Digite seu nome" require>

                        <input type="number" name="idade3" placeholder="Digite sua idade" require>

                        <input type="number" name="peso3" step="0.01"  placeholder="Digite seu peso" require>
                        
                        <input type="number" name="altura3" step="0.01" placeholder="Digite sua altura" require>
                    </div>

                    <div id="botoes"> 
                        <input id="calcular" type="submit" value="Calcular">
                    </div>
                </form>
            </div>

            <section class="tab">
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
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sequencia de Fibonacci</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-migrate-3.0.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <style>
        body {
            background-color: gray;
        }

        #conteinerSequenciaFibo {
            background-color: whitesmoke;
            background-color: white;
            border-style: solid;
            border-color: black;
            border-radius: 15px;
        }

        #formSequenciaFibonacci input {
            margin: 5px;
        }

        #textoInverso {
            background-color: whitesmoke;
            border-radius: 10px;
            border-style: solid;
            margin: 10px;
            padding: 5px;
            font-size: 1.2rem;
            width: 200px;
            height: 100px;
        }
    </style>

    <script>
        function sequenciaFibonacci() {
            var ultimoNum = 1;
            var penultNum = 0;
            var limite = 100;
            var fibonacci = $('#fibonacci').val();
            var resultado = '';
            for (let i = 0; i < limite; i++) {
                var valorAtual = ultimoNum + penultNum;
                if (fibonacci == valorAtual) {
                    // Valor declarado faz parte da sequencia!resultado
                    resultado = "Valor declarado faz parte da sequencia!";
                    $('#fibonacciResult').html('');
                    $('#fibonacciResult').append('<div class= "alert alert-success "role= "alert">' + resultado + '</div>');
                    break;
                } else {
                    penultNum = ultimoNum;
                    ultimoNum = valorAtual;
                    resultado = "Valor declarado não faz parte da sequencia!";
                    $('#fibonacciResult').html('');
                    $('#fibonacciResult').append('<div class= "alert alert-danger "role= "alert">' + resultado + '</div>');
                }
            }
        } // fim função do Fibonacci

        // função que inverte texto
        function inversorDeTexto() {
            var texto = $('#texto').val();
            var quebra = texto.split('');
            var contador = texto.length;
            $('#textoInverso').html('');
            for (let i = contador; i--;) {
                $('#textoInverso').append(quebra[i]);
            }
        }
    </script>
</head>

<body>
    <div class="container" id="conteinerSequenciaFibo">
        <div class="row justify-content-center">
            <div class="col">
                <div class="col-md-6">
                    <h2>Sequência de Fibonacci</h2>
                    <form action="" method="" id="formSequenciaFibonacci">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="fibonacci" name="fibonacci" placeholder="0">
                            <label for="fibonacci">Digite um número aqui por favor:</label>
                            <input class="btn btn-light" type="button" onclick="sequenciaFibonacci()" value="Calcular">
                        </div>
                    </form>
                    <div id="fibonacciResult"></div>
                </div>
            </div>

            <div class="col">
                <div class="col-md-6" id="inversor">
                    <h2>Inversor de textos</h2>
                    <form action="" method="" id="formSequenciaFibonacci">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="texto" name="texto" placeholder="Digite aqui">
                            <label for="texto">Digite o texto a ser invertido:</label>
                            <input class="btn btn-light" type="button" onclick="inversorDeTexto()" value="Inverter">
                        </div>
                    </form>
                    <div id="textoInverso"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- <?php
    // Eu tenho mais familiaridade com php então fiz isto primeiro
    //  $ultimoNum = 1;
    //  $penultNum = 0;
    //  $index = 100;
    //  $valorDeclarado = 3;
    //  for ($contador = 0; $contador < $index; $contador++) {
    //  $valorAtual = $ultimoNum + $penultNum;
    //  echo "The number is: $valorAtual <br>";
    //  $penultNum = $ultimoNum;
    //  $ultimoNum = $valorAtual
    //  if ($valorDeclarado == $valorAtual) {
    //  echo " faz parte da espiral";
    //  break;
    //  } else {
    //  echo "Calculamos as 100 Primeiras fazes da sequencia e o valor não faz parte da sequencia!";
    //  break;
    //  }
    //  }
    ?> -->
    </div>


</body>

</html>
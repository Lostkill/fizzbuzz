<!DOCTYPE html>
<html>

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <meta charset=utf-8 />
    <title>Fizz Buzz!</title>
</head>

<body>
    <?php
        //Faz a contagem de 1 a 100
        $count = 1;
        echo '<div class="row">', PHP_EOL;

        while ($count <= 100) {

            //Alinha o resultado de 4 em 4 resultados
            if ($count > 1 && $count % 4 === 0) {//A cada quatro deve fechar o .row e abrir novamente
                echo '</div>', PHP_EOL, PHP_EOL, '<div class="row">', PHP_EOL;
            }

            //Verica se os numeros são divisiveis
            //Por 3 por 5 e se são por 3 e 5 ou por nenhum dos dois
            if($count % 3 == 0 && $count % 5 == 0){
                echo '<span>fizbuzz</span>', PHP_EOL;
            }else if($count % 3 == 0 && $count % 5 !== 0){
                echo '<span>fiz</span>', PHP_EOL;
            }else if($count % 5 == 0 && $count % 3 !== 0){
                echo '<span>buzz</span>', PHP_EOL;
            }else {
                echo '<span>', $count, '</span>', PHP_EOL;
            }

            $count++;
        }

        echo '</div>';
    ?>
</body>

<script>

    //Organiza as cores RGB
    var safeColors = ['00','33','66','99','cc','ff'];
    var rand = function() {
        return Math.floor(Math.random()*6);
    };
    var randomColor = function() {
        var r = safeColors[rand()];
        var g = safeColors[rand()];
        var b = safeColors[rand()];
        return "#"+r+g+b;
    };
</script>

<script>
    //Faz com que as cores troquem em um intervalo de tempo
    setInterval(() => {
        $('span').each(function() {
            $(this).css('color',randomColor());
        });
    }, 500);
</script>
</html>
<?php
$paragraph = "Non c'è posto al mondo che io ami più della cucina.
Non importa dove si trova, com'è fatta: purché sia una cucina, un posto
dove si fa da mangiare, io sto bene. Se possibile le preferisco funzionali e
vissute. Magari con tantissimi strofinacci asciutti e puliti e le piastrelle
bianche che scintillano.
Anche le cucine incredibilmente sporche mi piacciono da morire.
Mi piacciono col pavimento disseminato di pezzettini di verdura, così
sporche che la suola delle pantofole diventa subito nera, e grandi, di una
grandezza esagerata. Con un frigo enorme pieno di provviste che
basterebbero tranquillamente per un intero inverno, un frigo imponente, al
cui grande sportello metallico potermi appoggiare. E se per caso alzo gli
occhi dal fornello schizzato di grasso o dai coltelli un po' arrugginiti, fuori le
stelle che splendono tristi.
Siamo rimaste solo io e la cucina. Mi sembra un po' meglio che pensare
che sono rimasta proprio sola.
Nei momenti in cui sono molto stanca, mi succede spesso di fantasticare.
Penso che quando verrà il momento di morire, vorrei che fosse in cucina.
Che io mi trovi da sola in un posto freddo, o al caldo insieme a qualcuno, mi
piacerebbe poterlo affrontare senza paura. Magari fosse in cucina!";

$length = strlen($paragraph);

echo $length;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>
            Paragrafo tratto da Kitchen di Banana Yoshimoto
        </h1>
        <p>
            <?php echo $paragraph; ?>
        </p>
        <p class="paragrafo">
            Il paragrafo è lungo <?php echo $length; ?> caratteri
        </p>
    </main>
</body>
</html>
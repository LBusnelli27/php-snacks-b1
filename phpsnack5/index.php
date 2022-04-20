<?php
    $mainText = 'LONDRA — A Sandringham, nella casa che Filippo amava. La regina Elisabetta ha raggiunto l’età in cui gli anni – 96 domani – sono motivo di meraviglia e orgoglio. Festeggia, come suo solito senza sfarzi, trasferendosi per qualche giorno nel «cottage» dove il marito ha trascorso gli ultimi anni della sua vita. Wood Farm, che si trova nella tenuta del Norfolk, non lontano dal mare, ha sempre avuto un posto speciale nel cuore di Elisabetta.
    Quando il duca di Edinburgo lasciò la vita pubblica, nel 2017, ne fece la sua abitazione principale, risistemando gli interni e il giardino. È lì che Elisabetta trascorrerà il suo compleanno assieme ad alcuni familiari. Lo spostamento della regina, in elicottero, sembra indicare che le condizioni di salute della sovrana sono migliorate rispetto agli ultimi tempi, quando per via del Covid e difficoltà motorie non meglio precisate era stata costretta a rinunciare a diversi impegni.
    Tuttora non è chiaro se Elisabetta sarà in grado di partecipare ai grandi festeggiamenti organizzati a giugno per il Giubileo di platino in occasione dei suoi 70 anni sul regno, traguardo che la rende la regina più longeva della storia britannica (terza al mondo dopo Luigi XIV e Rama IX, in Thailandia). Se la giornata di domani segna il suo compleanno vero, quello ufficiale ricorre il 2 giugno e sarà segnato dalla tradizionale sfilata militare del Trooping the Colour. È dal 1748 che i sovrani del Regno Unito festeggiano due volte, da quando, ovvero, Giorgio II decise che novembre, il mese in cui era nato, così freddo e grigio, non era adatto al tipo di ricevimenti che desiderava. Elisabetta, che non era destinata a diventare regina e la cui vita, come quella di tutti i reali, cambiò rotta con l’abdicazione dello zio Edoardo VIII, ha sempre cercato di conservare il più possibile la normalità: sino a quando ha potuto si è presa cura dei suoi cavalli, dei suoi cani, di alcuni giardini a lei particolarmente cari. A Balmoral e a Sandringham quando era più giovane le piaceva anche ogni tanto lavare i piatti.
    Nonostante l’età la sovrana non ha smesso di lottare per la sua famiglia: in occasione della cerimonia in ricordo del principe Filippo, Elisabetta ha voluto al suo fianco il figlio Andrea. Il duca è stato accusato di molestie sessuali da Virginia Giuffre e ha raggiunto un accordo finanziario con la donna per evitare il tribunale. Per via della causa, della sua amicizia con Jeffrey Epstein e Ghislaine Maxwell e la sua vicinanza al loro giro di adescamento e sfruttamento di minori, Andrea è stato costretto a rinunciare al suo ruolo ufficiale ed è stato privato delle sue cariche civili e militari. Rimane comunque il terzogenito di Elisabetta e la sovrana ha voluto dimostrare a tutti che i figli sono figli anche quando non si comportano bene.
    Lo stesso vale per i nipoti: Elisabetta ha fatto il possibile per sanare i rapporti tra il principe Harry, Carlo e William. Quando Harry le ha chiesto se poteva passare a trovarla durante la trasferta in Olanda per i giochi Invictus, Elisabetta ha risposto che prima doveva andare a salutare suo padre. Così è stato. Harry e Meghan, ora, sono stati invitati a Londra per il Giubileo. È iniziato il disgelo? La pace in famiglia e una maggiore sicurezza sul futuro della monarchia sono tra le missioni più importanti, ora, per la regina. Il Paese la rispetta e le vuole bene, ma non è scontato che i sentimenti del paese possano passare alla generazione successiva con la corona.';

    $arrayOfParagraph = explode('.', $mainText);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Snack 5</title>
</head>
<body>
    <h2>Testo principale</h2>
    <p><?php echo $mainText ?></p>

    <h2>Testo suddiviso</h2>
    <ul>
    <?php for ($i=0; $i < (count($arrayOfParagraph) - 1); $i++) { ?>
        <li><?php echo $arrayOfParagraph[$i] ?></li>
    <?php } ?>
    </ul>
</body>
</html>
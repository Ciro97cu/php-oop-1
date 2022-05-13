<?php
$arrayMovie = [];

$film = new Movie("BlacKkKlansman");
$film->displayDetails("https://image.tmdb.org/t/p/original/eB7tw4hKqhyxAQPnTv4CRV8Qide.jpg", 2018, "Sono i primi anni ’70, un periodo di grandi sconvolgimenti sociali mentre negli Stati Uniti infuria la lotta per i diritti civili. Ron Stallworth è il primo detective afroamericano del dipartimento di polizia di Colorado Springs, ma il suo arrivo è accolto con scetticismo ed ostilità dai membri di tutte le sezioni del dipartimento.");
$film2 = new Movie("Lucas The Spider");
$film2->displayDetails("https://image.tmdb.org/t/p/original/15jIBAyaNkzcU3lz29Wird5IEDM.jpg", 2017, "Lucas the Spider è un personaggio animato creato dall'animatore Joshua Slice, dal nome e doppiato da suo nipote.");
$film3 = new Movie("The Lone Ranger");
$film3->displayDetails("https://image.tmdb.org/t/p/original/p3OvQFa5lhbwSAhPygwnlugie1d.jpg", 2013, "John Reid è un uomo di legge, educato in città e tornato nel vecchio west per consegnare alla giustizia il pluricriminale Butch Cavendish.");

$film4 = new Movie("The Batman");
$film4->displayDetails("https://image.tmdb.org/t/p/original/8o1R5QU797hcLuvU4M9F3rOBGEY.jpg", 2022, "Quando un killer prende di mira l’élite di Gotham con una serie di malvagi stratagemmi, una scia di indizi criptici spinge il più grande detective del mondo a indagare nei bassifondi, incontrando personaggi come Selina Kyle alias Catwoman, Oswald Cobblepot alias il Pinguino, Carmine Falcone e Edward Nashton alias l’Enigmista.");
$film5 = new Movie("Prova a prendermi");
$film5->displayDetails("https://image.tmdb.org/t/p/original/yR5RSMbVqAxG8kDvzPnViTS65Rz.jpg", 2002, "Frank W. Abagnale Jr. è il tipico ragazzo americano di buona famiglia degli anni '60. Ma l'improvviso dissesto finanziario del padre e il divorzio dei genitori lo costringono ad andarsene di casa.");
$film6 = new Movie("Batman Forever");
$film6->displayDetails("https://image.tmdb.org/t/p/original/mzzNBVwTiiY94xAXDMWJpNPW2US.jpg", 1995, "Due criminali funestano Gotham City: \"Due Facce\", magistrato deturpato e impazzito, e l'Enigmista, scienziato folle e geniale con l'ossessione degli indovinelli.");

$arrayMovie[] = $film;
$arrayMovie[] = $film2;
$arrayMovie[] = $film3;
$arrayMovie[] = $film4;
$arrayMovie[] = $film5;
$arrayMovie[] = $film6;

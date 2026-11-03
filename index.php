<?php
// ZADANIE 1

// 1. Utwórz tablicę o nazwie tab1, zawierającą następujące liczby całkowite: 7, 3, 1, 6, 9, 5, 4, 10, 2, 2.
$tab1 = array(7, 3, 1, 6, 9, 5, 4, 10, 2, 2);

// 1.1 Wypisz zawartość 5 komórki tablicy na ekran. Zmień zawartość 7 komórki tablicy na wartość 12.
echo "5 komórka tab1: " . $tab1[4] . "<br>";
$tab1[6] = 12;

// 1.2 Utwórz drugą tablicę o nazwie tab2, o tej samej wielkości co tab1. Przepisz zawartość tab1 do tab2.
$tab2 = array();
for($i = 0; $i < count($tab1); $i++) {
    $tab2[$i] = $tab1[$i];
}

// 1.3 Utwórz trzecią tablicę o nazwie tab3 (suma komórek o tych samych indeksach tab1 i tab2).
$tab3 = array();
for($i = 0; $i < count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}

// 1.4 Przepisz ponownie zawartość tablicy tab1 do tablicy tab2, jednak w odwrotnej kolejności.
$ostatni_indeks = count($tab1) - 1;
for($i = 0; $i < count($tab1); $i++) {
    $tab2[$i] = $tab1[$ostatni_indeks - $i];
}



// ZADANIE 2

// Przykładowa tablica do zadań (symulująca dane od użytkownika)
$tab = array(3, 12, 5, 33, 9, 3, 14, 2, 8, 21);

// 2.1 Wypełnij tablicę wartościami podanymi przez użytkownika (np. formularz lub zmienne)
// $tab = array($_POST['p1'], $_POST['p2'], ...);

// 2.2 Znajdź najmniejszy i największy element w tablicy.
$min = $tab[0];
$max = $tab[0];
for($i = 1; $i < count($tab); $i++) {
    if($tab[$i] < $min) { $min = $tab[$i]; }
    if($tab[$i] > $max) { $max = $tab[$i]; }
}

// 2.3 Oblicz średnią wartość elementów tablicy.
$suma_el = 0;
for($i = 0; $i < count($tab); $i++) {
    $suma_el += $tab[$i];
}
$srednia = $suma_el / count($tab);

// 2.4 Wylicz ilość wystąpień cyfry 3 w tablicy.
$ilosc_cyfry_trzy = 0;
for($i = 0; $i < count($tab); $i++) {
    $tekst_liczby = (string)$tab[$i];
    for($j = 0; $j < strlen($tekst_liczby); $j++) {
        if($tekst_liczby[$j] == '3') {
            $ilosc_cyfry_trzy++;
        }
    }
}

// 2.5 Dowolnym sposobem posortuj elementy tablicy w porządku rosnącym (bąbelkowe).
$rosnaco = $tab;
$n = count($rosnaco);
for($i = 0; $i < $n - 1; $i++) {
    for($j = 0; $j < $n - $i - 1; $j++) {
        if($rosnaco[$j] > $rosnaco[$j+1]) {
            $temp = $rosnaco[$j];
            $rosnaco[$j] = $rosnaco[$j+1];
            $rosnaco[$j+1] = $temp;
        }
    }
}

// 2.6 Znajdź medianę elementów tablicy.
// (Korzystamy z posortowanej tablice $rosnaco)
$ile_elem = count($rosnaco);
if($ile_elem % 2 == 0) {
    $mediana = ($rosnaco[($ile_elem / 2) - 1] + $rosnaco[$ile_elem / 2]) / 2;
} else {
    $mediana = $rosnaco[floor($ile_elem / 2)];
}

// 2.7 Wypisz 3 najmniejsze i trzy największe elementy tablicy.
// Pierwsze 3 z posortowanej $rosnaco to najmniejsze, ostatnie 3 to największe.
$trzy_min1 = $rosnaco[0];
$trzy_min2 = $rosnaco[1];
$trzy_min3 = $rosnaco[2];
$trzy_max3 = $rosnaco[$ile_elem - 3];
$trzy_max2 = $rosnaco[$ile_elem - 2];
$trzy_max1 = $rosnaco[$ile_elem - 1];

// 2.8 Zwiększ wartość każdego elementu tablicy podnosząc go do kwadratu.
$kwadraty = array();
for($i = 0; $i < count($tab); $i++) {
    $kwadraty[$i] = $tab[$i] * $tab[$i];
}

// 2.9 Policz ilość liczb parzystych i nieparzystych w tablicy.
$parzyste = 0;
$nieparzyste = 0;
for($i = 0; $i < count($tab); $i++) {
    if($tab[$i] % 2 == 0) {
        $parzyste++;
    } else {
        $nieparzyste++;
    }
}

// 2.10 Podaj ile liczb zawartych w tablicy jest podzielna bez reszty przez 3.
$podzielneprzez3 = 0;
for($i = 0; $i < count($tab); $i++) {
    if($tab[$i] % 3 == 0) {
        $podzielneprzez3++;
    }
}



// ZADANIE 3

// Inicjalizacja 10-elementowej tablicy
$tab_litery = array('', '', '', '', '', '', '', '', '', '');

// 3.1 Wypełnij ją literami wprowadzonymi przez użytkownika
// for($i = 0; $i < 10; $i++) { $tab_litery[$i] = $_POST['litera'.$i]; }

// 3.2 Wypełnij ją 10 literowym wyrazem podanym przez użytkownika.
$wyraz = "Programista";
for($i = 0; $i < 10; $i++) {
    $tab_litery[$i] = $wyraz[$i];
}

// 3.3 Zamień wszystkie wielkie litery na małe i odwrotnie.
$zamienione_litery = array();
for($i = 0; $i < 10; $i++) {
    $l = $tab_litery[$i];
    if($l >= 'A' && $l <= 'Z') {
        $zamienione_litery[$i] = strtolower($l);
    } else {
        $zamienione_litery[$i] = strtoupper($l);
    }
}

// 3.4 Wypisz zawartość tablicy w losowej kolejności.
$losowa_tablica = $tab_litery;
shuffle($losowa_tablica);



// ZADANIE 4

// Utwórz 100-elementową tablicę liczb całkowitych i wypełnij ją losowymi liczbami.
$A = array();
for($i = 0; $i < 100; $i++) {
    $A[$i] = rand(1, 20); // losowe liczby od 1 do 20
}

// 4.1 Znajdź największą spośród liczb oraz wyświetl ile razy się pojawiła.
$najwieksza_A = $A[0];
for($i = 1; $i < 100; $i++) {
    if($A[$i] > $najwieksza_A) {
        $najwieksza_A = $A[$i];
    }
}
$ile_razy_max = 0;
for($i = 0; $i < 100; $i++) {
    if($A[$i] == $najwieksza_A) {
        $ile_razy_max++;
    }
}

// 4.2 Wyświetl na ekran liczby nieparzyste.
// echo "Liczby nieparzyste: ";
for($i = 0; $i < 100; $i++) {
    if($A[$i] % 2 != 0) {
        // echo $A[$i] . " ";
    }
}

// 4.3 Wyświetl na ekran liczby znajdujące się w komórkach o nieparzystych indeksach.
// echo "Indeksy nieparzyste: ";
for($i = 1; $i < 100; $i += 2) {
    // echo $A[$i] . " ";
}

// 4.4 Program policzy ile liczb zawiera się w przedziale <5, 15) , po czym wypisze te liczby na ekran.
$przedzial_liczby = array();
for($i = 0; $i < 100; $i++) {
    if($A[$i] >= 5 && $A[$i] < 15) {
        $przedzial_liczby[] = $A[$i];
    }
}

// 4.5 Znajdź element najbliższy wartością wprowadzonej przez użytkownika liczbie „a”.
$a = 10; // Przykładowa wartość 'a'
$najblizszy = $A[0];
$roznica_min = abs($a - $A[0]);
for($i = 1; $i < 100; $i++) {
    $akt_roznica = abs($a - $A[$i]);
    if($akt_roznica < $roznica_min) {
        $roznica_min = $akt_roznica;
        $najblizszy = $A[$i];
    }
}

// 4.6 Znajdź poprzednik i następnik najmniejszej wartości w tablicy.
$min_A = $A[0];
$min_indeks = 0;
for($i = 1; $i < 100; $i++) {
    if($A[$i] < $min_A) {
        $min_A = $A[$i];
        $min_indeks = $i;
    }
}
$poprzednik_min = ($min_indeks > 0) ? $A[$min_indeks - 1] : "brak";
$nastepnik_min = ($min_indeks < 99) ? $A[$min_indeks + 1] : "brak";

// 4.7 Przepisać do nowej tablicy te elementy, których wartość jest >10.
$nowa_wieksze_10 = array();
for($i = 0; $i < 100; $i++) {
    if($A[$i] > 10) {
        $nowa_wieksze_10[] = $A[$i];
    }
}

// 4.8, 4.9, 4.10 Utwórz nową tablicę 100 elementową B, gdzie B[i] = A[1] + ... + A[i].
$B = array();
$suma_biezaca = 0;
for($i = 0; $i < 100; $i++) {
    $suma_biezaca += $A[$i];
    $B[$i] = $suma_biezaca;
}

// 4.11 Posortuj tablicę A malejąco (bąbelkowe).
$A_malejaco = $A;
for($i = 0; $i < 99; $i++) {
    for($j = 0; $j < 99 - $i; $j++) {
        if($A_malejaco[$j] < $A_malejaco[$j+1]) {
            $temp = $A_malejaco[$j];
            $A_malejaco[$j] = $A_malejaco[$j+1];
            $A_malejaco[$j+1] = $temp;
        }
    }
}

// 4.12 Wypisz na ekran elementy, które występują w tablicy przynajmniej 3 razy.
// (Najpierw zliczamy wystąpienia pętlą)
for($i = 0; $i < 100; $i++) {
    $licznik_wystapień = 0;
    for($j = 0; $j < 100; $j++) {
        if($A[$j] == $A[$i]) {
            $licznik_wystapień++;
        }
    }
    if($licznik_wystapień >= 3) {
        // Element $A[$i] występuje co najmniej 3 razy
    }
}



// ZADANIE 5

// Utwórz pustą tablicę 100 elementów.
$fib = array();
for($i = 0; $i < 100; $i++) { $fib[$i] = 0; }

// 5.1 Wypełnij tablicę kolejnymi liczbami ciągu Fibonacciego.
$fib[0] = 0;
$fib[1] = 1;
for($i = 2; $i < 100; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}

// 5.2 Wypełnij tablicę kolejnymi potęgami liczby 2 (od 2^0).
$potegi_2 = array();
$aktualna_potega = 1;
for($i = 0; $i < 100; $i++) {
    $potegi_2[$i] = $aktualna_potega;
    $aktualna_potega *= 2;
}

// 5.3 Wypełni tablicę ciągiem liczb: 3, 6, 9, 12, …
$ciag_trzy = array();
for($i = 0; $i < 100; $i++) {
    $ciag_trzy[$i] = ($i + 1) * 3;
}

// 5.4 Wypełni tablicę ciągiem liczb: 2, 4, 8, 16, 32, …
$ciag_geometryczny = array();
$wartosc_g = 2;
for($i = 0; $i < 100; $i++) {
    $ciag_geometryczny[$i] = $wartosc_g;
    $wartosc_g *= 2;
}
?>
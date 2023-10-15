# NODES - UZLE

## GRAF
Graf = asociativní pole. Každý řádek obsahuje nuly a jedničky, kde 1 = existuje a 0 = neexistuje.

## UZLE
startNode = počáteční uzel a endNode = koncový uzel

## FUNKCE NODEWAY
NodeWay provádí prohledávání grafu, cílem je najít cestu mezi uzly. Zásobník sleduje aktuální uzel a $visited dává informace o tom, jaké uzly už byly navštíveny. Začátek je ve startNode a prohledává do doby, dokud neprojede všechny uzly, tzn. dojel do endNode.

## VÝSTUP
NodeWay se zavolá s daným grafem a uzly a výsledekem je true nebo false, záleží na tom, zda-li existuje cesta mezi danými uzly.

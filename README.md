V takové situaci PHP automaticky provede implicitní přetypování, které se pokusí datový typ na správný formát převést.

Při implicitním přetypování float na int se ztratí část desetinných míst. Při implicitním přetypování na bool se použije logická konverze, kdy hodnota 0 bude False a jakákoliv jiná hodnota True.

Při použití return s jiným datovým typem než byl deklarován v hlavičce funkce, PHP opět provede implicitní přetypování.

Je však lepší používat explicitní konverze pomocí funkcí jako je intval, floatval, strval a tak dále, aby bylo jasné, jaký datový typ chceme použít. Také je vhodné používat kontrolu datových typů pomocí funkcí jako is_int, is_float, is_string a podobně, abychom se ujistili, že máme správný datový typ, předtím než ho použijeme.

! Ještě bych rád dodal, že kód jsem konzultoval s absolventy VŠ v Praze. Něktéré jejich připomínky poupravili kód, nikoliv celý zhotovili !

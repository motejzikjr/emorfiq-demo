
## HTML
- pro lepší čitelnost byla HTML šablona rozdělena na sub-šablony
- místo použití display none byly v html nežádoucí bloky zakomentovány
- do HTML byl doplněny chybějící obsah

## Návrh pro zlpepšení performance
- k obrázkům přidat retina variantu pomocí srcset atributu u tagu img
- optimalizovat datovou velikost obrázků
- pokud je první obrázek v katalogu LCP, přidat fetchpriority=high, odebrat loading=lazy
- zvážit použití tagu picture s různými variantami obrázku pro mobil a desktop

## Návrh na zlepšení SEO
- k nadpisu produktové karty přidat odkaz na detail produktu `<h2><a href="">...</a></h2>`
- odkaz udělat jako stretched link přes celou kartu, viz ProductCard-link nebo pomocí pseudo elementu
- původní ProductCard-link odebrat z ProductCard

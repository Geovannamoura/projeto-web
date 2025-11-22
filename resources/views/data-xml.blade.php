<?xml version="1.0" encoding="UTF-8"?>
<data>
    @foreach($registros as $item)
    <item>
        <marca>{{ $item->marca }}</marca>
        <modelo>{{ $item->modelo }}</modelo>
        <tipo>{{ $item->tipo }}</tipo>
        <preco>{{ $item->preco }}</preco>
        <estado>{{ $item->estado }}</estado>
        <data_fabricacao>{{ $item->data_fabricacao }}</data_fabricacao>
    </item>
    @endforeach
</data>
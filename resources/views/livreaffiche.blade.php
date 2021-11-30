
<ul>
    @foreach($livre as $livres)
    <li>{{$livres->libelle}}</li>
    <li>{{$livres->code}}</li>
    <li>{{$livres->description}}</li>
    <li>{{$livres->lien}}</li>
    @endforeach
</ul>
<!-- Inserire all'interno di -->

<!-- <section id="cards" class="container row pt-5 justify-content-center mx-auto">
    <h2 class="text-center pb-5">PRODOTTI</h2>

</section> -->



<article class="col-12 col-md-4 align-items-stretch">

<div class="card mb-3">
    <h3 class="card-header fs-4">{{$cardTitle}}</h3>
    <div class="card-body">
        <h5 class="card-title">{{$category}}</h5>
        <h6 class="card-subtitle text-muted">ID number: {{$idNumber}}</h6>
    </div>
    <div style="
    background-image: url({{$urlImg}}); 
    height: 200px;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    overflow: hidden;" 
    xmlns="" width="100%" height="200"></div>
    <div class="card-body">
        <p class="card-text">{{$description}}</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Voto Utenti: {{$rate}}</li>
        <li class="list-group-item">Prezzo : {{$price}} €</li>
    </ul>
</div>


</article>

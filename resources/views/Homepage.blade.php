<x-layout>
    <header>
       <div class="container-fluid p-0 heroSection">
        <h1>Welcome to Mingram</h1>
        <p>Condividi i tuoi momenti, crea ricordi e resta connesso.</p>
       </div> 
       <div class="container">
           <div>
                <h2 class="fs-2 fw-bold mt-5">
                    Best post of the Week!
                </h2>
           </div>
           <div class="row  d-flex justify-content-center align-items-center mb-5">
            @foreach ($cards as $card)
             <div class="col-4">
                   <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$card['title']}}</h5>
                            <p class="card-text">{{$card['quote']}}</p>
                        </div>
                    </div> 
            </div>
            @endforeach
           </div>
       </div>
        
    </header>
</x-layout>
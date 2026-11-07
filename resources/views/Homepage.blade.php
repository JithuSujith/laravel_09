<x-layout>
    <header>
       <div class="container-fluid p-0 heroSection">
        <h1>Welcome to Mingram</h1>
        <p>Your words. Your feelings. Your story.</p>
       </div> 
       
    
        <div class="container mt-5">
            <div class="row">
            <div class="col-12 col-md-6">
            <p class="fw-bold fs-3">
                "Everyone has a story to tell, a feeling to express, or a thought worth sharing. Whether it's happiness, sadness, love, motivation, or simply a random thought, turn your feelings into words and let them speak for you. Share your favorite quotes, inspire others, and discover words that make you feel understood. Because sometimes, a single quote can say everything you can't."
            </p>
            </div>
            </div>
        </div>
       


       <div class="container-fluid homeB">
           <div>
                <h2 class="fs-2 fw-bold mt-5 text-white pt-3 ps-0">
                    Best post of the Week!
                </h2>
           </div>
           <div class="row  d-flex justify-content-center align-items-center pb-5 ps-5">
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
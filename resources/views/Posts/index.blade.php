<x-layout>
    <div class="container mt-5">
        <div class="row pagesize">
            @foreach ($posts as $post)
            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem;">
                     <div class="card-body">
                         <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">
                            {{$post->content}}
                        </p>
    
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</x-layout>
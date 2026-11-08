<x-layout>
    <div class="container-fluid p-0">
        <div class="row backg3">
            <div class="col-12 col-md-12">
                <div class="my-5 text-center">
        <h1 class="fw-bold text-white">ALL POSTS</h1>
    </div>
    <div class="container mt-5">
        <div class="row pagesize">
            @foreach ($posts as $post)
            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem;">
                     <div class="card-body">
                        <img class="card-img" src="{{Storage::url($post->img)}}" alt="post image">
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
            </div>
        </div>
    </div>
</x-layout>
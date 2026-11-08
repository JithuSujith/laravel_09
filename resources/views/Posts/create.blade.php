<x-layout>
    <header>
        <div class="conatiner-fluid p-0">
        <div class="row">
            <div class="col-12 col-md-12 d-flex align-items-center  text-white herosection2">
            <h1 class="fw-bold fs-1 ps-5">Create your post by sharing your Quotes</h1>
            </div>
        </div>
       </div>
    </header>
    <main>
        <div class="container mt-5">
            <div class="row justify-content-center pagesize">
                <div class="col-md-8">

                    <form action="{{ route('postsave') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">
                                Title
                            </label>

                            <input
                                type="text"
                                name="title"
                                class="form-control @error('title') is-invalid @enderror"
                                id="title"
                                placeholder="Enter post title"
                            >@error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="img" class="form-label">
                                Post Image
                            </label>

                            <input
                                type="file"
                                name="img"
                                class="form-control"
                                id="img"

                            >
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">
                                Content
                            </label>

                            <textarea
                                name="content"
                                class="form-control @error('content') is-invalid @enderror"
                                id="content"
                                rows="5"
                                placeholder="Write your Quote..."
                            ></textarea>
                            @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Publish Post
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </main>
</x-layout>
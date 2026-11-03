<x-layout>
    <main>
        <div class="container mt-5">
            <div class="row justify-content-center pagesize">
                <div class="col-md-8">

                    <form action="{{ route('postsave') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">
                                Title
                            </label>

                            <input
                                type="text"
                                name="title"
                                class="form-control"
                                id="title"
                                placeholder="Enter post title"
                            >
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">
                                Content
                            </label>

                            <textarea
                                name="content"
                                class="form-control"
                                id="content"
                                rows="5"
                                placeholder="Write your Quote..."
                            ></textarea>
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
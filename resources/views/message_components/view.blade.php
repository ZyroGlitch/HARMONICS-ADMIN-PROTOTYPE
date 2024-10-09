@extends('../index')

@section('page-content')
    <nav aria-label="breadcrumb mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('view.messages') }}" style="text-decoration: none">Messages</a></li>
            <li class="breadcrumb-item active" aria-current="page">View Message</li>
        </ol>
    </nav>

    <div class="card shadow-sm p-3">
        <div class="card-body d-flex">
            <div class="col-lg-3 col-md-3 me-3">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <img src="assets/photo.png" alt="image" class="object-fit-contain rounded shadow-sm mb-3"
                            style="width:200px;height:200px;">

                        <h6 class="fw-bold">john@gmail.com</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-light">
                        <h4 class="fw-bold">Order Concern</h4>
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between gap-4">
                        <form action="{{ route('view.sendResponse') }}" method="post">
                            @csrf

                            <p class="text-muted fw-semibold">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Fugiat,
                                quia. Beatae
                                nihil consequatur necessitatibus deserunt quo atque maiores laudantium voluptatem nemo. Et
                                explicabo perferendis ipsa atque qui, ipsum fugit labore?</p>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                                <label for="floatingTextarea2">Response</label>
                            </div>


                            <button type="submit" class="btn btn-primary fw-bold">SEND RESPONSE <i
                                    class="bi bi-send-fill"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

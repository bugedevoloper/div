<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Home - Start Bootstrap Template</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#!">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Add Blog +
                        </button>


                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Malumot kriting !</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('about.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <input type="text" class="form-control" name="fio"
                                                    placeholder="FIO">
                                            </div>

                                            <div class="mb-3">
                                                <input type="text" class="form-control" name="tel"
                                                    placeholder="TEL">
                                            </div>

                                            <div class="mb-3">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="EMAIL">
                                            </div>

                                            <div class="mb-3">
                                                <input type="text" class="form-control" name="description"
                                                    placeholder="DESCRIPTION">
                                            </div>

                                            <div class="mb-3">
                                                <input type="text" class="form-control" name="manzil"
                                                    placeholder="MANZIL">
                                            </div>

                                            <div class="mb-3">
                                                <input type="file" class="form-control" name="image">
                                            </div>

                                            <div class="mb-3">
                                                <input type="submit" name="ok" class="btn btn-primary mt-3"
                                                    value="Saqlash">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (Session::has('alert'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>
                            <h4 class="text-center">🚫 You successfully deleted the blog ! 🚫</h4>
                        </strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif

                @if (Session::has('flash'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>
                            <h4 class="text-center">👍 You successfully created the blog 🎉</h4>
                        </strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
    </header>


    @foreach ($models as $model)
    <div class="container">
        <div class="row">
                <div class="col-8">
                    <div class="col-lg-6">
                        <div class="card mb-4">
                            <a href="#"><img class="card-img-top"
                                    src="http://127.0.0.1:8000/admin/abouts/{{ $model->image }}" width="100px"
                                    alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">{{ $model->created_at->format('d-M-Y,H:i') }}</div>
                                <h2 class="card-title h4">{{ $model->fio }}</h2>
                                <p class="card-text">{{ $model->description }}</p>
                                <form action="{{ route('about.destroy', $model->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-primary" href="{{ route('about.show', $model->id) }}">View 👁️</a>
                                    <a class="btn btn-warning" href="{{ route('about.update', $model->id) }}">Update ↻</a>

                                    <button type="submit" class="btn btn-danger">Delete 🚫</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>

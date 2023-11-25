<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
        img {
            padding: 10px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Update Saxifa</h1>
            <div class="col-10 mt-5">
                <form action="{{ route('about.update', $model->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @method('POST')

                    <div class="mb-3">
                        <input type="text" class="form-control" name="fio" placeholder="FIO"
                            value="{{ $model->fio }}">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="tel" placeholder="TEL"
                            value="{{ $model->tel }}">
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="EMAIL"
                            value="{{ $model->email }}">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="description" placeholder="DESCRIPTION"
                            value="{{ $model->description }}">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="manzil" placeholder="MANZIL"
                            value="{{ $model->manzil }}">
                    </div>

                    <div class="mb-3">

                        <td>
                            <img src="{{ about_image_path($model->image) }}" width="150px" alt="">
                        </td>

                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="mb-3">
                        <input type="submit" name="ok" class="btn btn-warning mt-3" value="Update">
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

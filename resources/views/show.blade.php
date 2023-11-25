<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <center>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">FIO</th>
                                <th scope="col">TEL</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">DESCRIPTION</th>
                                <th scope="col">MANZIL</th>
                                <th scope="col">IMAGE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $model->id }}</th>
                                <td>{{ $model->fio }}</td>
                                <td>{{ $model->tel }}</td>
                                <td>{{ $model->email }}</td>
                                <td>{{ $model->description }}</td>
                                <td>{{ $model->manzil }}</td>
                                <td>
                                    {{--  <img src="http://127.0.0.1:8000/admin/abouts/{{ $model->image }}" width="150px" alt=""> --}}
                                    <img src="{{ about_image_path($model->image) }}" width="150px" alt="">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </center>
            </div>
        </div>
    </div>
</body>

</html>

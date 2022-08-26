<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <section class="d-flex justify-content-center m-3">
            <h1>
                CRUD First
            </h1>
        </section>
        <section class="d-flex justify-content-center m-3">
            <a href="/item" class="btn me-3 btn-outline-dark">Item</a>
            <a href="/item-type" class="btn btn-dark disabled">Item Type</a>
        </section>
        <section>
            <table class="table table-striped table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Jenis Item</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($item_types as $item_type)
                        <tr>
                            <th>{{$item_type->id}}</th>
                            <td>{{$item_type->name}}</td>
                            <td class="d-flex">
                                <a href="/item-type/{{$item_type->id}}/edit" class="btn btn-warning m-1">Edit</a>
                                <form action="/item-type/{{$item_type->id}}" method="post">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="btn btn-danger m-1">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endForeach
                    <tr>
                        <th colspan="2" class="text-center">Create Element</th>
                        <td>
                            <a href="/item-type/create" class="btn btn-success">Create</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{$item_types->links()}}
            </div>
        </section>
    </div>
</body>
</html>
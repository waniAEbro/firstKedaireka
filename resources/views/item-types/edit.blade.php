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
                Create Item
            </h1>
        </section>
        <section>
            <form action="/item-type/{{$item_type->id}}" method="post">
                @csrf
                @method("put")
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" value="{{$item_type->name}}" class="form-control @error("name") is-invalid @enderror" id="name" name="name" required>
                </div>
                @error("name")
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-warning">Edit Item</button>
            </form>
        </section>
    </div>
</body>
</html>
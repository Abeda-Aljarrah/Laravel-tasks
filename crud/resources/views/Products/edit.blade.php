<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif   -->
        <form action="{{route('Products.update', $data->id)}}" method="post">
            @csrf
            @method("PATCH")
            <!-- Text input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example3">Product name</label>
                <input type="text" value="{{$data->name}}" id="form6Example3" class="form-control" name="name" />
                @if($errors->has('name'))
                <div class="text-danger">{{ $errors->first('name') }}</div>
                @endif
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example4">Price</label>
                <input type="text" value="{{$data->price}}" id="form6Example4" class="form-control" name="price" />
                @if($errors->has('price'))
                <div class="text-danger">{{ $errors->first('price') }}</div>
                @endif
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example7">Description</label>
                <input class="form-control" value="{{$data->description}}" id="form6Example7" rows="4" name="description"></input>
                @if($errors->has('description'))
                <div class="text-danger">{{ $errors->first('description') }}</div>
                @endif
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example6">Image</label>
                <input type="file" value="" id="form6Example6" class="form-control" name="image" />
                @if($errors->has('image'))
                <div class="text-danger">{{ $errors->first('image') }}</div>
                @endif
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Add product</button>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
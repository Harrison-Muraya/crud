<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.css')}}">
    <!-- Include Custom CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/custom.css')}}">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Post</h1>
        <form action="/edit-post/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="body">Body:</label>
                <textarea name="body" id="body" class="form-control">{{$post->body}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>

    <!-- Include Bootstrap JS files -->
    <script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>

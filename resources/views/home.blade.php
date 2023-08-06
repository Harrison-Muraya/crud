<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/custom.css')}}">
</head>
<body>
    @auth
    <div class="container">
        <h1 class="mt-5">Welcome to the home page</h1>
        <form action="logout" method='POST'>
            @csrf
            <button class="btn btn-primary mt-3">Logout</button>
        </form>

        <div class="mt-4">
            <p>Post</p>
            <form action="/create_post" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="body">Content:</label>
                    <textarea name="body" id="body" class="form-control" placeholder="Type your blog here"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>

        <div class="mt-4">
            <h2>All Posts</h2>
            @foreach($posts as $post)
            <div class="bg-light p-3 mt-3">
                <h2>{{$post['title']}} by {{$post->user->name}}</h2>
                {{$post['body']}}
                <p><a href="/edit-post/{{$post->id}}" class="btn btn-primary btn-sm">Edit</a></p>
                <form action="/delete-post/{{$post->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
    @else
    <div class="container">
        <h1 class="mt-5">Welcome! You are not signed in</h1>
        <p>Register</p>
        <div class="mt-3">
            <form action="/register" method='POST'>
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>

        <div class="mt-3">
            <p>Login</p>
            <form action="/login" method='POST'>
                @csrf
                <div class="form-group">
                    <label for="lname">Name:</label>
                    <input type="text" name="lname" id="lname" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="lpassword">Password:</label>
                    <input type="password" name="lpassword" id="lpassword" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
    @endauth

    <!-- Include Bootstrap JS files -->
    <script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
    <!--script src="{{asset('asset/js/script.js')}}"></script-->
</body>
</html>

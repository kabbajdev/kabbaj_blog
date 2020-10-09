<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>list categories</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <a class="navbar-brand" href="#">kabbaj blog</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Action 1</a>
                    <a class="dropdown-item" href="#">Action 2</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<div class="container">
    
    <div class="row">
        <div class="col-6">
            <h1 class="my-3">list of categories</h1>
        </div>
        <div class="col-6 text-right">
            <a class="btn btn-primary my-5" href="/category/create">new category</a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
        
    
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>id</th>
                <th>label</th>
                <th>show</th>
                <th>date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->label }}</td>
                <td>{{ $category->show }}</td>
                <td>{{ $category->created_at }}</td>
                <td class="text-right">
                <form action="/category/{{$category->id}}" method="POST">
                   @method('DELETE')
                   @csrf
                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
                </td>

            </tr>
        @endforeach    
        </tbody>
    </table>

        </div>
    </div>
</div>
    
</body>
</html>
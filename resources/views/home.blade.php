<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotesApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
        body {
            background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(113,177,145,1) 100%);
        }
        
    </style>
</head>
<body class="bg-light">

<div class="container mt-4">
    <h2 class="text-center fw-bold py-4 " >NotesApp</h2>

    <form action="{{ route('store') }}" method="POST" autocomplete="off" class="mb-3">
        @csrf
        <div class="input-group">
            <input type="text" name="content" class="form-control py-3" placeholder="Create Notes" >
            <button type="submit" class="btn btn-primary">CREATE</button>
        </div>
    </form>

    @if(count($notes))
    <ul class="list-group">
        <h3 class="mb-3">Notes</h3>
        @foreach($notes as $note)
        <li class="list-group-item d-flex justify-content-between align-items-center">
        <span>{{ $note->content }}</span>

            <div class="d-flex ">
                <form action="{{ route('edit', $note->id) }}" method="GET" class="d-inline me-2">
                    @csrf
                    <button type="submit" class="btn btn-secondary btn-sm py-2">EDIT</button>
                </form>
        
        
            <form action="{{ route('destroy', $note->id) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form>
            </div>

        </li>
        @endforeach
    </ul>
    @else
    <p>No Notes</p>
    @endif

    @if(count($notes))
    <div class="mt-3">You have {{ count($notes) }} notes</div>
    @else
    <!-- Add a message here if you want -->
    @endif
</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>NotesApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
        body {
            background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(113,177,145,1) 100%);
        }
        
    </style>
</head>
<body>

<div class="container mt-4">
        <h2 class="text-center fw-bold py-4">Edit Note</h2>

        <form action="{{ route('update', $notes->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="content" class="form-label "></label>
                <textarea id="content" name="content" class="form-control">{{ $notes->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>

   
</body>
</html>

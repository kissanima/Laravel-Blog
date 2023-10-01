<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Blog Post</title>
    <!-- Add your CSS stylesheets or links to external stylesheets here -->
</head>
<body>
    <h1>Create New Blog Post</h1>

    <!-- Display validation errors (if any) -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Create a form for creating a new post -->
    <form method="POST" action="{{ route('blog_store') }}">
        @csrf <!-- Include a CSRF token for security -->

        <!-- Title input field -->
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        
        <!-- Content input field -->
        <div>
            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="4" required></textarea>
        </div>

        <!-- Submit button -->
        <div>
            <button type="submit">Create Post</button>
        </div>
    </form>

    <!-- Add any additional content or elements as needed -->

    <!-- Add your JavaScript scripts or links to external scripts here -->
</body>
</html>
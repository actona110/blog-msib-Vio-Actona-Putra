<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog MSIB</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <header>
    <nav>
      <a href="{{ route('categories.index') }}">Categories</a>
      <a href="{{ route('posts.index') }}">Posts</a>
      <a href="{{ route('profile.show') }}">Profile</a>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    <p>&copy; 2023 Blog MSIB</p>
  </footer>

  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Store</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        .d-flex {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .content {
            flex: 1;
        }
    </style>
</head>
<body class="d-flex">

<div class="content">
</div>

<footer class="bg-orange-700 text-white text-center py-2 mt-auto shadow-lg" style="background: rgba(191,181,181,0.8);">
    <p class="mb-0">
        &copy; 2024 <span class="fw-bold">Red Store</span>. All rights reserved.
    </p>
    <p class="mt-2 small">
        <a href="{{route('home')}}" class="text-white text-decoration-none me-3">Home</a>
    </p>
</footer>

</body>
</html>

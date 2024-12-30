@extends("layouts.default")
@section("title", "E-com - Home")
@section("content")
    <main class="container" style="max-width: 1200px;">
        <section>

            <div class="row align-items-center flex-wrap justify-content-between my-5">
                <div class="col-12 col-md-6">
                    <h1 class="display-4 fw-bold text-dark">Give Your Workout<br>New Style!</h1>
                    <p class="lead text-muted mb-4">Success isn't always about greatness. It's about consistency. Consistent hard work gains success. Greatness will come.</p>
                    <a href="#products" class="btn btn-danger py-2 px-4 rounded-pill mt-3">Explore Now &#8594;</a>
                </div>
                <div class="col-12 col-md-6">
                    <img src="{{asset('assets/images/image1.png')}}" class="img-fluid rounded shadow-lg" alt="Workout Image">
                </div>
            </div>

            <div class="categories my-5">
                <div class="small-container">
                    <div class="row g-3">
                        <div class="col-12 col-sm-4">
                            <img src="{{asset('assets/images/category-1.jpg')}}" class="img-fluid rounded shadow-sm" alt="Category 1">
                        </div>
                        <div class="col-12 col-sm-4">
                            <img src="{{asset('assets/images/category-2.jpg')}}" class="img-fluid rounded shadow-sm" alt="Category 2">
                        </div>
                        <div class="col-12 col-sm-4">
                            <img src="{{asset('assets/images/category-3.jpg')}}" class="img-fluid rounded shadow-sm" alt="Category 3">
                        </div>
                    </div>
                </div>
            </div>

            <div class="small-container my-5" id="products">
                <h2 class="title text-center mb-4">Our Products</h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    @foreach($products as $product)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="{{$product->image}}" height="230px" width="100%" class="card-img-top" alt="{{$product->title}}">
                                <div class="card-body">
                                    <a href="{{route('products.details', $product->slug)}}" class="h5 text-decoration-none text-dark">{{$product->title}}</a>
                                    <p class="card-text mt-2 text-muted">{{$product->price}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="container my-4">
                <div class="d-flex justify-content-center">
                    {{$products->links()}}
                </div>
            </div>
        </section>
    </main>
@endsection

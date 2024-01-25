@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('/storage/'.$viewData["product"]->getImage()) }}" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
          {{ $viewData["product"]->getName() }} (${{ $viewData["product"]->getPrice() }})
        </h5>
        <p class="card-text">{{ $viewData["product"]->getDescription() }}</p>
        <p class="card-text">
        <form method="POST" action="{{ route('cart.add', ['id'=> $viewData['product']->getId()]) }}">
          <div class="row">
            @csrf
            <div class="col-auto">
              <div class="input-group col-auto">
                <div class="input-group-text">Quantity</div>
                <input type="number" min="1" max="10" class="form-control quantity-input" name="quantity" value="1">
              </div>
            </div>
            <div class="col-auto">
              <button class="btn bg-primary text-white" type="submit">Add to cart</button>
            </div>
          </div>
        </form>
        </p>
      </div>
    </div>
  </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-GLhlTQ8iUNt1iBRiFfYBjRzAl1oNj46GgkiR1SkD5S+8W8R+V4DTt4Ig9b" crossorigin="anonymous">


<!--Mostrar comentarios y calificaciones asociadas a un producto-->
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title">Comments and Ratings</h5>
        
        @foreach ($viewData["product"]->comments as $comment)
            <div class="mb-2">
                <strong>{{ $comment->user->name }}:</strong>
                <p>{{ $comment->comment }}</p>
                <p>Rating: {{ $comment->rating }}</p>
            </div>
        @endforeach

        <!-- Botón para abrir la sección de comentarios -->
        <button class="btn bg-primary text-white" id="add-comment-btn">Add Comment</button>

        <!-- Sección de comentarios oculta inicialmente -->
        <div id="comment-section" style="display: none;">
            <form method="POST" action="{{ route('comments.store', ['product_id' => $viewData['product']->getId()]) }}">
                @csrf

                <div class="mb-3">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" name="comment" id="comment" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="rating">Rating:</label>
                    <input type="number" min="1" max="5" class="form-control" name="rating" id="rating" required>
                </div>

                <button type="submit" class="btn bg-primary text-white">Submit</button>
            </form>
        </div>
    </div>
</div>
<script>
    // Código JavaScript para mostrar/ocultar la sección de comentarios
    document.getElementById('add-comment-btn').addEventListener('click', function () {
        document.getElementById('comment-section').style.display = 'block';
    });
</script>
@endsection

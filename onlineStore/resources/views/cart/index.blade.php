@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card">
  <div class="card-header">
    Products in Cart
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped text-center">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($viewData["products"] as $product)
        <tr>
          <td>{{ $product->getId() }}</td>
          <td>{{ $product->getName() }}</td>
          <td>${{ $product->getPrice() }}</td>
          <td>{{ session('products')[$product->getId()] }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="row">
      <div class="text-end">
        <a class="btn btn-outline-secondary mb-2"><b>Total to pay:</b> ${{ $viewData["total"] }}</a>
        @if (count($viewData["products"]) > 0)
        <!-- Botón para abrir el modal -->
        <button type="button" class="btn bg-primary text-white mb-2" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay on Delivery</button>
        <a href="{{ route('cart.delete') }}">
        <button class="btn btn-danger mb-2"> Remove all products from Cart</button>
        </a>
        @endif
      </div>
    </div>
  </div>
</div>
<!-- Modal para pedir información del usuario -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paymentModalLabel">User Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- los campos necesarios que el usuario tienes que dar para completar la compra -->
        <form action="{{ route('cart.purchase') }}" method="post">
          @csrf
          <div class="mb-3">
            <label for="firstName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="nombre y apellido" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="email" required 
                  pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" 
                  maxlength="50" oninput="validateEmail()">
            <small id="emailHelp" class="form-text text-muted">Ingrese un correo electrónico válido.</small>
          </div>
          <!-- he anadido este script para anadir mas rectrictionnes al campo email -->
          <script>
              function validateEmail() {
                  var emailInput = document.getElementById('email');
                  var isValid = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(emailInput.value);

                  if (!isValid) {
                      emailInput.setCustomValidity('Ingrese un correo electrónico válido.');
                  } else {
                      emailInput.setCustomValidity('');
                  }
              }
          </script>

          <div class="mb-3">
            <label for="number" class="form-label">Phone number</label>
            <div class="input-group">
              <select class="form-select" id="countryCode" name="countryCode">
                <option value="+34">ES (+34)</option>
                <option value="+33">FR (+44)</option>
                <option value="+39">IT (+39)</option>
                <option value="+351">PT (+351)</option>    
              </select>
              <input type="text" min="9" max="9" class="form-control" id="number" name="number" placeholder="teléfono" minlength="9" pattern="[0-9]+" required>
            </div>
            <small id="emailHelp" class="form-text text-muted">Ingrese un numero válido.</small>
          </div>

          <div class="mb-3">
            <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" name="country" required>
                  <option value="es">España</option>
                  <option value="fr">Francia</option>
                  <option value="it">italia</option>
                  <option value="pt">Portugal</option>
              </select>
          </div>

          <div class="mb-3">
            <label for="address" class="form-label">City and Street</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter city and street address" pattern="[A-Za-záéíóúÁÉÍÓÚüÜñÑ0-9\s]+" title="Please enter a valid city and street address" required>
          </div>

          <div class="mb-3">
            <label for="deliveryDate" class="form-label">Delivery Date</label>
            <input type="date" class="form-control" id="deliveryDate" name="deliveryDate" required>
          </div>

          <center>
            <button type="submit" class="btn bg-primary text-white mb-2">Submit</button>
          </center>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

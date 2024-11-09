@extends('layout')

@section('content')

<br>
<br>
<div class="container">
    
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
    <label for="exampleFormControlInput1" class="form-label">Telefono</label>
    <input type="phone" class="form-control" id="exampleFormControlInput1" placeholder="3157797882">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    <br>
    <button type="btn" class="btn btn-primary">Enviar</button>
  </div>
</div>
@endsection
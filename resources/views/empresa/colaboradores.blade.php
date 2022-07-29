@extends('layout.index')

@section('content')

    <div class="colaboradores">
        <div class="colaboradores-search">
            <div class="content">
                <h1>Colaboradores</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, obcaecati?</p>
            </div>
            <div class="search-input">
                <div class="contenedor-input-search">
                    <label for="input-colaboradores-search">
                        <i class="bi bi-search"></i>
                    </label>
                    <input type="search" name="input-colaboradores-search" class="form-control" id="input-colaboradores-search" placeholder="Buscar">
                </div>
            </div>
        </div>
        <div class="colaboradores-grid">
            @foreach ($colaboradores as $colaborador)
                <div class="card" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card-header">
                        <img src="img/user.png" alt="Imagen de colaborador">
                        <div>
                            <div class="nombre">{{$colaborador->nombre}} {{$colaborador->apellido}}</div>
                            <div class="cargo">{{$colaborador->cargo}}</div>
                            <div class="ciudad">{{$colaborador->ciudad}}</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="body-item">
                            <i class="bi bi-hash"></i>
                            <div class="id">{{$colaborador->id}}</div>
                        </div>
                        <div class="body-item">
                            <i class="bi bi-telephone"></i>
                            <div class="phone">{{$colaborador->telefono}}</div>
                        </div>
                        <div class="body-item">
                            <i class="bi bi-envelope"></i>
                            <div class="email">{{$colaborador->correo}}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="card modal-card">
                    <div class="card-header modal-card-header">
                        <img src="img/user.png" alt="Imagen de colaborador">
                        <div>
                            <div class="nombre">{{$colaborador->nombre}} {{$colaborador->apellido}}</div>
                            <div class="cargo">{{$colaborador->cargo}}</div>
                        </div>
                    </div>
                    <div class="card-body modal-card-body">
                        <div class="modal-body-item">
                            <i class="bi bi-hash"></i>
                            <div class="id">{{$colaborador->id}}</div>
                        </div>
                        <div class="modal-body-item">
                            <i class="bi bi-telephone"></i>
                            <div class="phone">{{$colaborador->telefono}}</div>
                        </div>
                        <div class="modal-body-item">
                            <i class="bi bi-envelope"></i>
                            <div class="email">{{$colaborador->correo}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
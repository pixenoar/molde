<div>

    @section('title') Mi Perfil - Cliente @endsection

    <div class="row justify-content-center">
        <div class="col-lg-4">
            <h1 class="h3 fw-bold mb-4">MI PERFIL</h1>
            <div class="row gy-3">
                <div class="col-12">
                    <div class="card border-0 shadow-sm p-3">
                        <div class="card-body">
                            <h2 class="h5 fw-bold mb-4">DATOS PERSONALES</h2>
                            <div class="row gy-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="iNombre" placeholder="Nombre" value="{{ Auth::user()->nombreCompleto() }}" disabled>
                                        <label for="iNombre">Nombre</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="iEmail" placeholder="Correo electrónico" value="{{ Auth::user()->email }}" disabled>
                                        <label for="iEmail">Correo electrónico</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card border-0 shadow-sm p-3">
                        <div class="card-body">
                            <h2 class="h5 fw-bold mb-4">CAMBIAR CONTRASEÑA</h2>
                            <form wire:submit.prevent="updatePassword">
                                <div class="row gy-3">
                                    @if(session()->has('ok'))
                                        <div class="col-12">
                                            <div class="alert alert-success small mb-0" role="alert">
                                                <i class="bi bi-check-circle-fill me-2"></i> {{ session('ok') }}
                                            </div>
                                        </div>
                                    @endif
                                    @if(session()->has('error'))
                                        <div class="col-12">
                                            <div class="alert alert-danger small mb-0" role="alert">
                                                <i class="bi bi-exclamation-circle-fill me-2"></i> {{ session('error') }}
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control @error('password_current') is-invalid @enderror" id="password_current" wire:model.defer="password_current" placeholder="Contraseña actual">
                                            <label for="password_current">Contraseña actual</label>
                                            @error('password_current')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" wire:model.defer="password" placeholder="Contraseña nueva">
                                            <label for="password">Contraseña nueva</label>
                                            @error('password')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" wire:model.defer="password_confirmation" placeholder="Confirmar contraseña">
                                            <label for="password_confirmation">Repetir contraseña</label>
                                            @error('password_confirmation')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary btn-sm fw-bold" wire:target="updatePassword" wire:loading.class="disabled">
                                            <div wire:loading.remove wire:target="updatePassword">
                                                GUARDAR
                                            </div>                        
                                            <div wire:loading wire:target="updatePassword">
                                                <div class="spinner-border spinner-border-sm text-light" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>                  
                </div>
            </div>            
        </div>
    </div>

</div>
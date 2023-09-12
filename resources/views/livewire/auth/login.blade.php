<div>

    @section('title') Login - Cliente @endsection

    <section>

        <div class="conatiner-fluid bg-dark">
            <div class="container">
                <div class="row justify-content-center align-items-center vh-100">
                    <div class="col-lg-4">

                        <div class="bg-light rounded mx-2 p-4">

                            <div class="text-center mb-5">
                                <h1 class="fw-bold">LOGIN</h1>
                                <p class="mb-0">CLIENTE</p>
                            </div>

                            @if(session()->has('credenciales'))
                                <div class="alert alert-danger py-2 mb-4">
                                    <span class="small">
                                        <i class="bi bi-exclamation-circle me-1"></i> {{ session('credenciales') }}
                                    </span>
                                </div>
                            @endif
                            
                            <form wire:submit.prevent="autenticar()">
                                <div class="row gy-4">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" wire:model.defer="email" class="form-control @error('email') is-invalid @enderror" id="inpEmail" placeholder="Correo electrónico">
                                            <label for="inpEmail">Correo electrónico</label>
                                            @error('email')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="password" wire:model.defer="password" class="form-control @error('password') is-invalid @enderror" id="inPassword" placeholder="Contraseña">
                                            <label for="inPassword">Contraseña</label>
                                            @error('password')
                                                <span class="invalid-feedback">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input wire:model.defer="remember" type="checkbox" id="cbxRemember" class="form-check-input">
                                            <label class="form-check-label" for="cbxRemember">Recordarme</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary fw-bold w-100" wire:target="autenticar" >
                                            <div wire:loading.remove wire:target="autenticar">
                                                INICIAR SESIÓN
                                            </div>                        
                                            <div wire:loading wire:target="autenticar">
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

    </section>

</div>
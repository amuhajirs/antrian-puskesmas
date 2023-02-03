<div>
    <div wire:ignore.self class="modal fade bd-example-modal-lg" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" id="login">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="authenticate">
                        @csrf
                        <div class="mb-3">
                            <label for="usernameLogin">Username<sup>*</sup></label>
                            <input wire:model="username" type="text" id="usernameLogin" class="form-control @error('username') is-invalid @enderror" placeholder="Username" required>
                            @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="passwordLogin">Password<sup>*</sup></label>
                            <input wire:model="password" type="password" id="passwordLogin" class="form-control  @error('password') is-invalid @enderror" placeholder="Password" required>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <br><br>
                        <div align="right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
    
            </div>
        </div>
    </div>

    @error('loginFailed')
    <script type="text/javascript">
    new Noty({
        
        text: 'Username atau Password Salah',
        timeout: 3000,
        theme: "metroui",
        type: "warning",
    }).show();
    </script>
    @enderror
</div>
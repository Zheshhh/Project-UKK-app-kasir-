<div class="container-fluid pt-2">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4><b>Edit User</b></h4>
                    <hr>
                    
                    @isset($user)
                        <form action="/admin/user/{{ $user->id }}" method="POST">
                       @method('put')
                    @else
                    <form action="/admin/user" method="POST">
                    @endisset


                        @csrf
                        <div class="form-group">
                        <label for=""><b>Username</b></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                         placeholder="Nama Lengkap" value="{{  isset($user) ? $user->name : '' }}"> 

                         @error('name')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror  
                        </div>
                    
                    <div class="form-group">
                        <label for=""><b>Email</b></label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" 
                        name="email" placeholder="Email" value="{{  isset($user) ? $user->email : '' }}">

                        @error('email')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror  
                    </div>

                    <a href="/admin/user" class="btn btn-info"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row p-2">
  <div class="col-md-6">
    <div class="card">

       <div class="card-title p-2">
        

        </div>
        <div class="card-body">

          <h5><b>{{ $title }}</b></h5>
          <hr>

           @isset( $produk)
               <form action="/admin/produk/{{ $produk->id }}" method="POST" enctype="multipart/form-data">
                 @method('PUT')
           @else
                <form action="/admin/produk" method="POST"  enctype="multipart/form-data">
           @endisset

          @csrf
              <label for="">Nama Produk</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
              placeholder="Nama kategori" value="{{ isset($produk) ? $produk->name : old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                         {{ $message }}
                    </div>
                @enderror

                <label for="">Penulis</label>
              <input type="text" name="penulis" class="form-control @error('penulis') is-invalid @enderror" 
              placeholder="Nama Penulis" value="{{ isset($produk) ? $produk->penulis : old('penulis') }}">
                @error('penulis')
                    <div class="invalid-feedback">
                         {{ $message }}
                    </div>
                @enderror

                <label for="">Penerbit</label>
              <input type="text" name="penerbit" class="form-control @error('penerbit') is-invalid @enderror" 
              placeholder="Nama Penerbit" value="{{ isset($produk) ? $produk->penerbit : old('penerbit') }}">
                @error('penerbit')
                    <div class="invalid-feedback">
                         {{ $message }}
                    </div>
                @enderror

                <label for="">Nama Kategori</label>
                <select name="kategori_id" class="form-control  @error('kategori_id') is-invalid @enderror" 
                id="">
                  <option value="">--kategori--</option>
                  @foreach ($kategori as $item)
                       <option value="{{ $item->id }}" {{ isset($produk) ? $item->id ==
                        $produk->kategori_id ? 'selected' : '' : '' }}>{{ $item->name }}</option>
                  @endforeach
                </select>
                @error('kategori_id')
                   <div class="invalid-feedback">
                       {{ $message }}
                   </div>
                @enderror

                <label for="">Harga</label>
              <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" 
              placeholder="Harga" value="{{ isset($produk) ? $produk->harga : old('harga') }}">
                @error('harga')
                 <div class="invalid-feedback">
                    {{ $message }}
                 </div>
                @enderror

                <label for="">Stok</label>
              <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror" 
              placeholder="Stok" value="{{ isset($produk) ? $produk->stok : old('stok') }}">
                @error('stok')
                 <div class="invalid-feedback">
                    {{ $message }}
                 </div>
                @enderror

                <label for="">Tampilan Buku</label>
              <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" 
              value="{{ isset($produk) ? $produk->gambar : old('gambar') }}">
                @error('gambar')
                 <div class="invalid-feedback">
                    {{ $message }}
                 </div>
                @enderror

                @isset($produk)
                   <img src="/{{ $produk->gambar }}" width="100px" alt="">
                @endisset
                <br>

              <a href="/admin/kategori" class="btn btn-info mt-2"><i class="fas fa-arrow-left"></i> 
              Kembali</a>
              <button type="submit" class="btn btn-primary mt-2"><i class="fas fa-save"></i> Simpan</
              button>
          </form>
          
           </div>
        </div>    
    </div> 
</div>   
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
        <div class="container mt-5">
            <h1 class="text-center mb-5"> DATA PENJUAL</h1>
            <a href="{{ route('penjual.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <th>NO</th>
                            <th>NAMA PEMESAN</th>
                            <th>NAMA BARANG</th>
                            <th>JUMLAH BARANG</th>
                            <th>ALAMAT</th>
                            </thead>
                            
                            <tbody>
                                    @if ($penjual->count()>0)
                                    @foreach ($penjual as $no => $hasil)
                                <tr>
                                    <th>{{ $no+1 }}</th>
                                    <td>{{ $hasil->nama_pemesan }}</td>
                                    <td>{{ $hasil->nama_barang }}</td>
                                    <td>{{ $hasil->jumlah_barang }}</td>
                                    <td>{{ $hasil->alamat }}</td>
                                    <td>
                                        <form action="{{route('penjual.destroy', $hasil->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('penjual.edit', $hasil->id) }}" class="btn btn-success btn-sm"> Edit</a>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="10" align="center">Tidak Ada Data</td>
                                </tr>
                                @endif
                                
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
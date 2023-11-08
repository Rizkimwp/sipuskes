@extends ('app')
@section('title', 'Kelola Jadwal Praktek')
@section('content') 
<div class="container-fluid">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola Laman</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kelola Laman</h6>
        </div>
        <div class="col-2 m-3">
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                                role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending"
                                            style="width: 102.688px;">Halaman</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 66.125px;">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($pages as $page)
                                    <tr>
                                      <td>{{ $page->title}}</td>
                                        <td class="row align-items-start">
                                        <div class="col-3">
                                        <a href="{{ route($page->konten . '.index', $page->id) }}"
                                                    class="bg-warning badge "> <i class="fas fa-fw fa-marker" alt="edit"></i></a>
                                                        </div>
                                                        <div class="col">
                                                <form method="diagnosa" action="{{ route('page.destroy', $page->id) }}" class="d-inline"
                                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="badge bg-danger"><i class="fas fa-fw fa-trash" alt="delete"></i></button>
                                                </form>
                                                </div>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection 
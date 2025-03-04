@include('inclaude.header')
@include('inclaude.sidebar')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Data Passien</h4>
            </div>
        </div>
        <div class="row">
            @if(session('warning'))
                <script>
                    Swal.fire({
                        icon: 'warning',
                        title: 'Peringatan!',
                        text: '{{ session('warning') }}',
                    });
                </script>
            @endif

            @if(session('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: '{{ session('success') }}',
                    });
                </script>
            @endif

            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <thead>
                            <tr>
                                {{-- <th>No</th> --}}
                                <th>No.CM</th>
                                <th>Nama Passien</th>
                                <th>Ruangan</th>
                                <th>Diagnosa</th>
                                <th>Skrining Ews</th>
                                <th>skor</th>
                                <th>Keadaan</th>
                                <th>Keteranga</th>
                                <th>Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $ews )
                                
                            <tr>
                                <td>{{$ews->no_cm}}</td>
                                <td>{{$ews->nama_passien}}</td>
                                <td>{{$ews->ruangan}}</td>
                                <<td>{{$ews->diagnosa}}</td>
                                <td>{{$ews->skrining_ews}}</td>
                                <td>{{$ews->skor}}</td>
                                <td>{{$ews->keadaan}}</td>
                                <td>{{$ews->ket}}</td>
                                <td><span class="custom-badge status-red">Inactive</span></td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{route('ews/create')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="{{route('aksi-hapus',$ews)}}" data-toggle="modal"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
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
@include('inclaude.footer')
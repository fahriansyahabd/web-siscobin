@include('inclaude.header')
@include('inclaude.sidebar')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">From Inputan Ews</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('aksi-ews')}}" method="POST">
                    @csrf
                    <div class="card-box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Name:</label>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text"  placeholder="Nama Passien" class="form-control" name="nama_passien" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="no_cm" placeholder="No CM" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Ruangan</label>
                                    <div class="col-lg-9">
                                        <input type="text"  class="form-control" placeholder="ruangan passien" name="ruangan" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Diangnosa</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Diagnosa" name="diagnosa"  required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Skrining Ews</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control m-b-20" placeholder="Skrining EWS" name="skrining_ews" required>
                                        <div class="row">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">skor</label>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <input type="number"  placeholder="Masukan skor" class="form-control" name="skor" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">keadaan</label>
                                    <div class="col-lg-9">
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Keadaan passien" name="keadaan" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">keterangan</label>
                                    <div class="col-lg-9">
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Enter message keterangan" name="ket" ></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    @if($errors->any())
                    <div style="color: red;">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
                @endif
                </form>
            </div>
        </div>
    </div>
</div>

@include('inclaude.footer')
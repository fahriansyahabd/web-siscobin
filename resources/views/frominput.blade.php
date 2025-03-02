@include('inclaude.header')
@include('inclaude.sidebar')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">From Inputan Ews</h4>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="card-title">Basic Form</h4>
                    <form action="#">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">First Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Email Address</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Username</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Repeat Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-box">
                    <h4 class="card-title">Address Form</h4>
                    <form action="#">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Address Line 1</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Address Line 2</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">City</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">State</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Country</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Postal Code</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="card-title">Two Column Horizontal Form</h4>
                    <h4 class="card-title">Personal Information</h4>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Gender</label>
                                    <div class="col-md-9">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1" checked>
                                            <label class="form-check-label" for="gender_male">
                                            Male
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
                                            <label class="form-check-label" for="gender_female">
                                            Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Blood Group</label>
                                    <div class="col-md-9">
                                        <select class="select">
                                            <option>Select</option>
                                            <option value="1">A+</option>
                                            <option value="2">O+</option>
                                            <option value="3">B+</option>
                                            <option value="4">AB+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Username</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Repeat Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="card-title">Address</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Address Line 1</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Address Line 2</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">State</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">City</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Country</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Postal Code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('aksi-ews')}}" method="POST">
                    @csrf
                    <div class="card-box">
                        <div class="row">
                            <div class="col-md-6">
                                {{-- <h4 class="card-title">Personal details</h4> --}}
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Name:</label>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="nama" id="nama" placeholder="Nama Passien" class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="no_cm" id="no_cm" placeholder="No.CM" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Ruangan</label>
                                    <div class="col-lg-9">
                                        <input type="text"  class="form-control" placeholder="ruangan passien" name="ruangn" id="ruangn" required  >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Diangnosa</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Diagnosa" name="diagnosa" id="diagnosa" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Skrining Ews</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control m-b-20" placeholder="Skrining EWS" name="skrining_ews" id="skrining_ews" required>
                                        <div class="row">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">keadaan</label>
                                    <div class="col-lg-9">
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Keadaan passien" name="keadaan" id="keadaan" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">keterangan</label>
                                    <div class="col-lg-9">
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Enter message keterangan" name="ket" id="ket"></textarea>
                                    </div>
                                </div>
                                {{-- <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">keada</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div> --}}
                                {{-- <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Password:</label>
                                    <div class="col-lg-9">
                                        <input type="password" class="form-control">
                                    </div>
                                </div> --}}
                                {{-- <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">State:</label>
                                    <div class="col-lg-9">
                                        <select class="select">
                                            <option>Select State</option>
                                            <option value="1">California</option>
                                            <option value="2">Texas</option>
                                            <option value="3">Florida</option>
                                        </select>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('inclaude.footer')
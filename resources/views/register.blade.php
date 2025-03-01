@include('inclaude.header')
<div class="main-wrapper  account-wrapper">
    <div class="account-page">
        <div class="account-center">
            <div class="account-box">
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form action="{{route('aksi.registrasi')}}" class="form-signin" method="POST">
                    @csrf
                    <div class="account-logo">
                        <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="form-control  " placeholder="Nama" name="name">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    {{-- <div class="form-group checkbox">
                        <label>
                            <input type="checkbox"> I have read and agree the Terms & Conditions
                        </label>
                    </div> --}}
                    <div class="form-group text-center">
                        <button" class="btn btn-success" type="submit">Signup</button>
                    </div>
                    <div class="text-center login-link">
                        Already have an account? <a href="login.html">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('inclaude.footer')
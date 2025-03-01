@include('inclaude.header')


<div class="main-wrapper account-wrapper">
    <div class="account-page">
        <div class="account-center">
            <div class="account-box">
                @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
                <form action="{{route('aksi.login')}}" method="POST" class="form-signin">
                    @csrf
                    <div class="account-logo">
                        <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                    </div>
                    <div class="form-group">
                        <label>Username or Email</label>
                        <input type="text" autofocus="" class="form-control" placeholder="Username" name="name">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    {{-- <div class="form-group text-right">
                        <a href="forgot-password.html">Forgot your password?</a>
                    </div> --}}
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary account-btn">Login</button>
                    </div>
                    <div class="text-center register-link">
                        Don’t have an account? <a href="{{route('registrasi')}}">Register Now</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('inclaude.footer')
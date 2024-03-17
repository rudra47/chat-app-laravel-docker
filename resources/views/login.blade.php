@include('includes/head')

<div class="login-page">
    <div class="form">
        <form class="login-form" method="post" action="{{ route('postLogin') }}">
            @csrf
            <input type="email" name="email" placeholder="Email"/>
            <input type="password" name="password" placeholder="Password"/>
            <button type="submit">login</button>

            {{-- <p class="message">Not registered? <a href="#">Create an account</a></p> --}}
        </form>
        <a href="{{ route('auth.redirect') }}"><button style="background: #060606">Login With Github</button></a>
    </div>
</div>

@include('includes/footer')

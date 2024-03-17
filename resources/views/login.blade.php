@include('includes/head')

<div class="login-page">
    <div class="form">
        <form class="register-form">
            <input type="text" placeholder="name"/>
            <input type="password" placeholder="password"/>
            <input type="text" placeholder="email address"/>
            <button>create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form">
            <input type="text" placeholder="username"/>
            <input type="password" placeholder="password"/>
            <button>login</button>


            {{-- <p class="message">Not registered? <a href="#">Create an account</a></p> --}}
        </form>
        <a href="{{ route('auth.redirect') }}"><button style="background: #060606">Login With Github</button></a>
    </div>
</div>

@include('includes/footer')

    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        @auth
            <h1 class="h2">Welcome back, {{ auth()->user()->name }}!</h1>
            <form action="/logout" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Logout</button>
            </form>
        @endauth
    </div>

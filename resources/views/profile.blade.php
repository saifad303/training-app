<div>
    User profile
    Profile:

    @if (session()->has("user"))
        <p>Email: {{ session("user")["email"] }}</p> 
        <p>password: {{ session("user")["password"] }}</p> 

        <form action="logout" method="GET">
        
            <button>Logout</button>
        </form>
    @else
        <p>No session data</p>        
    @endif

    
</div>
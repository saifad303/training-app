<div>
    <h2>User Login</h2>
    <form action="postLogin" method="POST">
        @csrf 
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button type="submit">login</button>
    </form>
</div>
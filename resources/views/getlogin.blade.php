<h1>User login</h1>
<form action="user" method="post">
@csrf
 <input type="text" name="user" placeholder="Enter user name"> <br> <br>
 <input type="password" name="password" placeholder="Enter password"> <br> <br>
 <button type="submit">Login</button>
</form>
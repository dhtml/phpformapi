<p>Whenever a form has already declared it's action, the API does not tamper with it.</p>

<form id="loginForm" name="loginForm" method="post" action="post.php">
  <p>User Name
    <input type="text" name="name" id="name" />
  </p>
  <p>
    <label>E-mail
      <input type="text" name="email" id="email" />
    </label>
  </p>
  <p>
    <input type="submit" value="Login" />
  </p>
</form>

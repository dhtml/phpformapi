<form id="loginForm" name="loginForm" method="post">
  <p>User Name
    <input type="text" name="name" id="name"  phpformapi="{required:'true',title:'User Name'}"/>
  </p>
  <p>
    <label>E-mail
      <input type="text" name="email" id="email"   phpformapi="{data:'email',required:'true',title:'E-mail'}"/>
    </label>
  </p>
  <p>
    <input type="submit" value="Login" />
  </p>
</form>

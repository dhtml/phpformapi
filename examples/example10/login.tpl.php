
<form id="loginForm" name="loginForm" method="post">
  <p>User Name (Alphanumeric)
    <input type="text" name="username" class="user" id="username" phpformapi="{data:'alphanumeric',required:'true',minlength:3,title:'User Name'}" />
  </p>
  <p>First Name (Alpha)
    <input type="text" name="firstname" id="firstname" phpformapi="{data:'alpha',required:'true',title:'User Name'}" />
  </p>
  <p>
    <label>E-mail (email)
      <input type="text" name="email" id="email"  phpformapi="{data:'email',required:'false',title:'E-mail'}"/>
    </label>
  </p>
  <p>
    <label>Spam mail
      <input type="text" name="spammail" id="spammail"  phpformapi="{data:'email',required:'true',title:'Spam Mail'}"/>
    </label>
  </p>
  <p>
    <label>Phone
      <input type="text" name="phone" id="phone"  phpformapi="{data:'numeric',required:'true',title:'Phone Digit',maxlength:3}"/>
    </label>
  </p>
  <p>
    <label>Mobile
      <input type="text" name="mobile" id="mobile"  phpformapi="{data:'numeric',required:'true',title:'Mobile Digit',exactlength:5}"/>
    </label>
  </p>

    <p>
    <label>Password
      <input type="text" name="pass" id="pass"  phpformapi="{required:'true',title:'Password'}"/>
    </label>
  </p>

  <p>
    <label>Confirm Password
      <input type="text" name="pass2" id="pass2"  phpformapi="{required:'true',title:'Confirm Password',matches:'pass'}"/>
    </label>
  </p>

  
  <p>
    <input type="submit" value="Login" />
  </p>
</form>

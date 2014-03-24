<p>
Notice that tags with attribute leavealone and readonly will not persist after submission. 
Take a look at the various checkbox examples - some without values, some with name and values, some as arrays and  values.
</p>
<form id="registerForm" name="registerForm" method="post">
  <p>User Name
    <input type="text" name="name" id="name" />
  </p>
  <p>
    <label>E-mail
      <input type="text" name="email" id="email" />
    </label>
  </p>
  <p>
    <label>Phone
      <input type="text" name="phone" id="phone" leavealone="leavealone"/>
    </label>
  </p>
  <p>
    <label>Mobile
      <input type="text" name="mobile" id="mobile" readonly="readonly"/>
    </label>
  </p>
  <p>
    <label>
      <input type="checkbox" name="Updates" id="Updates" />
      Updates</label>

    <label>
      <input type="checkbox" name="Newsgroup" id="Newsgroup" />
      Newsgroup</label>
      
      <label>
      <input type="checkbox" name="file1" id="file1" value="file1"/>
      File 1</label>
      
      <label>
      <input type="checkbox" name="file2" id="file2" value="file2"/>
      File 2</label>
      
      <label>
      <input type="checkbox" name="club[]" value="chelsea"/>
      chelsea</label>
      <label>
      <input type="checkbox" name="club[]" value="arsenal"/>
      arsenal</label>
      <label>
      <input type="checkbox" name="club[]" value="manutd"/>
      manutd</label>


  </p>
  <p>
    <label>
      <input type="radio" name="radio" id="Gender" value="Male" />
      Male</label>
      <label>
      <input type="radio" name="radio" id="Gender" value="Female" />
      Female</label>
  </p>
  <p>
    <select name="states" id="states">
      <option>Lagos</option>
      <option selected="selected">Ogun</option>
      <option>Oyo</option>
      <option>Osun</option>
    </select>
  </p>
  <p>
      <textarea name="description" id="description" cols="45" rows="5"></textarea>
  </p>
  <p>
    <input type="submit" id="button" value="Register" />
  </p>
</form>

@include('layout.reglog')
<html>
<div class="form sign-up">
      <h2>Time to feel like home,</h2>
      <form action="/store" method="POST">
        @csrf
      <label>
        <span>Name</span>
        <input name="name" type="text" />
      </label>
      <label>
        <span>Email</span>
        <input name="email" type="email" />
      </label>
      <label>
        <span>Password</span>
        <input name="password" type="password" />
      </label>
      <label>
        <span>Confirm Password</span>
        <input name="password_confirmation" type="password" />
      </label>
      <input type="submit" class="submit" value="Sign Up"/>
    </div>
</form>
  </div>
</div>

</html>

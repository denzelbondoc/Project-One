@include('layout.reglog')
<p class="tip"></p>
<div class="cont">
  <div class="form sign-in">
    <h2>Welcome back,</h2>
    <form action="/login/process" method="POST">
      @csrf
    <label>
      <span>Email</span>
      <input name="email" type="email" />
    </label>
    <label>
      <span>Password</span>
      <input name="password" type="password" />
    </label>
    <input type="submit" class="submit"/>
</form>
  </div>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Sign up and discover great amount of new opportunities!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already has an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
@include('user.register')
<script>
  document.querySelector('.img__btn').addEventListener('click', function() {
  document.querySelector('.cont').classList.toggle('s--signup');
});
</script>
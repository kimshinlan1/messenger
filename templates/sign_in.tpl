{extends file="layout.tpl"}
{block name=body}
  <div class="box-join">
    <p>Tạo tài khoản hoặc đăng nhập để tham gia với chúng tôi</p>
    <form method="POST" id="formSignin" class="formJoin" onsubmit="return false;">
        <input type="text" placeholder="Tên đăng nhập" class="data-input" id="username">
        <input type="password" placeholder="Mật khẩu" class="data-input" id="password">
        <button class="btn-submit"> Login</button>
        <div class="login_button">
          Don't have account? Please sign up
          <a href="sign_up.php">Go to sign up page</a>
        </div>
        <div class="alert danger"></div>
    </form><!-- form#formJoin -->
</div><!-- div.box-join -->

{/block}
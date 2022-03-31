{extends file="layout.tpl"}
{block name=body}
<div class="box-join">
    <p class ="text-bold h3 text-primary">Create account</p>
    <form method="POST" class= "formJoin" id="formRegister" onsubmit="return false;">
        <input type="text" placeholder="Tên đăng nhập" class="data-input" id="usernameRegister">
        <input type="password" placeholder="Mật khẩu" class="data-input" id="passwordRegister">
        <button class="btn-submit">Bắt đầu</button>
        <div class="alert danger"></div>
    </form><!-- form#formJoin -->
</div><!-- div.box-join -->
{/block}
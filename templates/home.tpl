{extends file="layout.tpl"}

{block name=body}
  <div class="main-chat">
            </div><!-- div.main-chat -->
            <div class="box-chat">
                    <form method="POST" id="formSendMsg" onsubmit="return false;">
                            <input type="text" placeholder="Nhập nội dung tin nhắn ...">
                    </form><!-- form#formSendMsg -->
            </div><!-- div.box-chat -->
{/block}
<div id="login_board" class="margin_bottom box_bold_border">
    <div class="center">
        <div class="headline_9">
            <h2>ĐĂNG NHẬP</h2>
        </div>
        <div class="body">
            <h3>Bạn chưa có tài khoản <?php $this->settings->get_param('defaultPageTitle'); ?> <a href="<?php echo base_url('dang-ky.html'); ?>">Đăng ký tại đây?</a>
            </h3>
            <form action="#" id="FormMain" method="post" class="form_style_3">
                <?php if(isset($error)): ?>
                    <div class="validation-summary-errors"><ul><li><?php echo $error; ?></li>
                        </ul></div>
                <?php endif; ?>
                <fieldset>
                    <ul>
                        <li><label for="UserName">Email</label><input id="UserName" maxlength="30" name="Users[email]" type="text" value="" /></li>
                        <li><label for="Password">Mật khẩu</label><input id="Password" maxlength="30" name="Users[password]" type="password" value="" /></li>
                        <li class="btn">
                            <div class="remember">
                                <input id="RememberMe" name="RememberMe" type="checkbox" value="true" /><input name="Users[remember_me]" type="hidden" value="false" /> <label for="RememberMe">Nhớ cho lần đăng nhập sau</label></div>
                            <button type="submit" id="Submit" class="btn_2">
                                <span>ĐĂNG NHẬP</span></button></li>
                        <li class="forget"><a href="<?php echo base_url('quen-mat-khau.html'); ?>">Quên mật khẩu?</a></li>
                    </ul>
                </fieldset>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        $('#UserName').focus();
        $('#FormMain').submit(function () {
            if ($('#UserName').val().length < 2) {
                $('#UserName').focus();
                return false;
            }
            if ($('#Password').val().length < 2) {
                $('#Password').focus();
                return false;
            }
            return;
        });
    </script>
</div>
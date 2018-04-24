<div id="content_container">
    <div class="wrap">
        <div id="login_board" class="margin_bottom box_bold_border" style="padding-left: 30%;">
            <div class="center" style="width: 65%;">
                <div class="headline_9">
                    <h2>QUÊN MẬT KHẨU</h2>
                </div>
                <div class="body">
                    <form action="#" id="FormMain" method="post" class="form_style_3">
                        <?php if(isset($msg)): ?>
                            <div class="validation-summary-errors" style="color: green; background-color: white;"><ul><li><?php echo $msg; ?></li>
                                </ul></div>
                        <?php endif; ?>
                        <?php if(isset($error)): ?>
                            <div class="validation-summary-errors"><ul><li><?php echo $error; ?></li>
                                </ul></div>
                        <?php endif; ?>
                        <fieldset>
                            <ul>
                                <li><label for="UserName">Email</label><input id="UserName" maxlength="30" name="email" type="text" value="" /></li>
                                <li class="btn">
                                    <button type="submit" id="Submit" class="btn_2">
                                        <span>GỬI MẬT KHẨU</span>
                                    </button>
                                </li>
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
    </div>

</div>
<?php
/**
 * Project: yiiim
 * File: add.php
 * User: 明心
 * Date: 14-8-4
 * Time: 下午5:11
 * Desc: 
 */

?>
<style>
 .formclass{
        width:600px;
  } 
</style>
<form role="form" method="post" enctype="multipart/form-data" class="formclass">
    <div class="form-group">
        <label for="exampleInputEmail1">用户名</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="输入用户名" name="data[uname]" value="admin">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">原始密码</label>
        <input type="password" class="form-control" id="exampleInputPassword" placeholder="输入密码" name="data[oldpwd]" value="">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">新密码</label>
        <input type="password" class="form-control" id="exampleInputPassword" placeholder="输入密码" name="data[newpwd1]" value="">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">确认新密码</label>
        <input type="password" class="form-control" id="exampleInputPassword" placeholder="再次输入密码" name="data[newpwd2]" value="">
    </div>

    <button type="submit" class="btn btn-default">
        <?php
            if(Yii::app()->controller->action->id == 'add')
                echo '修改';
            else
                echo '添加';
        ?>
    </button>
</form>

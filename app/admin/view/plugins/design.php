<form class="layui-form" action="{:url()}" method="post">
<div class="layui-tab-item layui-show layui-form-pane">
        <fieldset class="layui-elem-field layui-field-title">
          <legend>插件基本信息</legend>
        </fieldset>
        <div class="layui-form-item">
            <label class="layui-form-label">插件名</label>
            <div class="layui-input-inline w300">
                <input type="text" class="layui-input" name="name" lay-verify="required" autocomplete="off" placeholder="请输入插件名">
            </div>
            <div class="layui-form-mid layui-word-aux">插件名称只能为字母</div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">插件标题</label>
            <div class="layui-input-inline w300">
                <input type="text" class="layui-input" name="title" lay-verify="required" autocomplete="off" placeholder="请输入插件标题">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">插件标识</label>
            <div class="layui-input-inline w300">
                <input type="text" class="layui-input" name="identifier" lay-verify="required" autocomplete="off" placeholder="请输入插件标识">
            </div>
            <div class="layui-form-mid layui-word-aux">格式：插件名(只能为字母).开发者标识.plugins</div>
        </div>
<!--         <div class="layui-form-item">
            <label class="layui-form-label">插件图标</label>
            <div class="layui-input-inline">
                <input type="text" class="layui-input" id="input-icon" name="icon" lay-verify="" autocomplete="off" placeholder="可自定义或使用系统图标">
            </div>
            <i class="" id="form-icon-preview"></i>
            <a href="{:url('publics/icon?input=input-icon&show=form-icon-preview')}" class="layui-btn layui-btn-primary j-iframe-pop fl">选择图标</a>
        </div> -->
        <div class="layui-form-item">
            <label class="layui-form-label">插件描述</label>
            <div class="layui-input-inline w300">
                <textarea  class="layui-textarea" name="intro" lay-verify="" autocomplete="off" placeholder="请填写插件描述"></textarea>
            </div>
            <div class="layui-form-mid layui-word-aux"></div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">开发者</label>
            <div class="layui-input-inline w300">
                <input type="text" class="layui-input" name="author" lay-verify="" autocomplete="off" placeholder="请输入开发者">
            </div>
            <div class="layui-form-mid layui-word-aux">建议填写</div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">开发者网址</label>
            <div class="layui-input-inline w300">
                <input type="text" class="layui-input" name="url" lay-verify="" autocomplete="off" placeholder="请输入开发者网址">
            </div>
            <div class="layui-form-mid layui-word-aux">建议填写</div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">版本号</label>
            <div class="layui-input-inline w300">
                <input type="text" class="layui-input" name="version" value="1.0.0" lay-verify="required" autocomplete="off" placeholder="请输入版本号">
            </div>
            <div class="layui-form-mid layui-word-aux">版本号格式采用三段式：主版本号.次版本号.修订版本号</div>
        </div>
        <fieldset class="layui-elem-field layui-field-title">
          <legend>快速生成插件目录结构</legend>
        </fieldset>
        <div class="layui-form-item">
            <label class="layui-form-label">插件目录</label>
            <div class="layui-input-inline w300">
                <textarea rows="8"  class="layui-textarea" name="dir" lay-verify="" autocomplete="off">admin
home
model
sql
validate
view
static</textarea>
            </div>
            <div class="layui-form-mid layui-word-aux">[可选]admin(后台模块)<br>[可选]home(前台模块)<br>[可选]model(模型层)<br>[可选]sql(数据库文件)<br>[可选]vaidate(验证规则)<br>[可选]view(视图)<br>[可选]static<br><span class="red">如果您的插件需要分前后台，我们建议您以独立模块方式来扩展</span></div>
        </div>
</div>
<div class="layui-tab-item">
    <fieldset class="layui-elem-field layui-field-title">
      <legend>插件配置设计</legend>
    </fieldset>
    <div class="layui-form-item layui-form">
        <table class="layui-table" lay-even="" lay-skin="row">
            <thead>
                <tr>
                    <th>排序</th>
                    <th>配置名称[必填]</th>
                    <th>配置变量名[必填]</th>
                    <th>配置类型[必填]</th>
                    <th>配置选项[选填]</th>
                    <th>默认值[选填]</th>
                    <th>配置提示[选填]</th>
                    <th width="50">操作</th>
                </tr> 
            </thead>
            <tbody>
<!--                 <tr class="config-tr">
                    <td><input type="text" name="config[100][sort]" class="layui-input w50" value="100"></td>
                    <td><input type="text" name="config[100][title]" class="layui-input" lay-verify="required"></td>
                    <td><input type="text" name="config[100][name]" class="layui-input" lay-verify="required"></td>
                    <td>
                        <select name="config[100][type]" class="field-type" type="select">
                        {volist name=":form_type()" id="v"}
                            <option value="{$key}">[{$key}]{$v}</option>
                        {/volist}
                        </select>
                    </td>
                    <td><textarea name="config[100][options]" class="layui-textarea" style="min-height:20px;padding:0;" placeholder="选项值:选项名"></textarea></td>
                    <td><input type="text" name="config[100][value]" class="layui-input"></td>
                    <td><input type="text" name="config[100][tips]" class="layui-input"></td>
                    <td><a href="javascript:;" class="config-tr-del">删除</a></td>
                </tr> -->
                <tr>
                    <td colspan="8" style="background-color:#f8f8f8">
                        <a class="layui-btn layui-btn-small" id="addConfig">添加配置</a>
                        <span class="layui-word-aux">提示：当配置类型为单选按钮、多选框、下拉框、开关的时候，配置选项为必填，参考格式：选项值:选项名，多个选项请换行。</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="layui-tab-item">
    <fieldset class="layui-elem-field layui-field-title">
      <legend>插件菜单设计</legend>
    </fieldset>
</div>
<div class="layui-form-item">
    <div class="layui-input-block">
        <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit">提交</button>
        <a href="{:url('index')}" class="layui-btn layui-btn-primary ml10"><i class="aicon ai-fanhui"></i>返回</a>
    </div>
</div>
</form>
<script type="text/html" id="configTr">
    <tr class="config-tr">
        <td><input type="text" name="config[{i}][sort]" class="layui-input w50" value="{i}"></td>
        <td><input type="text" name="config[{i}][title]" class="layui-input" lay-verify="required"></td>
        <td><input type="text" name="config[{i}][name]" class="layui-input" lay-verify="required"></td>
        <td>
            <select name="config[{i}][type]" class="field-type" type="select">
            {volist name=":form_type()" id="v"}
                <option value="{$key}">[{$key}]{$v}</option>
            {/volist}
            </select>
        </td>
        <td><textarea name="config[{i}][options]" class="layui-textarea" style="min-height:20px;padding:0;" placeholder="选项值:选项名"></textarea></td>
        <td><input type="text" name="config[{i}][value]" class="layui-input"></td>
        <td><input type="text" name="config[{i}][tips]" class="layui-input"></td>
        <td><a href="javascript:;" class="config-tr-del">删除</a></td>
    </tr>
</script>
<script type="text/javascript">
    layui.use(['jquery', 'form'], function(){
        var $ = layui.jquery, form = layui.form;
        $('#addConfig').click(function(){
            var that = $(this), tpl = $('#configTr').html(), len = $('.config-tr').length;
            that.parents('tr').before(tpl.replace(/{i}/g, len+100));
            form.render();
        });

        $(document).on('click', '.config-tr-del', function(){
            $(this).parents('.config-tr').remove();
        });
    });
</script>
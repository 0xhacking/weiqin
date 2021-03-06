<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="account-list-add-step">
	<ol class="breadcrumb we7-breadcrumb">
		<a href="<?php  echo url('account/manage');?>"><i class="wi wi-back-circle"></i> </a>
		<li><a href="<?php  echo url('account/manage');?>">PC列表</a></li>
		<li>新建PC</li>
	</ol>
	<div class="we7-step">
		<ul>

		</ul>
	</div>
	<?php  if(count($errors) > 0) { ?>
		<?php  if(is_array($errors)) { foreach($errors as $val) { ?>
			<?php  if(is_array($val)) { foreach($val as $mes) { ?>
				<?php  echo $mes;?>
			<?php  } } ?>
		<?php  } } ?>
	<?php  } ?>
	<form action="<?php  echo url('webapp/manage/create')?>" method="post" class="we7-form">
		<!--第二步:基本信息-->
		<div class="form-group">
			<label for="" class="control-label col-sm-2">PC名称</label>
			<div class="form-controls col-sm-8">
				<input type="text" name="name" class="form-control" required autocomplete="off" />
				<span class="help-block">填写PC名称</span>
			</div>
		</div>
		<div class="form-group">
			<label for="" class="control-label col-sm-2">描述</label>
			<div class="form-controls col-sm-8">
				<textarea style="height: 80px;" class="form-control" name="description" required></textarea>
				<span class="help-block">用于说明此PC的功能及用途。</span>
			</div>
		</div>

		<div class="form-group">
			<input type="submit" name="submit" class="btn btn-primary btn-submit" value="提交"/>
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>">
		</div>
	</form>
</div>

<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
<h1>用户视图</h1>
<p>用户列表.</p>

<div id="infoMessage"><?php echo $message;?></div>

<table cellpadding=0 cellspacing=10>
	<tr>
	  <th>用户名</th>
		<th>姓</th>
		<th>名</th>
		<th>Email</th>
		<th>用户组</th>
		<th>状态</th>
		<th>动作</th>
	</tr>
	<?php foreach ($users as $user):?>
		<tr>
		  <td><?php echo $user->username;?></td>
			<td><?php echo $user->first_name;?></td>
			<td><?php echo $user->last_name;?></td>
			<td><?php echo $user->email;?></td>
			<td>
				<?php foreach ($user->groups as $group):?>
					<?php echo anchor("auth/edit_group/".$group->id, $group->name) ;?><br />
                <?php endforeach?>
			</td>
			<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, 'Active') : anchor("auth/activate/". $user->id, 'Inactive');?></td>
			<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
		</tr>
	<?php endforeach;?>
</table>

<p><a href="<?php echo site_url('auth/create_user');?>">新建用户</a> | <a href="<?php echo site_url('auth/create_group');?>">新建用户组</a></p>
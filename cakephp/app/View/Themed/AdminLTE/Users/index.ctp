<?php
/**
* Copyright (C) 2015 Daniel Ziegler <daniel@statusengine.org>
*
* This file is part of Statusengine.
*
* Statusengine is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 2 of the License, or
* (at your option) any later version.
*
* Statusengine is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with Statusengine.  If not, see <http://www.gnu.org/licenses/>.
*/
$this->Paginator->options(['url' => $this->params['named']]);
?>

<section class="content-header hidden-sm hidden-md hidden-lg">
	<h1>
		<i class="fa fa-users"></i>
		<?php echo __('Users'); ?>
	</h1>
</section>

<section class="content">
<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<div class="box-header">
				<div class="col-sm-8 hidden-xs">
					<h3 class="pull-left"><i class="fa fa-users"></i> <?php echo __('Statusengine UI users'); ?></h3>
				</div>

				<div class="col-xs-12 col-sm-4" style="padding-top: 15px;">
					<a href="<?php echo Router::url(['action' => 'add']); ?>" class="btn btn-default">
						<i class="fa fa-plus"></i> <?php echo __('Create user');?>
					</a>
				</div>
			</div>
			<div class="box-body">

				<div class="row">
					<div class="col-sm-2 hidden-xs"><?php echo $this->Paginator->sort('User.name', __('Username')); ?></div>
					<div class="col-sm-10 hidden-xs"><i class="fa fa-pencil"></i></div>
				</div>

				<?php foreach($users as $key => $user): ?>
					<div class="row <?php echo ($key % 2 == 0)?'row-bg':'row-default'; ?>">
						<div class="col-xs-11 col-sm-2">
							<?php echo h($user['User']['username']);?>
						</div>
						<div class="col-xs-1 col-sm-10">
							<a href="<?php echo Router::url(['action' => 'edit', $user['User']['id']]); ?>">
								<i class="fa fa-pencil"></i>
							</a>
						</div>
						<div class="col-xs-12 hidden-sm hidden-md hidden-lg">
							&nbsp;
						</div>
					</div>
				<?php endforeach; ?>

				<?php echo $this->element('paginator'); ?>
			</div>
		</div>
	</div>
</div>
</section>

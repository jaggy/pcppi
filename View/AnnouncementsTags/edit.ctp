<div class="announcementsTags form">
<?php echo $this->Form->create('AnnouncementsTag');?>
	<fieldset>
		<legend><?php echo __('Edit Announcements Tag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('announcement_id');
		echo $this->Form->input('tag_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AnnouncementsTag.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AnnouncementsTag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Announcements Tags'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Announcements'), array('controller' => 'announcements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Announcement'), array('controller' => 'announcements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>

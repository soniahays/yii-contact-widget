<?php
/* @var $this ContactController */

?>
<h1>My Contacts</h1>
<?php

$this->widget('bootstrap.widgets.TbGridView', array(
		'itemsCssClass'=>'table table-striped table-bordered table-condensed',
		'dataProvider'=> $dataProvider,
		'columns'=>array(
			array(
				'class' => 'editable.EditableColumn',
				'name' => 'id',
				'editable' => array(
					'url'        => $this->createUrl('contact/update'),
					'placement'  => 'right',
					'inputclass' => 'span3',
				)
			),
			array(
				'class' => 'editable.EditableColumn',
				'name' => 'firstName',
				'editable' => array(
					'url'        => $this->createUrl('contact/update'),
					'placement'  => 'right',
					'inputclass' => 'span3',
				)
			),
			array(
				'class' => 'editable.EditableColumn',
				'name' => 'lastName',
				'editable' => array(
					'url'        => $this->createUrl('contact/update'),
					'placement'  => 'right',
					'inputclass' => 'span3',
				)
			),
			array(
				'class' => 'editable.EditableColumn',
				'name' => 'jobTitle',
				'editable' => array(
					'url'        => $this->createUrl('contact/update'),
					'placement'  => 'right',
					'inputclass' => 'span3',
				)
			),
			array(
				'class' => 'editable.EditableColumn',
				'name' => 'phoneNumber',
				'editable' => array(
					'url'        => $this->createUrl('contact/update'),
					'placement'  => 'right',
					'inputclass' => 'span3',
				)
			),
		),
	));


?>



<?php
if ($success) {
	$content = $this->Js->link(__('Open', true),
			array('action' => 'open', 'field' => $field, 'id' => $id),
			array('update' => "#temp_update")
	);
	echo $this->Html->scriptBlock ("jQuery('#$id').html('$content')");
} else {
	$field = Configure::read('ui.field');
	echo $this->Html->scriptBlock ("alert('Failed to close $field \'$name\'.')");
}

// Output the event handler code for the links
echo $this->Js->writeBuffer();
?>

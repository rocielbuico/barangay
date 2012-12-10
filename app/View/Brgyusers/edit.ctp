<H1>Edit User</H1>
<?php
echo $form->create('Brgyuser', array('action' => 'edit'));
echo $form->input('username');
echo $form->input('fname');
echo $form->input('mname');
echo $form->input('lname');
echo $form->input('dtcreated');
echo $form->input('dtlstlogn');

echo $form->end('Update User');
?>
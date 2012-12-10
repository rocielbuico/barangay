<H1>Add User</H1>
<?php
echo $form->create('Brgyuser');
echo $form->input('username');
echo $form->input('fname');
echo $form->input('mname');
echo $form->input('lname');
echo $form->input('dtcreated');
echo $form->input('dtlstlogn');
echo $form->end('Save User');
?>
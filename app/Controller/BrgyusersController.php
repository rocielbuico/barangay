<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class BrgyusersController extends AppController {
    var $name = 'Brgyusers';
    var $layout = 'default';
    
    function index() {
        $this->set('brgyusers',$this->Brgyuser->find('all'));
        $this->set('title_for_layout','Barangay users');
        $this->loadModel('Brgyuser');
    }

    function add() {
        $this->loadModel('Brgyuser');

        if (!empty ($this->data)) {
            if ($this->Brgyuser->save($this->data)) {
                $this->Session->setFlash('user has been created!');
                $this->redirect(array('action'=>'index'));
            }
        }
    }

    function view($id = null) {
        $this->loadModel('Brgyuser');
        $this->set('brgyusers',$this->Brgyuser->find('all'));
        $this->set('brgyid',$id);
        
    }

    function edit($id = null) {
        $this->Brgyuser->id = $id;
        $this->loadModel('Brgyuser');
        if (empty($this->data)) {
            $this->data = $this->Brgyuser->read();
        } else {
            if ($this->Brgyuser->save($this->data)) {
                $this->Session->setFlash('user has been updated!');
                $this->redirect(array('action'=>'index'));
            }
        }
    }

    function delete($id) {
        $this->Brgyuser->delete($id);
        $this->Session->setFlash('user has been deleted');
        $this->redirect(array('action'=>'index'));
    }
}
?>

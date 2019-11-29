<?php

namespace SONUser\Form;

use Zend\Form\Form;

class User  extends Form
{

    public function __construct($name = null, $options = array()) {
        parent::__construct('user', $options);
        
        $this->setInputFilter(new UserFilter());
        $this->setAttribute('method', 'post');
        
        $id = new \Zend\Form\Element\Hidden('id');
        $this->add($id);
        
        $nome = new \Zend\Form\Element\Text("nome");
        $nome->setLabel("Nome: ")
                ->setAttribute('placeholder','Entre com o nome');
        $this->add($nome);
       
        $email = new \Zend\Form\Element\Text("email");
        $email->setLabel("Email: ")
                ->setAttribute('placeholder','Entre com o Email');
        $this->add($email);
        
        $this->add(array(
            'name' => 'submit',
            'type'=>'Zend\Form\Element\Submit',
            'attributes' => array(
                'value'=>'Salvar',
                'class' => 'btn-success'
            )
        ));
                
       
    }
    
}

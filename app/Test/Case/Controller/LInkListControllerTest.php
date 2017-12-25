<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once CAKE_CORE_INCLUDE_PATH . DS . 'CAKE' . DS . 'TestSuite' . DS . 'ControllerTestCase.php';

class LinkListControllerTest extends ControllerTestCase {

    public function testIndex() {
        $this->testAction('/linklist/');
        $this->assertTextContains('LinkList/index.ctp', $this->view);
    }

}

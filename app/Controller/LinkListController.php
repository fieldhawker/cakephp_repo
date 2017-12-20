<?php

/**
 * リンク一覧画面
 *
 * This file will render views from views/linklist/
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */
App::uses('AppController', 'Controller');

/**
 * リンク一覧画面
 *
 * @package       app.Controller
 */
class LinkListController extends AppController {

    /**
     * 
     *
     * @var array
     */
    public $uses = array();

    /**
     * 初期表示
     *
     * @return void
     */
    public function index() {
        return $this->render();
    }

}

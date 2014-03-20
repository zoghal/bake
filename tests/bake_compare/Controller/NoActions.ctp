<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BakeArticles Controller
 *
 * @property App\Model\Table\BakeArticlesTable $BakeArticles
 * @property CsrfComponent $Csrf
 * @property AuthComponent $Auth
 * @property PaginatorComponent $Paginator
 */
class BakeArticlesController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = ['Html', 'Time', 'Form'];

/**
 * Components
 *
 * @var array
 */
	public $components = ['Csrf', 'Auth', 'Paginator'];

}

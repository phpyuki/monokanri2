<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 *
 * @method \App\Model\Entity\Category[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Items');
        $this->loadModel('Spaces');
    }

    public function index($id = null)
    {
        $this->paginate = [
            'contain' => ['Users', 'Spaces', 'ParentCategories'],
        ];
        $categories = $this->paginate($this->Categories);


        $this->set(compact('categories'));
    }

    public function list($spaceId = null, $categoryId = null)
    {
        if (!empty($categoryId)) {
            $currentPlace = $this->Categories->get($categoryId);
            $categories = $this->Categories->find()->where(['parent_id' => $categoryId])->contain(['ChildCategories']);
            $items = $this->Items->find()->where(['category_id' => $categoryId]);
        } else {
            $currentPlace = $this->Spaces->get($spaceId);
            $categories = $this->Categories->find()->where(['space_id' => $spaceId,'parent_id IS' => NULL])->contain(['ChildCategories','items']);
            $items = $this->Items->find()->where(['space_id' => $spaceId]);
        }
        $this->set(compact('currentPlace', 'categories', 'items'));
    }

    /**
     * View method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => ['Users', 'Spaces', 'ParentCategories', 'ChildCategories', 'Items'],
        ]);

        $this->set('category', $category);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($spaceId = null, $categoryId = null)
    {
        $category = $this->Categories->newEntity();
        if ($this->request->is('post')) {
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category could not be saved. Please, try again.'));
        }
        $users = $this->Categories->Users->find('list', ['limit' => 200]);
        $spaces = $this->Categories->Spaces->get($spaceId);
        $parentCategories = $this->Categories->find()->where(['id' => $categoryId])->first();
        $this->set(compact('category', 'users', 'spaces', 'parentCategories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category could not be saved. Please, try again.'));
        }
        $users = $this->Categories->Users->find('list', ['limit' => 200]);
        $spaces = $this->Categories->Spaces->find('list', ['limit' => 200]);
        $parentCategories = $this->Categories->ParentCategories->find('list', ['limit' => 200]);
        $this->set(compact('category', 'users', 'spaces', 'parentCategories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $category = $this->Categories->get($id);
        if ($this->Categories->delete($category)) {
            $this->Flash->success(__('The category has been deleted.'));
        } else {
            $this->Flash->error(__('The category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

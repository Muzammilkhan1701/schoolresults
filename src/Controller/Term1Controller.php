<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Term1 Controller
 *
 * @property \App\Model\Table\Term1Table $Term1
 */
class Term1Controller extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Term1->find()
            ->contain(['Students']);
        $term1 = $this->paginate($query);

        $this->set(compact('term1'));
    }

    /**
     * View method
     *
     * @param string|null $id Term1 id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $term1 = $this->Term1->get($id, contain: ['Students']);
        $this->set(compact('term1'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $term1 = $this->Term1->newEmptyEntity();
        if ($this->request->is('post')) {
            $term1 = $this->Term1->patchEntity($term1, $this->request->getData());
            
            // Calculate total and percentage
            $term1->total = $term1->English + $term1->Hindi + $term1->Marathi + $term1->Maths + $term1->EVS;
            $term1->percentage = $term1->total / 5; // Assuming total marks for each subject is 100
            
            if ($this->Term1->save($term1)) {
                $this->Flash->success(__('The term1 marks have been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add the term1 marks.'));
        }
        $students = $this->Term1->Students->find('list', ['limit' => 200]);
        $this->set(compact('term1', 'students'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Term1 id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $term1 = $this->Term1->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $term1 = $this->Term1->patchEntity($term1, $this->request->getData());
            if ($this->Term1->save($term1)) {
                $this->Flash->success(__('The term1 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The term1 could not be saved. Please, try again.'));
        }
        $students = $this->Term1->Students->find('list', limit: 200)->all();
        $this->set(compact('term1', 'students'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Term1 id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $term1 = $this->Term1->get($id);
        if ($this->Term1->delete($term1)) {
            $this->Flash->success(__('The term1 has been deleted.'));
        } else {
            $this->Flash->error(__('The term1 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

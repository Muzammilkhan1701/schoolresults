<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Finalresults Controller
 *
 * @property \App\Model\Table\FinalresultsTable $Finalresults
 */
class FinalresultsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    
    public function index()
{
    $this->paginate = [
        'contain' => ['Students'], // Ensure this is correctly fetching associated data
    ];
    $finalResults = $this->paginate($this->Finalresults);

    $this->set(compact('finalResults'));
}


    /**
     * View method
     *
     * @param string|null $id Finalresult id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $finalresult = $this->Finalresults->get($id, contain: ['Students']);
        $this->set(compact('finalresult'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $finalResult = $this->Finalresults->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();

            if (!isset($data['student_id']) || empty($data['student_id'])) {
                $this->Flash->error(__('Student ID is required.'));
            } else {
                // Fetch term1 and term2 totals
                $term1 = $this->Finalresults->Term1->find()
                    ->where(['student_id' => $data['student_id']])
                    ->first();
                
                $term2 = $this->Finalresults->Term2->find()
                    ->where(['student_id' => $data['student_id']])
                    ->first();
                
                // Check if both term1 and term2 results are available
                if ($term1 && $term2) {
                    $finalResult = $this->Finalresults->patchEntity($finalResult, $data);
                    $finalResult->term1_total = $term1->total;
                    $finalResult->term2_total = $term2->total;
                    $finalResult->final_total = $finalResult->term1_total + $finalResult->term2_total;
                    $finalResult->final_percentage = $finalResult->final_total / 2; // Assuming average percentage

                    if ($this->Finalresults->save($finalResult)) {
                        $this->Flash->success(__('The final result has been saved.'));
                        return $this->redirect(['action' => 'index']);
                    } else {
                        // Add debug statements to check for save errors
                        debug($finalResult->getErrors());
                        $this->Flash->error(__('Unable to add the final result.'));
                    }
                } else {
                    $this->Flash->error(__('Term1 or Term2 results not found for the student.'));
                }
            }
        }
        
        $students = $this->Finalresults->Students->find('list', ['limit' => 200]);
        $this->set(compact('finalResult', 'students'));
    }
    /**
     * Edit method
     *
     * @param string|null $id Finalresult id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $finalresult = $this->Finalresults->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $finalresult = $this->Finalresults->patchEntity($finalresult, $this->request->getData());
            if ($this->Finalresults->save($finalresult)) {
                $this->Flash->success(__('The finalresult has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The finalresult could not be saved. Please, try again.'));
        }
        $students = $this->Finalresults->Students->find('list', limit: 200)->all();
        $this->set(compact('finalresult', 'students'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Finalresult id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $finalresult = $this->Finalresults->get($id);
        if ($this->Finalresults->delete($finalresult)) {
            $this->Flash->success(__('The finalresult has been deleted.'));
        } else {
            $this->Flash->error(__('The finalresult could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

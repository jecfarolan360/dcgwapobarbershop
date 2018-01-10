<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CashierCashAdvance Controller
 *
 * @property \App\Model\Table\CashierCashAdvanceTable $CashierCashAdvance
 *
 * @method \App\Model\Entity\CashierCashAdvance[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CashierCashAdvanceController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employee']
        ];
        $cashierCashAdvance = $this->paginate($this->CashierCashAdvance);

        $this->set(compact('cashierCashAdvance'));
    }

    /**
     * View method
     *
     * @param string|null $id Cashier Cash Advance id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cashierCashAdvance = $this->CashierCashAdvance->get($id, [
            'contain' => ['Employee']
        ]);

        $this->set('cashierCashAdvance', $cashierCashAdvance);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cashierCashAdvance = $this->CashierCashAdvance->newEntity();
        if ($this->request->is('post')) {
            $cashierCashAdvance = $this->CashierCashAdvance->patchEntity($cashierCashAdvance, $this->request->getData());
            if ($this->CashierCashAdvance->save($cashierCashAdvance)) {
                $this->Flash->success(__('The cashier cash advance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cashier cash advance could not be saved. Please, try again.'));
        }
        $employee = $this->CashierCashAdvance->Employee->find('list', ['limit' => 200]);
        $this->set(compact('cashierCashAdvance', 'employee'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cashier Cash Advance id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cashierCashAdvance = $this->CashierCashAdvance->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cashierCashAdvance = $this->CashierCashAdvance->patchEntity($cashierCashAdvance, $this->request->getData());
            if ($this->CashierCashAdvance->save($cashierCashAdvance)) {
                $this->Flash->success(__('The cashier cash advance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cashier cash advance could not be saved. Please, try again.'));
        }
        $employee = $this->CashierCashAdvance->Employee->find('list', ['limit' => 200]);
        $this->set(compact('cashierCashAdvance', 'employee'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cashier Cash Advance id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cashierCashAdvance = $this->CashierCashAdvance->get($id);
        if ($this->CashierCashAdvance->delete($cashierCashAdvance)) {
            $this->Flash->success(__('The cashier cash advance has been deleted.'));
        } else {
            $this->Flash->error(__('The cashier cash advance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

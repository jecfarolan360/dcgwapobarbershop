<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CashAdvancePayment Controller
 *
 * @property \App\Model\Table\CashAdvancePaymentTable $CashAdvancePayment
 *
 * @method \App\Model\Entity\CashAdvancePayment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CashAdvancePaymentController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CashierCashAdvance']
        ];
        $cashAdvancePayment = $this->paginate($this->CashAdvancePayment);

        $this->set(compact('cashAdvancePayment'));
    }

    /**
     * View method
     *
     * @param string|null $id Cash Advance Payment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cashAdvancePayment = $this->CashAdvancePayment->get($id, [
            'contain' => ['CashierCashAdvance']
        ]);

        $this->set('cashAdvancePayment', $cashAdvancePayment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cashAdvancePayment = $this->CashAdvancePayment->newEntity();
        if ($this->request->is('post')) {
            $cashAdvancePayment = $this->CashAdvancePayment->patchEntity($cashAdvancePayment, $this->request->getData());
            if ($this->CashAdvancePayment->save($cashAdvancePayment)) {
                $this->Flash->success(__('The cash advance payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cash advance payment could not be saved. Please, try again.'));
        }
        $cashierCashAdvance = $this->CashAdvancePayment->CashierCashAdvance->find('list', ['limit' => 200]);
        $this->set(compact('cashAdvancePayment', 'cashierCashAdvance'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cash Advance Payment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cashAdvancePayment = $this->CashAdvancePayment->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cashAdvancePayment = $this->CashAdvancePayment->patchEntity($cashAdvancePayment, $this->request->getData());
            if ($this->CashAdvancePayment->save($cashAdvancePayment)) {
                $this->Flash->success(__('The cash advance payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cash advance payment could not be saved. Please, try again.'));
        }
        $cashierCashAdvance = $this->CashAdvancePayment->CashierCashAdvance->find('list', ['limit' => 200]);
        $this->set(compact('cashAdvancePayment', 'cashierCashAdvance'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cash Advance Payment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cashAdvancePayment = $this->CashAdvancePayment->get($id);
        if ($this->CashAdvancePayment->delete($cashAdvancePayment)) {
            $this->Flash->success(__('The cash advance payment has been deleted.'));
        } else {
            $this->Flash->error(__('The cash advance payment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

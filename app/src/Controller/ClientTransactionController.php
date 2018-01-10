<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

/**
 * ClientTransaction Controller
 *
 * @property \App\Model\Table\ClientTransactionTable $ClientTransaction
 *
 * @method \App\Model\Entity\ClientTransaction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientTransactionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients']
        ];
        $clientTransaction = $this->paginate($this->ClientTransaction);

        $this->set(compact('clientTransaction'));
    }

    /**
     * View method
     *
     * @param string|null $id Client Transaction id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientTransaction = $this->ClientTransaction->get($id, [
            'contain' => ['Clients', 'Payment', 'ServiceDetail']
        ]);

        $this->set('clientTransaction', $clientTransaction);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientTransaction = $this->ClientTransaction->newEntity();
        if ($this->request->is('post')) {
            $clientTransaction = $this->ClientTransaction->patchEntity($clientTransaction, $this->request->getData());
            if ($this->ClientTransaction->save($clientTransaction)) {
                $this->Flash->success(__('The client transaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client transaction could not be saved. Please, try again.'));
        }
        $clients = $this->ClientTransaction->Clients->find('list', ['limit' => 200]);
        $this->set(compact('clientTransaction', 'clients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Transaction id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientTransaction = $this->ClientTransaction->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientTransaction = $this->ClientTransaction->patchEntity($clientTransaction, $this->request->getData());
            if ($this->ClientTransaction->save($clientTransaction)) {
                $this->Flash->success(__('The client transaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client transaction could not be saved. Please, try again.'));
        }
        $clients = $this->ClientTransaction->Clients->find('list', ['limit' => 200]);
        $this->set(compact('clientTransaction', 'clients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Transaction id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientTransaction = $this->ClientTransaction->get($id);
        if ($this->ClientTransaction->delete($clientTransaction)) {
            $this->Flash->success(__('The client transaction has been deleted.'));
        } else {
            $this->Flash->error(__('The client transaction could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

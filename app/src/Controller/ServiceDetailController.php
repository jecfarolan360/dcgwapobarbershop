<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ServiceDetail Controller
 *
 * @property \App\Model\Table\ServiceDetailTable $ServiceDetail
 *
 * @method \App\Model\Entity\ServiceDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServiceDetailController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Service', 'Employee', 'ClientTransaction']
        ];
        $serviceDetail = $this->paginate($this->ServiceDetail);

        $this->set(compact('serviceDetail'));
    }

    /**
     * View method
     *
     * @param string|null $id Service Detail id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $serviceDetail = $this->ServiceDetail->get($id, [
            'contain' => ['Service', 'Employee', 'ClientTransaction']
        ]);

        $this->set('serviceDetail', $serviceDetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $serviceDetail = $this->ServiceDetail->newEntity();
        if ($this->request->is('post')) {
            $serviceDetail = $this->ServiceDetail->patchEntity($serviceDetail, $this->request->getData());
            if ($this->ServiceDetail->save($serviceDetail)) {
                $this->Flash->success(__('The service detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service detail could not be saved. Please, try again.'));
        }
        $service = $this->ServiceDetail->Service->find('list', ['limit' => 200]);
        $employee = $this->ServiceDetail->Employee->find('list', ['limit' => 200]);
        $clientTransaction = $this->ServiceDetail->ClientTransaction->find('list', ['limit' => 200]);
        $this->set(compact('serviceDetail', 'service', 'employee', 'clientTransaction'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Service Detail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $serviceDetail = $this->ServiceDetail->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $serviceDetail = $this->ServiceDetail->patchEntity($serviceDetail, $this->request->getData());
            if ($this->ServiceDetail->save($serviceDetail)) {
                $this->Flash->success(__('The service detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service detail could not be saved. Please, try again.'));
        }
        $service = $this->ServiceDetail->Service->find('list', ['limit' => 200]);
        $employee = $this->ServiceDetail->Employee->find('list', ['limit' => 200]);
        $clientTransaction = $this->ServiceDetail->ClientTransaction->find('list', ['limit' => 200]);
        $this->set(compact('serviceDetail', 'service', 'employee', 'clientTransaction'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Service Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $serviceDetail = $this->ServiceDetail->get($id);
        if ($this->ServiceDetail->delete($serviceDetail)) {
            $this->Flash->success(__('The service detail has been deleted.'));
        } else {
            $this->Flash->error(__('The service detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

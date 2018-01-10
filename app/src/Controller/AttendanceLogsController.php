<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AttendanceLogs Controller
 *
 * @property \App\Model\Table\AttendanceLogsTable $AttendanceLogs
 *
 * @method \App\Model\Entity\AttendanceLog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AttendanceLogsController extends AppController
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
        $attendanceLogs = $this->paginate($this->AttendanceLogs);

        $this->set(compact('attendanceLogs'));
    }

    /**
     * View method
     *
     * @param string|null $id Attendance Log id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $attendanceLog = $this->AttendanceLogs->get($id, [
            'contain' => ['Employee']
        ]);

        $this->set('attendanceLog', $attendanceLog);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $attendanceLog = $this->AttendanceLogs->newEntity();
        if ($this->request->is('post')) {
            $attendanceLog = $this->AttendanceLogs->patchEntity($attendanceLog, $this->request->getData());
            if ($this->AttendanceLogs->save($attendanceLog)) {
                $this->Flash->success(__('The attendance log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attendance log could not be saved. Please, try again.'));
        }
        $employee = $this->AttendanceLogs->Employee->find('list', ['limit' => 200]);
        $this->set(compact('attendanceLog', 'employee'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Attendance Log id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $attendanceLog = $this->AttendanceLogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $attendanceLog = $this->AttendanceLogs->patchEntity($attendanceLog, $this->request->getData());
            if ($this->AttendanceLogs->save($attendanceLog)) {
                $this->Flash->success(__('The attendance log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attendance log could not be saved. Please, try again.'));
        }
        $employee = $this->AttendanceLogs->Employee->find('list', ['limit' => 200]);
        $this->set(compact('attendanceLog', 'employee'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Attendance Log id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $attendanceLog = $this->AttendanceLogs->get($id);
        if ($this->AttendanceLogs->delete($attendanceLog)) {
            $this->Flash->success(__('The attendance log has been deleted.'));
        } else {
            $this->Flash->error(__('The attendance log could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

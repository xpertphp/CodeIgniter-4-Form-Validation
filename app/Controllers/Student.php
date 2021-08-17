<?php 

namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\StudentModel;
 
class Student extends Controller
{
 
	public function __construct()
    {
        helper(['form', 'url']);
    }
    public function index()
    {    
        return view('add');
    }    
 
    public function store()
    {  
		$inputs = $this->validate([
            'txtFname' => 'required',
            'txtLname' => 'required',
            'txtEmail' => 'required|valid_email',
            'txtMobile' => 'required|min_length[10]|numeric',
            'txtAddress' => 'required'
        ]);

        if (!$inputs) {
            return view('add', [
                'validation' => $this->validator
            ]);
        }else{
					
			$data = [
				'first_name' => $this->request->getVar('txtFname'),
				'last_name'  => $this->request->getVar('txtLname'),
				'email'  => $this->request->getVar('txtEmail'),
				'mobile'  => $this->request->getVar('txtMobile'),
				'address'  => $this->request->getVar('txtAddress'),
			];
				
			$model = new StudentModel(); 		
			$save = $model->insert($data);
			return redirect()->to( base_url('student') );
		}
		
    }
 
}

?>
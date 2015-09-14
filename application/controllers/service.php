<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	public function acquisation_merger(){
		$this->load->view('acquisation_merger');
	}
	
	public function bookkeeping_accounting(){
		$this->load->view('bookkeeping_accounting');
	}
	
	public function budgeting(){
		$this->load->view('budgeting');
	}

	public function charitable_trusts(){
		$this->load->view('charitable_trusts');
	}

	public function company_secretary(){
		$this->load->view('company_secretary');
	}

	public function contact_us(){
		$this->load->view('contact_us');
	}

	public function estate_planning(){
		$this->load->view('estate_planning');
	}

	public function farm_accounting(){
		$this->load->view('farm_accounting');
	}

	public function financing(){
		$this->load->view('financing');
	}

	public function incometax_vat(){
		$this->load->view('incometax_vat');
	}

	public function insolvency(){
		$this->load->view('insolvency');
	}

	public function interest(){
		$this->load->view('interest');
	}

	public function management_consulting(){
		$this->load->view('management_consulting');
	}

	public function office_duties(){
		$this->load->view('office_duties');
	}
	
	public function payroll_services(){
		$this->load->view('payroll_services');
	}

	public function portfolio_management(){
		$this->load->view('portfolio_management');
	}

	public function rental_property(){
		$this->load->view('rental_property');
	}

	public function retirement_planning(){
		$this->load->view('retirement_planning');
	}

	public function risk_management(){
		$this->load->view('risk_management');
	}


	public function selling_business(){
		$this->load->view('selling_business');
	}

	public function sidebar_left(){
		$this->load->view('sidebar-left');
	}

	public function software_solutions(){
		$this->load->view('software_solutions');
	}

	public function startup(){
		$this->load->view('startup');
	}

	public function strategic_planning(){
		$this->load->view('strategic_planning');
	}

	public function succession_planning(){
		$this->load->view('succession_planning');
	}
	
	public function taxation(){
		$this->load->view('taxation');
	}
	public function telephone(){
		$this->load->view('telephone');
	}
	public function trusts(){
		$this->load->view('trusts');
	}
	public function vat(){
		$this->load->view('vat');
	}
}
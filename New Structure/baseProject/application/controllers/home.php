<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	public function Home(){
		parent::__construct();
	}
	//getApiData(api_url, auth_key, parameter(array))
	public function index()
	{
		if(isset($_POST['submit'])){
			$parameters = [
				'type' => 'send_premium_page_enquiry',
				'business_id' => BUSINESSID,
				'name' => $_POST['name'],
				'email' => $_POST['email'],
				'mobile_number' => $_POST['mobile'],
				'enquery' => $_POST['message']
			];
			$data['send'] = getApiData(INQUIRY_API_URL, AUTH_KEY, $parameters);
		}
		$data['gallery'] = getApiData(GALLARY_API_URL, AUTH_KEY, ['business_id'=>BUSINESSID,'offset'=>0,'limit'=>50]);
		$businessData = getApiData(BUSINESS_DETAILS, AUTH_KEY, ['options' =>['business_id'=>BUSINESSID]]);
		$data['testimonialsData'] = getApiData(INQUIRY_API_URL, AUTH_KEY, ['business_id'=>BUSINESSID,'type'=>'business_testimonial']);
		$data['businessData'] = $businessData->data;
		$this->load->view('home',$data);
	}
}
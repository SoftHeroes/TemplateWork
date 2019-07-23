<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Query_model extends CI_Model {

	function Query_model()
	{
		//header('Content-Type: text/html; charset=utf-8');
		//date_default_timezone_set('America/Chicago');
		//date_default_timezone_set('UTC');
		//define("DATETIME", date('Y-m-d H:i:s')); //DEFINE DATETIME GLOBAL
		//define("DATE", date('Y-m-d')); //DEFINE DATETIME GLOBAL
		//ini_set('memory_limit', '512M'); //-1 unlimited
		//$this->certificate_path = APPPATH . "/libraries/apns/apns-cert.pem"; // production only
		//$this->apns_host = 'ssl://gateway.push.apple.com:2195'; // production only
	}
	public function rawQuery($sql) {
		$this->db->query($sql);
		return true;
	}

	public function select_limit($table, $limit, $start)
	{
		$this->db->limit($limit, $start);
		$result = $this->db->get($table);
		return $result->result_array();
	}
	
	public function selectRawQyeryRecord($query)
	{
		$result = $this->db->query($query);
		return $result->result_array();
	}

	public function rawSelectQuery($sql) {
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function singlerawSelectQuery($sql) {
		$result = $this->db->query($sql);
		return $result->row_array();
	}
	
	public function select_where_limit($table,$where, $limit, $start)
	{
		$this->db->limit($limit, $start);
		$result = $this->db->get_where($table,$where);
		return $result->result_array();
	}
	public function increment($table,$where,$what) {
		$this->db->where($where);
		$this->db->set($what, $what.'+ 1', FALSE);
		$this->db->update($table);
		return true;
	}
	public function upload($tbl,$a)
	{
		$this->db->insert($tbl,$a);
        return;
	}
	public function num_row_all($table)
	{
		$result = $this->db->get($table);
		return $result->num_rows();
	}
	public function sum_where($table,$field,$where)
	{
		$this->db->where($where);
		$this->db->select_sum($field);
		$result = $this->db->get($table);
		return $result->result_array();
	}
	public function sum_where_sngle($table,$where)
	{
		$result = $this->db->get_where($table,$where);
		$data=$result->result_array();
		return $data[0];
	}
	public function sum_with_between($table,$field,$where,$field_between,$start_date,$end_date)
	{
		$this->db->from($table);
		$this->db->where($where);
		$this->db->where($field_between.' >=', $start_date);
		$this->db->where($field_between.' <=', $end_date);
		$this->db->select_sum($field);
		$result = $this->db->get();
		return $result->result_array();
	}

	public function group_by_where($table,$where){
		$this->db->from($table);
		$this->db->where($where);
		$this->db->group_by('user_id');
		$result = $this->db->get();
		return $result->num_rows();
	}
	public function group_by_where_result($table,$where){
		$this->db->from($table);
		$this->db->where($where);
		$this->db->group_by('user_id');
		$result = $this->db->get();
		return $result->result_array();
	}
	public function group_by_where_with_field($table,$field){
		$this->db->from($table);
		$this->db->group_by($field);
		$result = $this->db->get();
		return $result->result_array();
	}
    public function group_by_where_with_field_result($table,$where,$field){
        $this->db->from($table);
        $this->db->where($where);
        $this->db->group_by($field);
        $result = $this->db->get();
        return $result->result_array();
    }
	public function sum($table,$field)
	{
		$this->db->select_sum($field);
		$result = $this->db->get($table);
		return $result->result_array();
	}
	public function num_row($table,$where)
	{
		$result = $this->db->get_where($table,$where);
		return $result->num_rows();
	}
	public function num_row_with_between($table,$where,$field_between,$start_date,$end_date)
	{
		$this->db->from($table);
		$this->db->where($where);
		$this->db->where($field_between.' >=', $start_date);
		$this->db->where($field_between.' <=', $end_date);
		$this->db->group_by('user_id');
		$result = $this->db->get();
		return $result->num_rows();
	}
	public function select_with_between_result($table,$where,$field_between,$start_date,$end_date)
	{
		$this->db->from($table);
		$this->db->where($where);
		$this->db->where($field_between.' >=', $start_date);
		$this->db->where($field_between.' <=', $end_date);
		$this->db->group_by('user_id');
		$result = $this->db->get();
		return $result->result_array();
	}

	public function select_all($table)
	{
		$result = $this->db->get($table);
		return $result->result_array();
	}

	public function select_distinct($table)
	{
		$this->db->distinct();
		$this->db->select('app_id');
		$result = $this->db->get($table);
		return $result->result_array();
	}

	public function select_where_row($table,$where)
	{
		$this->db->where($where);
		$result = $this->db->get($table);
		return $result->row_array();
	}

	public function SelectAllOrderBy($table,$key,$order_by)
	{
		$this->db->order_by($key,$order_by);
		$result = $this->db->get($table);
		return $result->result_array();
	}

	public function select_where($table,$where)
{
    $result = $this->db->get_where($table,$where);
    return $result->result_array();
}
	public function select_where_filter($table,$where,$key,$order_by)
	{
		$this->db->order_by($key,$order_by);
		$result = $this->db->get_where($table,$where);
		return $result->result_array();
	}
	public function ins($table,$where)

	{

		if($this->db->insert($table,$where))
		{

			return $this->db->insert_id();

		}

		else

		{

			return false;

		}

	}

	public function updt($table,$what,$where)

	{

		$this->db->where($where);

		$this->db->update($table,$what);

	}

	public function dlt($table,$where)

	{

		$this->db->delete($table,$where);	

	}

	public function dlt_tbl($table)
	{
		if( $this->db->table_exists($table) ){
			$query = "DROP TABLE $table;";
			$this->db->query($query);
		}
	}

	function JoinTwoTable($from,$to,$where,$key,$typ)

	{

		$this->db->select('*');

		$this->db->where($where);

		$this->db->from($from);

		$this->db->join($to,$to.$key=$from.$key,$typ);		

		$result=$this->db->get();

		return $result->result_array();

	}

	function send_push($deviceToken,$message)
	{
		if(strlen($deviceToken) == 64) // iOS
		{
			//echo $deviceToken;
			//exit;
			include('apns/class_APNS.php');
			//echo "hi";
			//exit;
			$passphrase = '123456';

			$ctx = stream_context_create();

			stream_context_set_option($ctx, 'ssl', 'local_cert', 'apns/apns-dev.pem');

			stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);



			$fp = stream_socket_client(
					'ssl://gateway.sandbox.push.apple.com:2195', $err,
					$errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);



			$body['aps'] = array(

					'alert' => $message,

					'push' => "1",

					'sound' => 'newMessage.wav'

			);



			$payload = json_encode($body);

			$msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;

			$result = fwrite($fp, $msg, strlen($msg));

			fclose($fp);


		}
		else // ANDROID
		{
			//$api_key = "AIzaSyDyLq2WEJPoKRjXfNwbD-bbprwAriWH4jQ";
			//$api_key = "AIzaSyBa4p4EQ5wyHfbCeJVZUyQi7TzHcZPpXcI";
			$api_key = "AIzaSyA2mcF8C8SmLz4-VPIkjVXuEhlxSNNb9Mg";
			//$api_key = "AIzaSyB4TokE2mUDKbURS3ReeW5K457JtPC59qY";
			$registrationIDs = array($deviceToken);

			$url = 'https://android.googleapis.com/gcm/send';

			$fields = array(

					'registration_ids'  => $registrationIDs,

					'data'              => array( "message" => $message,'push' => "2",'sound' => 'default'),

			);



			$headers = array(

					'Authorization: key=' . $api_key,

					'Content-Type: application/json');



			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, $url);

			curl_setopt( $ch, CURLOPT_POST, true );

			curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);

			curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

			curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );

			$result = curl_exec($ch);

			curl_close($ch);

		}
	}
	function send_mail($email,$subject,$msg){

		require_once 'PHPMailer/PHPMailerAutoload.php';
//		echo "hi";exit;
		$mail = new PHPMailer;
		// Set PHPMailer to use the sendmail transport
		$mail->isSendmail();
		//Set who the message is to be sent from
		$mail->setFrom("info@vasundharavision.com", "Woofr");
		//Set an alternative reply-to address
		$mail->addReplyTo("info@vasundharavision.com", "Woofr");
		//Set who the message is to be sent to
		$mail->addAddress($email);

		$mail->Subject = $subject;
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body

		$mail->msgHTML($msg, dirname(__FILE__));
		//Replace the plain text body with one created manually
		$mail->AltBody = 'This is a plain-text message body';
		//Attach an image file
		//$mail->addAttachment('images/phpmailer_mini.png');
		if($mail->send()){
			return true;
		}else{
			return false;
		}
	}
	function send_mail_with($email,$subject,$msg,$title){

		require_once 'PHPMailer/PHPMailerAutoload.php';
//		echo "hi";exit;
		$mail = new PHPMailer;
		// Set PHPMailer to use the sendmail transport
		$mail->isSendmail();
		//Set who the message is to be sent from
		$mail->setFrom("info@vasundharavision.com", $title);
		//Set an alternative reply-to address
		$mail->addReplyTo("info@vasundharavision.com", $title);
		//Set who the message is to be sent to
		$mail->addAddress($email);

		$mail->Subject = $subject;
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body

		$mail->msgHTML($msg, dirname(__FILE__));
		//Replace the plain text body with one created manually
		$mail->AltBody = 'This is a plain-text message body';
		//Attach an image file
		//$mail->addAttachment('images/phpmailer_mini.png');
		if($mail->send()){
			return true;
		}else{
			return false;
		}
	}
	
	function delete_img($data)
    {
        $tbl = $data['tbl'];
        $select_field = $data['select_field'];
        $where_field = $data['where_field'];
        $img_path = $data['img_path'];

        $sql = $this->db->query("SELECT $select_field from $tbl where $where_field");
        $rows = $sql->result();
        foreach ($rows as $p)
        {
            foreach ($img_path as $unlinks)
            {
                $path = $unlinks . '/' . $p->$select_field;
                if (file_exists($path))
                {
                    unlink($path);
                }
            }
        }
        return true;
    }

}



/* End of file welcome.php */

/* Location: ./application/controllers/welcome.php */
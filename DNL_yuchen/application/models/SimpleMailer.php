<?php
	class SimpleMailer{
		private $from = 'no-reply@nicorporation.nl';
		private $from_name = 'Admin';
		private $to;
		private $subject;
		private $msg;
		private $tag;
	
		public function __construct($to, $subject, $msg_html, $tag = '') {
			
			$this->to = $to;
			$this->subject = 'Registration ';
			$this->msg = $msg_html;
			$this->subject = $subject;	
			$this->tag = $tag;			
		}
		
		public function send(){
			
			$msg_html = $this->msg;		
			$msg_plain = strip_tags($this->msg);
			
			$boundary = uniqid('np');
	
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "From: ".$this->from_name." <".$this->from.">\r\n";
			$headers .= "Content-Type: multipart/alternative;boundary=" . $boundary . "\r\n";
			
			$body = "This is a MIME encoded message."; 
			
			$body .= "\r\n\r\n--" . $boundary . "\r\n";
			$body .= "Content-type: text/plain;charset=utf-8\r\n\r\n";
			$body .= $msg_plain;
			
			$body .= "\r\n\r\n--" . $boundary . "\r\n";
			$body .= "Content-type: text/html;charset=utf-8\r\n\r\n";
			$body .= $msg_html;
			
			$body .= "\r\n\r\n--" . $boundary . "--";
							
			try {
				mail($this->to, $this->subject, $body, $headers);
			} catch (Exception $e) {
				error($e->getMessage(), 4);
			}			
		}
	}
?>
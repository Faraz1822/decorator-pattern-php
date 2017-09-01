<?php  
	require_once 'Ticket.php';

	abstract class TicketDecorator implements Ticket {
		protected $ticket;

		function __construct(Ticket $ticket){
			$this->ticket = $ticket;
		}

		abstract function calculatePrice();  
		abstract function ticketDescription();
	}
?>
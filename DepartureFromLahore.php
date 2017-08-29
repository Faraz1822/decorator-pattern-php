<?php 
	require_once 'TicketDecorator.php';

	class DepartureFromLahore extends TicketDecorator {
    
    function calculatePrice ()
    {
        return $this->ticket->calculatePrice() + 1000;
    }

    function ticketDescription()
    {
        return $this->ticket->ticketDescription() . "  From Lahore";
    }
}
?>
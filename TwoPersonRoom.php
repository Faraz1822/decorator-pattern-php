<?php 
	class TwoPersonRoom extends TicketDecorator {

	    function calculatePrice (){
	        return $this->ticket->calculatePrice() + 2000;
	    }

	    function ticketDescription(){
	        return $this->ticket->ticketDescription() . "  With Two Person Shared Room";
	    }
	}
?>
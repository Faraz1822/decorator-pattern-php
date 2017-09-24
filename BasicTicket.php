<?php
	class BasicTicket implements Ticket {
		function calculatePrice(){
  			return 20000;
		}

		function ticketDescription(){
  			return "Hunza Valley Trip";
		}
	}
?>
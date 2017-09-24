<?php 

	// Autoload Classes
	spl_autoload_register(function ($class_name) {
    	require_once $class_name . '.php';
	});
	
	function displayTicket($ticket){
		echo $ticket->ticketDescription();
		echo " <br>Total Price = ";
		echo $ticket->calculatePrice();
	}

	$basicTicket = new BasicTicket();
	displayTicket($basicTicket);

	echo "<br><br>";

	$ticketWithTwoPersonRoom = new TwoPersonRoom($basicTicket);
	displayTicket($ticketWithTwoPersonRoom);

	echo "<br><br>";

	$ticketWithDepartureFromLahore = new DepartureFromLahore($basicTicket);
	displayTicket($ticketWithDepartureFromLahore);

	echo "<br><br>";

	$ticketWithTwoPersonRoomAndDepartureFromLahore = new DepartureFromLahore($ticketWithTwoPersonRoom);
	displayTicket($ticketWithTwoPersonRoomAndDepartureFromLahore);
?>
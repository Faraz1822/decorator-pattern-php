<?php

use PHPUnit\Framework\TestCase;
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});
    
final class DecoratorTest extends TestCase
{
	public function testBasicTicket()
    {
        $basicTicket = new BasicTicket();
        $this->assertEquals(20000, $basicTicket->calculatePrice());
    }
    public function testBasicTicketWithTwoPersonRoom()
    {
        $basicTicket = new BasicTicket();
        $basicTicketWithTwoPersonRoom = new TwoPersonRoom($basicTicket);
        $this->assertEquals(22000, $basicTicketWithTwoPersonRoom->calculatePrice());
    }
    public function testBasicTicketWithDepartureFromLahore()
    {
        $basicTicket = new BasicTicket();
        $basicTicketWithDepartureFromLahore = new DepartureFromLahore($basicTicket);
        $this->assertEquals(21000, $basicTicketWithDepartureFromLahore->calculatePrice());
    }
    public function testBasicTicketWithTwoPersonRoomAndDepartureFromLahore()
    {
        $basicTicket = new BasicTicket();
        $basicTicketWithTwoPersonRoom = new TwoPersonRoom($basicTicket);
        $basicTicketWithTwoPersonRoomAndDepartureFromLahore = new DepartureFromLahore($basicTicketWithTwoPersonRoom);
        $this->assertEquals(23000, $basicTicketWithTwoPersonRoomAndDepartureFromLahore->calculatePrice());
    }
}



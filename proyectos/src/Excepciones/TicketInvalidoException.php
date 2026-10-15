<?php 
class TicketInvalidoException extends InvalidArgumentException{
 public function __construct( readonly string $message = "")
 {
    
 }
}
?>
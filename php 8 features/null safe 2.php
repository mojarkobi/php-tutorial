<?php
class Invoice
{
    public function generatePDF()
    {
        return "PDF generated";
    }
}

class Order
{

    private $invoice;
    public function generateInvoice()
    {
        $this->invoice = new Invoice();
    }

    public function getInvoice()
    {

        //return null;   null return korle null safe operator ati arror na dekhiye empty output dibe

        return $this->invoice;
    }

}

$obj = new Order();
$obj->generateInvoice();

echo $obj->getInvoice()?->generatePDF() ?? "failed to generatePDF"; // combine null safe operator with nullish coeliscing operator


?>
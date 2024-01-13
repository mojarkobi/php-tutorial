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

    public function generateInvoice(): ?Invoice // here `?Invoice` means it's data type either Invoice type or null
    {
        $this->invoice = new Invoice();
        return $this->invoice; // Add this line to return the created invoice
    }

    public function getInvoice()
    {
        return $this->invoice;
    }
}

$obj = new Order();
$obj->generateInvoice();

echo $obj->getInvoice()?->generatePDF() ?? "failed to generatePDF";
?>

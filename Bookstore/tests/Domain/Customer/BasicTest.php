<?php
namespace Bookstore\Tests\Domain\Customer;
use Bookstore\Domain\Customer;
use PHPUnit\Framework\TestCase;



class BasicTest extends TestCase
{
    private $customer;

    public function testAmountToBorrow() {
        $customer = new Basic(1, 'han', 'solo', 'han@solo.com');
        $this->assertSame(
            3,
            $customer->getAmountToBorrow(),
            'Basic customer should borrow up to 3 books.'
        );
    }
    public function testFail() {
        $customer = new Basic(1, 'han', 'solo', 'han@solo.com');
        $this->assertSame(
            4,

            $customer->getAmountToBorrow(),
    'Basic customer should borrow up to 3 books.'
        );
    }
    public function testIsExemptOfTaxes() {
        $this->assertFalse(
            $this->customer->isExemptOfTaxes(),
            'Basic customer should be exempt of taxes.'
        );
    }
    public function testGetMonthlyFee() {
        $this->assertSame(
            5,
            $this->customer->getMonthlyFee(),
            'Basic customer should pay 5 a month.'
        );
    }

}

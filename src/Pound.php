<?php declare(strict_types=1);

namespace ClansOfCaledonia;

final class Pound
{
    /**
     * @var int
     */
    private $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function amount(): int
    {
        return $this->amount;
    }

    public function multiply(int $factor): Pound
    {
        return new Pound($this->amount * $factor);
    }

    public function minus(int $number): Pound
    {
        return new Pound($this->amount - $number);
    }
}

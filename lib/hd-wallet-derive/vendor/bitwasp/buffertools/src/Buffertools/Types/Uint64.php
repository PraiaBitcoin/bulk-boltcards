<?php

declare(strict_types=1);

namespace BitWasp\Buffertools\Types;

class Uint64 extends AbstractUint
{

    /**
     * {@inheritdoc}
     * @see \BitWasp\Buffertools\Types\TypeInterface::getBitSize()
     */
    public function getBitSize(): int
    {
        return 64;
    }
}

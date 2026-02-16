<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductOfferServicePointAvailabilityWidget\Reader;

interface QuoteItemReaderInterface
{
    /**
     * @param array<string> $groupKeys
     *
     * @return array<\Generated\Shared\Transfer\ItemTransfer>
     */
    public function getItemsFromQuote(array $groupKeys): array;
}

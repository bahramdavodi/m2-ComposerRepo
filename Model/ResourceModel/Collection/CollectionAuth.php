<?php

namespace Eadesigndev\ComposerRepo\Model\ResourceModel\Collection;

use Eadesigndev\ComposerRepo\Model\Customer\CustomerAuth as CustomerAuthModel;
use Eadesigndev\ComposerRepo\Model\ResourceModel\Customer\CustomerAuth as CustomerAuthResource;

class CollectionAuth extends AbstractCollection
{
    /**
     * @var string
     */
    //@codingStandardsIgnoreLine
    protected $_idCustomerAuth = 'entity_id';

    /**
     * Init resource model
     * @return void
     */
    // @codingStandardsIgnoreLine
    public function _construct()
    {

        $this->_init(
            CustomerAuthModel::class,
            CustomerAuthResource::class
        );

        $this->_map['composer']['entity_id'] = 'main_table.entity_id';
    }
}

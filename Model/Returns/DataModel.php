<?php
/**
 * Copyright © Magmodules.eu. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magmodules\Channable\Model\Returns;

use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Api\ExtensibleDataInterface;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use Magmodules\Channable\Api\Returns\Data\DataInterface as ChannableReturnsData;
use Magmodules\Channable\Api\Returns\Data\DataInterfaceFactory;

/**
 * Returns DataModel
 */
class DataModel extends AbstractModel implements ExtensibleDataInterface, ChannableReturnsData
{

    /**
     * @var DataObjectHelper
     */
    private $dataObjectHelper;

    /**
     * @var DataInterfaceFactory
     */
    private $itemDataFactory;

    /**
     * DataModel constructor.
     * @param Context $context
     * @param Registry $registry
     * @param DataInterfaceFactory $itemDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param ResourceModel\ResourceModel $resource
     * @param ResourceModel\Collection $collection
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        DataInterfaceFactory $itemDataFactory,
        DataObjectHelper $dataObjectHelper,
        ResourceModel\ResourceModel $resource,
        ResourceModel\Collection $collection,
        array $data = []
    ) {
        $this->itemDataFactory = $itemDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $collection, $data);
    }

    /**
     * Retrieves Channable Returns data model
     *
     * @return ChannableReturnsData
     */
    public function getDataModel(): ChannableReturnsData
    {
        $itemData = $this->getData();
        $itemDataObject = $this->itemDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $itemDataObject,
            $itemData,
            DataInterfaceFactory::class
        );

        return $itemDataObject;
    }

    /**
     * Constructor
     */
    public function _construct()
    {
        $this->_init(ResourceModel\ResourceModel::class);
    }

    /**
     * @inheritDoc
     */
    public function getId(): int
    {
        return (int)$this->getData(self::ID);
    }

    /**
     * @inheritDoc
     */
    public function setId($value): ChannableReturnsData
    {
        return $this->setData(self::ID, $value);
    }

    /**
     * @inheritDoc
     */
    public function getStoreId(): int
    {
        return (int)$this->getData(self::STORE_ID);
    }

    /**
     * @inheritDoc
     */
    public function setStoreId(int $storeId): ChannableReturnsData
    {
        return $this->setData(self::STORE_ID, $storeId);
    }

    /**
     * @inheritDoc
     */
    public function getOrderId(): int
    {
        return (int)$this->getData(self::ORDER_ID);
    }

    /**
     * @inheritDoc
     */
    public function setOrderId(int $orderId): ChannableReturnsData
    {
        return $this->setData(self::ORDER_ID, $orderId);
    }

    /**
     * @inheritDoc
     */
    public function getChannelName(): string
    {
        return (string)$this->getData(self::CHANNEL_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setChannelName(string $channelName): ChannableReturnsData
    {
        return $this->setData(self::CHANNEL_NAME, $channelName);
    }

    /**
     * @inheritDoc
     */
    public function getChannelId(): int
    {
        return (int)$this->getData(self::CHANNEL_ID);
    }

    /**
     * @inheritDoc
     */
    public function setChannelId(int $channelId): ChannableReturnsData
    {
        return $this->setData(self::CHANNEL_ID, $channelId);
    }

    /**
     * @inheritDoc
     */
    public function getChannableId(): int
    {
        return (int)$this->getData(self::CHANNABLE_ID);
    }

    /**
     * @inheritDoc
     */
    public function setChannableId(int $channableId): ChannableReturnsData
    {
        return $this->setData(self::CHANNABLE_ID, $channableId);
    }

    /**
     * @inheritDoc
     */
    public function getMagentoOrderId(): int
    {
        return (int)$this->getData(self::MAGENTO_ORDER_ID);
    }

    /**
     * @inheritDoc
     */
    public function setMagentoOrderId(int $magentoOrderId): ChannableReturnsData
    {
        return $this->setData(self::MAGENTO_ORDER_ID, $magentoOrderId);
    }

    /**
     * @inheritDoc
     */
    public function getMagentoIncrementId(): int
    {
        return (int)$this->getData(self::MAGENTO_INCREMENT_ID);
    }

    /**
     * @inheritDoc
     */
    public function setMagentoIncrementId(int $magentoIncrementId): ChannableReturnsData
    {
        return $this->setData(self::MAGENTO_INCREMENT_ID, $magentoIncrementId);
    }

    /**
     * @inheritDoc
     */
    public function getItem(): string
    {
        return (string)$this->getData(self::ITEM);
    }

    /**
     * @inheritDoc
     */
    public function setItem(string $item): ChannableReturnsData
    {
        return $this->setData(self::ITEM, $item);
    }

    /**
     * @inheritDoc
     */
    public function getCustomerName(): string
    {
        return (string)$this->getData(self::CUSTOMER_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setCustomerName(string $customerName): ChannableReturnsData
    {
        return $this->setData(self::CUSTOMER_NAME, $customerName);
    }

    /**
     * @inheritDoc
     */
    public function getCustomer(): string
    {
        return (string)$this->getData(self::CUSTOMER);
    }

    /**
     * @inheritDoc
     */
    public function setCustomer(string $customer): ChannableReturnsData
    {
        return $this->setData(self::CUSTOMER, $customer);
    }

    /**
     * @inheritDoc
     */
    public function getAddress(): string
    {
        return (string)$this->getData(self::ADDRESS);
    }

    /**
     * @inheritDoc
     */
    public function setAddress(string $address): ChannableReturnsData
    {
        return $this->setData(self::ADDRESS, $address);
    }

    /**
     * @inheritDoc
     */
    public function getReason(): string
    {
        return (string)$this->getData(self::REASON);
    }

    /**
     * @inheritDoc
     */
    public function setReason(string $reason): ChannableReturnsData
    {
        return $this->setData(self::REASON, $reason);
    }

    /**
     * @inheritDoc
     */
    public function getComment(): string
    {
        return (string)$this->getData(self::COMMENT);
    }

    /**
     * @inheritDoc
     */
    public function setComment(string $comment): ChannableReturnsData
    {
        return $this->setData(self::COMMENT, $comment);
    }

    /**
     * @inheritDoc
     */
    public function getStatus(): string
    {
        return (string)$this->getData(self::STATUS);
    }

    /**
     * @inheritDoc
     */
    public function setStatus(string $status): ChannableReturnsData
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt(): string
    {
        return (string)$this->getData(self::CREATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setCreatedAt(string $createdAt): ChannableReturnsData
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * @inheritDoc
     */
    public function getUpdatedAt(): string
    {
        return (string)$this->getData(self::UPDATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setUpdatedAt(string $updatedAt): ChannableReturnsData
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }
}

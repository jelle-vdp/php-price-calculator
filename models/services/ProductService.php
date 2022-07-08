<?php

class ProductService
{
    private ProductRepository $productRepository;
    private CustomerGroupRepository $customerGroupRepository;
    private CustomerRepository $customerRepository;

    public function __construct(CustomerRepository $customerRepository, CustomerGroupRepository $customerGroupRepository, ProductRepository $productRepository)
    {
        $this->$customerRepository = $customerRepository;
        $this->customerGroupRepository = $customerGroupRepository;
        $this->productRepository = $productRepository;
    }


    public function getPrice(int $productId) : int {
        return $this->productRepository->findProductById($productId)->getPrice();
    }

    public function getDiscountedPrice(int $productId, int $customerId): int
    {
        $product = $this->productRepository->findProductById($productId);
        $customer = $this->customerRepository->findById($customerId);
        $customerGroups = $this->customerGroupRepository->findById($customer->getGroupId());

        //Determine discount
        $discount = 10;


        return max($product->getPrice() - $discount, 0);
    }
}
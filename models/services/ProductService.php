<?php

class ProductService
{
    private ProductRepository $productRepository;
    private CustomerGroupRepository $customerGroupRepository;
    private CustomerRepository $customerRepository;

    public function __construct()
    {
        $this->customerGroupRepository = new CustomerGroupRepository();
        $this->productRepository = new ProductRepository();
        $this->customerRepository = new CustomerRepository();
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
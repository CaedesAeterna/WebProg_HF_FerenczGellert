<?php
namespace ShoppingCart;


class Cart
{
    /**
     * @var CartItem[]
     */
    private array $items = [];

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    // TODO Generate getters and setters of properties


    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Product $product
     * @param int $quantity
     * @return CartItem
     */
    public function addProduct(Product $product, int $quantity): CartItem
    {


        $item = new CartItem($product, $quantity);

        array_push($this->items, $item);

        return $item;


    }

    /**
     * Remove product from cart
     *
     * @param Product $product
     */
    public function removeProduct(Product $product): void
    {
        //TODO Implement method

        foreach ($this->items as $key => $item) {
            if ($item->getProduct()->getId() == $product->getId()) {
                unset($this->items[$key]);
            }
        }

    }

    /**
     * This returns total number of products added in cart
     *
     * @return int
     */
    public function getTotalQuantity(): int
    {
        $quantity = 0;
        foreach ($this->items as $item) {
            $quantity += $item->getQuantity();
        }
        return $quantity;

    }

    /**
     * This returns total price of products added in cart
     *
     * @return float
     */
    public function getTotalSum(): float
    {
        $sum = 0;
        foreach ($this->items as $item) {
            $sum += $item->getProduct()->getPrice() * $item->getQuantity();
        }
        return $sum;
    }
}
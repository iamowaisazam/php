2 tables ka apas ma combination or merge karne k liye use hota ha...

query..............
SELECT * FROM `products`
Right purchase_order_items ON products.id = purchase_order_items.product_id
ORDER By products.id


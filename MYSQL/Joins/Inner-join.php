inner joins sirf common or relation data k liye use hota ha sirf.

query..............
SELECT * FROM `products`
JOIN purchase_order_items ON products.id = purchase_order_items.product_id
ORDER By products.id
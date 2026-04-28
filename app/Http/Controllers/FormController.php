SELECT orderNumber
FROM orderdetails
GROUP BY orderNumber
HAVING SUM(quantityOrdered * priceEach) < (
    SELECT AVG(buyPrice)
    FROM products
);
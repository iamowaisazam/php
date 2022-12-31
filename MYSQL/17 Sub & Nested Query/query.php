<?php

// A MySQL subquery is a query nested within another query such as SELECT, INSERT, UPDATE or DELETE. Also, a subquery can be nested within another subquery.
// A MySQL subquery is called an inner query while the query that contains the subquery is called an outer query. A subquery can be used anywhere that expression is used and must be closed in parentheses.
// For example, the following query uses a subquery to return the employees who work in the offices located in the USA.


// SELECT * FROM employees WHERE officeCode IN (SELECT  officeCode FROM offices.id WHERE country = 'USA');
// SELECT  customerNumber, checkNumber,amount FROM payments WHERE amount = (SELECT MAX(amount) FROM payments);


?>
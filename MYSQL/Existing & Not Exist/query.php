<?php 

// If Any Single Record Found Then Show Parent Data The following SQL statement returns TRUE and lists the suppliers with a product price less than 20:

//Exist Example
    // SELECT Name FROM Personal WHERE EXISTS (SELECT ProductName FROM Products WHERE Products.SupplierID = Suppliers.supplierID AND Price < 20);

    // SELECT SupplierName FROM Suppliers WHERE EXISTS (SELECT ProductName FROM Products WHERE Products.SupplierID = Suppliers.supplierID AND Price < 20);

    // SELECT SupplierName FROM Suppliers WHERE EXISTS (SELECT ProductName FROM Products WHERE Products.SupplierID = Suppliers.supplierID AND Price = 22);

//Not Exist Example
    // SELECT SupplierName FROM Suppliers WHERE Not EXISTS (SELECT ProductName FROM Products WHERE Products.SupplierID = Suppliers.supplierID AND Price = 22);

?>
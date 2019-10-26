SELECT cashier.name,product.nama,category.name,product.price FROM (product INNER JOIN category on product.id_category=category.id) INNER JOIN cashier on product.id_cashier=cashier.id

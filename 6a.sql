SELECT cashier.name,product.nama,category.name,product.price FROM product,category,cashier WHERE product.id=category.id=cashier.id

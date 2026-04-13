CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `kcal_per_100g` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `weight_g` decimal(10,2) NOT NULL,
  `kcal_per_g` decimal(10,3) NOT NULL,
  `total_kcal` decimal(10,2) NOT NULL,
  `kcal_per_pln` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

CREATE TABLE `forms` (
  `id` int(20)  NOT NULL,
  `name` varchar(45)  NOT NULL,
  `last_name` varchar(45)  NOT NULL,
  `email` varchar(45)  NOT NULL,
  `phone` int(20)  NOT NULL,
  `check_info` varchar(10)  NOT NULL DEFAULT 'off',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
);
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `forms`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
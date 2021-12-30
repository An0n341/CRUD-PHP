SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `info_table` (
  `id` int(11) NOT NULL,
  `first_name` varchar(1999) NOT NULL,
  `last_name` varchar(1999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `info_table`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `info_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

TRUNCATE TABLE info_table;

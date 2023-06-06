CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL
);

ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

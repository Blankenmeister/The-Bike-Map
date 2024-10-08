ALTER TABLE `bike_route` ADD `image` varchar(200) NOT NULL AFTER `map_link`;
ALTER TABLE `bike_route` ADD `gpx` varchar(200) NOT NULL AFTER `image`;
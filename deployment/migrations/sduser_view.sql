CREATE
ALGORITHM = UNDEFINED
VIEW `sduser`
AS SELECT DISTINCT `object_id` AS 'order_id', `sd_user`  FROM `refferal_action` WHERE `object_name` = 'order'
====================================================================
1. SELECT lowerImages.*, higherImages.*
FROM globalrank AS lowerImages, globalrank AS higherImages
WHERE lowerImages.rank < higherImages.rank
AND lowerImages.image_id = (
SELECT image_id
FROM (
SELECT image_id
FROM globalrank
WHERE rank < higherImages.rank
ORDER BY rank DESC
LIMIT 1,1
) AS tmp
)
AND NOT EXISTS (
SELECT * FROM matchups
WHERE user_id = $user_id
AND ((image_id1 = lowerImages.image_id AND image_id2 = higherImages.image_id)
OR (image_id2 = lowerImages.image_id AND image_id1 = higherImages.image_id))
)
AND higherImages.image_id NOT IN (
SELECT image_id FROM rankedup
WHERE created_at < DATE_ADD(NOW(), INTERVAL 1 DAY)
AND USER_ID <> $user_id
)
ORDER BY higherImages.rank

====================================================================
2. select
(
select image_id, rank from
rankedup inner join globalRank
on rankedup.image_id = globalRank .image_id
where user_id = XXX
limit 1, 1
) as highest,
(
select image_id, rank from
rankedup inner join globalRank
on rankedup.image_id = globalRank .image_id
where user_id = XXX
limit 2, 1
) as secondhighest

=====================================================================
3. SELECT lowerImages.image_id AS lower_image,
max(higherImages.image_id) AS higher_image
FROM global_rank AS lowerImages, global_rank AS higherImages
WHERE  lowerImages.rank  <  higherImages.rank

AND 1  NOT IN (select 1 from ranked_up where
lowerImages.image_id = ranked_up.image_id
AND ranked_up.user_id = $user_id
AND ranked_up.created_at > DATE_SUB(NOW(), INTERVAL 1 DAY))

AND 1 NOT IN (
SELECT 1 from matchups where user_id = $userId
AND lower_image_id = lowerImages.image_id
AND higher_image_id = higherImages.image_id
UNION
SELECT 1 from matchups where user_id = $user_id
AND lower_image_id = higherImages.image_id
AND higher_image_id = lowerImages.image_id
)
GROUP BY 1
==================================================================
4. SELECT  c.id AS id,
pc.parent_cat_id,
pc.cat_name,
d.totalCount
FROM    db.category c
INNER JOIN db.parent_category pc
ON pc.id = c.parent_cat_id
INNER JOIN
(
SELECT parent_cat_id, COUNT(*) totalCount
FROM db.parent_category
GROUP BY parent_cat_id
) d ON c.parent_cat_id = d.parent_cat_id
WHERE   c.is_active = 1 AND
c.is_menu = 1
ORDER   BY  pc.sort_order,
c.sort_order
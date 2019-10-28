SELECT `name`
FROM `distrib`
WHERE 
(`id_distrib` = '42') OR (`id_distrib` > '61' AND `id_distrib` < '70') OR (`id_distrib` = '71') OR (`id_distrib` > '87' AND `id_distrib` < '91') 
OR (LOWER(`name`) LIKE '%y%y%')
LIMIT 5 OFFSET 2
;

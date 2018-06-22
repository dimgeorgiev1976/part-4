-- Выбор поста и Автора
SELECT 	
	posts.id, posts.title, posts.text, posts.post_img, posts.date_time, posts.author_id, 
	users.name, users.secondname 

FROM posts 
INNER JOIN users 
ON posts.author_id = users.id 

WHERE posts.id = 50 LIMIT 1


-- Выбор поста и Категории
SELECT 	
	posts.id, posts.title, posts.text, posts.post_img, posts.date_time, posts.author_id, posts.cat,
	categories.id, categories.cat_title 

FROM posts 
INNER JOIN categories 
ON posts.cat = categories.id 

WHERE posts.id = 50 LIMIT 1


-- Выбор поста  и Автора  и  Категории

SELECT 	
	posts.id, posts.title, posts.text, posts.post_img, posts.date_time, posts.author_id, posts.cat,
	users.name, users.secondname, 
	categories.cat_title 
FROM posts 

INNER JOIN users 
ON posts.author_id = users.id 

INNER JOIN categories 
ON posts.cat = categories.id

WHERE posts.id = 50 LIMIT 1








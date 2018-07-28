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


Пунктам что было исправлено :
1) Удаление файлов при удалении сообщений из контактов
2) Технологии в работах.  Для блока с технологиями, добавил поле textarea с WISIWIG редактором и в нем уже все оформить списком.
3) Кнопки Вперед / Назад на странице с постом - удалить их или сделать чтобы они работали
4) Возможность удалить пост, кнопка Удалить
5) Реализовать раздел Работы. Помимо шаблонов сделать чтобы можно было добавлять свои работы, с описанием и картинкой.
Далее выводить их в разделе работы, редактировать и удалять. После добавить отображение работ на главной


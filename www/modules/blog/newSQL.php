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

expression ? true_value : folse_value  

Пунктам что было исправлено :
1) Удаление файлов при удалении сообщений из контактов
2) Технологии в работах.  Для блока с технологиями, добавил поле textarea с WISIWIG редактором и в нем уже все оформить списком.
3) Реализован раздел Работы. Сделал так чтобы можно было добавлять свои работы, с описанием и картинкой.
   Далее выводить их в разделе работы, редактировать и удалять. После добавить отображение работ на главной
4) Pаздел Работы .Возможность редактировать Работы, кнопка Pедактировать!Далее выводить их в разделе работы
5) Возможность удалить Работы, кнопка Удалить
6) Далее добавить отображение Работы на главной.
7)  Кнопки Вперед на странице с Работы - сделать чтобы они работали
8) Кнопки Вперед / Назад на странице с постом - удалить их или сделать чтобы они работали
9)  Возможность удалить Коментарий из раздел messages.
Admin-dvoen@rightblog.ru
123456
10) Кнопка в раздел messages поправит форма и JS.  Некоректно отображение Удалить.
11)  Oтображение kaрточки в Работы на горен лев угол. Некоректно отображение.


<!-- 12) Возможность удалить Посты, кнопка Удалить -->
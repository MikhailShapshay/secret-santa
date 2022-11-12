<p align="center"><h1>Тайный Санта</h1></p>
<p align="center"><h2>Laravel 8, PostgreSql, VueJS</h2></p>
<p align="justify"><strong>ствновка</strong></p>
<p align="justify">
composer install<br/>
npm install<br/>
npm run prod
</p>
<p align="justify"><strong>PostgreSql</strong></p>
<p align="justify">Есть таблица users, user_carts, orders, order_items</p>

<p align="justify">Реализовать связь этих таблиц.</p>

<p align="justify">Написать запрос создания всех 4 таблиц со связями.</p>

<p align="justify">Написать запрос добавления тестовых данных в эти таблицы.</p>

<p align="justify">Написать запрос для вывода одной таблицы, которая содержит эти данные:</p>

<p align="justify">user.id , user.name , orders.id , order_items.id, order_items.name, orders.created_at</p>

<p align="justify">Написать запрос удаления. Запрос должен удалять пользователя, корзину и все его заказы. DELETE FROM users WHERE id = 1;</p>

<p align="justify"><strong>Laravel</strong></p></p>
<p align="justify">Общие указания:</p>

<p align="justify">Код задачи должен быть выложен на git</p>

<p align="justify">Схема базы данных должна заполняться через миграции.</p>

<p align="justify">Данные базы данных должны наполняться случайным образом (генерировать фамилии и имена и связку санта-подопечный) через db:seed</p>

<p align="justify"><strong>Задача:</strong></p>
<p align="justify">Реализовать логику работы игры "тайный санта"</p>
<p align="justify">На laravel необходмио заполнить тестовыми данными базу данных (через db:seed)</p>
<p align="justify">В базе данных должна быть таблица с участниками. Каждый участник является "тайным сантой" для другого участника (подопечного).</p>
У каждого участника есть строго один тайный санта и один подопечный, для которого участник является тайным сантой.</p>
<p align="justify">У каждого участника есть уникальное имя.</p>
<p align="justify">Реализовать один get метод, который по переданному в get параметре id участника вернёт json информацию о подопечном (поля записи из таблицы) и о самом участнике.</p>

<p align="justify">"Тайный Санта", он же Secret Santa, - анонимный способ дарить подарки. Идея проста: в большой компании каждому достаётся один "подопечный", которому нужно придумать подарок. Сам даритель при этом остаётся тем самым "тайным Сантой".</p>

create database UEBI2db;

use UEBI2db;
create table user (uid integer, uname nvarchar(30), surname varchar(40), password nvarchar(25), email nvarchar(50), adress nvarchar(30), rid nvarchar(30));
create table role (rid integer, remri nvarchar(30));
create table userRole (urid integer, uid integer, rid integer);
create table products (pid integer, pname nvarchar(50), price decimal(5,2), image blob, cid integer);
create table category (cid integer, cname nvarchar(50));
create table userProduct (upid integer, uid integer, pname nvarvhar(50), quantity integer, unit nvarchar(20));
create table feedback(uname nvarchar(50), surname nvarchar(50), email nvarchar(50), feedback nvarchar(5000));

insert into products
values 
(1, 'fish eggs', 50.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\fisheggs.png"),'sea fruits'),
(2, 'goat chesse', 35.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\goat chesse.png"), 'from our farm'),
(3, 'milk', 5.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\milk.png")),
(4, 'oysters', 55.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\oysters.png")),
(5, 'salmon', 60.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\salmon.png")),
(6, 'tuna', 35.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\tuna.png")),
(7, 'shrimps', 45.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\shrimps.png")),
(8, 'rasberries', 9.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Berries\rasberries.png")),
(9, 'black currant', 7.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Berries\black-currant.png")),
(10, 'blueberries', 17.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Berries\blueberries.png")),
(11, 'blackberries', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\blackberries.png")),
(12, 'cranberry', 15.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Berries\cranberry.png")),
(13, 'gojiberries', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Berries\gojiberries.png")),
(14, 'redcurrants', 12.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Berries\redcurrants.png")),
(15, 'strawberry', 5.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\strawberries.png")),
(16, 'whitecurrants', 21.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Berries\whitecurrants.png")),
(17, 'cantaloupe', 9.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Melons\cantaloupe.png")),
(18, 'golden melon', 7.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Melons\Golden Melon.png")),
(19, 'honeydew', 17.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Melons\Honeydew.png")),
(20, 'watermelon', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Melons\watermelon.png")),
(21, 'fresh black seedless grapes', 15.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\grape\Freshblackseedlessgrapes.png")),
(22, 'fresh green seedless grapes', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\grape\Freshgreenseedlessgrapes.png")),
(23, 'fresh red seedless grapes', 12.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\grape\freshredseedlessgrapes.png")),
(24, 'merlot', 5.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\grape\merlo.png")),
(25, 'cotton candy grapes', 21.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\grape\cottoncandygrapes.png")),
(26, 'bokchoy', 9.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Vegetables\bokchoy.png")),
(27, 'broccoli', 7.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Vegetables\broccoli.png")),
(28, 'carrots', 17.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Vegetables\carrots.png")),
(29, 'cauliflower', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Vegetables\cauliflower.png")),
(30, 'cucumber', 15.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Vegetables\cucumber.png")),
(31, 'garlic', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Vegetables\garlic.png")),
(32, 'onion', 12.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Vegetables\oninon.png")),
(33, 'potato', 5.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Vegetables\potato.png")),
(34, 'pepper', 7.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Vegetables\pepper.png")),
(35, 'eggs', 7.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Farm\eggs.png")),
(36, 'cheese', 17.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Farm\cheese.png")),
(37, 'bacon', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Farm\bacon.png")),
(38, 'chicken drumsticks', 15.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Farm\chicken_drumsticks.png")),
(39, 'ham', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Farm\ham.png")),
(40, 'lambchops', 12.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Farm\lambchops.png")),
(41, 'roasrbeef', 5.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Farm\roasrbeef.png")),
(42, 'steakbeef', 21.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Farm\steakbeef.png")),
(43, 'apples', 9.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\apples.png")),
(44, 'avocados', 7.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\avocado.png")),
(45, 'bananas', 17.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\bananas.png")),
(46, 'barlett pears', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\bartlettpears.png")),
(47, 'blood organes', 15.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\bloodorganes.png")),
(48, 'cara organes', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\caraorganes.png")),
(49, 'dragon fruits', 12.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\dragon fruit.png")),
(50, 'fresh kiwi', 5.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\kiwi.png")),
(51, 'freshness', 21.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Freshness.png")),
(52, 'sunflower seeds', 19.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\sunflowerseeds.png")),
(53, 'pumpkin seeds', 30.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\pumpkinseeds.png")),
(54, 'liri seeds', 35.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\liri seeds.png")),
(55, 'chia seeds', 38.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\chiaseeds.png")),
(56, 'almonds', 45.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\almonds.png")),
(57, 'asparagus', 35.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\asparagus.png")),
(58, 'walnuts', 34.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\walnuts.png")),
(59, 'mango', 30.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\mango.png")),
(60, 'oranges', 15.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\oranges.png")),
(61, 'pistachio', 35.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\pistachio.png")),
(62, 'hazelnuts', 38.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\hazelnuts.png")),
(62, 'peanuts', 17.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\peanuts.png")),
(62, 'honey', 35.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\honey.png"))


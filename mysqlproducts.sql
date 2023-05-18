create database UEBI2db;

use UEBI2db;
create table user (uid integer, uname nvarchar(30), surname nvarchar(40), password nvarchar(25), email nvarchar(50), adress nvarchar(30));
create table role (rid integer, remri nvarchar(30));
create table userRole (urid integer, uid integer, rid integer);
create table products (pid integer, pname nvarchar(50), price decimal(5,2), image blob, cid integer);
create table category (cid integer, cname nvarchar(50));
create table userProduct (upid integer, uid integer, pid integer, quantity integer, unit nvarchar(20));
create table cart (cartid integer, uid integer, pid integer, total decimal(8,2));

insert into products
values
(1, 'fish eggs', 50.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\fisheggs.png"), 'sea fruits'),
(2, 'goat chesse', 35.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\goat chesse.png"), 'from our farm'),
(3, 'milk', 5.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\milk.png"), 'from our farm'),
(4, 'oysters', 55.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\oysters.png"), 'sea fruits'),
(5, 'salmon', 60.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\salmon.png"), 'sea fruits'),
(6, 'tuna', 35.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\tuna.png"), 'sea fruits'),
(7, 'shrimps', 45.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\shrimps.png"), 'sea fruits'),
(8, 'rasberries', 9.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Berries\rasberries.png"), 'fruits'),
(9, 'black currant', 7.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Berries\black-currant.png"), 'fruits'),
(10, 'blueberries', 17.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Berries\blueberries.png"), 'fruits'),
(11, 'blackberries', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\blackberries.png"), 'fruits'),
(12, 'cranberry', 15.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Berries\cranberry.png"), 'fruits'),
(13, 'gojiberries', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Berries\gojiberries.png"), 'fruits'),
(14, 'redcurrants', 12.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Berries\redcurrants.png"), 'fruits'),
(15, 'strawberry', 5.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\strawberries.png"), 'fruits'),
(16, 'whitecurrants', 21.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Berries\whitecurrants.png"), 'fruits'),
(17, 'cantaloupe', 9.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Melons\cantaloupe.png"), 'fruits'),
(18, 'golden melon', 7.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Melons\Golden Melon.png"), 'fruits'),
(19, 'honeydew', 17.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Melons\Honeydew.png"), 'fruits'),
(20, 'watermelon', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Melons\watermelon.png"), 'fruits'),
(21, 'fresh black seedless grapes', 15.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\grape\Freshblackseedlessgrapes.png"), 'fruits'),
(22, 'fresh green seedless grapes', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\grape\Freshgreenseedlessgrapes.png"), 'fruits'),
(23, 'fresh red seedless grapes', 12.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\grape\freshredseedlessgrapes.png"), 'fruits'),
(24, 'merlot', 5.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\grape\merlo.png"), 'fruits'),
(25, 'cotton candy grapes', 21.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\grape\cottoncandygrapes.png"), 'fruits'),
(26, 'bokchoy', 9.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Vegetables\bokchoy.png"), 'vegetables'),
(27, 'broccoli', 7.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Vegetables\broccoli.png"), 'vegetables'),
(28, 'carrots', 17.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Vegetables\carrots.png"), 'vegetables'),
(29, 'cauliflower', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Vegetables\cauliflower.png"), 'vegetables'),
(30, 'cucumber', 15.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Vegetables\cucumber.png"), 'vegetables'),
(31, 'garlic', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Vegetables\garlic.png"), 'vegetables'),
(32, 'onion', 12.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Vegetables\oninon.png"), 'vegetables'),
(33, 'potato', 5.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Vegetables\potato.png"), 'vegetables'),
(34, 'pepper', 7.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Vegetables\pepper.png"), 'vegetables'),
(35, 'eggs', 7.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Farm\eggs.png"), 'from our farm'),
(36, 'cheese', 17.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Farm\cheese.png"), 'from our farm'),
(37, 'bacon', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Farm\bacon.png"), 'from our farm'),
(38, 'chicken drumsticks', 15.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Farm\chicken_drumsticks.png"), 'from our farm'),
(39, 'ham', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Farm\ham.png"), 'from our farm'),
(40, 'lambchops', 12.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Farm\lambchops.png"), 'from our farm'),
(41, 'roasrbeef', 5.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Farm\roasrbeef.png"), 'from our farm'),
(42, 'steakbeef', 21.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Farm\steakbeef.png"), 'from our farm'),
(43, 'apples', 9.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\apples.png"), 'fruits'),
(44, 'avocados', 7.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\avocado.png"), 'vegetables'),
(45, 'bananas', 17.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\bananas.png"), 'fruits'),
(46, 'barlett pears', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\bartlettpears.png"), 'fruits'),
(47, 'blood organes', 15.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\bloodorganes.png"), 'fruits'),
(48, 'cara organes', 29.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\caraorganes.png"), 'fruits'),
(49, 'dragon fruits', 12.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\dragon fruit.png"), 'fruits'),
(50, 'fresh kiwi', 5.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\kiwi.png"), 'fruits'),
(51, 'freshness', 21.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\html\assets\pages\img\products\Fruits\Freshness.png"), 'fruits'),
(52, 'sunflower seeds', 19.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\sunflowerseeds.png"), 'cereals'),
(53, 'pumpkin seeds', 30.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\pumpkinseeds.png"), 'cereals'),
(54, 'liri seeds', 35.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\liri seeds.png"), 'cereals'),
(55, 'chia seeds', 38.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\chiaseeds.png"), 'cereals'),
(56, 'almonds', 45.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\almonds.png"), 'cereals'),
(57, 'asparagus', 35.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\asparagus.png"), 'vegetables'),
(58, 'walnuts', 34.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\walnuts.png"), 'cereals'),
(59, 'mango', 30.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\mango.png"), 'fruits'),
(60, 'oranges', 15.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\oranges.png"), 'fruits'),
(61, 'pistachio', 35.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\pistachio.png"), 'cereals'),
(62, 'hazelnuts', 38.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\hazelnuts.png"), 'cereals'),
(62, 'peanuts', 17.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\peanuts.png"), 'cereals'),
(62, 'honey', 35.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\honey.png"), 'from our farm'),
(63, 'sardines', 30.00, load_file("C:\xampp\htdocs\WEB2\UEB20_23_Gr20\images\sardines.png"), 'sea fruits')


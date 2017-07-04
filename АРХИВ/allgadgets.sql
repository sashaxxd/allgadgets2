-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 04 2017 г., 22:02
-- Версия сервера: 5.7.16
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `allgadgets`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `text`) VALUES
(1, 'ДОСТАВКА', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/Flag-map_of_Russia_with_federal_subjects.svg.png\" width=\"400\" height=\"233\" /></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 18pt;\"><strong>Доставка по всей России</strong></span></p>\r\n<p style=\"text-align: center;\">Оперативная доставка по всей России за 3-7 дней или курьером</p>'),
(2, 'ГАРАНТИИ', '<p><strong>ОРИГИНАЛЬНАЯ ПРОДУКЦИЯ</strong><br />У нас только качественная продукция.</p>\r\n<p><br /><strong>ИНФОРМАЦИОННАЯ БЕЗОПАСНОСТЬ</strong><br />All gadgets неукоснительно соблюдает принцип информационной безопасности и конфиденциальности пользователей сервиса. Все оставленные на сайте данные не будут переданы третьим лицам и использованы в других целях.</p>\r\n<p><br /><strong>ГАРАНТИЯ КАЧЕСТВА НА ВЕСЬ АССОРТИМЕНТ</strong><br />Вся наша продукция сертифицирована, соответствует всем нормам и требованиям законодательства РФ.</p>\r\n<p><br /><strong>ПОДДЕРЖКА ПОЛЬЗОВАТЕЛЕЙ</strong><br />Если у вас возникли какие-либо вопросы по ассортименту, доставке или предоставляемым гарантиям, вы можете обратиться в нашу службу поддержки по телефону . График работы службы поддержки: 9:00 &mdash; 20:00.</p>\r\n<p><br /><strong>ВОЗВРАТ ДЕНЕГ</strong><br />Нашли дефект или повреждение товара? Всего один звонок оператору, и мы заменим товар! Если нужный товар отсутствует, мы предложим Вам альтернативу или просто вернем деньги за товар.</p>'),
(3, 'КОНТАКТЫ', '<p><span style=\"font-size: 14pt;\"><strong>+7(916) 023-81-71</strong></span></p>\r\n<p>ОГРН 432566436400325 МОСКВА, Ленинградский пр-т, 69</p>\r\n<p>luxurytopwatch.line@yandex.ru</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `popular`
--

CREATE TABLE `popular` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `popular`
--

INSERT INTO `popular` (`id`, `title`, `image`, `link`) VALUES
(12, 'Регистратор зеркало', 'e6ab2881eb5c1d12f4139b7e30e6c3f7.png', 'http://dvr-reg-mirror.electronic-f.ru/'),
(13, 'радар-детектор ', '879efe10ab22ba273335f415b7f36695.jpg', 'http://radar.electronic-f.ru/'),
(14, 'Экшн-камера sj4000', '7325469caf2bfa30e949c58b053ad83f.jpg', 'http://cam-sj4000.electronic-f.ru/'),
(15, '3д ручка myriwell', '7b3e7762193a21be4335e6c4999b6249.jpg', 'http://3d-ruchka.for4gadgets.ru/'),
(16, 'Беспроводные наушники airbeats ', 'bac64f5a542753e6943d6618542319f3.jpg', 'http://airbeats.fio25.ru/'),
(17, 'Умные часы smart watсh', '1e9855e76d54731ac2614101a160da7c.jpg', 'http://smart-watch.fashion-luxury-shop.ru/'),
(18, 'Очки виртуальной реальности Vr Box 2', '62263c9c3b920e1607b42b90d705193c.jpg', 'http://vr-box2.fashion-luxury-shop.ru/');

-- --------------------------------------------------------

--
-- Структура таблицы `useful`
--

CREATE TABLE `useful` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `useful`
--

INSERT INTO `useful` (`id`, `title`, `image`, `text`) VALUES
(11, 'Андроид Зеркало', '7de02018f492dc913eae17243c3d7db8.png', '<p>Андроид Зеркало</p>'),
(13, 'Регистратор 3 в 1', 'cab08a72c93d44774873ecd8d725d2bc.png', '<p>Регистратор 3 в 1</p>'),
(14, 'Мини-проектор', 'a53393e27661770e40ee4ddc1b7c1af9.png', '<p>Мини-проектор</p>'),
(15, 'Квадрокоптер', 'b499ddf7a313c3c5378bb8770844cb5d.png', '<p>Квадрокоптер</p>'),
(16, 'Gps Трекер', '2370872ace3b156215a49cc63cba5a04.png', '<p>Gps Трекер</p>'),
(17, 'Аксессуары для авто', 'd45276882e95905d32a6fafc2bac738e.png', '<p>Аксессуары для авто</p>'),
(19, 'Gps навигатор', '00e8d1f6c0aa66efb50953df35cf600e.png', '<p>Gps навигатор</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`) VALUES
(1, 'victor', '$2y$13$gtPOSShTrvSmf.R8IGgYuuiCK8.ETK.ZgHpML5DW5M/Hqa4ewrgBS', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `popular`
--
ALTER TABLE `popular`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `useful`
--
ALTER TABLE `useful`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `popular`
--
ALTER TABLE `popular`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `useful`
--
ALTER TABLE `useful`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

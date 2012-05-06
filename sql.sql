

--
-- Структура таблицы `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `descr` varchar(150) NOT NULL,
  `adm` set('0','1') NOT NULL DEFAULT '0',
  `posts` int(10) NOT NULL DEFAULT '0',
  `subforums` int(11) NOT NULL DEFAULT '0',
  `topics` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `forums`
--

INSERT INTO `forums` (`id`, `name`, `descr`, `adm`, `posts`, `subforums`, `topics`) VALUES
(1, 'Общение', 'Игры, разные темы', '0', 0, 0, 0),
(3, 'Android', 'Все о "роботе"', '0', 0, 0, 0),
(4, 'iOS', 'Все об iPhone, iPod и iPad', '0', 0, 0, 0),
(5, 'Windows Phone/Mobile', '"Мелкомягкая" ось', '0', 0, 0, 0),
(6, 'Другие OS', 'Остальные', '0', 0, 0, 0),
(7, 'PC раздел', 'Большой брат', '0', 0, 0, 0),
(8, 'Простые телефоны', '"Глупые" мобильники', '0', 0, 0, 0),
(9, 'О SchoolCMS', 'О нашем "уютненьком"', '0', 9, 0, 2),
(10, 'Интернеты', 'События во всемирной паутине', '0', 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `forum_posts`
--

CREATE TABLE IF NOT EXISTS `forum_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_forum` int(3) NOT NULL,
  `id_subforum` int(5) NOT NULL,
  `id_topic` int(8) NOT NULL,
  `id_user` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `message` varchar(1024) NOT NULL,
  `id_reply` int(11) DEFAULT NULL,
  `edited_time` int(11) NOT NULL DEFAULT '0',
  `edited_id_last_user` int(11) NOT NULL DEFAULT '0',
  `edited_counter` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `forum_posts`
--

INSERT INTO `forum_posts` (`id`, `id_forum`, `id_subforum`, `id_topic`, `id_user`, `time`, `message`, `id_reply`, `edited_time`, `edited_id_last_user`, `edited_counter`) VALUES
(1, 9, 9, 1, 1, 1330354419, 'Функционал на сейчас таков:\n - Создание форумов, подфорумов, тем\n - Написание сообщений\n - Редактирование, удаление сообщений (без перезагрузки страницы)\n - Прикрепление, закрытие тем\nПланируется:\n - Полное управление форумами, подфорумами и темами, включая их перемещение\n - Прикрепление файлов к посту в неограниченном (в разумных пределах) количестве)\nЧто изменить/добавить/какие баги?', NULL, 1334413956, 1, 6),
(15, 9, 9, 1, 9, 1330696528, 'SPAHI4, зебра не заметна вообще. может сделай контраст побольше, а то складывается впечатление, что это просто белый фон.  http://upwap.ru/2072120', NULL, 1330697328, 9, 1),
(4, 9, 9, 1, 26, 1330409296, 'Смени размер окон ввода на вап теме', NULL, 0, 0, 0),
(6, 9, 9, 1, 1, 1330416993, '[quote=Beston time=1330409296]Смени размер окон ввода на вап теме[/quote]при редактировании поста нормальный размер?', NULL, 0, 0, 0),
(7, 9, 9, 1, 9, 1330461348, 'Как то выделить посты, как в первой версии гостевой фон через один сделать, или как.хз. Неудобно ориентироватся=]', NULL, 0, 0, 0),
(9, 9, 9, 1, 1, 1330543165, 'Deadmau5, так посты итак "зеброй" что тут, что в гостевой', NULL, 0, 0, 0),
(10, 9, 9, 2, 1, 1330547851, 'Тест', NULL, 0, 0, 0),
(12, 9, 9, 2, 1, 1330553908, '[spoiler=ОЛОЛО]Труньк[/spoiler]', NULL, 0, 0, 0),
(17, 9, 9, 1, 30, 1332653171, 'Ошибка доступа .лол.', NULL, 1332705206, 30, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `forum_sub`
--

CREATE TABLE IF NOT EXISTS `forum_sub` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `descr` varchar(150) NOT NULL,
  `id_forum` int(3) NOT NULL,
  `posts` int(5) NOT NULL DEFAULT '0',
  `topics` int(5) NOT NULL DEFAULT '0',
  `time_last_post` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `forum_sub`
--

INSERT INTO `forum_sub` (`id`, `name`, `descr`, `id_forum`, `posts`, `topics`, `time_last_post`) VALUES
(1, 'Игры форума', '', 1, 0, 0, 0),
(2, 'Новости', '', 1, 0, 0, 0),
(3, 'Фильмы и сериалы', '', 1, 0, 0, 0),
(4, 'Музыка', '', 1, 0, 0, 0),
(5, 'Игры', '', 3, 0, 0, 0),
(6, 'Программы', '', 3, 0, 0, 0),
(7, 'Устройства', '', 3, 0, 0, 0),
(8, 'Новости сайта', '', 9, 0, 0, 0),
(9, 'Предложения по улучшению', '', 9, 13, 2, 1332653171),
(10, 'Жизнь сайта', '', 9, 0, 0, 0),
(11, 'Игры', '', 4, 0, 0, 0),
(12, 'Web/Wap - мастера', '', 10, 0, 0, 0),
(13, 'Видео', '', 10, 0, 0, 0),
(14, 'События в сети', '', 10, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `forum_topics`
--

CREATE TABLE IF NOT EXISTS `forum_topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_forum` int(3) NOT NULL,
  `id_subforum` int(5) DEFAULT NULL,
  `name` varchar(32) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `time_create` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `up` set('0','1') NOT NULL DEFAULT '0',
  `closed` set('0','1') NOT NULL DEFAULT '0',
  `id_last_user` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `forum_topics`
--

INSERT INTO `forum_topics` (`id`, `id_forum`, `id_subforum`, `name`, `id_user`, `time_create`, `time`, `up`, `closed`, `id_last_user`) VALUES
(1, 9, 9, 'О форуме', 1, 1330354419, 1332653171, '1', '0', 30),
(2, 9, 9, 'Что добавить', 1, 1330547851, 1330553908, '0', '1', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `id_sender` int(10) NOT NULL COMMENT 'От кого',
  `id_to` int(10) NOT NULL COMMENT 'Кому',
  `subject` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Тема',
  `message` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Сообщение',
  `time` int(11) NOT NULL,
  `readed` set('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Прочитано (1) / Нет (0)',
  `notified` set('0','1') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Личная почта' AUTO_INCREMENT=46 ;


--
-- Структура таблицы `mini_chat`
--

CREATE TABLE IF NOT EXISTS `mini_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `message` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=381 ;


--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `reg_timestamp` int(11) NOT NULL,
  `accesses` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Доступ к определенным разделам',
  `status_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Должность',
  `level` set('0','1','2','3') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `devices` varchar(250) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Анкета - Девайсы',
  `about_me` varchar(250) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Анкета - Обо мне',
  `last_auth_attempt` int(11) NOT NULL COMMENT 'Последняя попытка авторизации',
  `last_visit` int(11) NOT NULL,
  `sex` set('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '0 - жен, 1 - муж',
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Анкета - имя',
  `surname` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Анкета - фамилия',
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_agent` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ip` int(10) NOT NULL,
  `unreaded_messages` int(3) NOT NULL,
  `set_time_shift` int(1) NOT NULL,
  `set_items_per_page` int(2) NOT NULL,
  `set_design_mobile` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `set_design_web` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `set_design_touch` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Пользователи' AUTO_INCREMENT=62 ;


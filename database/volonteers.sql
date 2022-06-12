-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 12 2022 г., 14:22
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `volonteers`
--

-- --------------------------------------------------------

--
-- Структура таблицы `direction`
--

CREATE TABLE `direction` (
  `ID_Direction` int NOT NULL,
  `Direction` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `employment`
--

CREATE TABLE `employment` (
  `ID_Employment` int NOT NULL,
  `Employment` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `free_date`
--

CREATE TABLE `free_date` (
  `ID_Date` int NOT NULL,
  `Date` date NOT NULL,
  `ID_Volonteer` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `needy`
--

CREATE TABLE `needy` (
  `ID_Needy` int NOT NULL,
  `Birth_Date` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `About` text,
  `Phone` varchar(10) NOT NULL,
  `ID_User` int DEFAULT NULL,
  `ID_Type` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `needy_vacancy`
--

CREATE TABLE `needy_vacancy` (
  `ID_Vacancy` int NOT NULL,
  `ID_Needy` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `organization`
--

CREATE TABLE `organization` (
  `ID_Organization` int NOT NULL,
  `Organization_Name` varchar(20) NOT NULL,
  `Organization_Email` varchar(50) NOT NULL,
  `Organization_Address` varchar(50) NOT NULL,
  `ID_Type` int NOT NULL,
  `ID_User` int NOT NULL,
  `About` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `organization_vacancy`
--

CREATE TABLE `organization_vacancy` (
  `ID_Organization` int NOT NULL,
  `ID_Vacancy` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `paragraph`
--

CREATE TABLE `paragraph` (
  `ID_Event` int NOT NULL,
  `Description` text NOT NULL,
  `Header` varchar(20) NOT NULL,
  `ID_Paragraph` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `participation`
--

CREATE TABLE `participation` (
  `ID_Participation` int NOT NULL,
  `Method_Participation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `passport`
--

CREATE TABLE `passport` (
  `ID_Passport` int NOT NULL,
  `Series` int NOT NULL,
  `Number` int NOT NULL,
  `Given_By` varchar(50) NOT NULL,
  `Division_Code` varchar(7) NOT NULL,
  `Given_Date` date NOT NULL,
  `Birdth_Place` varchar(20) NOT NULL,
  `Registration_Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_skillls`
--

CREATE TABLE `personal_skillls` (
  `ID_Skill` int NOT NULL,
  `Skill` varchar(20) NOT NULL,
  `ID_Volonteer` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `priority`
--

CREATE TABLE `priority` (
  `ID_Priority` int NOT NULL,
  `Priority` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `size`
--

CREATE TABLE `size` (
  `ID_Size` int NOT NULL,
  `Size` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `socail_protection`
--

CREATE TABLE `socail_protection` (
  `ID_Type` int NOT NULL,
  `Soc_Prot_Type` varchar(20) NOT NULL,
  `ID_Direction` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE `type` (
  `ID_Type` int NOT NULL,
  `Organization_Type` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `ID_User` int NOT NULL,
  `Sec_Name` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(80) NOT NULL,
  `Registration_Date` date NOT NULL,
  `Avatar` varchar(20) DEFAULT NULL,
  `Patronymic` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `vacancy`
--

CREATE TABLE `vacancy` (
  `ID_Vacancy` int NOT NULL,
  `Vacancy_Name` varchar(20) NOT NULL,
  `Date_Creating` datetime NOT NULL,
  `Vacancy_Address` varchar(20) NOT NULL,
  `Date_Start` datetime NOT NULL,
  `Date_End` datetime DEFAULT NULL,
  `Min_Age` int NOT NULL,
  `ID_Participation` int DEFAULT NULL,
  `ID_Priority` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `vacancy_direction`
--

CREATE TABLE `vacancy_direction` (
  `ID_Direction` int NOT NULL,
  `ID_Event` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `vacancy_week`
--

CREATE TABLE `vacancy_week` (
  `ID_Day` int NOT NULL,
  `ID_Event` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `volonteer`
--

CREATE TABLE `volonteer` (
  `ID_Volonteer` int NOT NULL,
  `Sex` char(1) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `TIN` varchar(12) DEFAULT NULL COMMENT 'ИНН',
  `LInk_VK` varchar(50) DEFAULT NULL,
  `Link_TG` varchar(50) DEFAULT NULL,
  `Driver_License` bit(1) DEFAULT NULL,
  `Medicat_book` bit(1) DEFAULT NULL,
  `ID_User` int NOT NULL,
  `ID_Employment` int DEFAULT NULL,
  `ID_Size` int DEFAULT NULL,
  `SNILS` varchar(30) DEFAULT NULL,
  `ID_Passport` int DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `ID_Participation` int DEFAULT NULL,
  `About` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `volonteer_direction`
--

CREATE TABLE `volonteer_direction` (
  `ID_Volonteer` int NOT NULL,
  `ID_Direction` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `volonteer_week`
--

CREATE TABLE `volonteer_week` (
  `ID_Day` int NOT NULL,
  `ID_Volonteer` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `week`
--

CREATE TABLE `week` (
  `ID_Day` int NOT NULL,
  `Day` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `direction`
--
ALTER TABLE `direction`
  ADD PRIMARY KEY (`ID_Direction`),
  ADD UNIQUE KEY `Direction` (`Direction`);

--
-- Индексы таблицы `employment`
--
ALTER TABLE `employment`
  ADD PRIMARY KEY (`ID_Employment`),
  ADD UNIQUE KEY `Employment` (`Employment`);

--
-- Индексы таблицы `free_date`
--
ALTER TABLE `free_date`
  ADD PRIMARY KEY (`ID_Date`,`ID_Volonteer`),
  ADD KEY `R10` (`ID_Volonteer`);

--
-- Индексы таблицы `needy`
--
ALTER TABLE `needy`
  ADD PRIMARY KEY (`ID_Needy`),
  ADD KEY `IX_Relationship8` (`ID_User`),
  ADD KEY `IX_Relationship9` (`ID_Type`);

--
-- Индексы таблицы `needy_vacancy`
--
ALTER TABLE `needy_vacancy`
  ADD PRIMARY KEY (`ID_Vacancy`,`ID_Needy`),
  ADD KEY `R24` (`ID_Needy`);

--
-- Индексы таблицы `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`ID_Organization`),
  ADD KEY `IX_Relationship1` (`ID_Type`),
  ADD KEY `IX_Relationship2` (`ID_User`);

--
-- Индексы таблицы `organization_vacancy`
--
ALTER TABLE `organization_vacancy`
  ADD PRIMARY KEY (`ID_Organization`,`ID_Vacancy`),
  ADD KEY `R21` (`ID_Vacancy`);

--
-- Индексы таблицы `paragraph`
--
ALTER TABLE `paragraph`
  ADD PRIMARY KEY (`ID_Paragraph`),
  ADD KEY `IX_R17` (`ID_Event`);

--
-- Индексы таблицы `participation`
--
ALTER TABLE `participation`
  ADD PRIMARY KEY (`ID_Participation`),
  ADD UNIQUE KEY `Method_Participation` (`Method_Participation`);

--
-- Индексы таблицы `passport`
--
ALTER TABLE `passport`
  ADD PRIMARY KEY (`ID_Passport`);

--
-- Индексы таблицы `personal_skillls`
--
ALTER TABLE `personal_skillls`
  ADD PRIMARY KEY (`ID_Skill`,`ID_Volonteer`),
  ADD UNIQUE KEY `Skill` (`Skill`),
  ADD KEY `R18` (`ID_Volonteer`);

--
-- Индексы таблицы `priority`
--
ALTER TABLE `priority`
  ADD PRIMARY KEY (`ID_Priority`),
  ADD UNIQUE KEY `Priority` (`Priority`);

--
-- Индексы таблицы `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`ID_Size`);

--
-- Индексы таблицы `socail_protection`
--
ALTER TABLE `socail_protection`
  ADD PRIMARY KEY (`ID_Type`),
  ADD UNIQUE KEY `Soc_Prot_Type` (`Soc_Prot_Type`),
  ADD KEY `IX_Relationship10` (`ID_Direction`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`ID_Type`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- Индексы таблицы `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`ID_Vacancy`),
  ADD KEY `IX_Relationship15` (`ID_Participation`),
  ADD KEY `IX_Relationship18` (`ID_Priority`);

--
-- Индексы таблицы `vacancy_direction`
--
ALTER TABLE `vacancy_direction`
  ADD PRIMARY KEY (`ID_Direction`,`ID_Event`),
  ADD KEY `R12` (`ID_Event`);

--
-- Индексы таблицы `vacancy_week`
--
ALTER TABLE `vacancy_week`
  ADD PRIMARY KEY (`ID_Day`,`ID_Event`),
  ADD KEY `R16` (`ID_Event`);

--
-- Индексы таблицы `volonteer`
--
ALTER TABLE `volonteer`
  ADD PRIMARY KEY (`ID_Volonteer`),
  ADD KEY `IX_Relationship1` (`ID_User`),
  ADD KEY `IX_Relationship5` (`ID_Employment`),
  ADD KEY `IX_Relationship6` (`ID_Size`),
  ADD KEY `IX_Relationship7` (`ID_Passport`),
  ADD KEY `IX_Relationship16` (`ID_Participation`);

--
-- Индексы таблицы `volonteer_direction`
--
ALTER TABLE `volonteer_direction`
  ADD PRIMARY KEY (`ID_Volonteer`,`ID_Direction`),
  ADD KEY `R2` (`ID_Direction`);

--
-- Индексы таблицы `volonteer_week`
--
ALTER TABLE `volonteer_week`
  ADD PRIMARY KEY (`ID_Day`,`ID_Volonteer`),
  ADD KEY `R9` (`ID_Volonteer`);

--
-- Индексы таблицы `week`
--
ALTER TABLE `week`
  ADD PRIMARY KEY (`ID_Day`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `direction`
--
ALTER TABLE `direction`
  MODIFY `ID_Direction` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `employment`
--
ALTER TABLE `employment`
  MODIFY `ID_Employment` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `free_date`
--
ALTER TABLE `free_date`
  MODIFY `ID_Date` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `needy`
--
ALTER TABLE `needy`
  MODIFY `ID_Needy` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `organization`
--
ALTER TABLE `organization`
  MODIFY `ID_Organization` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `paragraph`
--
ALTER TABLE `paragraph`
  MODIFY `ID_Paragraph` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `participation`
--
ALTER TABLE `participation`
  MODIFY `ID_Participation` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `passport`
--
ALTER TABLE `passport`
  MODIFY `ID_Passport` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `personal_skillls`
--
ALTER TABLE `personal_skillls`
  MODIFY `ID_Skill` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `priority`
--
ALTER TABLE `priority`
  MODIFY `ID_Priority` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `size`
--
ALTER TABLE `size`
  MODIFY `ID_Size` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `socail_protection`
--
ALTER TABLE `socail_protection`
  MODIFY `ID_Type` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `ID_Type` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `ID_Vacancy` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `volonteer`
--
ALTER TABLE `volonteer`
  MODIFY `ID_Volonteer` int NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `free_date`
--
ALTER TABLE `free_date`
  ADD CONSTRAINT `R10` FOREIGN KEY (`ID_Volonteer`) REFERENCES `volonteer` (`ID_Volonteer`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `needy`
--
ALTER TABLE `needy`
  ADD CONSTRAINT `R13` FOREIGN KEY (`ID_Type`) REFERENCES `socail_protection` (`ID_Type`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `R19` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `needy_vacancy`
--
ALTER TABLE `needy_vacancy`
  ADD CONSTRAINT `R23` FOREIGN KEY (`ID_Vacancy`) REFERENCES `vacancy` (`ID_Vacancy`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `R24` FOREIGN KEY (`ID_Needy`) REFERENCES `needy` (`ID_Needy`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `organization`
--
ALTER TABLE `organization`
  ADD CONSTRAINT `R7` FOREIGN KEY (`ID_Type`) REFERENCES `type` (`ID_Type`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `R8` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `organization_vacancy`
--
ALTER TABLE `organization_vacancy`
  ADD CONSTRAINT `R21` FOREIGN KEY (`ID_Vacancy`) REFERENCES `vacancy` (`ID_Vacancy`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `R22` FOREIGN KEY (`ID_Organization`) REFERENCES `organization` (`ID_Organization`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `paragraph`
--
ALTER TABLE `paragraph`
  ADD CONSTRAINT `R17` FOREIGN KEY (`ID_Event`) REFERENCES `vacancy` (`ID_Vacancy`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `personal_skillls`
--
ALTER TABLE `personal_skillls`
  ADD CONSTRAINT `R18` FOREIGN KEY (`ID_Volonteer`) REFERENCES `volonteer` (`ID_Volonteer`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `socail_protection`
--
ALTER TABLE `socail_protection`
  ADD CONSTRAINT `R20` FOREIGN KEY (`ID_Direction`) REFERENCES `direction` (`ID_Direction`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `vacancy`
--
ALTER TABLE `vacancy`
  ADD CONSTRAINT `R25` FOREIGN KEY (`ID_Participation`) REFERENCES `participation` (`ID_Participation`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `R27` FOREIGN KEY (`ID_Priority`) REFERENCES `priority` (`ID_Priority`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `vacancy_direction`
--
ALTER TABLE `vacancy_direction`
  ADD CONSTRAINT `R11` FOREIGN KEY (`ID_Direction`) REFERENCES `direction` (`ID_Direction`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `R12` FOREIGN KEY (`ID_Event`) REFERENCES `vacancy` (`ID_Vacancy`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `vacancy_week`
--
ALTER TABLE `vacancy_week`
  ADD CONSTRAINT `R15` FOREIGN KEY (`ID_Day`) REFERENCES `week` (`ID_Day`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `R16` FOREIGN KEY (`ID_Event`) REFERENCES `vacancy` (`ID_Vacancy`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `volonteer`
--
ALTER TABLE `volonteer`
  ADD CONSTRAINT `R1` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `R26` FOREIGN KEY (`ID_Participation`) REFERENCES `participation` (`ID_Participation`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `R4` FOREIGN KEY (`ID_Employment`) REFERENCES `employment` (`ID_Employment`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `R5` FOREIGN KEY (`ID_Size`) REFERENCES `size` (`ID_Size`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `R6` FOREIGN KEY (`ID_Passport`) REFERENCES `passport` (`ID_Passport`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `volonteer_direction`
--
ALTER TABLE `volonteer_direction`
  ADD CONSTRAINT `R2` FOREIGN KEY (`ID_Direction`) REFERENCES `direction` (`ID_Direction`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `R3` FOREIGN KEY (`ID_Volonteer`) REFERENCES `volonteer` (`ID_Volonteer`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `volonteer_week`
--
ALTER TABLE `volonteer_week`
  ADD CONSTRAINT `R14` FOREIGN KEY (`ID_Day`) REFERENCES `week` (`ID_Day`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `R9` FOREIGN KEY (`ID_Volonteer`) REFERENCES `volonteer` (`ID_Volonteer`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2023 a las 00:24:22
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grammar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wh_question`
--

CREATE TABLE `wh_question` (
  `id` int(10) NOT NULL,
  `question_type` varchar(50) NOT NULL,
  `name_in_english` varchar(200) NOT NULL,
  `name_in_spanish` varchar(200) NOT NULL,
  `success` int(10) NOT NULL,
  `failures` int(10) NOT NULL,
  `average` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `wh_question`
--

INSERT INTO `wh_question` (`id`, `question_type`, `name_in_english`, `name_in_spanish`, `success`, `failures`, `average`) VALUES
(1, 'Where', 'Where is the dog?', '¿Dónde está el perro?', 0, 0, 0),
(2, 'Where', 'Where were you last night?', '¿Dónde estabas anoche?', 0, 0, 0),
(3, 'Where', 'Where do you live?', '¿Dónde vives?', 0, 0, 0),
(4, 'Where', 'Where did you go on vacation?', '¿A dónde fuiste de vacaciones?', 0, 0, 0),
(5, 'Where', 'Where did you meet your best friend?', '¿Dónde conociste a tu mejor amigo?', 0, 0, 0),
(6, 'Where', 'Where are you working now?', '¿Dónde estás trabajando ahora?', 0, 0, 0),
(7, 'Where', 'Where do you want to eat tonight?', '¿Dónde quieres comer esta noche?', 0, 0, 0),
(8, 'Where', 'Where are your keys?', '¿Dónde están tus llaves?', 0, 0, 0),
(9, 'Where', 'Where is the nearest gas station?', '¿Dónde está la estación de servicio más cercana?', 0, 0, 0),
(10, 'Where', 'Where did you study?', '¿Dónde estudiaste?', 0, 0, 0),
(11, 'What', 'What am I going to do?', '¿Qué voy a hacer?', 0, 0, 0),
(12, 'What', 'What are you having for dinner?', '¿Qué vas a tener para cena?', 0, 0, 0),
(13, 'What', 'What is he/she looking for?', '¿Qué está buscando él/ella?', 0, 0, 0),
(14, 'What', 'What is it made of?', '¿De qué está hecho?', 0, 0, 0),
(15, 'What', 'What are we going to do today?', '¿Qué vamos a hacer hoy?', 0, 0, 0),
(16, 'What', 'What are they planning to do?', '¿Qué planean hacer ellos?', 0, 0, 0),
(17, 'What', 'What is this/that going to be used for?', '¿Para qué se va a usar esto/ese?', 0, 0, 0),
(18, 'What', 'What were you thinking of?', '¿En qué estabas pensando?', 0, 0, 0),
(19, 'What', 'What was he/she talking about?', '¿De qué estaba hablando él/ella?', 0, 0, 0),
(20, 'What', 'What have you been thinking of doing?', '¿En qué has estado pensando de hacer?', 0, 0, 0),
(21, 'Who', 'Who are you going to the party with?', '¿Con quién vas a la fiesta?', 0, 0, 0),
(22, 'Who', 'Who did you see at the movies?', '¿A quién viste en el cine?', 0, 0, 0),
(23, 'Who', 'Who is the best basketball player of all time?', '¿Quién es el mejor jugador de baloncesto de todos los tiempos?', 0, 0, 0),
(24, 'Who', 'Who will be the next president?', '¿Quién será el próximo presidente?', 0, 0, 0),
(25, 'Who', 'Who has the highest score in the game?', '¿Quién tiene la puntuación más alta en el juego?', 0, 0, 0),
(26, 'Who', 'Who does he play soccer with every Saturday?', '¿Con quién juega al fútbol cada sábado?', 0, 0, 0),
(27, 'Who', 'Who can solve this math problem?', '¿Quién puede resolver este problema de matemáticas?', 0, 0, 0),
(28, 'Who', 'Who are you inviting to your birthday party?', '¿A quién estás invitando a tu fiesta de cumpleaños?', 0, 0, 0),
(29, 'Who', 'Who has been to Japan before?', '¿Quién ha estado en Japón antes?', 0, 0, 0),
(30, 'Who', 'Who will be the winner of the contest?', '¿Quién será el ganador del concurso?', 0, 0, 0),
(31, 'When', 'When will you finish your homework?', '¿Cuándo terminarás tus deberes?', 0, 0, 0),
(32, 'When', 'When does the train leave the station?', '¿Cuándo sale el tren de la estación?', 0, 0, 0),
(33, 'When', 'When will they arrive at the airport?', '¿Cuándo llegarán al aeropuerto?', 0, 0, 0),
(34, 'When', 'When did you wake up this morning?', '¿Cuándo te despertaste esta mañana?', 0, 0, 0),
(35, 'When', 'When is your birthday?', '¿Cuándo es tu cumpleaños?', 0, 0, 0),
(36, 'When', 'When will the movie start?', '¿Cuándo comienza la película?', 0, 0, 0),
(37, 'When', 'When does the store close?', '¿A qué hora cierra la tienda?', 0, 0, 0),
(38, 'When', 'When did you graduate from high school?', '¿Cuándo te graduaste de la escuela secundaria?', 0, 0, 0),
(39, 'When', 'When are you going on vacation?', '¿Cuándo vas de vacaciones?', 0, 0, 0),
(40, 'When', 'When will the game end?', '¿Cuándo terminará el juego?', 0, 0, 0),
(41, 'Why', 'Why does he study English every day?', '¿Por qué él estudia inglés todos los días', 0, 0, 0),
(42, 'Why', 'Why did she leave early?', '¿Por qué ella se fue temprano', 0, 0, 0),
(43, 'Why', 'Why does the dog bark so much?', '¿Por qué el perro ladra tanto', 0, 0, 0),
(44, 'Why', 'Why did the cat scratch the couch?', '¿Por qué el gato raspó el sofá', 0, 0, 0),
(45, 'Why', 'Why do the birds fly south in winter?', '¿Por qué los pájaros vuelan al sur en invierno', 0, 0, 0),
(46, 'Why', 'Why did the children go to the park?', '¿Por qué los niños fueron al parque', 0, 0, 0),
(47, 'Why', 'Why does the sun rise in the east?', '¿Por qué el sol sale en el este', 0, 0, 0),
(48, 'Why', 'Why did the power go out?', '¿Por qué se fue la luz', 0, 0, 0),
(49, 'Why', 'Why do we have to pay taxes?', '¿Por qué tenemos que pagar impuestos', 0, 0, 0),
(50, 'Why', 'Why did the train arrive late?', '¿Por qué el tren llegó tarde', 0, 0, 0),
(51, 'How', 'How do you feel today?', '¿Cómo te sientes hoy?', 0, 0, 0),
(52, 'How', 'How does she know the answer?', '¿Cómo ella sabe la respuesta?', 0, 0, 0),
(53, 'How', 'How can you help me?', '¿Cómo puedes ayudarme?', 0, 0, 0),
(54, 'How', 'How does the machine work?', '¿Cómo funciona la máquina?', 0, 0, 0),
(55, 'How', 'How has your day been?', '¿Cómo ha sido tu día?', 0, 0, 0),
(56, 'How', 'How do you make coffee?', '¿Cómo haces café?', 0, 0, 0),
(57, 'How', 'How can we fix this problem?', '¿Cómo podemos solucionar este problema?', 0, 0, 0),
(58, 'How', 'How does this technology work?', '¿Cómo funciona esta tecnología?', 0, 0, 0),
(59, 'How', 'How are you feeling today?', '¿Cómo te sientes hoy?', 0, 0, 0),
(60, 'How', 'How did you get here?', '¿Cómo llegaste aquí?', 0, 0, 0),
(61, 'How much', 'How much does it cost?', '¿Cuánto cuesta?', 0, 0, 0),
(62, 'How much', 'How much did it cost?', '¿Cuánto costó?', 0, 0, 0),
(63, 'How much', 'How much does she make?', '¿Cuánto gana ella?', 0, 0, 0),
(64, 'How much', 'How much did he pay?', '¿Cuánto pagó él?', 0, 0, 0),
(65, 'How much', 'How much time do we have?', '¿Cuánto tiempo tenemos?', 0, 0, 0),
(66, 'How much', 'How much fuel do we need?', '¿Cuánta gasolina necesitamos?', 0, 0, 0),
(67, 'How much', 'How much do you weigh?', '¿Cuánto pesas?', 0, 0, 0),
(68, 'How much', 'How much does the car weigh?', '¿Cuánto pesa el coche?', 0, 0, 0),
(69, 'How much', 'How much does the dress cost?', '¿Cuánto cuesta el vestido?', 0, 0, 0),
(70, 'How much', 'How much money did you spend?', '¿Cuánto dinero gastaste?', 0, 0, 0),
(71, 'How many', 'How many books have you read?', '¿Cuántos libros has leído?', 0, 0, 0),
(72, 'How many', 'How many students are in your class?', '¿Cuántos estudiantes hay en tu clase?', 0, 0, 0),
(73, 'How many', 'How many times have you been to New York?', '¿Cuántas veces has estado en Nueva York?', 0, 0, 0),
(74, 'How many', 'How many siblings do you have?', '¿Cuántos hermanos tienes?', 0, 0, 0),
(75, 'How many', 'How many hours do you sleep per night?', '¿Cuántas horas duermes por noche?', 0, 0, 0),
(76, 'How many', 'How many countries have you visited?', '¿Cuántos países has visitado?', 0, 0, 0),
(77, 'How many', 'How many languages do you speak?', '¿Cuántos idiomas hablas?', 0, 0, 0),
(78, 'How many', 'How many cups of coffee do you drink per day?', '¿Cuántas tazas de café tomas al día?', 0, 0, 0),
(79, 'How many', 'How many pets do you have?', '¿Cuántos animales de compañía tienes?', 0, 0, 0),
(80, 'How many', 'How many times have you eaten pizza?', '¿Cuántas veces has comido pizza?', 0, 0, 0),
(81, 'To Be', 'Do you have time for lunch?', '¿Tienes tiempo para el almuerzo?', 0, 0, 0),
(82, 'To Be', 'Can you play the piano?', '¿Puedes tocar el piano?', 0, 0, 0),
(83, 'To Be', 'Will they arrive tomorrow?', '¿Llegarán mañana?', 0, 0, 0),
(84, 'To Be', 'Have you seen that movie?', '¿Has visto esa película?', 0, 0, 0),
(85, 'To Be', 'Is she going to the party?', '¿Va ella a la fiesta?', 0, 0, 0),
(86, 'To Be', 'Shall we go for a walk?', '¿Podemos dar un paseo?', 0, 0, 0),
(87, 'To Be', 'Would you like a cup of tea?', '¿Te gustaría una taza de té?', 0, 0, 0),
(88, 'To Be', 'Should I bring my umbrella?', '¿Debería llevar mi paraguas?', 0, 0, 0),
(89, 'To Be', 'Can he swim?', '¿Puede él nadar?', 0, 0, 0),
(90, 'To Be', 'May I use your bathroom?', '¿Puedo usar tu baño?', 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `wh_question`
--
ALTER TABLE `wh_question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `wh_question`
--
ALTER TABLE `wh_question`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.26 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.3.0.5051
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para pokemonbd
CREATE DATABASE IF NOT EXISTS `pokemonbd` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pokemonbd`;

-- Volcando estructura para tabla pokemonbd.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `Id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(30) NOT NULL,
  `name_category` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla pokemonbd.categoria: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`Id_categoria`, `nombre_categoria`, `name_category`) VALUES
	(1, 'Actualizaciones', 'Updates'),
	(2, 'Sucesos', 'Events'),
	(3, 'Trucos', 'Cheats');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Volcando estructura para tabla pokemonbd.noticia
CREATE TABLE IF NOT EXISTS `noticia` (
  `Id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `texto` varchar(500) NOT NULL,
  `text` varchar(500) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`Id_noticia`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla pokemonbd.noticia: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `noticia` DISABLE KEYS */;
INSERT INTO `noticia` (`Id_noticia`, `titulo`, `title`, `imagen`, `texto`, `text`, `fecha`) VALUES
	(1, 'Nuevos Pokémon', 'News Pokémon', 'nuevospokemon.png', 'Hasta ahora solo han sido posible capturar a 142 Pokémon de la primera generación, aquellos que formaban parte de los juegos originales para Game Boy, pero los creadores de la aplicación ya piensan en la llegada de los nuevos Pokémon que aparecieron posteriormente. " Mas allá de la primera generación , hay algunos otros que también llegaran a nuestro universo", ha dicho Hanke ante un público ávido de novedades. El CEO de Niantic no ha dado fechas concretas sobre la llegada de los nuevos Pokémon ', 'So far they have only been able to capture 142 Pokémon from the first generation, those who were part of the original games for Game Boy, but the creators of the application already thinking about the arrival of the new Pokémon that appeared later. "Beyond the first generation, there are some others who came to our universe," said Hanke before an audience eager for news. Niantic CEO has not given specific dates on the arrival of the new Pokémon', '2016-07-05'),
	(2, 'Más usos a las Poke paradas', 'More utilities for the Poke Stops', 'Pokeparada.png', 'Buscar nuevas formas de interactuar con las Poké Paradas es otro de los frentes en los que están trabajando los responsables del juego.uno de estos usos podría ser convertir las Poké Paradas en Centros Pokémon', 'Find new ways to interact with the Poké Paradas is another front where they are working those responsible for the juego.uno of these uses would be to convert the Poké Stops Pokémon Centers', '2016-07-05'),
	(3, 'Desvelados los líderes de cada equipo', 'Relieved leaders of each team', 'lideres.png', 'La multitudinaria ponencia de John Hanke en la Comic Con también ha servido para conocer el aspecto de los líderes de los tres principales equipos de Pokémon Go. Hanke ha desvelado que no habían mostrado el aspecto de Candela, Blanch y Spark hasta ahora porque, simplemente, no lo tenían acabado cuando el juego se publicó el pasado 5 de julio', 'The multitudinous presentation by John Hanke at Comic Con also has served to make the appearance of the leaders of the three main teams of Pokémon Go. Hanke has revealed that they had not shown the appearance of Candela, Blanch and Spark so far because, simply, they had not finished when the game was released on July 5', '2016-07-06'),
	(4, 'Intercambio de Pokémon entre jugadores', 'Pokémon exchange between players', 'pokemongo.png', 'Otra de las novedades que Hanke ha puesto sobre la mesa es la tan demandada posibilidad de poder intercambiar Pokémon con otros jugadores . El intercambio de criaturas siempre ha sido uno de las características fundamentales de Pokémon en sus versiones para consola, por este motivo no son pocos los usuarios de la app que están pidiendo que se añada esta opción a Pokémon Go.', 'Another new feature that Hanke has put on the table is the possibility of responding as trade Pokémon with other players. The exchange of creatures has always been one of the fundamental characteristics of Pokémon in versions for console, for this reason there are few users of the app they are asking that this option be added to Pokémon Go.', '2016-07-06'),
	(5, 'Mujer descubre infidelidad gracias a Pokémon', 'Women discovers infidelity by Pokémon', 'infidelidad.png', 'Una mujer descubre infidelidad de su pareja gracias a esta app de juego, ya que la localización GPS que usa el videojuego dejó al descubierto al traidor. El sistema que utiliza el juego dejo en evidencia que su pareja había estado en la casa de su anterior novia. La mujer, actual exnovia del traidor lo descubrió porque entro al juego y vio el recorrido que había hecho su novio. Y para más colmo, él  había capturado un pokémon mientras se encontraba en la casa de su exnovia.', 'A woman discovers infidelity of her partner thanks to this app game, because the GPS location using the videogame uncovered the traitor. The system using the game made it clear that his partner had been in the house of his former girlfriend. The woman, now ex-girlfriend discovered the traitor because he entered the game and saw the path he had done her boyfriend. And to make matters worse, he had caught a pokémon while he was in the house of his ex-girlfriend.', '2016-06-14'),
	(6, 'Accidente jugando a Pokémon GO ', 'Accident because he was playing Pokémon', 'accidente.png', 'Un joven llamado Lamar Hickson, de 26 años de edad, tuvo un grave accidente debido a que mientras conducía estaba jugando con la aplicación Pokémon GO, concretamente intentado capturar a un pokémon llamado Pikachu para agregarlo a su colección y por lo tanto, subir de nivel. Él mismo lo admitió frente a las autoridades y a causa de ello fue uno de los peores accidentes de carrera registrado hasta el momento en Massachusetts.', 'A young man named Lamar Hickson, 26 years old, had a serious accident because while driving was playing with Pokémon GO application, specifically tried to capture a Pokemon named Pikachu to add to your collection and therefore level up . He himself admitted before the authorities and because it was one of the worst racing accidents recorded so far in Massachusetts.', '2016-06-14'),
	(7, 'Australia impide jugar a Pokémon en algunas instal', 'Australia keeps playing Pokémon in some installati', 'australia.png', 'En Australia, concretamente en la comunidad de Darwin, la policía pidió a los jugadores de esta aplicación que no entrarán a las instalaciones como por ejemplo: parques, museos, estaciones de metros y trenes; entre otros lugares más; a capturar personajes del videojuego. Esta prohibición es para evitar casos en los que las personas puedan meterse en diferentes problemas, ya que están más centradas en mirar la pantalla que en lo que pasa a su alrededor.', 'In Australia, particularly in the community of Darwin, police asked the players of this application will not enter the facilities such as: parks, museums, metro stations and trains; among other places more; to capture video game characters. This prohibition is to avoid cases where people can get into different problems, as they are more focused on looking at the screen than what happens around them.', '2016-06-14'),
	(8, 'Un usuario es dirigido por la aplicación a un fune', 'User is managed by the application to a funeral', 'funeral.png', 'Otro caso extraño y curioso es que un usuario fue dirigido por la aplicación gracias a su sistema de geolocalización a un funeral para capturar a un pokémon, sin duda alguna un lugar muy poco adecuado para jugar.', 'Another strange and curious case is that a user was directed by the application thanks to geolocation system to a funeral to catch a pokémon certainly a very unsuitable place to play.', '2016-06-14'),
	(9, 'Encuentra el cadáver de un hombre jugando a Pokémo', 'Find the corpse of a man playing Pokémon', 'cadaver.png', 'Último caso y no por ello menos importante, es el de una chica llamada Shayla Wiggins, de 19 años de edad, fanática de esta nueva plataforma se dirigía al río Wind River, ubicado en Estados Unidos, para capturar algún pokémon de agua. Resulta y acontece que lo que encuentra es un cadáver de un hombre. Según un reporte de una agencia de noticias “County 10”, el cadáver llevaba en el río menos de 24 horas.', 'Last case and not least important, is that of a girl named Shayla Wiggins, 19-year-old fan of this new platform to Wind River, located in the United States, to capture some water pokémon was going. It happens and what is a corpse of a man. According to a report from a news agency "County 10", the body had been in the river less than 24 hours.', '2016-06-14'),
	(10, 'Capturar a Pikachu', 'Capture Pikachu', 'pikachu.png', 'Pikachu es un pokémon que los usuarios suelen tener unas grandes ansias de tener en su pokedex, y es por ello que es de los pokémon más difíciles de conseguir, atentos a este truco: Al comienzo de empezar a jugar se os acercarán tres pokémons y podréis capturar uno de los tres. Sin embargo, en vez de capturar a los 3 que se os acercan, que son Charmander, Bulbasaur y Squirtle, os tendréis que dar unas 4 vueltas apartándoos un poco de esos pokémons y os aparecerá Pikachu a lado de los 3 pokémons ', 'Pikachu is a Pokemon that users often have a great craving to have in your Pokedex, and that is why is the hardest Pokemon to get, watch this trick: At the beginning you start playing it shall come near three pokémons and you can capture one of three. However, instead of capturing 3 that you come, you are Charmander, Bulbasaur and Squirtle, you will have to give about 4 laps turned aside a little of those pokémons and Pikachu will appear next to 3 pokémons', '2016-08-01'),
	(11, 'Evolucionar a los Pokémon mucho más rápido', 'Evolve faster Pokémon', 'evolucion.png', 'A partir de ese momento, cuando tengáis al deseado Pikachu debéis capturar a todos los pokémons que os encontréis para después utilizar el sencillo truco que os digo a continuación.', 'From that moment, when you have the desired Pikachu you must capture all the pokémons that you meet and then use the simple trick that I say below.', '2016-08-01'),
	(12, 'Más Pokémons en parkings, gasolineras y parques', 'More Pokémons in parking lots , gas stations and p', 'parkings.png', 'Está comprobado que donde más pokémons podemos encontrar es cuando estamos cerca de un parking, de una gasolinera o un parque. No lo digo yo, sino que son muchos los jugadores de pokémon Go que aseguran que así es. Además suelen salir mucho más cuando algunas de las ubicaciones mencionadas coincide con ser una pokeparada.', 'It is proven that where more pokémons can find is when we are near a parking lot of a gas station or a park. I do not say, but there are many Go players pokémon to ensure that it is. They also tend to go much more when some of the locations mentioned coincides with being a pokeparada.', '2016-08-23'),
	(13, 'Al lanzar una Pokeball, dejar el dedo pulsado ', '\r\nTo throw a Pokeball , keep your finger pressed', 'dedo.png', ' Cuando se menea la Pokeball tendréis más posibilidades de atrapar el objetivo dejando pulsado el botón. Una vez se lance aparecerá un círculo que se irá haciendo más pequeño poco a poco hasta llegar a un punto en donde se podrá incrementar las opciones de captura del pokémon.Debes fijarte que al intentar atrapar a un nuevo Pokémon y pulsar para lanzar la pokeball el círculo que os menciono irá cambiando de color, ya que esto indica lo difícil que es su captura.', 'When the Pokeball bobs you will have more chances to catch the target leaving the button pressed. Once cast a circle will gradually become smaller gradually until you reach a point where it can increase capture options appear pokémon.Debes look out that when trying to catch a new Pokémon and press to launch the pokeball the I mentioned circle will change color, as this indicates how difficult it is to catch them.', '2016-08-23'),
	(14, 'Lanza la Pokeball con efecto', 'Taking effect Pokeball', 'efecto.png', 'Si hacéis círculos alrededor de la Pokeball con el dedo antes de lanzarla, vais a hacer que la Pokeball empiece a girar, lo que provocará una rotación especial que hará que sume puntos de experiencia, además de que queda genial.', 'If you do circles around the Pokeball with his finger before throwing, you\'re going to make the Pokeball begins to turn, causing a special rotation that will add experience points, plus it looks great.', '2016-08-23');
/*!40000 ALTER TABLE `noticia` ENABLE KEYS */;

-- Volcando estructura para tabla pokemonbd.not_cat
CREATE TABLE IF NOT EXISTS `not_cat` (
  `Id_noticia` int(11) NOT NULL,
  `Id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`Id_noticia`,`Id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla pokemonbd.not_cat: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `not_cat` DISABLE KEYS */;
INSERT INTO `not_cat` (`Id_noticia`, `Id_categoria`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 1),
	(5, 2),
	(6, 2),
	(7, 2),
	(8, 2),
	(9, 2),
	(10, 3),
	(11, 3),
	(12, 3),
	(13, 3),
	(14, 3);
/*!40000 ALTER TABLE `not_cat` ENABLE KEYS */;

-- Volcando estructura para tabla pokemonbd.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `Id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(50) NOT NULL,
  `contrasenya` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla pokemonbd.usuario: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`Id_usuario`, `nombre_usuario`, `contrasenya`) VALUES
	(1, 'Sergio', 'sergio');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Volcando estructura para tabla pokemonbd.valoracion
CREATE TABLE IF NOT EXISTS `valoracion` (
  `Id_usuario` int(11) NOT NULL,
  `Id_noticia` int(11) NOT NULL,
  `valor` float NOT NULL,
  PRIMARY KEY (`Id_usuario`,`Id_noticia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla pokemonbd.valoracion: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `valoracion` DISABLE KEYS */;
/*!40000 ALTER TABLE `valoracion` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

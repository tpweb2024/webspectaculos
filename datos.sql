
--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id`, `nombre`, `descripcion`, `fecha`, `tipo`) VALUES
(1, 'Rápidos y furiosos', 'Descripción de la película\r\nDescripción de la película\r\nDescripción de la película\r\n', '2024-09-15', 4),
(2, 'Cirque du Soleil', 'Descripción del espectáculo\r\nDescripción del espectáculo\r\nDescripción del espectáculo\r\n', '2024-09-16', 6),
(3, 'Soda Stereo - Me verás volver', 'Descripción del recital\r\nDescripción del recital\r\nDescripción del recital\r\n', '2024-09-17', 2),
(4, 'Genesis - Live in Rome 2007', 'Descripción del recital\r\nDescripción del recital\r\nDescripción del recital\r\n', '2024-09-18', 2),
(7, 'La Vigornia - Gira el yunke rebelde', 'Descripción del concierto\r\nDescripción del concierto\r\nDescripción del concierto\r\n', '2024-09-19', 1),
(8, 'fUZZ - Gira & Gira temporada 2024', 'Descripción del concierto\r\nDescripción del concierto\r\nDescripción del concierto\r\n', '2024-09-21', 1),
(9, 'Hasta el último hombre', 'Descripción de la película\r\nDescripción de la película\r\nDescripción de la película\r\n', '2024-09-23', 4),
(10, 'Daktari Camp', 'Descripción del circo\r\nDescripción del circo\r\nDescripción del circo\r\n', '2024-09-24', 6),
(11, 'Mamma mía!', 'Descripción del musical\r\nDescripción del musical\r\nDescripción del musical\r\n', '2024-09-24', 5),
(12, 'Moulin Rouge', 'Descripción del musical\r\nDescripción del musical\r\nDescripción del musical\r\nDescripción del musical\r\n', '2024-09-19', 5),
(13, 'No me peguen, soy Giordano', 'Descripción de la obra de teatro\r\nDescripción de la obra de teatro\r\nDescripción de la obra de teatro\r\n', '2024-09-26', 3),
(14, 'El jorobado de Notre Dame', 'Descripción de la obra de teatro\r\nDescripción de la obra de teatro\r\nDescripción de la obra de teatro\r\nDescripción de la obra de teatro\r\n', '2024-09-27', 3);


--
-- Volcado de datos para la tabla `tipoevento`
--

INSERT INTO `tipoevento` (`id`, `nombre`) VALUES
(4, 'Cine'),
(6, 'Circo'),
(1, 'Concierto'),
(5, 'Musical'),
(3, 'Obra de teatro'),
(2, 'Recital'),
(7, 'Títeres y marionetas');
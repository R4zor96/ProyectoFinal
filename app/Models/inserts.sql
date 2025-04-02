-- PELICULAS
INSERT INTO streaming (id_streaming, estatus_streaming, nombre_streaming, fecha_lanzamiento_streaming, duracion_streaming, caratula_streaming, trailer_streaming, clasificacion_streaming, sipnosis_streaming, fecha_estreno_streaming, id_genero) VALUES
(NULL, 1, 'El Padrino', '1972-03-24', '02:55:00', 'El Padrino.jpeg', 'trailer_el_padrino.mp4', 'R', 'La saga de una familia del crimen organizado en Nueva York.', '1972-03-24', 1),
(NULL, 1, 'Titanic', '1997-12-19', '03:14:00', 'Titanic.jpeg ', 'trailer_titanic.mp4', 'PG-13', 'Romance trágico a bordo del famoso transatlántico.', '1997-12-19', 2),
(NULL, 1, 'El Señor de los Anillos: La Comunidad del Anillo', '2001-12-19', '02:58:00', 'El Señor de los AnillosLa Comunidad del Anillo.jpeg', 'trailer_lotr1.mp4', 'PG-13', 'Un hobbit emprende una misión para destruir un anillo poderoso.', '2001-12-19', 3),
(NULL, 1, 'Matrix', '1999-03-31', '02:16:00', 'Matrix.jpeg', 'trailer_matrix.mp4', 'R', 'Un hacker descubre la verdad sobre su realidad.', '1999-03-31', 4),
(NULL, 1, 'Forrest Gump', '1994-07-06', '02:22:00', 'Forrest Gump.jpeg', 'trailer_forrest_gump.mp4', 'PG-13', 'La vida de un hombre con un coeficiente intelectual bajo que influye en eventos históricos.', '1994-07-06', 5),
(NULL, 1, 'Inception', '2010-07-16', '02:28:00', 'Inception.jpeg ', 'trailer_inception.mp4', 'PG-13', 'Un ladrón que roba información infiltrándose en el subconsciente.', '2010-07-16', 6),
(NULL, 1, 'Pulp Fiction', '1994-10-14', '02:34:00', ' Pulp Fiction.jpeg', 'trailer_pulp_fiction.mp4', 'R', 'Historias entrelazadas de crimen en Los Ángeles.', '1994-10-14', 7),
(NULL, 1, 'Avatar', '2009-12-18', '02:42:00', 'Avatar.jpeg', 'trailer_avatar.mp4', 'PG-13', 'Un marine parapléjico en una misión en la luna Pandora.', '2009-12-18', 8),
(NULL, 1, 'El Rey León', '1994-06-24', '01:29:00', 'ElreyLeon.jpg ', 'trailer_el_rey_leon.mp4', 'G', 'Un joven león huye de su reino tras la muerte de su padre.', '1994-06-24', 9),
(NULL, 1, 'Jurassic Park', '1993-06-11', '02:07:00', 'Jurassic Park.jpeg', 'trailer_jurassic_park.mp4', 'PG-13', 'Un parque temático con dinosaurios clonados se convierte en una pesadilla.', '1993-06-11', 10);

-- SERIES
INSERT INTO streaming (id_streaming, estatus_streaming, nombre_streaming, fecha_lanzamiento_streaming, temporadas_streaming, caratula_streaming, trailer_streaming, clasificacion_streaming, sipnosis_streaming, fecha_estreno_streaming, id_genero) VALUES
(NULL, 1, 'A todos los chicos de los que me enamoré', '2018-08-17', 3, 'ATodosloschicosdelosquemeenamore.jpeg', 'trailer_a_todos_los_chicos.mp4', 'TV- 16', 'La vida de Lara Jean se descontrola cuando las cartas de amor secretas que escribió a sus enamorados son enviadas misteriosamente.', '2018-08-17', 11),
(NULL, 1, 'Breaking Bad', '2008-01-20', 5, 'Breaking Bad.jpeg', 'trailer_breaking_bad.mp4', 'TV-MA', 'Un profesor de química se convierte en fabricante de metanfetaminas tras ser diagnosticado con cáncer.', '2008-01-20', 12),
(NULL, 1, 'Juego de Tronos', '2011-04-17', 8, 'Juego de Tronos.jpeg', 'trailer_game_of_thrones.mp4', 'TV-MA', 'Nobles familias luchan por el control del Trono de Hierro en los Siete Reinos de Westeros.', '2011-04-17', 13),
(NULL, 1, 'Stranger Things', '2016-07-15', 4, 'StrangerThings.jpeg', 'trailer_stranger_things.mp4', 'TV-14', 'Un grupo de amigos en los años 80 enfrenta sucesos sobrenaturales en su pequeña ciudad.', '2016-07-15', 14),
(NULL, 1, 'The Crown', '2016-11-04', 4, 'TheCrown.jpeg', 'trailer_the_crown.mp4', 'TV-MA', 'Crónica de la vida de la Reina Isabel II desde su boda en 1947 hasta la actualidad.', '2016-11-04', 15),
(NULL, 1, 'La Casa de Papel', '2017-05-02', 5, 'La Casa de Papel.jpeg', 'trailer_la_casa_de_papel.mp4', 'TV-MA', 'Un grupo de criminales planea y ejecuta el asalto a la Fábrica Nacional de Moneda y Timbre de España.', '2017-05-02', 16),
(NULL, 1, 'Friends', '1994-09-22', 10, 'Friends.jpeg ', 'trailer_friends.mp4', 'TV-14', 'Seis amigos navegan por las complejidades de la vida y el amor en Nueva York.', '1994-09-22', 17),
(NULL, 1, 'The Office', '2005-03-24', 9, 'The Office.jpeg', 'trailer_the_office.mp4', 'TV-14', 'Una mirada humorística al día a día de los empleados de una oficina de suministros de papel.', '2005-03-24', 18),
(NULL, 1, 'Sherlock', '2010-07-25', 4, 'Sherlock.jpeg ', 'trailer_sherlock.mp4', 'TV-14', 'Adaptación moderna de las historias de Sherlock Holmes, el famoso detective de Baker Street.', '2010-07-25', 19),
(NULL, 1, 'The Mandalorian', '2019-11-12', 3, 'The Mandalorian.jpeg', 'trailer_the_mandalorian.mp4', 'TV-14', 'Un cazarrecompensas solitario navega por los confines de la galaxia, lejos de la autoridad de la Nueva República.', '2019-11-12', 20);

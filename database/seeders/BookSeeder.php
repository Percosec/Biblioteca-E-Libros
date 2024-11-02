<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $book = new Book();
        $book->title = "El Señor de los Anillos";
        $book->author = "J.R.R. Tolkien";
        $book->description = "Reedición recopilatoria de la saga.Los Anillos de Poder fueron forjados en antiguos tiempos por los herreros Elfos, y Sauron, el Señor Oscuro, forjó el Anillo Único. Pero en una ocasión se lo quitaron, y aunque lo buscó por toda la Tierra Media nunca pudo encontrarlo.";
        $book->image = null;
        $book->price = 247.83;
        $book->save();

        $book2 = new Book();
        $book2->title = "La Metamorfosis";
        $book2->author = "Franz Kafka";
        $book2->description = "Al despertar Gregorio Samsa una mañana, tras un sueño intranquilo, se encontró en su cama convertido en un monstruoso insecto. Tal es el abrupto comienzo, que nos sitúa de raíz bajo unas reglas distintas, de La metamorfosis, sin duda alguna la obra de Franz Kafka que ha alcanzado mayor celebridad.";
        $book2->image = null;
        $book2->price = 59.17;
        $book2->save();


        $book3 = new Book();
        $book3->title = "Invitacion al viaje y otros cuentos ineditos";
        $book3->author = "Julio Ramón Ribeyro";
        $book3->description = "Julio Ramón Ribeyro es el mayor cuentista de la literatura peruana, por lo que la publicación de Invitación al viaje y otros cuentos inéditos configura un auténtico acontecimiento literario.";
        $book3->image = null;
        $book3->price = 57.23;
        $book3->save();
        

        $book4 = new Book();
        $book4->title = "En agosto nos vemos";
        $book4->author = "Gabriel García Márquez";
        $book4->description = "Cada mes de agosto Ana Magdalena Bach toma el transbordador hasta la isla donde está enterrada su madre para visitar la tumba en la que yace. Esas visitas acaban suponiendo una irresistible invitación a convertirse en una persona distinta durante una noche al año.";
        $book4->image = null;
        $book4->price = 57.23;
        $book4->save();

        $book5 = new Book();
        $book5->title = "Shogun";
        $book5->author = "James Clavell";
        $book5->description = "La clásica novela épica sobre el Japón feudal que cautivó el corazón de una cultura y la imaginación del mundo, escrita por James Clavell, autor best seller de The New York Times y maestro sin parangón de la ficción histórica.";
        $book5->image = null;
        $book5->price = 89.95;
        $book5->save();

        $book6 = new Book();
        $book6->title = "100 grandes triunfos. Épicos partidos en cien años de garra";
        $book6->author = "Varios Autores";
        $book6->description = "Es un emocionante repaso por los cien años de historia del Club Universitario de Deportes. Gracias a informaciones, anécdotas, reflexiones, datos y fotografías inéditas, once cronistas deportivos identificados con la U narran, con buen estilo, los cien triunfos de gloria y garra del equipo crema.";
        $book6->image = null;
        $book6->price = 46.56;
        $book6->save();

        $book7 = new Book();
        $book7->title = "El Libro de Bill";
        $book7->author = "Alex Hirsch";
        $book7->description = "El demonio que aterrorizó Gravity Falls está de vuelta desde el más allá para contar por fin su versión de la historia en El libro de Bill, escrito nada menos que por el mismísimo Bill Clave.";
        $book7->image = null;
        $book7->price = 46.56;
        $book7->save();

        $book8 = new Book();
        $book8->title = "El Perfil del Lagarto";
        $book8->author = "Carlos Paredes";
        $book8->description = "El perfil de uno de los actores políticos más polémicos de la escena nacional que propició el destape del vacunagate peruano, el caso de corrupción más grande de los últimos tiempos.";
        $book8->image = null;
        $book8->price = 38.70;
        $book8->save();

        $book9 = new Book();
        $book9->title = "El Sistema Financiero en el Perú, Historia y Numismática";
        $book9->author = "María Greiss";
        $book9->description = "El objetivo principal de esta obra es compartir conocimiento histórico de nuestra moneda, de la riqueza cultural impregnada en ella, recogiendo el antes, durante, hasta llegar al sistema financiero actual, partiendo desde el nacimiento de la banca en el mundo, pasando por las monedas virreinales, monedas de la emancipación, la banca libre antes del BCRP, durante el BCRP y llegando a la actual familia de billetes y monedas que tenemos en circulación, asimismo, se explica el funcionamiento del sistema financiero peruano y como contribuye al desarrollo de nuestro país, temas esenciales como la intermediación financiera, operatividad de los productos, el crédito, riesgos crediticios del mercado financiero, garantías reales y personales, también se muestran imágenes inéditas para el disfrute visual del lector, en esencia este libro será de gran utilidad para las personas que inicien su camino en esta especialidad o como conocimiento general ya que aportará a su background cultural, finalmente esta obra se ha realizado con fineza y cuidando cada detalle.";
        $book9->image = null;
        $book9->price = 116.40;
        $book9->save();

        $book10 = new Book();
        $book10->title = "El Último Dictador";
        $book10->author = "Godoy, José";
        $book10->description = "Así lo entiende el autor de este libro, José Alejandro Godoy, quien, mediante una pormenorizada investigación periodística y bibliográfica, da cuenta de los manejos del poder durante una década de violencia, corrupción y autoritarismo, cuyos efectos pueden rastrearse aún en nuestra época. Más que un análisis político de los años noventa en el Perú, El último dictador está concebido como un exhaustivo relato de los hechos más significativos de la vida y del gobierno de Alberto Fujimori. Un ejercicio de memoria histórica donde los lectores serán quienes saquen sus propios juicios de valor sobre los diez años en que nos extraviamos del camino hacia la democracia.";
        $book10->image = null;
        $book10->price = 66.93;
        $book10->save();

        $book11 = new Book();
        $book11->title = "El Cuervo";
        $book11->author = "Edgar Allan Poe";
        $book11->description = "El presente volumen recoge este y otros de sus poemas más célebres en una edición bilingüe que brinda al lector una oportunidad de disfrutar de la musicalidad, la métrica y la rima originales. El libro incluye un desplegable del poema El cuervo con espléndidas ilustraciones de la artista Sara Morante que lo convierten en un extraordinario libro-objeto imprescindible para todos los amantes de Edgar Allan Poe.";
        $book11->image = null;
        $book11->price = 47.53;
        $book11->save();

        $book12 = new Book();
        $book12->title = "La Guerra de los Mundos";
        $book12->author = "H. G. Wells ";
        $book12->description = "La Tierra ha sido invadida por alienígenas, y los marcianos, con su tecnología superior, arrasan Londres y sus alrededores, sembrando muerte y destrucción allí por donde pasan. La adaptación radiofónica que Orson Welles hizo de esta novela en 1938 provocó que el público, aún desconocedor de la ficción televisiva, creyera que realmente se estaba produciendo una invasión extra- terrestre y desató una gran alarma social. Este ejemplo temprano del poder de los medios de comunicación de masas fue la primera de un sinfín de adaptaciones y reinterpretaciones que han alimentado el imaginario de lo que hoy entendemos como ciencia ficción y han encumbrado a H. G. Wells como uno de los padres del género. ";
        $book12->image = null;
        $book12->price = 75.66;
        $book12->save();


        $book13 = new Book();
        $book13->title = "ETEREO";
        $book13->author = "Joana Marcus";
        $book13->description = "Caleb no es un chico corriente. Ha tenido una vida complicada, quizá por las habilidades especiales que lo convierten, a sus ojos, en un monstruo. El destino lo ha llevado a trabajar para gente de moral dudosa, a hacer cosas que le han manchado las manos y el alma. Entonces, una de sus misiones se complica y se le asigna vigilar a Victoria, una humana tan normal como cualquier otra, con un trabajo rutinario, un apartamento pequeño y un gato extraño. Debería ser el trabajo más fácil del mundo, pero termina teniendo que elegir entre el mundo que conoce y la única persona que alguna vez le ha importado. Y tú, ¿serías capaz de enamorarte de alguien que desconoce el significado del amor?.";
        $book13->image = null;
        $book13->price = 86.33;
        $book13->save();

        $book14 = new Book();
        $book14->title = "Uzumaki";
        $book14->author = "Junji Ito";
        $book14->description = "Esta obra maestra está disponible por fin en un único integral. ¡DÉJATE CAER EN LA ESPIRAL DEL TERROR!ESPIRALES…  ESTE PUEBLO ESTÁ CONTAMINADO CON ESPIRALES… Kurouzu, un pequeño pueblo rodeado por la niebla en la costa de Japón, está maldito. Según Shûichi Saitô, el novio de la joven Kirie Goshima, su hogar está encantado, no por una persona, sino por un patrón: UZUMAKI, la espiral, el secreto hipnótico que da forma al mundo. Una obra hipnótica y mortal de Junji Ito, autor referencial en el manga seinen (adulto) de terror. Reedición en formato integral de lujo. Tomo único.";
        $book14->image = null;
        $book14->price = 127.90;
        $book14->save();

        $book15 = new Book();
        $book15->title = "Padre Rico, Padre Pobre";
        $book15->author = "Robert T. Kiyosaki";
        $book15->description = "Basado en el principio de que los bienes que generan ingreso siempre dan mejores resultados que los trabajos tradicionales, Robert Kiyosaki explica cómo pueden adquirirse dichos bienes para, eventualmente, olvidarse de trabajar. El libro #1 de finanzas personales. Con un estilo claro y ameno, este libro te pondrá en el camino directo al éxito financiero y así lograrás que el dinero trabaje para ti. Padre rico Padre pobre es el bestseller que revolucionó la forma de entender las finanzas personales. El autor y conferencista Robert Kiyosaki desarrolló una perspectiva económica única a partir de la exposición que tuvo a dos influencias: su propio padre, altamente educado pero muy inestable y el padre multimillonario, sin educación universitaria, de su mejor amigo. ";
        $book15->image = null;
        $book15->price = 76.63;
        $book15->save();

        $book16 = new Book();
        $book16->title = "Cronica de una Muerte Anunciada";
        $book16->author = "Gabriel García Márquez";
        $book16->description = "Acaso sea Crónica de una muerte anunciada la obra más realista de Gabriel García Márquez pues se basa en un hecho histórico acontecido en la tierra natal de escritor. Cuando empieza la novela ya se saber que los hermanos Vicario van a matara a Santiago Nasar de hecho ya le han matado para vengar el honor ultrajado de su hermana ángela pero el relato termina precisamente en el momento en que Santiago Nasar. El tiempo cíclico tan utilizado por García Márquez en sus obras reaparece aquí minuciosamente descompuesto en cada uno de sus momentos reconstruido prolija y exactamente por el narrador que va dando cuenta de lo que sucedió mucho tiempo atrás que avanza y retrocede en su relato y hasta llega mucho tiempo después para contar el destino de los supervivientes. La acción es a un tiempo colectiva y personal clara y ambigua y atrapa al lector desde un principio a pesar de que conoce el desenlace de la trama. La dialéctica entre mito y realidad se ve potenciada aquí una vez más por una prosa tan cargada de fascinación que las eleva hasta las fronteras de la leyenda.";
        $book16->image = null;
        $book16->price = 33.15;
        $book16->save();

        $book17 = new Book();
        $book17->title = "Don Quijote de la Mancha";
        $book17->author = "Miguel de Cervantes";
        $book17->description = "La adaptación gráfica del gran clásico de nuestra literatura.Apasionado de los libros de caballerías, el hidalgo don Quijote se cree un caballero andante y parte en busca de aventuras a lomos de su caballo Rocinante, junto a su fiel escudero Sancho Panza. Tras confundir una posada con un castillo, molinos con gigantes, y librar combates que cree heroicos, don Quijote se enfrentará por fin al famoso caballero de la Blanca Luna.Incluye un dosier final donde se presenta al autor y su obra en el contexto histórico, artístico, literario, económico y social de su época.";
        $book17->image = null;
        $book17->price = 63.05;
        $book17->save();

        $book18 = new Book();
        $book18->title = "El regreso del Huáscar";
        $book18->author = "Fernando Villarán";
        $book18->description = "En un inminente 2029, Perú y Chile vuelven a encontrarse en un conflicto que marcará la historia. La maquinaria bélica de ambos países se pone en marcha ya no por yacimientos de salitre sino por cuantiosos yacimientos de oro. Como antes, la corrupción de los políticos, los armamentos obsoletos y los intereses financieros de los inversionistas extranjeros colocan al Perú al borde de un nuevo desastre. A través de las marañas de la política exterior, de las reglas de la guerra del siglo XXI y de las apasionantes acciones militares, la novela refiere las vidas de algunos heroicos profesionales peruanos, como el historiador Ramiro Rentería y los ingenieros Rocío Andrade y Federico Seminario, que pondrán su inteligencia y su valor al servicio de la patria. En El regreso del Huáscar, Fernando Villarán consigue que las voces de la gran política y de la vida cotidiana se integren en un relato ágil, que tiene tanto de investigación histórica como de ficción política futurista.";
        $book18->image = null;
        $book18->price = 79.00;
        $book18->save();

        $book19 = new Book();
        $book19->title = "El padrino";
        $book19->author = "Mario Puzo";
        $book19->description = "La publicación de El Padrino en 1969 convulsionó el mundo literario. Por primera vez, la Mafia protagonizaba una novela y era retratada desde dentro. Mario Puzo la presentaba no como una mera asociación de facinerosos, sino como una compleja sociedad con una cultura propia y una jerarquía aceptada incluso más allá de los círculos de la delincuencia. El Padrino narra la historia de un hombre, Vito Corleone, el capo más respetado de Nueva York. Déspota benevolente, implacable con sus rivales, inteligente y fiel a los principios del honor y la amistad. Don Corleone dirige un emporio que abarca el fraude y la extorsión, los juegos de azar y el control de los sindicatos.";
        $book19->image = null;
        $book19->price = 69.00;
        $book19->save();


        $book19 = new Book();
        $book19->title = "La Divina Comedia";
        $book19->author = "Dante Alighieri";
        $book19->description = "Con La Divina Comedia, quintaesencia de la cosmovisión medieval y una de las más altas cumbres de la literatura universal, Dante hizo Poesía de la Teología. Sus versos narran la historia en el mundo material de ultratumba tal como se lo concebía en su tiempo. Esta magistral obra presenta al propio Dante en un descenso al Infierno que lo llevará finalmente al Purgatorio y el Paraíso, los tres estadios de la otra vida. En el Infierno y el Purgatorio su guía será Virgilio, el poeta latino que ya había hecho descender a Eneas al averno, mientras que quien conduzca al poeta en el Paraíso será Beatriz, la dama elegida por Dante como musa y símbolo de la Ciencia Sagrada. El mundo ultraterreno del autor es plenamente cristiano, pero no faltan referencias mitológicas y paganas, presentando a personajes como Tántalo, Lanzarote, Tristán… sufriendo el castigo eterno en alguno de los círculos. Y en un toque entre el humor y el ajuste de cuentas, también los enemigos de Dante tienen su lugar entre los impresionantes tormentos dantescos.";
        $book19->image = null;
        $book19->price = 45.00;
        $book19->save();


        $book19 = new Book();
        $book19->title = "La ciudad y los perros";
        $book19->author = "Mario Vargas Llosa";
        $book19->description = "«-Cuatro -dijo el Jaguar.» En 1962, La ciudad y los perros recibía el Premio Biblioteca Breve y unos meses más tarde era publicada tras sortear la censura franquista. Así comenzaba la andadura literaria de esta obra con la que Mario Vargas Llosa alcanzó el reconocimiento internacional y que hoy considerada una de las mejores novelas en español del siglo XX. Traducida a treinta idiomas, está ambientada en el Colegio Militar Leoncio Prado. Los protagonistas, un grupo de jóvenes que se «educan» en una disciplina militar implacable y violenta, aprenden a sobrevivir en un ambiente en el que están muy arraigados los prejuicios de raza y las diferencias entre clases sociales y económicas; donde todos se muestran como no son en realidad y la transgresión de las normas establecidas parece ser la única salida. ";
        $book19->image = null;
        $book19->price = 89.00;
        $book19->save();


        $book19 = new Book();
        $book19->title = "Plata como Cancha";
        $book19->author = "Christopher Acosta";
        $book19->description = "Este no es un perfil oficial ni una biografía autorizada. Es más bien la exposición de un proceder, de una conducta. El periodista Christopher Acosta Alfaro escarba en la narrativa que el actual candidato a la presidencia del Perú, César Acuña, ha urdido durante años tanto política como comercialmente. Y demuestra que solo su fortuna ha sido capaz de crear un sistema que compensa atropellos y silencia agraviados. Valiéndose de una exhaustiva investigación que incluye expedientes judiciales y fiscales, resoluciones gubernamentales, informes de inteligencia, acuerdos confidenciales, así como un amplio acceso al círculo más íntimo del político y empresario, el autor de Plata como cancha saca a la luz las piezas de un rompecabezas donde el poder y el dinero se solapan entre sí, en las historias que se cuentan aquí por primera vez. ";
        $book19->image = null;
        $book19->price = 49.00;
        $book19->save();


        $book19 = new Book();
        $book19->title = "HISTORIA DE LA CORRUPCIÓN EN EL PERÚ";
        $book19->author = "Alfonso Quiroz W.";
        $book19->description = "Desde una Perspectiva Histórica o de Larga Duración, el Minucioso Trabajo de Alfonso W. Quiroz, Basado en una Amplia Gama de Fuentes de Archivos y en Interpretaciones Sugerentes, Nos Presenta un País Profundamente Afectado por una Corrupción Administrativa y Estatal, que Puede Medirse Desde las Postrimerías del Periodo Colonial Hasta Nuestros Días. El Autor Describe y Analiza con Detalle el Abuso de los Recursos Públicos y Explica Cómo la Corrupción Ha Limitado el Desarrollo y el Progreso del País.";
        $book19->image = null;
        $book19->price = 40.00;
        $book19->save();

        $book20 = new Book();
        $book20->title = "Las aventuras de Robin Hood";
        $book20->author = "Roger Lancelyn";
        $book20->description = "«La de Robin Hood es una historia que jamás morirá ni dejará de prender la chispa de la imaginación. Como los cuentos de hadas de antaño, se ha de contar una y otra vez, ya que —igual que ellos— está teñida de encanto, y pocos son los que no caerán bajo su hechizo». Roger Lancelyn Green. Robin Hood, paladín de los pobres y oprimidos, se enfrenta a la crueldad del poderoso príncipe Juan y el corregidor de Nottingham para defenderlos. Acompañado de su banda de forajidos, el escurridizo ladrón se refugia en el intrincado bosque de Sherwood decidido a vencer a sus enemigos. Con ingeniosa astucia, utilizará trucos y disfraces para rescatar a los que tienen problemas, escapando una y otra vez de quienes intentan atraparlo para cobrar la cuantiosa recompensa que ofrecen a cambio de su cabeza. En este libro, publicado por primera vez en 1956, Lancelyn Green nos traslada a su país natal para recorrer de su mano los caminos de Sherwood y acompañar al arquero justiciero en sus aventuras. El autor vuelve a ejecutar su magia al reunir material de distintas épocas y tradiciones: viejos romances, baladas y obras de teatro, así como relatos de Noyes, Tennyson, Peacock, Scott y Greene. Tenemos entre manos un mosaico literario que se ha convertido en una de las obras fundamentales de la mejor literatura clásica.";
        $book20->image = null;
        $book20->price = 95.00;
        $book20->save();


        $book21 = new Book();
        $book21->title = "El Principito";
        $book21->author = "Antoine De Saint-Exupéry";
        $book21->description = "Un piloto varado en el desierto se encuentra con un hombrecito muy particular. Es el principito, dueño de un asteroide lejano y de una rosa, que hace tiempo huyó de su planeta para viajar por el espacio y que ahora, de visita en la Tierra, está listo para contar su historia de aprendizaje y amistad.";
        $book21->image = null;
        $book21->price = 79.00;
        $book21->save();

        $book22 = new Book();
        $book22->title = "Mitos y leyendas del Perú";
        $book22->author = " Carlos Garayar y Jéssica Rodríguez";
        $book22->description = "Todas las civilizaciones han generado maravillosos relatos para explicar los misterios del hombre y el mundo. Y aunque muchos de ellos han adquirido formas particulares y se pueden identificar con un pueblo en concreto, las ideas y arquetipos que subyacen a ellos son universales y parecen converger siempre en algún punto. En ese sentido, Mitos y leyendas del Perú, de Jéssica Rodríguez y Carlos Garayar, ofrece una magnífica recreación literaria de historias que, aunque gestadas en este lado del mundo, ayudan a apreciar la vida en su sentido más amplio. Este volumen contiene 24 relatos inspirados en la tradición oral, como 'La mujer mariposa', 'El yacuruna', 'La Achiqué', 'El chullachaqui', 'El oso y las pitajayas', 'El ayaymam', 'La Huacachina', 'El amaru', 'La flor de qantu', 'El pishtaco', 'Las brujas de Cachiche', 'Cuniraya Wiracocha', 'El muqui', 'El barco de Cabo Blanco', 'La sirena de Pusacocha' y 'El shapshico'.";
        $book22->image = null;
        $book22->price = 70.00;
        $book22->save();

        $book23 = new Book();
        $book23->title = "Diario";
        $book23->author = "Ana Frank";
        $book23->description = "«No quiero haber vivido para nada, como la mayoría de las personas. Quiero ser de utilidad y alegría para los que viven a mi alrededor, aun sin conocerme. ¡Quiero seguir viviendo, aun después de muerta!». Ana Frank. Este es el relato de una niña judía de trece años que escribió su diario entre el 12 de junio de 1942 y el 1 de agosto de 1944. En estas páginas, Ana cuenta su vida y la de otras siete personas judías, que, como ella, se vieron obligadas a esconderse en la Casa de atrás: una buhardilla ubicada en la parte trasera de las oficinas de su padre. Desde ese lugar, la niña describe las atrocidades y los horrores de la Segunda Guerra Mundial, así como los más estremecedores sentimientos, las más desgarradoras emociones y la absoluta precariedad en la que tenían que vivir, hasta que fueron descubiertos y llevados a diversos campos de concentración.";
        $book23->image = null;
        $book23->price = 39.90;
        $book23->save();

        $book24 = new Book();
        $book24->title = "Un mundo para Julius";
        $book24->author = "Alfredo Bryce Echenique";
        $book24->description = "Julius es un niño solitario que contempla el mundo con infinita inocencia y ternura. Mientras deambula por los salones de su gran casa o acompaña a sus parientes o altera con la servidumbre, su mirada va registrando hechos en apariencia minúsculos pero que al sumarse terminan por trazar no solo el retrato del protagonista, sino, como un inmenso fresco, el de una clase social y de toda una época. La aparición de Un mundo para Julius, en 1970, consagró tempranamente a Alfredo Bryce Echenique como uno de los grandes escritores de nuestro idioma. La belleza y fluidez de su prosa, la sencillez magistral de la trama y el diseño tan humano de sus personajes fueron algunos de los elementos que contribuyeron a que, en muy poco tiempo, esta novela fuera considerada un clásico moderno de la literatura latinoamericana. Plena de humor, nostálgica, fresca, irónica, poblada por seres buenos, ingenuos o ridículos, pero siempre entrañables, Un mundo para Julius es una novela brillante, un libro imprescindible para quienes saben apreciar la buena literatura.";
        $book24->image = null;
        $book24->price = 49.00;
        $book24->save();


        $book25 = new Book();
        $book25->title = "Maldita Roma";
        $book25->author = "Santiago Posteguillo";
        $book25->description = "LA LEYENDA CONTINÚA. Tras el monumental éxito de Roma soy yo, continúa la saga sobre Julio César, narrada como sólo Posteguillo podría hacerlo. ROMA LO EXIGE TODO. EN ROMA TODO ESTÁ EN VENTA. MALDITA SEA POR SIEMPRE ROMA. Mare Internum, año 75 a. C. Un barco mercante navega rumbo a la isla de Rodas. A bordo, Julio César acompañado sólo por su fiel Labieno. Obligado por sus enemigos a exiliarse de Roma, se dirige al encuentro con el maestro Apolonio para aprender oratoria y de este modo, a su regreso, iniciar una feroz pugna para ingresar en el Senado y enfrentarse allí al temido Cicerón. Así arranca la extraordinaria segunda entrega de la saga dedicada a Julio César por Santiago Posteguillo.";
        $book25->image = null;
        $book25->price = 99.00;
        $book25->save();

        $book26 = new Book();
        $book26->title = "Simplemente Messi";
        $book26->author = "AA. VV.";
        $book26->description = "Descubre la asombrosa vida de Lionel Messi, desde sus primeros pasos en Rosario hasta convertirse en un ícono global del fútbol. Cada capítulo revela anécdotas, triunfos y desafíos que trazan el perfil de un verdadero ídolo. Acompaña a Messi en su travesía por distintas etapas, desde las victorias en el campo hasta los desafíos fuera de él. Desde su histórico paso por el Barcelona hasta su traspaso al Inter de Miami y la conquista de la cima del mundo con Argentina, este libro ofrece una inmersión completa en los momentos que han cimentado su legado como inspiración para millones en todo el planeta. Esta obra es un homenaje a la pasión, el talento y la determinación de un auténtico maestro del fútbol. Únete a nosotros en este viaje y descubre por qué Messi no es solo un jugador, sino una leyenda viviente. Esta es una oportunidad única de ser testigo de la historia de un ícono que trasciende fronteras y continúa inspirando a generaciones.";
        $book26->image = null;
        $book26->price = 20.00;
        $book26->save();

        $book27 = new Book();
        $book27->title = "Los años de Leguía (1919-1930)";
        $book27->author = "Paulo Drinot";
        $book27->description = "La Patria Nueva pretendió marcar un punto de quiebre y reinició de la vida republicana peruana. Inserto en procesos globales de modernización capitalista, fue un periodo de importantes cambios sociales, políticos y culturales. Sin embargo, más allá de la retórica, también existieron sorprendentes continuidades, que nos obligan a reevaluar el gobierno de Leguía y a considerar tanto sus antecedentes como sus consecuencias y legados.";
        $book27->image = null;
        $book27->price = 49.00;
        $book27->save();

        $book28 = new Book();
        $book28->title = "Ayacucho";
        $book28->author = "Gastón Gaviola del Rio";
        $book28->description = "Una crónica épica y humana de la campaña final que consolidó la Independencia del Perú y de América. Sabemos de memoria que José de San Martín declaró la Independencia del Perú. Pero, ¿fuimos entonces verdaderamente libres? Cuando San Martín dejó nuestro país, aún teníamos un virrey y un ejército realista que lo respaldaba. Hacía falta una campaña bélica que consolidara nuestra Independencia y, con ella, la de toda América. Había, cómo no, una tremenda crisis política. En estas páginas, su autor se ocupa del agitado camino que va desde la plaza de armas de Lima en julio de 1821 hasta las alturas heladas de la Pampa de la Quinua en diciembre de 1824, donde se llevó a cabo la cruenta batalla de Ayacucho que consolidó, por fin, la Independencia peruana. Esta es una historia llena de combates y enfrentamientos, pues no podemos entender la gesta independentista sin acudir a ellos. Gastón Gaviola no solo transmite todo lo que hubo de emocionante y de terrible en aquellos días. También dota de humanidad a los personajes involucrados en el proceso: ni héroes ni villanos, seres humanos que respondieron a la altura de las circunstancias, ya fuese por la patria, el honor o la familia.";
        $book28->image = null;
        $book28->price = 69.00;
        $book28->save();
    }
}
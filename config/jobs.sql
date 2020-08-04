-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 31 Lip 2020, 20:52
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `jobs`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `company` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `TIME` varchar(50) NOT NULL,
  `category` int(11) NOT NULL,
  `userid` int(30) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `company`, `city`, `TIME`, `category`, `userid`, `description`) VALUES
(58, 'Junior PHP Dev', 'IBM', 'Monaco', 'Full-Time', 4, 10, 'As a PHP Web Developer, you will be involved in all aspects of the software development lifecycle. We need true software engineers who are experts at what they do. A few details are listed below:'),
(59, 'Senior PHP Developer', 'IBM', 'Warsaw', 'Full-Time', 4, 10, 'The Software Development Engineer in Test will be responsible for helping drive quality deliverables within Engineering. They will help their teams cultivate a quality mindset, advocating for quality while assisting engineers with software development and test automation best practices.'),
(60, 'Mid UX Designer', 'IBM', 'New York', 'Remote', 2, 10, 'Let\'s kick things off with the design side! As our Product Designer, you\'ll be using your passion and expertise to ensure the UX designs for our driver app and dashboards are slick and user-friendly.\r\n\r\nWhether you\'re designing web interfaces or creating user flows, you\'ll find smart new ways to bring continuous improvements to the products for our Scoober\' (or driver fleet) crew.'),
(61, '(Senior) Front-end Developer', 'IBM', 'Hamburg', 'Full-Time', 1, 10, 'We are currently looking for a skilled & passionate (Senior) Frontend Developer to become part of one of our Tech Teams at ABOUT YOU!\r\n\r\nAll Tech Teams are driven by the dedication to deliver high-scalable applications shaped by a lean and intuitive user interface that ensures the best possible user experience. Your work will impact the future of how eCommerce is experienced by millions of customers.'),
(62, 'Senior JavaScript-Developer', 'IBM', 'Cologne', 'Full-Time', 3, 10, 'Thanks to our unique neural networks, DeepL is able to deliver the world’s best translation quality. In order to keep it that way, we are constantly improving our apps and adding exciting new features - and this is where your experience in developing sophisticated software comes in. In addition to the classic challenges of frontend development such as UX design, we are particularly interested in your knowledge of software design, the latest web technologies, and the design of reliable and efficient algorithms and data structures. You will be part of a highly motivated team that values top quality and efficient code. Important design decisions are made by the whole team in open discussions'),
(63, 'Jr Front-end Developer', 'IBM', 'Coburg', 'Remote', 1, 10, 'Development of the user interfaces of web applications with common frontend technologies (e.g. HTML5, CSS, React.js, Angular);Development of innovative and modular solutions (reusable and sustainable in a dynamic environment);\r\nClose cooperation with the Back-end team;'),
(64, 'Javascript Developer / UI', 'IBM', 'Hamburg', 'Remote', 3, 10, 'Entwicklung von Progressive Web Apps, Webkomponenten und Widgets vorrangig mit dem\r\nFramework Polymer 3 / LIT im Scrum Team.\r\n\r\nKonzeption und Entwurf von Webseiten, Landingpages und Mobile Apps / Responsive Designs'),
(65, 'Senior PHP Developer', 'IBM', 'San Diego', 'Full-Time', 4, 10, 'In a marketplace that has proven challenging for many companies, Site Impact has thrived, and remained one of the leading providers in data and marketing resources. As we continue to grow our client following and enhance our current product our once small family has grown into a diverse and dedicated group of over 100 industry and digital marketing professionals who play a key role in the company’s culture and our continued growth and success.'),
(66, 'Jr PHP Dev', 'IBM', 'Paris', 'Half-Time', 4, 10, 'We’re passionate about the inspirational missions of our customers and we entrust our employees and teams to deliver exceptional performance to enable the safety, security, health and well-being of our nation. We provide the tools and resources to help you be successful, and our culture fosters an environment in which idea sharing and collaboration is essential. Are you ready to make a difference?'),
(67, 'Sr. Drupal Developer', 'IBM', 'Gdansk', 'Full-Time', 4, 10, 'Working on custom software that supports Government, Education and Nonprofit organizations in utilizing the right technology for their industry and connecting organizations together.'),
(68, 'PHP Dev with JS', 'IBM', 'Alachua', 'Remote', 4, 10, 'Our well-established client in the Greater Gainesville, Florida Area is looking for a talented onsite Web Developer. Our client is a manufacturing organization with nearly a thousand employees within the Healthcare industry.'),
(69, 'UX Designer', 'IBM', 'Karlsruhe', 'Remote', 2, 10, 'Du bist UX-Consultant/Designer und hast Lust in einem interdisziplinären Team digitale Produkte mit intuitiver Nutzerführung zu konzipieren? Du bringst Talent, Empathie und Erfahrung mit? Dann lass gerne von Dir hören!'),
(70, '(Senior) UX Designer (m/w/d)', 'IBM', 'Regensburg', 'Full-Time', 2, 10, 'Es ist Deine Leidenschaft im Bereich von Digitalen Geschäftsmodellen die User Experience im Produkt und den zugehörigen Landing-Pages kontinuierlich zu optimieren? Du fühlst Dich im Endkundengeschäft (B2C) richtig wohl? Du kannst kurzweilige Design-Trends von Design-Evolution unterscheiden und Deine Erkenntnisse zielsicher und gewinnbringend in die Produkte einbringen? Darüber hinaus arbeitest Du gerne mit den aktuellsten Daten zu User-Verhalten und Klickpfaden? Wenn Du nachweislich über mindestens zwei Jahre Arbeitserfahrung im Bereich UX/UI verfügst, dann bist Du bei uns genau richtig!'),
(71, 'UX Designer (m/w/d)', 'IBM', 'Hurth', 'Full-Time', 2, 10, 'Es ist eine spannende Zeit, Teil des Teams von Wolters Kluwer zu sein. Wir befinden uns in der Transformation zu einem digitalen Unternehmen. Informationen sind heute schnell, online und mobil verfügbar. Als einer der führenden Informationsdienstleister mit intelligenten Expertenlösungen und herausragenden Fachinformationen in den Bereichen Recht, Wirtschaft, Steuern und Rechnungswesen unterstützen wir unsere Kunden dabei, das Richtige zu tun, wenn es darauf ankommt.'),
(72, 'Digital Designer/Art Director', 'IBM', 'Munchen', 'Full-Time', 2, 10, 'Dragons Group ist eine Agentur für Consulting und digitale Werbung. Unsere Mission ist es, die Werbeprojekte unserer Kunden auf den Punkt zu bringen, indem wir integrierte\r\nContent-Lösungen liefern.\r\nWir setzen innovative Ideen in die Tat um und gehen Probleme mit transformativen An- sätzen an, um branchenführende Initiativen zu unterstützen.\r\nAktuell suchen wir zur Verstärkung unseres firmeninternen Content-Studio-Teams in einem von Deutschlands größten FMCG-Unternehmen in München einen Digital De- signer.'),
(73, 'Junior Developer Javascript/vue/php', 'IBM', 'Horb am Neckar', 'Remote', 3, 10, 'We develop SaaS web applications that enable brands and retailers to host shoppable interactive live streams on their own platforms. Lean code and a scalable, cloud-based infrastructure enable us to deliver high quality experiences to very large audiences. With a strong focus on user experience and data-driven analytics we give our customers powerful tools to drive engagement, conversion and gain actionable insights in real-time.'),
(74, 'Frontend-Entwickler (m/w/d)', 'IBM', 'Munchen', 'Remote', 1, 10, 'Derzeit entwickeln wir eine Webanwendung zur FTTH-Netzplanung. Und dafür brauchen wir Dich.\r\n\r\nAND Solution ist eine Planungssoftware für FTTH- und andere Zugangsnetze für Telekommunikation und Kabelfernsehen. Seit 1988 sind wir in der Branche tätig, unser Nutzerkreis ist die gesamte Branche: vom kleinen Planungsbüro bis zum Netzbetreiber wie Vodafone. Das macht uns in Europa zum Marktführer.'),
(75, 'Frontend Entwickler / Frontend Designer (m/w/d)', 'IBM', 'Hamburg', 'Remote', 1, 10, 'Stetig optimieren, erweitern und verschönern wir unsere Online-Shops für Espresso-Spezialitäten. Wir freuen uns, wenn du uns dabei unterstützt. Erlebe eine abwechslungsreiche und spannende Aufgabe. Sie passen perfekt zu uns, wenn Sie bereits Erfahrung haben als z.B. Frontend Developer, Web Developer, Web Entwickler, Software Entwickler, Software Developer, etc. Gerne auch für Quereinsteiger oder Studenten.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `userGrants` int(5) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `userGrants`, `description`, `country`) VALUES
(8, 'adminek', '$2y$10$v8vYfz8myhIukVf7hb7F/.2nDUM4LfkMxOx1ySO0QunEMRjldQ97m', 'admi@wp.pl', 1, '', ''),
(10, 'admin1', '$2y$10$cHpw.80LuN/gHmwA685kBOc4vGHMUb3o9ruqA5tDFXCOw3PGCIcuy', 'admin2', 1, '', ''),
(11, 'Dan Jackson', '$2y$10$ei30T8zJxza36hKn4ZDa7OTt7eP2fijX2Xneo4oQTFatyn3mXGhA6', 'DanJackson@wp.com', 2, 'I’m a french freelance Interactive Developer, currently living in Paris. Before working as independent, I have partnered with great digital agencies such as Immersive Garden and Bigyouth.', 'France'),
(12, 'Pam Garrison ', '$2y$10$Xcz6Y.mGkOrEN.QGrOgvdO0GtjwoAwgBNSuuDXd90hIMzrvHogfbe', 'Garrison@com.pl ', 2, 'Amsterdam-based illustrator Timo Kuilder’s personal style is characterized by uncomplicated colour palettes, clean-cut linework and his pared-back characters. Resulting in a clear signature that he applies to both his personal work as well as his commercial commissions creating consistency across his whole portfolio. Timo\'s work is fuelled by his observing nature and ongoing curiosity, utilising simple shapes to tell all sorts of stories.\r\n', 'United States'),
(13, 'Janet Earls', '$2y$10$W6v.H.ySBm2GbsYNDHNuoeJA6rq4NDVj8pjkIA9zTqmhqJdVQ/Fme', 'JanetEarls@wo.cos', 2, 'I\'m a Front-End Developer for ChowNow in Los Angeles, CA.\r\nI have serious passion for UI effects, animations and creating intuitive, dynamic user experiences.\r\nLet\'s make something special.', 'England'),
(14, 'Kathi Ewing', '$2y$10$hcO23wFjVBxpSc0c1fyZWewGZQ21QLAw61/h2F3XDQIlNrNOXGr6e', 'KathiEwing@wp.com', 2, 'Malte is a Berlin and New York based freelance Design Director. He has been working for over a decade for clients like Nike, Beats, Audi, Adidas, Google, Facebook and The North Face reinventing their visual languages. ', 'Poland'),
(15, 'Lois Durham', '$2y$10$oemhoMJOAmuLowwZ1YCZF.cXfhMlwEr6DdBdvyPhFQhZh5qDq4hlG', 'LoisDurham@onet.com', 2, 'Hi, I’m Dries Van Broeck.\r\nA Belgian motion designer,\r\ncurrently working at Buck LA.\r\n\r\nInterested in working together?\r\nFeel free to contact me for any project or collaboration.', 'Russia'),
(16, 'Dave Walter', '$2y$10$a5ve1F.tQ9fmyPVO8SLNce7KECNpwdG5JpXIsRR6fT2LVFXRiLBUa', 'oneta@.pl', 2, 'I\'m Ben, a Product Designer from the United Kingdom. I’ve been designing for over a decade.\r\n\r\nThroughout that time, I’ve worked remotely for a number of exciting startups and established companies.\r\n\r\n', 'Slovakie'),
(17, 'Greg Harford', '$2y$10$yD2bwnQm4omsfKWPHpx3tOjf1oap458ql4Z4ZLr5HODvmhmOF21.i', 'GregHarford@gmail.com', 2, 'Hi, I’m Dejan. I\'m a multi-talented human with over 10+ years of experiences in wide range of design disciplines.', 'Holland'),
(18, 'Aaron Rios', '$2y$10$2KesT.rI.rRlrAf0dIzWTuDAE5reaw79YWTOELjeHkEeEzWUZMXYu', 'rios@wp.pl', 2, 'As a freelance web developer and designer I collaborated with several graphic designers in Berlin and Melbourne, at the same time maintaining clients in Germany, Ireland, Australia and the UK.', 'Ukraine'),
(19, 'nowy', '$2y$10$Twt41prRcsKmfOIJQ27OjeQHIn.rdxCFN4sXnbZHrvISyGU7ByY/S', 'nowy', 1, '', ''),
(20, 'test2', '$2y$10$vIHt04g8yc.IGZhJ7SSwvusZFx49KjjW1VMM3677zkLtnOkfBQ3ma', 'test2', 1, '', ''),
(21, 'test4', '$2y$10$p5e5d1zWmNwmBxNm3lkT7u196X67aLhl2eqOr5HJuKvg0O4wwVJY6', 'test4', 1, '', ''),
(22, 'dadsadasd', '$2y$10$vsgghR6bPdiIzLgWu1MWV.Z3fHX6COwprTmAYFfRWCDNqFwSldInq', 'asdad', 2, '', ''),
(23, 'gazeta', '$2y$10$lPtLIiMGlrinexitB.pPSOdEd7XL5AG3n8NiCK8lfOBMEY9NOHJqK', 'gazeta@gazeta.pl', 2, '', 'Poland');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

<!-- 
    A feladatot postgres adatbáziskezelővel webes eléréssel kell megoldani.
Az adatbázist fel kell tölteni demó adatokkal (összesen 20 rekord).
Az alkalmazás az alábbi szolgáltatásokat kell, hogy nyújtsa:

- Adatok aktualizálása (új felvitel, módosítás, törlés) űrlap segítségével.
- Adatok listázása.
- Legalább három nemtriviális lekérdezés.
   Legalább két olyan lekérdezés legyen, amelyben legalább két táblát kell összekapcsolni és van benne csoportosítás (és összesítés).
   Legalább egy lekérdezésben allekérdezés is szerepeljen.
- Integritás ellenőrzés (kulcs feltételek).

A dokumentáció tartalma:
- E-K modell
- Relációs modell
- Az alkalmazás szolgáltatásainak, megvalósításának leírása

44. Diafilmek gyüjteménye (példa diafilm.osaarchivum.org)

-->


<!DOCTYPE html>
<html>
<head>
	<title>Diafilm Archive</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Films</a></li>
				<li><a href="#">Directors</a></li>
				<li><a href="#">Techniques</a></li>
				<li><a href="#">About Us</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<h1>Diafilm Archive</h1>
		
		<form action="" method="get">
			<label for="labels">Labels:</label>
			<select id="labels" name="labels">
				<option value="">All</option>
				<option value="Label1">Label1</option>
				<option value="Label2">Label2</option>
				<option value="Label3">Label3</option>
			</select>

			<label for="title">Title:</label>
			<input type="text" id="title" name="title">

			<label for="year">Year of Publication:</label>
			<input type="text" id="year" name="year">

			<label for="technique">Technique:</label>
			<input type="text" id="technique" name="technique">

			<label for="creator">Director/Creator:</label>
			<input type="text" id="creator" name="creator">

			<input type="submit" value="Search">
		</form>

		<section>
			<h2>Suggested Films</h2>
			<!-- suggested films content will go here -->
		</section>
	</main>
</body>
</html>


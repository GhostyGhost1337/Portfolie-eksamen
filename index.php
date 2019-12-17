<!DOCTYPE html>
<html lang="da">

	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Portfolie Tobias H Madsen</title>
        <link href="introstyle.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
	</head>

        <body>
            <section id="htmlcssgrid"> <!--Her starter griddet-->
                <section id="menu">
                <?php include 'menu.inc';?>
                </section>
                    
                <section id="intro">
                <p>Læringsportfolie af Tobias H Madsen 1 semester 2019 multimediedesigner</p>
                </section>
                
                <section id="overskrift">
                <h1>HTML og CSS</h1>
                </section>
                
                <section id="htmloverskrift">
                <h2>HTML</h2>
                </section>
                
                <section id=htmltekst>
                <p>HTML også kendt som HyperText Markup Language er et kodesprog der bruges til kodning af hjemmesider som gøres ved at skrive Tags som beskriver, hvad man laver. 
                Det kunne være tags som body, hvilket er der man skriver hoveddelen af hjemmesiden i med brug af andre tags såsom p altså paragraf som man oftest sætter sit indhold i p tagget, det skaber også et mellemrum over og under den tekst man skriver i det.
                </p>
                
                <p>
                En vigtig ting i HTML er de semantiske tags som fortæller noget om indholdet f.eks. Hvor vigtigt det er på siden. Det hjælper derfor search engines med deres optimization (seo). 
                Nogle af de semantiske tags ville være h1 til h6 overskrifter, hvor h1 ville fortælle det er, hvad siden handler om. Header eller sidehoved er også et af de semantiske tags, hvor man ofte ville have ens navigation inde i tagget og footer mere kendt på dansk som sidefod, hvor man typisk ville se ting som copyright. 

                Der er også section som fortæller at det der er inde i den section høre sammen, hvilket gøre det nemmere for søgemaskiner at håndtere.  


                Kilde til html introen  <a href ="https://eadania.mrooms.net/course/view.php?id=1604#section-1"> "intro til html" pdf fra moodle </a>
                </p>
                </section>
                
                <section id="cssoverskrift">
                <h2>CSS</h2>
                </section>
                
                <section id="csstekst">
                <p>CSS eller cascading style sheets er kodesproget som bruges til at sætte noget stil på hjemmesider altså ændre eksempelvis størrelser eller farver dog kan man ændre i mange andre ting også såsom at lave en boks om sin tekst og sætte linjer under, over eller gennem tekst osv. 
                </p>
                
                <p>
                Hvordan styler man så? Det gør man med selectors og de 3 jeg hovedsageligt har brugt er type/element, id og class. Type er almindelige tags som paragraf (p), h1 og body med type/element kan man så ændre overskriften til at se ud som man vil eller ændre skrift størrelse på p og med body ville man så kunne ændre noget som farven på sin side.
                </p>    
                
                <p>    
                Så er der ID selectors, hvor man giver et html tag et ID og derefter kan man style det specifikke ID i sin CSS det kunne være man ville style et paragraf tag anderledes end resten af sine paragrafs så ville det virke ret godt. 
                </p>
                
                <p>
                Class selectors kan så bruges i tilfælde, hvor man vil ramme flere elementer det kunne man gøre med paragraf også, hvis man ville ramme mere end en men ikke alle sine paragrafs med den styling man nu ønsker. Kilde til CSS introen <a href="https://eadania.mrooms.net/course/view.php?id=1604#section-3"> pdf "into til css" fra moodlerooms </a>
                </p>
                </section>
                
                <section id="ovelse1nocss">
                <p>Hvad har jeg så brugt HTML og CSS til?</p>
                    
                <p>Meget tidligt i undervisningen fik vi en opgave med HTML som vi senere skulle style med CSS også det var ovelse1</p>
                    
                <p>Opgaven gik ud på at vi skulle lave 3 sider og linke dem sammen det gjorde jeg med a tagget eller anchor. Den første side var om det tags vi kendte og, hvad vi vidste om HTML i forvejen. 
                </p>
                
                <p>
                Den anden side skulle vi skrive om semantiske tags og prøve at nævne nogle af dem
                </p>
                    
                <p>
                Den tredje side skulle vi skrive om Meta tags som er specielle tags man placere i sit head tag som fortæller noget om siden men ikke vises på selve siden. Det kunne være utf-8 som gør at man kan bruge symboler på siden som normalt ikke ville være muligt (æøå også)
                </p>
                </section>
                
                <section id="nocsspicture">
                <img src="images/ovelse1nocss.PNG">
                <p>Her i koden har jeg så sat tags jeg kendte op med en liste som set i koden med ordered list OL og list item LI og linket til de andre sider med a tagget</p>
                <img src="images/ovelse1nocsseksempelkode.PNG">
                <img src="images/ovelse1nocsssemantiske.PNG">
                <img src="images/ovelse1nocssmeta.PNG">
                </section>
                
                <section id="ovelse1medcss">
                <p>Nogle dage senere skulle vi så prøve at style den her opgave med det css vi fik undervist.
                </p>
                </section>
                
                <section id="csspicture">
                <img src="images/ovelse1medcss.PNG">
                <p>Her har jeg så sat noget styling på som set i kode billedet ændrede jeg ting som font-family som er skrift type her med sans-serif som fjerner fødder på bogstaver.</p>
                    
                <p>text-align blev brugt til at centrere teksten på siden</p>
                    
                <p>på min OL ændrede jeg så baggrundsfarven og tekstfarven så den skildte sig ud fra body coloren + jeg gav den en width som bestemte tykkelsen af listen så den ikke fyldte hele siden.</p>
                    
                <p>Ellers prøvede jeg mig frem med andet styling af a tagget og p såsom padding som skaber plads om teksten og font-size som ændre skrift størrelse.</p>
                    
                <img src="images/ovelse1csskodeeksempel.PNG">
                <img src="images/ovelse1csssemantisk.PNG">
                <img src="images/ovelse1cssmeta.PNG">
                <p>Alt arbjedet i opgaven ovelse1 var med den information jeg havde fået fra undervisning og de 2 tidligere nævnte pdffer intro til html og css</p>
                </section>
                
                <section id="workshop">
                <p>Senere arbejde med HTML og CSS havde vi en workshop i 2 mands grupper, hvor jeg fik emnet <a href="http://tobi2183.apache.eadania.dk/"> CSS skriftformatering og dekoration</a></p>
                
                <p>I opgaven lavede jeg eksempelvis bokse omkring alle tekst stykkerne og beskrev tags indenfor emnet og satte kode eksempeler ind som billeder. Alt information til at lave siden kom fra tidligere nævnte pdffer intro til html og css, Niels Østergaard og W3schools.com</p>
                </section>
                
                <section id="workshoppicture">
                <p>Nogle eksempler fra siden</p>
                <img src="images/font-size_line-height.PNG">
                <img src="images/font-weight_text-align_align-last_text-line-decoration.PNG">
                <img src="images/text-decoration-color_text-decoration-skip_text-decoration-style_text-underline-position.PNG">
                </section>
                
                <section id="grid">
                <p>Denne opgave var også første gang jeg rigtigt fik arbejdet med css grids og responsive design. Grids bliver brugt til at bestemme, hvor noget skal være på siden ved at give html sections et ID som man kan lave til et grid area, hvilket ville gøre det muligt at placere i ens grid.</p>
                    
                <p>Responsive design er når man laver sin side ud fra at den skal kunne bruges på flere platforme i mit tilfælde lavede jeg siden til computer og mobil. Det gøres ved at bruge et breakpoint. Det breakpoint gjorde så at når skærmen blev lille ville siden sætte alle tags under hinaden pga måden jeg satte griddet op i breakpointet</p>
                
                <img src="images/breakpoint.PNG">
                <p>Her har jeg så pc versionen</p>
                <img src="images/computer.PNG">
                <p>Og her er mobil versionen</p>
                <img src="images/mobil.PNG">
                
                <p>Da jeg så definerede et ID skulle jeg tilføje et area til dem i css koden.</p>
                    
                <img src="images/areaeksempel.PNG">
                
                <p>Jeg satte griddet op i alabetisk rækkefølge som ikke giver et godt overblik og som kostede mig tid i opgaven.</p>
                    
                <img src="images/gridarea.PNG">
                    
                <p>Alt arbejde med css grid og responsiv design har jeg lært fra <a href="https://eadania.mrooms.net/course/view.php?id=1604#section-5">"grids2" og "responive_i_paksis" pdffer fra moodle</a></p>
                </section>
                
                <section id="onepage">
                <p>I en senere opgave vores onepage projekt, hvor jeg lavede et grid sådan at alle IDs fik et navn i griddet fremfor at det var alfabetisk.</p>
                </section>
                
                <section id="onepagebilled">
                <p>Så her har jeg indelt griddet i navne fremfor bogstaver så man har overblik over, hvad er hvad</p>
                
                <img src="images/gridonepage.PNG">
                <p><a href="index.php#menu">Back to top</a></p>
                </section>
            </section> <!--Her slutter griddet-->
        </body>
      
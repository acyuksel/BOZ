<?php

namespace Database\Seeders;

use App\Models\FrontEndSection;
use Illuminate\Database\Seeder;

class FrontEndSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Home
        FrontEndSection::factory()->create(['number' => 1, 'page' => 'Home', 'header' => 'Ons doel', 'content' => '<p><strong><span style="font-size: 24px;">Een revolutie teweeg brengen! Die inzicht in elkaars werelden geeft</span></strong></p><p><br></p><p><span style="font-size: 14px;">5 jaar horen we verhalen, wensen en verlangens van mensen met een beperking. Ons eerste project "Onbeperkt Anders", zal in een aantal korte heftige films laten zien welke kwaliteiten mensen met een beperking/handicap hebben en hoe zij in onze samenleving een volwaardige plaats kunnen innemen.</span></p><p><br></p><ul><li>- Hoe kan ik van alle verhalen in mijn hoofd een boek schrijven zonder te kunnen lezen en schrijven?</li><li>- Kan ik trouwen en samenwonen?</li><li>- Hoe word ik adviseur?</li><li>- Hoe krijg je een volwaardig salaris?</li></ul>']);
        FrontEndSection::factory()->create(['number' => 2, 'page' => 'Home', 'header' => 'Wat willen we bereiken', 'content' => '<h3 id="isPasted"><span style="font-size: 24px;"><strong>Onderzoeken</strong></span></h3><p>Hoe het VN-verdrag van mensen met een beperking na te leven.</p><p>En bewustwording creëren hoe mensen met een beperking hun talenten kunnen inzetten in de maatschappij.</p><p><br></p><h3><strong><span style="font-size: 24px;">Acceptatie</span></strong></h3><blockquote><p>Als je het probleem accepteert is het al voor een deel opgelost.</p></blockquote><p>~Robin, Theaterwerkplaats Novalis~</p><p><br></p><h3><span style="font-size: 24px;"><strong>Co-Creatie</strong></span></h3><p>Iedereen moet met elkaar samenwerken. Op de werkvloer, in de kunst en in het dagelijks leven</p>']);

        //About us
        FrontEndSection::factory()->create(['number' => 1, 'page' => 'About us',
            'content' => '<p id="isPasted">
	<br>
</p>

<h2><strong><span style="font-size: 36px;">Idee&euml;nmakers</span></strong></h2>

<p id="isPasted">Wij zijn Carine Hermens (programmamaker/regisseur/docent) en Jojo Heesbeen (regisseur/, klinisch psycholoog en filosoof) en vakspecialisten bij theaterwerkplaats Novalis.</p>

<p>
	<br>
</p>

<p>Wij werken al jaren met mensen met een beperking en vinden het nodig om een revolutie teweeg te brengen omdat mensen met een beperking nog altijd worden gediscrimineerd in onze samenleving. Bijvoorbeeld vanuit de Wajong werken en geen passend salaris ontvangen voor de administratieve werkzaamheden en zodoende niet uit de Wajong kunnen komen en bang zijn om de baan kwijt te raken als hij dit aankaart. Als het om theater maken gaat, er is geen castingbureau of afdeling voor mensen met een handicap. &nbsp;Ze kunnen geen carri&egrave;re opbouwen met de talenten die ze hebben, ze worden een keer gevraagd en daarna is het klaar. Een biertje drinken kan ook een probleem zijn als je een beperking hebt. Vaak wordt er naar de leeftijd gevraagd of ze krijgen het niet. Een huis met een tuintje is niet mogelijk voor iemand met een beperking. En ga zo maar door. Na jaren van landelijk campagnes en lobby&rsquo;s worden mensen met een beperking nog altijd genegeerd als het gaat om de basisrechten van de mensheid; vrijheid van mening en zelfbeschikkingsrecht. Dit vinden wij niet alleen, maar ook de mensen met een beperking. &nbsp;Het VN-verdrag voor mensen met een beperking krijgt geen aandacht. Dat willen wij bekend maken.&nbsp;</p>

<p>
	<br>
</p>

<h2><span style="font-size: 36px;"><strong>Het bestuur</strong></span></h2>

<table style="width: 100%";>
	<tbody>
		<tr>
			<td style="width: 33.3333%; vertical-align: top;"><span style="font-size: 24px;"><strong>Tijmen</strong></span>
				<br>Wil dat mensen met een handicap worden gezien als wie we zijn, talentvolle mensen, dat zijn wij! Geen gehandicapten!</td>
			<td style="width: 33.3333%; vertical-align: top;"><span style="font-size: 24px;"><strong>Carine</strong></span>
				<br>Wil graag de rest van de wereld laten zien hoe kwaliteiten van mensen met een beperking veel beter ingezet kunnen worden in de maatschappij.</td>
			<td style="width: 33.3333%; vertical-align: top;"><span style="font-size: 24px;"><strong>Jojo</strong></span>
				<br>Wil de maatschappij laten zien, dat talenten van mensen met een handicap omarmend moet worden en niet ontkend.</td>
		</tr>
		<tr>
			<td style="width: 33.3333%; vertical-align: top;">
				<br>
			</td>
			<td style="width: 33.3333%; vertical-align: top;">
				<br>
			</td>
			<td style="width: 33.3333%; vertical-align: top;">
				<br>
			</td>
		</tr>
		<tr>
			<td style="width: 33.3333%; vertical-align: top;"><span style="font-size: 24px;"><strong>Hans</strong></span>
				<br>Mijn grote wens is dat onze gehandicapte medemensen optimaal kunnen functioneren in onze samenleving op basis van gelijkwaardigheid en hun kwaliteiten.</td>
			<td style="width: 33.3333%; vertical-align: top;"><span style="font-size: 24px;"><strong>Lianne</strong></span>
				<br>Voelt me uitgedaagd om een steentje bij te dragen aan een wereld waarin iedereen gehoord en gezien wordt, en serieus genomen in de mogelijkheden die er w&eacute;l zijn.</td>
			<td style="width: 33.3333%;">
				<br>
			</td>
		</tr>
	</tbody>
</table>
']);
    }
}

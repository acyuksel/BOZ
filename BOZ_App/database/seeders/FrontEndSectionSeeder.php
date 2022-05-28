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
        FrontEndSection::factory()->create(['number' => 1, 'page' => 'Home', 'header' => 'Our goal', 'language_id' => 2, 'content' => '<p><strong><span style="font-size: 24px;">Bringing about a revolution! Giving insight into each other\'s worlds</span></strong></p><p><br></p><p id="isPasted">5 years we hear stories, wishes and desires of people with disabilities. Our first project "Unlimited Different", will show in a number of short violent films, the qualities that people with a disability have and how they can take a full place in our society.</p><p><br></p><ul><li>- How can I write a book of all the stories in my head without being able to read and write?</li><li>- Can I get married and live together?</li><li>- How do I become a counselor?</li><li>- How to get a full salary?</li></ul>']);
        FrontEndSection::factory()->create(['number' => 2, 'page' => 'Home', 'header' => 'What we want to achieve', 'language_id' => 2, 'content' => '<h3 id="isPasted"><span style="font-size: 24px;"><strong>Research</strong></span></h3><p>How to comply with the UN convention of people with disabilities.</p><p>And create awareness of how people with disabilities can use their talents in society.</p><p><br></p><h3><strong><span style="font-size: 24px;">Acceptance</span></strong></h3><blockquote><p>If you accept the problem it is already partially solved.</p></blockquote><p>~Robin, Theater Workshop Novalis~</p><p><br></p><h3><span style="font-size: 24px;"><strong>Co-Creation</strong></span></h3><p>Everyone needs to work with each other. In the workplace, in the arts, and in everyday life<br></p>']);

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

        FrontEndSection::factory()->create(['number' => 1, 'page' => 'Policy', 'header' => '', 'content' => '<div style="box-sizing: border-box; display: flex; margin-right: auto; margin-left: auto; position: relative; max-width: 1140px;"><div data-element_type="column" data-id="b54790d" style="box-sizing: border-box; --flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); -webkit-box-pack: var(--justify-content); justify-content: var(--justify-content); -webkit-box-align: var(--align-items); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); flex-basis: var(--flex-basis); -webkit-box-flex: var(--flex-grow); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); -webkit-box-ordinal-group: var(--order); order: var(--order); align-self: var(--align-self); min-height: 1px; position: relative; display: flex; width: 1140px;"><div style="box-sizing: border-box; position: relative; width: 1140px; flex-wrap: wrap; align-content: flex-start; display: flex; padding: 10px;"><div data-element_type="widget" data-id="1ea0e31" data-widget_type="text-editor.default" style="box-sizing: border-box; --flex-direction: initial; --flex-wrap: initial; --justify-content: initial; --align-items: initial; --align-content: initial; --gap: initial; --flex-basis: initial; --flex-grow: initial; --flex-shrink: initial; --order: initial; --align-self: initial; -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: var(--flex-direction); flex-wrap: var(--flex-wrap); -webkit-box-pack: var(--justify-content); justify-content: var(--justify-content); -webkit-box-align: var(--align-items); align-items: var(--align-items); align-content: var(--align-content); gap: var(--gap); flex-basis: var(--flex-basis); -webkit-box-flex: var(--flex-grow); flex-grow: var(--flex-grow); flex-shrink: var(--flex-shrink); -webkit-box-ordinal-group: var(--order); order: var(--order); align-self: var(--align-self); position: relative; color: var( --e-global-color-text ); font-family: var( --e-global-typography-text-font-family ), Sans-serif; font-weight: var( --e-global-typography-text-font-weight ); width: 1120px;"><div style="box-sizing: border-box; transition: background 0.3s ease 0s, border 0.3s ease 0s, border-radius 0.3s ease 0s, box-shadow 0.3s ease 0s, -webkit-box-shadow 0.3s ease 0s;"><ul style="box-sizing: border-box; overflow-wrap: break-word; margin: 0px 0px 25px; padding: 0px 0px 0px 25px; list-style: disc;"><li style="box-sizing: border-box; margin-bottom: 7px;"><span style="box-sizing: border-box; color: rgb(51, 153, 102);"><strong style="box-sizing: border-box; font-weight: bolder;">Stichting Bureau Onbeperkte Zaken; Oprichtingsdatum 28-05-2021</strong></span></li><li style="box-sizing: border-box; margin-bottom: 7px;">KVK 83052224</li><li style="box-sizing: border-box; margin-bottom: 7px;">Nummer: NL40 TRIO 0320 3311 48 t.n.v. Stichting Bureau Onbeperkte Zaken</li><li style="box-sizing: border-box; margin-bottom: 7px;">RSIN: 862707031</li><li style="box-sizing: border-box; margin-bottom: 7px;">: +31 6 17726944 en +31640060169</li><li style="box-sizing: border-box; margin-bottom: 7px;">Mail:&nbsp;<a href="mailto:bureau.onbeperkte.zaken@gmail.com" style="box-sizing: border-box; color: inherit; text-decoration: none; background-color: transparent; transition: all 0.3s ease-out 0s; outline: none medium; box-shadow: none;">onbeperkte.zaken@gmail.com</a></li><li style="box-sizing: border-box; margin-bottom: 7px;">Website:&nbsp;<a href="http://www.bureauonbeperktezaken.nl/" style="box-sizing: border-box; color: inherit; text-decoration: none; background-color: transparent; transition: all 0.3s ease-out 0s; outline: none medium; box-shadow: none;">bureauonbeperktezaken.nl</a></li><li style="box-sizing: border-box; margin-bottom: 7px;">Accountant kantoor; Korthals te Vught (in onderhandeling)</li></ul><h4 style="box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px; margin-bottom: 0.5rem; font-family: &quot;Barlow Condensed&quot;, sans-serif; font-weight: 600; line-height: 1.1; color: rgb(0, 18, 52); font-size: 22px; font-style: normal; letter-spacing: -0.3px;"><span style="box-sizing: border-box; text-decoration: underline; color: rgb(51, 153, 102);">Vrijwillige bestuursfuncties;</span></h4><p style="box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px; margin-bottom: 0px; font-size: 15px; font-weight: 400; line-height: 28px; font-family: Karla, sans-serif; color: rgb(119, 119, 119);">&nbsp;</p><ul style="box-sizing: border-box; overflow-wrap: break-word; margin: 0px 0px 25px; padding: 0px 0px 0px 25px; list-style: disc;"><li style="box-sizing: border-box; margin-bottom: 7px;">C.E.M. Hermens; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Voorzitster</li><li style="box-sizing: border-box; margin-bottom: 7px;">Mevr. J.A.C.G. Heesbeen; Secretaris</li><li style="box-sizing: border-box; margin-bottom: 7px;">J. Meulenbeld; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Assistent Penningmeester</li><li style="box-sizing: border-box; margin-bottom: 7px;">L.M.A. van Someren; Lid en Pedagogisch adviseur.</li></ul><h4 style="box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px; margin-bottom: 0.5rem; font-family: &quot;Barlow Condensed&quot;, sans-serif; font-weight: 600; line-height: 1.1; color: rgb(0, 18, 52); font-size: 22px; font-style: normal; letter-spacing: -0.3px;"><span style="box-sizing: border-box; color: rgb(51, 153, 102);"><strong style="box-sizing: border-box; font-weight: bolder;"><u style="box-sizing: border-box;">Extra;</u></strong></span></h4><p style="box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px; margin-bottom: 0px; font-size: 15px; font-weight: 400; line-height: 28px; font-family: Karla, sans-serif; color: rgb(119, 119, 119);">&nbsp;</p><p style="box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px; margin-bottom: 0px; font-size: 15px; font-weight: 400; line-height: 28px; font-family: Karla, sans-serif; color: rgb(119, 119, 119);">Tijmen Hurkmans; is als ervaringsdeskundige soms aanwezig bij vergaderingen en voert, samen met het bestuur, het woord naar buiten, hij staat niet vermeld in de statuten omdat hij een bewindvoerder heeft.</p><h4 style="box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px; margin-bottom: 0.5rem; font-family: &quot;Barlow Condensed&quot;, sans-serif; font-weight: 600; line-height: 1.1; color: rgb(0, 18, 52); font-size: 22px; font-style: normal; letter-spacing: -0.3px;">&nbsp;</h4><h4 style="box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px; margin-bottom: 0.5rem; font-family: &quot;Barlow Condensed&quot;, sans-serif; font-weight: 600; line-height: 1.1; color: rgb(0, 18, 52); font-size: 22px; font-style: normal; letter-spacing: -0.3px;"><span style="box-sizing: border-box; color: rgb(51, 153, 102);"><strong style="box-sizing: border-box; font-weight: bolder;"><u style="box-sizing: border-box;">Financiën;</u></strong></span></h4><p style="box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px; margin-bottom: 0px; font-size: 15px; font-weight: 400; line-height: 28px; font-family: Karla, sans-serif; color: rgb(119, 119, 119);">&nbsp;</p><p style="box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px; margin-bottom: 0px; font-size: 15px; font-weight: 400; line-height: 28px; font-family: Karla, sans-serif; color: rgb(119, 119, 119);">Op dit moment is onze organisatie aan het fondsen werven en wordt in maart 2022 een crowdfunding opgestart. Deze resultaten zullen zo snel mogelijk worden gepubliceerd.</p></div></div></div></div></div>']);
    }
}

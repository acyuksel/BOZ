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
        FrontEndSection::factory()->create(['number' => 1, 'page' => 'About us', 'language_id' => 2, 'content' => '<p id="isPasted"><br></p><h2><strong><span style="font-size: 36px;">Idea Creators</span></strong></h2><p id="isPasted">We are Carine Hermens (programmer/director/teacher) and Jojo Heesbeen (director/, clinical psychologist and philosopher) and subject matter experts at theater workshop Novalis.</p><p><br></p><p id="isPasted">We have been working with people with disabilities for many years and feel it is necessary to bring about a revolution because people with disabilities are still discriminated against in our society. For example, working from the Wajong and not receiving a suitable salary for administrative work and thus not being able to get out of the Wajong and being afraid of losing the job if he brings this up. When it comes to theater making, there is no casting office or department for people with disabilities. &nbsp;They can&#39;t build a career with the talents they have, they get asked once and then it&#39;s done. Drinking a beer can also be a problem if you have a disability. They are often asked about age or they don&#39;t get it. A house with a little garden is not possible for someone with a disability. And so on and so forth. After years of national campaigns and lobbying, people with disabilities are still ignored when it comes to the basic rights of humanity; freedom of opinion and self-determination. This is not only our opinion, but also the opinion of people with disabilities. &nbsp;The UN convention for people with disabilities is not getting any attention. We want to make that known.&nbsp;</p><p><br></p><p><br></p><h2><span style="font-size: 36px;"><strong>The board</strong></span></h2><table style="width: 100%;"><tbody><tr><td style="width: 33.3333%; vertical-align: top;"><span style="font-size: 24px;"><strong>Tijmen</strong></span><br>Want people with disabilities to be seen as who we are, talented people, that&#39;s us! Not disabled people!</td><td style="width: 33.3333%; vertical-align: top;"><span style="font-size: 24px;"><strong>Carine</strong></span><br>Would like to show the rest of the world how qualities of people with disabilities can be much better used in society.</td></tr><tr><td style="width: 33.3333%; vertical-align: top;"><br></td><td style="width: 33.3333%; vertical-align: top;"><br></td><td style="width: 33.3333%; vertical-align: top;"><br></td></tr><tr><td style="width: 33.3333%; vertical-align: top;"><span style="font-size: 24px;"><strong>Hans</strong></span><br>My great desire is that our disabled fellow human beings can function optimally in our society on the basis of equality and their qualities.</td><td style="width: 33.3333%; vertical-align: top;"><span style="font-size: 24px;"><strong>Lianne</strong></span><br>Feels challenged to contribute to a world where everyone is heard, seen, and taken seriously in the opportunities that do exist.</td><td style="width: 33.3333%;"><br></td></tr></tbody></table>']);

        FrontEndSection::factory()->create(['number' => 1, 'page' => 'Policy', 'header' => '', 'content' => '<ul style="list-style-type: disc;">
		<li><span style="color: #339966;"><strong>Stichting Bureau Onbeperkte Zaken; Oprichtingsdatum 28-05-2021</strong></span></li>
		<li>KVK 83052224</li>
		<li>Nummer: NL40 TRIO 0320 3311 48 t.n.v. Stichting Bureau Onbeperkte Zaken</li>
		<li>RSIN: 862707031</li>
		<li>Telefoon&nbsp;: +31 6 17726944 en +31640060169</li>
		<li>Mail: <a href="mailto:bureau.onbeperkte.zaken@gmail.com">onbeperkte.zaken@gmail.com</a></li>
		<li>Website: <a href="http://www.bureauonbeperktezaken.nl">bureauonbeperktezaken.nl</a></li>
		<li>Accountant kantoor; Korthals te Vught (in onderhandeling)</li>
	</ul>
	
	<p>
		<br>
	</p>
	
	<p><span style="text-decoration: underline; color: rgb(51, 153, 102); font-size: 18px;">Vrijwillige bestuursfuncties;</span></p>
	
	<ul style="list-style-type: disc;">
		<li>C.E.M. Hermens; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Voorzitster</li>
		<li>Mevr. J.A.C.G. Heesbeen; Secretaris</li>
		<li>J. Meulenbeld; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Assistent Penningmeester</li>
	</ul>
	
	<p>L.M.A. van Someren; Lid en Pedagogisch adviseur.
		<br>
		<br><span id="isPasted" style="text-decoration: underline; color: rgb(51, 153, 102); font-size: 18px;">Extra;</span></p>
	
	<p><span id="isPasted">Tijmen Hurkmans; is als ervaringsdeskundige soms aanwezig bij vergaderingen en voert, samen met het bestuur, het woord naar buiten, hij staat niet vermeld in de statuten omdat hij een bewindvoerder heeft.</span></p>
	
	<p>
		<br>
	</p>
	
	<p><span id="isPasted" style="text-decoration: underline; color: rgb(51, 153, 102); font-size: 18px;">Financi&euml;n</span><span id="isPasted"><span id="isPasted" style="text-decoration: underline; color: rgb(51, 153, 102); font-size: 18px;">;</span></span></p>
	
	<p>Op dit moment is onze organisatie aan het fondsen werven en wordt in maart 2022 een crowdfunding opgestart. Deze resultaten zullen zo snel mogelijk worden gepubliceerd.</p>
	']);

        FrontEndSection::factory()->create(['number' => 1, 'page' => 'Policy', 'header' => '', 'language_id' => 2, 'content' => '<ul style="list-style-type: disc;">
	<li><span style="color: #339966;"><strong>Stichting Bureau Onbeperkte Zaken; Oprichtingsdatum 28-05-2021</strong></span></li>
	<li>KVK 83052224</li>
	<li>Nummer: NL40 TRIO 0320 3311 48 t.n.v. Stichting Bureau Onbeperkte Zaken</li>
	<li>RSIN: 862707031</li>
	<li>Phone: +31 6 17726944 en +31640060169</li>
	<li>Mail: <a href="mailto:bureau.onbeperkte.zaken@gmail.com">onbeperkte.zaken@gmail.com</a></li>
	<li>Website: <a href="http://www.bureauonbeperktezaken.nl">bureauonbeperktezaken.nl</a></li>
	<li>Accountant office; Korthals te Vught (under negotiation)</li>
</ul>

<p>
	<br>
</p>

<p><span style="text-decoration: underline; color: rgb(51, 153, 102); font-size: 18px;">Voluntary board positions;</span></p>

<ul style="list-style-type: disc;">
	<li>C.E.M. Hermens; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; President of the board</li>
	<li>Mevr. J.A.C.G. Heesbeen; Secretary</li>
	<li>J. Meulenbeld; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Assistant Treasurer</li>
</ul>

<p>L.M.A. van Someren; Member and pedagogical Advisor
	<br>
	<br><span id="isPasted" style="text-decoration: underline; color: rgb(51, 153, 102); font-size: 18px;">Extra;</span></p>

<p><span id="isPasted">Tijmen Hurkmans; is sometimes present at meetings as an expert by experience and, together with the board, speaks out, he is not listed in the bylaws because he has a trustee.</span></p>

<p><span id="isPasted" style="text-decoration: underline; color: rgb(51, 153, 102); font-size: 18px;">Financials</span><span id="isPasted"><span id="isPasted" style="text-decoration: underline; color: rgb(51, 153, 102); font-size: 18px;">;</span></span></p>

<p>Currently, our organization is fundraising and a crowdfunding will be launched in March 2022. These results will be published as soon as possible.</p>
']);

        FrontEndSection::factory()->create(['number' => 1, 'page' => 'Privacy', 'header' => '', 'content' => '<h2 id="isPasted"><span style="font-size: 36px;"><strong>Uitgangspunten</strong></span></h2><ol><li>De begrippen die in deze privacyverklaring gehanteerd worden en die in de Algemene Verordening Gegevensbescherming (AVG) gedefinieerd worden, hebben de betekenis die in de AVG-wet daaraan is toegekend.</li><li>We gebruiken de persoonsgegevens alleen voor de in deze privacyverklaring omschreven doeleinden (grondslag). Dat is rechtmatig en transparant.</li><li>Wij verwoorden onze privacyverklaring in duidelijke en heldere taal en proberen geen informatie te verstoppen. We zijn ook duidelijk over welke gegevens we verwerken en hoe we dat doen. Dat is welbepaald en duidelijk.</li><li>Wij verwerken alleen die persoonsgegevens die we ook echt nodig hebben. Dat is dataminimalisatie.</li><li>Wij werken graag met u samen om ervoor te zorgen dat de gegevens die we verwerken altijd correct en up-to-date zijn. Dat is de juistheid van de gegevens.</li><li>We bewaren de gegevens niet langer dan nodig is om de doelen te realiseren waarvoor uw gegevens worden verzameld. Dat is de bewaartermijn.</li><li>We delen de persoonsgegevens nooit met andere partijen, binnen of buiten de EU zonder gegronde reden. We zorgen ook voor een degelijke beveiliging van de persoonsgegevens, door vele technische en organisatorische maatregelen te treffen. Wanneer wij uw persoonsgegevens delen met derden geven we dit expliciet aan. WAPP Development deelt uw persoonsgegevens alleen met derden met uw toestemming, als dit noodzakelijk is voor het uitvoeren van de overeenkomst of om te voldoen aan een eventuele wettelijke verplichting. Met partijen die uw gegevens verwerken in onze opdracht, sluiten wij een verwerkersovereenkomst om te zorgen voor eenzelfde niveau van beveiliging en vertrouwelijkheid van uw gegevens. WAPP Development blijft verantwoordelijk voor deze verwerkingen. Dat is voor de integriteit en veiligheid van de gegevens.</li></ol>']);
        FrontEndSection::factory()->create(['number' => 1, 'page' => 'Privacy', 'header' => '', 'language_id' => 2, 'content' => '<h2 id="isPasted"><span style="font-size: 36px;"><strong>Uitgangspunten</strong></span></h2><ol><li>De begrippen die in deze privacyverklaring gehanteerd worden en die in de Algemene Verordening Gegevensbescherming (AVG) gedefinieerd worden, hebben de betekenis die in de AVG-wet daaraan is toegekend.</li><li>We gebruiken de persoonsgegevens alleen voor de in deze privacyverklaring omschreven doeleinden (grondslag). Dat is rechtmatig en transparant.</li><li>Wij verwoorden onze privacyverklaring in duidelijke en heldere taal en proberen geen informatie te verstoppen. We zijn ook duidelijk over welke gegevens we verwerken en hoe we dat doen. Dat is welbepaald en duidelijk.</li><li>Wij verwerken alleen die persoonsgegevens die we ook echt nodig hebben. Dat is dataminimalisatie.</li><li>Wij werken graag met u samen om ervoor te zorgen dat de gegevens die we verwerken altijd correct en up-to-date zijn. Dat is de juistheid van de gegevens.</li><li>We bewaren de gegevens niet langer dan nodig is om de doelen te realiseren waarvoor uw gegevens worden verzameld. Dat is de bewaartermijn.</li><li>We delen de persoonsgegevens nooit met andere partijen, binnen of buiten de EU zonder gegronde reden. We zorgen ook voor een degelijke beveiliging van de persoonsgegevens, door vele technische en organisatorische maatregelen te treffen. Wanneer wij uw persoonsgegevens delen met derden geven we dit expliciet aan. WAPP Development deelt uw persoonsgegevens alleen met derden met uw toestemming, als dit noodzakelijk is voor het uitvoeren van de overeenkomst of om te voldoen aan een eventuele wettelijke verplichting. Met partijen die uw gegevens verwerken in onze opdracht, sluiten wij een verwerkersovereenkomst om te zorgen voor eenzelfde niveau van beveiliging en vertrouwelijkheid van uw gegevens. WAPP Development blijft verantwoordelijk voor deze verwerkingen. Dat is voor de integriteit en veiligheid van de gegevens.</li></ol>']);



    }

}

@extends('theme::layouts.app')


@section('content')


<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/typography'),
    ],
  }
  ```
-->
<div class="relative py-16 bg-white overflow-hidden">
    <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
        <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
            <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                <defs>
                    <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)" />
            </svg>
            <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                <defs>
                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
            </svg>
            <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                <defs>
                    <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)" />
            </svg>
        </div>
    </div>
    <div class="relative px-4 sm:px-6 lg:px-8">
        <div class="text-lg max-w-prose mx-auto">
            <h1>
                <span class="block text-base text-center text-indigo-600 font-semibold tracking-wide uppercase">En vigueur au 01/04/2022</span>
                <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">CONDITIONS GENERALES<br />DE VENTE ??? INTERNET</span>
            </h1>
        </div>
        <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto">

            <h3 class="pt-5">ARTICLE 1 - Champ d'application</h3>
            <p>Les pr??sentes Conditions G??n??rales de Vente (dites ?? CGV ??) s'appliquent, sans restriction ni r??serve ?? tout achat des services suivants :
                CMS SAAS</p>
            <p>tels que propos??s par le Prestataire aux clients non professionnels (?? Les Clients ou le Client ??) sur le site : foxpress.fr.
                Les caract??ristiques principales des Services sont pr??sent??es sur le site internet https://foxpress.fr.
                Le Client est tenu d'en prendre connaissance avant toute passation de commande. Le choix et l'achat d'un Service est de la seule responsabilit?? du Client.
            </p>
            <p>Ces CGV sont accessibles ?? tout moment sur le site : foxpress.fr et pr??vaudront sur toute autre document.
                Le Client d??clare avoir pris connaissance des pr??sentes CGV et les avoir accept??es en cochant la case pr??vue ?? cet effet avant la mise en ??uvre de la proc??dure de commande en ligne du site : foxpress.fr.
                Sauf preuve contraire, les donn??es enregistr??es dans le syst??me informatique du Prestataire constituent la preuve de l'ensemble des transactions conclues avec le Client.
            </p>
            <p><b>Les coordonn??es du Prestataire sont les suivantes :</b><br />
            <ul role="list">
                <li>Foxcase, SAS</li>
                <li>Capital social de 3 euros</li>
                <li>Immatricul?? au RCS de Paris, sous le num??ro 903354843</li>
                <li>60 RUE FRANCOIS 1ER 75008 PARIS</li>
                <li>mail : contact@foxpress.fr</li>
                <li>t??l??phone : 0610449818</li>
            </ul>
            </p>
            <p>Des droits de douane ou autres taxes locales ou droits d'importation ou taxes d'??tat sont susceptibles d'??tre exigibles. Ils seront ?? la charge et rel??vent de la seule responsabilit?? du Client.</p>

            <h3 class="pt-5">ARTICLE 2 - Prix</h3>
            <p>Les Services sont fournis aux tarifs en vigueur figurant sur le site : foxpress.fr, lors de l'enregistrement de la commande par le Prestataire.</p>
            <p> Les prix sont exprim??s en Euros, HT et TTC.</p>
            <p> Les tarifs tiennent compte d'??ventuelles r??ductions qui seraient consenties par le Prestataire sur le site : foxpress.fr.</p>
            <p> Ces tarifs sont fermes et non r??visables pendant leur p??riode de validit?? mais le Prestataire se r??serve le droit, hors p??riode de validit??, d???en modifier les prix ?? tout moment.</p>
            <p> Les prix ne comprennent pas les frais de traitement, d'exp??dition, de transport et de livraison, qui sont factur??s en suppl??ment, dans les conditions indiqu??es sur le site et calcul??s pr??alablement ?? la passation de la commande.</p>
            <p> Le paiement demand?? au Client correspond au montant total de l'achat, y compris ces frais.</p>
            <p> Une facture est ??tablie par le Prestataire et remise au Client lors de la fourniture des Services command??s.</p>

            <h3 class="pt-5">ARTICLE 3 ??? Commandes</h3>
            <p><b>Il appartient au Client de s??lectionner sur le site : foxpress.fr les Services qu'il d??sire commander, selon les modalit??s suivantes :</b></p>
            <ul role="list">
                <li>Le client choisit l'offre qui convient au mieux ?? ses attentes, il proc??de ensuite au paiement via la plateforme paddle, une fois que son paiement est valid?? il re??oit une facture par email suivi d'un autre email incluant son num??ro de licence...</li>
                <li>La vente ne sera consid??r??e comme valide qu???apr??s paiement int??gral du prix. Il appartient au Client de v??rifier l'exactitude de la commande et de signaler imm??diatement toute erreur.</li>
                <li>Toute commande pass??e sur le site https://foxpress.fr constitue la formation d'un contrat conclu ?? distance entre le Client et le Prestataire.</li>
                <li>Le Prestataire se r??serve le droit d'annuler ou de refuser toute commande d'un Client avec lequel il existerait un litige relatif au paiement d'une commande ant??rieure.</li>
                <li>Le Client pourra suivre l'??volution de sa commande sur le site.</li>
            </ul>

            <h3 class="pt-5">ARTICLE 4 - Conditions de paiement</h3>
            <p><b>Le prix est pay?? par voie de paiement s??curis??, selon les modalit??s suivantes :</b></p>
            <ul role="list">
                <li>paiement par carte bancaire</li>
            </ul>
            <p>Le prix est payable comptant par le Client, en totalit?? au jour de la pasation de la commande.</p>
            <p>Les donn??es de paiement sont ??chang??es en mode crypt?? gr??ce au protocole d??fini par le prestataire de paiement agr???? intervenant pour les transactions bancaires r??alis??es sur le site https://foxpress.fr.</p>
            <p>Les paiements effectu??s par le Client ne seront consid??r??s comme d??finitifs qu'apr??s encaissement effectif des sommes dues, par le Prestataire.</p>
            <p>Le Prestataire ne sera pas tenu de proc??der ?? la fourniture des Services command??s par le Client si celui-ci ne lui en paye pas le prix en totalit?? dans les conditions ci-dessus indiqu??es.</p>

            <h3 class="pt-5">ARTICLE 5 - Fourniture des Prestations</h3>
            <p><b>Les Services command??s par le Client seront fournis selon les modalit??s suivantes :</b></p>
            <ul role="list">
                <li>Service de conception de site web.</li>
            </ul>
            <p>Lesdits Services seront fournis instantan??ment ?? compter de la validation d??finitive de la commande du Client, dans les conditions pr??vues aux pr??sentes CGV ?? l'adresse indiqu??e par le Client lors de sa commande sur le site https://foxpress.fr .</p>
            <p>Le Prestataire s'engage ?? faire ses meilleurs efforts pour fournir les Services command??s par le Client, dans le cadre d'une obligation de moyen et dans les d??lais ci-dessus pr??cis??s.</p>
            <p>Si les Services command??s n'ont pas ??t?? fournis dans un d??lai de 10 minutes apr??s la date indicative de fourniture, pour toute autre cause que la force majeure ou le fait du Client, la vente des Services pourra ??tre r??solue ?? la demande ??crite du Client dans les conditions pr??vues aux articles L 216-2, L 216-3 et L241-4 du Code de la consommation. Les sommes vers??es par le Client lui seront alors restitu??es au plus tard dans les quatorze jours qui suivent la date de d??nonciation du contrat, ?? l'exclusion de toute indemnisation ou retenue.</p>
            <p>En cas de demande particuli??re du Client concernant les conditions de fourniture des Services, d??ment accept??es par ??crit par le Prestataire, les co??ts y ??tant li??s feront l'objet d'une facturation sp??cifique compl??mentaire ult??rieure.</p>
            <p>A d??faut de r??serves ou r??clamations express??ment ??mises par le Client lors de la r??ception des Services, ceux-ci seront r??put??s conformes ?? la commande, en quantit?? et qualit??.</p>
            <p>Le Client disposera d'un d??lai de 5 minutes ?? compter de la fourniture des Services pour ??mettre des r??clamations par courriel, avec tous les justificatifs y aff??rents, aupr??s du Prestataire.</p>
            <p>Aucune r??clamation ne pourra ??tre valablement accept??e en cas de non respect de ces formalit??s et d??lais par le Client.</p>
            <p>Le Prestataire remboursera ou rectifiera dans les plus brefs d??lais et ?? ses frais les Services dont le d??faut de conformit?? aura ??t?? d??ment prouv?? par le Client.</p>

            <h3 class="pt-5">ARTICLE 6 - Droit de r??tractation</h3>
            <p>Compte tenu de la nature des Services fournis, les commandes pass??es par le Client ne b??n??ficient pas du droit de r??tractation.</p>
            <p>Le contrat est donc conclu de fa??on d??finitive d??s la passation de la commande par le Client selon les modalit??s pr??cis??es aux pr??sentes CGV.</p>

            <h3 class="pt-5">ARTICLE 7 - Responsabilit?? du Prestataire - Garanties</h3>
            <p>Le Prestataire garantit, conform??ment aux dispositions l??gales et sans paiement compl??mentaire, le Client, contre tout d??faut de conformit?? ou vice cach??, provenant d'un d??faut de conception ou de r??alisation des Services command??s dans les conditions et selon les modalit??s suivantes :</p>
            <ul role="list">
                <li>Dispositions relatives aux garanties l??gales</li>
            </ul>
            <p><b>Article L217-4 du Code de la consommation</b></p>
            <p>
                <cite>
                    ?? Le vendeur est tenu de livrer un bien conforme au contrat et r??pond des d??fauts de conformit?? existant lors de la d??livrance. Il r??pond ??galement des d??fauts de conformit?? r??sultant de l'emballage, des instructions de montage ou de l'installation lorsque celle-ci a ??t?? mise ?? sa charge par le contrat ou a ??t?? r??alis??e sous sa responsabilit??. ??
                </cite>
            </p>
            <p><b>Article L217-5 du Code de la consommation</b></p>
            <p>
                <cite>
                    <b>?? Le bien est conforme au contrat :</b>
                    <br />
                    <b>1?? S'il est propre ?? l'usage habituellement attendu d'un bien semblable et, le cas ??ch??ant :</b>
                    <ul role="list">
                        <li><i>s'il correspond ?? la description donn??e par le vendeur et poss??de les qualit??s que celui-ci a pr??sent??es ?? l'acheteur sous forme d'??chantillon ou de mod??le ;</i></li>
                        <li><i>s'il pr??sente les qualit??s qu'un acheteur peut l??gitimement attendre eu ??gard aux d??clarations publiques faites par le vendeur, par le producteur ou par son repr??sentant, notamment dans la publicit?? ou l'??tiquetage ;</i></li>
                    </ul>
                    <b>2?? Ou s'il pr??sente les caract??ristiques d??finies d'un commun accord par les parties ou est propre ?? tout usage sp??cial recherch?? par l'acheteur, port?? ?? la connaissance du vendeur et que ce dernier a accept??. ??</b>
                </cite>
            </p>
            <p><b>Article L217-12 du Code de la consommation</b></p>
            <p>
                <cite>
                    ?? L'action r??sultant du d??faut de conformit?? se prescrit par deux ans ?? compter de la d??livrance du bien. ??
                </cite>
            </p>
            <p><b>Article L217-16 du Code de la consommation.</b></p>
            <p><cite>?? Lorsque l'acheteur demande au vendeur, pendant le cours de la garantie commerciale qui lui a ??t?? consentie lors de l'acquisition ou de la r??paration d'un bien meuble, une remise en ??tat couverte par la garantie, toute p??riode d'immobilisation d'au moins sept jours vient s'ajouter ?? la dur??e de la garantie qui restait ?? courir. Cette p??riode court ?? compter de la demande d'intervention de l'acheteur ou de la mise ?? disposition pour r??paration du bien en cause, si cette mise ?? disposition est post??rieure ?? la demande d'intervention. ??</cite></p>
            <p>Afin de faire valoir ses droits, le Client devra informer le Prestataire, par ??crit (mail ou courrier), de l'existence des vices ou d??fauts de conformit??.</p>
            <p>Le Prestataire remboursera ou rectifiera ou fera rectifier (dans la mesure du possible) les services jug??s d??fectueux dans les meilleurs d??lais et au plus tard dans les 15 jours suivant la constatation par le Prestataire du d??faut ou du vice. Ce remboursement pourra ??tre fait par virement ou ch??que bancaire.</p>
            <p>La garantie du Prestataire est limit??e au remboursement des Services effectivement pay??s par le Client.</p>
            <p>Le Prestataire ne pourra ??tre consid??r?? comme responsable ni d??faillant pour tout retard ou inex??cution cons??cutif ?? la survenance d'un cas de force majeure habituellement reconnu par la jurisprudence fran??aise.</p>
            <p>Les Services fournis par l'interm??diaire du site foxpress.fr du Prestataire sont conformes ?? la r??glementation en vigueur en France. La responsabilit?? du Prestataire ne saurait ??tre engag??e en cas de non respect de la l??gislation du pays dans lequel les Services sont fournis, qu'il appartient au Client, qui est seul responsable du choix des Services demand??s, de v??rifier.</p>

            <h3 class="pt-5">ARTICLE 8 - Donn??es personnelles</h3>
            <p>Le Client est inform?? que la collecte de ses donn??es ?? caract??re personnel est n??cessaire ?? la vente des Services et leur r??alisation et d??livrance, confi??es au Prestataire. Ces donn??es ?? caract??re personnel sont r??colt??es uniquement pour l???ex??cution du contrat de prestations de services.</p>
            <p><b>8.1 Collecte des donn??es ?? caract??re personnel</b></p>
            <p>Les donn??es ?? caract??re personnel qui sont collect??es sur le site https://foxpress.fr sont les suivantes :</p>
            <p>Ouverture de compte</p>
            <p>Lors de la cr??ation du compte Client / utilisateur :</p>
            <p>Noms, pr??noms, adresse postale, num??ro de t??l??phone et adresse e-mail.</p>
            <p>Paiement</p>
            <p>Dans le cadre du paiement des Prestations propos??s sur le site https://foxpress.fr, celui-ci enregistre des donn??es financi??res relatives au compte bancaire ou ?? la carte de cr??dit du Client / utilisateur.</p>
            <p><b>8.2 Destinataires des donn??es ?? caract??re personnel</b></p>
            <p>Les donn??es ?? caract??re personnel sont r??serv??es ?? l???usage unique du Prestataire et de ses salari??s.</p>
            <p>Le responsable de traitement des donn??es est le Prestataire, au sens de la loi Informatique et libert??s et ?? compter du 25 mai 2018 du R??glement 2016/679 sur la protection des donn??es ?? caract??re personnel.</p>
            <p><b>8.4 limitation du traitement</b></p>
            <p>Sauf si le Client exprime son accord expr??s, ses donn??es ?? caract??re personnelles ne sont pas utilis??es ?? des fins publicitaires ou marketing.</p>
            <p><b>8.5 Dur??e de conservation des donn??es</b></p>
            <p>Le Prestataire conservera les donn??es ainsi recueillies pendant un d??lai de 5 ans, couvrant le temps de la prescription de la responsabilit?? civile contractuelle applicable.</p>
            <p><b>8.6 S??curit?? et confidentialit??</b></p>
            <p>Le Prestataire met en ??uvre des mesures organisationnelles, techniques, logicielles et physiques en mati??re de s??curit?? du num??rique pour prot??ger les donn??es personnelles contre les alt??rations, destructions et acc??s non autoris??s. Toutefois il est ?? signaler qu???Internet n???est pas un environnement compl??tement s??curis?? et le Prestataire ne peut garantir la s??curit?? de la transmission ou du stockage des informations sur Internet.</p>
            <p><b>8.7 Mise en ??uvre des droits des Clients et utilisateurs</b></p>
            <p>En application de la r??glementation applicable aux donn??es ?? caract??re personnel, les Clients et utilisateurs du site https://foxpress.fr disposent des droits suivants :</b>
            <ul role="list">
                <li>Ils peuvent mettre ?? jour ou supprimer les donn??es qui les concernent de la mani??re suivante :</li>
                <li>En se connectant ?? son compte et en le supprimant depuis ses param??tres.</li>
                <li>Ils peuvent supprimer leur compte en ??crivant ?? l???adresse ??lectronique indiqu?? ?? l???article 9.3 ?? Responsable de traitement ??</li>
                <li>Ils peuvent exercer leur droit d???acc??s pour conna??tre les donn??es personnelles les concernant en ??crivant ?? l???adresse indiqu?? ?? l???article 9.3 ?? Responsable de traitement ??</li>
                <li>Si les donn??es ?? caract??re personnel d??tenues par le Prestataire sont inexactes, ils peuvent demander la mise ?? jour des informations des informations en ??crivant ?? l???adresse indiqu?? ?? l???article 9.3 ?? Responsable de traitement ??</li>
                <li>Ils peuvent demander la suppression de leurs donn??es ?? caract??re personnel, conform??ment aux lois applicables en mati??re de protection des donn??es en ??crivant ?? l???adresse indiqu?? ?? l???article 9.3 ?? Responsable de traitement ??</li>
                <li>Ils peuvent ??galement solliciter la portabilit?? des donn??es d??tenues par le Prestataire vers un autre prestataire</li>
                <li>Enfin, ils peuvent s???opposer au traitement de leurs donn??es par le Prestataire</li>
                <li>Ces droits, d??s lors qu???ils ne s???opposent pas ?? la finalit?? du traitement, peuvent ??tre exerc?? en adressant une demande par courrier ou par E-mail au Responsable de traitement dont les coordonn??es sont indiqu??es ci-dessus.</li>
                <li>Le responsable de traitement doit apporter une r??ponse dans un d??lai maximum d???un mois.</li>
                <li>En cas de refus de faire droit ?? la demande du Client, celui-ci doit ??tre motiv??.</li>
                <li>Le Client est inform?? qu???en cas de refus, il peut introduire une r??clamation aupr??s de la CNIL (3 place de Fontenoy, 75007 PARIS) ou saisir une autorit?? judiciaire.</li>
                <li>Le Client peut ??tre invit?? ?? cocher une case au titre de laquelle il accepte de recevoir des mails ?? caract??re informatifs et publicitaires de la part du Prestataire. Il aura toujours la possibilit?? de retirer son accord ?? tout moment en contactant le Prestataire (coordonn??es ci-dessus) ou en suivant le lien de d??sabonnement.</li>
            </ul>

            <h3 class="pt-5">ARTICLE 9 - Propri??t?? intellectuelle</h3>
            <p>Le contenu du site https://foxpress.fr est la propri??t?? du Vendeur et de ses partenaires et est prot??g?? par les lois fran??aises et internationales relatives ?? la propri??t?? intellectuelle.</p>
            <p>Toute reproduction totale ou partielle de ce contenu est strictement interdite et est susceptible de constituer un d??lit de contrefa??on.</p>

            <h3 class="pt-5">ARTICLE 10 - Droit applicable - Langue</h3>
            <p>Les pr??sentes CGV et les op??rations qui en d??coulent sont r??gies et soumises au droit fran??ais.</p>
            <p>Les pr??sentes CGV sont r??dig??es en langue fran??aise. Dans le cas o?? elles seraient traduites en une ou plusieurs langues ??trang??res, seul le texte fran??ais ferait foi en cas de litige.</p>

            <h3 class="pt-5">ARTICLE 11 - Litiges</h3>
            <p>Pour toute r??clamation merci de contacter le service client??le ?? l???adresse postale ou mail du Prestataire indiqu??e ?? l???ARTICLE 1 des pr??sentes CGV.</p>
            <p>Le Client est inform?? qu'il peut en tout ??tat de cause recourir ?? une m??diation conventionnelle, aupr??s des instances de m??diation sectorielles existantes ou ?? tout mode alternatif de r??glement des diff??rends (conciliation, par exemple) en cas de contestation.</p>
            <p>Le Client est ??galement inform?? qu???il peut, ??galement recourir ?? la plateforme de R??glement en Ligne des Litige (RLL) : https://webgate.ec.europa.eu/odr/main/index.cfm?event=main.home.show</p>
            <p>Tous les litiges auxquels les op??rations d'achat et de vente conclues en application des pr??sentes CGV et qui n???auraient pas fait l???objet d???un r??glement amiable entre le vendeur ou par m??diation, seront soumis aux tribunaux comp??tents dans les conditions de droit commun.</p>



        </div>
    </div>
</div>




@endsection
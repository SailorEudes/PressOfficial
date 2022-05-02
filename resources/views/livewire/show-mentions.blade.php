@extends('theme::layouts.app')


@section('content')

<div>
    @foreach($questions as $question)
    {{ $question->question }}
    {{ $question->response }}
    @endforeach
</div>


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
                <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">CONDITIONS GENERALES<br />DE VENTE – INTERNET</span>
            </h1>
        </div>
        <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto">

            <h3 class="pt-5">ARTICLE 1 - Champ d'application</h3>
            <p>Les présentes Conditions Générales de Vente (dites « CGV ») s'appliquent, sans restriction ni réserve à tout achat des services suivants :
                CMS SAAS</p>
            <p>tels que proposés par le Prestataire aux clients non professionnels (« Les Clients ou le Client ») sur le site : foxpress.fr.
                Les caractéristiques principales des Services sont présentées sur le site internet https://foxpress.fr.
                Le Client est tenu d'en prendre connaissance avant toute passation de commande. Le choix et l'achat d'un Service est de la seule responsabilité du Client.
            </p>
            <p>Ces CGV sont accessibles à tout moment sur le site : foxpress.fr et prévaudront sur toute autre document.
                Le Client déclare avoir pris connaissance des présentes CGV et les avoir acceptées en cochant la case prévue à cet effet avant la mise en œuvre de la procédure de commande en ligne du site : foxpress.fr.
                Sauf preuve contraire, les données enregistrées dans le système informatique du Prestataire constituent la preuve de l'ensemble des transactions conclues avec le Client.
            </p>
            <p><b>Les coordonnées du Prestataire sont les suivantes :</b><br />
            <ul role="list">
                <li>Foxcase, SAS</li>
                <li>Capital social de 3 euros</li>
                <li>Immatriculé au RCS de Paris, sous le numéro 903354843</li>
                <li>60 RUE FRANCOIS 1ER 75008 PARIS</li>
                <li>mail : contact@foxpress.fr</li>
                <li>téléphone : 0610449818</li>
            </ul>
            </p>
            <p>Des droits de douane ou autres taxes locales ou droits d'importation ou taxes d'état sont susceptibles d'être exigibles. Ils seront à la charge et relèvent de la seule responsabilité du Client.</p>

            <h3 class="pt-5">ARTICLE 2 - Prix</h3>
            <p>Les Services sont fournis aux tarifs en vigueur figurant sur le site : foxpress.fr, lors de l'enregistrement de la commande par le Prestataire.</p>
            <p> Les prix sont exprimés en Euros, HT et TTC.</p>
            <p> Les tarifs tiennent compte d'éventuelles réductions qui seraient consenties par le Prestataire sur le site : foxpress.fr.</p>
            <p> Ces tarifs sont fermes et non révisables pendant leur période de validité mais le Prestataire se réserve le droit, hors période de validité, d’en modifier les prix à tout moment.</p>
            <p> Les prix ne comprennent pas les frais de traitement, d'expédition, de transport et de livraison, qui sont facturés en supplément, dans les conditions indiquées sur le site et calculés préalablement à la passation de la commande.</p>
            <p> Le paiement demandé au Client correspond au montant total de l'achat, y compris ces frais.</p>
            <p> Une facture est établie par le Prestataire et remise au Client lors de la fourniture des Services commandés.</p>

            <h3 class="pt-5">ARTICLE 3 – Commandes</h3>
            <p><b>Il appartient au Client de sélectionner sur le site : foxpress.fr les Services qu'il désire commander, selon les modalités suivantes :</b></p>
            <ul role="list">
                <li>Le client choisit l'offre qui convient au mieux à ses attentes, il procède ensuite au paiement via la plateforme paddle, une fois que son paiement est validé il reçoit une facture par email suivi d'un autre email incluant son numéro de licence...</li>
                <li>La vente ne sera considérée comme valide qu’après paiement intégral du prix. Il appartient au Client de vérifier l'exactitude de la commande et de signaler immédiatement toute erreur.</li>
                <li>Toute commande passée sur le site https://foxpress.fr constitue la formation d'un contrat conclu à distance entre le Client et le Prestataire.</li>
                <li>Le Prestataire se réserve le droit d'annuler ou de refuser toute commande d'un Client avec lequel il existerait un litige relatif au paiement d'une commande antérieure.</li>
                <li>Le Client pourra suivre l'évolution de sa commande sur le site.</li>
            </ul>

            <h3 class="pt-5">ARTICLE 4 - Conditions de paiement</h3>
            <p><b>Le prix est payé par voie de paiement sécurisé, selon les modalités suivantes :</b></p>
            <ul role="list">
                <li>paiement par carte bancaire</li>
            </ul>
            <p>Le prix est payable comptant par le Client, en totalité au jour de la pasation de la commande.</p>
            <p>Les données de paiement sont échangées en mode crypté grâce au protocole défini par le prestataire de paiement agréé intervenant pour les transactions bancaires réalisées sur le site https://foxpress.fr.</p>
            <p>Les paiements effectués par le Client ne seront considérés comme définitifs qu'après encaissement effectif des sommes dues, par le Prestataire.</p>
            <p>Le Prestataire ne sera pas tenu de procéder à la fourniture des Services commandés par le Client si celui-ci ne lui en paye pas le prix en totalité dans les conditions ci-dessus indiquées.</p>

            <h3 class="pt-5">ARTICLE 5 - Fourniture des Prestations</h3>
            <p><b>Les Services commandés par le Client seront fournis selon les modalités suivantes :</b></p>
            <ul role="list">
                <li>Service de conception de site web.</li>
            </ul>
            <p>Lesdits Services seront fournis instantanément à compter de la validation définitive de la commande du Client, dans les conditions prévues aux présentes CGV à l'adresse indiquée par le Client lors de sa commande sur le site https://foxpress.fr .</p>
            <p>Le Prestataire s'engage à faire ses meilleurs efforts pour fournir les Services commandés par le Client, dans le cadre d'une obligation de moyen et dans les délais ci-dessus précisés.</p>
            <p>Si les Services commandés n'ont pas été fournis dans un délai de 10 minutes après la date indicative de fourniture, pour toute autre cause que la force majeure ou le fait du Client, la vente des Services pourra être résolue à la demande écrite du Client dans les conditions prévues aux articles L 216-2, L 216-3 et L241-4 du Code de la consommation. Les sommes versées par le Client lui seront alors restituées au plus tard dans les quatorze jours qui suivent la date de dénonciation du contrat, à l'exclusion de toute indemnisation ou retenue.</p>
            <p>En cas de demande particulière du Client concernant les conditions de fourniture des Services, dûment acceptées par écrit par le Prestataire, les coûts y étant liés feront l'objet d'une facturation spécifique complémentaire ultérieure.</p>
            <p>A défaut de réserves ou réclamations expressément émises par le Client lors de la réception des Services, ceux-ci seront réputés conformes à la commande, en quantité et qualité.</p>
            <p>Le Client disposera d'un délai de 5 minutes à compter de la fourniture des Services pour émettre des réclamations par courriel, avec tous les justificatifs y afférents, auprès du Prestataire.</p>
            <p>Aucune réclamation ne pourra être valablement acceptée en cas de non respect de ces formalités et délais par le Client.</p>
            <p>Le Prestataire remboursera ou rectifiera dans les plus brefs délais et à ses frais les Services dont le défaut de conformité aura été dûment prouvé par le Client.</p>

            <h3 class="pt-5">ARTICLE 6 - Droit de rétractation</h3>
            <p>Compte tenu de la nature des Services fournis, les commandes passées par le Client ne bénéficient pas du droit de rétractation.</p>
            <p>Le contrat est donc conclu de façon définitive dès la passation de la commande par le Client selon les modalités précisées aux présentes CGV.</p>

            <h3 class="pt-5">ARTICLE 7 - Responsabilité du Prestataire - Garanties</h3>
            <p>Le Prestataire garantit, conformément aux dispositions légales et sans paiement complémentaire, le Client, contre tout défaut de conformité ou vice caché, provenant d'un défaut de conception ou de réalisation des Services commandés dans les conditions et selon les modalités suivantes :</p>
            <ul role="list">
                <li>Dispositions relatives aux garanties légales</li>
            </ul>
            <p><b>Article L217-4 du Code de la consommation</b></p>
            <p>
                <cite>
                    « Le vendeur est tenu de livrer un bien conforme au contrat et répond des défauts de conformité existant lors de la délivrance. Il répond également des défauts de conformité résultant de l'emballage, des instructions de montage ou de l'installation lorsque celle-ci a été mise à sa charge par le contrat ou a été réalisée sous sa responsabilité. »
                </cite>
            </p>
            <p><b>Article L217-5 du Code de la consommation</b></p>
            <p>
                <cite>
                    <b>« Le bien est conforme au contrat :</b>
                    <br />
                    <b>1° S'il est propre à l'usage habituellement attendu d'un bien semblable et, le cas échéant :</b>
                    <ul role="list">
                        <li><i>s'il correspond à la description donnée par le vendeur et possède les qualités que celui-ci a présentées à l'acheteur sous forme d'échantillon ou de modèle ;</i></li>
                        <li><i>s'il présente les qualités qu'un acheteur peut légitimement attendre eu égard aux déclarations publiques faites par le vendeur, par le producteur ou par son représentant, notamment dans la publicité ou l'étiquetage ;</i></li>
                    </ul>
                    <b>2° Ou s'il présente les caractéristiques définies d'un commun accord par les parties ou est propre à tout usage spécial recherché par l'acheteur, porté à la connaissance du vendeur et que ce dernier a accepté. »</b>
                </cite>
            </p>
            <p><b>Article L217-12 du Code de la consommation</b></p>
            <p>
                <cite>
                    « L'action résultant du défaut de conformité se prescrit par deux ans à compter de la délivrance du bien. »
                </cite>
            </p>
            <p><b>Article L217-16 du Code de la consommation.</b></p>
            <p><cite>« Lorsque l'acheteur demande au vendeur, pendant le cours de la garantie commerciale qui lui a été consentie lors de l'acquisition ou de la réparation d'un bien meuble, une remise en état couverte par la garantie, toute période d'immobilisation d'au moins sept jours vient s'ajouter à la durée de la garantie qui restait à courir. Cette période court à compter de la demande d'intervention de l'acheteur ou de la mise à disposition pour réparation du bien en cause, si cette mise à disposition est postérieure à la demande d'intervention. »</cite></p>
            <p>Afin de faire valoir ses droits, le Client devra informer le Prestataire, par écrit (mail ou courrier), de l'existence des vices ou défauts de conformité.</p>
            <p>Le Prestataire remboursera ou rectifiera ou fera rectifier (dans la mesure du possible) les services jugés défectueux dans les meilleurs délais et au plus tard dans les 15 jours suivant la constatation par le Prestataire du défaut ou du vice. Ce remboursement pourra être fait par virement ou chèque bancaire.</p>
            <p>La garantie du Prestataire est limitée au remboursement des Services effectivement payés par le Client.</p>
            <p>Le Prestataire ne pourra être considéré comme responsable ni défaillant pour tout retard ou inexécution consécutif à la survenance d'un cas de force majeure habituellement reconnu par la jurisprudence française.</p>
            <p>Les Services fournis par l'intermédiaire du site foxpress.fr du Prestataire sont conformes à la réglementation en vigueur en France. La responsabilité du Prestataire ne saurait être engagée en cas de non respect de la législation du pays dans lequel les Services sont fournis, qu'il appartient au Client, qui est seul responsable du choix des Services demandés, de vérifier.</p>

            <h3 class="pt-5">ARTICLE 8 - Données personnelles</h3>
            <p>Le Client est informé que la collecte de ses données à caractère personnel est nécessaire à la vente des Services et leur réalisation et délivrance, confiées au Prestataire. Ces données à caractère personnel sont récoltées uniquement pour l’exécution du contrat de prestations de services.</p>
            <p><b>8.1 Collecte des données à caractère personnel</b></p>
            <p>Les données à caractère personnel qui sont collectées sur le site https://foxpress.fr sont les suivantes :</p>
            <p>Ouverture de compte</p>
            <p>Lors de la création du compte Client / utilisateur :</p>
            <p>Noms, prénoms, adresse postale, numéro de téléphone et adresse e-mail.</p>
            <p>Paiement</p>
            <p>Dans le cadre du paiement des Prestations proposés sur le site https://foxpress.fr, celui-ci enregistre des données financières relatives au compte bancaire ou à la carte de crédit du Client / utilisateur.</p>
            <p><b>8.2 Destinataires des données à caractère personnel</b></p>
            <p>Les données à caractère personnel sont réservées à l’usage unique du Prestataire et de ses salariés.</p>
            <p>Le responsable de traitement des données est le Prestataire, au sens de la loi Informatique et libertés et à compter du 25 mai 2018 du Règlement 2016/679 sur la protection des données à caractère personnel.</p>
            <p><b>8.4 limitation du traitement</b></p>
            <p>Sauf si le Client exprime son accord exprès, ses données à caractère personnelles ne sont pas utilisées à des fins publicitaires ou marketing.</p>
            <p><b>8.5 Durée de conservation des données</b></p>
            <p>Le Prestataire conservera les données ainsi recueillies pendant un délai de 5 ans, couvrant le temps de la prescription de la responsabilité civile contractuelle applicable.</p>
            <p><b>8.6 Sécurité et confidentialité</b></p>
            <p>Le Prestataire met en œuvre des mesures organisationnelles, techniques, logicielles et physiques en matière de sécurité du numérique pour protéger les données personnelles contre les altérations, destructions et accès non autorisés. Toutefois il est à signaler qu’Internet n’est pas un environnement complètement sécurisé et le Prestataire ne peut garantir la sécurité de la transmission ou du stockage des informations sur Internet.</p>
            <p><b>8.7 Mise en œuvre des droits des Clients et utilisateurs</b></p>
            <p>En application de la règlementation applicable aux données à caractère personnel, les Clients et utilisateurs du site https://foxpress.fr disposent des droits suivants :</b>
            <ul role="list">
                <li>Ils peuvent mettre à jour ou supprimer les données qui les concernent de la manière suivante :</li>
                <li>En se connectant à son compte et en le supprimant depuis ses paramètres.</li>
                <li>Ils peuvent supprimer leur compte en écrivant à l’adresse électronique indiqué à l’article 9.3 « Responsable de traitement »</li>
                <li>Ils peuvent exercer leur droit d’accès pour connaître les données personnelles les concernant en écrivant à l’adresse indiqué à l’article 9.3 « Responsable de traitement »</li>
                <li>Si les données à caractère personnel détenues par le Prestataire sont inexactes, ils peuvent demander la mise à jour des informations des informations en écrivant à l’adresse indiqué à l’article 9.3 « Responsable de traitement »</li>
                <li>Ils peuvent demander la suppression de leurs données à caractère personnel, conformément aux lois applicables en matière de protection des données en écrivant à l’adresse indiqué à l’article 9.3 « Responsable de traitement »</li>
                <li>Ils peuvent également solliciter la portabilité des données détenues par le Prestataire vers un autre prestataire</li>
                <li>Enfin, ils peuvent s’opposer au traitement de leurs données par le Prestataire</li>
                <li>Ces droits, dès lors qu’ils ne s’opposent pas à la finalité du traitement, peuvent être exercé en adressant une demande par courrier ou par E-mail au Responsable de traitement dont les coordonnées sont indiquées ci-dessus.</li>
                <li>Le responsable de traitement doit apporter une réponse dans un délai maximum d’un mois.</li>
                <li>En cas de refus de faire droit à la demande du Client, celui-ci doit être motivé.</li>
                <li>Le Client est informé qu’en cas de refus, il peut introduire une réclamation auprès de la CNIL (3 place de Fontenoy, 75007 PARIS) ou saisir une autorité judiciaire.</li>
                <li>Le Client peut être invité à cocher une case au titre de laquelle il accepte de recevoir des mails à caractère informatifs et publicitaires de la part du Prestataire. Il aura toujours la possibilité de retirer son accord à tout moment en contactant le Prestataire (coordonnées ci-dessus) ou en suivant le lien de désabonnement.</li>
            </ul>

            <h3 class="pt-5">ARTICLE 9 - Propriété intellectuelle</h3>
            <p>Le contenu du site https://foxpress.fr est la propriété du Vendeur et de ses partenaires et est protégé par les lois françaises et internationales relatives à la propriété intellectuelle.</p>
            <p>Toute reproduction totale ou partielle de ce contenu est strictement interdite et est susceptible de constituer un délit de contrefaçon.</p>

            <h3 class="pt-5">ARTICLE 10 - Droit applicable - Langue</h3>
            <p>Les présentes CGV et les opérations qui en découlent sont régies et soumises au droit français.</p>
            <p>Les présentes CGV sont rédigées en langue française. Dans le cas où elles seraient traduites en une ou plusieurs langues étrangères, seul le texte français ferait foi en cas de litige.</p>

            <h3 class="pt-5">ARTICLE 11 - Litiges</h3>
            <p>Pour toute réclamation merci de contacter le service clientèle à l’adresse postale ou mail du Prestataire indiquée à l’ARTICLE 1 des présentes CGV.</p>
            <p>Le Client est informé qu'il peut en tout état de cause recourir à une médiation conventionnelle, auprès des instances de médiation sectorielles existantes ou à tout mode alternatif de règlement des différends (conciliation, par exemple) en cas de contestation.</p>
            <p>Le Client est également informé qu’il peut, également recourir à la plateforme de Règlement en Ligne des Litige (RLL) : https://webgate.ec.europa.eu/odr/main/index.cfm?event=main.home.show</p>
            <p>Tous les litiges auxquels les opérations d'achat et de vente conclues en application des présentes CGV et qui n’auraient pas fait l’objet d’un règlement amiable entre le vendeur ou par médiation, seront soumis aux tribunaux compétents dans les conditions de droit commun.</p>



        </div>
    </div>
</div>




@endsection
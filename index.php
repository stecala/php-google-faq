<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- import fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- import bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- import my css -->
    <link rel="stylesheet" href="./style/style.css">

    <title>Domande frequenti</title>
</head>
<body>
    <?php
        $faqs = [
            [
                "question" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
                "answer" => [
                    "<p>La recente <a href='http://curia.europa.eu/juris/document/document.jsf?text=&amp;docid=152065&amp;amppageIndex=0&amp;doclang=it&amp;mode=lst&amp;dir=&amp;occ=first&amp;part=1&amp;cid=276332'>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.</p>",
                    "<p>Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.</p>",
                    "<p>Per presentare una richiesta di rimozione, compila questo <a href='https://support.google.com/legal/contact/lr_eudpa?product=websearch&amp;hl=it'>modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.</p>",
                    "<p>Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.</p>",
                    "<p>Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.</p>"
                ]
            ],
            [
                "question" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
                "answer" => [
                    "<p>Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.</p>",
                    "<p>Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.</p>",
                    "<p>Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href='https://www.google.com/safetycenter/'>Centro Google per la sicurezza online</a>.</p>",
                    "<p><a href='https://privacy.google.com'>Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.</p>"
                ]
            ],
            [
                "question" => "Perché il mio account è associato a un paese?",
                "answer" => [
                    "<p>Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:</p>",
                    "<ol>
                        <li>
                            La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:
                            <ol>
                                <li>Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.</li>
                                <li>Google LLC, con sede negli Stati Uniti, per il resto del mondo.</li>
                            </ol>
                        </li>
                        <li>La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.</li>
                    </ol>",
                    "<p>Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.</p>",
                    "<h3>Stabilire il paese associato al tuo account</h3>",
                    "<p>Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell'ultimo anno.</p>",
                    "<p>I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l'associazione del paese.</p>",
                    "<p>Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. <a href='country-association-contact-us'>Contattaci</a> se ritieni che il paese associato al tuo account sia sbagliato.</p>"
                ]
            ],
            [
                "question" => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
                "answer" => [
                    "<p>I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a href='https://support.google.com/websearch/answer/9109?hl=it'>contattare il webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a href='https://support.google.com/legal/contact/lr_eudpa?product=websearch&amp;hl=it'>fai clic qui</a>. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile <a href='https://support.google.com/websearch/troubleshooter/3111061?hl=it'>visitare la nostra pagina di assistenza per avere ulteriori informazioni</a>.</p>"
                ]
            ],
            [
                "question" => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
                "answer" => [
                    "<p>In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di <a href='privacy/key-terms#toc-terms-referrer-url'>URL referrer</a>. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili <a href='https://support.google.com/websearch/answer/173733'>qui</a>. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio.</p>"
                ]
            ],
        ];
    ?>
    <header class="position-fixed w-100 bg-white border-bottom">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center">
                <div class="col-3 d-flex align-items-center">
                    <div class="logo-container">
                        <img src="./img/google-logo.png" alt="google logo">
                    </div>
                    <span class="privacy">Pivacy e termini</span>
                </div>
                <div class="col-4 d-flex align-items-center justify-content-end">
                    <div class="icon-container">
                        <svg class="gb_Ue" focusable="false" viewBox="0 0 24 24"><path d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z"></path>
                        </svg>
                    </div>
                    <div class="profile">
                        <img src="./img/profile.png" alt="profile pic">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="header-list">
                        <li>Introduzione</li>
                        <li>Norme sulla privacy</li>
                        <li>Termini di servizio</li>
                        <li>Tecnologie</li>
                        <li class="selected">Domande frequenti</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-lg ">
            <div class="row ">
                <?php foreach($faqs as $key => $singleFaqs){ ?>
                <div class="col-12">
                    <h3 class="mt-5">
                        <?php
                        echo $singleFaqs['question'];
                        ?>
                    </h3>
                </div>
                <div class="col-12">
                    <?php
                        for($i = 0 ; $i < count($singleFaqs['answer']); $i++){
                            echo $singleFaqs['answer'][$i];
                        }      
                    ?>
                </div>
                <?php } ?>
            </div>
        </div>

    </main>
    <footer>
        <div class="container-lg">
            <div class="row">
                <div class="col-6">
                        <ul class="footer-list">
                            <li>Google</li>
                            <li>Tutto su Google</li>
                            <li>Privacy</li>
                            <li>Termini</li>
                        </ul>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <span><i class="fa-solid fa-message"></i></span>
                    <select name="pets" id="pet-select" class="ms-3">
                        <option value="italiano">Italiano</option>
                        <option value="espanol">Espanol</option>
                        <option value="english">English</option>
                    </select>
                </div>
            </div>
        </div>                
    </footer>
</body>
</html>
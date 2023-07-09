<div class="container">
    <?php
    $session = \Config\Services::session();
    ?>
    <?php
        if ($session->getFlashdata('success')): ?>
        <div class="alert alert-success text-center alert-dismissible show fade mb-0">
            <?= $session->getFlashdata('success') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <div class="alert alert-primary" role="alert">
        Blog Page
    </div>
</div>

<section class="blog-section">
    <div class="container">
        <h2>All posts</h2>
        <?php if($news): ?>
        <?php foreach ($news as $news_item): ?>
            <h3><a class="no-underline" href="/blog/<?=$news_item["slug"]?>"><?= $news_item['title'] ?></a></h3>
        <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">No Posts have been found</p>
        <?php endif; ?>

    </div>

</section>
<div style="background-color: #b1d24b; color: white; padding-top: 15px; padding-bottom: 20px">
    <div class="container text-center" >
        <div>
            <h1>Pogosta vprašanja</h1>
        </div>
        <div>
            <p>Nekaj najpogostejših vprašanj in odgovorov najdete spodaj, če pa imate še dodatna vprašanja pa nas kontaktirajte.</p>
        </div>
    </div>
    <div style="width: 10%; height: 3px; background-color: white; margin: 10px auto;"></div>
    <section class="fqa-section container" style="color: black
">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Zakaj bi se odločili za elektronsko evidenco delovnega časa?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Elektronska evidenca delovnega časa pripomore pri hitrejši in bolj natančni obdelavi delovnih ur v podjetju in se s tem izogne papirnati obliki vodenja delovnih ur. Do evidence delovnega časa lahko dostopate kjerkoli in kadarkoli. Vsi podatki so shranjeni na enem mestu prav tako pa je tudi vse varno arhivirano za morebitni vpogled v preteklost.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Kaj nudi produkt MojeUre?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        MojeUre je celovit sistem za evidentiranje in vodenje delovnih ur zaposlenih. Aplikacija ponuja zaposlenemu kot nadrejenemu celotno evidenco prisotnosti in odsotnosti iz delovnega mesta. Ure so lahko evidentirane različnih tipov, lahko se beleži le prihode / odhode na delovno mesto lahko pa tudi različne tipe odsotnosti kot so bolniške, dopusti, izredni dopusti, študijski dopusti, potni nalogi, itd.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Kako lahko zaposleni dostopajo do evidence delovnega časa?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Dostop je mogoč preko spletne ali mobilne aplikacije. Zaposleni lahko pridobijo uporabniške prijavne podatke, preko katerih se prijavijo v sistem. Aplikacija omogoča omejevanje pregleda in urejanja delovnih ur, kar je odvisno glede na zahteve nadrejenega v podjetju. Zaposleni lahko tako spremlja kvoto oddelanih delovnih ur, število dni dopusta ter preostale informacije, ki so na voljo. </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                        Kako poteka evidentiranje delovnih ur?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Vnos delovnih ur v evidenco delovnega časa poteka preko spletne ali mobilne aplikacije. V primeru, da podjetje odkupi tudi registrator delovnega časa pa lahko to poteka tudi preko registratorja. Zaposleni oziroma administrator lahko poskrbi za ročni vnos delovnih ur različnega tipa. Uporabnik z enostavnim klikom doda delovne ure, ki so bile v današnjem dnevu izvedene, na posamezni dan pa se lahko zavede neomejeno število delovnih ur različnih tipov.
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                            Kako poteka registracija delovnih ur?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Aplikacija omogoča direktni izvoz vseh tipov delovnih ur za posamezen mesec v datoteke, ki so zahtevane za uvoz v računovodski program katerega uporabljate, pripravljen pa je tudi izračun za prevoz na delo ter prehrano. Uvozna datoteka je pripravljena za računovodske programe Vasco, Birokrat, SAOP, Pantheon, Hermes, OpPis, Norma SOFT Calculus 4, Cadis in AccountingBox. V primeru, da vašega računalniškega programa ni na seznamu pripravimo tudi uvozno datoteko za vaš program brez kakršnih koli dodatnih stroškov.          </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                Ali se lahko mesečne delovne ure uvozi direktno v računovodski program?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Aplikacija omogoča direktni izvoz vseh tipov delovnih ur za posamezen mesec v datoteke, ki so zahtevane za uvoz v računovodski program katerega uporabljate, pripravljen pa je tudi izračun za prevoz na delo ter prehrano. Uvozna datoteka je pripravljena za računovodske programe Vasco, Birokrat, SAOP, Pantheon, Hermes, OpPis, Norma SOFT Calculus 4, Cadis in AccountingBox. V primeru, da vašega računalniškega programa ni na seznamu pripravimo tudi uvozno datoteko za vaš program brez kakršnih koli dodatnih stroškov.
                            </div>

                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                Kako poteka uporaba aplikacije v preizkusnem obdobju?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Vsako podjetje ima na voljo BREZPLAČNO enomesečno preizkusno obdobje evidence delovnega časa. Podjetje v primeru potreb po registratorju prejme v uporabo registrator ter obeske oz. kartice, preko katerih se prijavlja na registrator. Prav tako pridobi seznam uporabniških podatkov, kjer lahko zaposleni tudi samostojno preko spleta ali na mobilni napravi spremlja lastno evidenco.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseThree">
                                Zakaj je vredno izkoristiti enomesečni brezplačni preizkus?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Zdaj lahko BREZPLAČNO in brez obveznosti preizkusite našo programsko opremo in ugotovite, ali je primerna za vaše potrebe. Zakaj ne bi Mojeure aktivirali že danes? Morda boste presenečeni, koliko koristi lahko sistem prinese vašemu podjetju.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseThree">
                                Kakšni so stroški za uporabo aplikacije?
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Strošek, ki ga podjetje plača enkratno je odkup registracijskih naprav v primeru, da jih potrebujete in vzpostavitveni strošek celotnega sistema. Strošek, ki se ga plačuje na mesečni ali letni ravni je zakup lincenc po uporabniku. Če se odločite za letni najem licenc, pa so še dodatni popusti. Montaža, svetovanje, integracija novih funkcionalnosti ter integracija uvozov delovnih ur za vaš računovodski program je popolnoma BREZPLAČNA.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseThree">
                                Kakšna je razlika med registratorjem in registracijsko točko?
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Klasičen način, kjer se zaposleni registrirajo preko registratorja imajo v ta namen kartico oziroma ključek, katerega prislonijo na registrator in se s tem zavede registracija. Registrator za delovanje potrebuje električno napajanje in internetni dostop. Registracija preko registracijske točka poteka z mobilno aplikacijo in ne zahteva električnega napajanja ali internetnega dostopa, vse kar je potrebno je pritrditve točke na določeno mesto, kjer se bodo zaposleni registrirali na delovno mesto.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<section>
    <div class="text-center p-2">
        <h3>Vzpostavite stik z nami</h3>
    </div>
    <div style="width: 10%; height: 3px; background-color: #b1d24b; margin: 10px auto;"></div>
    <div class="container">
        <form class="container w-50">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" required id="floatingInput" placeholder="Janez Novak">
                <label for="floatingInput">Ime in Priimek</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" required id="floatingPhone" placeholder="051123123">
                <label for="floatingPhone">Telefon</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" required id="floatingCompany" placeholder="Podjetje d.o.o">
                <label for="floatingCompany">Podjetje</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" required id="floatingEmail" placeholder="name@example.com">
                <label for="floatingInput">Email naslov</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" required placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Comments</label>
            </div>
            <div class="form-floating mb-3 " style="display: inline-flex">
                <div class="mx-1">
                    <input type="checkbox" value="" aria-label="Checkbox for following text input" id="floatingCheckbox">
                </div>

                <div><label for="floatingCheckbox" style="display: inline-flex; align-self: center;">GDPR</label></div>

            </div>
            <div>
                <small style="font-style: italic">Strinjam se, da družba moje osebne podatke obdeluje za namen izdelave ponudbe in kontakta preko e-pošte ali telefona. Seznanjen sem z Obvestilom o obdelavi osebnih podatkov in pravico, da hrambo mojih osebnih podatkov lahko kadarkoli prekličem na elektronski naslov info@mojeure.si. Družba 1A INTERNET d.o.o. bo po prejemu preklica moje osebne podatke zbrisala.</small>
            </div>
            <div>
                <button type="submit" class="btn btn-light mt-3 px-5 mb-3" style="background-color: #b1d24b; color: white">Pošlji</button>
            </div>
        </form>

    </div>
</section>




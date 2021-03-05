<?php

// override core en language system validation or define your own en language validation message
return [
    'kb' => [
        'title' => 'Kunskapsdatabas',
        'menu' => 'Kunskapsdatabas',
        'howCanWeHelpYou' => 'Hur kan vi hjälpa dig?',
        'search' => 'Sök i kunskapsdatabas',
        'moreTopics' => 'Mer ämnen',
        'mostPopular' => 'Mest populära artiklar',
        'newest' => 'Nyaste artiklar',
        'postedOn' => 'Postad %date%',
        'searchResults' => 'Sökresultat',
        'searchResultsFor' => 'Sökresultat för %keyword%',
    ],
    'login' => [
        'menu' => 'Logga in',
        'title' => 'Logga in till %site_name%',
        'button' => 'Logga in',
        'forgotPassword' => 'Glömt lösenord',
        'forgotDescription' => 'Ange din registrerade epostadress och klicka på Skicka. Du kommer att få ett epostmeddelende med en länk för att återställa ditt lösenord.',
        'passwordSent' => 'Vi har skickar ett nytt lösenord till epostadressen du angav',
    ],
    'submitTicket' => [
        'title' => 'Skapa ett ärende',
        'menu' => 'Skapa ärende',
        'selectDepartment' => 'Om du inte hittar en lösning på ditt problem så kan du skapa ett ärende genom att välja avdelning nedan.',
	'generalInformation' => 'Allmän information',
        'requestReceived' => 'Ditt ärende är mottaget',
        'requestReceivedDescription' => 'Vi har mottagit ditt ärende och återkommer inom kort. Du kan logga in på serviceportalen för att se status på ditt ärende, eller kolla din mail för vidare uppdateringar.',
    ],
    'viewTickets' => [
        'title' => 'Mina ärenden',
        'menu' => 'Visa ärenden',
        'description' => 'Listade nedan är dom ärenden du skapat tidigare. Klicka på ett ärende för att se mer.',
        'search' => 'Sök ärende ID',
        'notFound' => 'Ärende hittades inte.',
        'ticketID' => 'Visande ärende #%id%',
        'ticketClosed' => 'Ärendet är stängt.',
        'replySent' => 'Ditt svar på detta ärende har skickats.',
    ],
    'account' => [
        'menu' => 'Konto',
        'editProfile' => 'Redigera profil',
        'logout' => 'Logga ut',
        'general' => 'Allmänt',
        'changePassword' => 'Byt lösenord',
        'profileUpdated' => 'Din profil har uppdaterats.',
        'passwordUpdated' => 'Lösenord har uppdaterats.'
    ],
    'form' => [
        'email' => 'Epostadress',
        'password' => 'Lösenord',
        'submit' => 'Skicka',
        'captchaVerification' => 'CAPTCHA verifiering',
        'search' => 'Sök',
        'ticketID' => 'Ärende ID',
        'fullName' => 'Fullständigt namn',
        'department' => 'Avdelning',
        'priority' => 'Prioritet',
        'subject' => 'Ärende',
        'yourMessage' => 'Ditt meddelande',
        'attachments' => 'Bilagor',
        'allowedFiles' => 'Tillåtna filer',
        'browse' => 'Bläddra',
        'chooseFile' => 'Välj fil',
        'lastUpdate' => 'Senaste uppdatering',
        'status' => 'Status',
        'addReply' => 'Lägg till svar',
        'goBack' => 'Gå tillbaks',
        'staff' => 'Personal',
        'timezone' => 'Tidszon',
        'defaultTimezone' => 'Standard tidszon',
        'newPassword' => 'Nytt lösenord',
        'existingPassword' => 'Befintligt lösenord',
        'confirm' => 'Bekräfta',
        'save' => 'Spara',
        'open' => 'Öppen',
        'answered' => 'Besvarat',
        'awaiting_reply' => 'Avvaktar svar',
        'in_progress' => 'Pågående',
        'closed' => 'Stängt',
        'user' => 'Användare',
        'departments' => 'Avdelning',
        'next' => 'Nästa'
    ],
    'error' => [
        'uploadFile' => 'Fel vid uppladdning av fil.',
        'fileNotAllowed' => 'Fil tillåts inte.',
        'fileBig' => 'Filen för stor, maximal filstorlek är %size%',
        'search' => 'Vi hittade ingenting relaterat till din sökning.',
        'fileNotFound' => 'Fil hittades inte.',
        'fileNotFoundMsg' => 'Filen du försöker ladda ner är inte längre tillgänglig.',
        'enterFullName' => 'Ange fullständigt namn.',
        'enterValidEmail' => 'Ange giltig epostadress.',
        'emailUsed' => 'Epostadress redan associerad till ett annat konto.',
        'enterSubject' => 'Ange ärende.',
        'enterYourMessage' => 'Ange meddelande',
        'selectValidDepartment' => 'Välj en giltig avdelning.',
        'invalidCaptcha' => 'FEL: Ogiltig captcha verifiering.',
        'emailNotFound' => 'Epost hittades inte.',
        'invalidEmailPassword' => 'Ogiltig epostadress eller lösenord.',
        'recordsNotFound' => 'Poster hittades inte.',
        'enterExistingPassword' => 'Ange ditt befintliga lösenord.',
        'enterNewPassword' => 'Ange ditt nya lösenord.',
        'passwordsNotMatches' => 'Det nya lösenordet matchar inte.',
        'wrongExistingPassword' => 'Ditt nuvarande lösenord är felaktigt.'
    ],
    '404' => [
        'title' => 'Sidan hittades inte - 404',
        'body' => 'Oops, sidan kan ha tagits bort eller så är den tillfälligt otillgänglig.',
    ]
];
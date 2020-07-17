<!DOCTYPE html>
  <head>
    <title>Bachelor Malte Hillebrand</title>
    <link rel="shortcut icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>

  <body style="background-color: rgb(0, 153, 153);">
    <?php
    /* ORIGINAL
    if(!empty($_POST)) {
      if(trim($_POST['ErstesItem']) === '') {
        $nameError = 'Please enter your name.';
        $hasError = true;
      } else {
        $name = trim($_POST['contactName']);
      }

      if(trim($_POST['ZweitesItem']) === '')  {
        $emailError = 'Please enter your email address.';
        $hasError = true;
      } else {
        $email = trim($_POST['email']);
      }

      if(trim($_POST['DrittesItem']) === '') {
        $commentError = 'Please enter a message.';
        $hasError = true;
      } else {
        if(function_exists('stripslashes')) {
          $comments = stripslashes(trim($_POST['comments']));
        } else {
          $comments = trim($_POST['comments']);
        }
      }

      if(!isset($hasError)) {
      /*  $emailTo = get_option('tz_email');
        if (!isset($emailTo) || ($emailTo == '') ){
          $emailTo = get_option('admin_email');
        }
        $subject = '[PHP Snippets] From '.$name;
        $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
        $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true; */

/*        global $wpdb;
        $table = $wpdb->prefix.'testantworten';
        
        $data = array(
            'item1' => $_POST['ErstesItem'],
            'item2' => $_POST['ZweitesItem'],
            'item3' => $_POST['DrittesItem'],
        );
        $format = array(
            '%s',
            '%s',
            '%s' */
        //);
        //$success=$wpdb->insert( $table, $data, $format );

        /* if($success){
          echo 'data has been save' ; 
         } */
      //}

    //}


    // NEW

    if(!empty($_POST)) {
        global $wpdb;
        $table = $wpdb->prefix.'ergebnisse';
        
        $data = array(
            'geschlecht' => $_POST['geschlecht'],
            'alter-user' => $_POST['alter'],
            'device' => $_POST['device'],
            'wohnort' => $_POST['wohnort'],
            'location' => $_POST['location'],
            'online-erwartung' => $_POST['online-erwartung'],
            'zeit-bewertung' => $_POST['zeit-bewertung'],
            'internet-bewertung' => $_POST['internet-bewertung'],
            'digital-knowledge' => $_POST['digital-knowledge'],
            'zeit-druck' => $_POST['zeit-druck'],
            'generation-gap' => $_POST['generation-gap'],
            'zukunft' => $_POST['zukunft'],
            'emotion-0-wohlbefinden' => $_POST['emotion-0-wohlbefinden'],
            'emotion-0-energielos' => $_POST['emotion-0-energielos'],
            'emotion-0-konzentriert' => $_POST['emotion-0-konzentriert'],
            'emotion-0-erregt' => $_POST['emotion-0-erregt'],
            'emotion-0-angst' => $_POST['emotion-0-angst'],
            'emotion-0-entspannung' => $_POST['emotion-0-entspannung'],
            'emotion-0-muede' => $_POST['emotion-0-muede'],
            'emotion-0-aggressiv' => $_POST['emotion-0-aggressiv'],
            'emotion-0-wach' => $_POST['emotion-0-wach'],
            'loadertype01' => $_POST['loadertype01'],
            '01-01-01' => $_POST['01-01-01'],
            '01-01-01-target' => $_POST['01-01-01-target'],
            '01-01-01-time' => $_POST['01-01-01-time'],
            '01-01-02' => $_POST['01-01-02'],
            '01-01-02-target' => $_POST['01-01-02-target'],
            '01-01-02-time' => $_POST['01-01-02-time'],
            'loesung-01-01-time' => $_POST['loesung-01-01-time'],
            '01-02-01' => $_POST['01-02-01'],
            '01-02-01-target' => $_POST['01-02-01-target'],
            '01-02-01-time' => $_POST['01-02-01-time'],
            '01-02-02' => $_POST['01-02-02'],
            '01-02-02-target' => $_POST['01-02-02-target'],
            '01-02-02-time' => $_POST['01-02-02-time'],
            'loesung-01-02-time' => $_POST['loesung-01-02-time'],
            '01-03-01' => $_POST['01-03-01'],
            '01-03-01-target' => $_POST['01-03-01-target'],
            '01-03-01-time' => $_POST['01-03-01-time'],
            '01-03-02' => $_POST['01-03-02'],
            '01-03-02-target' => $_POST['01-03-02-target'],
            '01-03-02-time' => $_POST['01-03-02-time'],
            'loesung-01-03-time' => $_POST['loesung-01-03-time'],
            '01-04-01' => $_POST['01-04-01'],
            '01-04-01-target' => $_POST['01-04-01-target'],
            '01-04-01-time' => $_POST['01-04-01-time'],
            '01-04-02' => $_POST['01-04-02'],
            '01-04-02-target' => $_POST['01-04-02-target'],
            '01-04-02-time' => $_POST['01-04-02-time'],
            'loesung-01-04-time' => $_POST['loesung-01-04-time'],
            '01-05-01' => $_POST['01-05-01'],
            '01-05-01-target' => $_POST['01-05-01-target'],
            '01-05-01-time' => $_POST['01-05-01-time'],
            '01-05-02' => $_POST['01-05-02'],
            '01-05-02-target' => $_POST['01-05-02-target'],
            '01-05-02-time' => $_POST['01-05-02-time'],
            'loesung-01-05-time' => $_POST['loesung-01-05-time'],
            'emotion-1-wohlbefinden' => $_POST['emotion-1-wohlbefinden'],
            'emotion-1-energielos' => $_POST['emotion-1-energielos'],
            'emotion-1-konzentriert' => $_POST['emotion-1-konzentriert'],
            'emotion-1-erregt' => $_POST['emotion-1-erregt'],
            'emotion-1-angst' => $_POST['emotion-1-angst'],
            'emotion-1-entspannung' => $_POST['emotion-1-entspannung'],
            'emotion-1-muede' => $_POST['emotion-1-muede'],
            'emotion-1-aggressiv' => $_POST['emotion-1-aggressiv'],
            'emotion-1-wach' => $_POST['emotion-1-wach'],
            'flow-1' => $_POST['flow-1'],
            'zeit-1-schneller' => $_POST['zeit-1-schneller'],
            'zeit-1-langsamer' => $_POST['zeit-1-langsamer'],
            'zeit-1-bearbeitung' => $_POST['zeit-1-bearbeitung'],
            'zeit-1-warten' => $_POST['zeit-1-warten'],
            'wartezeit-1-gut' => $_POST['wartezeit-1-gut'],
            'wartezeit-1-schlecht' => $_POST['wartezeit-1-schlecht'],
            'wartezeit-1-keinekonzentration' => $_POST['wartezeit-1-keinekonzentration'],
            'wartezeit-1-unkonzentriert' => $_POST['wartezeit-1-unkonzentriert'],
            'fragebogen-01-time' => $_POST['fragebogen-01-time'],
            'loadertype02' => $_POST['loadertype02'],
            '02-01-01' => $_POST['02-01-01'],
            '02-01-01-target' => $_POST['02-01-01-target'],
            '02-01-01-time' => $_POST['02-01-01-time'],
            '02-01-02' => $_POST['02-01-02'],
            '02-01-02-target' => $_POST['02-01-02-target'],
            '02-01-02-time' => $_POST['02-01-02-time'],
            'loesung-02-01-time' => $_POST['loesung-02-01-time'],
            '02-02-01' => $_POST['02-02-01'],
            '02-02-01-target' => $_POST['02-02-01-target'],
            '02-02-01-time' => $_POST['02-02-01-time'],
            '02-02-02' => $_POST['02-02-02'],
            '02-02-02-target' => $_POST['02-02-02-target'],
            '02-02-02-time' => $_POST['02-02-02-time'],
            'loesung-02-02-time' => $_POST['loesung-02-02-time'],
            '02-03-01' => $_POST['02-03-01'],
            '02-03-01-target' => $_POST['02-03-01-target'],
            '02-03-01-time' => $_POST['02-03-01-time'],
            '02-03-02' => $_POST['02-03-02'],
            '02-03-02-target' => $_POST['02-03-02-target'],
            '02-03-02-time' => $_POST['02-03-02-time'],
            'loesung-02-03-time' => $_POST['loesung-02-03-time'],
            '02-04-01' => $_POST['02-04-01'],
            '02-04-01-target' => $_POST['02-04-01-target'],
            '02-04-01-time' => $_POST['02-04-01-time'],
            '02-04-02' => $_POST['02-04-02'],
            '02-04-02-target' => $_POST['02-04-02-target'],
            '02-04-02-time' => $_POST['02-04-02-time'],
            'loesung-02-04-time' => $_POST['loesung-02-04-time'],
            '02-05-01' => $_POST['02-05-01'],
            '02-05-01-target' => $_POST['02-05-01-target'],
            '02-05-01-time' => $_POST['02-05-01-time'],
            '02-05-02' => $_POST['02-05-02'],
            '02-05-02-target' => $_POST['02-05-02-target'],
            '02-05-02-time' => $_POST['02-05-02-time'],
            'loesung-02-05-time' => $_POST['loesung-02-05-time'],
            'emotion-2-wohlbefinden' => $_POST['emotion-2-wohlbefinden'],
            'emotion-2-energielos' => $_POST['emotion-2-energielos'],
            'emotion-2-konzentriert' => $_POST['emotion-2-konzentriert'],
            'emotion-2-erregt' => $_POST['emotion-2-erregt'],
            'emotion-2-angst' => $_POST['emotion-2-angst'],
            'emotion-2-entspannung' => $_POST['emotion-2-entspannung'],
            'emotion-2-muede' => $_POST['emotion-2-muede'],
            'emotion-2-aggressiv' => $_POST['emotion-2-aggressiv'],
            'emotion-2-wach' => $_POST['emotion-2-wach'],
            'flow-2' => $_POST['flow-2'],
            'zeit-2-schneller' => $_POST['zeit-2-schneller'],
            'zeit-2-langsamer' => $_POST['zeit-2-langsamer'],
            'zeit-2-bearbeitung' => $_POST['zeit-2-bearbeitung'],
            'zeit-2-warten' => $_POST['zeit-2-warten'],
            'wartezeit-2-gut' => $_POST['wartezeit-2-gut'],
            'wartezeit-2-schlecht' => $_POST['wartezeit-2-schlecht'],
            'wartezeit-2-keinekonzentration' => $_POST['wartezeit-2-keinekonzentration'],
            'wartezeit-2-unkonzentriert' => $_POST['wartezeit-2-unkonzentriert'],
            'fragebogen-02-time' => $_POST['fragebogen-02-time'],
            'loadertype03' => $_POST['loadertype03'],
            '03-01-01' => $_POST['03-01-01'],
            '03-01-01-target' => $_POST['03-01-01-target'],
            '03-01-01-time' => $_POST['03-01-01-time'],
            '03-01-02' => $_POST['03-01-02'],
            '03-01-02-target' => $_POST['03-01-02-target'],
            '03-01-02-time' => $_POST['03-01-02-time'],
            'loesung-03-01-time' => $_POST['loesung-03-01-time'],
            '03-02-01' => $_POST['03-02-01'],
            '03-02-01-target' => $_POST['03-02-01-target'],
            '03-02-01-time' => $_POST['03-02-01-time'],
            '03-02-02' => $_POST['03-02-02'],
            '03-02-02-target' => $_POST['03-02-02-target'],
            '03-02-02-time' => $_POST['03-02-02-time'],
            'loesung-03-02-time' => $_POST['loesung-03-02-time'],
            '03-03-01' => $_POST['03-03-01'],
            '03-03-01-target' => $_POST['03-03-01-target'],
            '03-03-01-time' => $_POST['03-03-01-time'],
            '03-03-02' => $_POST['03-03-02'],
            '03-03-02-target' => $_POST['03-03-02-target'],
            '03-03-02-time' => $_POST['03-03-02-time'],
            'loesung-03-03-time' => $_POST['loesung-03-03-time'],
            '03-04-01' => $_POST['03-04-01'],
            '03-04-01-target' => $_POST['03-04-01-target'],
            '03-04-01-time' => $_POST['03-04-01-time'],
            '03-04-02' => $_POST['03-04-02'],
            '03-04-02-target' => $_POST['03-04-02-target'],
            '03-04-02-time' => $_POST['03-04-02-time'],
            'loesung-03-04-time' => $_POST['loesung-03-04-time'],
            '03-05-01' => $_POST['03-05-01'],
            '03-05-01-target' => $_POST['03-05-01-target'],
            '03-05-01-time' => $_POST['03-05-01-time'],
            '03-05-02' => $_POST['03-05-02'],
            '03-05-02-target' => $_POST['03-05-02-target'],
            '03-05-02-time' => $_POST['03-05-02-time'],
            'loesung-03-05-time' => $_POST['loesung-03-05-time'],
            'emotion-3-wohlbefinden' => $_POST['emotion-3-wohlbefinden'],
            'emotion-3-energielos' => $_POST['emotion-3-energielos'],
            'emotion-3-konzentriert' => $_POST['emotion-3-konzentriert'],
            'emotion-3-erregt' => $_POST['emotion-3-erregt'],
            'emotion-3-angst' => $_POST['emotion-3-angst'],
            'emotion-3-entspannung' => $_POST['emotion-3-entspannung'],
            'emotion-3-muede' => $_POST['emotion-3-muede'],
            'emotion-3-aggressiv' => $_POST['emotion-3-aggressiv'],
            'emotion-3-wach' => $_POST['emotion-3-wach'],
            'flow-3' => $_POST['flow-3'],
            'zeit-3-schneller' => $_POST['zeit-3-schneller'],
            'zeit-3-langsamer' => $_POST['zeit-3-langsamer'],
            'zeit-3-bearbeitung' => $_POST['zeit-3-bearbeitung'],
            'zeit-3-warten' => $_POST['zeit-3-warten'],
            'wartezeit-3-gut' => $_POST['wartezeit-3-gut'],
            'wartezeit-3-schlecht' => $_POST['wartezeit-3-schlecht'],
            'wartezeit-3-keinekonzentration' => $_POST['wartezeit-3-keinekonzentration'],
            'wartezeit-3-unkonzentriert' => $_POST['wartezeit-3-unkonzentriert'],
            'finale-aufgabe' => $_POST['finale-aufgabe'],
            'finale-ausdauer' => $_POST['finale-ausdauer'],
            'finale-technik' => $_POST['finale-technik'],
            'finale-bias' => $_POST['finale-bias'],
            'finale-ladebalken' => $_POST['finale-ladebalken'],
            'finale-notes' => $_POST['finale-notes'],
            'flowgamescore' => $_POST['flowgamescore']
        );
        $format = array(
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
            '%s'
        );
        $success=$wpdb->insert( $table, $data, $format );
        /* if($success){
          echo 'data has been save' ; 
         } */
      }?>
    <form id="fragebogen" method="post">
      <div id="main">
        <div id="content" class="container">
          <div id="loader" style="display:none">
            <div id="loader01" style="display:none">
            Nächste Seite wird geladen.
            </div>
            <div id="loader02" style="display:none">
              <div id="loader-container">
                <div id="loader-progress">
                  &nbsp;
                </div>
                <div id="loader-progress-bg">
                  &nbsp;
                </div>
              </div>
            </div>
            <div id="loader03" style="display:none">
              <p><b>Im Hintergrund lädt die nächste Seite.</b> Währenddessen kannst du dieses Minispiel spielen.</p>
              <p>Vergiss nicht auf <b>Weiter zu klicken, wenn die Seite geladen ist</b> um fortzufahren.</p>
              <div id="flow-loader-container">
                <div id="flow-loader-progress">
                  &nbsp;
                </div>
                <div id="flow-loader-progress-bg">
                  &nbsp;
                </div>
              </div>
              <button type="button" id="flow-loader-continue" disabled>Lädt</button>
              <div id="flowtutorial">
                <h3>Welches Symbol auf der rechten Seite passt zu dem großen auf der linken Seite?</h3>
                </div>
              <div id="flowscore">
                  <p>Dein Score: </p> <p>0</p>
              </div>
              <div id="flowtarget">

              </div>
              <div id="flowoptions">

              </div>
            </div>
          </div>
          <div id="intro" class="page" style="display: none;">
            <h1>Experiment zur Überprüfung der emotionalen Response</h1>
            <h3>Im Rahmen einer Bachelorarbeit von Malte Hillebrand 2020</h3>
            <p>
              Zuerst einmal möchte ich mich bedanken, dass du dir die Zeit nimmst an meinem Experiment teilzunehmen. Ziel meiner Forschung ist es deine emotionalen Reaktionen bei den bevorstehenden Aufgaben zu messen und anschließend auszuwerten. Mit anderen Worten: Ohne dich würde hier gar nichts laufen.
            </p>
            <p>
              Da ich in diesem Rahmen natürlich nicht deine körperlichen Reaktionen messen kann, muss ich mit einer anschließenden Befragung versuchen deinen emotionalen Zustand zu bewerten. <b>Daher bitte ich dich die Fragebögen ehrlich und gewissenhaft zu beantworten.</b>
            </p>
            <p>Bevor wir loslegen noch zwei Hinweise:</p>
            <p><b>Das Experiment wird ungefähr 15 Minuten dauern.</b> Stelle sicher, dass du gerade die Zeit dafür hast es in einem Durchgang zu absolvieren.</p>
            <p><b>Deine Daten werden anonymisiert übermittelt und für 14 Tage in einer Datenbank gespeichert.</b> Des Weiteren präsentiere ich die Ergebnisse als zentralen Teil meiner Bachelorarbeit. In diesem Zusammenhang werden sie der Öffentlichkeit zugänglich gemacht.</p>
            <p>Wenn du damit einverstanden bist, können wir loslegen.</p>
            <button type="button" onclick="nextPage(false)"><span>Alles klar!</span></button>
          </div>
          <div id="startFragebogen" class="page" style="display: none;">
            <h1>Fragebogen zur Kontextualisierung</h1>
            <p>
              Zuerst brauche ich noch ein paar Informationen über dich.
            </p>
            <p>Welchem Geschlecht fühlst du dich zugehörig? (Pflichtfeld)</p>
            <label for="geschlecht-m">
              <input type="radio" id="geschlecht-m" name="geschlecht" value="m" class="pflichtfeld">
              Männlich
            </label>
            <label for="geschlecht-w">
              <input type="radio" id="geschlecht-w" name="geschlecht" value="w" class="pflichtfeld">
              Weiblich
          </label>
          <label for="geschlecht-x">
              <input type="radio" id="geschlecht-x" name="geschlecht" value="x" class="pflichtfeld">
              Divers
            </label>
            <br>
            <label for="alter">Wie alt bist du? (Pflichtfeld)
              <input type="text" name="alter" id="alter" value="" class="pflichtfeld"/></label>
              <br>
            <label for="wohnort">Wo wohnst du? (Pflichtfeld)
              <input type="text" name="wohnort" id="wohnort" value="" class="pflichtfeld"/></label>
              <p>Mit welchem Endgerät nimmst du an diesem Experiment teil? (Pflichtfeld)</p>
              <label for="device-computer">
                <input type="radio" id="device-computer" name="device" value="computer" class="pflichtfeld">
                Computer / Laptop
              </label>
              <label for="device-tablet">
                <input type="radio" id="device-tablet" name="device" value="tablet" class="pflichtfeld">
                Tablet
            </label>
            <label for="device-mobile">
                <input type="radio" id="device-mobile" name="device" value="smartphone" class="pflichtfeld">
                Smartphone
              </label>
              <br>
            <label for="location">An welchem Ort befindest du dich für die Dauer des Experiments (Zuhause, Park etc.)? (Pflichtfeld)
              <input type="text" name="location" id="location" value="" class="pflichtfeld"/></label>

              <hr>
            <h3>Wie sehr stimmst du den folgenden Aussagen - in Bezug auf dich – zu? (Pflichtfelder)</h3>

            <p>Ich habe so ein bisschen das Gefühl, dass man eigentlich mittlerweile generell davon ausgeht, dass ich sowieso ständig online bin.</p>
            <label for="online-erwartung-1">
              <input type="radio" id="online-erwartung-1" name="online-erwartung" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="online-erwartung-2">
              <input type="radio" id="online-erwartung-2" name="online-erwartung" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="online-erwartung-3">
              <input type="radio" id="online-erwartung-3" name="online-erwartung" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="online-erwartung-4">
              <input type="radio" id="online-erwartung-4" name="online-erwartung" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="online-erwartung-5">
              <input type="radio" id="online-erwartung-5" name="online-erwartung" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>

            <p>Wie ich meine verfügbare Zeit nutze wird von anderen Leuten bewertet und kritisch betrachtet.</p>
            <label for="zeit-bewertung-1">
              <input type="radio" id="zeit-bewertung-1" name="zeit-bewertung" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="zeit-bewertung-2">
              <input type="radio" id="zeit-bewertung-2" name="zeit-bewertung" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="zeit-bewertung-3">
              <input type="radio" id="zeit-bewertung-3" name="zeit-bewertung" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="zeit-bewertung-4">
              <input type="radio" id="zeit-bewertung-4" name="zeit-bewertung" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="zeit-bewertung-5">
              <input type="radio" id="zeit-bewertung-5" name="zeit-bewertung" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>

            <p>Ich wäre mehr im Einklang mit meiner Umgebung ohne das Internet.</p>
            <label for="internet-bewertung-1">
              <input type="radio" id="internet-bewertung-1" name="internet-bewertung" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="internet-bewertung-2">
              <input type="radio" id="internet-bewertung-2" name="internet-bewertung" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="internet-bewertung-3">
              <input type="radio" id="internet-bewertung-3" name="internet-bewertung" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="internet-bewertung-4">
              <input type="radio" id="internet-bewertung-4" name="internet-bewertung" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="internet-bewertung-5">
              <input type="radio" id="internet-bewertung-5" name="internet-bewertung" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>

            <p>Ich kenne mich aus in der digitalen Welt.</p>
            <label for="digital-knowledge-1">
              <input type="radio" id="digital-knowledge-1" name="digital-knowledge" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="digital-knowledge-2">
              <input type="radio" id="digital-knowledge-2" name="digital-knowledge" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="digital-knowledge-3">
              <input type="radio" id="digital-knowledge-3" name="digital-knowledge" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="digital-knowledge-4">
              <input type="radio" id="digital-knowledge-4" name="digital-knowledge" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="digital-knowledge-5">
              <input type="radio" id="digital-knowledge-5" name="digital-knowledge" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>

            <p>Ich habe das Gefühl, ich habe zu wenig Zeit.</p>
            <label for="zeit-druck-1">
              <input type="radio" id="zeit-druck-1" name="zeit-druck" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="zeit-druck-2">
              <input type="radio" id="zeit-druck-2" name="zeit-druck" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="zeit-druck-3">
              <input type="radio" id="zeit-druck-3" name="zeit-druck" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="zeit-druck-4">
              <input type="radio" id="zeit-druck-4" name="zeit-druck" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="zeit-druck-5">
              <input type="radio" id="zeit-druck-5" name="zeit-druck" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>

            <p>Meine Eltern und die Menschen ihrer Generation sind in einer Welt aufgewachsen, die sich komplett von meiner Lebensrealität unterscheidet.</p>
            <label for="generation-gap-1">
              <input type="radio" id="generation-gap-1" name="generation-gap" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="generation-gap-2">
              <input type="radio" id="generation-gap-2" name="generation-gap" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="generation-gap-3">
              <input type="radio" id="generation-gap-3" name="generation-gap" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="generation-gap-4">
              <input type="radio" id="generation-gap-4" name="generation-gap" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="generation-gap-5">
              <input type="radio" id="generation-gap-5" name="generation-gap" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>

            <p>Was die Zukunft bringt, kann ich überhaupt nicht einschätzen.</p>
            <label for="zukunft-1">
              <input type="radio" id="zukunft-1" name="zukunft" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="zukunft-2">
              <input type="radio" id="zukunft-2" name="zukunft" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="zukunft-3">
              <input type="radio" id="zukunft-3" name="zukunft" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="zukunft-4">
              <input type="radio" id="zukunft-4" name="zukunft" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="zukunft-5">
              <input type="radio" id="zukunft-5" name="zukunft" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>
            <hr>
            <!-- Subjektive Befindlichkeit -->
            <p>Bewerte die Aussagen nach deinem Gemütszustand <b>in diesem Moment</b>, nicht allgemein.</p>
            <p>Ich fühle mich unbeschwert, zufrieden, angenehm, glücklich ...</p>
            <label for="emotion-0-wohlbefinden-1">
              <input type="radio" id="emotion-0-wohlbefinden-1" name="emotion-0-wohlbefinden" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="emotion-0-wohlbefinden-2">
              <input type="radio" id="emotion-0-wohlbefinden-2" name="emotion-0-wohlbefinden" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="emotion-0-wohlbefinden-3">
              <input type="radio" id="emotion-0-wohlbefinden-3" name="emotion-0-wohlbefinden" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="emotion-0-wohlbefinden-4">
              <input type="radio" id="emotion-0-wohlbefinden-4" name="emotion-0-wohlbefinden" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="emotion-0-wohlbefinden-5">
              <input type="radio" id="emotion-0-wohlbefinden-5" name="emotion-0-wohlbefinden" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>

            <p>Ich fühle mich abgearbeitet, energielos, zermürbt, faul ...</p>
            <label for="emotion-0-energielos-1">
              <input type="radio" id="emotion-0-energielos-1" name="emotion-0-energielos" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="emotion-0-energielos-2">
              <input type="radio" id="emotion-0-energielos-2" name="emotion-0-energielos" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="emotion-0-energielos-3">
              <input type="radio" id="emotion-0-energielos-3" name="emotion-0-energielos" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="emotion-0-energielos-4">
              <input type="radio" id="emotion-0-energielos-4" name="emotion-0-energielos" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="emotion-0-energielos-5">
              <input type="radio" id="emotion-0-energielos-5" name="emotion-0-energielos" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>

            <p>Ich fühle mich konzentriert, ausdauernd, betriebsam, tüchtig ...</p>
            <label for="emotion-0-konzentriert-1">
              <input type="radio" id="emotion-0-konzentriert-1" name="emotion-0-konzentriert" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="emotion-0-konzentriert-2">
              <input type="radio" id="emotion-0-konzentriert-2" name="emotion-0-konzentriert" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="emotion-0-konzentriert-3">
              <input type="radio" id="emotion-0-konzentriert-3" name="emotion-0-konzentriert" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="emotion-0-konzentriert-4">
              <input type="radio" id="emotion-0-konzentriert-4" name="emotion-0-konzentriert" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="emotion-0-konzentriert-5">
              <input type="radio" id="emotion-0-konzentriert-5" name="emotion-0-konzentriert" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>

            <p>Ich fühle mich aufgeregt, nervös, erregt, unausgeglichen ...</p>
            <label for="emotion-0-erregt-1">
              <input type="radio" id="emotion-0-erregt-1" name="emotion-0-erregt" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="emotion-0-erregt-2">
              <input type="radio" id="emotion-0-erregt-2" name="emotion-0-erregt" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="emotion-0-erregt-3">
              <input type="radio" id="emotion-0-erregt-3" name="emotion-0-erregt" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="emotion-0-erregt-4">
              <input type="radio" id="emotion-0-erregt-4" name="emotion-0-erregt" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="emotion-0-erregt-5">
              <input type="radio" id="emotion-0-erregt-5" name="emotion-0-erregt" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>

            <p>Ich fühle mich ängstlich, verletzbar, angsterfüllt, furchtsam ...</p>
            <label for="emotion-0-angst-1">
              <input type="radio" id="emotion-0-angst-1" name="emotion-0-angst" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="emotion-0-angst-2">
              <input type="radio" id="emotion-0-angst-2" name="emotion-0-angst" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="emotion-0-angst-3">
              <input type="radio" id="emotion-0-angst-3" name="emotion-0-angst" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="emotion-0-angst-4">
              <input type="radio" id="emotion-0-angst-4" name="emotion-0-angst" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="emotion-0-angst-5">
              <input type="radio" id="emotion-0-angst-5" name="emotion-0-angst" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>

            <p>Ich fühle mich entspannt, gelöst, unbesorgt, unbekümmert ...</p>
            <label for="emotion-0-entspannung-1">
              <input type="radio" id="emotion-0-entspannung-1" name="emotion-0-entspannung" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="emotion-0-entspannung-2">
              <input type="radio" id="emotion-0-entspannung-2" name="emotion-0-entspannung" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="emotion-0-entspannung-3">
              <input type="radio" id="emotion-0-entspannung-3" name="emotion-0-entspannung" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="emotion-0-entspannung-4">
              <input type="radio" id="emotion-0-entspannung-4" name="emotion-0-entspannung" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="emotion-0-entspannung-5">
              <input type="radio" id="emotion-0-entspannung-5" name="emotion-0-entspannung" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>

            <p>Ich fühle mich träge, müde, schläfrig, denkfaul ...</p>
            <label for="emotion-0-muede-1">
              <input type="radio" id="emotion-0-muede-1" name="emotion-0-muede" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="emotion-0-muede-2">
              <input type="radio" id="emotion-0-muede-2" name="emotion-0-muede" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="emotion-0-muede-3">
              <input type="radio" id="emotion-0-muede-3" name="emotion-0-muede" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="emotion-0-muede-4">
              <input type="radio" id="emotion-0-muede-4" name="emotion-0-muede" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="emotion-0-muede-5">
              <input type="radio" id="emotion-0-muede-5" name="emotion-0-muede" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>

            <p>Ich fühle mich wütend, gereizt, verärgert, aggressiv ...</p>
            <label for="emotion-0-aggressiv-1">
              <input type="radio" id="emotion-0-aggressiv-1" name="emotion-0-aggressiv" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="emotion-0-aggressiv-2">
              <input type="radio" id="emotion-0-aggressiv-2" name="emotion-0-aggressiv" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="emotion-0-aggressiv-3">
              <input type="radio" id="emotion-0-aggressiv-3" name="emotion-0-aggressiv" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="emotion-0-aggressiv-4">
              <input type="radio" id="emotion-0-aggressiv-4" name="emotion-0-aggressiv" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="emotion-0-aggressiv-5">
              <input type="radio" id="emotion-0-aggressiv-5" name="emotion-0-aggressiv" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>

            <p>Ich fühle mich aufmerksam, aktiv, wachsam, energisch ...</p>
            <label for="emotion-0-wach-1">
              <input type="radio" id="emotion-0-wach-1" name="emotion-0-wach" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="emotion-0-wach-2">
              <input type="radio" id="emotion-0-wach-2" name="emotion-0-wach" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="emotion-0-wach-3">
              <input type="radio" id="emotion-0-wach-3" name="emotion-0-wach" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="emotion-0-wach-4">
              <input type="radio" id="emotion-0-wach-4" name="emotion-0-wach" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="emotion-0-wach-5">
              <input type="radio" id="emotion-0-wach-5" name="emotion-0-wach" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>
            <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>
            <button type="button" onclick="nextPage(false)"><span>Weiter</span></button>
          </div>
          <div id="Tutorial" class="page" style="display: none;">
            <h1>Wie funktioniert das Experiment</h1>
            <h3>Erklärung zum Ablauf</h3>
            <p>Auf den nachfolgenden Seiten wirst du mit zufällig zusammengestellten Serien aus Symbolen konfrontiert. <b>Jede Serie besteht aus 6 Symbolen.</b></p>
            <p><b>Eine Serie kann auch über eine Zeile hinausgehen.</b> Daher ist eine Serie zur Hilfe noch mit einem zusammenhängenden grauen Balken hinter den Symbolen verbunden.</p>
            <p><b>So sieht eine Serie aus:</b></p>
            <img src="symbols/tutorial-serie.svg" style="width:100%">
            <p><b>Auf jeder Aufgabenseite befinden sich 8 solcher Serien.</b> Deine Aufgabe ist sie zu untersuchen und möglicherweise ein <b>Target</b> zu finden. (Es ist nicht immer eins vorhanden.)</p>
            <p><b>Ein Target ist vorhanden, wenn eine Serie mit dem gleichen Symbol endet wie die nächste Serie anfängt.</b> Mit anderen Worten: Siehst du eine Lücke zwischen den Serien umgeben von den gleichen Symbolen, hast du ein Target gefunden.</p>
            <p>Das gleiche Symbol bedeutet, dass es <b>exakt gleich</b> aussieht. <b>Es zählt <i>nicht</i>, wenn es gedreht oder gespiegelt wurde.</b></p>
            <p><b>Jede Seite kann maximal ein Target enthalten.</b> Es muss aber keins vorhanden sein.</p>
            <hr>
            <p><b>So sieht ein Target aus:</b></p>
            <img src="symbols/tutorial-target.svg" style="width:100%">
            <p><b>So sieht <i>kein</i> Target aus:</b></p>
            <img src="symbols/tutorial-notarget.svg" style="width:100%">
            <hr>
            <p>Du wirst <b>immer zwei Seiten solcher Serien</b> sehen, die ein Target enthalten könnten. <b>Im Anschluss wirst du für jede der beiden Seiten gefragt, ob sich dort ein Target befand.</b> </p>
            <p>Du musst dir also<b> nur für jede der beiden Seite merken, ob sie jeweils ein Target hatte.</b> Mit anderen Worten: Es ist egal, wo sich das Target auf der Seite befand oder wie es aussah. Wichtig ist, dass du nicht vergisst ob die erste Seite, die zweite Seite, beide Seiten oder keine Seite ein Target hatte.</p>
            <hr>
            <p><b>Keine Sorge, wenn du glaubst noch nicht ganz genau verstanden zu haben wie alles funktioniert.</b> Es folgt erst einmal ein Testdurchlauf, der dir das Prinzip näher bringen soll.</p>
            <p>Du kannst also noch üben bis du meinst die Aufgabe verstanden zu haben und <b>immer wieder zurück zu dieser Erklärung gehen.</b></p>
            <button type="button" onclick="nextPage(false); initTutorial()"><span>Weiter zum Testdurchlauf</span></button>
          </div>
          <div id="TutorialZeilen" class="page" style="display: none;">
            <div id="TutorialZeilenAufgabe">
              <h1>Erste Seite</h1>
              <div id="TutorialZeilenDiv"></div>
              
              <button id="tutorialZeilenButton" type="button" onclick="nextTutorialZeilen(false)"><span>Nächste Seite</span></button>
            </div>
            <div id="TutorialZeilenAntwort" style="display: none">
              <p>Gab es ein Target auf der <b>ersten</b> Seite?</p>
              <input type="radio" id="tut-01-no" name="tut-01" value="false">
              <label for="tut-01-no">Nein</label><br>
              <input type="radio" id="tut-01-yes" name="tut-01" value="true">
              <label for="tut-01-yes">Ja</label><br>

              <p>Gab es ein Target auf der <b>zweiten</b> Seite?</p>
              <input type="radio" id="tut-02-no" name="tut-02" value="false">
              <label for="tut-02-no">Nein</label><br>
              <input type="radio" id="tut-02-yes" name="tut-02" value="true">
              <label for="tut-02-yes">Ja</label><br>
              <h3>Alles verstanden?</h3>
              <button type="button" onclick="restartTutorial()"><span>Nein, ich möchte nochmal zurück.</span></button>
              <button type="button" onclick="nextPage(false)"><span>Ja, los geht's!</span></button>
            </div>
          </div>

          <div id="introAufgaben" class="page" style="display: none;">
            <h1>Jetzt wird es ernst.</h1>
            <h3>Versuche die nachfolgenden Aufgaben schnell und richtig zu lösen.</h3>
            <p>
              Bei der Bearbeitung der Aufgaben werden <b>deine Zeit und deine Fehlerquote notiert.</b> Versuche daher zügig, aber gewissenhaft die Aufgaben zu lösen.
            </p>
            <p>Atme also noch einmal tief durch und konzentriere dich. Wenn du bereit bist, geht es los.</p>
            <button type="button" onclick="nextPage(true); initTest()"><span>Experiment starten</span></button>
          </div>
          <div id="aufgaben" class="page" style="display: none;">
            <div id="zeilenAufgabe">
              <h1>Erste Seite</h1>
              <div id="zeilenDiv"></div>
              
              <button id="zeilenButton" type="button" onclick="nextZeilen(true)"><span>Nächste Seite</span></button>
            </div>
            <div id="zeilenAntwort" style="display: none">
              <div id="zeilenAntwort01" style="display: none" class="zeilenAntwortBogen">
                <p>Gab es ein Target auf der <b>ersten</b> Seite?</p>
                <input type="radio" id="01-01-01-no" name="01-01-01" value="false" class="pflichtfeld">
                <label for="01-01-01-no">Nein</label><br>
                <input type="radio" id="01-01-01-yes" name="01-01-01" value="true" class="pflichtfeld">
                <label for="01-01-01-yes">Ja</label><br>
                <input type="hidden" id="01-01-01-target" name="01-01-01-target">

                <p>Gab es ein Target auf der <b>zweiten</b> Seite?</p>
                <input type="radio" id="01-01-02-no" name="01-01-02" value="false" class="pflichtfeld">
                <label for="01-01-02-no">Nein</label><br>
                <input type="radio" id="01-01-02-yes" name="01-01-02" value="true" class="pflichtfeld">
                <label for="01-01-02-yes">Ja</label><br>
                <input type="hidden" id="01-01-02-target" name="01-01-02-target">
                <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>
              </div>
              <div id="zeilenAntwort02" style="display: none" class="zeilenAntwortBogen">
                <p>Gab es ein Target auf der <b>ersten</b> Seite?</p>
                <input type="radio" id="01-02-01-no" name="01-02-01" value="false" class="pflichtfeld">
                <label for="01-02-01-no">Nein</label><br>
                <input type="radio" id="01-02-01-yes" name="01-02-01" value="true" class="pflichtfeld">
                <label for="01-02-01-yes">Ja</label><br>
                <input type="hidden" id="01-02-01-target" name="01-02-01-target">

                <p>Gab es ein Target auf der <b>zweiten</b> Seite?</p>
                <input type="radio" id="01-02-02-no" name="01-02-02" value="false" class="pflichtfeld">
                <label for="01-02-02-no">Nein</label><br>
                <input type="radio" id="01-02-02-yes" name="01-02-02" value="true" class="pflichtfeld">
                <label for="01-02-02-yes">Ja</label><br>
                <input type="hidden" id="01-02-02-target" name="01-02-02-target">
                <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>
              </div>
              <div id="zeilenAntwort03" style="display: none" class="zeilenAntwortBogen">
                <p>Gab es ein Target auf der <b>ersten</b> Seite?</p>
                <input type="radio" id="01-03-01-no" name="01-03-01" value="false" class="pflichtfeld">
                <label for="01-03-01-no">Nein</label><br>
                <input type="radio" id="01-03-01-yes" name="01-03-01" value="true" class="pflichtfeld">
                <label for="01-03-01-yes">Ja</label><br>
                <input type="hidden" id="01-03-01-target" name="01-03-01-target">

                <p>Gab es ein Target auf der <b>zweiten</b> Seite?</p>
                <input type="radio" id="01-03-02-no" name="01-03-02" value="false" class="pflichtfeld">
                <label for="01-03-02-no">Nein</label><br>
                <input type="radio" id="01-03-02-yes" name="01-03-02" value="true" class="pflichtfeld">
                <label for="01-03-02-yes">Ja</label><br>
                <input type="hidden" id="01-03-02-target" name="01-03-02-target">
                <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>
              </div>
              <div id="zeilenAntwort04" style="display: none" class="zeilenAntwortBogen">
                <p>Gab es ein Target auf der <b>ersten</b> Seite?</p>
                <input type="radio" id="01-04-01-no" name="01-04-01" value="false" class="pflichtfeld">
                <label for="01-04-01-no">Nein</label><br>
                <input type="radio" id="01-04-01-yes" name="01-04-01" value="true" class="pflichtfeld">
                <label for="01-04-01-yes">Ja</label><br>
                <input type="hidden" id="01-04-01-target" name="01-04-01-target">

                <p>Gab es ein Target auf der <b>zweiten</b> Seite?</p>
                <input type="radio" id="01-04-02-no" name="01-04-02" value="false" class="pflichtfeld">
                <label for="01-04-02-no">Nein</label><br>
                <input type="radio" id="01-04-02-yes" name="01-04-02" value="true" class="pflichtfeld">
                <label for="01-04-02-yes">Ja</label><br>
                <input type="hidden" id="01-04-02-target" name="01-04-02-target">
                <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>
              </div>
              <div id="zeilenAntwort05" style="display: none" class="zeilenAntwortBogen">
                <p>Gab es ein Target auf der <b>ersten</b> Seite?</p>
                <input type="radio" id="01-05-01-no" name="01-05-01" value="false" class="pflichtfeld">
                <label for="01-05-01-no">Nein</label><br>
                <input type="radio" id="01-05-01-yes" name="01-05-01" value="true" class="pflichtfeld">
                <label for="01-05-01-yes">Ja</label><br>
                <input type="hidden" id="01-05-01-target" name="01-05-01-target">

                <p>Gab es ein Target auf der <b>zweiten</b> Seite?</p>
                <input type="radio" id="01-05-02-no" name="01-05-02" value="false" class="pflichtfeld">
                <label for="01-05-02-no">Nein</label><br>
                <input type="radio" id="01-05-02-yes" name="01-05-02" value="true" class="pflichtfeld">
                <label for="01-05-02-yes">Ja</label><br>
                <input type="hidden" id="01-05-02-target" name="01-05-02-target">
                <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>
              </div>
              <div id="zeilenAntwort06" style="display: none" class="zeilenAntwortBogen">
                <p>Gab es ein Target auf der <b>ersten</b> Seite?</p>
                <input type="radio" id="02-01-01-no" name="02-01-01" value="false" class="pflichtfeld">
                <label for="02-01-01-no">Nein</label><br>
                <input type="radio" id="02-01-01-yes" name="02-01-01" value="true" class="pflichtfeld">
                <label for="02-01-01-yes">Ja</label><br>
                <input type="hidden" id="02-01-01-target" name="02-01-01-target">

                <p>Gab es ein Target auf der <b>zweiten</b> Seite?</p>
                <input type="radio" id="02-01-02-no" name="02-01-02" value="false" class="pflichtfeld">
                <label for="02-01-02-no">Nein</label><br>
                <input type="radio" id="02-01-02-yes" name="02-01-02" value="true" class="pflichtfeld">
                <label for="02-01-02-yes">Ja</label><br>
                <input type="hidden" id="02-01-02-target" name="02-01-02-target">
                <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>
              </div>
              <div id="zeilenAntwort07" style="display: none" class="zeilenAntwortBogen">
                <p>Gab es ein Target auf der <b>ersten</b> Seite?</p>
                <input type="radio" id="02-02-01-no" name="02-02-01" value="false" class="pflichtfeld">
                <label for="02-02-01-no">Nein</label><br>
                <input type="radio" id="02-02-01-yes" name="02-02-01" value="true" class="pflichtfeld">
                <label for="02-02-01-yes">Ja</label><br>
                <input type="hidden" id="02-02-01-target" name="02-02-01-target">

                <p>Gab es ein Target auf der <b>zweiten</b> Seite?</p>
                <input type="radio" id="02-02-02-no" name="02-02-02" value="false" class="pflichtfeld">
                <label for="02-02-02-no">Nein</label><br>
                <input type="radio" id="02-02-02-yes" name="02-02-02" value="true" class="pflichtfeld">
                <label for="02-02-02-yes">Ja</label><br>
                <input type="hidden" id="02-02-02-target" name="02-02-02-target">
                <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>
              </div>
              <div id="zeilenAntwort08" style="display: none" class="zeilenAntwortBogen">
                <p>Gab es ein Target auf der <b>ersten</b> Seite?</p>
                <input type="radio" id="02-03-01-no" name="02-03-01" value="false" class="pflichtfeld">
                <label for="02-03-01-no">Nein</label><br>
                <input type="radio" id="02-03-01-yes" name="02-03-01" value="true" class="pflichtfeld">
                <label for="02-03-01-yes">Ja</label><br>
                <input type="hidden" id="02-03-01-target" name="02-03-01-target">

                <p>Gab es ein Target auf der <b>zweiten</b> Seite?</p>
                <input type="radio" id="02-03-02-no" name="02-03-02" value="false" class="pflichtfeld">
                <label for="02-03-02-no">Nein</label><br>
                <input type="radio" id="02-03-02-yes" name="02-03-02" value="true" class="pflichtfeld">
                <label for="02-03-02-yes">Ja</label><br>
                <input type="hidden" id="02-03-02-target" name="02-03-02-target">
                <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>
              </div>
              <div id="zeilenAntwort09" style="display: none" class="zeilenAntwortBogen">
                <p>Gab es ein Target auf der <b>ersten</b> Seite?</p>
                <input type="radio" id="02-04-01-no" name="02-04-01" value="false" class="pflichtfeld">
                <label for="02-04-01-no">Nein</label><br>
                <input type="radio" id="02-04-01-yes" name="02-04-01" value="true" class="pflichtfeld">
                <label for="02-04-01-yes">Ja</label><br>
                <input type="hidden" id="02-04-01-target" name="02-04-01-target">

                <p>Gab es ein Target auf der <b>zweiten</b> Seite?</p>
                <input type="radio" id="02-04-02-no" name="02-04-02" value="false" class="pflichtfeld">
                <label for="02-04-02-no">Nein</label><br>
                <input type="radio" id="02-04-02-yes" name="02-04-02" value="true" class="pflichtfeld">
                <label for="02-04-02-yes">Ja</label><br>
                <input type="hidden" id="02-04-02-target" name="02-04-02-target">
                <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>
              </div>
              <div id="zeilenAntwort10" style="display: none" class="zeilenAntwortBogen">
                <p>Gab es ein Target auf der <b>ersten</b> Seite?</p>
                <input type="radio" id="02-05-01-no" name="02-05-01" value="false" class="pflichtfeld">
                <label for="02-05-01-no">Nein</label><br>
                <input type="radio" id="02-05-01-yes" name="02-05-01" value="true" class="pflichtfeld">
                <label for="02-05-01-yes">Ja</label><br>
                <input type="hidden" id="02-05-01-target" name="02-05-01-target">

                <p>Gab es ein Target auf der <b>zweiten</b> Seite?</p>
                <input type="radio" id="02-05-02-no" name="02-05-02" value="false" class="pflichtfeld">
                <label for="02-05-02-no">Nein</label><br>
                <input type="radio" id="02-05-02-yes" name="02-05-02" value="true" class="pflichtfeld">
                <label for="02-05-02-yes">Ja</label><br>
                <input type="hidden" id="02-05-02-target" name="02-05-02-target">
                <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>
              </div>
              <div id="zeilenAntwort11" style="display: none" class="zeilenAntwortBogen">
                <p>Gab es ein Target auf der <b>ersten</b> Seite?</p>
                <input type="radio" id="03-01-01-no" name="03-01-01" value="false" class="pflichtfeld">
                <label for="03-01-01-no">Nein</label><br>
                <input type="radio" id="03-01-01-yes" name="03-01-01" value="true" class="pflichtfeld">
                <label for="03-01-01-yes">Ja</label><br>
                <input type="hidden" id="03-01-01-target" name="03-01-01-target">

                <p>Gab es ein Target auf der <b>zweiten</b> Seite?</p>
                <input type="radio" id="03-01-02-no" name="03-01-02" value="false" class="pflichtfeld">
                <label for="03-01-02-no">Nein</label><br>
                <input type="radio" id="03-01-02-yes" name="03-01-02" value="true" class="pflichtfeld">
                <label for="03-01-02-yes">Ja</label><br>
                <input type="hidden" id="03-01-02-target" name="03-01-02-target">
                <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>
              </div>
              <div id="zeilenAntwort12" style="display: none" class="zeilenAntwortBogen">
                <p>Gab es ein Target auf der <b>ersten</b> Seite?</p>
                <input type="radio" id="03-02-01-no" name="03-02-01" value="false" class="pflichtfeld">
                <label for="03-02-01-no">Nein</label><br>
                <input type="radio" id="03-02-01-yes" name="03-02-01" value="true" class="pflichtfeld">
                <label for="03-02-01-yes">Ja</label><br>
                <input type="hidden" id="03-02-01-target" name="03-02-01-target">

                <p>Gab es ein Target auf der <b>zweiten</b> Seite?</p>
                <input type="radio" id="03-02-02-no" name="03-02-02" value="false" class="pflichtfeld">
                <label for="03-02-02-no">Nein</label><br>
                <input type="radio" id="03-02-02-yes" name="03-02-02" value="true" class="pflichtfeld">
                <label for="03-02-02-yes">Ja</label><br>
                <input type="hidden" id="03-02-02-target" name="03-02-02-target">
                <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>
              </div>
              <div id="zeilenAntwort13" style="display: none" class="zeilenAntwortBogen">
                <p>Gab es ein Target auf der <b>ersten</b> Seite?</p>
                <input type="radio" id="03-03-01-no" name="03-03-01" value="false" class="pflichtfeld">
                <label for="03-03-01-no">Nein</label><br>
                <input type="radio" id="03-03-01-yes" name="03-03-01" value="true" class="pflichtfeld">
                <label for="03-03-01-yes">Ja</label><br>
                <input type="hidden" id="03-03-01-target" name="03-03-01-target">

                <p>Gab es ein Target auf der <b>zweiten</b> Seite?</p>
                <input type="radio" id="03-03-02-no" name="03-03-02" value="false" class="pflichtfeld">
                <label for="03-03-02-no">Nein</label><br>
                <input type="radio" id="03-03-02-yes" name="03-03-02" value="true" class="pflichtfeld">
                <label for="03-03-02-yes">Ja</label><br>
                <input type="hidden" id="03-03-02-target" name="03-03-02-target">
                <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>
              </div>
              <div id="zeilenAntwort14" style="display: none" class="zeilenAntwortBogen">
                <p>Gab es ein Target auf der <b>ersten</b> Seite?</p>
                <input type="radio" id="03-04-01-no" name="03-04-01" value="false" class="pflichtfeld">
                <label for="03-04-01-no">Nein</label><br>
                <input type="radio" id="03-04-01-yes" name="03-04-01" value="true" class="pflichtfeld">
                <label for="03-04-01-yes">Ja</label><br>
                <input type="hidden" id="03-04-01-target" name="03-04-01-target">

                <p>Gab es ein Target auf der <b>zweiten</b> Seite?</p>
                <input type="radio" id="03-04-02-no" name="03-04-02" value="false" class="pflichtfeld">
                <label for="03-04-02-no">Nein</label><br>
                <input type="radio" id="03-04-02-yes" name="03-04-02" value="true" class="pflichtfeld">
                <label for="03-04-02-yes">Ja</label><br>
                <input type="hidden" id="03-04-02-target" name="03-04-02-target">
                <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>
              </div>
              <div id="zeilenAntwort15" style="display: none" class="zeilenAntwortBogen">
                <p>Gab es ein Target auf der <b>ersten</b> Seite?</p>
                <input type="radio" id="03-05-01-no" name="03-05-01" value="false" class="pflichtfeld">
                <label for="03-05-01-no">Nein</label><br>
                <input type="radio" id="03-05-01-yes" name="03-05-01" value="true" class="pflichtfeld">
                <label for="03-05-01-yes">Ja</label><br>
                <input type="hidden" id="03-05-01-target" name="03-05-01-target">

                <p>Gab es ein Target auf der <b>zweiten</b> Seite?</p>
                <input type="radio" id="03-05-02-no" name="03-05-02" value="false" class="pflichtfeld">
                <label for="03-05-02-no">Nein</label><br>
                <input type="radio" id="03-05-02-yes" name="03-05-02" value="true" class="pflichtfeld">
                <label for="03-05-02-yes">Ja</label><br>
                <input type="hidden" id="03-05-02-target" name="03-05-02-target">
                <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>
              </div>
              <button type="button" onclick="finishZeilen(true)"><span>Weiter</span></button>
            </div>
          </div>

          <div id="LoaderFragebogen" class="page" style="display: none;">
            <div id="LoaderFragebogen01" style="display:none" class="loaderBogen">
              <h1>Fragebogen</h1>
              <h3>Wie sehr stimmst du den folgenden Aussagen - in Bezug auf dich – zu? (Pflichtfelder)</h3>
                        <!-- Subjektive Befindlichkeit -->
                        <p>Bewerte die Aussagen nach deinem Gemütszustand <b>in diesem Moment</b>, nicht allgemein.</p>
                  <p>Ich fühle mich unbeschwert, zufrieden, angenehm, glücklich ...</p>
                  <label for="emotion-1-wohlbefinden-1">
                    <input type="radio" id="emotion-1-wohlbefinden-1" name="emotion-1-wohlbefinden" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="emotion-1-wohlbefinden-2">
                    <input type="radio" id="emotion-1-wohlbefinden-2" name="emotion-1-wohlbefinden" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="emotion-1-wohlbefinden-3">
                    <input type="radio" id="emotion-1-wohlbefinden-3" name="emotion-1-wohlbefinden" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="emotion-1-wohlbefinden-4">
                    <input type="radio" id="emotion-1-wohlbefinden-4" name="emotion-1-wohlbefinden" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="emotion-1-wohlbefinden-5">
                    <input type="radio" id="emotion-1-wohlbefinden-5" name="emotion-1-wohlbefinden" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich fühle mich abgearbeitet, energielos, zermürbt, faul ...</p>
                  <label for="emotion-1-energielos-1">
                    <input type="radio" id="emotion-1-energielos-1" name="emotion-1-energielos" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="emotion-1-energielos-2">
                    <input type="radio" id="emotion-1-energielos-2" name="emotion-1-energielos" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="emotion-1-energielos-3">
                    <input type="radio" id="emotion-1-energielos-3" name="emotion-1-energielos" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="emotion-1-energielos-4">
                    <input type="radio" id="emotion-1-energielos-4" name="emotion-1-energielos" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="emotion-1-energielos-5">
                    <input type="radio" id="emotion-1-energielos-5" name="emotion-1-energielos" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich fühle mich konzentriert, ausdauernd, betriebsam, tüchtig ...</p>
                  <label for="emotion-1-konzentriert-1">
                    <input type="radio" id="emotion-1-konzentriert-1" name="emotion-1-konzentriert" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="emotion-1-konzentriert-2">
                    <input type="radio" id="emotion-1-konzentriert-2" name="emotion-1-konzentriert" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="emotion-1-konzentriert-3">
                    <input type="radio" id="emotion-1-konzentriert-3" name="emotion-1-konzentriert" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="emotion-1-konzentriert-4">
                    <input type="radio" id="emotion-1-konzentriert-4" name="emotion-1-konzentriert" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="emotion-1-konzentriert-5">
                    <input type="radio" id="emotion-1-konzentriert-5" name="emotion-1-konzentriert" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich fühle mich aufgeregt, nervös, erregt, unausgeglichen ...</p>
                  <label for="emotion-1-erregt-1">
                    <input type="radio" id="emotion-1-erregt-1" name="emotion-1-erregt" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="emotion-1-erregt-2">
                    <input type="radio" id="emotion-1-erregt-2" name="emotion-1-erregt" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="emotion-1-erregt-3">
                    <input type="radio" id="emotion-1-erregt-3" name="emotion-1-erregt" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="emotion-1-erregt-4">
                    <input type="radio" id="emotion-1-erregt-4" name="emotion-1-erregt" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="emotion-1-erregt-5">
                    <input type="radio" id="emotion-1-erregt-5" name="emotion-1-erregt" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich fühle mich ängstlich, verletzbar, angsterfüllt, furchtsam ...</p>
                  <label for="emotion-1-angst-1">
                    <input type="radio" id="emotion-1-angst-1" name="emotion-1-angst" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="emotion-1-angst-2">
                    <input type="radio" id="emotion-1-angst-2" name="emotion-1-angst" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="emotion-1-angst-3">
                    <input type="radio" id="emotion-1-angst-3" name="emotion-1-angst" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="emotion-1-angst-4">
                    <input type="radio" id="emotion-1-angst-4" name="emotion-1-angst" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="emotion-1-angst-5">
                    <input type="radio" id="emotion-1-angst-5" name="emotion-1-angst" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich fühle mich entspannt, gelöst, unbesorgt, unbekümmert ...</p>
                  <label for="emotion-1-entspannung-1">
                    <input type="radio" id="emotion-1-entspannung-1" name="emotion-1-entspannung" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="emotion-1-entspannung-2">
                    <input type="radio" id="emotion-1-entspannung-2" name="emotion-1-entspannung" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="emotion-1-entspannung-3">
                    <input type="radio" id="emotion-1-entspannung-3" name="emotion-1-entspannung" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="emotion-1-entspannung-4">
                    <input type="radio" id="emotion-1-entspannung-4" name="emotion-1-entspannung" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="emotion-1-entspannung-5">
                    <input type="radio" id="emotion-1-entspannung-5" name="emotion-1-entspannung" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich fühle mich träge, müde, schläfrig, denkfaul ...</p>
                  <label for="emotion-1-muede-1">
                    <input type="radio" id="emotion-1-muede-1" name="emotion-1-muede" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="emotion-1-muede-2">
                    <input type="radio" id="emotion-1-muede-2" name="emotion-1-muede" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="emotion-1-muede-3">
                    <input type="radio" id="emotion-1-muede-3" name="emotion-1-muede" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="emotion-1-muede-4">
                    <input type="radio" id="emotion-1-muede-4" name="emotion-1-muede" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="emotion-1-muede-5">
                    <input type="radio" id="emotion-1-muede-5" name="emotion-1-muede" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich fühle mich wütend, gereizt, verärgert, aggressiv ...</p>
                  <label for="emotion-1-aggressiv-1">
                    <input type="radio" id="emotion-1-aggressiv-1" name="emotion-1-aggressiv" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="emotion-1-aggressiv-2">
                    <input type="radio" id="emotion-1-aggressiv-2" name="emotion-1-aggressiv" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="emotion-1-aggressiv-3">
                    <input type="radio" id="emotion-1-aggressiv-3" name="emotion-1-aggressiv" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="emotion-1-aggressiv-4">
                    <input type="radio" id="emotion-1-aggressiv-4" name="emotion-1-aggressiv" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="emotion-1-aggressiv-5">
                    <input type="radio" id="emotion-1-aggressiv-5" name="emotion-1-aggressiv" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich fühle mich aufmerksam, aktiv, wachsam, energisch ...</p>
                  <label for="emotion-1-wach-1">
                    <input type="radio" id="emotion-1-wach-1" name="emotion-1-wach" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="emotion-1-wach-2">
                    <input type="radio" id="emotion-1-wach-2" name="emotion-1-wach" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="emotion-1-wach-3">
                    <input type="radio" id="emotion-1-wach-3" name="emotion-1-wach" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="emotion-1-wach-4">
                    <input type="radio" id="emotion-1-wach-4" name="emotion-1-wach" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="emotion-1-wach-5">
                    <input type="radio" id="emotion-1-wach-5" name="emotion-1-wach" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <hr>
                  <!-- Weitere Fragen -->
                  <p>Ich denke ich sollte die Aufgaben schneller bearbeiten.</p>
                  <label for="zeit-1-schneller-1">
                    <input type="radio" id="zeit-1-schneller-1" name="zeit-1-schneller" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="zeit-1-schneller-2">
                    <input type="radio" id="zeit-1-schneller-2" name="zeit-1-schneller" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="zeit-1-schneller-3">
                    <input type="radio" id="zeit-1-schneller-3" name="zeit-1-schneller" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="zeit-1-schneller-4">
                    <input type="radio" id="zeit-1-schneller-4" name="zeit-1-schneller" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="zeit-1-schneller-5">
                    <input type="radio" id="zeit-1-schneller-5" name="zeit-1-schneller" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich empfand die Ladezeit zwischen den Aufgabenteilen als angenehm.</p>
                  <label for="wartezeit-1-gut-1">
                    <input type="radio" id="wartezeit-1-gut-1" name="wartezeit-1-gut" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="wartezeit-1-gut-2">
                    <input type="radio" id="wartezeit-1-gut-2" name="wartezeit-1-gut" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="wartezeit-1-gut-3">
                    <input type="radio" id="wartezeit-1-gut-3" name="wartezeit-1-gut" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="wartezeit-1-gut-4">
                    <input type="radio" id="wartezeit-1-gut-4" name="wartezeit-1-gut" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="wartezeit-1-gut-5">
                    <input type="radio" id="wartezeit-1-gut-5" name="wartezeit-1-gut" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Durch die Wartezeit war ich bei der Bearbeitung der Aufgaben langsamer und unkonzentrierter.</p>
                  <label for="wartezeit-1-unkonzentriert-1">
                    <input type="radio" id="wartezeit-1-unkonzentriert-1" name="wartezeit-1-unkonzentriert" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="wartezeit-1-unkonzentriert-2">
                    <input type="radio" id="wartezeit-1-unkonzentriert-2" name="wartezeit-1-unkonzentriert" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="wartezeit-1-unkonzentriert-3">
                    <input type="radio" id="wartezeit-1-unkonzentriert-3" name="wartezeit-1-unkonzentriert" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="wartezeit-1-unkonzentriert-4">
                    <input type="radio" id="wartezeit-1-unkonzentriert-4" name="wartezeit-1-unkonzentriert" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="wartezeit-1-unkonzentriert-5">
                    <input type="radio" id="wartezeit-1-unkonzentriert-5" name="wartezeit-1-unkonzentriert" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich denke ich sollte mir mehr Zeit für die Bearbeitung der Aufgaben nehmen.</p>
                  <label for="zeit-1-langsamer-1">
                    <input type="radio" id="zeit-1-langsamer-1" name="zeit-1-langsamer" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="zeit-1-langsamer-2">
                    <input type="radio" id="zeit-1-langsamer-2" name="zeit-1-langsamer" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="zeit-1-langsamer-3">
                    <input type="radio" id="zeit-1-langsamer-3" name="zeit-1-langsamer" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="zeit-1-langsamer-4">
                    <input type="radio" id="zeit-1-langsamer-4" name="zeit-1-langsamer" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="zeit-1-langsamer-5">
                    <input type="radio" id="zeit-1-langsamer-5" name="zeit-1-langsamer" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich fühlte mich bei der Bearbeitung der Aufgaben seit dem letzten Fragenbogen im 'Flow', wie in einem Rauschzustand mit starkem Fokus auf der Suche nach einem Target.</p>
                  <label for="flow-1-1">
                    <input type="radio" id="flow-1-1" name="flow-1" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="flow-1-2">
                    <input type="radio" id="flow-1-2" name="flow-1" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="flow-1-3">
                    <input type="radio" id="flow-1-3" name="flow-1" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="flow-1-4">
                    <input type="radio" id="flow-1-4" name="flow-1" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="flow-1-5">
                    <input type="radio" id="flow-1-5" name="flow-1" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ohne die Wartezeit hätte ich die Aufgaben schneller und konzentrierter bearbeitet.</p>
                  <label for="wartezeit-1-keinekonzentration-1">
                    <input type="radio" id="wartezeit-1-keinekonzentration-1" name="wartezeit-1-keinekonzentration" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="wartezeit-1-keinekonzentration-2">
                    <input type="radio" id="wartezeit-1-keinekonzentration-2" name="wartezeit-1-keinekonzentration" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="wartezeit-1-keinekonzentration-3">
                    <input type="radio" id="wartezeit-1-keinekonzentration-3" name="wartezeit-1-keinekonzentration" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="wartezeit-1-keinekonzentration-4">
                    <input type="radio" id="wartezeit-1-keinekonzentration-4" name="wartezeit-1-keinekonzentration" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="wartezeit-1-keinekonzentration-5">
                    <input type="radio" id="wartezeit-1-keinekonzentration-5" name="wartezeit-1-keinekonzentration" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  
                  <p>Die Ladezeit zwischen den Aufgabenteilen empfand ich als unangenehm.</p>
                  <label for="wartezeit-1-schlecht-1">
                    <input type="radio" id="wartezeit-1-schlecht-1" name="wartezeit-1-schlecht" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="wartezeit-1-schlecht-2">
                    <input type="radio" id="wartezeit-1-schlecht-2" name="wartezeit-1-schlecht" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="wartezeit-1-schlecht-3">
                    <input type="radio" id="wartezeit-1-schlecht-3" name="wartezeit-1-schlecht" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="wartezeit-1-schlecht-4">
                    <input type="radio" id="wartezeit-1-schlecht-4" name="wartezeit-1-schlecht" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="wartezeit-1-schlecht-5">
                    <input type="radio" id="wartezeit-1-schlecht-5" name="wartezeit-1-schlecht" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  
                  <hr>
                  <label for="zeit-1-bearbeitung">Ich denke ich habe für die Bearbeitung aller Aufgaben seit dem letzten Fragebogen (ohne Ladezeit) ungefähr so viele Sekunden gebraucht: (Pflichtfeld)
                    <input type="text" name="zeit-1-bearbeitung" id="zeit-1-bearbeitung" value="" class="pflichtfeld"/></label>
                    <br>
                  <label for="zeit-1-warten">Ich schätze ich hab durchschnittlich ungefähr so viele Sekunden zwischen den Aufgabenteilen gewartet: (Pflichtfeld)
                    <input type="text" name="zeit-1-warten" id="zeit-1-warten" value="" class="pflichtfeld"/></label>
                    <br>
                  <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>
              <button type="button" onclick="restartZeilen(true);"><span>Weiter</span></button>
            </div>
            <div id="LoaderFragebogen02" style="display:none" class="loaderBogen">
              <h1>Fragebogen</h1>
              <h3>Wie sehr stimmst du den folgenden Aussagen - in Bezug auf dich – zu? (Pflichtfelder)</h3>
                      <!-- Subjektive Befindlichkeit -->
                      <p>Bewerte die Aussagen nach deinem Gemütszustand <b>in diesem Moment</b>, nicht allgemein.</p>
                  <p>Ich fühle mich unbeschwert, zufrieden, angenehm, glücklich ...</p>
                  <label for="emotion-2-wohlbefinden-1">
                    <input type="radio" id="emotion-2-wohlbefinden-1" name="emotion-2-wohlbefinden" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="emotion-2-wohlbefinden-2">
                    <input type="radio" id="emotion-2-wohlbefinden-2" name="emotion-2-wohlbefinden" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="emotion-2-wohlbefinden-3">
                    <input type="radio" id="emotion-2-wohlbefinden-3" name="emotion-2-wohlbefinden" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="emotion-2-wohlbefinden-4">
                    <input type="radio" id="emotion-2-wohlbefinden-4" name="emotion-2-wohlbefinden" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="emotion-2-wohlbefinden-5">
                    <input type="radio" id="emotion-2-wohlbefinden-5" name="emotion-2-wohlbefinden" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich fühle mich abgearbeitet, energielos, zermürbt, faul ...</p>
                  <label for="emotion-2-energielos-1">
                    <input type="radio" id="emotion-2-energielos-1" name="emotion-2-energielos" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="emotion-2-energielos-2">
                    <input type="radio" id="emotion-2-energielos-2" name="emotion-2-energielos" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="emotion-2-energielos-3">
                    <input type="radio" id="emotion-2-energielos-3" name="emotion-2-energielos" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="emotion-2-energielos-4">
                    <input type="radio" id="emotion-2-energielos-4" name="emotion-2-energielos" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="emotion-2-energielos-5">
                    <input type="radio" id="emotion-2-energielos-5" name="emotion-2-energielos" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich fühle mich konzentriert, ausdauernd, betriebsam, tüchtig ...</p>
                  <label for="emotion-2-konzentriert-1">
                    <input type="radio" id="emotion-2-konzentriert-1" name="emotion-2-konzentriert" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="emotion-2-konzentriert-2">
                    <input type="radio" id="emotion-2-konzentriert-2" name="emotion-2-konzentriert" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="emotion-2-konzentriert-3">
                    <input type="radio" id="emotion-2-konzentriert-3" name="emotion-2-konzentriert" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="emotion-2-konzentriert-4">
                    <input type="radio" id="emotion-2-konzentriert-4" name="emotion-2-konzentriert" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="emotion-2-konzentriert-5">
                    <input type="radio" id="emotion-2-konzentriert-5" name="emotion-2-konzentriert" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich fühle mich aufgeregt, nervös, erregt, unausgeglichen ...</p>
                  <label for="emotion-2-erregt-1">
                    <input type="radio" id="emotion-2-erregt-1" name="emotion-2-erregt" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="emotion-2-erregt-2">
                    <input type="radio" id="emotion-2-erregt-2" name="emotion-2-erregt" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="emotion-2-erregt-3">
                    <input type="radio" id="emotion-2-erregt-3" name="emotion-2-erregt" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="emotion-2-erregt-4">
                    <input type="radio" id="emotion-2-erregt-4" name="emotion-2-erregt" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="emotion-2-erregt-5">
                    <input type="radio" id="emotion-2-erregt-5" name="emotion-2-erregt" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich fühle mich ängstlich, verletzbar, angsterfüllt, furchtsam ...</p>
                  <label for="emotion-2-angst-1">
                    <input type="radio" id="emotion-2-angst-1" name="emotion-2-angst" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="emotion-2-angst-2">
                    <input type="radio" id="emotion-2-angst-2" name="emotion-2-angst" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="emotion-2-angst-3">
                    <input type="radio" id="emotion-2-angst-3" name="emotion-2-angst" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="emotion-2-angst-4">
                    <input type="radio" id="emotion-2-angst-4" name="emotion-2-angst" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="emotion-2-angst-5">
                    <input type="radio" id="emotion-2-angst-5" name="emotion-2-angst" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich fühle mich entspannt, gelöst, unbesorgt, unbekümmert ...</p>
                  <label for="emotion-2-entspannung-1">
                    <input type="radio" id="emotion-2-entspannung-1" name="emotion-2-entspannung" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="emotion-2-entspannung-2">
                    <input type="radio" id="emotion-2-entspannung-2" name="emotion-2-entspannung" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="emotion-2-entspannung-3">
                    <input type="radio" id="emotion-2-entspannung-3" name="emotion-2-entspannung" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="emotion-2-entspannung-4">
                    <input type="radio" id="emotion-2-entspannung-4" name="emotion-2-entspannung" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="emotion-2-entspannung-5">
                    <input type="radio" id="emotion-2-entspannung-5" name="emotion-2-entspannung" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich fühle mich träge, müde, schläfrig, denkfaul ...</p>
                  <label for="emotion-2-muede-1">
                    <input type="radio" id="emotion-2-muede-1" name="emotion-2-muede" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="emotion-2-muede-2">
                    <input type="radio" id="emotion-2-muede-2" name="emotion-2-muede" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="emotion-2-muede-3">
                    <input type="radio" id="emotion-2-muede-3" name="emotion-2-muede" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="emotion-2-muede-4">
                    <input type="radio" id="emotion-2-muede-4" name="emotion-2-muede" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="emotion-2-muede-5">
                    <input type="radio" id="emotion-2-muede-5" name="emotion-2-muede" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich fühle mich wütend, gereizt, verärgert, aggressiv ...</p>
                  <label for="emotion-2-aggressiv-1">
                    <input type="radio" id="emotion-2-aggressiv-1" name="emotion-2-aggressiv" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="emotion-2-aggressiv-2">
                    <input type="radio" id="emotion-2-aggressiv-2" name="emotion-2-aggressiv" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="emotion-2-aggressiv-3">
                    <input type="radio" id="emotion-2-aggressiv-3" name="emotion-2-aggressiv" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="emotion-2-aggressiv-4">
                    <input type="radio" id="emotion-2-aggressiv-4" name="emotion-2-aggressiv" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="emotion-2-aggressiv-5">
                    <input type="radio" id="emotion-2-aggressiv-5" name="emotion-2-aggressiv" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich fühle mich aufmerksam, aktiv, wachsam, energisch ...</p>
                  <label for="emotion-2-wach-1">
                    <input type="radio" id="emotion-2-wach-1" name="emotion-2-wach" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="emotion-2-wach-2">
                    <input type="radio" id="emotion-2-wach-2" name="emotion-2-wach" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="emotion-2-wach-3">
                    <input type="radio" id="emotion-2-wach-3" name="emotion-2-wach" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="emotion-2-wach-4">
                    <input type="radio" id="emotion-2-wach-4" name="emotion-2-wach" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="emotion-2-wach-5">
                    <input type="radio" id="emotion-2-wach-5" name="emotion-2-wach" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>
                  <hr>
                  <!-- Weitere Fragen -->
                  <p>Ich denke ich sollte die Aufgaben schneller bearbeiten.</p>
                  <label for="zeit-2-schneller-1">
                    <input type="radio" id="zeit-2-schneller-1" name="zeit-2-schneller" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="zeit-2-schneller-2">
                    <input type="radio" id="zeit-2-schneller-2" name="zeit-2-schneller" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="zeit-2-schneller-3">
                    <input type="radio" id="zeit-2-schneller-3" name="zeit-2-schneller" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="zeit-2-schneller-4">
                    <input type="radio" id="zeit-2-schneller-4" name="zeit-2-schneller" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="zeit-2-schneller-5">
                    <input type="radio" id="zeit-2-schneller-5" name="zeit-2-schneller" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich empfand die Ladezeit zwischen den Aufgabenteilen als angenehm.</p>
                  <label for="wartezeit-2-gut-1">
                    <input type="radio" id="wartezeit-2-gut-1" name="wartezeit-2-gut" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="wartezeit-2-gut-2">
                    <input type="radio" id="wartezeit-2-gut-2" name="wartezeit-2-gut" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="wartezeit-2-gut-3">
                    <input type="radio" id="wartezeit-2-gut-3" name="wartezeit-2-gut" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="wartezeit-2-gut-4">
                    <input type="radio" id="wartezeit-2-gut-4" name="wartezeit-2-gut" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="wartezeit-2-gut-5">
                    <input type="radio" id="wartezeit-2-gut-5" name="wartezeit-2-gut" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Durch die Wartezeit war ich bei der Bearbeitung der Aufgaben langsamer und unkonzentrierter.</p>
                  <label for="wartezeit-2-unkonzentriert-1">
                    <input type="radio" id="wartezeit-2-unkonzentriert-1" name="wartezeit-2-unkonzentriert" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="wartezeit-2-unkonzentriert-2">
                    <input type="radio" id="wartezeit-2-unkonzentriert-2" name="wartezeit-2-unkonzentriert" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="wartezeit-2-unkonzentriert-3">
                    <input type="radio" id="wartezeit-2-unkonzentriert-3" name="wartezeit-2-unkonzentriert" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="wartezeit-2-unkonzentriert-4">
                    <input type="radio" id="wartezeit-2-unkonzentriert-4" name="wartezeit-2-unkonzentriert" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="wartezeit-2-unkonzentriert-5">
                    <input type="radio" id="wartezeit-2-unkonzentriert-5" name="wartezeit-2-unkonzentriert" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich denke ich sollte mir mehr Zeit für die Bearbeitung der Aufgaben nehmen.</p>
                  <label for="zeit-2-langsamer-1">
                    <input type="radio" id="zeit-2-langsamer-1" name="zeit-2-langsamer" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="zeit-2-langsamer-2">
                    <input type="radio" id="zeit-2-langsamer-2" name="zeit-2-langsamer" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="zeit-2-langsamer-3">
                    <input type="radio" id="zeit-2-langsamer-3" name="zeit-2-langsamer" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="zeit-2-langsamer-4">
                    <input type="radio" id="zeit-2-langsamer-4" name="zeit-2-langsamer" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="zeit-2-langsamer-5">
                    <input type="radio" id="zeit-2-langsamer-5" name="zeit-2-langsamer" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich fühlte mich bei der Bearbeitung der Aufgaben seit dem letzten Fragenbogen im 'Flow', wie in einem Rauschzustand mit starkem Fokus auf der Suche nach einem Target.</p>
                  <label for="flow-2-1">
                    <input type="radio" id="flow-2-1" name="flow-2" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="flow-2-2">
                    <input type="radio" id="flow-2-2" name="flow-2" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="flow-2-3">
                    <input type="radio" id="flow-2-3" name="flow-2" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="flow-2-4">
                    <input type="radio" id="flow-2-4" name="flow-2" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="flow-2-5">
                    <input type="radio" id="flow-2-5" name="flow-2" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ohne die Wartezeit hätte ich die Aufgaben schneller und konzentrierter bearbeitet.</p>
                  <label for="wartezeit-2-keinekonzentration-1">
                    <input type="radio" id="wartezeit-2-keinekonzentration-1" name="wartezeit-2-keinekonzentration" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="wartezeit-2-keinekonzentration-2">
                    <input type="radio" id="wartezeit-2-keinekonzentration-2" name="wartezeit-2-keinekonzentration" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="wartezeit-2-keinekonzentration-3">
                    <input type="radio" id="wartezeit-2-keinekonzentration-3" name="wartezeit-2-keinekonzentration" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="wartezeit-2-keinekonzentration-4">
                    <input type="radio" id="wartezeit-2-keinekonzentration-4" name="wartezeit-2-keinekonzentration" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="wartezeit-2-keinekonzentration-5">
                    <input type="radio" id="wartezeit-2-keinekonzentration-5" name="wartezeit-2-keinekonzentration" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  
                  <p>Die Ladezeit zwischen den Aufgabenteilen empfand ich als unangenehm.</p>
                  <label for="wartezeit-2-schlecht-1">
                    <input type="radio" id="wartezeit-2-schlecht-1" name="wartezeit-2-schlecht" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="wartezeit-2-schlecht-2">
                    <input type="radio" id="wartezeit-2-schlecht-2" name="wartezeit-2-schlecht" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="wartezeit-2-schlecht-3">
                    <input type="radio" id="wartezeit-2-schlecht-3" name="wartezeit-2-schlecht" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="wartezeit-2-schlecht-4">
                    <input type="radio" id="wartezeit-2-schlecht-4" name="wartezeit-2-schlecht" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="wartezeit-2-schlecht-5">
                    <input type="radio" id="wartezeit-2-schlecht-5" name="wartezeit-2-schlecht" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  
                  <hr>
                  <label for="zeit-2-bearbeitung">Ich denke ich habe für die Bearbeitung aller Aufgaben seit dem letzten Fragebogen (ohne Ladezeit) ungefähr so viele Sekunden gebraucht: (Pflichtfeld)
                    <input type="text" name="zeit-2-bearbeitung" id="zeit-2-bearbeitung" value="" class="pflichtfeld"/></label>
                    <br>
                  <label for="zeit-2-warten">Ich schätze ich hab durchschnittlich ungefähr so viele Sekunden zwischen den Aufgabenteilen gewartet: (Pflichtfeld)
                    <input type="text" name="zeit-2-warten" id="zeit-2-warten" value="" class="pflichtfeld"/></label>
                    <br>

            <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>
              <button type="button" onclick="restartZeilen(true);"><span>Alles klar!</span></button>
            </div>
            <div id="LoaderFragebogen03" style="display:none" class="loaderBogen">
              <h1>Fragebogen</h1>
              <h3>Wie sehr stimmst du den folgenden Aussagen - in Bezug auf dich – zu? (Pflichtfelder)</h3>
                    <!-- Subjektive Befindlichkeit -->
                    <p>Bewerte die Aussagen nach deinem Gemütszustand <b>in diesem Moment</b>, nicht allgemein.</p>
                    <p>Ich fühle mich unbeschwert, zufrieden, angenehm, glücklich ...</p>
                    <label for="emotion-3-wohlbefinden-1">
                      <input type="radio" id="emotion-3-wohlbefinden-1" name="emotion-3-wohlbefinden" value="1" class="pflichtfeld">
                      Stimme überhaupt nicht zu
                    </label>
                    <label for="emotion-3-wohlbefinden-2">
                      <input type="radio" id="emotion-3-wohlbefinden-2" name="emotion-3-wohlbefinden" value="2" class="pflichtfeld">
                      Stimme nicht zu
                    </label>
                    <label for="emotion-3-wohlbefinden-3">
                      <input type="radio" id="emotion-3-wohlbefinden-3" name="emotion-3-wohlbefinden" value="3" class="pflichtfeld">
                      Teils / Teils
                    </label>
                    <label for="emotion-3-wohlbefinden-4">
                      <input type="radio" id="emotion-3-wohlbefinden-4" name="emotion-3-wohlbefinden" value="4" class="pflichtfeld">
                      Stimme zu
                    </label>
                    <label for="emotion-3-wohlbefinden-5">
                      <input type="radio" id="emotion-3-wohlbefinden-5" name="emotion-3-wohlbefinden" value="5" class="pflichtfeld">
                      Stimme völlig zu
                    </label>
    
                    <p>Ich fühle mich abgearbeitet, energielos, zermürbt, faul ...</p>
                    <label for="emotion-3-energielos-1">
                      <input type="radio" id="emotion-3-energielos-1" name="emotion-3-energielos" value="1" class="pflichtfeld">
                      Stimme überhaupt nicht zu
                    </label>
                    <label for="emotion-3-energielos-2">
                      <input type="radio" id="emotion-3-energielos-2" name="emotion-3-energielos" value="2" class="pflichtfeld">
                      Stimme nicht zu
                    </label>
                    <label for="emotion-3-energielos-3">
                      <input type="radio" id="emotion-3-energielos-3" name="emotion-3-energielos" value="3" class="pflichtfeld">
                      Teils / Teils
                    </label>
                    <label for="emotion-3-energielos-4">
                      <input type="radio" id="emotion-3-energielos-4" name="emotion-3-energielos" value="4" class="pflichtfeld">
                      Stimme zu
                    </label>
                    <label for="emotion-3-energielos-5">
                      <input type="radio" id="emotion-3-energielos-5" name="emotion-3-energielos" value="5" class="pflichtfeld">
                      Stimme völlig zu
                    </label>
    
                    <p>Ich fühle mich konzentriert, ausdauernd, betriebsam, tüchtig ...</p>
                    <label for="emotion-3-konzentriert-1">
                      <input type="radio" id="emotion-3-konzentriert-1" name="emotion-3-konzentriert" value="1" class="pflichtfeld">
                      Stimme überhaupt nicht zu
                    </label>
                    <label for="emotion-3-konzentriert-2">
                      <input type="radio" id="emotion-3-konzentriert-2" name="emotion-3-konzentriert" value="2" class="pflichtfeld">
                      Stimme nicht zu
                    </label>
                    <label for="emotion-3-konzentriert-3">
                      <input type="radio" id="emotion-3-konzentriert-3" name="emotion-3-konzentriert" value="3" class="pflichtfeld">
                      Teils / Teils
                    </label>
                    <label for="emotion-3-konzentriert-4">
                      <input type="radio" id="emotion-3-konzentriert-4" name="emotion-3-konzentriert" value="4" class="pflichtfeld">
                      Stimme zu
                    </label>
                    <label for="emotion-3-konzentriert-5">
                      <input type="radio" id="emotion-3-konzentriert-5" name="emotion-3-konzentriert" value="5" class="pflichtfeld">
                      Stimme völlig zu
                    </label>
    
                    <p>Ich fühle mich aufgeregt, nervös, erregt, unausgeglichen ...</p>
                    <label for="emotion-3-erregt-1">
                      <input type="radio" id="emotion-3-erregt-1" name="emotion-3-erregt" value="1" class="pflichtfeld">
                      Stimme überhaupt nicht zu
                    </label>
                    <label for="emotion-3-erregt-2">
                      <input type="radio" id="emotion-3-erregt-2" name="emotion-3-erregt" value="2" class="pflichtfeld">
                      Stimme nicht zu
                    </label>
                    <label for="emotion-3-erregt-3">
                      <input type="radio" id="emotion-3-erregt-3" name="emotion-3-erregt" value="3" class="pflichtfeld">
                      Teils / Teils
                    </label>
                    <label for="emotion-3-erregt-4">
                      <input type="radio" id="emotion-3-erregt-4" name="emotion-3-erregt" value="4" class="pflichtfeld">
                      Stimme zu
                    </label>
                    <label for="emotion-3-erregt-5">
                      <input type="radio" id="emotion-3-erregt-5" name="emotion-3-erregt" value="5" class="pflichtfeld">
                      Stimme völlig zu
                    </label>
    
                    <p>Ich fühle mich ängstlich, verletzbar, angsterfüllt, furchtsam ...</p>
                    <label for="emotion-3-angst-1">
                      <input type="radio" id="emotion-3-angst-1" name="emotion-3-angst" value="1" class="pflichtfeld">
                      Stimme überhaupt nicht zu
                    </label>
                    <label for="emotion-3-angst-2">
                      <input type="radio" id="emotion-3-angst-2" name="emotion-3-angst" value="2" class="pflichtfeld">
                      Stimme nicht zu
                    </label>
                    <label for="emotion-3-angst-3">
                      <input type="radio" id="emotion-3-angst-3" name="emotion-3-angst" value="3" class="pflichtfeld">
                      Teils / Teils
                    </label>
                    <label for="emotion-3-angst-4">
                      <input type="radio" id="emotion-3-angst-4" name="emotion-3-angst" value="4" class="pflichtfeld">
                      Stimme zu
                    </label>
                    <label for="emotion-3-angst-5">
                      <input type="radio" id="emotion-3-angst-5" name="emotion-3-angst" value="5" class="pflichtfeld">
                      Stimme völlig zu
                    </label>
    
                    <p>Ich fühle mich entspannt, gelöst, unbesorgt, unbekümmert ...</p>
                    <label for="emotion-3-entspannung-1">
                      <input type="radio" id="emotion-3-entspannung-1" name="emotion-3-entspannung" value="1" class="pflichtfeld">
                      Stimme überhaupt nicht zu
                    </label>
                    <label for="emotion-3-entspannung-2">
                      <input type="radio" id="emotion-3-entspannung-2" name="emotion-3-entspannung" value="2" class="pflichtfeld">
                      Stimme nicht zu
                    </label>
                    <label for="emotion-3-entspannung-3">
                      <input type="radio" id="emotion-3-entspannung-3" name="emotion-3-entspannung" value="3" class="pflichtfeld">
                      Teils / Teils
                    </label>
                    <label for="emotion-3-entspannung-4">
                      <input type="radio" id="emotion-3-entspannung-4" name="emotion-3-entspannung" value="4" class="pflichtfeld">
                      Stimme zu
                    </label>
                    <label for="emotion-3-entspannung-5">
                      <input type="radio" id="emotion-3-entspannung-5" name="emotion-3-entspannung" value="5" class="pflichtfeld">
                      Stimme völlig zu
                    </label>
    
                    <p>Ich fühle mich träge, müde, schläfrig, denkfaul ...</p>
                    <label for="emotion-3-muede-1">
                      <input type="radio" id="emotion-3-muede-1" name="emotion-3-muede" value="1" class="pflichtfeld">
                      Stimme überhaupt nicht zu
                    </label>
                    <label for="emotion-3-muede-2">
                      <input type="radio" id="emotion-3-muede-2" name="emotion-3-muede" value="2" class="pflichtfeld">
                      Stimme nicht zu
                    </label>
                    <label for="emotion-3-muede-3">
                      <input type="radio" id="emotion-3-muede-3" name="emotion-3-muede" value="3" class="pflichtfeld">
                      Teils / Teils
                    </label>
                    <label for="emotion-3-muede-4">
                      <input type="radio" id="emotion-3-muede-4" name="emotion-3-muede" value="4" class="pflichtfeld">
                      Stimme zu
                    </label>
                    <label for="emotion-3-muede-5">
                      <input type="radio" id="emotion-3-muede-5" name="emotion-3-muede" value="5" class="pflichtfeld">
                      Stimme völlig zu
                    </label>
    
                    <p>Ich fühle mich wütend, gereizt, verärgert, aggressiv ...</p>
                    <label for="emotion-3-aggressiv-1">
                      <input type="radio" id="emotion-3-aggressiv-1" name="emotion-3-aggressiv" value="1" class="pflichtfeld">
                      Stimme überhaupt nicht zu
                    </label>
                    <label for="emotion-3-aggressiv-2">
                      <input type="radio" id="emotion-3-aggressiv-2" name="emotion-3-aggressiv" value="2" class="pflichtfeld">
                      Stimme nicht zu
                    </label>
                    <label for="emotion-3-aggressiv-3">
                      <input type="radio" id="emotion-3-aggressiv-3" name="emotion-3-aggressiv" value="3" class="pflichtfeld">
                      Teils / Teils
                    </label>
                    <label for="emotion-3-aggressiv-4">
                      <input type="radio" id="emotion-3-aggressiv-4" name="emotion-3-aggressiv" value="4" class="pflichtfeld">
                      Stimme zu
                    </label>
                    <label for="emotion-3-aggressiv-5">
                      <input type="radio" id="emotion-3-aggressiv-5" name="emotion-3-aggressiv" value="5" class="pflichtfeld">
                      Stimme völlig zu
                    </label>
    
                    <p>Ich fühle mich aufmerksam, aktiv, wachsam, energisch ...</p>
                    <label for="emotion-3-wach-1">
                      <input type="radio" id="emotion-3-wach-1" name="emotion-3-wach" value="1" class="pflichtfeld">
                      Stimme überhaupt nicht zu
                    </label>
                    <label for="emotion-3-wach-2">
                      <input type="radio" id="emotion-3-wach-2" name="emotion-3-wach" value="2" class="pflichtfeld">
                      Stimme nicht zu
                    </label>
                    <label for="emotion-3-wach-3">
                      <input type="radio" id="emotion-3-wach-3" name="emotion-3-wach" value="3" class="pflichtfeld">
                      Teils / Teils
                    </label>
                    <label for="emotion-3-wach-4">
                      <input type="radio" id="emotion-3-wach-4" name="emotion-3-wach" value="4" class="pflichtfeld">
                      Stimme zu
                    </label>
                    <label for="emotion-3-wach-5">
                      <input type="radio" id="emotion-3-wach-5" name="emotion-3-wach" value="5" class="pflichtfeld">
                      Stimme völlig zu
                    </label>
                    <hr>
                  <!-- Weitere Fragen -->
                  <p>Ich denke ich sollte die Aufgaben schneller bearbeiten.</p>
                  <label for="zeit-3-schneller-1">
                    <input type="radio" id="zeit-3-schneller-1" name="zeit-3-schneller" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="zeit-3-schneller-2">
                    <input type="radio" id="zeit-3-schneller-2" name="zeit-3-schneller" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="zeit-3-schneller-3">
                    <input type="radio" id="zeit-3-schneller-3" name="zeit-3-schneller" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="zeit-3-schneller-4">
                    <input type="radio" id="zeit-3-schneller-4" name="zeit-3-schneller" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="zeit-3-schneller-5">
                    <input type="radio" id="zeit-3-schneller-5" name="zeit-3-schneller" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich empfand die Ladezeit zwischen den Aufgabenteilen als angenehm.</p>
                  <label for="wartezeit-3-gut-1">
                    <input type="radio" id="wartezeit-3-gut-1" name="wartezeit-3-gut" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="wartezeit-3-gut-2">
                    <input type="radio" id="wartezeit-3-gut-2" name="wartezeit-3-gut" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="wartezeit-3-gut-3">
                    <input type="radio" id="wartezeit-3-gut-3" name="wartezeit-3-gut" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="wartezeit-3-gut-4">
                    <input type="radio" id="wartezeit-3-gut-4" name="wartezeit-3-gut" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="wartezeit-3-gut-5">
                    <input type="radio" id="wartezeit-3-gut-5" name="wartezeit-3-gut" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Durch die Wartezeit war ich bei der Bearbeitung der Aufgaben langsamer und unkonzentrierter.</p>
                  <label for="wartezeit-3-unkonzentriert-1">
                    <input type="radio" id="wartezeit-3-unkonzentriert-1" name="wartezeit-3-unkonzentriert" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="wartezeit-3-unkonzentriert-2">
                    <input type="radio" id="wartezeit-3-unkonzentriert-2" name="wartezeit-3-unkonzentriert" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="wartezeit-3-unkonzentriert-3">
                    <input type="radio" id="wartezeit-3-unkonzentriert-3" name="wartezeit-3-unkonzentriert" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="wartezeit-3-unkonzentriert-4">
                    <input type="radio" id="wartezeit-3-unkonzentriert-4" name="wartezeit-3-unkonzentriert" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="wartezeit-3-unkonzentriert-5">
                    <input type="radio" id="wartezeit-3-unkonzentriert-5" name="wartezeit-3-unkonzentriert" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ich denke ich sollte mir mehr Zeit für die Bearbeitung der Aufgaben nehmen.</p>
                  <label for="zeit-3-langsamer-1">
                    <input type="radio" id="zeit-3-langsamer-1" name="zeit-3-langsamer" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="zeit-3-langsamer-2">
                    <input type="radio" id="zeit-3-langsamer-2" name="zeit-3-langsamer" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="zeit-3-langsamer-3">
                    <input type="radio" id="zeit-3-langsamer-3" name="zeit-3-langsamer" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="zeit-3-langsamer-4">
                    <input type="radio" id="zeit-3-langsamer-4" name="zeit-3-langsamer" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="zeit-3-langsamer-5">
                    <input type="radio" id="zeit-3-langsamer-5" name="zeit-3-langsamer" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  
                  <p>Ich fühlte mich bei der Bearbeitung der Aufgaben seit dem letzten Fragenbogen im 'Flow', wie in einem Rauschzustand mit starkem Fokus auf der Suche nach einem Target.</p>
                  <label for="flow-3-1">
                    <input type="radio" id="flow-3-1" name="flow-3" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="flow-3-2">
                    <input type="radio" id="flow-3-2" name="flow-3" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="flow-3-3">
                    <input type="radio" id="flow-3-3" name="flow-3" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="flow-3-4">
                    <input type="radio" id="flow-3-4" name="flow-3" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="flow-3-5">
                    <input type="radio" id="flow-3-5" name="flow-3" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  <p>Ohne die Wartezeit hätte ich die Aufgaben schneller und konzentrierter bearbeitet.</p>
                  <label for="wartezeit-3-keinekonzentration-1">
                    <input type="radio" id="wartezeit-3-keinekonzentration-1" name="wartezeit-3-keinekonzentration" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="wartezeit-3-keinekonzentration-2">
                    <input type="radio" id="wartezeit-3-keinekonzentration-2" name="wartezeit-3-keinekonzentration" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="wartezeit-3-keinekonzentration-3">
                    <input type="radio" id="wartezeit-3-keinekonzentration-3" name="wartezeit-3-keinekonzentration" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="wartezeit-3-keinekonzentration-4">
                    <input type="radio" id="wartezeit-3-keinekonzentration-4" name="wartezeit-3-keinekonzentration" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="wartezeit-3-keinekonzentration-5">
                    <input type="radio" id="wartezeit-3-keinekonzentration-5" name="wartezeit-3-keinekonzentration" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  
                  <p>Die Ladezeit zwischen den Aufgabenteilen empfand ich als unangenehm.</p>
                  <label for="wartezeit-3-schlecht-1">
                    <input type="radio" id="wartezeit-3-schlecht-1" name="wartezeit-3-schlecht" value="1" class="pflichtfeld">
                    Stimme überhaupt nicht zu
                  </label>
                  <label for="wartezeit-3-schlecht-2">
                    <input type="radio" id="wartezeit-3-schlecht-2" name="wartezeit-3-schlecht" value="2" class="pflichtfeld">
                    Stimme nicht zu
                  </label>
                  <label for="wartezeit-3-schlecht-3">
                    <input type="radio" id="wartezeit-3-schlecht-3" name="wartezeit-3-schlecht" value="3" class="pflichtfeld">
                    Teils / Teils
                  </label>
                  <label for="wartezeit-3-schlecht-4">
                    <input type="radio" id="wartezeit-3-schlecht-4" name="wartezeit-3-schlecht" value="4" class="pflichtfeld">
                    Stimme zu
                  </label>
                  <label for="wartezeit-3-schlecht-5">
                    <input type="radio" id="wartezeit-3-schlecht-5" name="wartezeit-3-schlecht" value="5" class="pflichtfeld">
                    Stimme völlig zu
                  </label>

                  
                  <hr>
                  <label for="zeit-3-bearbeitung">Ich denke ich habe für die Bearbeitung aller Aufgaben seit dem letzten Fragebogen (ohne Ladezeit) ungefähr so viele Sekunden gebraucht: (Pflichtfeld)
                    <input type="text" name="zeit-3-bearbeitung" id="zeit-3-bearbeitung" value="" class="pflichtfeld"/></label>
                    <br>
                  <label for="zeit-3-warten">Ich schätze ich hab durchschnittlich ungefähr so viele Sekunden zwischen den Aufgabenteilen gewartet: (Pflichtfeld)
                    <input type="text" name="zeit-3-warten" id="zeit-3-warten" value="" class="pflichtfeld"/></label>
                    <br>
                    <div class="inputwarnung" style="display:none"><b>Bitte fülle alle Pflichtfelder aus um fortzufahren.</b></div>

              <button type="button" onclick="nextPage(false); fillTimeInputs();"><span>Alles klar!</span></button>
            </div>
          </div>

          <div id="Finale" class="page" style="display: none;">
            <h1>Finaler Fragebogen</h1>
            <h3>Jetzt ist es geschafft.</h3>
            <p><b>Vielen Dank, dass du bis hierhin durchgehalten hast.</b> Wirklich.</p>
              
            <p>Zur Validierung des Experiments selber brauche ich noch ein letztes Mal deine Aufmerksamkeit.</p>
            <hr>
            <h3>Wie sehr stimmst du den folgenden Aussagen - in Bezug auf dich – zu? (Pflichtfelder)</h3>

            <p>Ich habe die Aufgabe verstanden und konnte sie bearbeiten.</p>
            <label for="finale-aufgabe-1">
              <input type="radio" id="finale-aufgabe-1" name="finale-aufgabe" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="finale-aufgabe-2">
              <input type="radio" id="finale-aufgabe-2" name="finale-aufgabe" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="finale-aufgabe-3">
              <input type="radio" id="finale-aufgabe-3" name="finale-aufgabe" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="finale-aufgabe-4">
              <input type="radio" id="finale-aufgabe-4" name="finale-aufgabe" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="finale-aufgabe-5">
              <input type="radio" id="finale-aufgabe-5" name="finale-aufgabe" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>

            <p>Ich bin bis zum Ende des Experiments konzentriert geblieben und habe mich während der Bearbeitung der Aufgaben nicht ablenken lassen.</p>
            <label for="finale-ausdauer-1">
              <input type="radio" id="finale-ausdauer-1" name="finale-ausdauer" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="finale-ausdauer-2">
              <input type="radio" id="finale-ausdauer-2" name="finale-ausdauer" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="finale-ausdauer-3">
              <input type="radio" id="finale-ausdauer-3" name="finale-ausdauer" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="finale-ausdauer-4">
              <input type="radio" id="finale-ausdauer-4" name="finale-ausdauer" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="finale-ausdauer-5">
              <input type="radio" id="finale-ausdauer-5" name="finale-ausdauer" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>

            <p>Ich hatte während des Experiments keine technischen Probleme.</p>
            <label for="finale-technik-1">
              <input type="radio" id="finale-technik-1" name="finale-technik" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="finale-technik-2">
              <input type="radio" id="finale-technik-2" name="finale-technik" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="finale-technik-3">
              <input type="radio" id="finale-technik-3" name="finale-technik" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="finale-technik-4">
              <input type="radio" id="finale-technik-4" name="finale-technik" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="finale-technik-5">
              <input type="radio" id="finale-technik-5" name="finale-technik" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>
            <hr>
            <p>Mit dem Experiment möchte ich die <b>psychischen Effekte unterschiedlicher Visualisierungen von Wartezeiten</b> untersuchen. Die wechselnden Ladebalken zwischen den Aufgabenteilen sollen unterschiedliche Reaktionen bei dir hervorrufen.</p>
            <hr>
            <p>Ich habe während des Experiments realisiert, dass es um die unterschiedlichen Visualisierungen und deren Effekt ging und meine Antworten von dieser Erkenntnis beeinflussen lassen.</p>
            <label for="finale-bias-1">
              <input type="radio" id="finale-bias-1" name="finale-bias" value="1" class="pflichtfeld">
              Stimme überhaupt nicht zu
            </label>
            <label for="finale-bias-2">
              <input type="radio" id="finale-bias-2" name="finale-bias" value="2" class="pflichtfeld">
              Stimme nicht zu
            </label>
            <label for="finale-bias-3">
              <input type="radio" id="finale-bias-3" name="finale-bias" value="3" class="pflichtfeld">
              Teils / Teils
            </label>
            <label for="finale-bias-4">
              <input type="radio" id="finale-bias-4" name="finale-bias" value="4" class="pflichtfeld">
              Stimme zu
            </label>
            <label for="finale-bias-5">
              <input type="radio" id="finale-bias-5" name="finale-bias" value="5" class="pflichtfeld">
              Stimme völlig zu
            </label>
            <p>Optional, wäre aber hilfreich: Dein Kommentar oder deine Anmerkung zu den unterschiedlichen Visualisierungen der Wartezeit.</p>
            <p>Hat dir die statische Ladeanzeige, die Prozentanzeige oder das Minispiel besser gefallen? Welchen Ladebalken begegnest du gerne im digitalen Raum? Kennst du gut gestaltete analoge Wartezeiten?</p>
            <textarea id="finale-ladebalken" name="finale-ladebalken" style="width:100%" value=" "></textarea>
            <hr>
            <p>Zu guter Letzt noch ein abschließendes Danke. Solltest du Anmerkungen zu dem Experiment haben (z.B. welche technischen Probleme du hattest, falls welche aufraten), mir etwas mitteilen möchten oder deinem Frust Gehör verschaffen wollen, ist dies dein Feld. Gerne kannst du auch deine E-Mail in das Feld eintragen, wenn ich im Gegenzug dir bei einer Studie helfen kann. (Bitte beachte, dass ich deine Antworten dadurch dir zuordnen kann)</p>
            
            <textarea id="finale-notes" name="finale-notes" style="width:100%" value=" "></textarea>

            <button type="submit">Fertig!</button>
          </div>
        </div>
        <input type="hidden" id="flowgamescore" name="flowgamescore">

        <input type="hidden" id="loadertype01" name="loadertype01" class="loaderInput">
        <input type="hidden" id="loadertype02" name="loadertype02" class="loaderInput">
        <input type="hidden" id="loadertype03" name="loadertype03" class="loaderInput">

        <input type="hidden" id="01-01-01-time" name="01-01-01-time" class="timeInput">
        <input type="hidden" id="01-01-02-time" name="01-01-02-time" class="timeInput">
        <input type="hidden" id="loesung-01-01-time" name="loesung-01-01-time" class="timeInput">
        <input type="hidden" id="01-02-01-time" name="01-02-01-time" class="timeInput">
        <input type="hidden" id="01-02-02-time" name="01-02-02-time" class="timeInput">
        <input type="hidden" id="loesung-01-02-time" name="loesung-01-02-time" class="timeInput">
        <input type="hidden" id="01-03-01-time" name="01-03-01-time" class="timeInput">
        <input type="hidden" id="01-03-02-time" name="01-03-02-time" class="timeInput">
        <input type="hidden" id="loesung-01-03-time" name="loesung-01-03-time" class="timeInput">
        <input type="hidden" id="01-04-01-time" name="01-04-01-time" class="timeInput">
        <input type="hidden" id="01-04-02-time" name="01-04-02-time" class="timeInput">
        <input type="hidden" id="loesung-01-04-time" name="loesung-01-04-time" class="timeInput">
        <input type="hidden" id="01-05-01-time" name="01-05-01-time" class="timeInput">
        <input type="hidden" id="01-05-02-time" name="01-05-02-time" class="timeInput">
        <input type="hidden" id="loesung-01-05-time" name="loesung-01-05-time" class="timeInput">

        <input type="hidden" id="fragebogen-01-time" name="fragebogen-01-time" class="timeInput">

        <input type="hidden" id="02-01-01-time" name="02-01-01-time" class="timeInput">
        <input type="hidden" id="02-01-02-time" name="02-01-02-time" class="timeInput">
        <input type="hidden" id="loesung-02-01-time" name="loesung-02-01-time" class="timeInput">
        <input type="hidden" id="02-02-01-time" name="02-02-01-time" class="timeInput">
        <input type="hidden" id="02-02-02-time" name="02-02-02-time" class="timeInput">
        <input type="hidden" id="loesung-02-02-time" name="loesung-02-02-time" class="timeInput">
        <input type="hidden" id="02-03-01-time" name="02-03-01-time" class="timeInput">
        <input type="hidden" id="02-03-02-time" name="02-03-02-time" class="timeInput">
        <input type="hidden" id="loesung-02-03-time" name="loesung-02-03-time" class="timeInput">
        <input type="hidden" id="02-04-01-time" name="02-04-01-time" class="timeInput">
        <input type="hidden" id="02-04-02-time" name="02-04-02-time" class="timeInput">
        <input type="hidden" id="loesung-02-04-time" name="loesung-02-04-time" class="timeInput">
        <input type="hidden" id="02-05-01-time" name="02-05-01-time" class="timeInput">
        <input type="hidden" id="02-05-02-time" name="02-05-02-time" class="timeInput">
        <input type="hidden" id="loesung-02-05-time" name="loesung-02-05-time" class="timeInput">

        <input type="hidden" id="fragebogen-02-time" name="fragebogen-02-time" class="timeInput">

        <input type="hidden" id="03-01-01-time" name="03-01-01-time" class="timeInput">
        <input type="hidden" id="03-01-02-time" name="03-01-02-time" class="timeInput">
        <input type="hidden" id="loesung-03-01-time" name="loesung-03-01-time" class="timeInput">
        <input type="hidden" id="03-02-01-time" name="03-02-01-time" class="timeInput">
        <input type="hidden" id="03-02-02-time" name="03-02-02-time" class="timeInput">
        <input type="hidden" id="loesung-03-02-time" name="loesung-03-02-time" class="timeInput">
        <input type="hidden" id="03-03-01-time" name="03-03-01-time" class="timeInput">
        <input type="hidden" id="03-03-02-time" name="03-03-02-time" class="timeInput">
        <input type="hidden" id="loesung-03-03-time" name="loesung-03-03-time" class="timeInput">
        <input type="hidden" id="03-04-01-time" name="03-04-01-time" class="timeInput">
        <input type="hidden" id="03-04-02-time" name="03-04-02-time" class="timeInput">
        <input type="hidden" id="loesung-03-04-time" name="loesung-03-04-time" class="timeInput">
        <input type="hidden" id="03-05-01-time" name="03-05-01-time" class="timeInput">
        <input type="hidden" id="03-05-02-time" name="03-05-02-time" class="timeInput">
        <input type="hidden" id="loesung-03-05-time" name="loesung-03-05-time" class="timeInput">

        <input type="hidden" id="fragebogen-03-time" name="fragebogen-03-time" class="timeInput">
    
      </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/measures.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/aufgabe.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/master.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/flowgame.js"></script>
  </body>
</html>
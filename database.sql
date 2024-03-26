CREATE DATABASE IF NOT EXISTS partyhouse DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;

use partyhouse;

CREATE TABLE IF NOT EXISTS `users` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    dateofbirth DATE NOT NULL,
    permission INT NOT NULL default 0
);

CREATE TABLE IF NOT EXISTS `style` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    stylename VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS `flats` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    city VARCHAR(255) NOT NULL,
    street VARCHAR(255) NOT NULL,
    number VARCHAR(255) NOT NULL,
    floorDoor VARCHAR(255),
    description VARCHAR(255) NOT NULL,
    price VARCHAR(255) NOT NULL,
    user_id INT NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    style_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (style_id) REFERENCES style(id)
);

CREATE TABLE IF NOT EXISTS `messages` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    message VARCHAR(255) NOT NULL,
    sender_id INT NOT NULL,
    receiver_id INT NOT NULL,
    date DATETIME NOT NULL,
    FOREIGN KEY (sender_id) REFERENCES users(id),
    FOREIGN KEY (receiver_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS `flatsimgs` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    img VARCHAR(255) NOT NULL,
    flat_id INT NOT NULL,
    FOREIGN KEY (flat_id) REFERENCES flats(id)
);

CREATE TABLE IF NOT EXISTS `reservations`(
    id INT PRIMARY KEY AUTO_INCREMENT,
    flat_id INT NOT NULL,
    user_id INT NOT NULL,
    status VARCHAR(255) NOT NULL,
    FOREIGN KEY (flat_id) REFERENCES flats(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS `reportsreservation`(
    id INT PRIMARY KEY AUTO_INCREMENT,
    flat_id INT NOT NULL,
    user_id INT NOT NULL,
    description TEXT NOT NULL,
    FOREIGN KEY (flat_id) REFERENCES flats(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

INSERT INTO
    `style`(`stylename`, `description`)
VALUES
    (
        'Tea house',
        'Ez a bájos vidéki birtokot, amely tökéletes a nyugodt és elegáns összejövetelekhez!

Hagyományos Tervezés: Kőfalak és fa gerendák.
Rusztikus Belső Tér: Ízlésesen berendezve, kiváló hangrendszerrel és lágy világítással.
Tágas Étkező és Hangulatos Kandalló: Ideális hely a baráti vagy családi összejövetelekhez.
Nagy Kert Természetes Tóval: Kültéri ülőhelyekkel, tökéletes a szabadban történő kikapcsolódáshoz.
Válaszd ezt a birtokot, hogy eseményed nyugodt és stílusos vidéki hangulatban teljen!'
    );

INSERT INTO
    `style`(`stylename`, `description`)
VALUES
    (
        'luxury house',
        'Tágas, Ultra-modern Tér: Ideális partik és társasági események számára.
Látványos Belső: Korszerű hangrendszer, LED világítás és táncparkett.
Exkluzív Kültéri Szórakozás: Saját kert, bár és úszómedence.
Impozáns Design: Elegáns és stílusos, kiemelkedik a többi közül.
Válaszd ezt a parti házat, és biztosítsd, hogy eseményed emlékezetes és stílusos legyen!'
    );

INSERT INTO
    `style`(`stylename`, `description`)
VALUES
    (
        'party house',
        'Luxus Belső Tér: Pompás bútorokkal berendezve, professzionális hangrendszerrel, hangulatvilágítással és jól felszerelt DJ-pulttal.
Káprázatos Kültéri Létesítmények: Gyönyörűen rendezett kert, szabadtéri színpad, nagy úszómedence és medencemelletti bár.
Fenséges Építészet: Grandiózus és méltóságteljes, ideális high-end partik és elit rendezvények számára.
Válassz ezt a kastélyt, hogy eseményed igazán fényűző és felejthetetlen legyen!'
    );

INSERT INTO
    `style`(`stylename`, `description`)
VALUES
    (
        'Beach house',
        'Ez a stílusos tengerparti parti villa, amely tökéletes helyszín a vidám tengerparti bulikhoz és eseményekhez!

Modern, Nyitott Design: Padlótól mennyezetig érő ablakokkal, lenyűgöző óceánra néző kilátással.
Stílusos Belső Tér: Laza tengerparti témájú dekorációval, minőségi hangrendszerrel és hangulatvilágítással.
Tágas Kültéri Terület: Végtelenített medencével, kültéri lounge területekkel és bárral.
Sima és Kortárs Építészet: Ideális helyszín a tengerparti ünneplésekhez és összejövetelekhez.
Válassz ezt a villát, hogy eseményed különleges és emlékezetes legyen a tengerparti hangulattal!
'
    );

INSERT INTO
    `style`(`stylename`, `description`)
VALUES
    (
        'elegant house',
        'Ipari, Mégis Elegáns Design: Kitett téglafalakkal és magas mennyezetekkel.
Művészi Belső Tér: Modern és vintage elemek keverékével, kiváló hangrendszerrel és hangulatvilágítással.
Hangulatos Lounge Terület: Bárral, tökéletes társalgóhely a vendégek számára.
Tetőterasz a Városi Látvánnyal: Kényelmes ülőhelyekkel és kültéri hangrendszerrel.
Válaszd ezt a loftot, hogy eseményed elegáns és trendi városi hangulatban teljen!
'
    );

INSERT INTO
    `style`(`stylename`, `description`)
VALUES
    (
        'Barbie house',
        '  Ünnepeld a különleges alkalmakat egyedi és stílusos környezetben! Kínáljuk neked a lehetőséget, hogy egy pillanatra átlépj a hétköznapokból, és élvezd a szórakozás varázsát a Barbie stílusú házainkban. Ezek a rózsaszín csajos oázisok tökéletesek baráti összejövetelekhez, lánybúcsúkhoz, születésnapokhoz vagy bármilyen ünnepi alkalomhoz.

Szórakozz és pihenj a kényelmes berendezésű szobáinkban, ahol minden részlet a Barbie világ elbűvölő stílusát tükrözi. A modern és divatos kialakítású házakban minden adott a szórakozáshoz és a kényelemhez. Legyen szó exkluzív koktélbárunkról vagy a hangulatos teraszról, ahol a csillagok alatt ünnepelhetsz, a Barbie Házak garantáltan emlékezetessé teszik az eseményeidet.
'
    );
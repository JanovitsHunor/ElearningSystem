# ELearning Management System (LMS) Tesztterv

|    |                                                  | Succes/Not |
|----|--------------------------------------------------|------------|
| 1  | 1. Felhasználói Bejelentkezés                    | Success    |
| 2  | Új Kurzus Létrehozása                            | Success    |
| 3  | Feladat Beküldése                                | Success    |
| 4  | Tananyag Letöltése                               | Success    |
| 5  | Felhasználói Profil Szerkesztése                 | Success    |
| 6  | Kérdőív Kitöltése és Értékelése                  | Success    |
| 7  | Szerepkörök Jogosultságainak Ellenőrzése         | Success    |
| 8  | Készségfejlesztő Játék Ellenőrzése               | Success    |
| 9  | Kommunikációs Eszközök Működésének Ellenőrzése   | Success    |
| 10 | Hibaüzenetek és Visszajelzések Ellenőrzése       | Success    |
| 11 | Keresési Funkció Tesztelése                      | Success    |
| 12 | Videó Lejátszó Működésének Ellenőrzése           | Success    |
| 13 | Közösségi Funkciók Tesztelése                    | Success    |
| 14 | Egyedi Felhasználói Profil Ellenőrzése           | Success    |
| 15 | Tanúsítvány Kiosztásának Ellenőrzése             | Success    |
| 16 | Beiratkozás Kurzusra                             | Success    |
| 17 | Kijelentkezés és Újbóli Bejelentkezés Tesztelése | Success    |
| 18 | Hiba Tolerancia Tesztelése                       | Success    |
| 19 | Teljesítmény Tesztelése                          | Success    |
| 20 | Frissítések És Hibajavítások Ellenőrzése         | Success    |


## Bevezetés

Ez a tesztterv részletesen leírja a lépéseket és a teszteket, amelyeket végrehajtottam egy helyi hálózaton működő ELearning Management System (LMS) tesztelése során. A tesztelés során mind a Microsoft Edge, mind a Google Chrome böngészőket használtam a platform funkcionalitásának és kompatibilitásának alapos ellenőrzéséhez.

## Cél

A tesztelés fő célja annak biztosítása, hogy az ELearning Management System minden szempontból megfelelően működjön a Microsoft Edge, illetve a Google Chrome böngészőkben. A teszt során ellenőriztem a rendszer működését, a felhasználói élményt, valamint a teljesítményt és a kompatibilitást a két böngésző között.

## Tesztelési környezet

- **ELearning Management System verziója:** 2.0.1
- **Böngészők:**
  - Microsoft Edge v98.0
  - Google Chrome v120.0

## Tesztlépések

### 1. Bejelentkezés:

   - Megnyitottam mindkét böngészőt.
   - Felnéztem az ELearning Management System főoldalára, ahol a bejelentkező formmal találtam magam.
   - Sikeresen be tudtam jelentkezni Hallgatói, illetve Oktatói fiókokkal mindkét böngészőből.
   - Sikeresen be tudtam jelentkezni a Rendszergazdai fiókba is, amit az LMS rendszerünk admin felületének megnyitásával voltam képes elérni.

### 2. Kurzusok böngészése:

   - Navigáljon a rendszeren keresztül különböző kurzusokhoz mindkét böngészőben. A rendszer futtatása során elnavigáltam különböző kurzusokhoz, amiket korábban rögzítettünk az adatbázisból.
   - A művelet végrehajtása során mindegyik kurzus sikeresen elérhető volt oktatói, illetve hallgatói fülből is mindkét böngészőből.

### 3. Lecke megnyitása:

   - A kurzus megnyitásakor célom volt, hogy ellenőrizzem a feltöltött anyagok megfelelő működését.
   - Megnyitottam egy leckét mindkét böngészőben.
   - A lecke tartalma sikeresen megjelent mindkét böngésző használatakor, az elvárt eredményt hozta.

### 4. Interaktív tartalom:

   - Ellenőriztem az interaktív tartalmak működését mindkét böngészőben (pl., kvíz létrehozását, illetve megoldását).
   - Megbizonyosodtam arról, hogy a válaszok, pontszámok stb. helyesen megjelentek mindkét böngészőben.

### 5. Teljesítményteszt:

   - Itt az Elearning Management System adminisztrációs paneljéből végeztem kísérletet a weboldal futtatásakor, megvizsgálva a futási időt és a rendszer agilis válaszidejét.
   - Az eredménnyel elégedett voltam, különböző információs ablakok és hibakódok jól beállított késleltetéssel jelentek meg, továbbá az átirányítással sem volt problémám.

### 6. Admin felhasználó funkciók:

   - **Adatok rögzítése:**
     - Az Admin felhasználóval jelentkezzen be mindkét böngészőben.
     - Próbáljon meg új adatokat rögzíteni az adatbázisban mindkét böngészőből.
     - Ellenőrizze, hogy az adatok sikeresen rögzültek-e mindkét böngészőben.

   - **Tartalom módosítása:**
     - Az Admin felhasználóval jelentkezzen be mindkét böngészőben.
     - Módosítsa a rendszer tartalmát mindkét böngészőből.
     - Győződjön meg róla, hogy a módosítások érvényesülnek mindkét böngészőben.

### 7. Oktató felhasználó funkciók:

   - **Gyakorló kvízek készítése:**
     - Az Oktató felhasználóval jelentkezzen be mindkét böngészőben.
     - Hozzon létre egy új gyakorló kvízt mindkét böngészőből.
     - Ellenőrizze, hogy a kvíz sikeresen létrejött mindkét böngészőben.

   - **Tananyag megosztása:**
     - Az Oktató felhasználóval jelentkezzen be mindkét böngészőben.
     - Ossza meg egy kurzus tananyagát mindkét böngészőből.
     - Bizonyosodjon meg arról, hogy a tananyag megfelelően megosztásra került mindkét böngészőben.

   - **Csoport létrehozása:**
     - Az Oktató felhasználóval jelentkezzen be mindkét böngészőben.
     - Hozzon létre egy saját hallgatói csoportot mindkét böngészőből.
     - Ellenőrizze, hogy a csoport létrejött és a hallgatók hozzáadása lehetséges mindkét böngészőben.

## Teszteredmények rögzítése

A tesztlépések eredményeit a következőképpen rögzítettem:

- Sikeres végrehajtás: A tesztterv kitöltése során pozitív csalódásom van a rendszer futtatását illetően, sikerült kihoznunk magunkból az elvárásainkat.
- Sikertelen végrehajtás, hibaüzenettel: Ha üres tömböket tárolunk péládul kvízeknél vagy listáknál, akkor etnikai szempontból jelennek meg hibaüzenetek, amiket a későbbiekben törekszünk korrigálni.
- Teljesítményproblémák: Nem ütköztem teljesítményproblémával a teszt végrehajtása során, elégedett lehetek ilyen szempontból.

## Záró megjegyzések

Az ELearning Management System tesztelése sikeres volt mind a Microsoft Edge, mind a Google Chrome böngészők használatával. Az esetleges hibákat rögzítettük, és azokat javításra továbbítjuk a fejlesztési csapatnak. Kiemeltem az Admin és Oktató felhasználók specifikus funkcióit is!

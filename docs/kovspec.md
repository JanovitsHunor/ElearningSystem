# Elearning Kezelőrendszer Követelményspecifikáció

## Bevezetés

Az E-Learning Kezelőrendszer (LMS) kifejlesztéséhez szükség van egy alapos bevezetésre, amely bemutatja az LMS rendszer céljait és a projekttel kapcsolatos általános kontextust. A bevezetés kulcsfontosságú információkat tartalmaz a projekt hátteréről és céljairól. Az e-learning rendszerek egyre fontosabb szerepet játszanak az oktatásban és a képzési folyamatokban. A digitalizáció térhódításával és az információtechnológia fejlődésével az online tanulás vált az oktatás alapvető részévé. Ez a követelményspecifikáció olyan e-learning rendszert ír le, amely a modern oktatási igényeknek megfelelően készül, és lehetővé teszi a hatékony, hozzáférhető és interaktív tanulást.

Fontos leszögezni, hogy az általunk módosított Elearning Kezelőrendszer (LMS) eredeti forráskódja [itt](https://1sourcecodr.blogspot.com/2022/02/online-elearning-system-in-php-my-sql.html) található meg.

### Cél és Háttér

Az LMS rendszer célja az oktatás modernizálása és az online oktatás elősegítése. Az online oktatás területe az elmúlt években folyamatosan növekszik, és a tanárok és diákok egyre inkább támaszkodnak digitális eszközökre az oktatási tartalmakhoz való hozzáféréshez.

Az LMS rendszer megvalósítása lehetővé teszi a tanároknak, hogy könnyedén hozzanak létre online kurzusokat és kezeljék azokat. A diákok számára pedig lehetővé teszi az interaktív tartalmakhoz való hozzáférést és a távoktatásban való részvételt. Az LMS rendszer segítségével az oktatás és tanulás egyszerűbbé és hozzáférhetőbbé válik.

### Elvárások és Környezet

Az LMS rendszernek a modern oktatási igényekhez kell igazodnia. A következő néhány fontos elvárás és környezeti tényező meghatározza a rendszer tervezését és fejlesztését:

- **Felhasználói Bázis:** Az LMS rendszernek képesnek kell lennie kezelni egy növekvő felhasználói bázist, amely tartalmaz tanárokat és diákokat.

- **Multimédia Tartalom:** A rendszernek támogatnia kell a különböző multimédia tartalmakat, beleértve videókat, PDF fájlokat és interaktív anyagokat.

- **Biztonság:** Az adatvédelem és a rendszerbiztonság kulcsfontosságúak, mivel az oktatási anyagok érzékeny információkat tartalmazhatnak.

- **Felhasználói Élmény:** Az LMS rendszernek felhasználóbarát felülettel kell rendelkeznie, amely lehetővé teszi a könnyű navigációt és a tartalmak könnyű elérését.

- **Támogatás és Karbantartás:** A rendszernek rendelkeznie kell egy támogatási és karbantartási folyamattal a hibák gyors diagnosztizálására és javítására.

### Rendszer Tervezése

Az LMS rendszer tervezése magában foglalja a rendszerkomponensek, funkciók és fejlesztési lépések meghatározását. A tervezés során figyelembe vesszük a felhasználói igényeket és az elvárásokat, és megtervezzük a rendszert, hogy azokat kielégítse.

A következő szakaszokban részletesen ismertetjük az LMS rendszer követelményeit és funkcióit annak érdekében, hogy a rendszer hatékonyan megfeleljen az oktatási céloknak és a felhasználói elvárásoknak.


## Általános Követelmények

Az E-Learning Kezelőrendszer (LMS) kifejlesztéséhez és üzemeltetéséhez az alábbi általános követelményeknek megfelelően kell eljárni. Ezek a követelmények biztosítják, hogy a rendszer hatékonyan működjön és megfeleljen a felhasználói igényeknek.

### Alkalmazhatóság

- Az LMS rendszernek több platformon kell működnie, beleértve a böngészőket és mobil eszközöket. Az alkalmazásnak reszponzív dizájnnal kell rendelkeznie, hogy különböző képernyőméreteken is hatékonyan működjön.

- Az LMS rendszernek támogatnia kell a legelterjedtebb böngészőket és operációs rendszereket, például Chrome, Firefox, Safari és Windows, iOS, Android.

### Felhasználói Regisztráció és Bejelentkezés

- A felhasználói regisztráció és bejelentkezés folyamatának egyszerűnek és biztonságosnak kell lennie. A felhasználóknak egyedi felhasználói neveket és jelszavakat kell választaniuk, és a jelszavaknak titkosítva kell lenniük a biztonság érdekében.

- A jelszó-visszaállítási mechanizmusnak is rendelkezésre kell állnia, ha a felhasználók elfelejtik a jelszavukat.

### Adatvédelem és Biztonság

- Az LMS rendszernek megfelelő adatvédelmi és biztonsági intézkedéseket kell tartalmaznia az adatok védelme érdekében. Az adatoknak titkosítva kell lenniük a tárolás és a kommunikáció során.

- A rendszernek rendelkeznie kell jogosultságkezeléssel, amely lehetővé teszi a felhasználói jogok és hozzáférések szigorú kezelését. A diákok csak az őket megillető tartalmakhoz és funkciókhoz férhetnek hozzá.

### Teljesítmény és Skálázhatóság

- Az LMS rendszernek hatékonyan kell működnie, és el kell viselnie a növekvő felhasználói terhelést. A rendszernek skálázhatónak kell lennie, hogy a növekvő diák- és tanárkapacitást kiszolgálja.

- A tartalom gyors betöltése és az interaktív anyagok zökkenőmentes lejátszása fontos a felhasználói élmény javítása érdekében.

### Támogatás és Karbantartás

- Az LMS rendszernek rendelkeznie kell egy támogatási és karbantartási folyamattal. Fel kell készülnie az esetleges hibák gyors diagnosztizálására és javítására.

- A rendszer karbantartására és frissítésére rendszeresen szükség lehet a biztonság fenntartása és a funkcionalitás javítása érdekében.

- A felhasználói visszajelzéseket és panaszokat hatékonyan kell kezelni a rendszer fejlesztése érdekében.

Ezen általános követelmények betartása biztosítja, hogy az E-Learning Kezelőrendszer (LMS) megbízhatóan működjön, és megfeleljen a felhasználói igényeknek és elvárásoknak.


## Specifikus Követelmények

5. **Tartalomkezelés:**
   - A rendszer támogatja a videók, PDF fájlok és egyéb tartalomformátumok feltöltését és megjelenítését.

6. **Interaktivitás:**
   - A diákok számára lehetőséget nyújt a tartalmak mentésére és offline megtekintésre.
   - Automatikus visszajelzést ad a kvízek és feladatok során, és értékeléseket jelenít meg.

7. **Felhasználói Élmény:**
   - Az interfész felhasználóbarát és könnyen navigálható.
   - Értesítések és naprakész információk nyújtanak a tanároknak és diákoknak.

8. **Biztonság:**
   - Az adatok és felhasználói információk biztonságosan vannak tárolva.
   - A jogosultságkezelés pontos és hatékony.

## Teljesítményelemzés

9. **Diákok Nyomonkövetése:**
   - A rendszer lehetővé teszi a diákok teljesítményének elemzését és követését.
   - Tanárok értékeléseket kaphatnak a diákok munkájáról.

## Kiegészítő Funkciók

10. **Keresés és Kategorizálás:**
    - A rendszer lehetőséget nyújt a kurzusok és tartalmak keresésére, valamint kategorizálásra.

11. **Offline Tartalom:**
    - A diákok letölthetik és offline módban is megtekinthetik a tartalmakat.

Ezen követelményspecifikáció alapján az eLearning kezelőrendszer célja egy modern és hatékony tanulási környezet kialakítása, ahol a tanárok könnyedén létrehozhatnak tartalmakat, és a diákok interaktív módon tanulhatnak. A rendszer biztonságos és felhasználóbarát élményt nyújt mindkét fél számára.

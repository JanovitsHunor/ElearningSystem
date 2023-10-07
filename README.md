# Áttekintés a projektmunkáról
A célunk, hogy létrehozzunk egy átfogó eLearning platformot, amely megkönnyíti a tanfolyamok létrehozását, a diákok beiratkozását és az egyetemmel kapcsolatos teendőik kezelését, a tartalomszolgáltatást, a tanulók értékelését, előrehaladásának nyomon követését. A rendszer célja az online oktatás fejlesztése azáltal, hogy felhasználóbarát felületeket biztosít az oktatók és a diákok számára.

# Hogyan állítható be a rendszer otthoni eszközökről?

- 1. lépés: Töltse le a "xampp" nevű webszerver-szoftvercsomagot az alábbi elérhetőségen: [Letöltés](https://www.apachefriends.org/download.html)

- 2. lépés: Biztosítson Notepad++ vagy egyéb szövegszerkesztői alkalmazást az eszközén.

- 3. lépés: Töltse le a GitHub könyvtárban lévő állományokat.

- 4. lépés: A "xampp" telepítése után másolja az "elearning" mappát a gyökér könyvtárba, vagy arra a lemezre, ahol a "xampp/htdocs" elérési út található.
 
- 5. lépés: A "xampp" futtatásakor indítsa el az Apache, illetve MySQL modulokat.

- 6. lépés: Nyissa meg a PHPAdmin című weboldalt, melyet az alábbi linkre kattintva tehet meg: [Megnyitás](http://localhost/phpmyadmin)

- 7. lépés: Az oldal megnyitása után hozzon létre egy új adatbázist "elearning" néven, amelyet az Új / New funkcióval tehet meg.

- 8. lépés: Importálja a(z) elearning.sql névvel ellátott állományt a(z) database mappából.

- 9. lépés: Futtassa a "http://localhost/elearning" linket.
 
Bármilyen fennakadás esetén a(z) [Segítség](https://1sourcecodr.blogspot.com/2022/02/online-elearning-system-in-php-my-sql.html) fülön találnak megoldást!

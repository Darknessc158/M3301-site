sqlite3 music.db
sqlite> .read create.sql
sqlite> .separator |
sqlite> .import musicDB.txt music
sqlite> SELECT author FROM music;
sqlite .quit


//inclure dans le controler
require_once('.class.php');
require_once('.class.php');


//Pour aller sur la vue
include('../../view/paiementview/updatePaiement.php');

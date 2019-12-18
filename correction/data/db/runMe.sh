#!/bin/sh
echo "m4_changecom()"
# Création de la base de donnée

rm -f exam.db


################ Q02 : A COMPLETER (DEBUT) ################
# ... m4_divert(-1)

sqlite3 exam.db << END

.read create.sql
.separator |
.import ../products_1K.txt product

.quit
END

#m4_divert(0)


################ Q02 : A COMPLETER (FIN) ################

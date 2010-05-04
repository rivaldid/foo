#!/bin/bash

# GL: a command line interface to garzantilinguistica.it
# Alessio 'mOLOk' Bolognino <themolok@gmail.com>
#
# This is free software.  You may redistribute 
# copies of it under the terms of the GNU 
# General Public License <http://www.gnu.org/licenses/gpl.html>.
# There is NO WARRANTY, to the extent permitted by law.

ver=0.2
url=http://www.garzantilinguistica.it/

#HTTP_PROXY=http://127.0.0.1:8118

if [ ! -r ~/.glrc ]; then
    echo "You have to create ~/.glrc with inside:"
    echo "login=YOUR_USERNAME"
    echo "pass=YOUR_PASSWORD"
    exit -1
else
    source ~/.glrc
fi

which html2text &>/dev/null
if [[ $? != 0 ]]; then
    echo "You have to install html2text ( http://www.mbayer.de/html2text )"
fi

which curl &>/dev/null
if [[ $? != 0 ]]; then
    echo "You have to install curl ( http://curl.haxx.se )"
fi

word="$2"
dict=$1

usage(){
   echo -e "$0 [ ii | ie | ei | if | fi ] word \n"
   echo -e "ii: italian\nie: ita->eng\nei: eng->ita\nif: ita->fra\nfi: fra->ita"
}
itit(){
curl -b .glcookie.tmp -d "s_parola=${word}" ${url}/interna_ita.html
}

iten(){
curl -b .glcookie.tmp -d "s_parola=${word}&s_dizionario=1" ${url}/interna_eng.html
}

enit(){
curl -b .glcookie.tmp -d "s_parola=${word}&s_dizionario=2"  ${url}/interna_eng.html
}

itfr(){
curl -b .glcookie.tmp -d "s_parola=${word}&s_dizionario=1"  ${url}/interna_fra.html
}

frit(){
curl -b .glcookie.tmp -d "s_parola=${word}&s_dizionario=2"  ${url}/interna_fra.html
}

if [[ $# != 2 ]]; then echo -e "ERROR: wrong number of paramenters\n"; usage; exit -2; fi

curl -c .glcookie.tmp $url &>/dev/null
curl -b .glcookie.tmp -d "makelogin=1&login=${login}&password=${pass}" $url &>/dev/null

case $1 in 
   "ii") sc=itit ;;
   "ie") sc=iten ;;
   "ei") sc=enit ;;
   "if") sc=itfr ;;
   "fi") sc=frit ;;
   * ) usage; exit -1;;
esac

$sc 2>/dev/null | gawk '/Lemma/,/\<table/' |html2text | more
#$sc 2>/dev/null > DEBUG
rm -f .glcookie.tmp

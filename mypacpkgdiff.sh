#!/bin/bash
rm ~/temp1
rm ~/temp2
pacman -Q | sort -u | cut -d' ' -f 1 > ~/temp1
~/./pkglist.sh > ~/temp2
diff ~/temp1 ~/temp2

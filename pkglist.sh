#!/bin/bash
#
SEDEXP='s/^\[[^ ]* *[0-9][0-9]:[0-9][0-9]\] \([^ ]*\) *\([^ ]*\) .*/\1 \2/'
GRPEXP='(upgraded)|(installed)'
AWKEXP='{print $2}'
#
sed -e "$SEDEXP" /var/log/pacman.log | grep -E "$GRPEXP" | awk "$AWKEXP" | sort -u
# End
